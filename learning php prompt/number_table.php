<?php
$allNumbers = [];
for ($i = 1; $i <= 50; $i++) {
    $allNumbers[] = $i;
}
// print_r($allNumbers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

                table {
            border-collapse: collapse;
            margin: 10px 0;
            width: 50%;
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #d3e9c3;
            /* similar green background */
        }

        th,
        td {
            border: 1px solid #333;
            padding: 7px;
        }

        th {
            background-color: #84b46f;
        }
    </style>
</head>

<body>
    <h1>Learning Simple php codes and logic</h1>
    <table>
        <thead>
            <th>All Numbers</th>
            <th>Even Numbers</th>
            <th>Odd Numbers</th>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= count($allNumbers); $i++) {
                echo "<tr>";
                echo "<td>" . $allNumbers[$i] . "</td>";
                if ($allNumbers[$i] % 2 == 0) {
                    echo "<td>" . $allNumbers[$i] . "</td>";
                    echo "<td></td>";
                } else{
                    echo "<td></td>";
                    echo "<td>" . $allNumbers[$i] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>