<?php session_start();
include "../include/functions.php"; 
include "../config/database.php"; 

 //on selectionne les infos du super administrateur
$admin_infos=find_admin_by_id();
 


include "views/profile.view.php"; 