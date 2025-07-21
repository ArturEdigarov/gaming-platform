<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php require_once 'blocks/header.php'; ?>

    <section class="about-hero">
        <div class="container">
            <div class="about-hero__text">
                <div class="text-place">
                    <a href="/index.php">Home</a>
                    <h3>></h3>
                    <h3 class="text-place__about">About us</h3>
                </div>
                <h1 class="about-hero__text-title">Lorem Ipsum is simply dummy text of the printing and.</h1>
                <p class="about-hero__text-main">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a class="hero__button" href="/contacts.php">Get in touch <img class="vector" src="/about-img/icons/Vector.svg" alt=""></a>
            </div>
            <img class="about-hero__img" src="/about-img/hero.svg" alt="">
        </div>

    </section>

    <section class="work">
        <div class="container">
            <h2 class="work-text">Why work with us</h2>
            <div class="work-list">
                <div class="work-list__item">
                    <div class="item-color purple">
                        <p class="item-color__text">Lorem ipsum</p>
                    </div>
                        <h2 class="work-list__title">Lorem ipsum</h2>
                        <p class="work-list__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="work-list__item">
                    <div class="item-color brown">
                        <p class="item-color__text">Lorem ipsum</p>
                    </div>
                    <h2 class="work-list__title">Lorem ipsum</h2>
                    <p class="work-list__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    
                </div>
                <div class="work-list__item">
                    <div class="item-color green">
                        <p class="item-color__text">Lorem ipsum</p>
                    </div>
                    <h2 class="work-list__title">Lorem ipsum</h2>
                    <p class="work-list__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </section>

    <section class="witch">
        <div class="container">
            <div class="witch-image">
                <img src="/about-img/witch.svg" alt="">
            </div>
            <div class="witch-text">
                <p class="witch-text__little">Lorem ipsum</p>
                <h2 class="witch-text__title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                <p class="witch-text__main">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <h2 class="team-title">Our Team</h2>
            <div class="team-list">
                <div class="team-list__item">
                    <img src="/about-img/man.png" alt="">
                    <h3 class="list-item__name">John peter</h3>
                    <p class="list-item__work">COO</p>
                </div>
                <div class="team-list__item">
                    <img src="/about-img/w-women.png" alt="">
                    <h3 class="list-item__name">John peter</h3>
                    <p class="list-item__work">COO</p>
                </div>
                <div class="team-list__item">
                    <img src="/about-img/a-women.png" alt="">
                    <h3 class="list-item__name">John peter</h3>
                    <p class="list-item__work">COO</p>
                </div>
                <div class="team-list__item">
                    <img src="/about-img/anonim.png" alt="">
                    <h3 class="list-item__name">John peter</h3>
                    <p class="list-item__work">COO</p>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>