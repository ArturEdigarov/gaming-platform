<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'blocks/header.php'; ?>

    <section class="hero">
        <div class="container">
            <div class="hero__text-block">
                <h2 class="hero__litte-title">3D game Dev</h2>
                <h1 class="hero__main-title">Work that we produce for our clients</h1>
                <p class="hero__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                <a class="hero__button" href="/portfolio.html">Get more details</a>
            </div>
            <img src="/images/joystick.svg" alt="" class="hero__img">
        </div>
    </section>

    <section class="choice">
        <div class="container">
            <div class="choice__trends">
                <h2 class="choice__trends-text">Currently Trending Games</h2>
                <a class="choice__button" href="/trending.php">SEE ALL</a>
            </div>
            <div class="choice__gallery">
                <?php
                    require_once 'lib/db.php';

                    $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
                    $query = $pdo->prepare($sql);
                    $query->execute();  
                    $trending = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach ($trending as $el) {
                        echo '                
                        <div class="choice__gallery-item"> 
                            <img class="choice__gallery-img" src="/images/'.$el->image.'" alt="">
                            <p class="choice__gallery-followers"><img src="/images/fire 1.svg" alt=""> '.$el->followers.'</p>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="photo">
        <div class="container">
            <div class="photo__title">
                <h1 class="photo__title-main">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
            </div>
            <div class="spiderman-section">
                <div class="photo__text">
                    <h2 class="photo__text-main">Lorem Ipsum</h2>
                    <p class="photo__text-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="spiderman"><img class="spiderman__img" src="/images/spiderman.svg" alt=""></div>
            </div>
        </div>
    </section>

    <section class="development">
        <div class="container">
            <div class="development-text">
                <h2 class="development-text__title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                <p class="development-text__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="development-items">
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">Mobile Game Development</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">PC Game Development</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">PS 4 Development</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">AR/VR Solutions</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">AR/VR Design</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
                <div class="development-items__item">
                    <img class="development__icon" src="/images/icons/3D.svg" alt="">
                    <p class="development-items__item__text">3D Modelings</p>
                    <img class="development__arrow-icon" src="/images/icons/arrow.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <div class="projects-text">
                <h2 class="projects-text__title">Our Recent Projects</h2>
                <p class="projects-text__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div class="projects-gallery">
                <img src="/images/projects-image/Rectangle 15.svg" alt="">
                <img src="/images/projects-image/Rectangle 16.svg" alt="">
                <img src="/images/projects-image/Rectangle 17.svg" alt="">
                <img src="/images/projects-image/Rectangle 18.svg" alt="">
                <img src="/images/projects-image/Rectangle 19.svg" alt="">
                <img src="/images/projects-image/Rectangle 20.svg" alt="">
            </div>
            <a class="choice__button" href="/portfolio.php">SEE ALL</a>
        </div>
    </section>

    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>