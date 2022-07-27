<?php
$title = 'Unser Leistungsangebot';
$description = 'Erfahre mehr über unsere Leistungen. Wir bieten Betreuung vor und nach Schwangerschaft sowie zahlreiche Zusatzangebote.';
include 'templates/head.php';
?>

<?php include 'templates/navbar.php'; ?>

<main>

  <section>
    <img src="img/team.webp" width="100%">

    <h1>Unser Leistungsangebot</h1>

    <p>
      Jeder Schwangeren, Gebärenden, Wöchnerin und Stillenden steht die Betreuung durch eine Hebamme zu.
      Die Kosten für die Leistungen werden von den Krankenkassen übernommen.
    </p>

  </section>

  <section id="leistung-schwangerschaft">
    <h2>Schwangerschaft</h2>

    <h3 id="vorsorge">Schwangerenvorsorge</h3>
    <p>
      Schwangerenvorsorge dient dazu, den Verlauf der Schwangerschaft zu überwachen. Sie
      richtet sich nach den Mutterschaftsrichtlinien des gemeinsamen Bundesausschusses der
      Ärzte und Krankenkassen für Schwangerschaft, Geburt und Wochenbett. Diese Richtlinien
      sind für Hebammen und Ärzte bindend. 
    </p>

    <p>
      Vorsorgeuntersuchungen während der Schwangerschaft können von der Hebamme, dem 
      Gynäkologen oder beiden gemeinsam durchgeführt werden. Bis zur 30. Schwangerschaftswoche 
      findet alle 4 Wochen eine Untersuchung statt, danach alle 14 Tage. Nach dem Erreichen 
      des Entbindungstermins alle 2-3 Tage.
    </p>

    <p>
      Folgende Untersuchung umfassen die Schwangerenvorsorge:
    </p>


    <ul>
      <li>Herztonkontrolle des Kindes mittels Dopton</li>
      <li>Urinuntersuchung</li>
      <li>Gewichtskontrolle</li>
      <li>Vitalzeichenkontrolle</li>
      <li>Überwachung der zeitgerechten Entwicklung des Kindes</li>
    </ul>

    <p>
      Die Untersuchungen dienen dazu, die in der Schwangerschaft geprägten physiologischen
      Veränderungen im Körper, zu kontrollieren. Sollten Abweichungen auftreten, überweisen wir
      sie in die ärztliche Betreuung. 
    </p>

    <h3 id="beschwerden">Hilfe bei Schwangeschaftsbeschwerden</h3>
    <p>
      Eine Schwangerschaft ist ein ganz natürlicher Prozess im Leben einer Frau
      und stellt keine Krankheit dar. Dennoch können in der Schwangerschaft kleinere
      oder größere Schwangerschaftsbeschwerden wie z.B. Übelkeit, Rückenschmerzen,
      vorzeitige Wehen, aber auch Ängsten und Sorgen auftreten.
      Hierfür stehe wir Ihnen gerne zur Seite und beraten Sie individuell. 
    </p>

    <p>
      Ergänzend berate wir Sie gerne bei Ernährungsfragen, Pränatale Diagnostik,
      Wahl des Geburtsortes, Geburtsvorbereitung etc. 
    </p>
    
  </section>

  <section id="leistung-wochenbett">
    <h2>Zeit nach Geburt</h2>

    <h3 id="wochenbett">Wochenbettbetreuung</h3>

    <p>
      Nach der Geburt ihres Kindes beginnt unmittelbar das Wochenbett.
      Es beginnt eine neue aufregende Zeit als Familie. Diese Zeit dient verschiedenen Funktionen:
    </p>

    <p>
    <ul>
      <li>Aufbau einer Mutter-Kind-Beziehung: Adaption an die neue Situation und psychosoziale Veränderungen</li>
      <li>Rückbildung: Uterus, Vagina, Bauchmuskulatur, Pigmentveränderungen, Beckenboden, Blutvolumen Ödemen</li>
      <li>Wundheilung: Plazentahaftstelle, Schürfung, Riss- und Schnittverletzungen</li>
      <li>Laktation: Ingangkommen der Milchbildung und Aufbau einer guten Stillbeziehung</li>
      <li>Hormonumstellung: Beginn der normalen Ovarialtätigkeit</li>
      <li>Verarbeitung des Geburtserlebnisses</li>
      <li>Beobachtung des Babys: Temperatur, Atmung, Trinkverhalten, Gewichtsentwicklung, Neugeborenengelbsucht,
              Versorgung des Nabels, Hilfe bei Blähungen, Ernährungsberatung und Pflege des Babys</li>
    </ul>
    </p>

    <p>
      Jede Frau hat den Anspruch auf eine Hebammenbetreuung im Wochenbett. In den ersten 10
      Tagen ist ein täglicher Besuch durch die Hebamme möglich. Danach stehen weitere 16 Termine bis zur 12. Woche
      nach der Geburt zur Verfügung.
    </p>
    <p>
      Bei zu früh geborenen Kindern ist eine Betreuung über die 12. Woche hinaus mit ärztlichem Attest möglich.
      In besonderen Fällen (Fehl- oder Frühgeburt, unabhängig von der Schwangerschaftswoche, toten oder kranken Kindern) 
      ist ebenfalls eine individuelle Betreuung möglich.
    </p>

    <h3>Stillberatung</h3>
    <p>
      Nach dem Wochenbett können immer wieder Fragen zur Stillzeit auftauchen.
      Was mach ich, wenn sich ein Milchstau bildet? Wie lange sollte ich mein Baby (voll-)stillen? 
      Viele weitere individuellen Fragen können über die gesamte Stillzeit auftauchen. 
    </p>

    <p>
      Genau für diese verschiedenen Fragen können Sie auch über die Wochenbettszeit hinaus Hebammenhilfe in Anspruch nehmen. 
</p>
<p>
      Wer sich bereits in der Schwangerschaft auf das Thema Stillen vorbereiten möchte, kann gerne am Stillvorbereitungskurs teilnehmen. 
      Klicke <a href="courses<?= $suffix ?>#stillvorbereitung">hier</a>, um zur Terminauswahl und der Buchung des Kurses zu gelangen. 
    </p>

    <h3>Beikostberatung</h3>

    <p>Wann und wie geht es weiter nach der Milch?
      Mit rund 6 Monaten sind die Kinder bereit für die Einführung von Beikost nach Bedarf. Dabei können viele Fragen auftreten:
      <ul>
        <li> Wann ist mein Baby für die Beikost bereit und wie erkenne ich das?</li>
        <li> Welche Wege der Beikosteinführung gibt es?</li>
        <li> Welche Nahrungsmittel kann ich wann meinem Kind geben?</li>
        <li> Welche Lebensmittel sind im ersten Lebensjahr ungeeignet?</li>
      </ul>
    </p>

    <p>
      Jede Frau hat die Möglichkeit im Rahmen der Hebammenbegleitung ein Termin für ein Beikostgespräch zu vereinbaren. 
      Zudem gibt es die Möglichkeit den Kurs "B(r)eikost" in der Hebammenpraxis Oststadt als Zusatzleistung zu besuchen.
    </p>
    <p> 
      Bei Interesse am Kurs "B(r)eikost" klicke <a href="courses<?= $suffix ?>#breikost">hier</a>, um zu den Terminen und der Anmeldung zu gelangen.
    </p>
  </section>

  <section id="leistung-zusatz">
    <h2>Zusatzleistungen</h2>
    
    <h3 id="leistung-akupunktur">Akupunktursprechstunde</h3>

    <h4>bei Schwangerschaftsbeschwerden</h4>

    <p>
    Akupunktur ist eine von der Weltgesundheitsorganisation (WHO) anerkannte Methode zur Behandlung vieler Beschwerden und Krankheitsbilder.
    </p>

    <p>
    In der Schwangerschaft ist diese Methode besonders interessant, weil dabei die Selbstheilungs- und Regulierungsprozesse im Körper angeregt und keine Medikamente benötigt werden.
    </p>

    <p>
    Besonders gute Behandlungserfolge gibt es bei Übelkeit mit oder ohne Erbrechen in der Frühschwangerschaft, Karpaltunnelsyndrom,
    Wassereinlagerungen in den Beinen und Füßen, Rücken- und Ischiasschmerzen, Verspannungen, Schlafstörungen, allgemeine Gereiztheit und zum psychischen Ausgleich.
    </p>

    <h4>zur Geburtsvorbereitung</h4>
    <p>
    Nach dem Mannheimer Schema kann ab der 36. SSW begonnen werden. 
    Erwiesenermaßen hat die geburtsvorbereitende Akupunktur nach 2-3 Sitzungen eine verkürzende Wirkung auf die Dauer der Eröffnungsphase während der Geburt. 
    Die geburtsvorbereitende Akupunktur alleine führt nicht zu einer früheren Geburt, eine Wehen-anregende Akupunktur kann aber zusätzlich angeboten werden. 
    </p>

    <p>
    Pro Sitzung benötigen wir ca 30 Minuten und ich erhebe eine Zuzahlung von 15€, die entweder bar oder auf Rechnung bezahlt werden kann.
    </p>

    <a href="courses<?= $suffix ?>#akupunktur">Akupunktur Termin buchen</a>

    <h3 id="leistung-massage">Schwangerschaftsmassage</h3>
    <p>
      Die geburtsvorbereitende Massage ist Bestandteil der von Dr. Gowri Motha entwickelten gentle birth Methode. 
      Die Ölmassage von Bauch, Rücken und Becken wirkt entspannend, fördert die Eigenwahrnehmung und das Körperbewusstsein. 
      Durch die Massage wird das Lymphsystem angeregt und die Durchblutung im gesamten Beckenraum unterstützt. 
      Spannungen in der Schulter- Nackenpartie, des Bauchraumes, der Lendenwirbelsäule und des Beckens können gelöst werden. 
      Dies fördert die physiologische Elastizität und Dehnbarkeit der Muskeln und Bänder vor allem im Beckenraum. 
      Die tiefe Entspannung kann unterstützen, dass sich Muttermund, Vagina und Beckenbodenmuskeln unter der Geburt leichter öffnen und dehnen. 
      Positive Affirmationen für die Geburtsarbeit begleiten die Massage. 
    </p>

    <p>
      Eine optimale Vorbereitung auf die Geburt. 
      Empfohlen wird die Massage ab der 36. Schwangerschaftswoche (35+0) im wöchentlichen Rhythmus bis zur Geburt des Kindes. 
      Eine Behandlung dauert ca. 60 Minuten (ca.45Minuten Massagezeit und ca. 15 Minuten Schlussentspannung und Gespräch).
    </p>

    <p>Einfach per Mail Terminwunsch an <a href="mailto:hebamme.birgit.fremter@web.de">hebamme.birgit.fremter@web.de</a></p>

    <p>Kosten: 85€ - Bei Buchung von 3 Massage 200€</p>

    <h3 id="leistung-hypnose">Hypnose</h3>

    <p>
    Das Erleben einer Trance kann mit dem angenehmen Zustand kurz vor dem Einschlafen verglichen werden, wenn man eher in Bildern denkt und der Körper zur Ruhe kommt. 
    Physiologisch kommt es zu einer Entspannungsreaktion: Herzschlag und Atmung verlangsamen sich, der Blutdruck sinkt.
    </p>

    <p>
    Mental erleben Menschen in Trance intensive Gelassenheit, Ausgeglichenheit, Lebensmut, Kraft, Sicherheit oder Beruhigung. 
    Das rationale Denken tritt in den Hintergrund, während eine bildhafte Informationsverarbeitung einsetzt und Vorstellungen auf allen Sinneskanälen aktiviert werden.
    Die Aufmerksamkeit wird auf das innere Erleben gerichtet, während die Wahrnehmung der Außenwelt eher in den Hintergrund tritt. 
    Durch all diese Phänomene ist es möglich, durch wohltuende Vorstellungen Ressourcen des Menschen zu aktivieren, die ihn in die Lage versetzen, körpereigene Kräfte zu aktivieren, das Schmerzerleben zu beeinflussen, Sicherheit und Zuversicht angesichts bevorstehender herausfordernder Situationen zu erleben.
    </p>

    <p>
    In der Trance behalten Menschen die Kontrolle über sich und können, wenn sie wollen, den hypnotischen Prozess jederzeit unterbrechen oder beenden.
    In der Regel kann man sich im Anschluss an die Hypnose an das Erleben während der Trance erinnern.
    </p>
    
    <p>
    Hypnose eignet sich wunderbar als Ergänzung zu allen Themen rund um die Geburt.
    Mich fasziniert immer wieder die Individualität einer jeden Sitzung!
    </p>

    <p>Anfragen gerne unter: <a href="mailto:hebamme@mariawinkler.de">hebamme@mariawinkler.de</a></p>

    <p>Preis pro Stunde: 85€</p>
    
    
    <h3 id="leistung-ktaping">Behandlung durch K-Taping©</h3>
    <p>
      Mithilfe von bestimmten Anlegetechniken (Muskeltechnik, Ligamenttechnik, Lymphtechnik und dem Cross-Tape) lassen sich durch das Aufkleben von Kinesio-Tape
      auf die Haut viele Symptome in der Schwangerschaft und auch im Wochenbett behandeln und lindern. 
    </p>
    <p> Der Begriff Kinesio-Taping stammt aus dem griechischen und bedeutet soviel wie "Bewegung mit einem Band befestigen".
    </p>
    <p>
      K-Taping kann in Schwangerschaft zum Beispiel für folgende Beschwerden helfen: LWS-Syndrom, Karpaltunnelsyndrom, 
      Verspannung der Nackenmuskulatur, Stützung des schwangeren Bauches, Schwellung der Beine, Behandlung der bestimmten Akupunkturpunkte nmit dem Cross- Tape
    </p>
    <p>
      In der Zeit nach der Geburt kann das K-Taping unter anderem bei der Rückbildung, einem Milchstau, bei einer Rectusdiastase oder einer Haltungskorrektur hilfreich sein.
    </p>

    <p>
    Bei Interesse eines K-Tapings gerne die begleitende Hebamme kontaktieren oder eine Anfrage unter: <a href="mailto:info@hebammenpraxis-oststadt.de">info@hebammenpraxis-oststadt.de</a> stellen.
    Der Preis richtet sich nach der Tapeanlage. 
    </p>

    
    <h3 id="leistung-Rectusdiastase">Rectusdiastase Coaching</h3>
    <p>
    Was ist eine Rektusdiastase?
    Darunter versteht man das Auseinanderweichen des geraden Bauchmuskels (M. rectus abdominis) im Bereich der Linda Alba (das ist die Linie in der Mitte deines Bauches, welche in der Schwangerschaft evtl. etwas dunkler gewesen ist).
    Wie entsteht eine Rektusdiastase? In der Regel entsteht diese durch die Schwangerschaft. 
    Durch den wachsenden Bauch sind deine Bauchmuskeln auseinandergewichen und in der Mitte ist ein Spalt entstanden. 
    Je nach Größe des schwangeren Bauches ist diese unterschiedlich weit. Durch ungünstiges Verhalten in der Schwangerschaft wie Aufrollen aus der Rückenlage, schweres Heben und Tragen, kann sich der Bauchmuskelspalt unnötig vergrößern. Nach der Geburt und im Wochenbett schließt sich der Spalt in der Regel durch den natürlichen Regenerationsprozess zu einem gewissen Teil wieder.
    Was tun bei einer Rektusdiastase? Die gute Nachricht ist, du kannst etwas bei einer Rektusdiastase tun!
    Auch Jahre nach der Entbindung kann deine Körpermitte selbstverständlich noch stabilisiert werden.
    Von mir bekommst du einen Trainingsplan mit einfachen, sanften und bewährten Übungen bei welchen deine gesamte Körpermitte (Bauch-, Beckenboden- und Rückenmuskulatur) mit einbezogen wird.
    Die Übungen sind nicht im klassischen Sinne anstrengend und somit auch für Frauen geeignet, die nicht gerne Sport machen. 
    Trotzdem ist ein gewisses Maß an Disziplin und Durchhaltevermögen erforderlich und die Übungen müssen regelmäßig durchgeführt werden.
    Falls du einen sehr breiten Spalt hast (eine Hand und mehr) und/oder du das Gefühl hast, zusätzlich einen Nabelbruch zu haben, lass dies bitte bei deinem GynäkologenIN abklären.
    </p>

    <p> Was ist das Ziel des Rektusdiastase Workouts? Das Ziel ist deine Körpermitte zu kräftigen, dh die tiefe Bauchmuskulatur und deinen Beckenboden zu trainieren und eine bzw. mehr Spannung der Linea Alba zu erzielen, da dadurch eine Stabilität entsteht. Das Schließen der Rektusdiastase ist nicht das primäre Ziel, da es nicht immer möglich ist die Lücke zu schließen und dies auch gar nicht nötig ist, wenn die übrige Spannung und somit die Stabilität deines Rumpfes gegeben ist. Bei konsequenter Durchführung und Umstellung des Alltagsverhaltens, wurden mit diesem Training sehr gute Erfolge erzielt, dh der Körper ist wieder in der Lage funktionell zu arbeiten. 
    Das Tolle ist - jeder deiner Atemzüge kann - richtig ausgeführt - deine Körpermitte trainieren!
    </p>
    <p>
    Anfragen für ein Coaching gerne unter: <a href="mailto:hebamme.birgit.fremter@web.de">hebamme.birgit.fremter@web.de</a>
    </p>

  </section>

</main>

<?php include 'templates/footer.php'; ?>

</body>
</html>
