 <div class="container mt-5">
    <h1 class="text-center mb-4">Login</h1>

    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="text-center mb-3">Login to your Account</h4>

            <form action="./server/requests.php" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>

              <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>
         
          </div>
        </div>
      </div>
    </div>
  </div>