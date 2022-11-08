<?php
    function skrypt1() {
        $db = new mysqli("localhost", "root", "", "wedkowanie");
        if ($db->connect_error) {
            return $db->connect_error;
        }
    }
?>