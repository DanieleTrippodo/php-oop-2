<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Collegamento CSS -->
     <link rel="stylesheet" href="./src/style.css">
</head>





<body>

    <h1>test</h1>

    <?php
        require_once 'Category.php';
        require_once 'Food.php';
        require_once 'Toy.php';
        require_once 'Accessory.php';

        // Creazione di tutte le categorie
        $dogCategory = new Category("Cane", "🐶");
        $catCategory = new Category("Gatto", "🐱");
        $birdCategory = new Category("Uccelli", "🐦");
        $fishCategory = new Category("Pesci", "🐠");



        // Creazione dei prodotti
        $products = [
            new Food("Cibo per Cani", 10.99, $dogCategory, "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg"),
            new Toy("Gioco per Gatti", 14.99, $catCategory, "https://m.media-amazon.com/images/I/61HueumPnRL._AC_SX569_.jpg"),
            new Accessory("Cuccia per Cani", 25.99, $dogCategory, "https://m.media-amazon.com/images/I/71UECqrKYNL._AC_SX569_.jpg"),
            new Food("Cibo per Pesci", 4.60, $fishCategory, "https://m.media-amazon.com/images/I/81QT69UIVKL._AC_SY879_.jpg"),
            new Accessory("Gabbia per Uccelli", 35.99, $birdCategory, "https://m.media-amazon.com/images/I/81bBo1NBBfL._AC_SX522_.jpg")
        ];

        // Stampa delle card dei prodotti
        foreach ($products as $product) {
            echo "<div class='card'>";
            echo "<img src='" . $product->getImage() . "' alt='" . $product->getTitle() . "'>";
            echo "<h3>" . $product->getTitle() . "</h3>";
            echo "<p>Prezzo: $" . $product->getPrice() . "</p>";
            echo "<p>Categoria: " . $product->getCategory()->getName() . " " . $product->getCategory()->getIcon() . "</p>";
            echo "<p>Tipo: " . $product->getType() . "</p>";
            echo "</div>";
        }
    ?>


    <div class="Boh">
        <h1>piccola cosa che mi ha fatto ridere...</h1>
        <img src="./src/photo_2024-07-03_16-22-18.jpg" alt="commentoHTMLAmazon">
        <p>ho trovato divertente il fatto che gli sviluppatori di amazon nelle pagine dei prodotti legati agli animali delle volte mettono dei commenti simpatici come questo gattino storto, ahaha</p>
    </div>

</body>
</html>