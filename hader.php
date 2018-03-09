<?php 
//session_cache_expire( 20 );
session_start(); // NEVER FORGET TO START THE SESSION!!!

    //Check whether the session variable SESS_MEMBER_ID is present or not
	if($_SESSION['SESS_USER_TYPE'] == '') {
		header("location: index");
		exit();
	}
/*
$inactive = 1800;
if(isset($_SESSION['start']) ) {
	$session_life = time() - $_SESSION['start'];
	if($session_life > $inactive){
		header("Location: index");
	}
}
$_SESSION['start'] = time();
*/

//header("Refresh: 1200; URL=LockScreen");

include('company_info.php');
include("conn/connection.php") ;

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET SESSION collation_connection ='utf8_general_ci'");

$e_id = $_SESSION['SESS_EMP_ID'];
$user_id = $_SESSION['SESS_USER_ID'];

$s1 = mysql_query('SELECT * FROM app_config');
$sw1 = mysql_fetch_assoc($s1);

$CompanyName = $sw1['name'];
$CompanyEmail = $sw1['email'];
$CompanyAddress = $sw1['address'];
$CompanyPostalCode = $sw1['postal_code'];
$CompanyFax = $sw1['fax'];
$CompanyPhone = $sw1['phone'];
$CompanyWebsite = $sw1['website'];
$CompanyCurrency = $sw1['currency'];
$CompanyLogo = $sw1['logo'];

?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' >
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
<title><?php echo $titel; ?></title>

<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<link rel="stylesheet" href="data_grid/css/style.css" type="text/css" />
<link rel="stylesheet" href="data_grid/css/style_add.css" type="text/css" />
<link rel="icon" type="images/png" href="images/favicon.png"/>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/jquery.jgrowl.js"></script>
<script type="text/javascript" src="js/jquery.alerts.js"></script>
<script type="text/javascript" src="js/elements.js"></script>
<script type="text/javascript" src="js/dy_add_input.js"></script>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>


<script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>

<!-- print script start-->
<script>
function myFunction()
{
window.print();
}
</script>
<!--print script end -->

<!--Google Analytics script start-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61565309-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Google Analytics script end -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYPyzkrOKsYGQ4gvaFPVClESysTEKIiCs">
</script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<?php
//$sql = mysql_query("SELECT p.p_name, p.sub_name,  pc.p_id, pc.p_p_size, pc.price FROM product_info AS p LEFT JOIN product_cust_info AS pc ON p.p_id = pc.p_id ORDER BY p.p_id, pc.p_p_size");
//$sql1 = mysql_query("SELECT user_name, user_type, image from login WHERE user_type != 'admin' AND user_type != 'admin_db' ORDER BY user_type");
//$num_rows = mysql_num_rows($sql);
//$num_rows1 = mysql_num_rows($sql1);
?>
 
<body>
<div class="mainwrapper">
    
    <div class="header">
        <div class="logo" style="padding: 14px 4px;">
            <!-- <a href="welcome"><img src="images/logo.png" alt="Hipro Lubricant" height="40px" width="" /></a> -->
			<a href="welcome" style="font-size: 20px; color: rgb(255, 255, 255);">Auto Parts Solution</a>
        </div>
		<div>
            <ul class="headmenu">
				 <li class="right">
					<a class="dropdown-toggle" style="padding: 11px 10px;" data-toggle="dropdown" href="#">
						<img style="margin: -8px 5px -5px 0;border-radius: 50% !important;" class="lock-avatar" height="40" width="40" src="<?php if($_SESSION['SESS_EMP_IMG'] == ''){echo 'imgs/user.png';} else {echo $_SESSION['SESS_EMP_IMG'];} ?>">
						<?php echo $_SESSION['SESS_FIRST_NAME'];?>
					</a>
				<?php if($_SESSION['position'] == 'superadmin' || $_SESSION['position'] == 'admin') {?>
					<ul class="dropdown-menu" style="width: 99%;">
						<li style="text-align: left;" class="viewmore"><a href="ChangePicture" class=""><i class="iconfa-cog"></i> &nbsp; Change Picture</a></li>
						<li style="text-align: left;" class="viewmore"><a href="ChangePassword" class=""><i class="iconfa-cog"></i> &nbsp; Change Password</a></li>
						<li class="divider"></li>
						<li style="text-align: left;" class="viewmore"><a href="EditProfile" class=""><i class="iconfa-cog"></i> &nbsp; App Settings</a></li>
						<li class="divider"></li>
						<li style="text-align: left;" class="viewmore"><a href="index" class=""><i class="iconfa-off"></i>  &nbsp; Logout</a></li>
                    </ul>
				<?php } else {?>
					<ul class="dropdown-menu" style="width: 99%;">
						<li style="text-align: left;" class="viewmore"><a href="index" class=""><i class="iconfa-off"></i>  &nbsp; Logout</a></li>
                    </ul>
				<?php } ?>
                </li>
			</ul>
        </div>
    </div>
	
	<div class="leftpanel">
        <div class="leftmenu">
				
				<ul class="nav nav-tabs nav-stacked">
					<li class="nav-header">Admin Menu Bar</li>
					<?php
					
						$fild = $_SESSION['position'];
						$sql = mysql_query("SELECT * FROM module WHERE $fild = 1 AND sts = 0 order by position");
						
						while( $row = mysql_fetch_assoc($sql) )
						{ 
							$_SESSION['module_name'] = $row['module_name'];
							
									echo "<li class='${$row['module_name']}'>
											<a href='{$row['module_name']}'>
												<i class='{$row['icon']}'></i>
												<span class='title'>{$row['description']}</span>
												<span class='selected'></span>
											</a>
										</li>";
						}
						?>
				</ul>
        </div><!--leftmenu--> 
    </div><!-- leftpanel -->
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="welcome"><i class="iconsweets-home"></i></a><span class='separator'></span></li>
			<?php
			echo "<li>$titel</li>";
			?>
        </ul>
		<!-- 

		<div class="pageheader">
            <form action="results.html" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form>
            <div class="pageicon"><span class="iconfa-pencil"></span></div>
            <div class="pagetitle">
                <h5>Forms</h5>
                <h1>Form Styles</h1>
            </div>
        </div> // pageheader



-->
<div class="maincontent">
            <div class="maincontentinner">