<?php
	$startTime = microtime(true);
	
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		session_start();
		$token = htmlentities($_POST['token']);
		if($token === $_SESSION['token']){
			$min_len = 5;
			$max_len = 20;
			if(!empty($_POST['user']) || !empty($_POST['pass'])){
				$login 	= htmlentities($_POST['user']);
				$pass 	= htmlentities($_POST['pass']);
				if(strlen($pass) >= $min_len && strlen($pass) <= $max_len){
					if($login !== $pass){
						require_once ('../database/db.php');
						$zadanie = $db_PDO->prepare('SELECT * FROM `users` WHERE `user`=:name LIMIT 1');
						$zadanie->execute([ ':name' => $login ]);
						$ilu = $zadanie->rowCount();
						if($ilu === 1){
							$wiersz = $zadanie->fetch();
							if($login === $wiersz['user']){
								if(password_verify(htmlentities($pass), $wiersz['pass'])){
										// session_start();
										$_SESSION['zalogowany'] 	= true;
										$_SESSION['ready'] 			= "ready";
										$_SESSION['id'] 			= $wiersz['id'];
										$_SESSION['user'] 			= $wiersz['user'];
										$_SESSION['imie'] 			= $wiersz['imie'];
										$_SESSION['nazwisko'] 		= $wiersz['nazwisko'];
										$_SESSION['uprawnienia'] 	= $wiersz['uprawnienia'];
										$_SESSION['pkt'] 			= $wiersz['pkt'];
										$logowania 					= $wiersz['logowania'];
										$user 						= $wiersz['user'];
										$log 						= $logowania + 1;
										
										$zadanie = $db_PDO->prepare('UPDATE `users` SET `logowania`= :log  WHERE `user` = :user');
										$zadanie->bindParam(':log', $log, PDO::PARAM_INT);
										$zadanie->bindParam(':user', $user, PDO::PARAM_STR);
										$zadanie->execute();
										
										$totalTime = microtime(true) - $startTime;
										$_SESSION['alert'] = $totalTime;
										header('Location: ../index.php');
										exit;
								
								}else{
									session_start();
									$_SESSION['alert'] = 'Hasło nieprawidłowe';
									header('Location: ../logowanie/logowanie.php');
									exit;
								}
							}else{
								session_start();
								$_SESSION['alert'] = 'Login nieprawidłowy';
								header('Location: ../logowanie/logowanie.php');
								exit;
							}
						}else{
							session_start();
							$_SESSION['alert'] = 'Za dużo wyników';
							header('Location: ../logowanie/logowanie.php');
							exit;
						}	
					}else{
						session_start();
						$_SESSION['alert'] = 'Login i hasło nie może być takie samo';
						header('Location: ../logowanie/logowanie.php');
						exit();
					}
				}else{
					session_start();
					$_SESSION['alert'] = 'Hasło min '.$min_len.' max '.$max_len.' znaków';
					header('Location: ../logowanie/logowanie.php');
					exit;
				}
			}else{
				session_start();
				$_SESSION['alert'] = 'Uzupełnij dane';
				header('Location: ../logowanie/logowanie.php');
				exit;
			}
		}else{
			session_start();
			$_SESSION['alert'] = 'Token się nie zgadza';
			header('Location: ../logowanie/logowanie.php');
			exit;
		}	
	}else{
		session_start();
		$_SESSION['alert'] = 'POST is broken';
		header('Location: ../logowanie/logowanie.php');
		exit;
	}


?>