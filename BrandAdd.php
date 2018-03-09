<?php
$titel = "New Brand";
$Brand = 'active';
include('include/hader.php');
include("conn/connection.php") ;

//---------- Permission -----------
$user_type = $_SESSION['SESS_USER_TYPE'];
$access = mysql_query("SELECT * FROM module WHERE module_name = 'Brand' AND $user_type = '1'");
if(mysql_num_rows($access) > 0){
//---------- Permission -----------


?>

	<div class="pageheader">
        <div class="searchbar">
			<a class="btn btn-primary" href="Brand"><i class="iconfa-arrow-left"></i> Back</a>
        </div>
        <div class="pageicon"><i class="iconfa-tag"></i></div>
        <div class="pagetitle">
            <h1>New Brand</h1>
        </div>
    </div><!--pageheader-->
	<div class="box box-primary">
		<div class="box-header">
			<div class="modal-content">
				<div class="modal-header">
					<h5>Add New Brand</h5>
				</div>			
				<form class="stdform" method="post" action="BrandAddSave" name="form" enctype="multipart/form-data">
					<div class="modal-body">
						<p>
							<label>Brand Name*</label>
							<span class="field">
								<input type="text" name="brand_name" class="input-xxlarge" required="" placeholder="Brand Name Like: Bajaj, TVS" />
							</span>
						</p>
						<p>
							<label>Brand Address</label>
							<span class="field">
								<textarea type="text" name="brand_address" id="" placeholder="Brand address" class="input-xxlarge"></textarea>
							</span>
						</p>
						<p>
							<label>Brand Description</label>
							<span class="field">
								<textarea type="text" name="brand_desc" id="" placeholder="Brand Description" class="input-xxlarge"></textarea>
							</span>
						</p>
					</div>
					<!--#wiz1step3-->
					<div class="modal-footer">
						<button type="reset" class="btn"> Reset </button>&nbsp; 
						<button type="submit" class="btn btn-primary"> Submit </button>
					</div>
				</form>
			</div>
		</div>
	</div>	
<?php
}
else{
	include('include/index');
}
include('include/footer.php');
?>