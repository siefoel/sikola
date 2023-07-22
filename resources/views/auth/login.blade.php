@extends('templates.tauth')
@section('title', 'Login')
@section('auth')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
  <div class="position-relative overflow-hidden radial-gradient min-vh-100">
    <div class="position-relative z-index-5">
      <div class="row">
        <div class="col-xl-7 col-xxl-8">
          <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
          </a>
          <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
          </div>
        </div>
        <div class="col-xl-5 col-xxl-4">
          <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
            <div class="col-sm-8 col-md-6 col-xl-9">
              <h2 class="mb-3 fs-7 fw-bolder">Selamat datang di Admin SIKOLA</h2>
              <p class=" mb-9">Login untuk mrmulai mengadministrasikan pembelajaran anda !</p>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username or Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <div class="form-check">
                    {{-- <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label text-dark" for="flexCheckChecked">
                      Remeber this Device
                    </label> --}}
                  </div>
                  <a class="text-primary fw-medium" href="authentication-forgot-password.html">Lupa Password ?</a>
                </div>
                <button  type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                {{-- <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                  <a class="text-primary fw-medium ms-2" href="authentication-register.html">Create an account</a>
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection