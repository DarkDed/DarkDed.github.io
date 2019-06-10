<?php session_start()?>
<?php header('Content-Type: text/html; charset= utf-8')?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Научно-техническая библиотека</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/jquery-1.6.4.js"></script>
</head>
<body>
<div id="header">
	<ul id="menu">
		<li><a href="index.html" title="">Главная</a></li>
		<li><a href="inf.html" title="">Информатика</a></li>
		<li><a href="fiz.html" title="">Физика</a></li>
		<li><a href="mat.html" title="">Математика</a></li>
		<li><a href="him.html" title="">Химия</a></li>
		<li><a href="cont.html" title="">Контакты</a></li>
	</ul>
	<form id="search" method="get" action="">
		<fieldset>
		<input name="input1" type="text" id="input1" />
		<input name="input2" type="submit" id="input2" value="Search" />
		</fieldset>
	</form>
</div>
<div id="content">
	<div id="colOne">
		<div id="logo">
			<h1><a href="#">Библиотека</a></h1>
			<h2>Научно-техническая</a></h2>
		</div>
		<div class="box">
			<h3>Меню</h3>
			<ul class="bottom">
				<li><a href="index.html" title="">Главная</a></li>
				<li><a href="inf.html" title="">Информатика</a></li>
				<li><a href="fiz.html" title="">Физика</a></li>
				<li><a href="mat.html" title="">Математика</a></li>
				<li><a href="him.html" title="">Химия</a></li>
				<li><a href="cont.php" title="">Контакты</a></li>
				<li><a href="pog.html" title="">Отдать книгу</a></li>
			</ul>
		</div>
	</div>
	<div id="colTwo">
		<div class="box">
			<h3>Контакты:</h3><br><BR>
			<h4><strong>E-mail: bibloteka@mail.ru</strong></h4>
			<h4><strong>Телефон: 88005553535</strong></h4><BR>
			<li><a href="qaz.php" title="">Личный кабинет</a></li>
			
			<form id="frm" method="post">
			
			        <div> <input type=text name=name placeholder="Введите ваше имя"></div>
					
                    <div> <input type=text name=phon placeholder="8 800 555 35 35"></div>
					
                    <div> <input type=text name=email placeholder="Введите Ваш E-mail"></div>
					
			        <div class='formoch'>
                        <textarea rows="7" cols="20" name="message"></textarea> <br />
                    </div>
					
                    <input type="submit" value="Отправить" />
			</form>
		</div>
		
		<script>
                $(document).ready(function() {
                    $('#frm').submit(function() {
                        var msg = $('#frm').serialize();
                        $.ajax({
                            type: "POST",
                            url: "mail.php",
                            data: msg,
                            success: function(rez) {
                                $("#qw").html(rez);
                            }
                        });
                        return false;
                    });
                });
            </script>
            <div align='center' id='qw'> </div>
	</div>
</div>
<div id="footer">
	<p>Наша библиотека работает с 2014.<br /></p>
</div>
</body>
</html>
