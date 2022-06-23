<?php
$title = 'Hebammenpraxis Oststadt';
include 'templates/head.php';
?>

<?php include 'templates/navbar.php'; ?>

<main>

  <section>
    <img src="img/team.png" width="100%">

    <h1><nobr>Julia Gauweiler</nobr> · <nobr>Katharina Piwecki</nobr> · <nobr>Birgit Fremter</nobr> · <nobr>Maria Winkler</nobr></h1>
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
      <a href="courses<?= $suffix ?>" class="btn">Zu den Kursen</a>
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

  <section id="rooms">
    <h2>Unsere Praxisräume</h2>

    <div class="gallery">
      <div><img class="gallery-img" src="img/rooms/1.jpg"></div>
      <div class="horizontal-img-right"><img class="gallery-img horizontal-img" src="img/rooms/2.jpg"></div>

      <div class="horizontal-img-left"><img class="gallery-img horizontal-img" src="img/rooms/4.jpg"></div>
      <div><img class="gallery-img" src="img/rooms/8.jpg"></div>

      <div class="horizontal-img-full"><img class="gallery-img horizontal-img" src="img/rooms/3.jpg"></div>

      <div><img class="gallery-img" src="img/rooms/5.jpg"></div>
      <div class="horizontal-img-right"><img class="gallery-img horizontal-img" src="img/rooms/9.jpg"></div>

      <div class="horizontal-img-left"><img class="gallery-img horizontal-img" src="img/rooms/6.jpg"></div>
      <div><img class="gallery-img" src="img/rooms/7.jpg"></div>
    </div>
  </section>


  <section id="team">
    <h2>Unser Team</h2>
    <div class="grid">
      <!-- BIRGIT -->
      <div id="profile-header-1">
        <div class="image-container">
          <img src="img/birgit-profile-circle.webp" alt="Profilbild von Birigit Fremter">
        </div>
        <h3 class="profile-heading">Birgit Fremter</h3>
      </div>

      <div id="profile-cv-1">
        <ul>
          <li>1980 geb. in Einbeck, Niedersachsen</li>
          <li>2004 Staatl. geprüfte Hebamme (Aachen)</li>
          <li>2004-2015 angestellte Hebamme im Kreißsaal (St. Marienhospital Karlsruhe, St. Hedwig Klinik Mannheim)</li>
          <li>Seither ausschließlich selbstständig tätig</li>
        </ul>
      </div>

      <div id="profile-tasks-1">
        <h4>Tätigkeitsbereiche</h4>
        <ul>
          <li>Schwangerenvorsorge, Hilfe bei Beschwerden in Schwangerschaft, Geburtsvorbereitung</li>
          <li>Wochenbettbetreuung, Stillberatung, ganzheitliche Rückbildungsgymnastik, Beikostberatung</li>
          <li>Rectusdiastase Coaching</li>
          <li>Mamaworkout outdoor Kurse</li>
          <li>Barré Kurse</li>
        </ul>
      </div>

      <div id="profile-trainings-1">
        <h4>Fortbildungen</h4>
        <ul>
      <li>Mama Workout: Prä- und Postnatal, Outdoor</li>
          <li>Homöopathie in der Hebammenkunde, Akupunktur, Ernährung in Schwangerschaft und Stillzeit</li>
          <li>Diverse Fortbildungen zum Thema Rectusdiastase und Beckenboden in der Hebammenarbeit</li>
          <li>Barre concept® Trainerin</li>
          <li>Zertifizierte K-Taping Therapeutin mit Schwerpunkt Gynäkologie</li>
          <li>Faszientraining prä- und postnatal</li>
          <li>Beckenbodenkursleiterin</li>
          <li>Fachfrau für Beckenboden prä- und postpartal</li>  
          <li>Regelmäßige Fortbildungen im Bereich Qualitätsmanagement und Notfälle</li>
        </ul>
      </div>

      <div id="profile-areas-1">
        <h4>Betreuungsgebiete</h4>
        <ul><li class="areas">Oststadt, Schwetzingervorstadt, Neuostheim, Feudenheim, Seckenheim, Wallstadt, Ilvesheim</li></ul>
      </div>

      <!-- JULIA -->
      <div id="profile-header-2">
        <div class="image-container">
          <img src="img/julia-profile-circle.webp" alt="Profilbild von Julia Gauweiler">
        </div>
        <h3 class="profile-heading">Julia Gauweiler</h3>
      </div>

      <div id="profile-cv-2">
        <ul>
          <li>1985 geb. in Speyer</li>
          <li>2010 Staatl. geprüfte Hebamme (Speyer)</li>
          <li>2010 - 2016 Angestellte Hebamme im Kreißsaal der St.Hedwig Klinik</li>
          <li>2011 und 2016 Elternzeit</li>
          <li>Seither ausschließlich selbstständig tätig</li>

        </ul>
      </div>

      <div id="profile-tasks-2">
        <h4>Tätigkeitsbereiche</h4>
        <ul>
          <li>Schwangerenvorsorge, Hilfe bei Beschwerden in Schwangerschaft, Geburtsvorbereitung</li>
          <li>Wochenbettbetreuung, Stillberatung, ganzheitliche Rückbildungsgymnastik</li>
          <li>Babymassage nach Leboyer, Beikostberatung</li>
        </ul>
      </div>

      <div id="profile-trainings-2">
        <h4>Fortbildungen</h4>
        <ul>
          <li>Akupunktur für Hebammen (mehr als 100UE inkl.anerkannter Abschlussprüfung)</li>
          <li>Homöopathie in der Hebammenkunde</li>
          <li>Step and Fit in der Schwangerschaft</li>
          <li>Diverse Fortbildungen zu Rückbildung-  und Beckenbodentraining</li>
          <li>Hebamme an Grundschulen</li>
          <li>Regelmäßige Fortbildungen im Bereich Qualitätsmanagement und Notfälle </li>
        </ul>
      </div>

      <div id="profile-areas-2">
        <h4>Betreuungsgebiete</h4>
        <ul><li class="areas">Oststadt, Schwetzingervorstadt, Quadrate, Neckarstadt, Käfertal</ul></li>
      </div>

      <!-- KATHARINA -->
      <div id="profile-header-3">
        <div class="image-container">
          <img src="img/katharina-profile-circle.webp" alt="Profilbild von Katharina Piwecki">
        </div>
        <h3 class="profile-heading">Katharina Piwecki</h3>
      </div>

      <div id="profile-cv-3">
        <ul>
          <li>1994 geboren in Mannheim</li>
          <li>2018 staatl. geprüfte Hebamme (Speyer)</li>
          <li>2020 Bachelor of Science (B.Sc.) Hebammenwesen</li>
          <li>2018-2021 angestellte Hebamme (St. Hedwig Klinik und St. Marienkrankenhaus Ludwigshafen am Rhein)</li>
          <li>Seither ausschließlich selbstständig tätig</li>
        </ul>
      </div>

      <div id="profile-tasks-3">
        <h4>Tätigkeitsbereiche</h4>
        <ul>
          <li>Schwangerenvorsorge, Hilfe bei Beschwerden in Schwangerschaft, Geburtsvorbereitung</li>
          <li>Wochenbettbetreuung, Stillberatung, ganzheitliche Rückbildungsgymnastik</li>
          <li>Babymassage nach Leboyer, Beikostberatung</li>
        </ul>
      </div>

      <div id="profile-trainings-3">
        <h4>Fortbildungen</h4>
        <ul>
          <li>MOVEnART© Rückbildungsgymnastik</li>
          <li>zertifizierte K-Taping Therapeutin mit Schwerpunkt Gynäkologie</li>
          <li>Babymassage nach Leboyer</li>
          <li>staatlich anerkannte Leiterin einer Pflege- oder Funktionseinheit im Gesundheitswesen und in der Altenpflege</li>
          <li>Regelmäßige Fortbildungen im Bereich Qualitätsmanagement und Notfälle</li></li>
        </ul>
      </div>

      <div id="profile-areas-3">
        <h4>Betreuungsgebiete</h4>
        <ul><li class="areas">Innenstadt/Jungbusch, Neckarstadt, Oststadt, Schwetzingervorstadt,
          Lindenhof/Neckarau, Wohlgelegen, Käfertal, Feudenheim</li></ul>
      </div>

      <!-- MARIA -->
      <div id="profile-header-4">
        <div class="image-container">
          <img src="img/maria-profile-circle.webp" alt="Profilbild von Maria Winkler">
        </div>
        <h3 class="profile-heading">Maria Winkler</h3>
      </div>

      <div id="profile-cv-4">
        <ul>
          <li>1976 geb. in Mannheim</li>
          <li>Seit 2000 staatl. geprüfte Hebamme (Mainz)</li>
          <li>2000-2016 Tätigkeit im Kreißsaal (St. Hedwig Klinik) Mentorin und stellv.Leitung</li>
          <li>Seither ausschließlich selbstständig tätig</li>
        </ul>
      </div>

      <div id="profile-tasks-4">
        <h4>Tätigkeitsbereiche</h4>
        <ul>
          <li>Schwangerenvorsorge, Hilfe bei Beschwerden in Schwangerschaft, Geburtsvorbereitung</li>
          <li>Wochenbettbetreuung, Stillberatung, Beikostberatung</li>
          <li>Ganzheitliche Rückbildung, Beckenbodentraining prä- und postpartal</li>
        </ul>
      </div>

      <div id="profile-trainings-4">
        <h4>Fortbildungen</h4>
        <ul>
          <li>Craniosacrale Körperarbeit</li>
          <li>Hömöopathie in der Hebammenkunde</li>
          <li>Zertifizierte K-Taping Therapeutin mit Schwerpunkt Gynäkologie</li>
          <li>Professionelle Begleitung beim frühen Tod eines Kindes</li>
          <li>Beckenbodenkursleiterin</li>
          <li>Fachfrau für Beckenboden prä- und postpartal </li>
          <li>Hypnose rund um die Geburt </li>
          <li>Regelmäßige Fortbildungen im Bereich Qualitätsmanagement und Notfälle</li>
        </ul>
      </div>

      <div id="profile-areas-4">
        <h4>Betreuungsgebiete</h4>
        <ul><li class="areas">Lindenhof, Almenhof, Quadrate, Schwetzingerstadt, Oststadt</li></ul>
      </div>
    </div>

  </section>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>
