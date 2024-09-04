<?php ob_start();  include 'config7.php';  $logincookie=date("ymdHis");  $year = time() + (365 * 24 * 60 * 60); // One year in the future

$user_name1 =$_POST['contact'];
$password1 =$_POST['password']; 
$tbl_name="dg_settings";   
if($user_name1 !="" or $password1!=""){
//start verifying login details 

$result = mysqli_query($con,"SELECT * FROM `$tbl_name` WHERE contact='$user_name1' and status='1'"); 
if($row = mysqli_fetch_array($result)) {	
if ($row['password'] =="$password1") { 
setcookie('scontactid', $row['ID'], $year); setcookie('scontactid', $row['ID'], $year,'/');

if ($_POST['suserid']) {
    // Set cookies if suserid is present in the POST request
   
    setcookie('suserid', $_POST['contact'], $year);
    setcookie('suserp', $_POST['password'], $year);
} elseif (!$_POST['suserid']) {
    // Unset cookies if suserid is not present in the POST request
    setcookie('suserid', '', time() - 3600); // Set expiration time to the past
    setcookie('suserp', '', time() - 3600);
}

 ?>
<script>document.cookie = "scontactid=<?php echo $row['ID'] ?>" + "; " + <?php echo $year ?>; </script><?php 

echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=dashboard?message=Login successfully..'>"; exit(0);

} else if ($row['password'] != "$password1" ) { 
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=index?message=Sorry! Password mismatch..'>"; exit(0); }

} else {
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=index?message=Sorry! Invalid contact number or password..'>"; exit(0);
}
	
} else {
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=index?message=Fill all entry carefully..'>"; exit(0);

} ?>