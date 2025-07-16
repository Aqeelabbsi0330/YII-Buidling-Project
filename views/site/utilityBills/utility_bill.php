<div class="app-content pt-4 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">Bill Entry</h1>
    <hr class="mb-4">

    <div class="app-card app-card-settings p-4 border rounded-3 bg-white shadow-sm">
      <div class="app-card-body">
        <form class="row g-3">

          <!-- Bill Type -->
          <div class="col-md-6">
            <label for="billType" class="form-label fw-semibold">Bill Type</label>
            <select class="form-select" id="billType" required>
              <option selected disabled>Select Bill Type</option>
              <option value="Electricity">Electricity</option>
              <option value="Water">Water</option>
              <option value="Gas">Gas</option>
              <option value="Internet">Internet</option>
            </select>
          </div>

          <!-- Bill Units -->
          <div class="col-md-6">
            <label for="billUnits" class="form-label fw-semibold">Bill Units</label>
            <input type="number" step="0.01" class="form-control" id="billUnits" placeholder="Optional (e.g. 120.50)">
          </div>

          <!-- Amount -->
          <div class="col-md-6">
            <label for="amount" class="form-label fw-semibold">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" placeholder="e.g. 1500.00" required>
          </div>

          <!-- Bill Month -->
          <div class="col-md-6">
            <label for="billMonth" class="form-label fw-semibold">Bill Month</label>
            <input type="date" class="form-control" id="billMonth" required>
          </div>

          <!-- Due Date -->
          <div class="col-md-6">
            <label for="dueDate" class="form-label fw-semibold">Due Date</label>
            <input type="date" class="form-control" id="dueDate">
          </div>

          <!-- Payment Date -->
          <div class="col-md-6">
            <label for="paymentDate" class="form-label fw-semibold">Payment Date</label>
            <input type="date" class="form-control" id="paymentDate" required>
          </div>

          <!-- Paid Status -->
          <div class="col-md-6">
            <label for="paidStatus" class="form-label fw-semibold">Paid Status</label>
            <select class="form-select" id="paidStatus" required>
              <option selected disabled>Select Status</option>
              <option value="Paid">Paid</option>
              <option value="Unpaid">Unpaid</option>
            </select>
          </div>

          <!-- Submit -->
          <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary text-light px-4">Save</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <hr class="mb-4">
</div>
