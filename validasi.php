<!DOCTYPE html>
<html>
<head>
	<title>Form login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar bg-light">
  	<div class="container-fluid">
    	<a class="navbar-brand">Validasi php</a>
    	<form class="d-flex" role="search">
      		<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success" type="submit">Search</button>
    		</form>
  		</div>
	</nav>
	<div class="container">
  <!-- Content here -->
  <div class="container text-center">
  <div class="row border">
    <div class="col-6 col-sm-4 border">User name</div>
    <div class="col-6 col-sm-4 border">input</div>
      <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4 border">Password</div>
    <div class="col-6 col-sm-4 border">input</div>
    <button type="button" class="btn btn-primary btn-sm">Masuk bwang</button>
  </div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    pilihan login
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Login</a></li>
    <li><a class="dropdown-item" href="#">Registrasi</a></li>
    <li><a class="dropdown-item" href="#">Pulih akun</a></li>
  </ul>
</div>
</div>
</body>
</html>