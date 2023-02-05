<?php 
    function check_text_error(){
        // session_start();
        if(isset($_SESSION['errors'])){
            // print_r($_SESSION['errors']); 
            foreach ($_SESSION['errors'] as $error) {
                echo "<span class='text-danger'>$error</span><br>";
            }
            echo "<br>";
            session_unset($_SESSION['errors']);
            // echo 'dick';
        };
    }
?>