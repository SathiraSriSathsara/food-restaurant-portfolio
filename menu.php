<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu | Spice Haven</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oC1lgDxPSL9UB/0ibNZQrZZq5d9P/8d/J6qN6OoDl8jKJe7aq0kV10NMMhIyS50F" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" href="./img/ico/fav.png">
</head>

<body>
  <?php include('./components/nav.php') ?>
  <?php include('./components/items.php') ?>
  <section class="void"></section>
  <section class="popular-foods">
    <h2>Our Food Items</h2>
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