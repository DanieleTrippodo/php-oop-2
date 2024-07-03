<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>





<body>
    <?php
        require_once __DIR__ . '/src/Category.php';
        require_once __DIR__ . '/src/Food.php';
        require_once __DIR__ . '/src/Toy.php';
        require_once __DIR__ . '/src/Accessory.php';

        // Creazione di tutte le categorie
        $dogCategory = new Category("Cane", "🐶");
        $catCategory = new Category("Gatto", "🐱");
        $birdCategory = new Category("Uccelli", "🐦");
        $fishCategory = new Category("Pesci", "🐠");

    ?>
</body>
</html>