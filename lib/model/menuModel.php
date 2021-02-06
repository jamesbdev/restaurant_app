 
 
 <?php

    function getAllMenuItems(){
        global $dbh;

        $result = [];
        foreach($dbh->query('SELECT * from menu_items') as $row) {
            $result[] = $row;
        }

        return $result;
    }
   



 ?>