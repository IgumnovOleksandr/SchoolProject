<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Сайт ліцею №25 м.Житомира">
	<meta name="keywords" content="школа, ліцей, ліцей №25, Житомир, навчальний заклад, 25, м.Житомира">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Ліцей №25 м.Житомир</title>
	<link rel="stylesheet" type="text/css" href="/views/css/style_1.css">
	<link rel="stylesheet" type="text/css" href="/views/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/views/css/grid.css">
	<link href="../fancybox/dist/jquery.fancybox.css" rel="stylesheet" type="text/css">
  <link href="../datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="/views/js/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="/views/js/script.js"></script>
  <script src="../datepicker/dist/js/datepicker.min.js"></script>
	<script type="text/javascript" src="../fancybox/dist/jquery.fancybox.js"></script>
	<script type="text/javascript" src="/views/js/fancybox-script.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="top_header_block">
				<ul class="top_information_block">
					<li>
						<a href="#footer_block" class="top_information_block_contacts">Контакти</a>
					</li>
					<li>
						<a href="reviews" class="top_information_block_reviews">Відгуки</a>
					</li>
					<li>
						<a href="management" class="top_information_block_management">Адміністрація школи</a>
					</li>
					<li>
						<a href="#send_message_form" class="top_information_block_send_message">Надіслати повідомлення</a>
					</li>
				</ul>
				<form class="authorization_form" method="post">
				<img src="images/close-menu.png" class="close_authorization_form">
				<p class="authorization_form_text">Вхід</p>
				<div class="message_authorization_error">
					<p>Невірний Логін та(або) Пароль</p>
				</div>
				<ul class="authorization_form_list">
					<li class="list_item_login">
						<label for="login">Логін: </label>
						<input type="text" name="login" class="login authorization_inputs" id="authorization_login" placeholder="Логін або E-mail" autocomplete="off">
					</li>
					<li class="list_item_pass">
						<label for="pass">Пароль: </label>
						<input type="password" name="pass" class="pass authorization_inputs" id="authorization_pass" placeholder="Пароль" autocomplete="off">
					</li>
				</ul>
				<input type="submit" name="authorization_form_button" class="authorization_form_button" value="Увійти" onclick="return validation_auth(this.form)">
				<img src="/images/loading.gif" class="loading">
				<div class="bottom_auth_text">
					<p class="not_register_text">Ще не зареєструвалися?</p>
					<a href="regestration" class="regestration_link">Зареєструйтесь</a>
				</div>
			</form>
				<ul class="authorization_block">
					<li>
						<a class="authorization_button">Увійти</a>
						<div class="logged_in_block">
							<a class="logged_in_buttons my_cabinet" href="my_cabinet.php">Особистий кабінет</a>
							<a class="logged_in_buttons logout">Вихід</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="dark_header_block"></div>
			<div class="main_header_block" style="background-image: url('/images/lyceum25.jpg')">
				<div class="main_header_block_title">
					<p>Ліцей №25</p>
					<p>м.Житомир</p>
				</div>
			</div>
			<nav>
				<div class="navigation_block">
					<img src="/uploads_images/mobile-menu.png" class="navbar-button">
					<div class="navbar-toggler">
						<img src="/images/whitecloseicon.png" width="40px" height="40px" align="right" class="close-navbar-toggler">
						<a href="index">Головна</a>
						<a href="news">Новини</a>
						<a href="progress">Досягнення</a>
						<a href="gallery">Галерея</a>
						<a href="teachers">Педагогічний колектив</a>
						<a href="#footer_block" class="second_menu">Контакти</a>
						<a href="reviews" class="second_menu">Відгуки</a>
						<a href="management" class="second_menu">Адміністрація школи</a>
						<a href="#send_message_form" class="second_menu">Надіслати повідомлення</a>
					</div>
					<div class="navigation_block_links">
						<a href="index">Головна</a>
						<a href="news">Новини</a>
						<a href="progress">Досягнення</a>
						<a href="gallery">Галерея</a>
						<a href="teachers">Педагогічний колектив</a>
					</div>
					<div class="site_search">
						<form method="GET" action="search.php?q=">
							<input type="text" name="q" class="search_input" placeholder="Пошук" autocomplete="off">
							<input type="submit" class="search_button" value="Пошук">
						</form>
					</nav>
					<form class="send_message_form" method="post" id="send_message_form">
						<p align='left' class='send_message_form_success'>Повідомлення успішно надіслано!</p>
						<p align='left' class='send_message_form_error'>Ви не вказали ім’я або текст повідомлення!</p>
						<p class="send_message_title">Надіслати повідомлення</p>
						<label>Ім’я:</label>
						<input type="text" name="send_message_author" class="send_message_author">
						<label>Текст повідомлення:</label>
						<textarea name="send_message_text" class="send_message_text"></textarea>
						<input type="submit" name="send_message_button" class="send_message_button" value="Надіслати">
						<p class="not_logged_in">Щоб надіслати повідомлення, та переглянути відповідь потрібно увійти до свого аккаунту.</p>
					</form>
					<div class="background_dark"></div>
			</div>
		</header>
    <?= $content; ?>
    <footer class="footer_block" id="footer_block">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 white">
    				<p class="title">Контактні дані</p>
    			</div>
    			<div class="col-12 col-xl-6 footer_contact">
    				<p class="footer_contacts_list_phone"> (0412) 37-27-57</p>
    				<p class="footer_contacts_list_email"> lyceum25@gmail.com</p>
    				<p class="footer_contacts_list_adress">Адреса: м. Житомир, вул. Мала Бердичівська, 18
    			</div>
    			<div class="col-12 col-xl-6">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.159301235385!2d28.661593315967636!3d50.2516089794485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c6490f5efa225%3A0x51bf4bf6c311b469!2zTHljZXVtIOKEljI1!5e0!3m2!1sru!2sua!4v1562342960325!5m2!1sru!2sua" frameborder="0" allowfullscreen class="footer_google_maps" width="100%"></iframe>
    			</div>
    		</div>
    	</div>
    </footer>
  </body>
</html>
