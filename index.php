<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid;
            padding: 8px;
        }
        .max {
            background-color: red;
            color: white;
        }
        .min {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Mese</th>
                <th>Anno 2023</th>
                <th>Anno 2024</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $temperatura2023 = [
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

            $temperatura2024 = [
                "Gennaio" => 4.2,
                "Febbraio" => 5.3,
                "Marzo" => 6.8,
                "Aprile" => 10.1,
                "Maggio" => 16.2,
                "Giugno" => 25.5,
                "Luglio" => 30.1,
                "Agosto" => 28.6,
                "Settembre" => 20.5,
                "Ottobre" => 18.0,
                "Novembre" => 9.4,
                "Dicembre" => 3.2
            ];

            // temperature max e min di 2023/2024
            $max2023 = max($temperatura2023);
            $min2023 = min($temperatura2023);

            $max2024 = max($temperatura2024);
            $min2024 = min($temperatura2024);

            // creazione della tabella
            foreach ($temperatura2023 as $mese => $valore2023) {
                $valore2024 = $temperatura2024[$mese]; 
                echo "<tr>";
                echo "<td>$mese</td>";
                
                // troviamo il td con la temperatura più alta o più bassa 2023
                if ($valore2023 == $max2023) {
                    echo "<td class='max'>$valore2023</td>";
                } elseif ($valore2023 == $min2023) {
                    echo "<td class='min'>$valore2023</td>";
                } else {
                    echo "<td>$valore2023</td>";
                }
                
                // troviamo il td con la temperatura più alta o più bassa 2024
                if ($valore2024 == $max2024) {
                    echo "<td class='min'>$valore2024</td>";
                } elseif ($valore2024 == $min2024) {
                    echo "<td class='min'>$valore2024</td>";
                } else {
                    echo "<td>$valore2024</td>";
                }
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
