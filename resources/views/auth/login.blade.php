@extends('templates.tauth')
@section('title', 'Login')
@section('css')
<link rel="stylesheet" href="{{asset('dist')}}/libs/dropzone/dist/min/dropzone.min.css">
@endsection
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
              <form method="POST" class="needs-validation" action="auth/login" novalidate>
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username or Email</label>
                  <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="username" required>
                  <div id="username" class="invalid-feedback">
                    Username atau Email harus di Isi !!
                  </div>
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                  <div id="username" class="invalid-feedback">
                    Password harus di isi !!
                  </div>
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
@section('js')
@if($message = Session::get('faild'))
<script>
      toastr.warning( "{{ $message }}", "Peringatan", {
        progressBar: true,
      });
</script>
@endif
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    "use strict";
    window.addEventListener(
      "load",
      function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName("needs-validation");
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(
          forms,
          function (form) {
            form.addEventListener(
              "submit",
              function (event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              },
              false
            );
          }
        );
      },
      false
    );
  })();
</script>
@endsection