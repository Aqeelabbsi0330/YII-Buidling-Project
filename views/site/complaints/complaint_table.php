<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Complaints</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    <div class="col-auto">
								    
								    <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>
										  
									</select>
							    </div>
							   
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			      <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-resolved-tab" data-bs-toggle="tab" href="#orders-resolved" role="tab" aria-controls="orders-resolved" aria-selected="false">Resolved</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-in-progress-tab" data-bs-toggle="tab" href="#orders-in-progress" role="tab" aria-controls="orders-in-progress" aria-selected="false">In Progress</a>
                    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-closed-tab" data-bs-toggle="tab" href="#orders-closed" role="tab" aria-controls="orders-closed" aria-selected="false">Closed</a>
				  </nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">#</th>
												<th class="cell">Title</th>																				
												<th class="cell">Status</th>
												<th class="cell">Description</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											  
                                            <tr>
												<td class="cell">1</td>
												<td class="cell"><span class="truncate">Water Leaking</span></td>
												<td class="cell"><span class="badge bg-warning">Pending</span></td>
												<td class="cell"><span class="truncate">There is water leaking from the ceiling in the kitchen area. Please send maintenance as soon as possible.</span></td>
											</tr>
											<tr>    
												<td class="cell">2</td>
												<td class="cell"><span class="truncate">Broken Elevator</span></td>
												<td class="cell"><span class="badge bg-warning">In Progress</span></td>
												<td class="cell"><span class="truncate">The elevator in Block B has been out of service since yesterday evening.</span></td>

											</tr>
                  
											<tr>
												<td class="cell">3</td>
												<td class="cell"><span class="truncate">No Electricity</span></td>
												<td class="cell"><span class="badge bg-success">Resolved</span></td>
												<td class="cell"><span class="truncate">Electricity was not available from 10 PM to 2 AM last night on the 3rd floor.</span></td>
                                            </tr> 
                                            <tr>
												<td class="cell">4</td>
												<td class="cell"><span class="truncate">Noise Complaint</span></td>
												<td class="cell"><span class="badge bg-danger">Closed</span></td>
												<td class="cell"><span class="truncate">Constant loud music from apartment 4C late at night. The issue has been resolved after talking to the tenant.</span></td>
                                            </tr> 
											
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
