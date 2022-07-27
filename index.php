<?php
$title = 'Hebammenpraxis Oststadt';
$description = 'Willkommen in der Hebammenpraxis Oststadt in Mannheim. Wir sind vier Hebammen und bieten ein breites Betreuungsangebot.';
include 'templates/head.php';
?>

<?php include 'templates/navbar.php'; ?>

<main>

  <section>
    <a href="team<?= $suffix ?>"><img src="img/team.webp" width="100%"></a>

    <a id="team-link" href="team<?= $suffix ?>"><h1><nobr>Julia Gauweiler</nobr> · <nobr>Katharina Piwecki</nobr> · <nobr>Birgit Fremter</nobr> · <nobr>Maria Winkler</nobr></h1></a>
  </section>

  <section class="landing row">
    <div class="landing-item">
      <h3>Über uns</h3>
      <p>
        Wir bieten kompetente und verlässliche Begleitung in der Schwangerschaft, 
        ob im Kurs oder im persönlichen Einzeltermin. In der Zeit nach der Geburt 
        bieten wir Hausbesuche sowie individuelle Termine in der Praxis, Rückbildung 
        in Kursen oder Einzeltraining an.
      </p>
      <a href="courses<?= $suffix ?>" class="btn">Zur Buchung</a>
    </div>

    <div class="landing-item">
      <h3>Betreuung</h3>
      <p>
        Wir sind alle selbständig tätig und eine von uns kann nach dem Erstgespräch deine 
        persönliche Ansprechpartnerin werden. Wir vertreten uns gegenseitig an den Wochenenden, 
        zu Urlaubs- und Fortbildungszeiten.
      </p>
      <a href="#contact" class="btn">Betreuungsanfragen</a>
    </div>
  </section>

  <section id="contact">
    <h2>Kontakt</h2>      
    <div id="contact-info">

      <p>
        Für Betreuungsanfragen kontaktieren Sie uns bitte per <a href="mailto:info@hebammenpraxis-oststadt.de"><strong>EMail</strong></a>. Wir benötigen folgende Informationen
        von Ihnen:

        <ul>
          <li>Vollständiger Name</li>
          <li>Adresse und Kontaktdaten</li>
          <li>Errechneter Geburtstermin</li>
        </ul>
      </p>

      <p id="email">EMail: info@hebammenpraxis-oststadt.de</p>

      <p id="address">Adresse: Lameystraße 5, 68165 Mannheim</p>
    </div>
  </section>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>
