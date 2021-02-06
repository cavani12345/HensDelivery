<?php
	require 'session.php';
    include("functions.php");
	session_destroy();
	redirect_to("../");
?>