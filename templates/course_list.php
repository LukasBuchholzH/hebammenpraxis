<?php include_once 'util.php'; ?>

<section id="<?= $courseid ?>" class="course-list">

  <h2><?= $courselist[$courseid]['title'] ?></h2>

  <div class="course-details">
    <?php include 'courses/' . $courseid . '.php'; ?>
  </div>

  <h3>Aktuelle Termine</h3>

  <div class="course-dates">
  <? foreach ($courselist[$courseid]['courses'] as $course): ?>
    <div class="course-separator"></div>

    <div class="course-title">
      <h4><?= $course->title ?></h4>
      <div>Kursleitung: <?= $course->instructor ?></div>
      <?php if ($course->price > 0): ?>
        <div>Kosten: <?= $course->price ?>€</div>
      <?php endif; ?>
      <?php if ($course->price_partner > 0): ?>
        <div>Partnergebühr: <?= $course->price_partner ?>€</div>
      <?php endif; ?>
    </div>

    <div class="course-date">
      <div><nobr><?= formatDate($course->date_start) ?></nobr> - <nobr><?= formatDate($course->date_end) ?></nobr></div>
      <div>
        <?= count($course->dates) ?> Termin<? if (count($course->dates)): ?>e<? endif; ?>
      </div>
      <div><small><?= formatTime($course->dates[0]->time_start) ?>-<?= formatTime($course->dates[0]->time_end) ?></small></div>
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
</section>
