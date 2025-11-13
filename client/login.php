
<div 
  class="w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center"
  style="
    background: radial-gradient(125% 125% at 50% 10%, #fff 40%, #6366f1 100%);
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

 
  <div class="card border-0 shadow-lg rounded-4" style="width: 420px;">
    <div class="card-body p-5">

      <h2 class="text-center mb-4 fw-bold">Welcome Back</h2>
      <p class="text-center mb-4 text-muted">Login to your account</p>

      <form action="./server/requests.php" method="post">
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

        <button 
          type="submit" 
          name="login" 
          class="btn btn-primary btn-lg w-100 rounded-3"
          style="padding: 10px 0;"
        >
          Login
        </button>
      </form>

    </div>
  </div>

</div>
