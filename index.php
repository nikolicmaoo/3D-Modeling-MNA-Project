<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Modeling MNA - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <div class="priheder">
        <div class="socialmedia">
            <a href="www.facebook.com" target="_blank">
                <img src="/images/facebook.png" alt="facebook" style="height: 25px; width:25px;">
            </a>
            <a href="www.instagram.com" target="_blank">
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
    <div class="prvastranica">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="prvitekst"><br><br><br><br>
            <h1 class="dd">Dobrodošli.</h1>
            <h2>3D modeling samo za Vas.</h2> <br>
            <button class="dugme" type="button" onclick="location.href = '/onama.php';">
                Saznaj više
            </button> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
        <lord-icon src="https://cdn.lordicon.com/wtfdpwey.json" trigger="loop" colors="primary:white,secondary:#e9ded6" style="width:50px;height:50px; position: relative;
    top:50%; left:50%; transform:translate(-50%,-50%);">
        </lord-icon>
    </div> <br><br><br>
    <div data-aos="fade-up">
    <div class="slika4">
    <div class="tekst4">
        <h1>
            Mlada korporacija sa mladim i ambicioznim kolektivom sa sedištem u Novom Sadu.
        </h1>
    </div> </div></div>
    <div data-aos="fade-right">
        <form class="onama">
        <h1 style="text-align: center;" class="onamatekst">
          Tehnologije koje korstimo prilikom izrade. </h1><br><br><br>
        <table class="tabela">
            <tr style="padding:65px; border:1px solid black;">
                <th>
                <img src="/images/blender.png" alt="Blender" style="text-align:left"><br>
                <h3>
                   Blender
                </h3>
                </th>
                <th>
                <img src="/images/phs.png" alt="Photoshop" style="display:center"><br>
                <h3>
                    Adobe Photohop
                </h3>
                </th>
                <th>
                <img src="/images/ilu.png" alt="Unrealengine"><br>
                <h3>
                  Adobe Ilustrator
                </h3>
                </th>
                <th>
                <img src="/images/light.png" alt="Unrealengine"><br>
                <h3>
                  Adobe Lightroom
                </h3>
                </th>
                <th>
                <img src="/images/ue.png" alt="Unrealengine"><br>
                <h3>
                  Unreal Engine
                </h3>
                </th>
                <th>
                <img src="/images/frame.png" alt="Unrealengine"><br>
                <h3>
                  Adobe Framemaker
                </h3>
                </th>
                <th>
                <img src="/images/in.png" alt="Unrealengine"><br>
                <h3>
                  Adobe Indesign
                </h3>
                </th>
            </tr>
        </table>
</div>
</form>
    <script>
        AOS.init();
    </script> 
    <div data-aos="fade-up">
        <form class="cene">
     <h1 style="text-align:center;" class="cenetekst">
       Jedan deo radova koje smo imali priliku odraditi.
     </h1> <br><br><br><br>
     <div class="gallery">
    <img src="/images/s5.jpg" alt="Primer 1" width="500" height="300">
</div>
<div class="gallery">
    <img src="/images/s2.jpg" alt="Primer 2" width="500" height="300">
</div>
<div class="gallery">
    <img src="/images/s4.jpg" alt="Primer 3" width="500" height="300">
</div><br><br>
<div class="center">
<button class="radovidugme" type="button" onclick="location.href = '/radovi.php';">
                Saznaj više
            </button>
</div>
        </form> <br><br><br><br><br><br>
    <div class="waviy">
        <span style="--i:1">K</span>
        <span style="--i:2">O</span>
        <span style="--i:3">N</span>
        <span style="--i:4">T</span>
        <span style="--i:5">A</span>
        <span style="--i:6">K</span>
        <span style="--i:7">T</span>
    </div> <br><br><br><br><br>
    <div data-aos="fade-right">
        <form class="kontakt">
            <h3>
                Za sva pitanja, sugestije ili saradnju možete nas kontaktirati na nekoliko načina:
            </h3><br><br><br>
            <div class="kontel">
                <img src="/images/telefon.png" alt="telefon" style="height: 25px; width:25px; margin-right: 300px;">
                <h3 style="text-align: center; margin-right: 110px; margin-top: -25px;">+38112345678</h3>
            </div><br>
            <div class="konadr">
                <img src="/images/adresa.png" alt="adresa" style="height: 25px; width:25px; margin-right: 300px;">
                <h3 style="text-align: center; margin-right: -62px; margin-top: -25px;">Mihajla Pupina 37 52509 Novi Sad
                </h3>
            </div><br>
            <div class="koninsta">
                <a href="www.instagram.com" target="_blank">
                    <img src="/images/instagram.png" alt="instagram" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: 30px; margin-top: -25px;">@3DModeliranjeMNA
                </h3>
            </div><br>
            <div class="konfb">
                <a href="www.facebook.com" target="_blank">
                    <img src="/images/facebook.png" alt="facebook" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: 30px; margin-top: -25px;">3D Modeliranje MNA
                </h3>
            </div><br>
            <div class="konmail">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJQvtWHMpNchSxLrMRtBwTNcGmZPQKqjCvJNLnLztwrrwNVjlzZZJFRSkQBmsWHfdXkQ" target="_blank">
                    <img src="/images/mail.png" alt="mail" style="height: 25px; width:25px; margin-right: 300px;">
                </a>
                <h3 style="text-align: center; margin-right: -55px; margin-top: -25px;">3DModeliranjeMNA@gmail.com
                </h3>
            </div>
        </form> <br><br><br>
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