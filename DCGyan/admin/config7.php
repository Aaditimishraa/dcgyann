<?php session_start(); date_default_timezone_set('Asia/Kolkata'); 
$dd= date("d/m/Y"); $dt= date("h:i:s A"); $now = date("d/m/Y, h:i:s A"); $ipa = $_SERVER['REMOTE_ADDR']; $newrd=date("Y-m-d");
    $con = mysqli_connect("localhost","dghub_1","glJrt@Fvx@nO","dghub");
    mysqli_query($con,'SET character_set_results=utf8');        
    mysqli_query($con,'SET names=utf8');
    mysqli_query($con,'SET character_set_client=utf8');        
    mysqli_query($con,'SET character_set_connection=utf8');
    mysqli_query($con,'SET collation_connection=utf8_general_ci');
    mysqli_query($con,"SET SESSION sql_mode = ''"); 
	mysqli_query($con,"SET GLOBAL sql_mode=''");
    
	

$domain = "dcgyan.in";
$resultv = mysqli_query($con,"SELECT * FROM `dg_settings` WHERE domain='$domain' ORDER BY ID ASC LIMIT 1"); if($rowv = mysqli_fetch_array($resultv)) {
    $webid = $rowv['ID'];
    $callnumber = $rowv['callnumber'];
    $whatsappnumber = $rowv['whatsappnumber'];
    $salesemail = $rowv['salesemail'];
    $companyaddress = $rowv['companyaddress'];
    $supportemail = $rowv['supportemail'];
    $supportnumber = $rowv['supportnumber'];
    $domain = $rowv['domain'];
    $headertext = $rowv['headertext'];
    $facebook = $rowv['facebook'];
    $twitter = $rowv['twitter'];
    $instagram = $rowv['instagram'];
    $linkdin = $rowv['linkdin'];
    $pintrest = $rowv['pintrest'];
    $youtube = $rowv['youtube'];
} ?>