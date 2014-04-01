<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:locale" content="pl_PL" />
		<meta property="og:title" content="Empiria - " />
		<meta property="og:url" content="http://www.?????????????????" /> 
		<meta property="og:site_name" content="Empiria"/>
    	<meta property="og:type" content="website"/>
    	<meta property="og:image" content="?????????????????????????"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Usługi Remontowe - Empiria</title>  
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
		<script type="text/javascript" src="jquery.fullPage.js"></script>
		<script type="text/javascript" src="modernizr1234.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$.fn.fullpage({
					anchors: ['home', 'offer', 'gallery', 'contact'],
					menu: '#menu'
				});
			});
		</script>
		<script>
	      $(function () {
	        $('form').bind('submit', function (e) {
	          $.ajax({
	            type: 'post',
	            url: 'send.php',
	            data: $('form').serialize(),
	          });
	          e.preventDefault();
	          $('form')[0].reset();
	        });
	        
	      });
	      
	    </script>
	</head>
	<body>
		<header id="menu">
			<div id="logo_text"><a href="#home">empiriasilesia.pl</a></div>
			<div id="logo_contact">Empiria - Jacek Eichhorn<br/>Tel. 600-559-738</div>
			<nav>
	            <ul class="fancyNav">
	                <li id="home"><a href="index.php#home" class="homeIcon">Home</a></li>
	                <li id="about"><a href="#offer">Oferta</a></li>
	                <li id="projects"><a href="#gallery">Galeria</a></li>
	                <li id="contact"><a href="#contact">Kontakt</a></li>
	            </ul>
        	</nav>
        	
		</header>
		<section id="main_section">
			<div class="section active" id="section0">
					<h1>Witamy Państwa na stronie firmy „Empiria”.</h1>
					<p>Zapraszamy do korzystania z naszych usług w zakresie kompleksowych remontów mieszkań oraz wykończenia i dekoracji wnętrz. Kilkunastoletnia praktyka pozwala nam zapewnić najwyższej jakości wykonanie usługi oraz fachowe doradztwo w doborze materiałów, technologii i aranżacji.</p>
					<p>Do każdego klienta podchodzimy indywidualnie, a do każdej pracy z pasją.</p>
					<p>Dbamy o komfort i porządek w trakcie remontu oraz satysfakcję zleceniodawcy po jego zakończeniu.</p>
           			<p>Naszą pomoc oferujemy Państwu na terenie Chorzowa i okolicznych miast.</p>
					<p style="text-align: right;">
					Zapraszamy do zapoznania się z naszą ofertą.
					</p>
				</div>
			<div class="section" id="section1">
				<h1>Oferta</h1>
				<p>Podstawowy zakres prac:<p>
					<ul style="text-align: left; padding-left: 100px;">
						<li>usługi malarskie (ściany, sufity, okna, drzwi, grzejniki)</li>
						<li>tapetowanie ścian i sufitów</li>
						<li>artystyczne dekorowanie ścian</li>
						<li>gładzie gipsowe</li>
						<li>montaż sztukaterii</li>
						<li>sufity podwieszane (również wielopoziomowe)</li>
						<li>ścianki i zabudowy z płyt G-K</li>
						<li>montaż płyt G-K na klej</li>
						<li>panele podłogowe i ścienne</li>
						<li>układanie wykładzin podłogowych</li>
						<li>układanie glazury, terakoty, gresu</li>
						<li>wykonanie półek i wnęk w glazurze</li>
						<li>montaż mebli</li>
						<li>montaż drzwi wewnętrznych</li>
						<li>biały montaż WC, łazienka, kuchnia
						  (wanna, brodzik, bidet, kabina, wc, umywalka, zlewozmywak, baterie itp.)</li>
						<li>instalacje elektryczne (nowe i przeróbki)</li>
						<li>montaż osprzętu elektrycznego (oświetlenie, gniazdka itp.)</li>
						<li>instalacje wodno-kanalizacyjne (nowe i przeróbki)</li>	
					</ul>
					<p>Oraz wiele innych prac na życzenie, kierując się zasadą indywidualnego i elastycznego
						 podejścia do każdego klienta.</p>
			</div>
			<div class="section" id="section2">
				<?php include_once 'galeria.php';?>
			</div>
			<div class="section" id="section3">
				<h1>Usługi remontowe Empiria</h1>
				<p style="text-align: center;">Jacek Eichhorn</p>
				<p style="text-align: center;">41-500, Chorzów</p>
				<p style="text-align: center;">NIP 627-143-67-41</p>
				<p style="text-align: center;">Tel. 600 559 738</p>
				<img src="img/qrcode.png" height="200">
			</div>
		</section>
		<footer>
			<div id="footer_text">Copyright by Paweł Wołoszyn © 2014</div>
		</footer>
	</body>
</html>