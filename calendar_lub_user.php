<?php
	session_start();
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
	
		// get params
	$monthArg = $_GET['m'];

	
						// calc dates and weekdays
				if ($monthArg == null || $monthArg == '')		
					$currMonth= date("m");				
				else
					$currMonth = intval($monthArg);	
								
				$currYear = date("Y");
				$startDate = strtotime($currYear . "-" . $currMonth . "-01 00:00:01");
				$startDay= date("N", $startDate);
				$monthName = date("M",$startDate );
				
				//echo("start day=". $startDay . "<br>");

				$daysInMonth = cal_days_in_month(CAL_GREGORIAN, date("m", $startDate), date( "Y", $startDate));
				$endDate = strtotime($currYear . "-" . $currMonth . "-" .  $daysInMonth ." 00:00:01");

				//echo(date("Y", $endDate) . "-" . date("m", $endDate) . "-". date("d", $endDate));
				$endDay = date("N", $endDate);
				//echo("end day=" . $endDay . "<br>");		

				// initialize structure array matching the calendar grid
				// 6 rows and 7 columns

					// php date sunday is zero
				if ($startDay> 6)
					$startDay = 7 -$startDay;

				$currElem = 0;
				$dayCounter = 0;
				$firstDayHasCome = false;
				$arrCal = array();
				for($i = 0; $i <= 5; $i ++) {
					for($j= 0; $j <= 6; $j++) {
								// decide what to show in the cell
					    if($currElem < $startDay && !$firstDayHasCome)			
							$arrCal[$i][$j] = "";
						else if ($currElem == $startDay && !$firstDayHasCome) {
							$firstDayHasCome= true;
							$arrCal[$i][$j] = ++$dayCounter;
						}
						else if ($firstDayHasCome) {
							if ($dayCounter < $daysInMonth)
								$arrCal[$i][$j] = ++ $dayCounter; 
							else
								$arrCal[$i][$j] = "";	
						}							
				
						$currElem ++;				
					}
				}

		?>

<style>
body{
font-family:"Helvetica Neue",Arial,Helvetica,sans-serif;-webkit-text-size-adjust:none;color:#000000;font-size:14px;font-style:normal;font-weight:normal;line-height:line-height;text-decoration:none; margin:0; padding:0;
}
div.wrapper{
	display:block;
	width:100%;
	margin:0;
	text-align:left;
	background-color:#f3e6c3;
}

.col1{
	height:100px;
	background-color:#231f20;
	color:#FFFFFF;
	}
.col2{
	height:1950px;
	background-image:url(../images/live137244_goldensparks.jpg);
	background-repeat:no-repeat;
	padding-top:30px;
	}
.col4{
	height:auto;
	background-color:#bdbdbd;
	color:#000000;
	padding-top:20px;
	padding-bottom:10px;
	}
.col5{
	height:30px;
	background-color:#060606;
	color:#FFFFFF;
	padding-top:20px;
	}
.col6{	
	height:70px;
	background-color:#231f20;
	padding-top:10px;
	color:#FFFFFF;
	}

.heading{
	font:"Times New Roman", Times, serif;
	font-weight:bold;
	font-size:20px;
	margin:10px 0 10px 0;
	}
.heading1{
	font:"Times New Roman", Times, serif;
	font-weight:bold;
	font-size:18px;
	}
.heading2{
	font:"Times New Roman", Times, serif;
	font-weight:300;
	font-size:20px;
	text-align:center;
	color:#495468;
	margin-bottom:10px;
	}
.closingDate{
	margin-top:40px;
	text-align:center;
	font-weight:bold;
	color:#FF0000;
	}
	
.clear{
	clear:both;
	}
.container_col2{
	width:880px;
	min-height:300px;
	height:auto;
	margin:0 auto;
	padding:40px;
	background-color:#FFFFFF;
	}
.container_comp{
	width:880px;
	height:700px;
	margin:0 auto;
	padding:40px;
	background-color:#f7f7f7;
	border-radius:20px;
	border:1px solid #999999;
	margin-bottom:25px;
	}
.container_calendar{
	width:840px;
	height:642px;
	margin:0 auto;
	border-left: 1px solid #ddd;
	margin-bottom:25px;
	}
	

.navg_month{
	height:24px;
	text-align:center;
	margin-bottom:15px;
	font-size:16px;
	word-spacing:10px;
	}
.month{
	color:#a21212;
	text-decoration:none;
	}
.month:hover{
	color:#000066;
	text-decoration:none;
	}

.date:hover{
	background-color:#ededed;
	cursor:pointer;
	}
.date .top{
	width:118px;
	height:48px;
	/*border:1px solid red;*/
	}
.date .bottom{
	width:118px;
	height:48px;
	/*border:1px solid red;*/
	}
.date .bottom .part{
	width:37px;
	height:46px;
	float:left;
	/*border:1px solid red;*/
	}

.day{
	background: #f6f6f6 none repeat scroll 0 0;
	border-bottom: 1px solid #ddd;
	border-right: 1px solid #ddd;
	border-top: 1px solid #ddd;
	color: #ef4f69;
	float: left;
	font-size: 12px;
	font-weight: bold;
	height: 25px;
	padding: 5px;
	text-align: center;
	text-transform: uppercase;
	width: 109px;
	}
.date{
	width:119px;
	height:100px;
	float:left;
	border-bottom:1px solid #ddd;
	border-right:1px solid #ddd;
	background-color:#fff;
	}
.dt{
	width:119px;
	height:100px;
	float:left;
	border-bottom:1px solid #ddd;
	border-right:1px solid #ddd;
	background-color:#F6F6F6;
	}	
.date:hover{
	background-color:#ededed;
	cursor:pointer;
	}
.date .top{
	width:118px;
	height:48px;
	/*border:1px solid red;*/
	}
.date .bottom{
	width:118px;
	height:48px;
	/*border:1px solid red;*/
	}
.date .bottom .part{
	width:37px;
	height:46px;
	float:left;
	/*border:1px solid red;*/
	}

.date_topright{
	text-align: center;
	padding: 40px;
	font-size: 20px;
	text-shadow: 0 -1px 0 rgba(255, 255, 255, 0.8);
	color: #686a6e;
	}

.seprator{
	color:#333333;
	text-shadow:#000000;
	}

</style>

<script src="../includes/jquery/jquery-1.4.2.js"></script>

<script>
	$(document).ready(function() {

		$('.date').click(function(){
			alert($(this).attr('id'));
		});
	});
</script>

        <div class="" style="height:850px">
            	<div class="heading2"><?php echo($monthName. "&nbsp;" . $currYear);?></div>
                <div class="navg_month">
                	    <a href="UserReminder?m=1" class="month">Jan</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=2" class="month">Feb</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=3" class="month">Mar</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=4" class="month">Apr</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=5" class="month">May</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=6" class="month">Jun</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=7" class="month">Jul</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=8" class="month">Aug</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=9" class="month">Sep</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=10" class="month">Oct</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=11" class="month">Nov</a>
                        <span class="seprator">|</span>
                        <a href="UserReminder?m=12" class="month">Dec</a>
				</div>
            	<div class="container_calendar">
                	<div>
                    	<div class="day">Sunday</div>
                        <div class="day">Monday</div>
                        <div class="day">Tuesday</div>
                        <div class="day">Wednesday</div>
                        <div class="day">Thursday</div>
                        <div class="day">Friday</div>
                        <div class="day">Saturday</div>
                        <div class="clear"></div>
                    </div>

					<?php
						$currElem = 0;
						$dayCounter = 0;
						$firstDayHasCome = false;
						$lowerLeftCorner= "style=\"border-bottom-left-radius:0px;\"";
						$lowerRightCorner= "style=\"border-bottom-right-radius:0px;\"";
	
						for($i = 0; $i <= 5; $i ++) {
							echo("<div>\r\n");
							for($j= 0; $j <= 6; $j++) {
								
								$divId = $currYear . "-";
								$divId .= $currMonth . "-";
								if(intval($arrCal[$i][$j]) < 10)
									$divId .= "0";
								$divId .= $arrCal[$i][$j];

								$leftCorner = "";
								$rightCorner = "";
								if ($i == 5 && $j ==0)
									$leftCorner = $lowerLeftCorner;

								if ($i == 5 && $j == 6)
									$leftCorner = $lowerRightCorner;

								// decide what to show in the cell
							    if($currElem < $startDay && !$firstDayHasCome)	{		
									echo("<div class=\"date dt\"". $leftCorner .">\r\n");
									echo("</div>\r\n");

								}
								else if ($currElem == $startDay && !$firstDayHasCome) {
									$firstDayHasCome= true;
									echo("<div id=" . $divId . " class=\"date\"". $leftCorner .">\r\n");
									echo("<a href='fpdf/UserReminder?date=".$divId."' target='_blank'>");
									echo("<div class=\"top\">\r\n");
	                            	echo("<div class=\"date_topright\">" . $arrCal[$i][$j] ."</div>\r\n");
	                            	echo("</div>\r\n");
			                        echo("<div class=\"bottom\">\r\n");
            			            echo("<div class=\"part\"></div>\r\n");
                        		    echo("<div class=\"part\"></div>\r\n");
		                            echo("<div class=\"part\"></div>\r\n");
        			                echo("</div>\r\n");
									echo("</a></div>\r\n");
									$dayCounter ++;

								}
								else if ($firstDayHasCome) {
									if ($dayCounter < $daysInMonth) {
										echo("<div id=". $divId . " class=\"date\"". $leftCorner . ">\r\n");
										echo("<a href='fpdf/UserReminder?date=".$divId."' target='_blank'>");
										echo("<div class=\"top\">\r\n");
		                            	echo("<div class=\"date_topright\">" . $arrCal[$i][$j] ."</div>\r\n");
		                            	echo("</div>\r\n");
				                        echo("<div class=\"bottom\">\r\n");
            				            echo("<div class=\"part\"></div>\r\n");
                	        		    echo("<div class=\"part\"></div>\r\n");
		            	                echo("<div class=\"part\"></div>\r\n");
        			    	            echo("</div>\r\n");
										echo("</a></div>\r\n");
										$dayCounter ++;
									}	
									else {
										echo("<div class=\"date dt\"". $leftCorner . ">\r\n");
										echo("</div>\r\n");

									}
								}								
				
							$currElem ++;				
							}
							echo("</div>\r\n");
						}
						
					?>
                 </div>
		</div>		 
