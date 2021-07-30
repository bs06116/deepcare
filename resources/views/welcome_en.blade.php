<!DOCTYPE html>
<html>

<head>
    <title>Deep Care</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_en.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <!-- form link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <!-- top baner start here -->
    <section>
        <div class="container-fluid">
            <div class="row">
            <div class="col-8 text-start pe-lg-5">
                    <div class="logo">
                        <img src="{{ asset('image/deep_care_logo_header.png') }}">
                    </div>

                </div>
                <div class="col-4">
                    <div class="language w-75 pt-3 ps-lg-5">

                        <select class="form-select form-select-md bg-light" aria-label=".form-select-md example" onchange="location = this.value;">
                            <option value="en">English</option>

                            <option value="ar">العربی  </option>
                            </select>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top baner end here -->
    <!-- main section start here -->
    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pb-5" id="usman">
                    <div class="text-center pt-5" id="main-text1">
                        <h5 class="text-white fw-bolder fs-2 pb-2">
                        Deep Care Center
                        </h5>
                        <h5 class="text-white fw-bolder fs-2 ">
                        Dentistry - Cosmetology - Dermatology
                        </h5>
                                         </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main section end here -->
    <!-- daetails section start here -->
    <section class="detail">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="card card1">

                        <div class="stepwizard pt-4">
                            <div class="stepwizard-row setup-panel" >
                                <div class="col-xs-3 col3"></div>
                                <div class="stepwizard-step col-xs-2 text-start" >
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle btn-circle1"
                                        disabled="disabled"><i class="fa fa-file-text" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small>Data Entry </small></p>
                                </div>
                                <div class="stepwizard-step col-xs-2" >
                                <a href="#step-2" type="button" class="btn btn-default btn-circle btn-circle1"
                                        disabled="disabled"><i class="far fa-clipboard-list" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small> Instructions </small></p>
                                </div>


                                <div class="stepwizard-step col-xs-2" >
                                    <a href="#step-3" type="button" class="btn btn btn-default  btn-circle" disabled="disabled"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small> Endorsement </small></p>
                                </div>

                                <div class=" col-xs-3"></div>
                            </div>
                        </div>
                        <form id="main_frm"  role="form mt-5">

                            <input type="hidden" name="lang" value="<?php echo \Route::current()->uri()?>">


                                        <?php

                                        $result =  DB::table('users')->orderBy('id', 'desc')->take(1)->first();
                                        $file_number = $result->id+1;

                                        ?>
                            <div class="panel  setup-content p-romve" id="step-1">
                                <div class="container"  >
                                    <div class="row pe-4 pt-2 " id="form">
                                    <div class="col-4 text-start pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2"> Name </label>
                                            <input type="text" name="full_name" class="form-control text-start bg-light"
                                                maxlength="200" required="required">
                                        </div>

                                        <div class="col-4 text-start form-group">
                                            <label class="control-label"> Date </label>
                                            <input type="text" readonly value="<?php echo date('Y-m-d')?>" name="frm_date" class="form-control text-start bg-light"
                                                placeholder="تاريخ " maxlength="200" required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end pe-4 form-group">
                                            <label class="control-label pe-2"> لغة </label>
                                            <input type="text" name="language" class="form-control text-end bg-light"
                                                placeholder="لغة  " maxlength="200" required="required">
                                        </div> -->
                                        <div class="col-4 text-start form-group">
                                            <label class="control-label lable-font"> File No </label>
                                            <input type="text" readonly value="{{$file_number}}" name="file_number" class="form-control text-start bg-light"
                                                placeholder="رقم الملف  " required="required">
                                        </div>

                                    </div>

                                    <div class="row pe-4 pt-2" id="form">
                                        <div class="col-4 text-start form-group">
                                            <label class="control-label lable-font" > Gender </label>
                                            <select name="gender" class="form-select bg-light gender"
                                                aria-label="Default select example">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <
                                            </select>
                                        </div>
                                        <div class="col-4 text-start form-group">
                                            <label for="inputZip" class="control-label lable-font"> Age </label>
                                            <input type="text" name="age" class="form-control text-start bg-light"
                                                maxlength="200" required="required">
                                        </div>
                                        <div class="col-4 text-start pe-4 form-group">
                                            <label class="control-label lable-font">Social Status </label>
                                            <select class="form-select bg-light" name="social_status"
                                                aria-label="Default select example">
                                                <option selected>Married  </option>

                                                <option selected> Single </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row pe-4 pt-2" id="form">
                                    <div class="col-4 text-start form-group">
                                            <label for="inputZip" class="control-label lable-font">  Phone Number </label>
                                            <input type="text" name="other_phone" class="form-control text-start bg-light"
                                                placeholder="  " maxlength="200" required="required">
                                        </div>
                                        <div class="col-4 text-start form-group">
                                            <label for="inputZip" class="control-label lable-font"> Relative person </label>
                                            <input type="text" name="closest_name"
                                                class="form-control text-start bg-light" maxlength="200"
                                                required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> جوال </label>
                                            <input type="text" name="mobile" class="form-control bg-light"
                                                maxlength="200" required="required">
                                        </div> -->
                                        <div class="col-4 text-start form-group">
                                            <label for="inputZip" class="control-label lable-font"> Occupation </label>
                                            <input type="text" name="function" class="form-control text-start bg-light"
                                                maxlength="200" required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end pe-4 form-group">
                                            <label class="control-label"> الحالة الاجتماعية </label>
                                            <select class="form-select bg-light" name="social_status"
                                                aria-label="Default select example">
                                                <option selected> الحالة الاجتماعية </option>

                                            </select>
                                        </div> -->

                                    </div>

                                    <div class="row pe-4 pt-2" id="form">
                                    <div class="col-12 text-start pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2 lable-font"><span dir="ltr"></span>How did you know about the clinic  </label>
                                            <input type="text" name="about_clinic"
                                                class="form-control text-start bg-light" maxlength="200"
                                                required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> رقم هاتفه </label>
                                            <input type="text" name="other_phone" class="form-control text-end bg-light"
                                                placeholder="  رقم هاتفه" maxlength="200" required="required">
                                        </div>
                                        <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> إسم اقرب شخص </label>
                                            <input type="text" name="closest_name"
                                                class="form-control text-end bg-light" maxlength="200"
                                                required="required">
                                        </div> -->
                                        <!-- <div class="col-4 text-end pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2"> حرقم التواصل </label>
                                            <input type="text" class="form-control text-end bg-light" maxlength="200"
                                                required="required">
                                        </div> -->

                                    </div>

                                    <!-- <div class="row pe-4 pt-2" id="form">

                                        <div class="col-12 text-end pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2"><span dir="ltr">?</span>كيف
                                                عرفت عن العيادة </label>
                                            <input type="text" name="about_clinic"
                                                class="form-control text-end bg-light" maxlength="200"
                                                required="required">
                                        </div>
                                    </div> -->
                                </div>

                                <div class=" d-block">
                                    <div class="container nav-form" dir="rtl">
                                        <div class="row p-3 ">
                                            <div class="col-2 text-center ">
                                                <p class="fw-italic fs-3 pt-2"> No </p>
                                            </div>
                                            <div class="col-2 text-center">
                                                <p class="fw-italic fs-3 pt-2"> Yes </p>
                                            </div>
                                            <div class="col-8 text-center">
                                                <p class="fw-bolder fs-5 pt-2">
                                                Please answer yes or no </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container pt-4 bg-white form3" dir="rtl">
                                        <div class="row">


                                            <div class="col-12 question-div text-center form-and-chckbox " dir="ltr" >
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >1-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_1" >
                                                Have you ever had a problem during or after dental treatment?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_1" value="yes" name="question_1"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_1" value="no"  name="question_1"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >2-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_2" >
                                            Do you ever had or currently suffer from?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_2" value="yes" name="question_2"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_2" value="no"  name="question_2"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >3-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_3" >
                                            Heart disease
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_3" value="yes" name="question_3"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_3" value="no"  name="question_3"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >4-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_4" >
                                            High blood pressure
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_4" value="yes" name="question_4"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_4" value="no"  name="question_4"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >5-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_5" >
                                            Low blood pressure
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_5" value="yes" name="question_5"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_5" value="no"  name="question_5"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >6-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_6" >
                                            Rheumatic fever
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_6" value="yes" name="question_6"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_6" value="no"  name="question_6"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >7-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_7" >
                                            Anemia
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_7" value="yes" name="question_7"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_7" value="no"  name="question_7"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >8-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_8" >
                                            Hematology
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_8" value="yes" name="question_8"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_8" value="no"  name="question_8"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >9-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_9" >
                                            Yellow thyroid disease
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_9" value="yes" name="question_9"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_9" value="no"  name="question_9"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >10-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_10" >
                                            Hepatitis
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_10" value="yes" name="question_10"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="no"  name="question_10"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >11-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_11" >
                                            Diabetes
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="yes" name="question_11"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="no"  name="question_11"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >12-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_12" >
                                            Any member of the family has been diagnosed with diabetes
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_12" value="yes" name="question_12"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_12" value="no"  name="question_12"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >13-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_13" >
                                            Asthma tuberculosis
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_13" value="yes" name="question_13"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_13" value="no"  name="question_13"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >14-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_14" >
                                            Difficulty breathing
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_14" value="yes" name="question_14"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_14" value="no"  name="question_14"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >15-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_15" >
                                            Kidney disease
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_15" value="yes" name="question_15"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_15" value="no"  name="question_15"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >16-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_16" >
                                            Spasticity
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_16" value="yes" name="question_16"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_16" value="no"  name="question_16"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >17-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_17" >
                                            Epilepsy
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_17" value="yes" name="question_17"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_17" value="no"  name="question_17"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >18-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_18" >
                                            Fainting
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_18" value="yes" name="question_18"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_18" value="no"  name="question_18"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >19-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_19" >
                                            Do you have an allergy to insulin?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_19" value="yes" name="question_19"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_19" value="no"  name="question_19"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >20-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_20" >
                                            Are you allergic to medicines?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_20" value="yes" name="question_20"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_20" value="no"  name="question_20"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >21-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_21" >
                                            Did you get a tan?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_21" value="yes" name="question_21"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_21" value="no"  name="question_21"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >22-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_22" >
                                            Are you currently using medicine?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_22" value="yes" name="question_22"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_22" value="no"  name="question_22"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row " id="other_answer_22" style="display: none">
                                            <div class="col-2"></div>
                                            <div class="col-3 mt-2 ">
                                                  <input type="text" class="mr-4" name="other_answer_22">
                                                 </div>
                                                <div class="col-7"></div>
                                                

                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >23-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_23" >
                                            Have you ever done laser work?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_23" value="yes" name="question_23"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_23" value="no"  name="question_23"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 " >
                                            <span >24-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_24" >
                                            Do you have a skin allergy?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_24" value="yes" name="question_24"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_24" value="no"  name="question_24"  aria-label="..."></p>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                                <div class="col-2 " >
                                                <span >25-</span>
                                                </div>
                                                <div class="col-6 text-left" >
                                                <p class="question_25" >
                                                Do you have any health issue?
                                                    </p>
                                                </div>
                                                <div class="col-2"  >
                                                <p><input class="form-check-input  fs-4" type="checkbox"
                                                            id="checkboxNoLabelNo_25" value="yes" name="question_25"  aria-label="..."  ></p>
                                                    <p class="p"></p><br>
                                                </div>
                                                <div class="col-2" >
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                            id="checkboxNoLabelNo_25" value="no"  name="question_25"  aria-label="..."></p>
                                                </div>
                                                </div>
                                            <div class="row" style="display: none" id="other_answer_25">
                                            <div class="col-2"></div>
                                               
                                                <div class="col-3 mt-2 ">
                                                    <input type="text" class="mr-4" name="other_answer_25">
                                                 </div>
                                                 <div class="col-7"></div>
                                            <div class="col-2"></div>
                                            </div>
                                            <div class="row "  style="display: none" id="question_26">
                                            <div class="col-2 " >
                                            <span >26-</span>
                                            </div>
                                            <div class="col-6 text-left" >
                                            <p class="question_26" >
                                            Are you pregnant?
                                                </p>
                                            </div>
                                            <div class="col-2"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_26" value="yes" name="question_26"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_26" value="no"  name="question_26"  aria-label="..."></p>
                                            </div>
                                            </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-12 py-4">
                                                <div class="pe-5">
                                                    <button
                                                        class="btn btn-primary nextBtn pull-left fw-bolder fs-2 "
                                                        type="button"> Next One </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="panel  setup-content" id="step-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="fw-bolder pe-4" >
                                                <h3> Laser instructions before treatment: </h3>
                                                <p>
                                                Avoid exposure to the sun 4 to 6 weeks before treatment
                                                </p>
                                                <p>
                                                Avoid peeling - plucking - waxing
                                                </p>
                                                <p>
                                                Dermatology news
                                                </p>
                                                <p>
                                                Do not take any kind of medication, especially Roaccutane
                                                </p>
                                                <p>
                                                Shave the area a day or two before the laser, leaving a small area
                                                </p>
                                                <p>
                                                Avoid tanning the area before the session for 6 weeks, known as tanning
                                                </p>
                                                <p>
                                                It is strictly forbidden to use the steam bath, sauna and Moroccan baths two weeks before the laser session
                                                </p>
                                                <p>
                                                Do not use any kind of body creams, deodorants or deodorants before the laser session

                                                </p>
                                            </div>
                                            <div class="fw-bolder pt-5 pe-4" >
                                                <h3>Laser instructions after treatment: </h3>
                                                <p>
                                                Slight redness or burns may occur
                                                </p>
                                                <p>
                                                Apply cold compresses for a quarter of an hour to relieve pain and redness
                                                </p>
                                                <p>
                                                You can take a shower after two hours
                                                </p>
                                                <p>
                                                The necessity of using body moisturizers and treatments prescribed by the doctor
                                                </p>
                                                <p>
                                                Do not use perfumed creams or perfumes immediately after the session
                                                </p>
                                                <p>
                                                Avoid plucking - waxing - peeling
                                                </p>
                                                <p>
                                                It is strictly forbidden to use steam baths, saunas and Moroccan baths after the laser session
                                                 </p>

                                            </div>
                                            <div class="pe-5 iqrar py-5">
                                        <button class="btn btn-primary nextBtn pull-left fw-bolder fs-2 w-50"
                                            type="button"> Next One </button>
                                    </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="row" >

                        <div class="col-12 py-4">
                        <div class="pe-5">
                <button class="btn btn-primary nextBtn pull-right fw-bolder fs-2 w-25" type="button"> التالي  </button>
                </div>
                        </div>
                        </div> -->
                                         <div class="panel  setup-content" id="step-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12" >
                                            <div class="text-center pt-2">
                                                <h3> I hereby confirm my consent to conduct the examination in the Deep Care Center, noting the following </h3>
                                                <h4 class="pt-4">We in the deep care center oblige each patient to read and sign the “Declaration of Treatment Plans” before starting to receive treatment for cases within coverage, and thank you for your cooperation.

                                                </h4>
                                            </div>
                                            <div class="pt-3" >
                                                <ol class="fs-3 fw-bolder py-3 lh-lg">
                                                    <li>
                                                    Keeping appointments is very important, and not attending on the appointed day will affect the course of treatment
                                                    </li>
                                                    <li>
                                                    In the case of going to the doctor for a consultation or examination, the patient is required to pay the value of the clinical consultation
                                                    </li>
                                                    <li>
                                                    What is taken in the center x-rays or information and the like is the property of the center
                                                    </li>
                                                    <li>
                                                    I have to follow all the instructions and instructions of the attending physician and that not following them is negligence and I bear the consequent damages
                                                    </li>
                                                    <li>
                                                    Pay all financial dues on time
                                                    </li>
                                                    <li>
                                                    If you have any questions about the treatment, you can review the inquiries
                                                    </li>
                                                    <li>
                                                    I read that the treating doctor and the medical team have discussed and explained the purpose and nature of the treatment plan, as well as the side effects that may result during the treatment mentioned in the written approval.

                                                    </li>
                                                    <li>
                                                    I certify that the attending physician and the medical team have given me full opportunities to ask questions regarding the treatment error and the possible therapeutic alternatives in my case and accordingly I declare that the information I have received is sufficient to give my consent to proceed with the stages of the treatment plan mentioned in the corresponding
                                                    </li>
                                                    <li>
                                                    I authorize the attending physician and the medical team to carry out any necessary additional medical treatments that may occur during the treatment stages, and accordingly the cost of these treatments will be added to the treatment plans mentioned.

                                                    </li>
                                                    <li>
                                                    I acknowledge my full responsibility to agree to this treatment plan
                                                    </li>
                                                    <li>
                                                    If the subscriber decides to stop the two treatment plans, the attending physician must inform the administration within 10 working days
                                                    </li>
                                                </ol>
                                                <div class="pe-5">

                                                    <h4 class="lh-lg">
                                                    I read that I have read the instructions and all my questions have been answered and I agree to perform the laser service. In the event that I did not comply with the previous medical instructions, I bear the responsibility for any side effects that may occur.
                                                    </h4>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-4 pe-5 " >
                                        <label for="colFormLabel" class="col-sm-3 col-form-label text-left fs-3" > Mobile Number </label>
                                        <div class="col-sm-9 form-group">

                                            <input type="text" name="phone" class="form-control w-75 sm-w-100"
                                             pattern="\d*" minlength="10" id="phone_number" maxlength="10" placeholder=" Mobile Number" required="required">
                                        </div>
                                    </div>
                                    {{-- <div class="row my-4 pe-5" dir="rtl">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label text-right fs-3">
                                        Please enter the confirmation code sent to you </label>
                                        <div class="col-sm-9 form-group">
                                            <input type="text" class="form-control w-75"   pattern="\d*" minlength="10" maxlength="10"
                                                placeholder=" Please enter the confirmation code sent to you">
                                        </div>
                                    </div> --}}
                                    <div class="py-5 pe-4 mb-5">
                                                <button class="btn btn-success pull-left fw-bolder fs-2" id="btnSave"
                                                    type="submit">
                                                    <i class="fa fa-spinner fa-spin" style="display: none"></i>

                                                    Approval and follow up</button>

                                            </div>
                                            <p class="message pe-4 mb-5"></p>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details section end here -->
    <!-- footer section start here -->
    <section class="footer">
        <div class="container">
            <div class="row text-white py-3 text-center">
            <div class="col-3">
            <p>Follow Me:</p>
            <a href="https://www.snapchat.com/add/deep_caree"  > <i class="fab fa-snapchat-ghost f-icon"  style="color:yellow; "></i></a>
            <a href="https://www.instagram.com/deep_caree/" style="margin-left:6px; "><i class="fab fa-instagram f-icon" style="color:#E1306C"></i></a>
            <a href="https://mobile.twitter.com/deep_caree" style="margin-left:6px; "><i class="fab fa-twitter f-icon"></i></a>
            </div>
                
                <div class="col-9 ">
                <div class="row footer-d1">
                <div class="col-6 f1" >
                <div class="row">
                <div class="col-10">
                <p class="fw-bolder"> المملكة العربية السعودية-الرياض-حي الملقا-طريق أنس بن مالك
                        
                    </p>
                </div>
                <div class="col-2">
                <span class="fa fa-map-marker ms-2 pe-2" aria-hidden="true"></span>
                </div>
                </div>
                
                </div>
                <div class="col-6  f1">
                <div class="row">
                <div class="col-10">
                <p class="fw-bolder" ><a href="tel:0536505022" style="color:white !important"> 0536505022</a>
                        
                    </p>
                </div>
                <div class="col-2">
                <span class="fa fa-phone" aria-hidden="true"></span>
                </div>
                </div>
                    
                </div>
                </div>
                    
                </div>
            </div>
        </div>
    </section>
    @include('javascript')


    <!-- script link end here  -->
</body>

</html>
