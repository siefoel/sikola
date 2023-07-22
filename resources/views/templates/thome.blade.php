<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 01:11:12 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  Title -->
  <title>Modernize Landing Page</title>
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{asset('dist')}}/images/logos/favicon.ico">
  <!--  Aos -->
  <link rel="stylesheet" href="{{asset('dist')}}/libs/aos/dist/aos.css">
  <link rel="stylesheet" href="{{asset('dist')}}/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  @yield('css')
  <link rel="stylesheet" href="{{asset('dist')}}/css/homestyle.min.css">
</head>

<body>
  <div class="page-wrapper p-0 overflow-hidden">
    <header class="header">
      <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
          <a class="navbar-brand me-0 py-0" href="index.html">
            <img src="{{asset('dist')}}/images/logos/logo-dark.svg" alt="img-fluid">
          </a>
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
              <li class="nav-item dropdown hover-dd mega-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false"> Demos <span class="d-flex align-items-center">
                    <i class="ti ti-chevron-down"></i>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-animate-up p-4">
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                      <h5 class="fs-5 fw-bolder">Different Demos</h5>
                      <h6 class="text-muted">Included with the Package</h6>
                    </div>
                  </div>
                  <div class="row justify-content-center my-4">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/demos/demo-main.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Main</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/demos/demo-dark.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/dark/index.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Dark</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/demos/demo-horizontal.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Horizontal</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/demos/demo-minisidebar.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/minisidebar/index.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Minisidebar</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/demos/demo-rtl.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">RTL</h6>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="row justify-content-center mb-4">
                    <div class="col-md-12">
                      <h5 class="fs-5 fw-semibold mt-8">Different Apps</h5>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-12">
                      <div class="row justify-content-between">
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/apps/app-calendar.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-calendar.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Calendar</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/apps/app-chat.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-chat.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Chat</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/apps/app-email.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-email.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Email</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/apps/app-contact.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-contact2.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Contact</h6>
                        </div>
                        <div class="col">
                          <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                            <img src="{{asset('dist')}}/images/apps/app-invoice.jpg" alt="" class="img-fluid">
                            <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-invoice.html"
                              class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                              Preview</a>
                          </div>
                          <h6 class="mb-0 text-center fw-bolder fs-3">Invoice</h6>
                        </div>
                      </div>
                    </div>

                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown hover-dd mega-dropdown pages-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false"> Pages <span class="d-flex align-items-center">
                    <i class="ti ti-chevron-down"></i>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up py-0">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="p-4">
                        <div>
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-chat.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid"
                                      width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-invoice.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-invoice.svg" alt=""
                                      class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-contact2.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-mobile.svg" alt=""
                                      class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-email.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-message-box.svg" alt=""
                                      class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Email App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-user-profile.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid"
                                      width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-calendar.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-date.svg" alt="" class="img-fluid"
                                      width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-contact.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-lifebuoy.svg" alt=""
                                      class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                  </div>
                                </a>
                                <a target="_blank" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-notes.html"
                                  class="d-flex align-items-center pb-7 position-relative lh-base">
                                  <div
                                    class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="{{asset('dist')}}/images/svgs/icon-dd-application.svg" alt=""
                                      class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold text-hover-primary">Notes Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="position-relative p-4 border-start h-100">
                        <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                        <ul class="list-unstyled">
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-pricing.html">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register.html">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-error.html">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-notes.html">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-user-profile.html">User Application</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark text-hover-primary" target="_blank"
                              href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-account-settings.html">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/docs/index.html" target="_blank">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://adminmart.com/support/"
                  target="_blank">Support</a>
              </li>
              <li class="nav-item ms-2">
                <a class="btn btn-primary fs-3 rounded btn-hover-shadow px-3 py-2"
                  href="/auth">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="body-wrapper overflow-hidden">
      @yield('content')

    </div>
    <footer class="footer-part pt-8 pb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="text-center">
              <a href="index-new.html">
                <img src="{{asset('dist')}}/images/logos/favicon.ico" alt="" class="img-fluid pb-3">
              </a>
              <p class="mb-0 text-dark">All rights reserved by Modernize. Designed & Developed by <a
                  class="text-dark text-hover-primary border-bottom border-primary"
                  href="https://adminmart.com/">AdminMart.</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header p-4">
        <img src="{{asset('dist')}}/images/logos/logo-dark.svg" alt="" class="img-fluid" width="150">
      </div>
      <div class="offcanvas-body p-4">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"> Demos <i class="ti ti-chevron-down fs-14"></i></a>
            <ul class="dropdown-menu ps-2">
              <li>
                <a class="dropdown-item text-dark" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/dark/index.html">Dark</a>
              </li>
              <li>
                <a class="dropdown-item text-dark" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.html">Horizontal</a>
              </li>
              <li>
                <a class="dropdown-item text-dark" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index.html">LTR</a>
              </li>
              <li>
                <a class="dropdown-item text-dark" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/minisidebar/index.html">Minisidebar</a>
              </li>
              <li>
                <a class="dropdown-item text-dark" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html">RTL</a>
              </li>
            </ul>
          </li>
          <li class="nav-item mt-3 dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"> Pages <i class="ti ti-chevron-down fs-14"></i></a>
            <div class="dropdown-menu mt-3 ps-1">
              <!-- apps -->
              <div class="row">
                <div class="col-12">
                  <div class="position-relative">
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Chat Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid"
                          width="24" height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Invoice App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid"
                          width="24" height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Contact Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid"
                          width="24" height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Email App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="position-relative">
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">User Profile</h6>
                        <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Calendar App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid"
                          width="24" height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Contact List Table</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                      </div>
                    </a>
                    <a href="#" class="d-flex align-items-center pb-7 position-relative lh-base">
                      <div class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('dist')}}/images/svgs/icon-dd-application.svg" alt="" class="img-fluid"
                          width="24" height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 fw-semibold text-hover-primary">Notes Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <!-- quick links -->
                  <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                  <ul class="list-unstyled px-1">
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">Pricing Page</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">Authentication Design</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">Register Now</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">404 Error Page</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">Notes App</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">User Application</a>
                    </li>
                    <li class="mb-3">
                      <a class="fw-semibold text-dark text-hover-primary" href="#">Account Settings</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark active" aria-current="page" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/docs/index.html">Documentation</a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" href="#">Pages</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html" class="btn btn-primary w-100 py-2">Login</a>
        </form>
      </div>
    </div>
  </div>
  <script src="{{asset('dist')}}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('dist')}}/libs/aos/dist/aos.js"></script>
  <script src="{{asset('dist')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('dist')}}/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="{{asset('dist')}}/js/custom-home.js"></script>
  @yield('js')

</body>


<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 01:11:21 GMT -->
</html>