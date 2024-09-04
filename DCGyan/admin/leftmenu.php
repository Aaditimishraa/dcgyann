  <?php  $break_d1 = explode('?',$_SERVER['REQUEST_URI']);  $url = $break_d1[0]; $url2 = $break_d1[1]; ?> 		
   
 <aside class="main-sidebar">
        <section class="sidebar">
		<div class="user-panel">
            <div class="pull-left image">              
			  <?php /*?><img src="../images/logo.jpg" width="75" height="75" class="img-circle" /><?php */?>
            </div>
            <div class="pull-left info">
              <p><?php echo $username ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
		  <ul class="sidebar-menu">
   
	   	 
       <?php if($url=="/admin/dashboard$extn" || $_SERVER['REQUEST_URI']=="/admin/dashboard$extn") { ?>
       <li class="active"><?php } else { ?> <li><?php } ?>
       <a href="dashboard<?php echo $extn ?>"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a></li>
	 

	 <?php if($url=="/admin/certificate$extn" || $_SERVER['REQUEST_URI']=="/admin/certificate$extn") { ?>
     <li class="active"> <?php } else { ?><li><?php } ?>
	 <a href="certificate<?php echo $extn ?>"><i class="fa fa-list"></i> <span> Certificate Details</span></a></li>

   <?php if($url=="/admin/review$extn" || $_SERVER['REQUEST_URI']=="/admin/review$extn") { ?>
     <li class="active"> <?php } else { ?><li><?php } ?>
	 <a href="review<?php echo $extn ?>"><i class="fa fa-list"></i> <span> Review Details</span></a></li>




   <?php if($url=="/admin/webquery$extn" || $_SERVER['REQUEST_URI']=="/admin/webquery$extn") { ?>
       <li class="active"><?php } else { ?> <li><?php } ?>
       <a href="webquery<?php echo $extn ?>"><i class="fa fa-list"></i> <span> Website Query</span></a></li>
	   
	 <?php if($url=="/admin/settings$extn" || $_SERVER['REQUEST_URI']=="/admin/settings$extn") { ?>
     <li class="active"> <?php } else { ?><li><?php } ?>
	 <a href="settings<?php echo $extn ?>"><i class="fa fa-cogs"></i> <span> Settings</span></a></li>

	    	   
		   <?php if($url=="/admin/profile$extn" || $_SERVER['REQUEST_URI']=="/admin/profile$extn" || $url=="/admin/editprofile$extn" || $_SERVER['REQUEST_URI']=="/admin/editprofile$extn") { ?>
       <li class="active"><?php } else { ?><li><?php } ?>
	   <a href="profile<?php echo $extn ?>"><i class="fa fa-user"></i> My Profile</a></li>
	   
	   
	   <?php if($url=="/admin/changepassword$extn" || $_SERVER['REQUEST_URI']=="/admin/changepassword$extn") { ?>
       <li class="active"><?php } else { ?><li><?php } ?>
	   <a href="changepassword<?php echo $extn ?>"><i class="fa fa-key"></i> Change Password</a></li>							
	   <li><a href="logout<?php echo $extn ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		  
          
         </ul>
        </section>
        <!-- /.sidebar -->
      </aside>