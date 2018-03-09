									<table  width="100%">
										<tr class="btn-primary">	
											<th style="width: 80%; padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Product Name</th>
											<th style="width: 20%;padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Quantity</th>
										</tr>
										<tr>
											<td>
												<select name="p_name1">
														<?php while ($row2=mysql_fetch_array($result2)) { ?>
													<option value=<?php echo $row2['p_id']?>><?php echo $row2['p_name']?></option>
														<?php } ?>
												</select>
											</td>								  
											<td>
												<input type="text" name="del_qty1" id="cgpa" onblur="click_cgpa()" onChange="updateinto1()" onkeypress="return isNumberKey(event)" />
											</td>
										</tr>
										<tr>
											<td>
												<select name="p_name2">
														<?php while ($row3=mysql_fetch_array($result3)) { ?>
													<option value=<?php echo $row3['p_id']?>><?php echo $row3['p_name']?></option>
														<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" name="del_qty2" id="cgpa2" onblur="click_cgpa2()" onChange="updateinto2()" onkeypress="return isNumberKey2(event)">
											</td>
										</tr>
										<tr>
											<td>											
												<select name="p_name3">
														<?php while ($row4=mysql_fetch_array($result4)) { ?>
													<option value=<?php echo $row4['p_id']?>><?php echo $row4['p_name']?></option>
														<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" name="del_qty3" id="cgpa3" onblur="click_cgpa3()" onChange="updateinto3()" onkeypress="return isNumberKey3(event)">
											</td>
										</tr>
										<tr>
											<td>
												<select name="p_name4">
														<?php while ($row5=mysql_fetch_array($result5)) { ?>
													<option value=<?php echo $row5['p_id']?>><?php echo $row5['p_name']?></option>
														<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" name="del_qty4" id="cgpa4" onChange="updateinto4()" onblur="click_cgpa4()" onkeypress="return isNumberKey4(event)">
											</td>
										</tr>
										<tr>
											<td>
												<select name="p_name5">
														<?php while ($row6=mysql_fetch_array($result6)) { ?>
													<option value=<?php echo $row6['p_id']?>><?php echo $row6['p_name']?></option>
														<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" name="del_qty5" id="cgpa5" onChange="updateinto5()" onblur="click_cgpa5()" onkeypress="return isNumberKey5(event)">
											</td>
										</tr>
									</table>