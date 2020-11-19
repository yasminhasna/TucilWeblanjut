<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>
<div class="container">

    
<body class="text-center">
    <form class="form-signin">
    <br><br><br>
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a class="nav-link" href="/register">Create an Account</a>
</form>
</body>
  
</div>
<?= $this->endSection(); ?>