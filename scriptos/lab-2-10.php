<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица 10x10</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <?php
        $number = 1;
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 10; $j++) {
                $color = ($number % 2 == 0) ? 'red' : 'black';
                echo "<td style='color: $color;'>$number</td>";
                $number++;
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
