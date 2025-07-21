<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/gaming-platform/css/style.css">
    <link rel="stylesheet" href="/gaming-platform/css/contacts.css">
</head>
<body>
    <?php require_once 'blocks/header.php'; ?>

    <section class="map">
        <div class="container">

            <div class="map-text__place">
                <a href="/index.php">Home</a>
                <h3>></h3>
                <h3 class="map-place__orange">Contact us</h3>
            </div>

            <h1 class="map-title">Lorem Ipsum is simply dummy text of the printing and.</h1>
            <p class="map-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            <img class="map-img" src="/contacts-img/map.svg" alt="">

            <div class="contacts-list">
                <div class="contacts-list__item social">
                    <p class="social-text">Follow us</p>
                    <div class="social-icons">
                        <img src="/contacts-img/icons/facebook.svg" alt="" class="social-icon">
                        <img src="/contacts-img/icons/instagram.svg" alt="" class="social-icon">
                        <img src="/contacts-img/icons/twitter.svg" alt="" class="social-icon">
                        <img src="/contacts-img/icons/linkedin.svg" alt="" class="social-icon">
                    </div>
                </div>
                <div class="contacts-list__item phone">
                    <p class="phone-text"><img src="/contacts-img/icons/phone.svg" alt="" class="phone-icon"> +94 4444 5555 6</p>
                </div>
                <div class="contacts-list__item place">
                    <img src="/contacts-img/icons/gps.svg" alt="" class="place-icon">
                    <p class="place-text">but also the leap into electronic typesetting</p>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">

            <h2 class="feedback-title">Say hello</h2>
            <p class="feedback-text">Lorem Ipsum is simply dummy text of the printing .</p>

            <div class="form">
                <div class="form-name">

                    <div class="form-fname">
                        <label for="First-Name">First Name</label>
                        <input class="input" type="text" clsass="form-input">
                    </div>

                    <div class="form-lname">
                        <label for="Last-Name">Last Name</label>
                        <input class="input" type="text" class="form-input">
                    </div>

                </div>

                <div class="form-email">
                    <label for="Email">Email</label>
                    <input class="input" type="email" class="form-input">
                </div>

                <div class="form-message">
                    <label for="Message">Message</label>
                    <textarea name="message" id="" class="form-input"></textarea>
                </div>
            </div>
            <div class="form-button__container">
                <a href="#" class="form-button">Get in touch</a>
            </div>
            

        </div>
    </section>
 
    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>