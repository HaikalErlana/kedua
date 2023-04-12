<?php
session_start();
session_destroy();
?>
    <script>
        alert("Anda telah Logout");
        window.location = 'index.php';
    </script>
<?php

?>