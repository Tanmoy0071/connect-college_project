<div 
  class="w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center"
  style="
    background: radial-gradient(125% 125% at 50% 10%, #fff 40%, #4e51fbff 100%);
    padding: 20px;
  "
>

  <div class="mb-4 text-center">
    <img 
      src="./assets/logo.png" 
      alt="Connect Logo" 
      style="height: 90px; width: auto;"
    >
  </div>


  <div class="card border-0 shadow-lg rounded-4" style="width: 450px;">
    <div class="card-body p-5">

      <h2 class="text-center mb-3 fw-bold">Create Account</h2>
      <p class="text-center mb-4 text-muted">Join us and get started</p>

      <form method="post" action="./server/requests.php">

        <div class="mb-4">
          <label for="username" class="form-label fw-semibold">User Name</label>
          <input 
            type="text" 
            name="username" 
            class="form-control form-control-lg rounded-3" 
            id="username" 
            placeholder="Enter your name" 
            required
          >
        </div>

        <div class="mb-4">
          <label for="email" class="form-label fw-semibold">Email Address</label>
          <input 
            type="email" 
            name="email" 
            class="form-control form-control-lg rounded-3" 
            id="email" 
            placeholder="Enter your email" 
            required
          >
        </div>

        <div class="mb-4">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input 
            type="password" 
            name="password" 
            class="form-control form-control-lg rounded-3" 
            id="password" 
            placeholder="Enter your password" 
            required
          >
        </div>

        <div class="mb-4">
          <label for="address" class="form-label fw-semibold">User Address</label>
          <input 
            type="text" 
            name="address" 
            class="form-control form-control-lg rounded-3" 
            id="address" 
            placeholder="Enter your address" 
            required
          >
        </div>

        <button 
          type="submit" 
          name="signup" 
          class="btn btn-primary btn-lg w-100 rounded-3"
          style="padding: 10px 0;"
        >
          Sign Up
        </button>

      </form>
      
    </div>
  </div>

</div>
