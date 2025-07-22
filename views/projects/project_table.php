<?php
$filter = Yii::$app->request->get('filter', 'all');
$status = Yii::$app->request->get('status', 'all');
$session = Yii::$app->session;
if ($session->hasFlash("success")): ?>
	<script>
		alert(<?= json_encode($session->getFlash("success")) ?>);
	</script>
<?php endif ?>
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

<!-- < class="app-content pt-3 p-md-3 p-lg-4"> -->
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
						<form method="get" action="<?= \yii\helpers\Url::to(['projects/project_table']) ?>">
							<input type="hidden" name="r" value="projects/project_table">
							<?php if (!empty($status)): ?>
								<input type="hidden" name="status" value="<?= htmlspecialchars($status) ?>">
							<?php endif; ?>
							<select class="form-select w-auto" name="filter" onchange="this.form.submit()">
								<option selected value="" <?= $filter == '' ? 'selected' : '' ?>>All</option>
								<option value="today" <?= $filter == 'today' ? 'selected' : '' ?>>Today</option>
								<option value="this_week" <?= $filter == 'this week' ? 'selected' : '' ?>>This week</option>
								<option value="this_month" <?= $filter == 'this month' ? 'selected' : '' ?>>This month</option>
								<option value="last_three_month" <?= $filter == 'last three month' ? 'selected' : '' ?>>Last 3 months</option>
							</select>
						</form>
					</div>

				</div><!--//row-->
			</div><!--//table-utilities-->
		</div><!--//col-auto-->
	</div><!--//row-->


	<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
		<a class="flex-sm-fill text-sm-center nav-link <?= (!isset($status) || $status === 'all') ? 'active' : '' ?>" id="orders-all-tab" href="<?php echo \yii\helpers\URL::to(['projects/project_table', (!isset($status) || $status === 'all'), 'filter' => $filter]) ?>" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
		<a class="flex-sm-fill text-sm-center nav-link  <?= ($status === 'active') ? 'active' : '' ?>" id="orders-active-tab" href="<?php echo \yii\helpers\URL::to(['projects/project_table', 'status' => 'active', 'filter' => $filter]) ?>" role="tab" aria-controls="orders-active" aria-selected="false">Active</a>
		<a class="flex-sm-fill text-sm-center nav-link <?= ($status === 'in active') ? 'active' : '' ?>" id="orders-in-active-tab" href="<?php echo \yii\helpers\URL::to(['projects/project_table', 'status' => 'in active', 'filter' => $filter]) ?>" role="tab" aria-controls="orders-in-active" aria-selected="false">In Active</a>
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
								<?php if (empty($projects)): ?>
									<tr>
										<td colspan="4" class="text-center">No projects found.</td>
									</tr>
								<?php else: ?>

									<?php foreach ($projects as $index => $project): ?>
										<tr>
											<td class="cell"><?php echo $index + 1 ?></td>
											<td class="cell"><span class="truncate"><?php echo $project->projectName ?></span></td>
											<td class="cell"><span class="badge bg-success"><?php echo $project->status ?></span></td>
											<td class="cell"><span class="truncate">A premium residential complex with modern facilities and secure gated access.</span></td>
										</tr>
									<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div><!--//table-responsive-->

				</div><!--//app-card-body-->

			</div><!--//tab-pane-->
		</div><!--//tab-content-->



	</div><!--//container-fluid-->
</div><!--//app-content-->