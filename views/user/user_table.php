<?php

use yii\helpers\Html;
use yii\helpers\Json;

$session = Yii::$app->session;
?>
<?php if ($session->hasFlash('success')) : ?>
	<script>
		alert("<?= $session->getFlash('success') ?>");
	</script>

<?php endif;
$session->removeFlash('success');
?>

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

							<select class="form-select w-auto">
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
										<!-- <th class="cell">Email</th> -->
										<th class="cell">Phone</th>
										<!-- <th class="cell">Password</th>
										<th class="cell">Province</th>
										<th class="cell">District</th>
										<th class="cell">City</th> -->
										<th class="cell">Address</th>
										<th class="cell">Edit/Delete</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $index => $user): ?>
										<tr>
											<td class="cell"><?= $index + 1 ?></td>
											<td class="cell"><?= htmlspecialchars($user->cnic) ?></td>
											<!-- <td class="cell"><?= htmlspecialchars($user->email) ?></td> -->
											<td class="cell"><?= htmlspecialchars($user->phoneNumber) ?></td>
											<!-- <td class="cell">••••••••</td>  -->
											<!-- <td class="cell"><?= htmlspecialchars($user->province) ?></td>
											<td class="cell"><?= htmlspecialchars($user->district) ?></td>
											<td class="cell"><?= htmlspecialchars($user->city) ?></td> -->
											<td class="cell"><?= htmlspecialchars($user->address) ?></td>
											<td>
												<a href="#" title="Edit" class="text-warning me-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706l-1.00 1a.5.5 0 0 1-.707 0l-1-1a.5.5 0 0 1 .707-.707l1-1a.5.5 0 0 1 .707 0zm-1.75 2.456-1-1L5 11.146V12h.854l7.898-7.604z" />
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5V6a.5.5 0 0 0-1 0v7.5a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H10a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
													</svg>
												</a>

												<a href="#" title="Delete" class="text-danger">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
														<path d="M2.5 1a1 1 0 0 1 1-1H6a1 1 0 0 1 1 1h2a1 1 0 0 1 1 1h2.5a.5.5 0 0 1 0 1H13v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3H2.5a.5.5 0 0 1 0-1H4a1 1 0 0 1 1-1zM5.5 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7zm3 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7zm3 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
													</svg>
												</a>


											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div><!--//table-responsive-->

						<div class="d-flex flex-row p-4 justify-content-end gap-3 me-1">
							<div class="text-end">
								<button type="submit" class="btn btn-primary px-4 text-light">Edit</button>
							</div>
							<div class="text-end">
								<button type="submit" class="btn btn-primary px-4 text-light">Delete</button>
							</div>
						</div>


					</div><!--//app-card-body-->

				</div><!--//tab-pane-->
			</div><!--//tab-content-->



		</div><!--//container-fluid-->
	</div><!--//app-content-->