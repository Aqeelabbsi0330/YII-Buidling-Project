<div class="app-content pt-10 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">Notice Form</h1>
    <hr class="mb-4">

    <div class="g-3">

      <!-- Title Field -->
      <div class="col-md-12">
        <label for="title" class="form-label fw-semibold">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
      </div>

      <!-- Status Dropdown -->
      <div class="col-md-2">
        <label for="status" class="form-label fw-semibold">Status</label>
        <select id="status" name="status" class="form-select" required>
          <option value="" disabled selected>Select Status</option>
          <option value="Pending">Active</option>
          <option value="In Progress">Expired</option>
        </select>
      </div>

      <!-- Description Field -->
      <div class="col-md-12">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea class="form-control" id="description" name="description" style="height: 250px;" placeholder="Enter description" required></textarea>
      </div>

      <div class="col-12 text-end mt-3">
        <button type="submit" class="btn btn-primary px-4 text-light">Save</button>
      </div>

    </div>
  </div>
</div>
