<?php
    function skrypt2() {
        $link = mysqli_connect("localhost", "root", "", "wedkowanie");
 
        // Check connection
        if ($link->connect_error) {
            return $link->connect_error;
        }
        
        // Attempt select query execution
        $sql = "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1;";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "
                    <tr>
                        <td>
                            {$row['id']}
                        </td>
                        <td>
                            {$row['nazwa']}
                        </td>
                        <td>
                            {$row['wystepowanie']}
                        </td>
                    </tr>";
                }
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
?>