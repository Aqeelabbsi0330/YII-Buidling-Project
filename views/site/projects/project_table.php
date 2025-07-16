<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Projects</h1>
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
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-active-tab" data-bs-toggle="tab" href="#orders-active" role="tab" aria-controls="orders-active" aria-selected="false">Active</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-in-active-tab" data-bs-toggle="tab" href="#orders-in-active" role="tab" aria-controls="orders-in-active" aria-selected="false">In Active</a>
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
												<th class="cell">Project Name</th>																				
												<th class="cell">Status</th>
												<th class="cell">Description</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody> 
  
   										<tr>
												<td class="cell">1</td>
												<td class="cell"><span class="truncate">Kazani Heights</span></td>
												<td class="cell"><span class="badge bg-success">Active</span></td>
												<td class="cell"><span class="truncate">A premium residential complex with modern facilities and secure gated access.</span></td>
											</tr>
											<tr>
												<td class="cell">2</td>
												<td class="cell"><span class="truncate">Hamdan Villas</span></td>
												<td class="cell"><span class="badge bg-warning">In Active</span></td>
												<td class="cell"><span class="truncate">Luxury villa project currently paused due to regulatory approvals.</span></td>

											</tr>
											<tr>
												<td class="cell">3</td>
												<td class="cell"><span class="truncate">Green Residence</span></td>
												<td class="cell"><span class="badge bg-success">Active</span></td>
												<td class="cell"><span class="truncate">Eco-friendly apartment building designed for sustainable living.</span></td>
                      </tr> 
											
											
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
