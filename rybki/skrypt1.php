<?php
    function skrypt1() {
        $link = mysqli_connect("localhost", "root", "", "wedkowanie");
 
        // Check connection
        if ($link->connect_error) {
            return $link->connect_error;
        }
        
        // Attempt select query execution
        $sql = "SELECT nazwa, akwen, wojewodztwo FROM Ryby LEFT JOIN Lowisko ON Ryby.id = Lowisko.ryby_id WHERE rodzaj = 3;";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <li>
                            {$row['nazwa']} pływa w rzece 
                            {$row['akwen']}, 
                            {$row['wojewodztwo']}
                        </li>";
                }
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
?>