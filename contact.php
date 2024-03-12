<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Spice Haven</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oC1lgDxPSL9UB/0ibNZQrZZq5d9P/8d/J6qN6OoDl8jKJe7aq0kV10NMMhIyS50F" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./img/ico/fav.png">
    <style>
        /* Add your contact page styles here */
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        .contact-container h1 {
            margin-bottom: 1.5rem;
        }

        .contact-form input[type="text"],
        .contact-form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            background-color: #e67e22;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #d35400;
        }
    </style>
</head>

<body>
    <?php include('./components/nav.php') ?>
    <section class="void"></section>
    <div class="content">
        <section class="contact">
            <div class="contact-container">
                <h1>Contact Us</h1>
                <form class="contact-form" action="submit.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required><br>
                    <input type="text" name="email" placeholder="Your Email" required><br>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea><br>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </div>
    <?php include('./components/footer.php') ?>
</body>

</html>