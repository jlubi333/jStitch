<?php

// Returns a MySQL error code.

require_once("api.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_logged_in()) {
        $connection = get_connection();
        check_connection($connection);

        $username = $_SESSION["username"];

        clear_current_stitch_count($connection, $username);

        echo $connection->errno;

        $connection->close();
    }
} else {
    goto_page("");
}
