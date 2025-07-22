<?php
$filter = Yii::$app->request->get('filter');
$status = Yii::$app->request->get('status');
$session = Yii::$app->session;
if ($session->hasFlash('success')): ?>
	<script>
		alert("<?= $session->getFlash('success') ?>");
	</script>
<?php endif; ?>
<?php
$this->registerCss("
    .app-nav-tabs .nav-link {
        color: #000;
        border: none;
        border-bottom: 2px solid transparent;
        padding-bottom: 10px;
    }

    .app-nav-tabs .nav-link.active {
        color: #15a362;
        border-bottom: 3px solid #15a362;
        font-weight: 600;
        background-color: transparent;
    }
");
?>


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
							<form method="get" action="<?= \yii\helpers\Url::to(['complaints/complaint_table']) ?>">
								<input type="hidden" name="r" value="complaints/complaint_table">
								<?php if (!empty($status)): ?>
									<input type="hidden" name="status" value="<?= htmlspecialchars($status) ?>">
								<?php endif; ?>
								<select class="form-select w-auto" name="filter" onchange="this.form.submit()">
									<option value="" <?= $filter == '' ? 'selected' : '' ?>>All</option>
									<option value="today" <?= $filter == 'today' ? 'selected' : '' ?>>Today</option>
									<option value="this_week" <?= $filter == 'this_week' ? 'selected' : '' ?>>This week</option>
									<option value="this_month" <?= $filter == 'this_month' ? 'selected' : '' ?>>This month</option>
									<option value="last_3_months" <?= $filter == 'last_3_months' ? 'selected' : '' ?>>Last 3 months</option>
								</select>
							</form>
						</div>


					</div><!--//row-->
				</div><!--//table-utilities-->
			</div><!--//col-auto-->
		</div><!--//row-->


		<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">

			<a class="flex-sm-fill text-sm-center nav-link <?= (!isset($status) || $status === 'all') ? 'active' : '' ?>"
				href="<?= \yii\helpers\Url::to(['complaints/complaint_table', (!isset($status) || $status === 'all'), 'filter' => $filter]) ?>">All</a>
			<a class="flex-sm-fill text-sm-center nav-link <?= $status === 'resolved' ? 'active' : '' ?>"
				href="<?= \yii\helpers\Url::to(['complaints/complaint_table', 'status' => 'resolved', 'filter' => $filter]) ?>">Resolved</a>
			<a class="flex-sm-fill text-sm-center nav-link <?= $status === 'In Progress' ? 'active' : '' ?>"
				href="<?= \yii\helpers\Url::to(['complaints/complaint_table', 'status' => 'In Progress', 'filter' => $filter]) ?>">In Progress</a>
			<a class="flex-sm-fill text-sm-center nav-link <?= $status === 'pending' ? 'active' : '' ?>"
				href="<?= \yii\helpers\Url::to(['complaints/complaint_table', 'status' => 'pending', 'filter' => $filter]) ?>">Pending</a>

			<a class="flex-sm-fill text-sm-center nav-link <?= $status === 'closed' ? 'active' : '' ?>"
				href="<?= \yii\helpers\Url::to(['complaints/complaint_table', 'status' => 'closed', 'filter' => $filter]) ?>">Closed</a>


			<!-- <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="<?php echo \yii\helpers\Url::to(['complaints/complaint']) ?>" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
			<a class="flex-sm-fill text-sm-center nav-link" id="orders-resolved-tab" data-bs-toggle="tab" href="<?php echo \yii\helpers\Url::to(['complaints/complaint_resolved']) ?>" role="tab" aria-controls="orders-resolved" aria-selected="false">Resolved</a> -->
			<!-- <a class="flex-sm-fill text-sm-center nav-link" id="orders-in-progress-tab" data-bs-toggle="tab" href="#orders-in-progress" role="tab" aria-controls="orders-in-progress" aria-selected="false">In Progress</a>
			<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
			<a class="flex-sm-fill text-sm-center nav-link" id="orders-closed-tab" data-bs-toggle="tab" href="#orders-closed" role="tab" aria-controls="orders-closed" aria-selected="false">Closed</a> -->
		</nav>


		<div class="tab-content" id="orders-table-tab-content">
			<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
				<div class="app-card app-card-orders-table shadow-sm mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<?php if ($complaints): ?>
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

										<?php foreach ($complaints as $index => $complaint): ?>
											<tr>
												<td class="cell"><?= $index + 1 ?></td>
												<td class="cell"><span class="truncate"><?= htmlspecialchars($complaint->title) ?></span></td>
												<td class="cell"><span class="badge " style="color:red"><?= htmlspecialchars($complaint->status) ?></span></td>
												<td class="cell"><span class="truncate"><?= htmlspecialchars($complaint->description) ?></span></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							<?php else: ?>
								<div class="alert alert-warning" role="alert">
									<P><?= isset($error) ? htmlspecialchars($error) : 'No complaints found.' ?></P>
								</div>
							<?php endif; ?>
						</div><!--//table-responsive-->

					</div><!--//app-card-body-->

				</div><!--//tab-pane-->
			</div><!--//tab-content-->



		</div><!--//container-fluid-->
	</div>
</div>