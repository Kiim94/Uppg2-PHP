<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Start</title>
</head>

<body>
    <?php include "./junkDrawer/meny.php" ?>
    <main>
        <h1>Startsidan</h1>
        <section class="section-text">
            <h2>Om uppgiften</h2>
            <p>Denna uppgift, Introduktion till PHP, har gått ut på att skapa en enklare webbplats med
                HTML, CSS, objektorienterad PHP samt en databasanslutning.</p>
            <p>Webbplatsen ska bestå av minst 3 undersidor samt en huvudmeny för att kunna navigera mellan dem.</p>
            <p>Det ska även gå att lagra data i en MySQL-databas.</p>
            <p>En undersida ska det finnas en Bucket-lista. Denna ska innehålla saker som jag skulle vilja göra någon
                gång i livet.</p>
            <p>För varje sak ska det finnas:</p>
            <ul>
                <li>Namn</li>
                <li>Beskrivning</li>
                <li>Datum när den lades till</li>
                <li>Prio-ordning</li>
                <li>Möjlighet att radera</li>
            </ul>
            <p>Samtliga saker ska gå att skriva ut på sidan (med andra ord läsas av). Valfri design för detta: lista,
                tabell eller liknande.</p>


        </section>
        <section class="section-text">
            <h2>Angående PHP</h2>
            <p>Har lite blandade känslor kring PHP. Å ena sidan känns det ganska trevligt att kunna använda det direkt
                på samma sida som HTML, lite som
                EJS. Men å andra sidan är det lite av en kurva att lära sig syntaxen: många saker känns igen,
                men samtidigt är det mycket annorlunda som gör att man kan snubbla.</p>
            <p>Inte helt ovanligt från hur det är att lära sig andra programmeringsspråk, eller nya saker i allmänhet.</p>
            <p>Min största utmaning är själva databasanslutning och sedan hur man kan dölja informationen i den (lösenord, databasnamn med mera) 
                när man ska göra en webbplats publik.</p>
        </section>
        <section class="section-text">
            <h2>För- och nackdelar</h2>
            <p>Jag har försökt sammanställa några för- och nackdelar med PHP jämfört med andra språk:</p>
            <div class="procons pro">
                <h3>Fördelar</h3>
                <p>Det verkar vara lite "fritt" när man ska ange vad för slags värde en variabel har. Från vad jag
                    förstått så är det inte tvunget, men det kan vara bra att göra det tydligt vad något är
                    eller vad det ska returnera. Det kan göra det mer läsbart/förståeligt vad koden ska göra.</p>
                <p>Stor community: PHP är ett mycket välanvänt programmeringsspråk.</p>
                <p>Jag upplevde det som relativt enkelt att skapa en basic CRUD-funktionalitet i PHP (i denna uppgift utan Update), 
                    jämfört med när jag gjort detsamma med JS och Express. Möjligen att jag med PHP har använt POST direkt, medan 
                i Express behövdes middleware för att tolka data.</p>
            </div>
            <div class="procons con">
                <h3>Nackdelar</h3>
                <p>Officiella dokumentationen är omfattande, men tekniskt svår att förstå. Inte särskilt nybörjarvänlig att läsa.</p>
                <p>Medan det är trevligt att kunna skriva PHP direkt med HTML, så kan det bli rörigt ibland.</p>
                <p>Medan man inte behöver ange vilken datatyp en variabel ska ha så kan det leda till att variabeln tilldelas olika värden 
                    under programmeringens gång. Det kan leda till fel när programmet körs.
                </p>
            </div>
        </section>

    </main>
    <footer>
        <p>mobr2500@student.miun.se</p>
        <p>Uppgift 2: Intro till PHP</p>
    </footer>
</body>

</html>