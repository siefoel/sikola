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
      <div class="col-md-4 single-note-item all-category note-important">
        <div class="card card-body">
          <span class="side-stick"></span>
          <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Go for lunch"> Go for lunch </h6>
          <p class="note-date fs-2">01 April 2002</p>
          <div class="note-content">
            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
          </div>
          <div class="d-flex align-items-center">
            <a href="javascript:void(0)" class="link me-1">
              <i class="ti ti-star fs-4 favourite-note"></i>
            </a>
            <a href="javascript:void(0)" class="link text-danger ms-2">
             <i class="ti ti-trash fs-4 remove-note"></i>
            </a>
            <div class="ms-auto">
              <div class="category-selector btn-group">
                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                  <div class="category">
                    <div class="category-business"></div>
                    <div class="category-social"></div>
                    <div class="category-important"></div>
                    <span class="more-options text-dark">
                      <i class="ti ti-dots-vertical fs-5"></i>
                    </span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right category-menu">
                  <a class="
                          note-business
                          badge-group-item badge-business
                          dropdown-item
                          position-relative
                          category-business
                          d-flex
                          align-items-center
                        " href="javascript:void(0);">Business</a>
                  <a class="
                          note-social
                          badge-group-item badge-social
                          dropdown-item
                          position-relative
                          category-social
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Social</a>
                  <a class="
                          note-important
                          badge-group-item badge-important
                          dropdown-item
                          position-relative
                          category-important
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Important</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-note-item all-category note-social">
        <div class="card card-body">
          <span class="side-stick"></span>
          <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Meeting with Mr.Jojo"> Meeting with Mr.Jojo </h6>
          <p class="note-date fs-2">19 October 2021</p>
          <div class="note-content">
            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
          </div>
          <div class="d-flex align-items-center">
            <a href="javascript:void(0)" class="link me-1">
              <i class="ti ti-star fs-4 favourite-note"></i>
            </a>
            <a href="javascript:void(0)" class="link text-danger ms-2">
             <i class="ti ti-trash fs-4 remove-note"></i>
            </a>
            <div class="ms-auto">
              <div class="category-selector btn-group">
                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                  <div class="category">
                    <div class="category-business"></div>
                    <div class="category-social"></div>
                    <div class="category-important"></div>
                    <span class="more-options text-dark">
                      <i class="ti ti-dots-vertical fs-5"></i>
                    </span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right category-menu">
                  <a class="
                          note-business
                          badge-group-item badge-business
                          dropdown-item
                          position-relative
                          category-business
                          d-flex
                          align-items-center
                        " href="javascript:void(0);">Business</a>
                  <a class="
                          note-social
                          badge-group-item badge-social
                          dropdown-item
                          position-relative
                          category-social
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Social</a>
                  <a class="
                          note-important
                          badge-group-item badge-important
                          dropdown-item
                          position-relative
                          category-important
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Important</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-note-item all-category note-business">
        <div class="card card-body">
          <span class="side-stick"></span>
          <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Give Review for design"> Give Review for design </h6>
          <p class="note-date fs-2">02 January 2000</p>
          <div class="note-content">
            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
          </div>
          <div class="d-flex align-items-center">
            <a href="javascript:void(0)" class="link me-1">
              <i class="ti ti-star fs-4 favourite-note"></i>
            </a>
            <a href="javascript:void(0)" class="link text-danger ms-2">
             <i class="ti ti-trash fs-4 remove-note"></i>
            </a>
            <div class="ms-auto">
              <div class="category-selector btn-group">
                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                  <div class="category">
                    <div class="category-business"></div>
                    <div class="category-social"></div>
                    <div class="category-important"></div>
                    <span class="more-options text-dark">
                      <i class="ti ti-dots-vertical fs-5"></i>
                    </span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right category-menu">
                  <a class="
                          note-business
                          badge-group-item badge-business
                          dropdown-item
                          position-relative
                          category-business
                          d-flex
                          align-items-center
                        " href="javascript:void(0);">Business</a>
                  <a class="
                          note-social
                          badge-group-item badge-social
                          dropdown-item
                          position-relative
                          category-social
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Social</a>
                  <a class="
                          note-important
                          badge-group-item badge-important
                          dropdown-item
                          position-relative
                          category-important
                          d-flex
                          align-items-center
                        " href="javascript:void(0);"> Important</a>
                </div>
              </div>
            </div>
          </div>
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