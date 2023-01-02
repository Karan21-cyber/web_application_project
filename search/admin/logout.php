<?php
    session_start();
    // removing sessions variables;
    session_unset();
    session_destroy();
    header('location:../../watindex.html');

?>