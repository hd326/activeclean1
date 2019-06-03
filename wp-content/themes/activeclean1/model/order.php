<?php
// this place needs 3 different functions
// one to update the appointment table,
// one to add the orders table,
// one to add to the payments/token

function add_order($type, $first_name, $last_name, $email, $phone_number, $st_address, $apt_num, $city, $state, $zip, $bdrms, $baths, $extra_services, $date, $time, $duration, $enter, $enter_instructions, $more_information, $total_amount_db){
    global $db;
    $query = '
    INSERT INTO orders (types, first_name, last_name, email, phone_number, st_address, apt_num, city, state, zip, bdrms, baths, extra_services, date_of_service, time_of_service, duration, enter, enter_instructions, more_information, total_amount_db)
    
    VALUES (:type, :first_name, :last_name, :email, :phone_number, :st_address, :apt_num, :city, :state, :zip, :bdrms, :baths, :extra_services, :date_of_service, :time_of_service, :duration, :enter, :enter_instructions, :more_information, :total_amount_db)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':st_address', $st_address);
    $statement->bindValue(':apt_num', $apt_num);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':bdrms', $bdrms);
    $statement->bindValue(':baths', $baths);
    $statement->bindValue(':extra_services', $extra_services);
    $statement->bindValue(':date_of_service', $date);
    $statement->bindValue(':time_of_service', $time);
    $statement->bindValue(':duration', $duration);
    $statement->bindValue(':enter', $enter);
    $statement->bindValue(':enter_instructions', $enter_instructions);
    $statement->bindValue(':more_information', $more_information);
    $statement->bindValue(':total_amount_db', $total_amount_db);
    $statement->execute();
    $statement->closeCursor();
}

/*function add_customer($customer_id, $first_name, $last_name, $email, $phone_number){
    global $db;
    $query = '
    INSERT INTO customers (customer_id, first_name, last_name, email, phone_number)
    VALUES (:customer_id, :first_name, :last_name, :email, :phone_number)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->execute();
    $statement->closeCursor();
}*/

/*function add_customer($email, $first_name, $last_name,
                      $password_1) {
    global $db;
    $password = sha1($email . $password_1);
    // takes the email with password to configure the db password
    $query = '
        INSERT INTO customers (emailAddress, password, firstName, lastName)
        VALUES (:email, :password, :first_name, :last_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->execute();
    $customer_id = $db->lastInsertId();
    // SQL
    $statement->closeCursor();
    return $customer_id;
    // this add's the customer to the database, but it also returns the most recent value, which is used later to set the user session.
}*/

/* TRANSACTION WITH OUT CHARGE
function add_transaction($transaction_id, $customer_id, $type, $first_name, $last_name, $email, $phone_number, $st_address, $apt_num, $city, $state, $zip, $bdrms, $baths, $extra_services, $date, $time, $duration, $enter, $enter_instructions, $more_information, $subtotal_db, $item_sales_tax_db, $total_amount_db){
    global $db;
    $query = '
    INSERT INTO transactions (transaction_id, customer_id, type, first_name, last_name, email, phone_number, st_address, apt_num, city, state, zip, bdrms, baths, extra_services, date_of_service, time_of_service, duration, enter, enter_instructions, more_information, subtotal_db, item_sales_tax_db, total_amount_db)
    
    VALUES (:transaction_id, :customer_id, :type, :first_name, :last_name, :email, :phone_number, :st_address, :apt_num, :city, :state, :zip, :bdrms, :baths, :extra_services, :date_of_service, :time_of_service, :duration, :enter, :enter_instructions, :more_information, :subtotal_db, :item_sales_tax_db, :total_amount_db)';
    $statement = $db->prepare($query);
    $statement->bindValue(':transaction_id', $transaction_id);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':st_address', $st_address);
    $statement->bindValue(':apt_num', $apt_num);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':bdrms', $bdrms);
    $statement->bindValue(':baths', $baths);
    $statement->bindValue(':extra_services', $extra_services);
    $statement->bindValue(':date_of_service', $date);
    $statement->bindValue(':time_of_service', $time);
    $statement->bindValue(':duration', $duration);
    $statement->bindValue(':enter', $enter);
    $statement->bindValue(':enter_instructions', $enter_instructions);
    $statement->bindValue(':more_information', $more_information);
    $statement->bindValue(':subtotal_db', $subtotal_db);
    $statement->bindValue(':item_sales_tax_db', $item_sales_tax_db);
    $statement->bindValue(':total_amount_db', $total_amount_db);
    $statement->execute();
    $statement->closeCursor();
}
*/

function add_transaction($transaction_id, $customer_id, $type, $first_name, $last_name, $email, $phone_number, $st_address, $apt_num, $city, $state, $zip, $bdrms, $baths, $extra_services, $date, $time, $duration, $enter, $enter_instructions, $more_information, $subtotal_db, $item_sales_tax_db, $total_amount_db){
    global $db;
    $query = '
    INSERT INTO transactions (transaction_id, customer_id, type, first_name, last_name, email, phone_number, st_address, apt_num, city, state, zip, bdrms, baths, extra_services, date_of_service, time_of_service, duration, enter, enter_instructions, more_information, subtotal_db, item_sales_tax_db, total_amount_db)
    
    VALUES (:transaction_id, :customer_id, :type, :first_name, :last_name, :email, :phone_number, :st_address, :apt_num, :city, :state, :zip, :bdrms, :baths, :extra_services, :date_of_service, :time_of_service, :duration, :enter, :enter_instructions, :more_information, :subtotal_db, :item_sales_tax_db, :total_amount_db)';
    $statement = $db->prepare($query);
    $statement->bindValue(':transaction_id', $transaction_id);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':st_address', $st_address);
    $statement->bindValue(':apt_num', $apt_num);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':bdrms', $bdrms);
    $statement->bindValue(':baths', $baths);
    $statement->bindValue(':extra_services', $extra_services);
    $statement->bindValue(':date_of_service', $date);
    $statement->bindValue(':time_of_service', $time);
    $statement->bindValue(':duration', $duration);
    $statement->bindValue(':enter', $enter);
    $statement->bindValue(':enter_instructions', $enter_instructions);
    $statement->bindValue(':more_information', $more_information);
    $statement->bindValue(':subtotal_db', $subtotal_db);
    $statement->bindValue(':item_sales_tax_db', $item_sales_tax_db);
    $statement->bindValue(':total_amount_db', $total_amount_db);
    $statement->execute();
    $statement->closeCursor();
}

function get_transactions(){
    global $db;
    $query = 'SELECT * FROM transactions';
    $statement = $db->prepare($query);
    $statement->execute();
    $transactions = $statement->fetchAll();
    $statement->closeCursor();
    return $transactions;
}

function add_gift_card($customer_id, $transaction_id, $amount, $to_name, $recipient_email, $from_name, $sender_email, $message, $card_code){
    global $db;
    $code = sha1($card_code);
    $query = 'INSERT INTO giftcards (customer_id, transaction_id, amount, to_name, recipient_email, from_name, sender_email, message, card_code) 
    
    VALUES (:customer_id, :transaction_id, :amount, :to_name, :recipient_email, :from_name, :sender_email, :message, :code)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->bindValue(':transaction_id', $transaction_id);
    $statement->bindValue(':amount', $amount);
    $statement->bindValue(':to_name', $to_name);
    $statement->bindValue(':recipient_email', $recipient_email);
    $statement->bindValue(':from_name', $from_name);
    $statement->bindValue(':sender_email', $sender_email);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':code', $code);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_coupon($card_code){
    global $db;
    $code = sha1($card_code);
    $query = 'SELECT * FROM giftcards where card_code = :code';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

// we do if(is_valid_coupon(){})else{}
// or if(is_valid_coupon(){}
// 


function update_coupon($card_code){
    global $db;
    $code = sha1($card_code);
    $query = "
    UPDATE `giftcards`
    SET taken = used
    WHERE card_code = :card_code";
    $statement = $db->prepare($query);
    $statement->bindValue(':card_code', $code);
    $statement->execute();
    $statement->closeCursor();
}


/*
on click, should we just do it thru AJAX? Yes.
*/



//<input class="calendar" placeholder="Click to Choose a Date" name="date" />
//time_of_service would have to be 
//date is equals to the input date box, whereas the time has to be with the time of service box... so depending on the time of service select name = time, option value '8to9'

function update_appointments($time, $date){
    global $db;
    $query = "
    UPDATE `appointments`
    SET $time = 1
    WHERE Day = :date";
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $statement->closeCursor();
    // this line will ring in the select options 8to9
    // set 8to9 (select option value) = 1 where Day = :date;
}

?>