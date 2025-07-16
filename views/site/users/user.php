<div class="app-content pt-10 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">User Form</h1>
    <hr class="mb-4">


      <div class="app-card app-card-settings p-4 border rounded-3 bg-white">
        <div class="app-card-body">
          <form class="row g-3">
            <div class="col-12">
              <label for="cnic" class="form-label fw-semibold">CNIC <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="cnic" inputmode="numeric"  pattern="[0-9]{13}" maxlength="13" placeholder="cnic without dashes" required>
            </div>

            <div class="col-12">
              <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
            </div>

            <div class="col-md-6">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <input type="text" class="form-control" inputmode="numeric"  pattern="[0-9]{11}" maxlength="15" id="phone" placeholder="03XXXXXXXXX" required>
            </div>

            <div class="col-md-6">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input type="password" class="form-control" id="password" required>
            </div>

            <div class="col-md-6">
              <label for="province" class="form-label fw-semibold">Province</label>
              <input type="text" class="form-control" id="province" placeholder="Punjab">
            </div>

            <div class="col-md-6">
              <label for="district" class="form-label fw-semibold">District</label>
              <input type="text" class="form-control" id="district" placeholder="Lahore">
            </div>

            <div class="col-md-6">
              <label for="city" class="form-label fw-semibold">City</label>
              <input type="text" class="form-control" id="city" placeholder="City">
            </div>

            <div class="col-md-6">
              <label for="address" class="form-label fw-semibold">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Address">
            </div>

            <div class="col-12 text-end mt-3">
              <button type="submit" class="btn btn-primary px-4 text-light">Save</button>
            </div>
          </form>
        </div><!-- app-card-body -->
      </div><!-- app-card -->
    </div>
    <hr class="mb-4">
  </div>
  

