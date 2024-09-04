<?php  require 'config7.php' ;
if(!isset($_COOKIE['scontactid'])) {header("Location: index?message=Login to continue.."); exit(0); }

$result1 = mysqli_query($con,"SELECT * FROM `dg_settings` WHERE ID='$_COOKIE[scontactid]' and status='1'"); if($row1 = mysqli_fetch_array($result1)) {
$userid= $row1['ID']; $username=$row1['name']; $usercontact=$row1['contact']; $useremail=$row1['email']; $gender=$row1['gender']; 
} else { header("Location: index?message=Sorry! Login again.."); exit(0); }
$skincolor="skin-blue"; ?> 