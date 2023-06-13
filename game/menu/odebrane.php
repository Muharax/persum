<?php

if(!isset($_SESSION['id'])){
    echo 'Brak dostępu, <a href="#">zaloguj</a> się aby sprawdzić wiadomośći.';
    exit;
}

// echo "SIEMA";
function get_msg(){

    require ('database/db.php');
    // session_start();

    $query = 'SELECT * FROM `wiadomosci` WHERE `msg_odbiorca`=:odbiorca ORDER BY `msg_przeczytane` DESC LIMIT 50';
    $zadanie= $db_PDO->prepare($query);
    
    $zadanie->execute(array(':odbiorca' => $_SESSION['id']));

    $wiersz = $zadanie->fetch();
    $ilosc = $wiersz['msg_nadawca'];
    return $ilosc;
}

echo get_msg();

?>