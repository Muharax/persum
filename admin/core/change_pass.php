<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
	if(!empty($_POST['old_pass']) || !empty($_POST['pass1']) || !empty($_POST['pass1'])){
		$old_pass = htmlentities($_POST['old_pass']);
		$new_pass1 = htmlentities($_POST['pass1']);
		$new_pass2 = htmlentities($_POST['pass2']);
		$leng = 4;
		if(strlen($old_pass) > $leng && strlen($new_pass1) > $leng && strlen($new_pass2) > $leng){
			if($old_pass !== $new_pass2){
				if($new_pass1 === $new_pass2){
					session_start();
					if($new_pass2 !== $_SESSION['user']){
						$new_pass 		= password_hash($new_pass2, PASSWORD_DEFAULT);
						require_once ('../../database/db.php');
						$z = $db_PDO->prepare('SELECT `pass` FROM `users` WHERE `id`= :id LIMIT 1');
						$z->execute([ 'id' => $_SESSION['id']]);
						$ii = $z->rowCount();
						if($ii === 1){
							$w = $z->fetch();
							if(password_verify(htmlentities($old_pass), $w['pass'])){
								$token = htmlentities($_POST['token']);
								if($token === $_SESSION['token']){
									$z = $db_PDO->prepare('UPDATE
															`users`
														SET
															`pass` = :passcode
														WHERE `id` = :id');
									$z->execute([':passcode' => $new_pass, ':id' => $_SESSION['id']]);
									echo '<span style="color:green;font-weight:900;">Hasło zostało zmienione</span>';
									exit;
								}else{
									echo '<span style="color:red;font-weight:900;">Token się nie zgadza, odśwież stronę.</span>';
									exit;
								}
							}else{
								echo '<span style="color:red;font-weight:900;">Obecne hasło nie pasuje</span>';
								exit;
							}
						}else{
							echo '<span style="color:red;font-weight:900;">Za dużo wyników</span>';
							exit;
						}
					}else{
						echo '<span style="color:red;font-weight:900;">Hasło nie może być takie samo jak login</span>';
						exit;
					}
				}else{
					echo '<span style="color:red;font-weight:900;">Nowe hasła się nie zgadzają</span>';
					exit;
				}
			}else{
				echo '<span style="color:red;font-weight:900;">Stare i nowe hasło nie mogą być takie same</span>';
				exit;
			}
		}else{
			echo '<span style="color:red;font-weight:900;">Hasło jest za krótkie</span>';
			exit;
		}
	}else{
		echo '<span style="color:red;font-weight:900;">Uzupełnij dane</span>';
		exit;
	}
}else{
	echo '<span style="color:red;font-weight:900;">Method POST is broken</span>';
	exit;
}
		


	
?>

