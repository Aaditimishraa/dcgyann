<?php include 'check.php'; $sessionid=date("ymdHis").rand(10,99);  $tbl_name="dg_settings"; $pageurl="settings"; $pagename="Setting"; 
if(@$_GET['mode']=="contact" && $_POST['callnumber']!=""){$webnumber=$_POST['callnumber'];
$headertext1 = $con -> real_escape_string($_POST['headertext']);
$address = $con -> real_escape_string($_POST['address']);

$sql="UPDATE `$tbl_name` SET `callnumber`='$_POST[callnumber]', `salesemail`='$_POST[salesemail]', `headertext`='$headertext1', `companyaddress`='$address'  WHERE ID='$userid'";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error($con)); }
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?message=Data updated..'>";  exit(0);

} else if(@$_GET['mode']=="wapi" && $_POST['whatsappurl']!=""){
$sql="UPDATE `$tbl_name` SET `wapi1`='$_POST[wapi1]', `wapi2`='$_POST[wapi2]', `whatsappurl`='$_POST[whatsappurl]' WHERE ID='1'";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error($con)); }
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?message=Data updated..'>";  exit(0);

} else if(@$_GET['mode']=="social" && $_POST['facebook']!=""){
$sql="UPDATE `$tbl_name` SET `facebook`='$_POST[facebook]', `twitter`='$_POST[twitter]', `instagram`='$_POST[instagram]', `linkdin`='$_POST[linkdin]', `pintrest`='$_POST[pintrest]', `youtube`='$_POST[youtube]'  WHERE ID='1'";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error($con)); }
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?message=Data updated..'>";  exit(0);


} else { ?>
 <!DOCTYPE html>
<html>
  <head>  
    <meta charset="UTF-8">
	<title><?php echo $pagename ?></title>
		<?php include 'bootstrap.php' ; ?>
<style type="text/css">
html,body{margin:0;}
 #printable { display: none; }
 @media print {
 #non-printable { display: none; }
 #printable { display: block; }  }
</style>
<link rel="stylesheet" href="croper/css/slim.min.css">
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
  <body class="<?php echo $skincolor ?>">
  <div id="non-printable">
    <div class="wrapper">
	<?php include 'header1.php'; ?> 
	<?php include 'leftmenu.php'; ?>     
     
      <div class="content-wrapper">
		 <section class="content-header">
          
          <ol class="breadcrumb">
           <li style="color:#EC0000;"><i class="fa fa-list"></i> <?php echo $headertext ?></a></li>
			<li class="active"><a href="<?php echo $pageurl ?>" style="color:#0000FF; text-transform:uppercase;"><?php echo $pagename ?></a></li>
          </ol>
        </section><br/>

	<section class="content">
          <div class='row'>
            <div class='col-xs-12'>
              <div class="nav-tabs-custom">
              	<div class="tab-content">
				<?php if ($_GET['message']!=""){?><div style="height:4px;">&nbsp;</div>
<div style="height:40px; background:#FFDDCC; color:#000000; border:1px solid #FF5C0F; font-size:14px; padding-top:7px; padding-left:10px;">
<b style="color:#BB0000;"><i class="icon fa fa-warning"></i> ALERT :</b> <?php echo $_GET['message'] ?>.. </div>
<div style="height:4px;">&nbsp;</div>
   <?php } ?>	

<div class="box-header with-border" style="background-color: #E6E6E6; text-transform:uppercase;"><font size="3"><b>			
<?php echo $pagename ?></b> </font></div>
<div style="height:10px;">&nbsp;</div>

<?php $result1 = mysqli_query($con,"SELECT * FROM `$tbl_name` WHERE ID='1'"); if($row1 = mysqli_fetch_array($result1)) {?>	
   <div class='row'>
            <div class='col-xs-6' style="border-right:1px dashed #CCC;">
			<b style="font-size:16px; color:#BB0000; font-weight:550;">Contact Details</b><br />
   
   <form name="form1" action="<?php echo $pageurl ?>?mode=contact" method="post">
   <table class="table table-hover table-bordered table-striped" style="font-size:15px;">  
    <tr><td width="125">Company Name</td>
        <td><input type="text"  class="form-control" name="headertext" style="width:96%;"  value="<?php echo $row1['headertext'] ?>" /></td></tr>	
	
	   <tr><td>Company Address</td>
    <td><input type="text"  class="form-control" name="address" style="width:96%;" value="<?php echo $row1['companyaddress'] ?>" /></td>
	</tr>				
    <tr><td width="200">Website Call Number</td>
    <td><input type="text"  class="form-control" name="callnumber" style="width:96%;" value="<?php echo $row1['callnumber'] ?>" /></td></tr>	

   <tr><td>Website Email</td>
    <td><input type="text"  class="form-control" name="salesemail" style="width:96%;" value="<?php echo $row1['salesemail'] ?>" /></td></tr>	
  </table>
	<div align="center"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Update</button></div>	
	</form>
	<div style="height:25px;"></div>
	
   <b style="font-size:16px; color:#BB0000; font-weight:550;">WhatsApp API</b><br />
	<form name="form2" action="<?php echo $pageurl ?>?mode=wapi" method="post">
	<table class="table table-hover table-bordered table-striped" style="font-size:15px;">  			
    <tr><td width="200">WhatsApp URL</td>
        <td><input type="text"  class="form-control" name="whatsappurl" style="width:96%;"  value="<?php echo $row1['whatsappurl'] ?>" /></td>
		</tr>	

    <tr><td>WAP Token</td>
    <td><input type="text"  class="form-control" name="wapi1" style="width:96%;"  value="<?php echo $row1['wapi1'] ?>" /></td></tr>	

    <tr><td>WAP Instance</td>
    <td><input type="text"  class="form-control" name="wapi2" style="width:96%;"  value="<?php echo $row1['wapi2'] ?>" /></td></tr>
	</table>
	<div align="center"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Update</button></div>	
	</form>
	<div style="height:25px;"></div>	
		</div>
            <div class='col-xs-6'>
		<b style="font-size:16px; color:#BB0000; font-weight:550;">SOCIAL MEDIA PROFILE</b><br />
		<form name="form6" action="<?php echo $pageurl ?>?mode=social" method="post">	
	<table class="table table-hover table-bordered table-striped" style="font-size:15px;">  			
    <tr><td width="125">Facebook Link</td>
        <td><input type="text"  class="form-control" name="facebook" style="width:96%;"  value="<?php echo $row1['facebook'] ?>" /></td></tr>	
		
    <tr><td>Instagram Link</td>
        <td><input type="text"  class="form-control" name="instagram" style="width:96%;"  value="<?php echo $row1['instagram'] ?>" /></td></tr>	

    <tr><td>Twitter Link</td>
        <td><input type="text"  class="form-control" name="twitter" style="width:96%;"  value="<?php echo $row1['twitter'] ?>" /></td></tr>	
		
    <tr><td>Linkdin Link</td>
        <td><input type="text"  class="form-control" name="linkdin" style="width:96%;"  value="<?php echo $row1['linkdin'] ?>" /></td></tr>	
				
    <tr><td>Pinterest Link</td>
        <td><input type="text"  class="form-control" name="pintrest" style="width:96%;"  value="<?php echo $row1['pintrest'] ?>" /></td></tr>					
	<tr><td>Youtube Link</td>
        <td><input type="text"  class="form-control" name="youtube" style="width:96%;"  value="<?php echo $row1['youtube'] ?>" /></td></tr>	
		</table>
	<div align="center"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Update</button></div>
	</form>	

<div style="height:25px;"></div>	
	 			

			</div>
			</div>

<?php } ?>
 
		   </div></div></div>	
				
				
				
		
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    <?php include 'footer.php'; ?>   
    </div><!-- ./wrapper -->
	</div>

<?php include 'plugin.php' ; ?>
<script src="croper/js/slim.kickstart.min.js"></script>	
  </body>
</html>
<?php }  ?>