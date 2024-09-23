<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">

</head>

<body>





    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="pricing">

            <h1 class="heading">Our Pricing</h1>
            <div class="box-container">
                <div class="box">
                    <h3>Basic Plan</h3>
                    <div class="price">$250/-</div>
                    <div class="list">
                        <p> <i class="fas fa-check"></i> Photography</p>
                        <p> <i class="fas fa-check"></i> Bride Makeup</p>
                        <p> <i class="fas fa-check"></i> Wedding Ceremony</p>
                        <p> <i class="fas fa-check"></i> Meals and Drinks</p>
                        <p> <i class="fas fa-check"></i> Guest Invitations</p>
                    </div>
                    <a href="contact.php" class="btn">Choose Plan</a>
                </div>

                <div class="box">
                    <h3>Premium Plan</h3>
                    <div class="price">$650/-</div>
                    <div class="list">
                        <p> <i class="fas fa-check"></i> Photography</p>
                        <p> <i class="fas fa-check"></i> Bride Makeup</p>
                        <p> <i class="fas fa-check"></i> Wedding Ceremony</p>
                        <p> <i class="fas fa-check"></i> Meals and Drinks</p>
                        <p> <i class="fas fa-check"></i> Guest Invitations</p>
                    </div>
                    <a href="contact.php" class="btn">Choose Plan</a>
                </div>

                <div class="box">
                    <h3>Ultimate Plan</h3>
                    <div class="price">$1250/-</div>
                    <div class="list">
                        <p> <i class="fas fa-check"></i> Photography</p>
                        <p> <i class="fas fa-check"></i> Bride Makeup</p>
                        <p> <i class="fas fa-check"></i> Wedding Ceremony</p>
                        <p> <i class="fas fa-check"></i> Meals and Drinks</p>
                        <p> <i class="fas fa-check"></i> Guest Invitations</p>
                    </div>
                    <a href="contact.php" class="btn">Choose Plan</a>
                </div>

            </div>
        </section>

        <section class="reviews">

            <h1 class="heading">Happy Clients</h1>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src="wedding-ceremony2.webp" alt="">
                        <h3>John and Elina</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem distinctio laudantium aliquam iusto hic voluptatum alias nihil, obcaecati iste!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="wedding-ceremony4.webp" alt="">
                        <h3>John and Elina</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem distinctio laudantium aliquam iusto hic voluptatum alias nihil, obcaecati iste!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="wedding-ceremony6.webp" alt="">
                        <h3>John and Elina</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem distinctio laudantium aliquam iusto hic voluptatum alias nihil, obcaecati iste!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="wedding-ceremony5.webp" alt="">
                        <h3>John and Elina</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem distinctio laudantium aliquam iusto hic voluptatum alias nihil, obcaecati iste!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination"></div>

            </div>


        </section>


        <?php @include 'footer.php'; ?>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>