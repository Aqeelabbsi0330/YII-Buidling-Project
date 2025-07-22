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
									<?php foreach ($users as $index => $user): ?>
										<tr>
											<td class="cell"><?= $index + 1 ?></td>
											<td class="cell"><?= htmlspecialchars($user->cnic) ?></td>
											<td class="cell"><?= htmlspecialchars($user->email) ?></td>
											<td class="cell"><?= htmlspecialchars($user->phoneNumber) ?></td>
											<td class="cell">••••••••</td> <!-- hide password -->
											<td class="cell"><?= htmlspecialchars($user->province) ?></td>
											<td class="cell"><?= htmlspecialchars($user->district) ?></td>
											<td class="cell"><?= htmlspecialchars($user->city) ?></td>
											<td class="cell"><?= htmlspecialchars($user->address) ?></td>
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