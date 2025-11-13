<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   <a class="navbar-brand d-flex align-items-center" href="./">
  <img 
    src="./assets/logo.png" 
    alt="Connect Logo" 
    style="height: 60px; width: auto;" 
    class="me-2"
  >
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php
        if($_SESSION['user']['username']){ ?>
   <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        </li>
        <?php } ?>
          <?php
        if(!$_SESSION['user']['username']){ ?>
   
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>
        <?php } ?>
     
          <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Latest Questions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>