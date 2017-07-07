<?php

// Copyright (c) 2016 Shivam Agarwal. All rights reserved.

/*
For internal use only. Redistribution in original or modified form is not allowed.

- By Shivam Agarwal
*/

?>

<?php
session_start();
if(session_destroy())
{
header("Location: main.php");
}
?>
