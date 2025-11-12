 <div class="container mt-5">
    <h1 class="text-center mb-4">Signup</h1>

    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="text-center mb-3">Create an Account</h4>

            <form method="post" action="./server/requests.php">
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>

            <div class="mb-3">
                <label for="address" class="form-label">User Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter your password" required>
              </div>

              <button type="submit" name="signup" class="btn btn-primary w-100">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>