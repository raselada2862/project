									<table>
										<tr class="btn-primary">	
											<th style="width: 60%; padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Product Name</th>
											<th style="width: 25%; padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Pack Size</th>
											<th style="padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Quantity</th>
											<th style="padding:5px 0px;background: #2E3E4E; font-size: 14px;font-weight: normal;">Total</th>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name1" />
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size1" class="select-x-medium" onChange="updateinto1()" />
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>											
													</select>
												</div>
											</td>								  
											<td>
												<input class="input-small" type="text" name="ord_qty1" id="cgpa" onblur="click_cgpa()" onChange="updateinto1()" onkeypress="return isNumberKey(event)" />
											</td>
											<td>
												<input class="input-small" type="text" name="total1" onClick="sms()" readonly />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name2">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size2" class="select-x-medium" onChange="updateinto2()">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty2" id="cgpa2" onblur="click_cgpa2()" onChange="updateinto2()" onkeypress="return isNumberKey2(event)">
											</td>
											<td>
												<input class="input-small" type="text" name="total2" onClick="sms()" readonly>
											</td>
										</tr>
										<tr>
											<td>											
												<select style="text-align: center;" class="select-x-large" name="p_name3">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size3" class="select-x-medium" onChange="updateinto3()">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty3" id="cgpa3" onblur="click_cgpa3()" onChange="updateinto3()" onkeypress="return isNumberKey3(event)">
											</td>
											<td>
												<input class="input-small" type="text" name="total3" onClick="sms()" readonly>
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name4">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size4" onChange="updateinto4()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty4" id="cgpa4" onChange="updateinto4()" onblur="click_cgpa4()" onkeypress="return isNumberKey4(event)">
											</td>
											<td>
												<input class="input-small" type="text" readonly name="total4" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name5">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size5" onChange="updateinto5()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty5" id="cgpa5" onChange="updateinto5()" onblur="click_cgpa5()" onkeypress="return isNumberKey5(event)">
											</td>
											<td>
												<input class="input-small" type="text" readonly name="total5" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name6">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size6" class="select-x-medium" onChange="updateinto6()">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty6" id="cgpa6" onblur="click_cgpa6()" onChange="updateinto6()" onkeypress="return isNumberKey6(event)">
											</td>
											<td>
												<input class="input-small" type="text" readonly name="total6" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name7">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size7" onChange="updateinto7()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty7" id="cgpa7" onChange="updateinto7()" onblur="click_cgpa7()" onkeypress="return isNumberKey7(event)">
											</td>
											<td>
												<input class="input-small" type="text" readonly name="total7" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name8">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size8" onChange="updateinto8()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty8" id="cgpa8" onChange="updateinto8()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total8" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name9">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size9" onChange="updateinto9()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty9" id="cgpa8" onChange="updateinto9()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total9" onClick="sms()" />
											</td>
										</tr>
										<tr>
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name10">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size10" onChange="updateinto10()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty10" id="cgpa8" onChange="updateinto10()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total10" onClick="sms()" />
											</td>
										</tr>
						<!--				
										<tr style="display:none;inline-block;" id="add71">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name11">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size11" onChange="updateinto11()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty11" id="cgpa8" onChange="updateinto11()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total11" onClick="sms()" />
											</td>
											<td id="add72"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field7()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field7()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add81">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name12">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size12" onChange="updateinto12()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty12" id="cgpa8" onChange="updateinto12()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total12" onClick="sms()" />
											</td>
											<td id="add82"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field8()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field8()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add91">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name13">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size13" onChange="updateinto13()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty13" id="cgpa8" onChange="updateinto13()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total13" onClick="sms()" />
											</td>
											<td id="add92"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field9()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field9()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add101">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name14">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size14" onChange="updateinto14()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty14" id="cgpa8" onChange="updateinto14()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total14" onClick="sms()" />
											</td>
											<td id="add102"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field10()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field10()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add111">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name15">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size15" onChange="updateinto15()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty15" id="cgpa8" onChange="updateinto15()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total15" onClick="sms()" />
											</td>
											<td id="add112"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field11()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field11()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add121">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name16">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size16" onChange="updateinto16()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty16" id="cgpa8" onChange="updateinto16()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total16" onClick="sms()" />
											</td>
											<td id="add122"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field12()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field12()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add131">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name17">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size17" onChange="updateinto17()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty17" id="cgpa8" onChange="updateinto17()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total17" onClick="sms()" />
											</td>
											<td id="add132"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field13()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field13()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add141">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name18">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size18" onChange="updateinto18()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty18" id="cgpa8" onChange="updateinto18()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total18" onClick="sms()" />
											</td>
											<td id="add142"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field14()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field14()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add151">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name19">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size19" onChange="updateinto19()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty19" id="cgpa8" onChange="updateinto19()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total19" onClick="sms()" />
											</td>
											<td id="add152"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field15()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field15()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add161">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name20">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size20" onChange="updateinto20()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty20" id="cgpa8" onChange="updateinto20()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total20" onClick="sms()" />
											</td>
											<td id="add162"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field16()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field16()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add171">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name21">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size21" onChange="updateinto21()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty21" id="cgpa8" onChange="updateinto21()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total21" onClick="sms()" />
											</td>
											<td id="add172"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field617()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field17()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add181">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name22">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size22" onChange="updateinto22()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty22" id="cgpa8" onChange="updateinto22()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total22" onClick="sms()" />
											</td>
											<td id="add182"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field18()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field18()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add191">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name23">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;" name="p_p_size23" onChange="updateinto23()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty23" id="cgpa8" onChange="updateinto23()" onblur="click_cgpa8()" onkeypress="return isNumberKey8(event)">
											</td>
											<td>
												<input class="input-small" readonly type="text" name="total23" onClick="sms()" />
											</td>
											<td id="add192"> 
												<input type="button" class="btn-primary" value="+" onClick="add_extra_field19()">
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field19()">
											</td>
										</tr>
										<tr style="display:none;inline-block;" id="add201">
											<td>
												<select style="text-align: center;" class="select-x-large" name="p_name24">
													<?php	
														$q="SELECT * FROM product_info order by p_name";
														$r=mysql_query($q); 
													?>
													<option value="">Choose product</option>
													<?php while ($row=mysql_fetch_array($r)) { ?>
													<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<div id="statediv">
													<select style="text-align: center;"  name="p_p_size24" onChange="updateinto24()" class="select-x-medium">
														<?php	
															$q="SELECT * FROM product_pack_size order by p_value";
															$r=mysql_query($q); 
														?>
														<option value="">Choose Pack Size</option>
														<?php while ($row=mysql_fetch_array($r)) { ?>
														<option value="<?php echo $row['p_value']; ?>"><?php echo $row['p_size']; ?></option>
														<?php } ?>	
													</select>
												</div>
											</td>
											<td>
												<input class="input-small" type="text" name="ord_qty24" id="cgpa9" onChange="updateinto24()" onblur="click_cgpa9()" onkeypress="return isNumberKey9(event)">
											</td>
											<td>
												<input class="input-small" type="text" readonly name="total24" onClick="sms()" />
											</td>
											<td id="add202"> 
												<input type="button" class="btn-primary" value="-" onclick="remove_extra_field120()">
											</td>
										</tr>
										-->
										<tr> 
											<td colspan="2"></td>
											<td><input class="input-small lttl_total" type="text" readonly value="TOTAL"></td>
											<td><input class="input-small" type="text" readonly name="sms_total"></td>
										</tr>
									</table>