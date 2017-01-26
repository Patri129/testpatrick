<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html;  charset=iso-8859-1" />
    <title>Multidimensionale Arrays Sorteren</title>
</head>
<body>
<?php # Script multidimensionale-array-sorteren.php
/*
 * ==== Ik wil je verblijden met mijn unieke DIEREN & LEEFTIJD SCRIPT! SORTEER DIEREN EN HUN LEEFTIJD! VRIJ NUTTELOOS, MAAR WEL LEUK OM MEE TE EXPERIMENTEREN! ===
 * JE krijgt toestemming om code te jatten, maar meldt mij dat wel even!
 * ===
 * Ik zou graag verbeteringen willen zien op het script, dus je mag mij in mijn GITHUB commenten en anders kun je
 * terecht op PHPWIJS.nl !!!
 * ----------------------------------------------------------------------------------------------------------------------------------------------------------------
 * In dit geweldige script kun je dieren sorteren! En hun leeftijd sorteren. Je kan de meest nutteloze zaken in een array
 *  zetten en die sorteren, wanneer je een nachtje niks te doen hebt! Ik wens je veel succes met het sorteren van dingen.
 * Wat dacht je ervan om de volgende zaken eens te sorteren:
 * - Het aantal gemeenten waarin het meeste bier wordt gedronken
 * - De objecten die vrouwen het meeste in de kledingzaken kopen
 * - 10 geboden voor een goede liefde
 * - De 10 beste geboden voor goede liefde sorteren!!!
 * En uiteraard nog veel meer mogelijk! Experimenteer een beetje
 * met deze code en je zult zien dat het helemaal niet moeilijk is!
 *
 * ============================== LET OP UPDATE: VERSIE 26-1-2017: Script is nog niet helemaal vrij van fouten! Dus onder voorbehoud ======================================
 * ============================== Je kunt aan de slag met het oplossen van problemen, Hier is er een fout op regel 42 van het script. Probeer dit op te lossen! ======================
 * ============================== Meteen een goede oefening om te werken met het opzetten en sorteren van multidimensionale arrays! ========================================================
 * ==== Zie ook de manier van comments! Jat mijn werkwijze, dat is goed! =============
 */
// een multidimensionale array aanmaken
$dieren = array(
    123 => array('naam' => 'Ezel',
    'leeftijd' => 25),
    37 => array('naam' => 'Paard',
        'leeftijd' => 44),
    48 => array('naam' => 'Varken'),
        'leeftijd' => 34);

//sorteren diernamen

    function namen_sorteren ($a, $b) { 
    return strcasecmp($a['naam'], $b['naam']);
    } 
    
    function leeftijden_sorteren($a, $b)
    {
    return ($a['leeftijd'] < $b['leeftijd']);
    }

    // De Gehele Array Weergeven
echo '<h3> Oorspronkelijke array </h3> <pre>'.print_r($dieren, 1) . '</pre>';


    // De array gesorteerd op naam
uasort($dieren, 'namen_sorteren');

//array weergeven gesorteerd op naam
    echo '<h3> Array gesorteerd op naam' . '</h3><pre>' .print_r($dieren, 1) . '</pre>';

    // sorteer de dieren op leeftijd
    uasort($dieren, 'leeftijden_sorteren');
    // en array tonen
echo '<h4> Array gesorteerd op leeftijd'. '</h3><pre>'.print_r($dieren, 1) . '</pre>';