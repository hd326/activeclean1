<?php
/*function get_times($date){
        global $db;
        $query = "select * from appointments where Day = ':date'";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':date', $date);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
    }
*/
require('database.php');


/*if (isset($_POST['date']) === true && empty($_POST['date']) === false) {
    global $db;
    $date = $_POST['date'];
    $query = "select * from appointments where Day = :date";
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    */
if (isset($_GET['date']) === true && empty($_GET['date']) === false) {
    global $db;
    $date = $_GET['date'];
    $query = "select * from appointments where Day = :date";
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    $eight_to_nine = $result['8AM_9AM'];
    $nine_to_ten = $result['9AM_10AM'];
    $ten_to_eleven = $result['10AM_11AM'];
    $eleven_to_twelve = $result['11AM_12PM'];
    $twelve_to_one = $result['12PM_1PM'];
    $one_to_two = $result['1PM_2PM'];
    $two_to_three = $result['2PM_3PM'];
    $three_to_four = $result['3PM_4PM'];
    $four_to_five = $result['4PM_5PM'];
    $five_to_six = $result['5PM_6PM'];
    $six_to_seven = $result['6PM_7PM'];
    
    //$eight_to_nine = $result['8to9'];
    //$nine_to_ten = $result;
    //$ten_to_eleven = $result;
    //$eleven_to_twelve = $result;
    //$twelve_to_one = $result;
    //$one_to_two = $result;
    //$two_to_three = $result;
    //$three_to_four = $result;
    //$four_to_five = $result;
    //$five_to_six = $result;
    //$six_to_seven = $result;
    
   // if($eight_to_nine != 1){
   //     echo "<option value='8:00AM-9:00AM'>8:00AM - 9:00AM</option>";
   // }
   // 
   // if($nine_to_ten != 1){
   //     echo "<option value='9:00AM-10:00AM'>9:00AM - 10:00AM</option>";
   // } 
   // 
   // if($ten_to_eleven != 1){
   //     echo "<option value='10:00AM-11:00AM'>10:00AM - 11:00AM</option>";
   // }
   // 
   // if($eleven_to_twelve != 1){
   //     echo "<option value='11:00AM-12:00AM'>11:00AM - 12:00PM</option>";
   // }
   // 
   // if($twelve_to_one != 1){
   //     echo "<option value='12:00PM-1:00PM'>12:00PM - 1:00PM</option>";
   // }
   // 
   // if($one_to_two != 1){
   //     echo "<option value='1:00PM-2:00PM'>1:00PM - 2:00PM</option>";
   // }
   // 
   // if($two_to_three != 1){
   //     echo "<option value='2:00PM-3:00PM'>2:00PM - 3:00PM</option>";
   // }
   //     
   // if($three_to_four != 1){
   //     echo "<option value='3:00PM-4:00PM'>3:00PM - 4:00PM</option>";
   // }
   //     
   // if($four_to_five != 1){
   //     echo "<option value='4:00PM-5:00PM'>4:00PM - 5:00PM</option>";
   // }
   //     
   // if($five_to_six != 1){
   //     echo "<option value='5:00PM-6:00PM'>5:00PM - 6:00PM</option>";
   // }
   //     
   // if($six_to_seven != 1){
   //     echo "<option value='6:00PM-7:00PM'>6:00PM - 7:00PM</option>";
   // }
    
    if($eight_to_nine != 1){
        echo "<option value='8AM_9AM'>8:00AM - 9:00AM</option>";
    }
    
    if($nine_to_ten != 1){
        echo "<option value='9AM_10AM'>9:00AM - 10:00AM</option>";
    } 
    
    if($ten_to_eleven != 1){
        echo "<option value='10AM_11AM'>10:00AM - 11:00AM</option>";
    }
    
    if($eleven_to_twelve != 1){
        echo "<option value='11AM_12PM'>11:00AM - 12:00PM</option>";
    }
    
    if($twelve_to_one != 1){
        echo "<option value='12AM_1PM'>12:00PM - 1:00PM</option>";
    }
    
    if($one_to_two != 1){
        echo "<option value='1PM_2PM'>1:00PM - 2:00PM</option>";
    }
    
    if($two_to_three != 1){
        echo "<option value='2PM_3PM'>2:00PM - 3:00PM</option>";
    }
        
    if($three_to_four != 1){
        echo "<option value='3PM_4PM'>3:00PM - 4:00PM</option>";
    }
        
    if($four_to_five != 1){
        echo "<option value='4PM_5PM'>4:00PM - 5:00PM</option>";
    }
        
    if($five_to_six != 1){
        echo "<option value='5PM_6PM'>5:00PM - 6:00PM</option>";
    }
        
    if($six_to_seven != 1){
        echo "<option value='6PM_7PM'>6:00PM - 7:00PM</option>";
    }
    
   //echo $eight_to_nine;
   //echo $nine_to_ten;
   //echo $ten_to_eleven;
   //echo $eight_to_nine;
   //echo $nine_to_ten;
   //echo $ten_to_eleven;
   //echo $eleven_to_twelve;
   //echo $twelve_to_one;
   //echo $one_to_two;
   //echo $two_to_three;
   //echo $three_to_four;
   //echo $four_to_five;
   //echo $five_to_six;
   //echo $six_to_seven;
}


/*if (isset($_POST['date']) === true && empty($_POST['date']) === false) {
    $query = mysql_query("select * from appointments where Day ='" . mysql_real_escape_string(trim($_POST['date'])) . "' 
    ");
    echo (mysql_num_rows($query) !== 0) ? mysql_result($query, 0, 'date') : 'not found';
}*/

/*<?php if (isset($eight_to_nine) && $eight_to_nine !== 1) { echo '<option>8:00AM - 9:00AM</option>'; }   ?>
<?php if (isset($nine_to_ten) && $nine_to_ten !== 1) { echo '<option>9:00AM - 10:00AM</option>'; } ?>
<?php if (isset($ten_to_eleven) && $ten_to_eleven !== 1) { echo '<option>10:00AM - 11:00AM</option>'; } ?>
<?php if (isset($eleven_to_twelve) && $eleven_to_twelve !== 1) { echo '<option>11:00AM - 12:00PM</option>'; } ?>
<?php if (isset($twelve_to_one) && $$twelve_to_one !== 1) { echo '<option>12:00PM - 1:00PM</option>'; } ?>
<?php if (isset($one_to_two) && $one_to_two !== 1) { echo '<option>1:00PM - 2:00PM</option>'; } ?>
<?php if (isset($two_to_three) && $two_to_three !== 1) { echo '<option>2:00PM - 3:00PM</option>'; } ?>
<?php if (isset($three_to_four) && $three_to_four !== 1) { echo '<option>3:00PM - 4:00PM</option>'; } ?>
<?php if (isset($four_to_five) && $four_to_five !== 1) { echo '<option>4:00PM - 5:00PM</option>'; } ?>
<?php if (isset($five_to_six) && $five_to_six !== 1) { echo '<option>5:00PM - 6:00PM</option>'; } ?>
<?php if (isset($six_to_seven) && $six_to_seven !== 1) { echo '<option>6:00PM - 7:00PM</option>'; } ?>


<?php if($eight_to_nine !== 1 && $eight_to_nine === NULL) {
                echo "<option>8:00AM-9:00AM</option>"; } ?>
<?php if($nine_to_ten !== 1 && $nine_to_ten === NULL) {
                echo "<option>9:00AM-10:00AM</option>"; } ?>
<?php if($ten_to_eleven !== 1 && $$ten_to_eleven === NULL) {
                echo "<option>10:00AM-11:00AM</option>"; } ?>
<?php if($eleven_to_twelve !== 1 && $eleven_to_twelve === NULL) {
                echo "<option>11:00AM-12:00PM</option>"; } ?>
<?php if($twelve_to_one !== 1 && $twelve_to_one === NULL) {
                echo "<option>12:00PM-1:00PM</option>"; } ?>
<?php if($one_to_two !== 1 && $one_to_two === NULL) {
                echo "<option>1:00PM-2:00PM</option>"; } ?>
<?php if($two_to_three !== 1 && $two_to_three === NULL) {
                echo "<option>2:00PM-3:00PM</option>"; } ?>
<?php if($three_to_four !== 1 && $three_to_four === NULL) {
                echo "<option>3:00PM-4:00PM</option>"; } ?>
<?php if($four_to_five !== 1 && $four_to_five === NULL) {
                echo "<option>4:00PM-5:00PM</option>"; } ?>
<?php if($five_to_six !== 1 && $five_to_six == NULL) {
                echo "<option>5:00PM-6:00PM</option>"; } ?>
<?php if($six_to_seven !== 1 && $six_to_seven == NULL) {
                echo "<option>6:00PM-7:00PM</option>"; } ?>


<?php if($eight_to_nine !== 1) {
                echo "<option>8:00AM-9:00AM</option>"; } ?>
<?php if($nine_to_ten !== 1) {
                echo "<option>9:00AM-10:00AM</option>"; } ?>
<?php if($ten_to_eleven !== 1) {
                echo "<option>10:00AM-11:00AM</option>"; } ?>
<?php if($eleven_to_twelve !== 1) {
                echo "<option>11:00AM-12:00PM</option>"; } ?>
<?php if($twelve_to_one !== 1) {
                echo "<option>12:00PM-1:00PM</option>"; } ?>
<?php if($one_to_two !== 1) {
                echo "<option>1:00PM-2:00PM</option>"; } ?>
<?php if($two_to_three !== 1) {
                echo "<option>2:00PM-3:00PM</option>"; } ?>
<?php if($three_to_four !== 1) {
                echo "<option>3:00PM-4:00PM</option>"; } ?>
<?php if($four_to_five !== 1) {
                echo "<option>4:00PM-5:00PM</option>"; } ?>
<?php if($five_to_six !== 1) {
                echo "<option>5:00PM-6:00PM</option>"; } ?>
<?php if($six_to_seven !== 1) {
                echo "<option>6:00PM-7:00PM</option>"; } ?>


<?php if (isset($eight_to_nine) && $eight_to_nine !== 1) { echo '<option>8:00AM - 9:00AM</option>'; }   ?>
<?php if (isset($nine_to_ten) && $nine_to_ten !== 1) { echo '<option>9:00AM - 10:00AM</option>'; } ?>
<?php if (isset($ten_to_eleven) && $ten_to_eleven !== 1) { echo '<option>10:00AM - 11:00AM</option>'; } ?>
<?php if (isset($eleven_to_twelve) && $eleven_to_twelve !== 1) { echo '<option>11:00AM - 12:00PM</option>'; } ?>
<?php if (isset($twelve_to_one) && $$twelve_to_one !== 1) { echo '<option>12:00PM - 1:00PM</option>'; } ?>
<?php if (isset($one_to_two) && $one_to_two !== 1) { echo '<option>1:00PM - 2:00PM</option>'; } ?>
<?php if (isset($two_to_three) && $two_to_three !== 1) { echo '<option>2:00PM - 3:00PM</option>'; } ?>
<?php if (isset($three_to_four) && $three_to_four !== 1) { echo '<option>3:00PM - 4:00PM</option>'; } ?>
<?php if (isset($four_to_five) && $four_to_five !== 1) { echo '<option>4:00PM - 5:00PM</option>'; } ?>
<?php if (isset($five_to_six) && $five_to_six !== 1) { echo '<option>5:00PM - 6:00PM</option>'; } ?>
<?php if (isset($six_to_seven) && $six_to_seven !== 1) { echo '<option>6:00PM - 7:00PM</option>'; } ?>*/
?>
