<?php include 'check.php'; $pageurl="addreview.php"; $tbl_name="dc_certificate"; $sessionid=date("ymdHis"); $pagename="review";
 
if(@$_GET['mode']=="create_new"){
$name = $con -> real_escape_string($_POST['name']);
$review= $con -> real_escape_string($_POST['review']);
$uploaded1=0; $ext1="";
  if((!empty($_FILES["uploaded_file1"])) && ($_FILES['uploaded_file1']['error'] == 0)){
  $filename1 =strtolower(basename($_FILES['uploaded_file1']['name']));
  $ext1 = substr($filename1, strrpos($filename1, '.') + 1);
  $namefile1 =  str_replace(".$ext1","", $filename1);
  $newfilename1 ="PIC-".$sessionid;
   //Determine the path to which we want to save this file
   $ext1=".".$ext1;
   $newname1 = 'images/pdf/'.$newfilename1.$ext1;
   move_uploaded_file($_FILES['uploaded_file1']['tmp_name'],$newname1);  } 
 if($ext1!=""){$pic1="$newfilename1$ext1";} else {$pic1="";}
	
$sql="INSERT INTO `$tbl_name`(`status`, `name`, `fname`, `contact`, `enrollment`, `certificate`, `pic`, `createdon`, `sessionid`, `remarks` ,`review`, `hide` ) VALUES ('1', '$name', '$fname', '$_POST[contact]', '$enrollment', '$pic', '$pic1', '$now', '$sessionid', '$remarks', '$review', '0')";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error($con)); }   
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?Axy=1'>";  exit(0);

}else if(@$_GET['mode']=="update" && $_GET['id']!=""){
  $name = $con -> real_escape_string($_POST['name']);
  $review= $con -> real_escape_string($_POST['review']);
  $sql="UPDATE `$tbl_name` SET name='$name',review='$review' WHERE sessionid ='$_GET[id]'";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error()); }
$uploaded1=0; $ext1="";
if((!empty($_FILES["uploaded_file1"])) && ($_FILES['uploaded_file1']['error'] == 0)){
$filename1 =strtolower(basename($_FILES['uploaded_file1']['name']));
$ext1 = substr($filename1, strrpos($filename1, '.') + 1);
$namefile1 =  str_replace(".$ext1","", $filename1);
$newfilename1 ="PIC-".$_GET['id'];
 //Determine the path to which we want to save this file
 $ext1=".".$ext1;
 $newname1 = 'images/pdf/'.$newfilename1.$ext1;
 move_uploaded_file($_FILES['uploaded_file1']['tmp_name'],$newname1);  } 
if($ext1!=""){$pic1="$newfilename1$ext1";
$sqlpic1="UPDATE `$tbl_name` SET pic='$pic1' WHERE sessionid ='$_GET[id]'";
 if (!mysqli_query($con,$sqlpic1)){die('Error: ' . mysqli_error()); } }

echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?Axy=1'>";  exit(0);
} else { ?>

  <!DOCTYPE html>
  <html>
   <head>
      <meta charset="UTF-8">
       <title>Add/Edit <?php echo $pagename ?></title>
    <?php include 'bootstrap.php' ; ?>
  <?php if($_GET['Axy']!=""){?>
  <script type="text/javascript">
              window.opener.location.reload(true);
              window.close();
  </script>
  <?php } ?>
    
    <?php
  if($_GET['id']!="") {$result = mysqli_query($con,"SELECT * FROM `$tbl_name` WHERE sessionid='$_GET[id]'"); 
  while($row = mysqli_fetch_array($result)) { $name1 = $row['name']; $review1 = $row['review']; }} ?>	
  
    </head>
    <body class="<?php echo $skincolor ?>">
      <div class="box-header with-border" style="background-color: #E6E6E6; font-size:14PX; font-family:Arial, Helvetica, sans-serif; color:#1515FF; font-weight:bold; text-transform:uppercase;">Add/Edit <?php echo $pagename ?></div>
    
            <?php if ($_GET['message']!=""){?><div style="height:4px;">&nbsp;</div>
  <div style="height:40px; background:#FFDDCC; color:#000000; border:1px solid #FF5C0F; font-size:14px; padding-top:7px; padding-left:10px;">
  <b style="color:#BB0000;"><i class="icon fa fa-warning"></i> ALERT :</b> <?php echo $_GET['message'] ?>.. </div>
  <div style="height:4px;">&nbsp;</div>
     <?php } ?>
     <?php if($_GET['id']!="") { ?>
	<form name="form1" id="form1" action="<?php echo $pageurl ?>?mode=update&id=<?php echo @$_GET['id'] ?>" method="post" enctype="multipart/form-data"><?php } else { ?>
	<form name="form1" id="form1" action="<?php echo $pageurl ?>?mode=create_new" method="post" enctype="multipart/form-data"><?php } ?>
	   <div align="center">
		<icon class="btn bg-white margin"><label>Name<span style="color:#FF0000">*</span></label><input type="text" name="name" value="<?php echo $name1 ?>" class="form-control" required="required" style="width:200px;" /></icon>	
    <icon class="btn bg-white margin"><label>Photo<span style="color:#FF0000">*</span></label><br /><input type="file" name="uploaded_file1" style="width:200px;" /></icon>					
				<br />
        <table width="100%" border="0">
  <tr height="40">
  <tr height="32">
    <td width="100" align="right" style="padding-right:10px;" valign="top"><b>Review :</b><br /><span style="font-size:10px;">(Max 250 Words)</span></td>
    <td><textarea name="review" style="width:100%; height:150px; border:1px solid #CCC;"><?php echo $review1 ?></textarea></td>
  </tr>
</table>
				
					<!-- </div> -->
	
			
<hr />
<?php if($_GET['id']!=""){ ?>
  <input type="submit" name="action" value="Update <?php echo $pagename ?>" class="btn btn-primary center-button" />
<?php } else { ?>
  <input type="submit" name="action" value="Upload <?php echo $pagename ?>" class="btn btn-primary center-button" />
<?php } ?>

<div> </div>	 

</form>

  <br />
 
  
  </body>
</html>
<?php } ?>