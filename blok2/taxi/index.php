<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oefen Eindopdracht</title>

  <!-- STYLES ARE INCLUDED HERE -->
  <link rel="stylesheet" href="styles/main.css">

</head>

<body>

    <div class="flex wrapper">
        <!-- COPY THE ASSIGNMENT YOU CHOOSE TO PRACTICE HERE. -->
        <div class="container">
            <p class="text heading">Opdracht 8 - Contributie </p>
            <p class="text paragraph">
                Opdracht 1 - Taxikosten
                Een taxibedrijf heeft een aantal taxi's. De volgende tarieven worden gehanteerd:
                Per gereden km € 0,50. 
                Daarboven per gereden minuut € 0,17. 
                Van vrijdagavond 22.00 uur tot maandagochtend 7.00 uur geldt een toeslag van 15% (het begintijdstip is hiervoor bepalend).
            </p>
            <p class="text paragraph">
                Er dient een programma te worden ontwikkeld waarmee voor iedere taxirit de begin-en eindtijd (formaat hhmm), 
                evenals de weekdag en de afstand kunnen worden ingevoerd. Voor elke rit moet het verschuldigde bedrag worden berekenden getoond. 
                Verder moeten getoond kunnen worden:
                cumulatief de totale inkomsten van het taxibedrijf.
                De gemiddelde afstanden over alle gereden ritten. 
                De langste ritafstand.
            </p>
        </div>
        <!-- YOUR APP GOES HERE -->
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php
                    // ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
                    require 'models/company.php';
                    require 'models/ride.php';
                    // YOUR APP IS RUN FROM A MAIN FILE.
                    require 'controllers/app.php';

                ?>
            </p>
        </div>
    </div>

    <!-- SCRIPTS ARE INCLUDED HERE. -->
    <!-- <script type="text/javascript" src="path/filename.js"></script> -->
</body>
