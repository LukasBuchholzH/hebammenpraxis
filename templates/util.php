<?php

function lesserStartDate($c1, $c2) {
  return (new DateTime($c1->date_start) < new DateTime($c2->date_start)) ? -1 : 1;
}

function makeSignupUrl($courseid, $hebamioid) { 
  $url = 'https://hebammenpraxisoststadt.hebamio.de/anmeldung?reason=course-' . $hebamioid;
  return $url;
}

function loadCourses($save, $loadcache) {
    $courses_urls = ['https://hebammenpraxisoststadt.hebamio.de/api/courses', 'https://pischedda.hebamio.de/api/courses'];
    $details_urls = ['https://hebammenpraxisoststadt.hebamio.de/api/course-detail/', 'https://pischedda.hebamio.de/api/course-detail'; ];
    $apikeys = ['?api_key=wGsU55aTz2qJ9gMDiiPSzQHZDEFLgsoy5Qgqz84QnlK5kyxymX6bDlymrUeA','?api_key=psiqZipwOBLIMDPfVlse2xyl7q7ijWSjOd2RdXSjBnoQ01L6F9l8uqDHUIkZ';];

    $course_details = array();

    if ($loadcache) {
         for ($i = 0; $i < count($courses_urls); $i++) {
            $courses = json_decode(file_get_contents($courses_urls[$i] . $apikeys[$i]));
            if (!is_array($courses)) continue; // Fehlerbehandlung

            $counter = 0;

            for ($j = 0; $j < count($courses); $j++) {
                $counter++;
                if ($counter % 45 == 0) {
                    sleep(300);
                }

                $url = $details_urls[$i] . $courses[$j]->id . $apikeys[$i];
                $details = json_decode(file_get_contents($url));
                array_push($course_details, $details);
            }
        }

        if ($save) {
            $json = json_encode($course_details);
            file_put_contents('courses-cache.json', $json);
        }
    } else {
        $course_details = json_decode(file_get_contents('courses-cache.json'));
    }

    uasort($course_details, 'lesserStartDate');

    return $course_details;
}

function germanDay($dayStringEn) {
  switch ($dayStringEn) {
  case "Mon": return "Mo";
  case "Tue": return "Di";
  case "Wed": return "Mi";
  case "Thu": return "Do";
  case "Fri": return "Fr";
  case "Sat": return "Sa";
  case "Sun": return "So";
  }
}

function formatDate($date) {
  $dt = new DateTime($date);
  return germanDay($dt->format("D")) . $dt->format(", d.m.Y");
}

function formatTime($time) {
  $dt = new DateTime($time);
  return $dt->format("H:i");
}
?>
