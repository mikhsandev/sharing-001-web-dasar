<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Web Development Dasar</title>

    <style type="text/css">
        /* Untuk menganulir style bawaan browser */
        html, body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <?php
    // Looping pakai PHP
    for ($i = 0; $i < 100; $i++) {
        echo 'Hello World<br>';
    }
    ?>
    
    <div id="dariJs"></div>
    
    <script>
        // Looping pakai JS
        for (var i = 0; i < 100; i++) {
            document.getElementById('dariJs').innerHTML = document.getElementById('dariJs').innerHTML + "Ssst... Hello World<br>";
        }
    </script>
</body>
</html>