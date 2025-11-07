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
      <p>
        Wir sind ein Ausbildungsbetrieb. Mehrmals im Jahr begleiten uns Studierende für Hebammenwissenschaften bei unserer Arbeit.
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

  <section id="news">
    <h2>Aktuelles aus der Praxis</h2>
    
<p>Ab sofort bieten wir als eine weitere Leistung eine <a href="leistungen<?= $suffix ?>#leistung-sprechstunde">"offene Sprechstunde"</a> an.</p>
   
    <h3>Betreuungspauschale</h3>
    <p>
      Um die aktuell gestiegenen Kosten decken zu können, sowie Euch weiterhin gut zu begleiten, 
      erheben wir für Betreuungen eine freiwillige Betreuungspauschale von einmalig 80,- Euro pro betreuter Familie. 
    </p>
    <p>
      Diese wird von den Familien gezahlt, die uns so unterstützen möchten, dass wir den hohen Standard unserer Arbeit weiterhin aufrecht erhalten können. 
      Der Wunsch nach einer adäquaten, kontinuierlichen und qualitativ hochwertigen Betreuung liegt dem zugrunde. Die Zahlung der Betreuungspauschale stellt
       kein Betreuungskriterium dar! Wir bieten Betreuung am Wochenende, Feiertagen und Ferien, Erreichbarkeit über Mobiltelefon tagsüber, Vertretung im Krankheitsfall, 
       Urlaub, bei Fortbildung usw. Zur Zeit gibt es kein Entgegenkommen seitens der Krankenkasse bezüglich einer Erhöhung der Hebammengebühren um situationsgerecht 
       in jeder Familie arbeiten zu können. 
    </p>     
    <p>
       Die Pauschale ist freiwillig. Unser Betreungsangebot steht grundsätzlich allen Familien offen, 
       limitierend sind unsere Kapazitäten. 
    </p>
    <p>
       Kontoverbindung für die Betreuungspauschale : IBAN: DE94 6704 0031 0710 5042 00
    </p>
  </section>

  <section id="contact">
    <h2>Kontakt</h2>      
    <div id="contact-info">

      <p>
        Für Betreuungsanfragen kontaktieren Sie uns bitte per <a href="mailto:info@hebammenpraxis-oststadt.de"><strong>Email</strong></a>. Wir benötigen folgende Informationen
        von Ihnen:

        <ul>
          <li>Vollständiger Name</li>
          <li>Adresse und Kontaktdaten</li>
          <li>Errechneter Geburtstermin</li>
        </ul>
      </p>

      <p id="email">Email: info@hebammenpraxis-oststadt.de</p>

      <p id="address">Adresse: Lameystraße 5, 68165 Mannheim</p>
    </div>
  </section>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>





