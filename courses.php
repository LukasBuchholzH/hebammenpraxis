<?php
include_once 'templates/util.php'; 

if (getenv('DOWNLOAD_COURSES')) {
  $courses = loadCourses(False, True);
} else {
  $courses = loadCourses(False, False);
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
  //"barre" => initCourse('Barré Mom Fit', 'Barr'),
  "mamaworkoutbauch"=> initCourse('Mamaworkout mit Babybauch', 'Mamaworkout mit Babybauch'),
  "mamaworkoutindoor" => initCourse('Funktionelles Mamaworkout indoor', 'Mamaworkout indoor'),
  "mamaworkout" => initCourse('Mamaworkout', 'Mamaworkout'),
  //"goodmorning" => initCourse('Good Morning Beckenboden', 'Good Morning Beckenboden'),
  "sportkurs" => initCourse('Mom & Fitness - Das Bodyworkout', 'Mom & Fitness'),
  "stillvorbereitung" => initCourse('Stillvorbereitungskurs', 'Stillvorbereitung'),
  "breikost" => initCourse('B(r)eikost Workshop', 'B(r)eikost'),
  "windel" => initCourse('Stoffwindel-Workshop', 'Stoffwindel-Workshop'),
  "yoga" => initCourse('Hatha Yoga Flow für Schwangere', 'Hatha Yoga Flow für Schwangere'),
  "yogaMitKind" => initCourse('Yoga mit Kind', 'Yoga mit Kind'),
  //"bodyandsoul" => initCourse('Body and Soul', 'Body and Soul'),
  "laufkurs" => initCourse('Laufkurs für Mütter', 'Laufkurs'),
  "trage" => initCourse('Trage-Workshop', 'Trage-Workshop'),
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
    "title" => "Hatha Yoga Flow für Schwangere",
    "instructor" => "Ivonne Scharff",
    "location" => (object) array("description" => "Hebammenpraxis Oststadt"),
    "price" => 135,
    "price_addendum" => " - Erstattungsfähig über die Krankenkassen",
    "price_partner" => 0,
    "date_start" => $start_date,
    "date_end" => $end_date,
    "dates" => $dates,
    "email" => "kontakt.yogatime@gmail.com"
  );
}

function customYogaMitKind($num_dates, $start_date, $end_date, $time_start, $time_end) {
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
    "title" => "Yoga mit Kind",
    "instructor" => "Ivonne Scharff",
    "location" => (object) array("description" => "Hebammenpraxis Oststadt"),
    "price" => 140,
    "price_addendum" => " - Erstattungsfähig über die Krankenkassen",
    "price_partner" => 0,
    "date_start" => $start_date,
    "date_end" => $end_date,
    "dates" => $dates,
    "email" => "kontakt.yogatime@gmail.com"
  );
}

function customWindelCourse($num_dates, $start_date, $end_date, $time_start, $time_end) {
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
    "title" => "Stoffwindel-Workshop",
    "instructor" => "Isabell Bauer",
    "location" => (object) array("description" => "Hebammenpraxis Oststadt"),
    "price" => 35,
    "price_couple" => 55,
    "date_start" => $start_date,
    "date_end" => $end_date,
    "dates" => $dates,
    "link" => "https://gluecklichwickeln.de/anmeldung-workshop/"
  );
}

function customTrage($num_dates, $start_date, $end_date, $time_start, $time_end) {
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
    "title" => "Trage-Workshop",
    "instructor" => "Lara Holldorf",
    "location" => (object) array("description" => "Hebammenpraxis Oststadt"),
    "price" => 40,
    "price_addendum" => " pro Familie",
    "date_start" => $start_date,
    "date_end" => $end_date,
    "dates" => $dates,
    "link" => "https://trageberatung-weinheim.de"
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
