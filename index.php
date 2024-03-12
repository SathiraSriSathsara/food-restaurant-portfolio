<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice Haven | Sri Lankan Food Resturent</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oC1lgDxPSL9UB/0ibNZQrZZq5d9P/8d/J6qN6OoDl8jKJe7aq0kV10NMMhIyS50F" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./img/ico/fav.png">
</head>

<body>
    <?php include('./components/nav.php') ?>
    <div class="slider-container">
        <div class="slider">
            <img class="slide" src="./img/banner-01.png" alt="Image 1">
            <img class="slide" src="./img//banner-02.png" alt="Image 2">
            <img class="slide" src="./img/banner-03.png" alt="Image 3">
        </div>
        <div class="btn">
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <?php include('./components/welcome.php') ?>
    <?php include('./components/items.php') ?>
    <section class="popular-foods">
        <h2>Our Most Popular Food Items</h2>
        <div class="cards-container">
            <?php foreach ($foodItems as $foodItem) : ?>
                <div class="card">
                    <img src="<?php echo $foodItem['img']; ?>" alt="<?php echo $foodItem['name']; ?>">
                    <h3><?php echo $foodItem['name']; ?></h3>
                    <p><?php echo $foodItem['description']; ?></p>
                    <span class="price"><?php echo $foodItem['price']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include('./components/footer.php') ?>
    <script src="./js/script.js"></script>
</body>

</html>