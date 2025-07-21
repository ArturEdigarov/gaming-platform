<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/gaming-platform/css/news.css">
    <link rel="stylesheet" href="/gaming-platform/css/style.css">
</head>
<body>
    <header class="header">
        
        <div class="header__logo">
            <h1 class="header__logo-text">LOGO</h1>
        </div>
        <nav class="header__nav">
            <ul class="header__list">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/news.php">News</a></li>
            </ul>
            <a class="header__button" href="/contacts.php">Contact Us</a>
        </nav>
        
    </header>

    <section class="top">
        <div class="container">
            <div class="top-text">

                <div class="top-text__place">
                    <a href="/index.php">Home</a>
                    <h3>></h3>
                    <h3 class="text-place__orange">News</h3>
                </div>

                <h1 class="top-title">Lorem Ipsum is simply dummy text of the printing and.</h1>
                <p class="top-text__main">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="top-search">
                <p class="search"><img class="search-icon" src="/news-img/icons/search.png" alt="">Search</p>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="news-left">

            <div class="news-left__first">
                <img class="news-left__img" src="/news-img/witch.svg" alt="">
                <div class="left-duration">
                    <div class="left-name">John smash</div>
                    <p class="left-time">.5min</p>
                </div>
                <h2 class="left-title">Lorem Ipsum is simply dummy text dummy text </h2>
                <p class="left-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <p class="left-text margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>  

            <div class="news-left__second">
                <img class="news-left__img" src="/news-img/walking-man.svg" alt="">
                <div class="left-duration">
                    <div class="left-name">John smash</div>
                    <p class="left-time">.5min</p>
                </div>
                <h2 class="left-title">Lorem Ipsum is simply dummy text dummy text</h2>
                <p class="left-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
            </div>
            </div>
            <div class="news-right">

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/1.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name purple">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/2.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name blue">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/3.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name orange">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/4.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name blue">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/5.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name green">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/6.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name blue">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            <div class="news-right__item">
                <img class="news-right__img" src="/news-img/7.svg" alt="">
                <div class="news-right__main">
                    <div class="right-duration">
                        <div class="right-name violet">John smash</div>
                        <p class="right-place">.5min</p>
                    </div>
                    <h3 class="right-text">Lorem Ipsum is simply dummy text dummy text ? </h3>
                </div>
            </div>

            </div>
        </div>
    </section>

    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
    
</body>
</html>