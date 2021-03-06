<?php
 $this->load->view('includes/header.php');
?>
<!-- Breadcrumb End -->
<div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
        <div class="row no-gliters">
            <div class="col">
                <div class="post-container">
                    <div class="post-content-wrapper">
                        <!-- <form action="#" class="job-post-form"> -->
                            <div class="basic-info-input ">
                                <div class="dropdown header-top-account login-modals md-12">
                                    <button title="Title" type="button" data-toggle="collapse"
                                        data-target="#Description">Description</button>
                                    <button type="button" style="width:200px" data-toggle="collapse"
                                        data-target="#Documents">
                                        Required Documents
                                    </button>
                                    <button type="button" style="width:200px" data-toggle="collapse"
                                        data-target="#AssistingDocuments">
                                        Assisting Documents
                                    </button>
                                    <button type="button" style="width:200px" data-toggle="collapse" data-target="#Fee">
                                        Fee
                                    </button>
                                </div>
                                <div id="Fee" class="collapse col-md-12">
                                    General Hospital Permit Fees:
                                    <ul>
                                        <li>Initial Application Fee</li>
                                        <li>Review Fee</li>
                                        <li>ID card Printing</li>
                                        <li>Courier Fee</li>
                                        <li>Final Fee</li>
                                        Note : All the fee are non refundable
                                    </ul>
                                </div>
                                <div id="Description" class="collapse col-md-12">
                                    This service enables the individuals to apply for a new General Hospital Permits
                                </div>
                                <div id="Documents" class="collapse   col-md-12">
                                    <ul>
                                        <li> Education certificates with transcript of records. Education
                                            Certificates may include any of
                                            the followings: Diploma, Bachelor’s, Post Graduates Degree etc.</li>
                                        <li>Recent experience letters.</li>
                                        <li> Valid License/​Registration from licensing body of recent employment.</li>
                                        <li> Valid Good Standing Certificate.</li>
                                        <li> Valid ID card Copy.</li>
                                        <li>Recent Photo.</li>
                                        <li> Experience Certificate</li>
                                        <li> Malpractice Insurance from recruiting facility (If Available).</li>
                                    </ul>
                                </div>
                                <div id="AssistingDocuments" class="collapse col-md-12">
                                    <ul>
                                        <li>Download User Guide</li>
                                        <li>Download License Requirements</li>
                                    </ul>
                                </div>
                                <hr>
                                <h4><i data-feather="plus-circle"></i>Application Form - New General Hospital Permits
                                </h4>
                                <!-- <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="form-group mt-0 terms">
                                            <input class="custom-radio" type="checkbox" id="radio-4"
                                                name="termsandcondition">
                                            <label for="radio-4">
                                                <span class="dot"></span> You accepts our <a href="#">Terms and
                                                    Conditions</a> and <a href="#">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <?php
        
        $opts ='class="job-post-form"';
        echo form_open('General_Hospital/addNewOrUpdate',$opts); ?>
                                <div id="details" class="row  job-post-form"">
                                    <label class="col-md-3 col-form-label">Company/Group Details</label>
                                    <div class="col-md-9 box">
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label> Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Company/Group Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Registered Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>State</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Country</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Zip/Pin Code</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Registration Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="information" class="row ">
                                    <label class="col-md-3 col-form-label">New General Hospital Details</label>
                                    <div class="col-md-9 box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Proposed Name 1</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Proposed Name 2</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Proposed Name 3</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Abbreviation if any</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="information" class="row ">
                                    <label class="col-md-3 col-form-label">New Hospital Address</label>
                                    <div class="col-md-9 box">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>State</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Country</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Zip/Pin Code</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Service Details</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                    name="example1">
                                                <label class="custom-control-label" for="customCheck1">Surgery</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck2">Obstetrical
                                                    Care</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck22"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck22">Burns </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck3">Clinical
                                                    Laboratory Services (required ) </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck4">Diagnostic
                                                    Services (required)
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck5">Emergency
                                                    Department (required)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck6"> Peritoneal
                                                    dialysis </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck7">Pediatric (if 15
                                                    or more beds) </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck8">Comprehensive
                                                    Medical Rehabilitation </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck9">ESRD – Acute
                                                    Services </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10"
                                                    name="example10" style="width:50px">
                                                <label class="custom-control-label" for="customCheck10">Mental Health
                                                    Services (in an identifiable part of the hospital)
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck11">ESRD – Acute
                                                    Services (in an identifiable part of the hospital) </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck12">Chemical
                                                    Dependency (in an identifiable part of the hospital)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck13">Bio Medical
                                                    Waste Disposal </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck14">Morgue Services
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck15">Ambulance
                                                    Services </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck16">Pharmacy
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck17"
                                                    name="example2" style="width:50px">
                                                <label class="custom-control-label" for="customCheck17">Blood Bank
                                                </label>
                                            </div>
                                            <div class="  col-md-12">
                                                <label class="label" for="customCheck18">Other Definitive Medical or
                                                    Surgical Treatment: </label>
                                                <input type="text" class="form-control" id="" name="example18">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Area of the Facility</label>
                                    <div class="col-md-9">
                                        <div class="row mt-0">
                                            <div class="col-md-12">
                                                <div class="table">
                                                    <table class="table responsive">
                                                        <thead>
                                                            <th>Select</th>
                                                            <th>Category</th>
                                                            <th>GFA sqft</th>
                                                            <th>Fee @sft</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" class="radio" name="example"
                                                                        id="cat1">
                                                                </td>
                                                                <td>Category1</td>
                                                                <td>500 - 5,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat2">
                                                                </td>
                                                                <td>Category2</td>
                                                                <td>5,001 - 12,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat3">
                                                                </td>
                                                                <td>Category3</td>
                                                                <td>12,001 - 15,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat4">
                                                                </td>
                                                                <td>Category4</td>
                                                                <td>15,001 - 45,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat5">
                                                                </td>
                                                                <td>Category5</td>
                                                                <td>45,001 - 150,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat6">
                                                                </td>
                                                                <td>Category6</td>
                                                                <td>150,001 - 300,000 </td>
                                                                <td>2 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="example" id="cat7">
                                                                </td>
                                                                <td>Category7</td>
                                                                <td>300,001 above </td>
                                                                <td>2 </td>
                                                            </tr>
                                                        <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Architectural Plan<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload interior Designs <i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12  ">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Support Documents</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Lease Agreement<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Commercial Licence<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Business Plan<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file">Registration of company<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file"> Certificate of Incorporation from the Parent
                                                    Company<i data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6  ">
                                                <div class="add-cv">
                                                    <input type="file"> Fire Safety approval<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Beds</label>
                                    <div class="col-md-9">
                                        <div class="row mt-0">
                                            <div class="col-md-12">
                                                <div class="table">
                                                    <table class="table responsive">
                                                        <thead>
                                                            <th>Select</th>
                                                            <th>No. of Beds</th>
                                                            <th>Fee</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" class="radio" name="beds"
                                                                        id="bed1">
                                                                </td>
                                                                <td>1- 50 </td>
                                                                <td>40,000 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="beds" id="bed2">
                                                                </td>
                                                                <td>51 - 100</td>
                                                                <td>80,000 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="beds" id="bed3">
                                                                </td>
                                                                <td>101 - 150</td>
                                                                <td>100,000 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="beds" id="bed4">
                                                                </td>
                                                                <td>151 and Above</td>
                                                                <td>120,000</td>
                                                            </tr>
                                                        <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Total Licensed Beds</label>
                                                </div>
                                            </div>
                                            Provide the total number of licensed beds in each unit or area of service at
                                            this hospital location:
                                            This count is not included in the licensed bed count above and will not
                                            affect fees. A minimum of one bed is required
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Emergency</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Medical/Surgical</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>ICU/CCU</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Postpartum</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Intermediate Care</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Adolescent</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Universal Care</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Pediatric</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Neonatal ICU</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Skilled Nursing</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Continuing Care </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Antepartum</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Labor/Postpartum</label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Burns</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Clinical Dependency</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="details" class="row ">
                                    <label class="col-md-3 col-form-label">Functional Brief</label>
                                    <div class="col-md-9 box">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="" required=""></textarea>
                                                    <label>Describe your Clinical Services</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 box">
                                                <div class="form-group">
                                                    <textarea class="form-control"
                                                       name="" required=""></textarea>
                                                       <label> Tell us about your Patient Treatment Programs</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="details" class="row ">
                                    <label class="col-md-3 col-form-label">Staff Plan</label>
                                    <div class="col-md-9 box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" required="">
                                                    <label>Number of Physicians</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" required="">
                                                    <label>Number of Nurses</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" required="">
                                                    <label  >Allied Health Professionals</label>
                                                         
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" required="">
                                                    <label  >Others</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Physicans list<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Nurses list<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-3  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Nurses list<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-3  ">
                                                <div class="add-cv">
                                                    <input type="file">Upload Others list<i
                                                        data-feather="upload-cloud"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="qualification" class="row">
                                    <label class="col-md-3 col-form-label">Medical Equipment</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <table class="table">
                                                <thead>
                                                    <th>Equipment</th>
                                                    <th>Qty</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME1" name="example1"> <label
                                                                    class="custom-control-label" for="ME1">
                                                                    Densitometers, Bone </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME2" name="example1"> <label
                                                                    class="custom-control-label" for="ME2"> Lasers,
                                                                    Carbon Dioxide, Surgical/Dermatologic </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME3" name="example1"> <label
                                                                    class="custom-control-label" for="ME3"> Linear
                                                                    Accelerators (linac); Radiotherapy Units </label>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME4" name="example1"> <label
                                                                    class="custom-control-label" for="ME4">
                                                                    Lithotripters, Extracorporeal </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME5" name="example1"> <label
                                                                    class="custom-control-label" for="ME5"> Radiographic
                                                                    Units, Dental Panoramic </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME6" name="example1"> <label
                                                                    class="custom-control-label" for="ME6"> Radiographic
                                                                    Units, Mammographic </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME7" name="example1"> <label
                                                                    class="custom-control-label" for="ME7"> Radiographic
                                                                    Unit Fixed, General Purpose </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME8" name="example1"> <label
                                                                    class="custom-control-label" for="ME8"> Radiographic
                                                                    Unit Mobile, General Purpose </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME9" name="example1"> <label
                                                                    class="custom-control-label" for="ME9"> Radiographic
                                                                    Fluoroscopic Systems, General Purpose </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME10" name="example1"> <label
                                                                    class="custom-control-label" for="ME10">
                                                                    Interventional Radiographic/Fluoroscopic Systems,
                                                                    Cardiology </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME11" name="example1"> <label
                                                                    class="custom-control-label" for="ME11">
                                                                    Interventional Radiographic/Fluoroscopic Systems,
                                                                    Neurology </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME12" name="example1"> <label
                                                                    class="custom-control-label" for="ME12">
                                                                    Interventional Radiographic/Fluoroscopic Systems,
                                                                    Oncology </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME13" name="example1"> <label
                                                                    class="custom-control-label" for="ME13"> Scanning
                                                                    Systems, Cone Beam Computed Tomography (CBCT)
                                                                </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME14" name="example1"> <label
                                                                    class="custom-control-label" for="ME14"> Scanning
                                                                    Systems, Computed Tomography (CT), Full Body
                                                                </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME15" name="example1"> <label
                                                                    class="custom-control-label" for="ME15"> Scanning
                                                                    Systems, Nuclear Medicine Imaging, (Gamma Camera)
                                                                    General Purpose </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME16" name="example1"> <label
                                                                    class="custom-control-label" for="ME16"> Scanning
                                                                    Systems, Cardiac Cameras </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME17" name="example1"> <label
                                                                    class="custom-control-label" for="ME17"> Scanning
                                                                    Systems, SPECT & SPECT/CT </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME18" name="example1"> <label
                                                                    class="custom-control-label" for="ME18"> Scanning
                                                                    Systems, Magnetic Resonance Imaging (MRI) </label>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME19" name="example1"> <label
                                                                    class="custom-control-label" for="ME19"> Scanning
                                                                    Systems, Positron Emission Tomography (PET) </label>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME20" name="example1"> <label
                                                                    class="custom-control-label" for="ME20">
                                                                    Hemodialyzer </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME21" name="example1"> <label
                                                                    class="custom-control-label" for="ME21"> Sterilizing
                                                                    Units, High load </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox col-md-12">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="ME22" name="example1"> <label
                                                                    class="custom-control-label" for="ME22">
                                                                    Washer/Decontaminators, High load </label></div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="form-group col-md-12"><input type="number"
                                                                    class="form-control col-md-6" placeholder="Qty">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="cv" class="row form-group">
                                    <label class="col-md-3 col-form-label">Management</label>
                                    <div class="col-md-9 box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label>Applicant First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required=""
                                                        >
                                                        <label for="">Applicant Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="applicantMobile" required=""
                                                       ><label for="applicantMobile">Applicant Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        name="" required=""><label >Applicant Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label >Medical Director First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        name="" required=""><label >Medical Director Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" required="">
                                                    <label > Medical Director Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        name="" required="">
                                                        <label >Medical Director Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                       name="" required="">
                                                       <label >Facility Manage First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <input type="text" class="form-control"
                                                       name="" required="">
                                                       <label >Facility Manager Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <input type="text" class="form-control"
                                                       name="" required="">
                                                       <label >Facility Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <input type="text" class="form-control"
                                                       name="" required="">
                                                       <label >Facility  Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="form-group mt-0 terms">
                                            <input class="custom-radio" type="checkbox" id="radio-4"
                                                name="termsandcondition">
                                            <label for="radio-4">
                                                <span class="dot"></span> You accepts our <a href="#">Terms and
                                                    Conditions</a> and <a href="#">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-1 offset-md-3">
                                <?php
                                      
                                      $opts='class="button", col-md-3 m-2';
                                      echo form_submit('Submit', 'Save Application',$opts); 
                                  
                                   form_close();
  ?>
                                    <div class="col-md-3 m-2">
                                        <button class="button">Print Application</button>
                                    </div>
                                    <div class="col-md-3 m-2">
                                        <button class="button">Pay & Submit</button>
                                    </div>
                                </div>
                            </div>
                         
                    </div>
                    <?php
//include("includes/leftmenu.php");
$this->load->view('includes/leftmenu.php');
//include('/includes/leftmenu.php');
?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action -->
<div class="call-to-action-bg padding-top-90 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="call-to-action-2">
                    <div class="call-to-action-content">
                        <h2>For Find Your Dream Job or Candidate</h2>
                        <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                            elit tellus,
                            luctus nec.</p>
                    </div>
                    <div class="call-to-action-button">
                        <a href="#" class="button">Add Resume</a>
                        <span>Or</span>
                        <a href="#" class="button">Post A Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->
<!--Education Model-->
<div class="account-entry">
    <div class="modal fade" id="educationModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i data-feather="user"></i>Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Degree/Diploma/Certificate">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="University/Institute">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Year of Passing">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Registration/Roll Number">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="add-cv">
                                        <input type="file"> File<i data-feather="upload-cloud"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button primary-bg btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Experience Model-->
    <div class="modal fade" id="experienceModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i data-feather="user"></i>Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Designation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="Start Date">
                                        <small id="emailHelp" class="form-text text-muted">Start Date</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="End Date">
                                        <small id="emailHelp" class="form-text text-muted">End Date</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Address">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="add-cv">
                                        <input type="file"> File<i data-feather="upload-cloud"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="button primary-bg btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 //include("includes/footer.php");
 //include('includes/footer.php');
 $this->load->view('includes/footer.php');
?>