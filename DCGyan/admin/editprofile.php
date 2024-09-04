<?php include 'check.php'; $pageurl="editprofile$extn"; $pagename="$username Profile";
if(@$_GET['mode']=="update" && $usercontact!=""){
 $address = $con -> real_escape_string($_POST['address']);
 $institute = $con -> real_escape_string($_POST['institute']);

$sql="UPDATE `dg_settings` SET name='$_POST[name]', email='$_POST[email]', gender='$_POST[gender]'  WHERE ID='$userid'";
if (!mysqli_query($con,$sql)){die('Error: ' . mysqli_error($con)); }
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=profile$extn?message=Profile updated..'>";  exit(0);
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
<link rel="stylesheet" href="../croper/css/slim.min.css">
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

<?php /*?>
	<table width="100%" border="0">
  <tr height="200">
    <td width="170"><img src="../images/logo/<?php echo $logo ?>" width="150" height="150" /></td>
    <td width="150"><div class="slim" data-ratio="1:1" data-size="200,200" data-service="../croper/asyncprofile.php?id=<?php echo $usercontact ?>"><input type="file"/></div></td>
	<td>&nbsp;</td>
  </tr>
</table>	
	<?php */?>

  <div style="padding-left:15px; padding-top:15px; padding-bottom:15px;">

<form name="form1" id="form1" method="post" action="<?php echo $pageurl ?>?mode=update">				
		  

		 <div class="box-body table-responsive no-padding">				
                  <table class="table table-hover table-bordered table-striped">     					 

				
	 <tr>	
					   <th>Name</th>
                        <td><input type="text"  class="form-control" name="name" id="name" placeholder="Name" style="width:200px;"  value="<?php echo $username ?>" /></td>                      
                      </tr>	
					  
					  	
                    
                      <tr>					 
					    <th>Gender</th>
                        <td><select name="gender" class="form-control"  style="width:200px;">
						<option value="">Select Gender</option>
						<option value="Male" <?php if($gender=="Male" || $gender==""){?> selected="selected"<?php } ?>>Male</option>
						<option value="Female" <?php if($gender=="Female"){?> selected="selected"<?php } ?>>Female</option></select></td>						
                      </tr>                     
                                         
                      <tr>	
					   <th>Mobile Number</th>
                        <td><input type="text"  class="form-control"  disabled="disabled" placeholder="Mobile"  maxlength="10" style="width:200px;"  value="<?php echo $usercontact ?>" /></td>                      
                      </tr>	
					
					 <tr>	
					   <th>Email ID</th>
                        <td style="color:#0000FF;"><input class="form-control" placeholder="E-Mail" style="width:200px; color:#0000FF" value="<?php echo $useremail ?>" name="email" type="email" /></td>                      
                      </tr>	
					    
    
					  

<tr>	
                       <th>&nbsp;</th>	
				        <td> <input type="submit" class="btn btn-success" value="Save Changes" name="submit"></td>						 
                      </tr>	
                 
 
                   </table></div>            
</form>
		  
		   </div></div></div>	
				
				
				
		
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    <?php include 'footer.php'; ?>   
    </div><!-- ./wrapper -->
	</div>

<?php include 'plugin.php' ; ?>
	<script src="../croper/js/slim.kickstart.min.js"></script>
  </body>
</html>
<?php } ?>