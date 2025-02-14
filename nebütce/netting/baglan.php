<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=nebutce;charset=utf8",'root','');
	//echo "bağlantı başarılı";

} catch(PDOExpception $e)
{
	echo $e->getMessage();
}
