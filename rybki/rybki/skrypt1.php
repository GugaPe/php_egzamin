<?php

    function connect() {
        $db = mysqli_connect("localhost", "root", "", "wedkowanie");
 
        if ($db->connect_error) {
            return $db->connect_error;
        }
    }
    function skrypt1($db) {
        
        $query = "SELECT nazwa, akwen, wojewodztwo FROM Ryby LEFT JOIN Lowisko ON Ryby.id = Lowisko.ryby_id WHERE rodzaj = 3;";
        $result = mysqli_query($db, $query);
        if (!$result) {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
        } else {
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<li>{$row['nazwa']} pływa w rzece {$row['akwen']}, {$row['wojewodztwo']}</li>";
                }
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
    }

    function skrypt2($db) {
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

    function disconnect($db) {
        $db->close();
    }
?>