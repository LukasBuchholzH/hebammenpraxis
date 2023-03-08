<?php
include_once 'templates/util.php'; 

if (getenv('DOWNLOAD_COURSES')) {
  $courses = loadCourses(False, True);
} else {
  $courses = loadCourses(True, False);
}

function initCourse($title, $keyword) {
  return array(
    "title" => $title,
    "keyword" => $keyword,
    "courses" => array());
}

$courselist = array(
  "rueckbildung" => initCourse('Rückbildungskurse', 'Rückbildung'),
  "geburtsvorbereitung" => initCourse('Geburtsvorbereitung', 'Geburtsvorbereitung'),
  "babymassagepapa" => initCourse('Babymassage - Papaedition', 'Babymassage - Papaedition'),
  "babymassage"  => initCourse('Babymasage', 'Babymassage'),
  "akupunktur" => initCourse('Akupunktur', 'Akupunktur'),
  "notfallkurs" => initCourse('Baby- und Kindernotfallkurs', 'Kindernotfallkurs'),
  "barre" => initCourse('Barré Mom Fit', 'Barr'),
  "mamaworkoutbauch"=> initCourse('Mamaworkout mit Babybauch', 'Mamaworkout mit Babybauch'),
  "mamaworkout" => initCourse('Mamaworkout', 'Mamaworkout'),
  "goodmorning" => initCourse('Good Morning Beckenboden', 'Good Morning Beckenboden'),
  "stillvorbereitung" => initCourse('Stillvorbereitungskurs', 'Stillvorbereitung'),
  "breikost" => initCourse('B(r)eikost Workshop', 'B(r)eikost'),
  "yoga" => initCourse('Babybauch - Yoga für Schwangere', 'Babybauch Yoga für Schwangere mit Ivonne'),
  "bodyandsoul" => initCourse('Body and Soul', 'Body and Soul'),
  "weitere" => initCourse('Weitere Kurse', '')
);

function customYogaCourse($num_dates, $start_date, $end_date, $time_start, $time_end) {
  $start = (object) array(
    "date" => $start_date,
    "description" => "",
    "time_start" => $time_start,
    "time_end" => $time_end
  );
  $end = (object) array(
    "date" => $end_date,
    "description" => "",
    "time_start" => $time_start,
    "time_end" => $time_end
  );

  $dates = array();
  for ($i = 0; $i < $num_dates - 1; $i++) {
    array_push($dates, $start);
  }
  array_push($dates, $end);

  return (object) array(
    "title" => "Babybauch Yoga für Schwangere mit Ivonne",
    "instructor" => "Yvonne Scharff",
    "location" => (object) array("description" => "Hebammenpraxis Oststadt"),
    "price" => 120,
    "price_partner" => 0,
    "date_start" => $start_date,
    "date_end" => $end_date,
    "dates" => $dates,
    "email" => "kontakt.yogatime@gmail.com"
  );
}


foreach ($courses as $course) {
  foreach (array_keys($courselist) as $courseid) {
    $keyword = $courselist[$courseid]['keyword'];
    if (str_contains($course->title, $keyword)) {
      array_push($courselist[$courseid]['courses'], $course);
      break;
    }
  }
}

// Add fixed courses
array_push($courselist['yoga']['courses'], customYogaCourse(7, "2023-03-18", "2023-05-06", "16:00:00", "17:00:00"));
?>

<?php 
$title = 'Kursliste';
$description = 'In der Hebammenpraxis Oststadt bieten wir zahlreiche Kurse an, von Geburtsvorbereitung bis zur Rückbildungsgymnastik.';
include 'templates/head.php';
?>

<?php include 'templates/navbar.php'; ?>

<main>

<section>
  <img src="img/courses.webp" width="100%">

  <h1>Kursliste</h1>

  <p>
    Aufgrund der Covid19-Lage haben wir aktuell unterschiedliche Kursvarianten. 
    Wir bieten Live-Online Kurse über Zoom oder Präsenzkurse in unseren Räumen an. 
    Je nach Pandemiegeschehen kann sich das Format auch mal kurzfristig ändern, dafür bitten wir um Verständnis.
    In unseren Räumen besteht eine <b>FFP-2</b> Maskenpflicht und wir erbitten für unsere Kursteilnehmerinnen einen tagesaktuellen Schnelltest (unabhängig vom Geimpft-, oder Genesenenstatus und so lange es die Lage erfordert).
  </p>
</section>

<?php 
  foreach (array_keys($courselist) as $courseid) {
    include "templates/course_list.php";
  }
?>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>
