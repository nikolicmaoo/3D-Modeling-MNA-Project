<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Modeling MNA - Kontakt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<div class="priheder">
        <div class="socialmedia">
            <a href="www.facebook.com" target="_blank">
                <img src="/images/facebook.png" alt="facebook" style="height: 25px; width:25px;">
            </a>
            <a href="instagram.com" target="_blank">
                <img src="/images/instagram.png" alt="instagram" style="height: 25px; width:25px;">
            </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJQvtWHMpNchSxLrMRtBwTNcGmZPQKqjCvJNLnLztwrrwNVjlzZZJFRSkQBmsWHfdXkQ" target="_blank">
                <img src="/images/mail.png" alt="mail" style="height: 25px; width:25px;">
            </a>
        </div>
        <h3 style="margin-top: 3px;">+38112345678</h3>
    </div>
    <header>
        <div class="logo">
            <h1 class="fun"> 3D Modeling MNA</h1>
        </div>
        <div class="meni">
            <div id="menulist">
            <a href="/index.php" style="text-decoration: none; list-style-type: none; color: black;">HOME</a> &nbsp;
            <a href="/onama.php" style="text-decoration: none; list-style-type: none; color: black;">O NAMA</a> &nbsp;
            <a href="/radovi.php" style="text-decoration: none; list-style-type: none; color: black;">RADOVI</a> &nbsp;
            <a href="/kontakt.php" style="text-decoration: none; list-style-type: none; color: black; overflow: hidden;">KONTAKT</a> &nbsp;
        </div>
        </div>
        <img src="/images/menu.png" alt="menu-icon" class="menu-icon" onclick="togglemenu()">
        <br>
    </header>
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="slika3">
    <div class="waviy">
        <span style="--i:1">K</span>
        <span style="--i:2">O</span>
        <span style="--i:3">N</span>
        <span style="--i:4">T</span>
        <span style="--i:5">A</span>
        <span style="--i:6">K</span>
        <span style="--i:7">T</span>
    </div> </div>
    <div data-aos="fade-right">
    <script>
        AOS.init();
    </script>
        <section class="glavnakontakt">
        <h2>
                Za sva pitanja, sugestije ili saradnju možete nas kontaktirati na nekoliko načina:
            </h2><br><br><br><br><br><br><br>
            <div>
                <img src="/images/telefon.png" alt="telefon" style="height: 25px; width:25px; margin-right: 300px;">
                <h3 style="text-align: center; margin-right: 110px; margin-top: -25px;">+38112345678</h3>
            </div><br>
            <div>
                <img src="/images/adresa.png" alt="adresa" style="height: 25px; width:25px; margin-right: 300px;">
                <h3 style="text-align: center; margin-right:-62px; margin-top: -25px;">Mihajla Pupina 37 52509 Novi Sad
                </h3>
            </div><br>
            <div>
                <a href="www.instagram.com" target="_blank">
                    <img src="/images/instagram.png" alt="instagram" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: 30px; margin-top: -25px;">@3DModeliranjeMNA
                </h3>
            </div><br>
            <div>
                <a href="www.facebook.com" target="_blank">
                    <img src="/images/facebook.png" alt="facebook" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: 30px; margin-top: -25px;">3D Modeliranje MNA
                </h3>
                   </div><br>
                    <div>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJQvtWHMpNchSxLrMRtBwTNcGmZPQKqjCvJNLnLztwrrwNVjlzZZJFRSkQBmsWHfdXkQ" target="_blank">
                    <img src="/images/mail.png" alt="mail" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: -55px; margin-top: -25px;">3DModeliranjeMNA@gmail.com
                </h3>
            </div> <br><br><br><br><br>
            <?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

<form action="/indexmail.php" method="post">
        <h1>Pošaljite nam poruku!</h1>
    <br><br>

    <div style="font-weight:bolder;">
        <label for="name">Ime:</label>
        <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Puno ime" style="padding:5px;">
        <small><?= $errors['name'] ?? '' ?></small>
    </div>
<br>
    <div style="font-weight: bolder;">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email addres-a" style="padding:5px;">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>
<br>
    <div style="font-weight:bolder;" >
        <label for="message">Poruka:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div><br>

    <button type="submit" class="posaljidugme">Posalji poruku</button>
</form>

        </section>
</div>
        <footer class="futer"><br>
            <h1 class="fun"> 3D Modeling MNA</h1>
            <div class="socialfuter">
                <a href="www.instagram.com" target="_blank">
                    <img src="/images/instagram.png" alt="instagram" style="height: 25px; width: 25px;">
                </a>
                <a href="www.facebook.com" target="_blank">
                    <img src="/images/facebook.png" alt="facebook" style="height: 25px; width:25px;">
                </a>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJQvtWHMpNchSxLrMRtBwTNcGmZPQKqjCvJNLnLztwrrwNVjlzZZJFRSkQBmsWHfdXkQ" target="_blank">
                    <img src="/images/mail.png" alt="mail" style="height: 25px; width:25px;">
                </a>
            </div><br>
            <p style="text-align:center ;">
                &copy; All rights reserved <?php echo date('Y'); ?>
            </p><br>
            <p style="text-align:center ;">
                Designed by <a href="#" style="text-decoration: none; color:black;">Magdalena Nikolic</a>
            </p><br>
        </footer>
        <script src="/nav.js"></script>
</body>

</html>