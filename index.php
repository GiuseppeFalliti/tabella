<?php

// Dati delle temperature
$temperatureData2022 = [
    "Gennaio" => 2.1,
    "Febbraio" => 4.5,
    "Marzo" => 4.6,
    "Aprile" => 8.5,
    "Maggio" => 15.2,
    "Giugno" => 19.5,
    "Luglio" => 22.1,
    "Agosto" => 20.4,
    "Settembre" => 15.2,
    "Ottobre" => 13.9,
    "Novembre" => 6.4,
    "Dicembre" => 2.2
];

$temperatureData2023 = [
    "Gennaio" => 3.2,
    "Febbraio" => 3.3,
    "Marzo" => 4.8,
    "Aprile" => 9.1,
    "Maggio" => 14.2,
    "Giugno" => 20.5,
    "Luglio" => 22.1,
    "Agosto" => 23.6,
    "Settembre" => 13.5,
    "Ottobre" => 14.0,
    "Novembre" => 7.4,
    "Dicembre" => 2.2
];


// Funzione per trovare massimo e minimo con il mese
function findMinMax($data) {
    $maxTemp = max($data);
    $minTemp = min($data);
    $maxMonth = array_search($maxTemp, $data);
    $minMonth = array_search($minTemp, $data);

    return [
        "maxTemp" => $maxTemp,
        "maxMonth" => $maxMonth,
        "minTemp" => $minTemp,
        "minMonth" => $minMonth
    ];
}

// Calcola massimo e minimo per ciascun anno
$result2022 = findMinMax($temperatureData2022);
$result2023 = findMinMax($temperatureData2023);

// Inizia il rendering della tabella
echo "<table border='1' style='width: 100%; border-collapse: collapse; text-align: center;'>";
echo "<thead>";
echo "<tr>
        <th>Mese</th>
        <th>Anno 2022</th>
        <th>Anno 2023</th>
    </tr>";
echo "</thead>";
echo "<tbody>";

// Stampa i dati mese per mese
foreach ($temperatureData2022 as $month => $temp2022) {
    $temp2023 = $temperatureData2023[$month] ?? "N/D"; // Nel caso non ci siano dati per il 2023

    // Aggiungi classe per la colorazione della temperatura massima e minima
    $color2022 = "";
    $color2023 = "";

    // Verifica se è la temperatura massima o minima per il 2022
    if ($temp2022 == $result2022['maxTemp']) {
        $color2022 = "style='background-color: red; color: white;'";
    } elseif ($temp2022 == $result2022['minTemp']) {
        $color2022 = "style='background-color: blue; color: white;'";
    }

    // Verifica se è la temperatura massima o minima per il 2023
    if ($temp2023 == $result2023['maxTemp']) {
        $color2023 = "style='background-color: red; color: white;'";
    } elseif ($temp2023 == $result2023['minTemp']) {
        $color2023 = "style='background-color: blue; color: white;'";
    }

    // Stampa la riga della tabella
    echo "<tr>
            <td>$month</td>
            <td $color2022>$temp2022 °C</td>
            <td $color2023>$temp2023 °C</td>
        </tr>";
}

?>
