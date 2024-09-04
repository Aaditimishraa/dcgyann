<?php require 'check.php'; $mstart=date("Y-m-01"); $mend=date("Y-m-t"); $thisday=date("D"); $jday=date("d"); ?>	
<!DOCTYPE html>
<html>
 <head>
     <meta charset="UTF-8">
	 <title><?php echo $headertext ?></title>
     <?php require 'bootstrap.php' ; ?>
   
<style type="text/css">
.cbox{width:100px; height:30px; border:1px solid #CCC; padding-left:5px;}
.w3-btn,.w3-button{border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.w3-display-topright{position:absolute;right:0;top:0}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:90%; max-width:500px;}
.w3-modal{z-index:999;display:block;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.tutorpage ul.share-list {
  margin-top: 3px;
  text-align: center; }
 .tutorpage ul.share-list li {
    display: inline-block;
    margin: 0 2px; }
   .tutorpage ul.share-list li a {
      width: 36px;
      height: 36px;
      display: flex;
      color: rgba(0, 0, 0, 0.6);
      align-items: center;
      justify-content: center;
      border: 1px solid #e5e5e5;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
      .tutorpage ul.share-list li a:hover {
        border-color: transparent;
        color: #fff; }
      .tutorpage ul.share-list li a.facebook:hover {
        background: #7073e5; }
      .tutorpage ul.share-list li a.google:hover {
        background: #e6545f; }
      .tutorpage ul.share-list li a.linkedin:hover {
        background: #0077b5; }
      .tutorpage ul.share-list li a.twitter:hover {
        background: #63bde3; }
      .tutorpage ul.share-list li a.whatsapp:hover {
        background: #00D200; }
	.ndesign { padding: 40px 70px; background-color:#FFFFFF; border: solid 1px #EEEEEE;}
	@media (max-width: 480px) {
    .ndesign{ padding:10px; } }
	</style>
  </head>
  <body class="<?php echo $skincolor ?>">
    <div class="wrapper">
		<?php include 'header1.php'; ?>  
		<?php include 'leftmenu.php'; ?>     
     <div class="content-wrapper">
		 <section class="content-header hidem">          
          <ol class="breadcrumb">
             <li style="color:#EC0000;"><i class="fa fa-list"></i> <?php echo $headertext ?></a></li>
			<li class="active"><a href="<?php echo $pageurl ?>" style="color:#0000FF;"><?php echo $username ?> DASHBOARD</a></li>
          </ol>
        </section><div class="hidem"><br/></div>
    
	<section class="content">
          <div class='row'>
            <div class='col-xs-12'>
            <div class="nav-tabs-custom">        
		    <div class="tab-content">
			
 
 <div class="row">
  <div class="col-lg-8 col-md-8">

<?php if ($_GET['message']!=""){?><div style="height:4px;">&nbsp;</div>
<div style="height:40px; background:#FFDDCC; color:#000000; border:1px solid #FF5C0F; font-size:14px; padding-top:7px; padding-left:10px;">
<b style="color:#BB0000;"><i class="icon fa fa-warning"></i> ALERT :</b> <?php echo $_GET['message'] ?>.. </div>
<div style="height:4px;">&nbsp;</div>
   <?php } ?>	
      
<span style="font-size:24px; color:#0073AA;">Hey <b><?php echo ucwords($username) ?>!</b></span><br />
<span style="font-size:14px; color: #000;">Its your admin panel statistics where you can see your panel details.</span><br /><?php if($admin=="1"){?><a href="settings" style="color:#0000FF;"><span class="label label-danger" style="border-radius:20px; padding:4px 14px;"> <i class='fa fa-cogs'></i> Setting</button></a> &nbsp; <a href="revenue" style="color:#0000FF;"><span class="label label-success" style="border-radius:20px; padding:4px 14px;"><i class='fa fa-inr'></i> REVENUE</button></a> &nbsp;<?php } ?>
<div style="height:20px;">&nbsp;</div>

</div>
		
		
            <div class="col-lg-4 col-md-4" style="vertical-align:top; border-left:1px solid #F9F9F9;">
  
		   <b style="font-size:16px; color:#003399; text-transform:uppercase;font-family:Raleway; ">OUR SERVICES</b>
		   
		   <div style="height:15px; padding-top:8px;" align="center">
		   <div style="height:1px;background: linear-gradient(45deg,red,white,blue); width:100%;"></div></div>
		
<div style="font-size:14px; padding:10px; line-height:22px;">
<b style="color:#0069D2;">👉</b> DOMAIN & HOSTING<br />
<b style="color:#0069D2;">👉</b> WEBSITE DEVELOPMENT<br />
<b style="color:#0069D2;">👉</b> MOBILE APP (ANDROID & IOS) DEVELOPMENT<br />
<b style="color:#0069D2;">👉</b> CUTOMISED SOFTWARE DEVELOPMENT<br />
<b style="color:#0069D2;">👉</b> EXAMINATION PLATFORM<br />
<b style="color:#0069D2;">👉</b> INSTITUTE MANAGMENT SOFTWARE<br />
<hr />
<b style="color:#0069D2;">👉</b> SOCIAL MEDIA MANAGEMENT (FB/Insta/Youtube)<br />
<b style="color:#0069D2;">👉</b> SEARCH ENGINE OPTIMIZATION (SEO)<br />
<b style="color:#0069D2;">👉</b> QUORA PAGE MANAGEMENT<br />
<hr />

<b style="color:#0069D2;">👉</b> SMS MARKETING (Bulk & Individual)<br />
<b style="color:#0069D2;">👉</b> EMAIL MARKETING (Bulk & Individual)<br />
<b style="color:#0069D2;">👉</b> WHATSAPP MARKETING (Bulk & Individual)<br />
<b style="color:#0069D2;">👉</b> AUTO WHATSAPP API<br />
<b style="color:#0069D2;">👉</b> REVIEW WRITING & POSTING PLATFORM<br /></div>
	
		
	
	   

	  <div style="height:15px;"></div>
	</div>
		   
            </div><!-- ./col -->
			
		
			
			
			</div>

		    <div style="height:5px;">&nbsp;</div>
			               <!-- Small boxes (Stat box) -->
    
		  
		  <br/>
		  
	  
		  
		           <div class="small-box  bg-green">
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    <?php include 'footer.php'; ?>   
    </div><!-- ./wrapper -->
	
<?php include 'plugin.php' ; ?>

	
  </body>
</html>