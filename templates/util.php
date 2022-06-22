<?php

function makeSignupUrl($courseid) {
  $url = 'https://hebammenpraxisoststadt.hebamio.de/anmeldung?reason=course-';
  return $url . $courseid;
}

function loadCourses($save, $loadcache) {
  if ($loadcache) {
    $courses_url = 'https://hebammenpraxisoststadt.hebamio.de/api/courses';
    $details_url = 'https://hebammenpraxisoststadt.hebamio.de/api/course-detail/';
    $apikey = '?api_key=wGsU55aTz2qJ9gMDiiPSzQHZDEFLgsoy5Qgqz84QnlK5kyxymX6bDlymrUeA';

    $courses = json_decode(file_get_contents($courses_url . $apikey));

    $course_details = array();
    foreach ($courses as $course) {
      $url = $details_url . $course->id . $apikey;
      $details = json_decode(file_get_contents($url));

      array_push($course_details, $details);
    }
    if ($save) {
      $json = json_encode($course_details);
      file_put_contents('courses-cache.json', $json);
    }
  } else {
    $course_details = json_decode(file_get_contents('courses-cache.json'));
  }
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
  return $dt->format("H:m");
}
?>
