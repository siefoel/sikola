@extends('templates.tauth')
@section('title','Pendaftaran')
@section('css')
<link rel="stylesheet" href="{{asset('dist')}}/libs/prismjs/themes/prism-okaidia.min.css">
@endsection
@section('auth')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-10 col-xxl-3">
            <div class="card mb-0">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Form Pendaftaran Sekolah</h4>
                    <p class="card-subtitle mb-3"> You can us the validation like what we did </p>
                    <form action="#" class="validation-wizard wizard-circle mt-5">
                      <!-- Step 1 -->
                      <h6>Data Sekolah</h6>
                      <section>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wfirstName2"> First Name : <span class="danger">*</span>
                              </label>
                              <input type="text" class="form-control required" id="wfirstName2" name="firstName" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wlastName2"> Last Name : <span class="danger">*</span>
                              </label>
                              <input type="text" class="form-control required" id="wlastName2" name="lastName" />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wemailAddress2"> Email Address : <span class="danger">*</span>
                              </label>
                              <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wphoneNumber2">Phone Number :</label>
                              <input type="tel" class="form-control" id="wphoneNumber2" />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wlocation2"> Select City : <span class="danger">*</span>
                              </label>
                              <select class="form-select required" id="wlocation2" name="location">
                                <option value="">Select City</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Dubai">Dubai</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wdate2">Date of Birth :</label>
                              <input type="date" class="form-control" id="wdate2" />
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- Step 2 -->
                      <h6>Data PIC</h6>
                      <section>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="jobTitle2">Company Name :</label>
                              <input type="text" class="form-control required" id="jobTitle2" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="webUrl3">Company URL :</label>
                              <input type="url" class="form-control required" id="webUrl3" name="webUrl3" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mb-3">
                              <label for="shortDescription3">Short Description :</label>
                              <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- Step 3 -->
                      <h6>Step 3</h6>
                      <section>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wint1">Interview For :</label>
                              <input type="text" class="form-control required" id="wint1" />
                            </div>
                            <div class="mb-3">
                              <label for="wintType1">Interview Type :</label>
                              <select class="form-select required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                <option value="Banquet">Normal</option>
                                <option value="Fund Raiser">Difficult</option>
                                <option value="Dinner Party">Hard</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="wLocation1">Location :</label>
                              <select class="form-select required" id="wLocation1" name="wlocation">
                                <option value="">Select City</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Dubai">Dubai</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="wjobTitle2">Interview Date :</label>
                              <input type="date" class="form-control required" id="wjobTitle2" />
                            </div>
                            <div class="mb-3">
                              <label>Requirements :</label>
                              <div class="c-inputs-stacked">
                                <div class="form-check">
                                  <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio16">Employee</label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio17">Contract</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- Step 4 -->
                      <h6>Step 4</h6>
                      <section>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="behName1">Behaviour :</label>
                              <input type="text" class="form-control required" id="behName1" />
                            </div>
                            <div class="mb-3">
                              <label for="participants1">Confidance</label>
                              <input type="text" class="form-control required" id="participants1" />
                            </div>
                            <div class="mb-3">
                              <label for="participants1">Result</label>
                              <select class="form-select required" id="participants1" name="location">
                                <option value="">Select Result</option>
                                <option value="Selected">Selected</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Call Second-time"> Call Second-time </option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="decisions1">Comments</label>
                              <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                              <label>Rate Interviwer :</label>
                              <div class="c-inputs-stacked">
                                <div class="form-check">
                                  <input type="radio" id="customRadio11" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio11">1 star</label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" id="customRadio12" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio12">2 star</label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" id="customRadio13" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio13">3 star</label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" id="customRadio14" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio14">4 star</label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" id="customRadio15" name="customRadio" class="form-check-input" />
                                  <label class="form-check-label" for="customRadio15">5 star</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
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
<script src="{{asset('dist')}}/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="{{asset('dist')}}/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="{{asset('dist')}}/js/forms/form-wizard.js"></script>
@endsection