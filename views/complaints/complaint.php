<div class="app-content pt-10 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">Complaint Form</h1>
    <hr class="mb-4">

    <form method="post" action="<?= \yii\helpers\Url::to(['complaints/complaint']) ?>">
      <div class="g-3">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">

        <!-- Title Field -->
        <div class="col-md-12">
          <label for="title" class="form-label fw-semibold">Title</label>
          <input type="text" class="form-control" id="title" name="Complaint[title]" placeholder="Enter your complaint title" required>
        </div>

        <!-- Status Dropdown -->
        <div class="col-md-2">
          <label for="status" class="form-label fw-semibold">Status</label>
          <select id="status" name="Complaint[status]" class="form-select" required>
            <option value="" disabled selected>Select Status</option>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Resolved">Resolved</option>
            <option value="Closed">Closed</option>
          </select>
        </div>

        <!-- Description Field -->
        <div class="col-md-12">
          <label for="description" class="form-label fw-semibold">Description</label>
          <textarea class="form-control" id="description" name="Complaint[description]" style="height: 250px;" placeholder="Enter description" required></textarea>
        </div>
        <!-- 
        <div class="col-12 text-end mt-3">
          <button type="submit" class="btn btn-primary px-4 text-light pointer">Save</button>
        </div> -->
        <div class="col-12 text-end mt-3" style="padding-bottom: 20px;">
          <button type="submit" class="btn btn-primary px-4 text-light" style="cursor: pointer;">Save</button>
        </div>
      </div>
    </form>

  </div>
</div>
<?php if (isset($error)): ?>
  <script>
    alert(<?= json_encode($error) ?>);
  </script>
<?php endif; ?>