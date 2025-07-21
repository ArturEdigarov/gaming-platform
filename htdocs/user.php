<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <?php require_once 'blocks/header.php'; ?>
    <section class="feedback">
        <div class="container">

            <h2 class="feedback-title">Welcome, <?php echo $_COOKIE['login'] ?></h2>
            <p class="feedback-text">Lorem Ipsum is simply dummy text of the printing .</p>

            <form class="form" action="/lib/add-game.php" method="post">

                <div class="form-email">
                    <label for="image">Image</label>
                    <input class="input" class="form-input" name='image'>
                </div>

                <div class="form-password">
                    <label for="followers">Followers</label>
                    <input class="form-input" type='number' name='followers'>
                </div>
                <button type="submit" class="form-button">Add</button>

            </form>
        </div>
    </section>  
    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>