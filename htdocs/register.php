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

            <h2 class="feedback-title">Registration</h2>
            <p class="feedback-text">Lorem Ipsum is simply dummy text of the printing .</p>

            <form class="form" action="/lib/reg.php" method="post">
                <div class="form-name">

                    <div class="form-fname">
                        <label for="First-Name">Login</label>
                        <input class="input" type="text" class="form-input" name='login'>
                    </div>

                    <div class="form-lname">
                        <label for="Last-Name">Name</label>
                        <input class="input" type="text" class="form-input" name='name'>
                    </div>

                </div>

                <div class="form-email">
                    <label for="Email">Email</label>
                    <input class="input" type="email" class="form-input" name='email'>
                </div>

                <div class="form-password">
                    <label for="password">Password</label>
                    <input name="password" id="" class="form-input" type="password" name='password'>
                </div>
                <button type="submit" class="form-button">Register</button>
            </form>
            

        </div>
    </section>  
    <?php require_once 'blocks/loop.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>
</body>
</html>