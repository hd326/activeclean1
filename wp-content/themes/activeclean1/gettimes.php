<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
<?php
    function getTimes($date){
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
    }
    
                        /*$8to9 = $appointment['8to10'];
                        $9to10 = $appointment['9to10'];
                        $10to11 = $appointment['10to11'];
                        $11to12 = $appointment['11to12'];
                        $12to1 = $appointment['12to1'];
                        $1to2 = $appointment['1to2'];
                        $2to3 = $appointment['2to3'];
                        $3to4 = $appointment['3to4'];
                        $4to5 = $appointment['4to5'];
                        $5to6 = $appointment['5to6'];
                        $6to7 = $appointment['6to7'];*/    
?>
    
</body>
</html>
