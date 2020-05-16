<?php
if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['tel'])){
	
	$theme = 'New message';
	$letter = 'Message content:  ';
	$letter .= 'Name: '.$_POST['name'] ;
	$letter .= 'Email: '.$_POST['email'] ;
	$letter .= 'Message: '.$_POST['tel'] ;
	
	mail('redwilliams26@yandex.ru'), $theme, $letter, $headers))
}
?>