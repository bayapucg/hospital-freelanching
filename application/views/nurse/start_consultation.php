<style>
.sw-toolbar-top{
	
}
</style>

<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Patient Follow Ups</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Nurse</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Patient Follow Ups</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-green">
               <header class="panel-heading panel-heading-gray custom-tab ">
                Search Patient Details
               </header>
               <div class="panel-body">
                <div id="smartwizard" class="col-md-12">
      <ul>
         <li><a href="#step-1">Follow Up <br /><small>This is step Follow Up</small></a></li>
         <li><a href="#step-2">Medication<br /><small>This is step Medication</small></a></li>
         <li><a href="#step-3">Investigation<br /><small>This is step Investigation</small></a></li>
      </ul>
      <div>
         <div id="step-1" class="">
          <div class="row py-4">
               <div class="col-md-2"> 
                  <strong>Patient History</strong>
               </div>
               <div class="col-md-1"> 
                  <span class="btn btn-xs btn-info" data-toggle="modal" data-target="#vitalsmodal">Add</span>
               </div>  
			   <div class="col-md-1"> 
                  <span class="btn btn-xs btn-info" data-toggle="modal" data-target="#viewallmodal">View All</span>
               </div>
            </div>
			<hr>
            <div class="row clearfix ">
			<div class="col-md-4 py-4 col-md-offset-4">
					<h3>Vitals (2018-08-01 )</h3><table class="table table-bordered ">
					
						<tbody><tr>
							<th class="text-center">Vitals</th>
							<th class="text-center">Actuals</th>
							<th class="text-center">Range</th>
						</tr>
						<tr>
							<th class="text-center">BP</th>
							<th class="text-center">123</th>
							<th class="text-center">120/80</th>
						</tr>
						<tr>
							<th class="text-center">Pulse</th>
							<th class="text-center">3</th>
							<th class="text-center">70-80</th>
						</tr>
						<tr>
							<th class="text-center">FBS/RBS</th>
							<th class="text-center">33</th>
							<th class="text-center">70-110	</th>
						</tr>
						<tr>
							<th class="text-center">Temp</th>
							<th class="text-center">33</th>
							<th class="text-center">98.6 F</th>
						</tr>
						<tr>
							<th class="text-center">Weight</th>
							<th class="text-center">33</th>
							<th class="text-center"></th>
						</tr>
						
					</tbody></table>
				</div>
			
               <div class="container">
                  <div class="control-group" id="fields">
                     <label class="control-label" for="field1"><strong>Comments</strong></label>
                     <div class="controls">
                        <form id="vitalscomment" name="vitalscomment" role="form" action="<?php echo base_url('resources/vitalscomment'); ?>" method="post" autocomplete="off">
                           <input type="hidden" name="bid" id="bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
                          
						  <input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                           <div class="entry input-group ">
                              <textarea type="textarea" class="form-control" name="comments[]" id="comments[]"  placeholder="Enter Comments" required></textarea>
                              <span class="input-group-btn">
                              <button class="btn btn-success btn-add" type="button">
                              <span class="glyphicon glyphicon-plus">+</span>
                              </button>
                              </span>
                           </div>
						<div class="clearfix">&nbsp;</div>
                           <button class="btn btn-primary " type="submit" >Send</button>
                        </form>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="step-2" class="">
           
		    <div class="row">	
											   <div class="col-md-12 ">	
													
													<div class="container">
													<div class="row">
												
													<div class="col-md-6">
														<label>Search for Medicine</label>									
														<select class="form-control  select2">
															<option value="AK">example-1 </option>
															<option value="HI">example-1</option>
															<option value="HI">3example-1 </option>
															<option value="HI">4example-1 </option>
															<option value="HI">5example-1</option>
															<option value="HI">6example-1</option>
															<option value="HI">66example-1</option>
															<option value="HI">7example-1</option>
															<option value="HI">88example-1</option>
															<option value="HI">99example-1</option>
															<option value="HI">9254example-1</option>
														</select>
													</div>
													<div class="col-md-6">
														<label>Quanty</label>									
														<input placeholder="Enter quanty " type="text" class="form-control"/>
													</div>
														<div class="col-md-6">
														<label>Frequency</label>									
														<select class="form-control  ">
															<option >Select Frequency </option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
															<option >1 hour</option>
														
														</select>
													</div>
													
													<div class="col-md-6">
														<label>Food</label>									
														<select class="form-control  ">
															<option >Before </option>
															<option >After</option>
														</select>
													</div>
													<div class="col-md-6">
														<label>Prescribed Doctor</label>									
														<select class="form-control  ">
															<option >Select Doctor   </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
															<option >Doctor 1  </option>
														
														</select>
													</div>
													
														
														</div>
														</div>
														<div class="col-md-6">
														<label> Comment</label>
														<textarea type="textarea" class="form-control"  placeholder="Enter Comment" ></textarea>

														</div>
														</div>
														
														</div>
														<div class="clearfix">&nbsp;</div>
															
															<button class="btn btn-sm btn-info" type="button" data-toggle="modal" data-target="#addmedicine" >Add More</button>
															<button class="btn btn-sm btn-success" type="button">Add Medicine</button>
														<div class="clearfix">&nbsp;</div>
													</div>
			
         <div id="step-3" class="">
			<div class="row">
			   <div class="col-md-12 ">
				  <div class="container">
					 <div class="row">
					 <div class="col-md-6">
						   <label>Investigation Type</label>									
						   <select class="form-control  ">
							  <option >Select Type </option>
							  <option >Lab</option>
							  <option >Radiology</option>
						
						   </select>
					</div>
						<div class="col-md-6">
						   <label>Test type</label>									
						   <select class="form-control  select2">
							  <option value="AK">example-1 </option>
							  <option value="HI">example-1</option>
							  <option value="HI">3example-1 </option>
							  <option value="HI">4example-1 </option>
							  <option value="HI">5example-1</option>
							  <option value="HI">6example-1</option>
							  <option value="HI">66example-1</option>
							  <option value="HI">7example-1</option>
							  <option value="HI">88example-1</option>
							  <option value="HI">99example-1</option>
							  <option value="HI">9254example-1</option>
						   </select>
						</div>
						<div class="col-md-6">
						   <label>Test Name</label>									
						   <select class="form-control  select2">
							  <option value="AK">example-1 </option>
							  <option value="HI">example-1</option>
							  <option value="HI">3example-1 </option>
							  <option value="HI">4example-1 </option>
							  <option value="HI">5example-1</option>
							  <option value="HI">6example-1</option>
							  <option value="HI">66example-1</option>
							  <option value="HI">7example-1</option>
							  <option value="HI">88example-1</option>
							  <option value="HI">99example-1</option>
							  <option value="HI">9254example-1</option>
						   </select>
						</div>	
						<div class="col-md-6">
						   <label>Modular</label>									
						   <select class="form-control  select2">
							  <option value="AK">example-1 </option>
							  <option value="HI">example-1</option>
							  <option value="HI">3example-1 </option>
							  <option value="HI">4example-1 </option>
							  <option value="HI">5example-1</option>
							  <option value="HI">6example-1</option>
							  <option value="HI">66example-1</option>
							  <option value="HI">7example-1</option>
							  <option value="HI">88example-1</option>
							  <option value="HI">99example-1</option>
							  <option value="HI">9254example-1</option>
						   </select>
						</div>
						
					
					
					
					 </div>
				  </div>
				  <div class="col-md-6">
					 <label> Comment</label>
					 <textarea type="textarea" class="form-control"  placeholder="Enter Comment" ></textarea>
				  </div>
				  <div class="clearfix">&nbsp;</div>
															
															<button class="btn btn-sm btn-info" type="button" data-toggle="modal" data-target="#addinvest" >Add More</button>
															<button class="btn btn-sm btn-success" type="button">Assign</button>
														<div class="clearfix">&nbsp;</div>
			   </div>
			</div>
     
      </div>
   </div>
</div>
            </div>
         </div>
      </div>
   </div>
   
   <!--add investigation modal start-->
   <div class="modal fade" id="addinvest" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Investigation</h5>
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class="  ">
                  
                     <div class="card-body ">
                        <div class="row">
						 <div class="col-md-6">
						   <label>Investigation Type</label>									
						   <select class="form-control  ">
							  <option >Select Type </option>
							  <option >Lab</option>
							  <option >Radiology</option>
						
						   </select>
					</div>
							<div class="col-md-6">
								<label>Test type</label>									
								<select class="form-control  select2" style="width:100%">
									<option value="AK">example-1 </option>
									<option value="HI">example-1</option>
									<option value="HI">3example-1 </option>
									<option value="HI">4example-1 </option>
									<option value="HI">5example-1</option>
									<option value="HI">6example-1</option>
									<option value="HI">66example-1</option>
									<option value="HI">7example-1</option>
									<option value="HI">88example-1</option>
									<option value="HI">99example-1</option>
									<option value="HI">9254example-1</option>
								</select>
							</div>
								
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="row">
							<div class="col-md-6">
								<label>Test Name</label>									
								<select class="form-control  select2" style="width:100%">
									<option value="AK">example-1 </option>
									<option value="HI">example-1</option>
									<option value="HI">3example-1 </option>
									<option value="HI">4example-1 </option>
									<option value="HI">5example-1</option>
									<option value="HI">6example-1</option>
									<option value="HI">66example-1</option>
									<option value="HI">7example-1</option>
									<option value="HI">88example-1</option>
									<option value="HI">99example-1</option>
									<option value="HI">9254example-1</option>
								</select>
							</div>
							<div class="col-md-6">
								<label> Modular</label>									
								<select class="form-control  select2" style="width:100%">
									<option value="AK">example-1 </option>
									<option value="HI">example-1</option>
									<option value="HI">3example-1 </option>
									<option value="HI">4example-1 </option>
									<option value="HI">5example-1</option>
									<option value="HI">6example-1</option>
									<option value="HI">66example-1</option>
									<option value="HI">7example-1</option>
									<option value="HI">88example-1</option>
									<option value="HI">99example-1</option>
									<option value="HI">9254example-1</option>
								</select>
							</div>
							
							
							
							</div>
						
						<div class="clearfix">&nbsp;</div>
							  <div class="pull-right">
								 <button type="button" class="btn btn-primary"  role="button">Add Investigation</button>
								 <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
								 </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</div> 

<!--add medicine start-->
   <div class="modal fade" id="addmedicine" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Add Medicine</h5>
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class="  ">
                  
                     <div class="card-body ">
                        <div class="row">
							<div class="col-md-6">
								<label>Search for Medicine</label>									
								<select class="form-control  select2" style="width:100%">
									<option value="AK">example-1 </option>
									<option value="HI">example-1</option>
									<option value="HI">3example-1 </option>
									<option value="HI">4example-1 </option>
									<option value="HI">5example-1</option>
									<option value="HI">6example-1</option>
									<option value="HI">66example-1</option>
									<option value="HI">7example-1</option>
									<option value="HI">88example-1</option>
									<option value="HI">99example-1</option>
									<option value="HI">9254example-1</option>
								</select>
							</div>
								<div class="col-md-6">
								<label>Quanty</label>									
								<input placeholder="Enter quanty " type="text" class="form-control"/>
							</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="row">
							<div class="col-md-6">
								<label>Frequency</label>									
								<select class="form-control  ">
									<option >Select Frequency </option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
									<option >1 hour</option>
								
								</select>
							</div>
							
							
							<div class="col-md-6">
								<label>Food</label>									
								<select class="form-control  ">
									<option >Before </option>
									<option >After</option>
								</select>
							</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="row">
							<div class="col-md-6">
								<label>Prescribed Doctor</label>									
								<select class="form-control  ">
									<option >Select Doctor   </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
									<option >Doctor 1  </option>
								
								</select>
							
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
							  <div class="pull-right">
								 <button type="button" class="btn btn-primary"  role="button">Add Medicine</button>
								 <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
								 </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</div>  
<!--vitals modal start-->
   <div class="modal fade" id="vitalsmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Add Vitals</h5>
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class="  ">
                  
                     <div class="card-body ">
                        <div class="row">
                           
						   <div class="col-md-12 ">

                              <div class="table-scrollable">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th> Vitals</th>
                                          <th> Actuals</th>
                                          <th> Range</th>
                                      
                                        
                                       </tr>
                                    </thead>
                                    <tbody >
                                       <tr>
                                          <td>BP</td>
                                          <td> <input type="text" class="form-control"/></td>
                                          <td> 120/80</td>
                                       
                                       </tr>
									   <tr>
                                          <td>BPPulse</td>
                                          <td> <input type="text" class="form-control"/></td>
                                          <td>70-80</td>
                                       </tr>
									   <tr>
                                          <td>FBS/RBS</td>
                                          <td> <input type="text" class="form-control"/></td>
                                          <td>70-110</td>
                                       </tr>
									   <tr>
                                          <td>Temp</td>
                                          <td> <input type="text" class="form-control"/></td>
                                          <td>98.6 F</td>
                                       </tr>
									   <tr>
                                          <td>Weight</td>
                                          <td> <input type="text" class="form-control"/></td>
                                          <td>&nbsp;</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="clearfix">&nbsp;</div>
							  <div class="pull-right">
								 <button type="button" class="btn btn-primary"  role="button">Add Vitals</button>
								 <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
								 </div>
								</div>
							  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</div> 
<!--vitals modal start-->
   <div class="modal fade" id="viewallmodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Encounters</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body">
            <div class="container">
               <div class="row">
                  <div class="card card-topline-red col-md-12">
                     <div class="card-head">
                        <header>List</header>
                     </div>
                     <div class="card-body " id="bar-parent">
                        <div class="row">
                        
                           <div class="col-md-4 ">
                              <ul class="nav nav-tabs tabs-left">
                                 <li class="nav-item">
                                    <a href="#tab_6_130" class="active" data-toggle="tab">Vitals</a>
                                 </li> 
								 <li class="nav-item">
                                    <a href="#tab_6_131" class="" data-toggle="tab">Vitals</a>
                                 </li>
                                                                                                </ul>
                           </div>
                           <div class="col-md-8 ">
                              <div class="tab-content">
                                <div class="tab-pane active" id="tab_6_130">
                                    <div class="table-responsive  py-4">
										<h3>Vitals (2018-08-01 )</h3><table class="table table-bordered ">
										
											<tbody><tr>
												<th class="text-center">Vitals</th>
												<th class="text-center">Actuals</th>
												<th class="text-center">Range</th>
											</tr>
											<tr>
												<th class="text-center">BP</th>
												<th class="text-center">123</th>
												<th class="text-center">120/80</th>
											</tr>
											<tr>
												<th class="text-center">Pulse</th>
												<th class="text-center">3</th>
												<th class="text-center">70-80</th>
											</tr>
											<tr>
												<th class="text-center">FBS/RBS</th>
												<th class="text-center">33</th>
												<th class="text-center">70-110	</th>
											</tr>
											<tr>
												<th class="text-center">Temp</th>
												<th class="text-center">33</th>
												<th class="text-center">98.6 F</th>
											</tr>
											<tr>
												<th class="text-center">Weight</th>
												<th class="text-center">33</th>
												<th class="text-center">70-80</th>
											</tr>
											
										</tbody></table>
									</div>
                                 </div>
								 <div class="tab-pane " id="tab_6_131">
                                    <div class="table-responsive  py-4">
										<h3>Vitals TAB 2</h3><table class="table table-bordered ">
										
											<tbody><tr>
												<th class="text-center">Vitals</th>
												<th class="text-center">Actuals</th>
												<th class="text-center">Range</th>
											</tr>
											<tr>
												<th class="text-center">BP</th>
												<th class="text-center">123</th>
												<th class="text-center">120/80</th>
											</tr>
											<tr>
												<th class="text-center">Pulse</th>
												<th class="text-center">3</th>
												<th class="text-center">70-80</th>
											</tr>
											<tr>
												<th class="text-center">FBS/RBS</th>
												<th class="text-center">33</th>
												<th class="text-center">70-110	</th>
											</tr>
											<tr>
												<th class="text-center">Temp</th>
												<th class="text-center">33</th>
												<th class="text-center">98.6 F</th>
											</tr>
											<tr>
												<th class="text-center">Weight</th>
												<th class="text-center">33</th>
												<th class="text-center">70-80</th>
											</tr>
											
										</tbody></table>
									</div>
                                 </div>
                                                                                                </div>
                           </div>
                      
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
               <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
               </div>
               <div class="btn-group btn-delete hidden" role="group">
                  <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
               </div>
             
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<script>
</script>
<script>
   $(function()
   {
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
   
        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
   
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus">-</span>');
    }).on('click', '.btn-remove', function(e)
    {
   $(this).parents('.entry:first').remove();
   
   e.preventDefault();
   return false;
   });
   });
   
</script>

