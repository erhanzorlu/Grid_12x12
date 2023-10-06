<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kare Bulmaca</title>
    <style>
         body {
          background-color: wheat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .grid {
             background: white;
            display: grid;
            grid-template-columns: repeat(12, 60px);
            grid-template-rows: repeat(12, 60px);
            gap: 1px;
        }

        .cell {
            width: 60px;
            height: 60px;
            border: 1px solid #ccc;
        }

        .black {
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="grid">
    <?php

// Izgaranın boyutunu ayarlar
$gridSize = 12;

// Siyah kareleri oluşturur
$blackSquaresArray = [];

for ($i = 0; $i < 24; $i++) {
    $blackSquaresArray[] = [rand(1, $gridSize), rand(1, $gridSize)];
}

// Izgarayı oluşturur
for ($i = 1; $i <= $gridSize; $i++) {
    for ($j = 1; $j <= $gridSize; $j++) {
        $isBlack = in_array([$i, $j], $blackSquaresArray);
        echo "<div class='cell " . ($isBlack ? "black" : "") . "'></div>";
    }
}

?>


    </div>
</body>

</html>
