<?php
$titel = "Brand";
$Brand = 'active';
include('include/hader.php');
include("conn/connection.php") ;
extract($_POST);

//---------- Permission -----------
$user_type = $_SESSION['SESS_USER_TYPE'];
$access = mysql_query("SELECT * FROM module WHERE module_name = 'Brand' AND $user_type = '1'");
if(mysql_num_rows($access) > 0){
//---------- Permission -----------

?>
	<div class="pageheader">
        <div class="searchbar">
			<a class="btn btn-primary" href="BrandAdd"><i class="iconfa-plus"></i> Add Brand</a>
        </div>
        <div class="pageicon"><i class="iconfa-tag"></i></div>
        <div class="pagetitle">
            <h1>Brands</h1>
        </div>
    </div><!--pageheader-->
	
		<?php if($sts == 'delete') {?>
			<div class="alert alert-success">
				<button data-dismiss="alert" class="close" type="button">&times;</button>
				<strong>Success!!</strong> Brand Successfully Deleted.
			</div><!--alert-->
		<?php } if($sts == 'add') {?>
			<div class="alert alert-success">
				<button data-dismiss="alert" class="close" type="button">&times;</button>
				<strong>Success!!</strong> Brand Successfully Added.
			</div><!--alert-->
		<?php } if($sts == 'edit') {?>
			<div class="alert alert-success">
				<button data-dismiss="alert" class="close" type="button">&times;</button>
				<strong>Success!!</strong> Brand Successfully Edited.
			</div><!--alert-->
		<?php } ?>
		
	<div class="box box-primary">
		<div class="box-header">
			<h5>Brands List</h5>
		</div>
			<div class="box-body">
				<table id="dyntable" class="table table-bordered responsive">
                    <colgroup>
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
						<col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr  class="newThead">
							<th class="head1">Brand ID</th>
                            <th class="head0">Brand Name</th>
							<th class="head1">Address</th>
							<th class="head0">Description</th>
                            <th class="head1 center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$sql = mysql_query("SELECT * FROM brand WHERE brand_sts = '0' ORDER BY brand_name");
								while( $row = mysql_fetch_assoc($sql) )
								{
									echo
										"<tr class='gradeX'>
											<td>{$row['brand_id']}</td>
											<td>{$row['brand_name']}</td>
											<td>{$row['brand_address']}</td>
											<td>{$row['brand_desc']}</td>
											<td class='center' style='width: 130px;'>
												<ul class='tooltipsample'>
													<li><a data-placement='top' data-rel='tooltip' href='BrandEdit?id=",$id,"{$row['brand_id']}' data-original-title='Edit' class='btn col1'><i class='iconfa-edit'></i></a></li>
													<li><a data-placement='top' data-rel='tooltip' href='BrandDelete?id=",$id,"{$row['brand_id']}' data-original-title='Delete' class='btn col5' onclick='return checkDelete()'><i class='iconfa-trash'></i></a></li>
												</ul>
											</td>
										</tr>\n ";
								}  
							?>
					</tbody>
				</table>
			</div>			
	</div>

<!-- -------------------------------------------------------------Entry Data View------------------------------------------------------------ -->			
				

<?php
}
else{
	include('include/index');
}
include('include/footer.php');
?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'desc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
                                    
        //Replaces data-rel attribute to rel.
        //We use data-rel because of w3c validation issue
        jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
        
        // tooltip sample
	if(jQuery('.tooltipsample').length > 0)
		jQuery('.tooltipsample').tooltip({selector: "a[rel=tooltip]"});
		
	jQuery('.popoversample').popover({selector: 'a[rel=popover]', trigger: 'hover'});
        
    });
</script>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Delete!!  Are you sure?');
}
</script>
<style>
#dyntable_length{display: none;}
</style>