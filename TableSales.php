											<table>
												<tr class="btn-primary">
													<th style="width: 85%; padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Product Name</th>
													<th style="padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Quantity</th>
													<th style="padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Unit Price</th>
													<th style="padding:5px 0px; border-right: 1px solid #dddddd;background: #2E3E4E; font-size: 14px;font-weight: normal;">Discount (%)</th>
													<th style="padding:5px 0px;background: #2E3E4E; font-size: 14px;font-weight: normal;">Total (Tk)</th>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name1" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>								  
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty1" id="box1" oninput="calculate1()" onChange="updateinto1()" onkeypress="return isNumberKey(event)" />
													</td>
													<td><input class="input-small" style="text-align: center;" id="box2" name="u_price1" type="text" oninput="calculate1()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis1" name="disc1" type="text" oninput="calculate1()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk1" onClick="totalall()" id="result1" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name2" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty2" id="box3" oninput="calculate2()" onChange="updateinto2()" onkeypress="return isNumberKey2(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box4" name="u_price2" type="text" oninput="calculate2()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis2" name="disc2" type="text" oninput="calculate2()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk2" onClick="totalall()" id="result2" readonly /></td>
												</tr>
												<tr>
													<td>											
														<select data-placeholder="Choose Territory Name" name="p_name3" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty3" id="box5"  oninput="calculate3()" onChange="updateinto3()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box6" name="u_price3" type="text" oninput="calculate3()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis3" name="disc3" type="text" oninput="calculate3()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk3" onClick="totalall()" id="result3" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name4" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty4" id="box7"  oninput="calculate4()" onChange="updateinto4()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box8" name="u_price4" type="text" oninput="calculate4()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis4" name="disc4" type="text" oninput="calculate4()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk4" onClick="totalall()" id="result4" readonly /></td>
												</tr>
												<tr> 
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name5" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty5" id="box9"  oninput="calculate5()" onChange="updateinto5()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box10" name="u_price5" type="text" oninput="calculate5()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis5" name="disc5" type="text" oninput="calculate5()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk5" onClick="totalall()" id="result5" readonly /></td>
												</tr>
												<tr> 
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name6" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty6" id="box11"  oninput="calculate6()" onChange="updateinto6()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box12" name="u_price6" type="text" oninput="calculate6()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis6" name="disc6" type="text" oninput="calculate6()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk6" onClick="totalall()" id="result6" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name7" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty7" id="box13"  oninput="calculate7()" onChange="updateinto7()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box14" name="u_price7" type="text" oninput="calculate7()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis7" name="disc7" type="text" oninput="calculate7()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk7" onClick="totalall()" id="result7" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name8" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty8" id="box15"  oninput="calculate8()" onChange="updateinto8()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box16" name="u_price8" type="text" oninput="calculate8()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis8" name="disc8" type="text" oninput="calculate8()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk8" onClick="totalall()" id="result8" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name9" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty9" id="box17"  oninput="calculate9()" onChange="updateinto9()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box18" name="u_price9" type="text" oninput="calculate9()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis9" name="disc9" type="text" oninput="calculate9()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk9" onClick="totalall()" id="result9" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name10" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty10" id="box19"  oninput="calculate10()" onChange="updateinto10()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box20" name="u_price10" type="text" oninput="calculate10()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis10" name="disc10" type="text" oninput="calculate10()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk10" onClick="totalall()" id="result10" readonly /></td>
												</tr>
												
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name11" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty11" id="box21"  oninput="calculate11()" onChange="updateinto11()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box22" name="u_price11" type="text" oninput="calculate11()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis11" name="disc11" type="text" oninput="calculate11()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk11" onClick="totalall()" id="result11" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name12" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty12" id="box23"  oninput="calculate12()" onChange="updateinto12()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box24" name="u_price12" type="text" oninput="calculate12()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis12" name="disc12" type="text" oninput="calculate12()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk12" onClick="totalall()" id="result12" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name13" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty13" id="box25"  oninput="calculate13()" onChange="updateinto13()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box26" name="u_price13" type="text" oninput="calculate13()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis13" name="disc13" type="text" oninput="calculate13()" /></td>
													<td><input class="input-small" style="text-align: right;" style="text-align: center;" type="text" name="tot_tk13" onClick="totalall()" id="result13" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name14" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty14" id="box27"  oninput="calculate14()" onChange="updateinto14()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box28" name="u_price14" type="text" oninput="calculate14()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis14" name="disc14" type="text" oninput="calculate14()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk14" onClick="totalall()" id="result14" readonly /></td>
												</tr>
												<tr>
													<td>
														<select data-placeholder="Choose Territory Name" name="p_name15" style="text-align: center;" class="select-x-large chzn-select">
															<?php	
																$q="SELECT * FROM recipe_master order by name";
																$r=mysql_query($q); 
															?>
															<option value="">Choose product</option>
															<?php while ($row=mysql_fetch_array($r)) { ?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															<?php } ?>
														</select>
													</td>
													<td>
														<input class="input-small" style="text-align: center;" type="text" name="ord_qty15" id="box29"  oninput="calculate15()" onChange="updateinto15()" onkeypress="return isNumberKey3(event)">
													</td>
													<td><input class="input-small" style="text-align: center;" id="box30" name="u_price15" type="text" oninput="calculate15()" /></td>
													<td><input class="input-small" style="text-align: center;" id="dis15" name="disc15" type="text" oninput="calculate15()" /></td>
													<td><input class="input-small" style="text-align: right;" type="text" name="tot_tk15" onClick="totalall()" id="result15" readonly /></td>
												</tr>
												<tr>
													<td colspan="3"></td>
													<td><input class="input-small lttl_total" type="text" readonly value="TOTAL"></td>
													<td><input class="input-small" style="text-align: right;" type="text" readonly name="total_tk"></td>
												</tr>
											</table> 