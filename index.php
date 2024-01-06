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
       Kontoverbindung für die Betreuungspauschale : IBAN: DE79 2004 1177 0248 3733 00
    </p>

    <h3>Neue Kursangebote</h3>

    <ul>
      <li>
        <h4>Babymassage – Papaedition</h4>
        <p>Hier sind alle Papas gefragt: Wenn ein Neugeborenes von Anfang an die Aufmerksamkeit des Vaters erfährt, kann es Vertrauen und eine tragfähige Beziehung zu ihm aufbauen. Die Babymassage – Papaedition bietet allen Väter die Möglichkeit Massagetechniken zu erlernen, die nonverbale Kommunikation zu fördern , Handlungssicherheiten aufzubauen und sich untereinander auszutauschen.</p>
      </li>
      <li>
        <h4>Laufend fit werden nach der Rückbildung</h4>
        <p>Du möchtest mit dem laufen (wieder) anfangen? Dein Rückbildungskurs ist abgeschlossen? Melde dich für den Laufkurs für Mütter in Mannheim an, unter der professionellen Leitung von Hebamme und Lauftrainierin Birgit Fremter.</p>
      </li>
      <li>
        <h4>Geburtsvorbereitungskurs plus</h4>
        <p>Du hast einen Geburtsvorberitungskurs besucht und möchtest diesen durch gezielte Übungen und Entspannungstechniken ergänzen?</p>
        <p>In diesem Workshop erlernst oder vertiefst du die Wahrnehmung deines Beckenbodens in Verbindung mit deiner Atmung und stärkst deine Körpermitte. Am Ende erwartet dich eine ausführliche Entspannung mit Hypnoseelementen.</p>
      </li>
    </ul>
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
