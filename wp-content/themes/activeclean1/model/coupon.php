<?php

require('database.php');

if (isset($_GET['card_code']) === true && empty($_GET['card_code']) === false) {
    global $db;
    $card_code = $_GET['card_code'];
    $query = "SELECT * FROM giftcards WHERE card_code = :card_code AND taken IS NULL";
    $statement = $db->prepare($query);
    $statement->bindValue(':card_code', $card_code);
    $statement->execute();
    $code = $statement->fetch();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    $discount = $code['amount'];
    
    if ($valid){
        echo $discount;
    } else {
        echo "0";
    }
}

?>