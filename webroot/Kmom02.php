<?php

/**
 * Page that contains the report for task Kmom01
 * included into redovisning.php
 */

$text = <<<EOD
<h2>Kmom02: Objektorienterad programmering i PHP</h2>

<h3>Hur väl känner du till objektorienterade koncept och programmeringssätt?</h3>
Jag har läst en hel del C++ och Javakurser så jag har en bra förståelse för objektorienteradprogrammering.
Det betyder inte att jag är särskilt förtjust i att använda arv, utom för speciella ändamål som tex GUI-toolkit. 
Jag tycker att den stora vinsten ligger i inkapslingen av kod och publika gränssnitt. Det gör det enkelt att
dela upp program i avskilda enheter med tydliga uppgifter och lös koppling till varandra. Det ger mycket bättre 
struktur på programmen och lättare att lägga till funktioner och underhålla kodbasen i framtiden.<br>
Jag gillar också interface och polymorfism. Att kunna lita på att en klass har en viss metod är bra, i slappare 
språk som tex pyhton som tillämpar duck typing (låter det som anka, går det som anka så är det nog en anka) tycker jag 
är osäkert. Man vet aldrig förren man kör koden att det verkligen fungerar. Polymorfism gör det möjligt att hantera olika 
klasser som implementerar samma interface på ett gemensamt och kontrollerat sätt.  


<h3>oophp20-guiden</h3>
Jag varken jobbade igenom eller skumläste, jag läste den noggrant, men skrev inte särskilt mycket egen kod då det mesta var 
koncept som jag var van vid. Jag använde dock en del av exempelkoden i mitt tärningsspel. Det som var riktigt nytt för mig var 
kombinationen av sessioner och klasser. Det var en användbar funktion att man kan spara ett helt objekt i sessionen.

<h3>Tärningsspelet 100</h3>
<p>
Jag delade upp mitt spel i tre klasser, CDice, CDiceGameStatus och CDiceGame.<br>
CDice är en tärning, den kan ha valfritt antal sidor med har som default 6.<br>
CDiceGameStatus lagrar spelets status mellan sidanropen. Den lagras i sessionen i CDiceGame-klassen.<br>
CDiceGame innehåller spelet logik. Här hanteras spelarens val, som är kasta tärning, spara poäng och börja om spelet.
Spelets utseende bestäms i dicegame.php som är en pagecontroller i mitt tmoz- (anax) system. dicegame skapar en instans av
CDiceGame och anropar funktioner i CDiceGame för att hämta ut poäng och bilder på tärningarna. Spelets logik och användar gränssnitt 
är separerade från varandra och det skulle inte vara något problem att göra ett helt annat gränssnitt utan att ändra på spelets tre klasser, 
möjligen att tärningsbilderna som genereras som en html-lista kunde separerats ut i en egen klass.
<br>
När jag först läste igenom uppgiften tänkte jag att det där blir lätt. Sedan insåg jag att jag arbetade i php på servern och jag måste spara 
spelets status någonstans mellan sidanropen från webbläsaren. Då känndes det lite jobbigt ett tag, sedan förstod jag hur det skulle lösas när jag läste 
att man kan lagra hela objekt i sessionen i oophp20-guiden. Jag har tidigare bara sparat enstaka variabler för att verifera att användaren 
är inloggad i sessionen så det var en aha-upplevelse, faktiskt den stora behållningen av det här momentet.
</p>

<h3>Reflektioner</h3>
<p>
Förutom objekt i sessionen så var det en ganska rakt på uppgift. Det var inga större problem att få det att fungera. Det avgörade momentet var att
lagra spelets status med hopsamlad poäng och slagna tärnignar mellan sidanropen. Resten av programmet är bara kosmetika för att göra det lite snyggare 
och bättre. <br>
Jag valde att inte göra några extra uppgifter den här gången. Jag tycker att jag har förstått det som momentet gick ut på och jag har inte riktigt den 
tiden som krävs för att hinna med extra uppgifterna.
</p>

EOD;

return $text;
