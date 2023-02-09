<?php 
    function check_text_success(){
        session_start();
        if(isset($_SESSION['success'])){
            // print_r($_SESSION['success']); 
            $text = $_SESSION['success'];
            // foreach ($_SESSION['success'] as $success) {
            echo "<h2 class='text-success'>$text</h2><br>";
            // }
            // echo "<br>";
            session_unset($_SESSION['success']);
            // echo 'dick';
        };
    }
?>