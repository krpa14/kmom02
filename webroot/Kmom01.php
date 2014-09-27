<?php

/**
 * Page that contains the report for task Kmom01
 * included into redovisning.php
 */

$text = <<<EOD
<h2>Kmom01: Kom igång med programmering i PHP</h2>
<h3>Utvecklingsmiljö</h3>
<p>Min utvecklingsmiljö består av en dator med Ubuntu på. Här har jag installerat Apache, PHP och MySql. Jag använder ingen IDE utan bara en vanlig texteditor + terminalen. För filöverföring till studentservern så använder jag FileZilla.</p>

<h3>20 steg för att komma igång PHP</h3>
<p>Det mesta var bekant men lite nytt fanns det förstås. De korta PHP taggarna kände jag inte till. Även mb_* funktionerna för att hantera unicode text var nya för mig. Teckenkodning är problem i nästan alla programmeringsspråk. Det är skönt att unicode blir mer och mer dominant.</p>

<h3>Webbmall</h3>
<p>Min anax heter tmoz, vilket är en gammal tradition jag har. Det kommer ursprungligen från Liftarens uide till galaxen och är en förkortning av "The Master priests of <a href=http://hitchhikers.wikia.com/wiki/Zarquon>Zarquon</a>". Jag har inte gjort några ändringar i anax, utan har hållit mig till anax som det var. Dels för att jag tyckte det såg ut att fungera bra och dels för att jag inte vill råka ställa till det för mig senare på kursen. Jag har gjort lite ändringar i navbar klassen. Det var inga problem att ta ner CSource från guthub och inkludera den som en modul i webbmallen. </p>
<p> Jag bröt ut redovisningen för varje moment till egna php-filer för att det inte skulle bli för mycket text i en och samma fil.</p>


<h3>GitHub</h3>
<p>Jag har lagt upp min kod på GitHub. Det är första gången jag har lagt upp något på GitHub, vilket var lätt och trevligt. Jag tycker att det är en utmärkt idé att använda sig av GitHub på kursen. Jag använder git lokalt som versionshanteringssystem så git kan jag sedan tidigare.</p>
<a href="https://github.com/krpa14/kmom01">koden på github</a>

<h3>Reflektioner</h3>
<p>Det här är en ganska stor uppgift som första uppgift på en kurs, speciellt med tanke på att vi ska göra två uppgifter de första tre veckorna. Man behöver dock inte utveckla så mycket kod själv, men det tar en stund att förstå koden, strukturen och tanken bakom. Det svåraste är nog att komma på hur den är tänkt att fungera. Själv tog det mig ett tag innan jag kopplade ihop hur autoloadern fungerade med modulerna. Men när jag förstått det så var det ju inte speciellt komplicerat. Dock vara hela konceptet med en autoloader av klasser helt nytt för mig.</p>
<p>Jag har läst ett par PHP kurser men de har fokuserat mer på språket och har saknat moment om hur man strukturerar sin kod. Vilket har lätt till att de webbplatser jag skrivit i PHP har varit svåra att underhålla och det har mest blivit en samling PHP filer utan bakomliggande struktur. Så den här kursen börjar verkligen med precis det jag tycker att jag saknat i mina PHP-kunskaper.</p>
<p> Jag gillar att kursen, och även de andra kurserna i webbprogrammering vid BTH, verkar ha en vinkel med öppen källkod, fri programvara och även fria böcker. Jag har använt Linux som enda operativsystem på mina privata datorer i många år och blir alltid glad när man känner sig inkluderad som Linuxanvändare och det inte förutsätts att man använder Windows. 
</p>


EOD;

return $text;
