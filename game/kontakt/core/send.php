<?php
header('Location: ../kontakt.php');

exit;
error_reporting (E_ALL);

$zz1 = false;
$zz2 = false;
$zz3 = false;

if(isset($_POST['z1'])){
	$z1 = $_POST['z1'];
}

if (filter_var($z1, FILTER_VALIDATE_EMAIL)) {
  $zz1 = true;
} else {
  $zz1 = false;
  echo $z1.'<div style="color:red"> is not a valid email address</div>';
  exit;
}

if(isset($_POST['z2'])){
	$z2 = $_POST['z2'];
	$zz2 = true;
}

if(isset($_POST['z3'])){
	if(empty($_POST['z3'])){
		$zz3 = false;
		echo '<div style="color:orange">Write something...</div>';
		exit;
	}
	$z3 = $_POST['z3'];
	$zz3 = true;
}



try{
	if($zz1 === true && $zz2 === true && $zz3 === true){
		require_once ('../database/db-connect.php');
		$z = $db_PDO->prepare('INSERT INTO `messages`(
											`msg_sender`,
											`msg_topic`,
											`msg_content`,
											`msg_date`
										)
										VALUES(
											:email,
											:topic,
											:content,
											:date
										)');
		$z->execute([ ':email' => $z1, ':topic' => $z2, ':content' => $z3, ':date' => date('Y-m-d H:i:s')]);
		
		echo '<div style="color:green">Wiadomość wysłana, have nice day !</div>';
		exit;
	}else{
		echo 'Coś poszło nie tak';
	}
}catch (PDOExeption $error){
	echo $error->getMessage();
	exit ('Database error');
}
	
	
	

		

   


