<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="portfolio">
            <h1 class="heading">Our Portfolio</h1>
            <div class="portfolio-container">
                <a href="wedding-ceremony1.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony1.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>
                <a href="wedding-ceremony2.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony2.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>
                <a href="wedding-ceremony3.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony3.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>
                <a href="wedding-ceremony4.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony4.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>
                <a href="wedding-ceremony5.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony5.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>
                <a href="wedding-ceremony6.webp" class="box">
                    <div class="image">
                        <img src="wedding-ceremony6.webp" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

            </div>
        </section>






        <?php @include 'footer.php'; ?>
    </div>













    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

    <script>
        lightGallery(document.querySelector('.portfolio .portfolio-container'));
    </script>

</body>

</html>