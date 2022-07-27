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
  "babymassage"  => initCourse('Babymasage', 'Babymassage'),
  "akupunktur" => initCourse('Akupunktur', 'Akupunktur'),
  "notfallkurs" => initCourse('Baby- und Kindernotfallkurs', 'Kindernotfallkurs'),
  "barre" => initCourse('Barré Mom Fit', 'Barr'),
  "mamaworkoutbauch"=> initCourse('Mamaworkout mit Babybauch', 'Mamaworkout mit Babybauch'),
  "mamaworkout" => initCourse('Mamaworkout', 'Mamaworkout'),
  "goodmorning" => initCourse('Good Morning Beckenboden', 'Good Morning Beckenboden'),
  "stillvorbereitung" => initCourse('Stillvorbereitungskurs', 'Stillvorbereitung'),
  "breikost" => initCourse('B(r)eikost Workshop', 'B(r)eikost Workshop'),
  "weitere" => initCourse('Weitere Kurse', '')

);

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

  <p>
    Aufgrund der Covid19-Lage haben wir aktuell unterschiedliche Kursvarianten. 
    Wir bieten Live-Online Kurse über Zoom oder Präsenzkurse in unseren Räumen an. 
    Je nach Pandemiegeschehen kann sich das Format auch mal kurzfristig ändern, dafür bitten wir um Verständnis.
    In unseren Räumen empfehlen wir einen medizinischen MundNasenschutz und erbitten für unsere Kursteilnehmerinnen einen tagesaktuellen Schnelltest (unabhängig vom Geimpft-, oder Genesenenstatus und so lange es die Lage erfordert).
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
