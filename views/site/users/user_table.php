<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Users List</h1>
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
				    <!-- <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-un-paid-tab" data-bs-toggle="tab" href="#orders-un-paid" role="tab" aria-controls="orders-un-paid" aria-selected="false">UnPaid</a> -->
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
                        <th class="cell">CNIC</th>
                        <th class="cell">Email</th>
                        <th class="cell">Phone</th>
                        <th class="cell">Password</th>
                        <th class="cell">Province</th>
                        <th class="cell">District</th>
                        <th class="cell">City</th>
                        <th class="cell">Address</th>
                      </tr>
										</thead>
										<tbody>

                      <tr>
                        <td class="cell">1</td>
                        <td class="cell">3520212345678</td>
                        <td class="cell">ali.khan@example.com</td>
                        <td class="cell">03001234567</td>
                        <td class="cell">••••••••</td>
                        <td class="cell">Punjab</td>
                        <td class="cell">Lahore</td>
                        <td class="cell">Lahore</td>
                        <td class="cell">House #123, Model Town</td>
                      </tr>
										  <tr>
                        <td class="cell">2</td>
                        <td class="cell">4210112345671</td>
                        <td class="cell">sana.shaikh@gmail.com</td>
                        <td class="cell">03111234567</td>
                        <td class="cell">••••••••</td>
                        <td class="cell">Sindh</td>
                        <td class="cell">Karachi</td>
                        <td class="cell">Karachi</td>
                        <td class="cell">Flat #4, Gulshan-e-Iqbal</td>
                      </tr>
                      <tr>
                        <td class="cell">3</td>
                        <td class="cell">6110112345674</td>
                        <td class="cell">usman.butt@yahoo.com</td>
                        <td class="cell">03211234567</td>
                        <td class="cell">••••••••</td>
                        <td class="cell">KPK</td>
                        <td class="cell">Peshawar</td>
                        <td class="cell">Peshawar</td>
                        <td class="cell">Street 9, University Road</td>
                      </tr>										
											
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
