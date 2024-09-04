<?php include 'admin/config7.php'; $cclass="active"; $pageurl="frenchise.php"; $sessionid=date("ymdHis");
if($_GET['mode']=="new" && $_POST['contact']!=""){
 $name = $con -> real_escape_string($_POST['name']);
 $subject = $con -> real_escape_string($_POST['subject']);
 $message = $con -> real_escape_string($_POST['message']);


$sql="INSERT INTO `dg_query`(`name`, `subject`, `contact`, `message`, `createdon`, `sessionid`, `ip`) VALUES ('$name','$subject','$_POST[contact]','$message', '$now', '$sessionid', '$ipa')";
if (!mysqli_query($con,$sql)){die('Error: ' . $mysqli_error()); }  

echo "<script>alert('Query submitted successfully');</script>";
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=$pageurl?message=Query submitted successfully'>";  exit(0);


} else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $headertext ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Testimonials-Css -->
	<link href="css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>
<?php include 'header.php';?>
<body>

	<!-- banner -->
	<div class="banner-agile-2">
	<?php include 'topnav.php';?>
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Apply For Frenchise

            </li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- history -->
	<div class="about-page py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Apply For Frenchise
			</h3>
			
		</div>
	</div>
	<!-- //history -->
	<div class="about-page py-5">
		<div class="container py-xl-5 py-lg-3">

			<div class="row about-head-wthree">
				<div class="col-lg-6 left-abw3ls">
					<img src="images/ap-8.png" alt="" class="img-fluid">
				</div>
					<!-- form -->
					<form name="form1" action="<?php echo $pageurl ?>?mode=new" method="post" style="margin-left: 25px; border: 2px solid #e0e0e0; border-radius: 10px; padding: 30px; width: 450px;">
    <div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Name<span style="color:#FF0000">*</span></label>
							<input type="text" class="form-control" name="name" required="">
						</div>
					</div>

						<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Contact<span style="color:#FF0000">*</span></label>
							<input type="text" class="form-control" name="contact" required="">
						</div>
					</div>
					
										
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Subject<span style="color:#FF0000">*</span></label>
							<input type="text" class="form-control" name="subject" required="">
						</div>
					</div>
					

					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message<span style="color:#FF0000">*</span></label>
						<textarea name="message" class="form-control" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>
			<!-- //form -->
			</div>
		</div>
	</div>
	
<?php include 'footer.php';?>
	


</body>

</html>
<?php } ?>