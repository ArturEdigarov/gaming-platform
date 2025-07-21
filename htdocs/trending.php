<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/gaming-platform/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'blocks/header.php'; ?>

    <section class="choice">
        <div class="container">
            <div class="choice__trends">
                <h2 class="choice__trends-text">Currently Trending Games</h2>
            </div>
            <div class="choice__gallery">
                <?php
                    require_once 'lib/db.php';

                    $sql = 'SELECT * FROM trending ORDER BY id DESC';
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


    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>