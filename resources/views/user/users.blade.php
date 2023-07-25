@extends('templates.tdashboard')

@section('css')
    
@endsection
@section('content')
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Users Acounnt</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">Notes</li>
            </ol>
          </nav>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">  
            <img src="{{asset('dist')}}/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
    <li class="nav-item">
      <a href="javascript:void(0)" class="
              nav-link
            
              note-link
              d-flex
              align-items-center
              justify-content-center
              active
              px-3 px-md-3
              me-0 me-md-2 text-body-color
            " id="all-category">
        <i class="ti ti-list fill-white me-0 me-md-1"></i>
        <span class="d-none d-md-block font-weight-medium">All Users</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="javascript:void(0)" class="
              nav-link
              note-link
              d-flex
              align-items-center
              justify-content-center
              px-3 px-md-3
              me-0 me-md-2 text-body-color
            " id="note-business">
        <i class="ti ti-briefcase fill-white me-0 me-md-1"></i>
        <span class="d-none d-md-block font-weight-medium">Administrator</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="javascript:void(0)" class="
              nav-link
            
              note-link
              d-flex
              align-items-center
              justify-content-center
              px-3 px-md-3
              me-0 me-md-2 text-body-color
            " id="note-social">
        <i class="ti ti-share fill-white me-0 me-md-1"></i>
        <span class="d-none d-md-block font-weight-medium">Operator</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="javascript:void(0)" class="
              nav-link   
              note-link
              d-flex
              align-items-center
              justify-content-center
              px-3 px-md-3
              me-0 me-md-2 text-body-color
            " id="note-important">
        <i class="ti ti-star fill-white me-0 me-md-1"></i>
        <span class="d-none d-md-block font-weight-medium">Siswa</span>
      </a>
    </li>
    <li class="nav-item ms-auto">
      <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center px-3" id="add-notes">
       <i class="ti ti-user-plus me-0 me-md-1 fs-4"></i>
        <span class="d-none d-md-block font-weight-medium fs-3">Add User</span>
      </a>
    </li>
  </ul>
  <div class="tab-content">
    <div id="note-full-container" class="note-has-grid row">
      <div class="col-md-12 single-note-item all-category">
        <div class="table-responsive">
          <table class="table search-table align-middle text-nowrap">
            <thead class="header-item">
              <th>
                <div class="n-chk align-self-center text-center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                    <label class="form-check-label" for="contact-check-all"></label>
                    <span class="new-control-indicator"></span>
                  </div>
                </div>
              </th>
              <th>Name</th>
              <th>Email</th>
              <th>Location</th>
              <th>Phone</th>
              <th>Action</th>
            </thead>
            <tbody>
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                      <label class="form-check-label" for="checkbox1"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                      <label class="form-check-label" for="checkbox2"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                        <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox3" />
                      <label class="form-check-label" for="checkbox3"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson </h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                      <label class="form-check-label" for="checkbox4"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-4.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong </h6>
                        <span class="user-work fs-3" data-occupation="Ethical Hacker">Ethical Hacker</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox5" />
                      <label class="form-check-label" for="checkbox5"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-5.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                        <span class="user-work fs-3" data-occupation="Web developer">Web developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox6" />
                      <label class="form-check-label" for="checkbox6"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="New York, USA">New York, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox7" />
                      <label class="form-check-label" for="checkbox7"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                        <span class="user-work fs-3" data-occupation="Project Manager">Project Manager</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox8" />
                      <label class="form-check-label" for="checkbox8"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 single-note-item note-social">
        <div class="table-responsive">
          <table class="table search-table align-middle text-nowrap">
            <thead class="header-item">
              <th>
                <div class="n-chk align-self-center text-center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                    <label class="form-check-label" for="contact-check-all"></label>
                    <span class="new-control-indicator"></span>
                  </div>
                </div>
              </th>
              <th>Name</th>
              <th>Email</th>
              <th>Location</th>
              <th>Phone</th>
              <th>Action</th>
            </thead>
            <tbody>
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                      <label class="form-check-label" for="checkbox1"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                      <label class="form-check-label" for="checkbox2"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                        <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox3" />
                      <label class="form-check-label" for="checkbox3"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson </h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                      <label class="form-check-label" for="checkbox4"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-4.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong </h6>
                        <span class="user-work fs-3" data-occupation="Ethical Hacker">Ethical Hacker</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox5" />
                      <label class="form-check-label" for="checkbox5"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-5.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                        <span class="user-work fs-3" data-occupation="Web developer">Web developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox6" />
                      <label class="form-check-label" for="checkbox6"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="New York, USA">New York, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox7" />
                      <label class="form-check-label" for="checkbox7"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                        <span class="user-work fs-3" data-occupation="Project Manager">Project Manager</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox8" />
                      <label class="form-check-label" for="checkbox8"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 single-note-item note-business">
        <div class="table-responsive">
          <table class="table search-table align-middle text-nowrap">
            <thead class="header-item">
              <th>
                <div class="n-chk align-self-center text-center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                    <label class="form-check-label" for="contact-check-all"></label>
                    <span class="new-control-indicator"></span>
                  </div>
                </div>
              </th>
              <th>Name</th>
              <th>Email</th>
              <th>Location</th>
              <th>Phone</th>
              <th>Action</th>
            </thead>
            <tbody>
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                      <label class="form-check-label" for="checkbox1"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                      <label class="form-check-label" for="checkbox2"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                        <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox3" />
                      <label class="form-check-label" for="checkbox3"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson </h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                      <label class="form-check-label" for="checkbox4"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-4.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong </h6>
                        <span class="user-work fs-3" data-occupation="Ethical Hacker">Ethical Hacker</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox5" />
                      <label class="form-check-label" for="checkbox5"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-5.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                        <span class="user-work fs-3" data-occupation="Web developer">Web developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <!-- start row -->
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox6" />
                      <label class="form-check-label" for="checkbox6"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="New York, USA">New York, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox7" />
                      <label class="form-check-label" for="checkbox7"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                        <span class="user-work fs-3" data-occupation="Project Manager">Project Manager</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox8" />
                      <label class="form-check-label" for="checkbox8"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('dist')}}/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                </td>
                <td>
                  <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                </td>
                <td>
                  <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Add notes -->
  <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-header bg-primary">
          <h6 class="modal-title text-white">Add Uses</h6>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="notes-box">
            <div class="notes-content">
              <form action="javascript:void(0);" id="addnotesmodalTitle">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="note-title">
                      <label>Note Title</label>
                      <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="note-description">
                      <label>Note Description</label>
                      <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
          <button id="btn-n-add" class="btn btn-primary" disabled>Add</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
<script src="{{asset('dist')}}/js/apps/notes.js"></script>
@endsection