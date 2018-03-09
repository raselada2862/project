<?php
include("conn/connection.php");
extract($_POST);

 if($brand_name != '')
 {
	 $query="insert into brand (brand_name, brand_address, brand_desc) VALUES ('$brand_name', '$brand_address', '$brand_desc')";
	 
	$result = mysql_query($query) or die("inser_query failed: " . mysql_error() . "<br />");
	}
		else{
				echo 'Error, Please try again';
			}
?>

<html>
<body>
     <form action="Brand" method="post" name="ok">
       <input type="hidden" name="sts" value="add">
     </form>

     <script language="javascript" type="text/javascript">
		document.ok.submit();
     </script>
</body>
</html>