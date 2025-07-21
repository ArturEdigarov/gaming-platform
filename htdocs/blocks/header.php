<header class="header">
            <div class="logo-register">
                <div class="header__logo">
                    <h1 class="header__logo-text">LOGO</h1>
                </div>
                <?php 
                if (isset($_COOKIE['login'])) {
                    echo                 
                    '<div class="register"> 
                    <a href="/user.php" class="cabinet-button">Cabinet</a>
                    </div>';
                } else {
                    echo                 
                    '<div class="register">
                        <a href="/gaming-platform/register.php" class="register-button">Register</a>
                        <a href="/gaming-platform/authorization.php" class="authorization-button">Authorization</a>
                    </div>';
                }
                ?>
            
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