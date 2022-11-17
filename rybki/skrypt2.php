<?php
    function skrypt2() {
        $db = mysqli_connect("localhost", "root", "", "wedkowanie");
 
        if ($db->connect_error) {
            return $db->connect_error;
        }
        
        $query = "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1;";
        $result = mysqli_query($db, $query);
        if (!$result) {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
        } else {
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr><td>{$row['id']}</td><td>{$row['nazwa']}</td><td>{$row['wystepowanie']}</td></tr>";
                }
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
    }
?>