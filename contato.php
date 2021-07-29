<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProductRunt</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="ico.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<a href="index.php"><div class="logo"><img src="images/logo.png"></div></a>
			</header>
			<ul class="menu-desktop">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
			<div class="menu-mobile">
				<i class="fas fa-bars"></i>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>
		</div><!-- center -->
	</section><!-- topo -->

    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante, <br>primeira conversa.</h2>
                <br>
                <p><b>Telefone:</b> +55 48 XXXX-XXXX</p>
                <p><b>E-mail:</b> contato@productrunt.com.br</p>
                <p><b>Endereço:</b> 1600 Amphitheatre Pkwy,<br> Mountain View, CA 94043, EUA</p>
            
            <div class="mapa-container">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe style="border: 2px solid #e3e3e3;" width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q=1600%20Amphitheatre%20Pkwy,%20Mountain%20View,%20CA%2094043,%20EUA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div><!--mapouter-->
            </div><!--w50 contato-info-->
            </div><!--mapa-container-->

            <div class="w50 contato-form">
                <form>
                    <input placeholder="Nome" type="text"/>
                    <input placeholder="E-mail" type="text"/>
                    <input placeholder="Telefone" type="text"/>
                    <select>
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>
                    <textarea placeholder="Fale mais sobre sua necessidade..."></textarea>
                    <input type="submit" value="Enviar!">
                </form>
            </div>

            <div class="clear"></div>
        </div><!--center-->
    </section>

	<footer style="padding: 60px 0;">
	<div class="center">
		<div class="col-footer">
			<h2>Suporte</h2>
			<a href="">Contato</a>
			<a href="">FAQ</a>
		</div>
		<div class="col-footer">
			<h2>Suporte</h2>
			<a href="">Contato</a>
			<a href="">FAQ</a>
		</div>
		<div class="col-footer">
			<h2>Suporte</h2>
			<a href="">Contato</a>
			<a href="">FAQ</a>
		</div>
		<div style="width: 50%; text-align: right;" class="col-footer2">
			<img src="images/logo-footer.png">
		</div>
	</div><!--center-->
	</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>