<?php 
include_once 'util.php'; 
?>

<div class="course-dates">
<? foreach ($courses as $course): ?>
  <div class="course-separator"></div>

  <div class="course-title">
    <h4><?= $course->title ?></h4>
    <span>Kursleitung: <?= $course->instructor ?></span>
  </div>

  <div class="course-date">
    <div><?= formatDate($course->date_start) ?></div>
    <div><small><?= $course->dates[0]->time_start ?>-<?= $course->dates[0]->time_end ?></small></div>
  </div>

  <div class="course-booking">
    <? if ($course->available_space > 0): ?>
      <div><a href="<?= makeSignupUrl($course->id) ?>" class="btn">Anmelden</a></div>
    <? else: ?>
      <div>Ausgebucht</div>
    <? endif; ?>
  </div>
<? endforeach; ?>
</div>
