<?php
include_once 'templates/util.php'; 

if (getenv('DOWNLOAD_COURSES')) {
  $courses = loadCourses(False, True);
} else {
  $courses = loadCourses(True, False);
}

$courses_rueckbildung = array();
$courses_babymassage = array();
$courses_vorbereitung = array();
$courses_akupunktur = array();
$courses_notfallkurs = array();
$courses_weitere = array();


foreach ($courses as $course) {
  if (str_contains($course->title, 'Rückbildung'))              { array_push($courses_rueckbildung, $course); }
  else if (str_contains($course->title, 'Babymassage'))         { array_push($courses_babymassage, $course); }
  else if (str_contains($course->title, 'Geburtsvorbereitung')) { array_push($courses_vorbereitung, $course); }
  else if (str_contains($course->title, 'Akupunktur'))          { array_push($courses_akupunktur, $course); }
  else if (str_contains($course->title, 'Kindernotfall'))       { array_push($courses_notfallkurs, $course); }
  else                                                          { array_push($courses_weitere, $course); }
}
?>

<?php 
$title = 'Kursliste';
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

<section id="rueckbildung">
<h2>Rückbildungskurse</h2>

<p>Dies ist die Beschreibung der Rückbildungskurse die wir anbieten.</p>

<h3>Aktuelle Termine</h3>

<?php 
$courses = $courses_rueckbildung;
include 'templates/course_list.php';
?>
</section>


<section id="vorbereitung">
<h2>Geburtsvorbereitung</h2>

<p>
  3 Abende für euch als Schwangere mit dem zweiten (oder weiteren) Kind. 
  Kennenlernen von anderen in ähnlicher Situation, Körperarbeit zur Wahrnehmung der meist nebenherlaufenden Schwangerschaft und zur Vorbereitung auf diese neue Geburt, ein Rückblick auf die letzte Geburt und ein Einstimmen auf die Zeit mit mehreren Kindern zuhause Wir empfehlen auf Grund der aktuellen Covid-19 Lage eine medizinische Maske in unseren Räumlichkeiten und erbitten einen tagesaktuellen Schnelltest.
</p>

<h3>Aktuelle Termine</h3>

<?php 
$courses = $courses_vorbereitung;
include 'templates/course_list.php';
?>
</section>


<section id="babymassage">
<h2>Babymassage</h2>

<p>Dies ist die Beschreibung der Babymassage die wir anbieten.</p>

<h3>Aktuelle Termine</h3>

<?php 
$courses = $courses_babymassage;
include 'templates/course_list.php';
?>
</section>
 

<section id="akupunktur">
<h2>Akupunktur</h2>

<p>Dies ist die Beschreibung der Akupunktur die wir anbieten.</p>

<h3>Aktuelle Termine</h3>

<?php 
$courses = $courses_akupunktur;
include 'templates/course_list.php';
?>
</section>


<section id="notfallkurs">
  <h2>Baby- und Kindernotfallkurs</h2>

  <p>Dies ist die Beschreibung der Akupunktur die wir anbieten.</p>

  <h3>Aktuelle Termine</h3>

  <?php 
    $courses = $courses_notfallkurs;
    include 'templates/course_list.php';
  ?>
</section>


<section id="weitere">
<h2>Weitere Kurse</h2>

<h3>Aktuelle Termine</h3>

<?php 
$courses = $courses_weitere;
include 'templates/course_list.php';
?>
</section>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>
