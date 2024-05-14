<?php 
session_name('my_application');
session_start();
echo $_SESSION['name'];