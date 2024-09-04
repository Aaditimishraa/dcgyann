<?php include 'admin/config7.php'; $aclass="active"; ?>
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

<body>
    <?php include 'header.php';?>

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
			<li class="breadcrumb-item active" aria-current="page">Search Student</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

   <!-- <div align="center" style="padding:10px;">
        <form name="form1" action="" method="get">
            Enrollment ID : <input type="text" name="enrollment" value="<?php echo $_GET['enrollment']; ?>" style="width:150px; height:30px; border:1px solid #CCC;" />
            <button type="submit" class="submit-button">GET CERTIFICATE</button>
        </form>
        


<br /><br />


<?php if($_GET['enrollment']!="") {	$result = mysqli_query($con,"SELECT * FROM `dc_certificate` WHERE enrollment='$_GET[enrollment]'"); 
									if($row = mysqli_fetch_array($result)) { ?>


Name : <?php echo $row['name'] ?><br />
F Name : <?php echo $row['fname'] ?><br />
Contact : <?php echo $row['contact'] ?><br />
Enrollment Id : <?php echo $row['enrollment'] ?><br />
Remarks : <?php echo $row['remarks'] ?><br />
<a href="admin/images/pdf/<?php echo $row[certificate] ?>" style="color:#0000FF">View Certificate</a>



<?php } else { ?>No certificate found <?php } ?>

<?php } ?>	


</div> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a {
            color: #0000FF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div align="center" style="padding:10px;">
        <form name="form1" action="" method="get">
            Enrollment ID : <input type="text" name="enrollment" value="<?php echo $_GET['enrollment']; ?>" style="width:150px; height:30px; border:1px solid #CCC;" />
            <button type="submit" class="submit-button">GET CERTIFICATE</button>
        </form>

        <?php 
        if(isset($_GET['enrollment'])) {
            $result = mysqli_query($con, "SELECT * FROM `dc_certificate` WHERE enrollment='$_GET[enrollment]'");
            if($row = mysqli_fetch_array($result)) { 
        ?>

                <table>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Father's Name</th>
                        <td><?php echo $row['fname']; ?></td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td><?php echo $row['contact']; ?></td>
                    </tr>
                    <tr>
                        <th>Enrollment Id</th>
                        <td><?php echo $row['enrollment']; ?></td>
                    </tr>
                    <tr>
                        <th>Remarks</th>
                        <td><?php echo $row['remarks']; ?></td>
                    </tr>
                </table>

                <a href="admin/images/pdf/<?php echo $row['certificate']; ?>" target="_blank">View Certificate</a>

        <?php 
            } else { 
                echo 'No certificate found for the given Enrollment ID.';
            }
        } 
        ?>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        button {
            padding: 10px;
            background-color: #0000FF;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
    
</div>
<div class="section-title">
    <h3 style="font-weight: bold;">Search Enrolled Student</h3>
</div>


        <div align="center" style="padding:10px;">
<!-- <form name="form1" action="" method="get">
    <input type="text" name="enrollment" placeholder="Get Certificate" value="<?= isset($_GET['enrollment']) ? $_GET['enrollment'] : '' ?>" style="width: 200px; height: 30px; padding: 5px; box-sizing: border-box; border: 1px solid #CCC; border-radius: 4px;" />
    <button type="submit" class="submit-button" style="padding: 5px 10px; border: none; background-color: #4caf50; color: #fff; border-radius: 4px; cursor: pointer;">GET CERTIFICATE</button>
</form> -->




<div class="about-page py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Search Enrolled 
				<span class="font-weight-bold">Student</span>
			</h3>col-lg-6 left-abw3ls">
					<img src="images/ap-8.png" alt="" class="img-fluid">
				</div>
<div style="text-align: left; 
			<div class="row about-head-wthree">
				<div class="margin-top: 50px;">
    <form name="form1" action="" method="get">
        <!-- Enrollment box -->
        <input type="text" name="enrollment" placeholder="Enter Enrollment ID" value="<?= isset($_GET['enrollment']) ? $_GET['enrollment'] : '' ?>" style="width: 200px; height: 30px; padding: 5px; box-sizing: border-box; border: 1px solid #CCC; border-radius: 4px; margin-right: 10px;" />

        <!-- Submit button -->
        <button type="submit" class="submit-button" style="padding: 5px 10px; border: none; background-color: #4caf50; color: #fff; border-radius: 4px; cursor: pointer;">GET CERTIFICATE</button>
    </form>
</div>




        <?php 
        if(isset($_GET['enrollment'])) {
            $result = mysqli_query($con, "SELECT * FROM `dc_certificate` WHERE enrollment='$_GET[enrollment]'");
            if($row = mysqli_fetch_array($result)) { 
        ?>

                <table>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Father's Name</th>
                        <td><?php echo $row['fname']; ?></td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td><?php echo $row['contact']; ?></td>
                    </tr>
                    <tr>
                        <th>Enrollment Id</th>
                        <td><?php echo $row['enrollment']; ?></td>
                    </tr>
                    <tr>
                        <th>Remarks</th>
                        <td><?php echo $row['remarks']; ?></td>
                    </tr>
                </table>
                <button onclick="window.open('admin/images/pdf/<?php echo $row['certificate']; ?>', '_blank')">View Certificate</button>

        <?php 
           } else { 
echo '<img src="images/notfound.png" alt="Certificate Not Found" style="width: 100px; height: 100px; margin-right: 10px;">';
			echo 'No certificate found for the given Enrollment ID.';
		}
		
        } 
        ?>
       
    </div>
</body>
</html>


<?php include 'footer.php'; ?>