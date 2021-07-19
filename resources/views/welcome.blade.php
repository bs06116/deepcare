<!DOCTYPE html>
<html>

<head>
    <title>Deep Care</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
                <div class="col-4">
                    <div class="language w-75 pt-3 ps-lg-5">

                        <select class="form-select form-select-md bg-light" aria-label=".form-select-md example" onchange="location = this.value;">
                            <option value="ar">العربی  </option>
                            <option value="en">English</option>
                            </select>
                    </div>
                </div>
                <div class="col-8 text-end pe-lg-5">
                    <div class="logo">
                        <img src="{{ asset('image/deep_care_logo_header.png') }}">
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
                            مركز العناية العميقة
                        </h5>
                        <h5 class="text-white fw-bolder fs-2 ">
                            طب الاسنان - التجميل - الجلدية
                        </h5>
                        {{-- <p class="pt-3 text-white fs-5">CR : 1010439963</p> --}}
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
                            <div class="stepwizard-row setup-panel">
                                <div class="col-xs-3 col3"></div>
                                <div class="stepwizard-step col-xs-2" id="div1">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle btn-circle1"
                                        disabled="disabled"><i class="fa fa-file-text" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small> تعبئة البيانات </small></p>
                                </div>
                                <div class="stepwizard-step col-xs-2" id="div2">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle btn-circle1"
                                        disabled="disabled"><i class="far fa-clipboard-list" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small> التعليمات </small></p>
                                </div>


                                <div class="stepwizard-step col-xs-2" id="div3">
                                    <a href="#step-3" type="button" class="btn btn btn-default  btn-circle" disabled="disabled"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <p class="fs-2 fw-bolder"><small> إقرار </small></p>
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
                                <div class="container"  dir="rtl">
                                    <div class="row pe-4 pt-2 " id="form">
                                    <div class="col-4 text-end pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2"> الإسم </label>
                                            <input type="text" name="full_name" class="form-control text-end bg-light"
                                                maxlength="200" required="required">
                                        </div>

                                        <div class="col-4 text-end form-group">
                                            <label class="control-label"> تاريخ </label>
                                            <input type="text" readonly value="<?php echo date('Y-m-d')?>" name="frm_date" class="form-control text-end bg-light"
                                                placeholder="تاريخ " maxlength="200" required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end pe-4 form-group">
                                            <label class="control-label pe-2"> لغة </label>
                                            <input type="text" name="language" class="form-control text-end bg-light"
                                                placeholder="لغة  " maxlength="200" required="required">
                                        </div> -->
                                        <div class="col-4 text-end form-group">
                                            <label class="control-label"> رقم الملف </label>
                                            <input type="text" readonly value="{{$file_number}}" name="file_number" class="form-control text-end bg-light"
                                                placeholder="رقم الملف  " required="required">
                                        </div>

                                    </div>

                                    <div class="row pe-4 pt-2" id="form">
                                        <div class="col-4 text-end form-group">
                                            <label class="control-label" > الجنس </label>
                                            <select name="gender" class="form-select bg-light gender"
                                                aria-label="Default select example">
                                                <option value="male">الذكر</option>
                                                <option value="female">أنثى</option>
                                                <
                                            </select>
                                        </div>
                                        <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> العمر </label>
                                            <input type="text" name="age" class="form-control text-end bg-light"
                                                maxlength="200" required="required">
                                        </div>
                                        <div class="col-4 text-end pe-4 form-group">
                                            <label class="control-label"> الحالة الاجتماعية </label>
                                            <select class="form-select bg-light" name="social_status"
                                                aria-label="Default select example">
                                                <option selected> متزوج/ة  </option>

                                                <option selected> أعزب </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row pe-4 pt-2" id="form">
                                    <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> رقم هاتفه </label>
                                            <input type="text" name="other_phone" class="form-control text-end bg-light"
                                                placeholder="  " maxlength="200" required="required">
                                        </div>
                                        <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> إسم اقرب شخص </label>
                                            <input type="text" name="closest_name"
                                                class="form-control text-end bg-light" maxlength="200"
                                                required="required">
                                        </div>
                                        <!-- <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> جوال </label>
                                            <input type="text" name="mobile" class="form-control bg-light"
                                                maxlength="200" required="required">
                                        </div> -->
                                        <div class="col-4 text-end form-group">
                                            <label for="inputZip" class="control-label"> الوظيفة </label>
                                            <input type="text" name="function" class="form-control text-end bg-light"
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
                                    <div class="col-12 text-end pe-4 form-group">
                                            <label for="inputZip" class="control-label pe-2"><span dir="ltr"></span>كيف
                                                عرفت عن العيادة </label>
                                            <input type="text" name="about_clinic"
                                                class="form-control text-end bg-light" maxlength="200"
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
                                    <div class="container nav-form">
                                        <div class="row p-3 ">
                                            <div class="col-2 text-center ">
                                                <p class="fw-italic fs-3 pt-2"> لا </p>
                                            </div>
                                            <div class="col-2 text-center">
                                                <p class="fw-italic fs-3 pt-2"> نعم </p>
                                            </div>
                                            <div class="col-8 text-center">
                                                <p class="fw-bolder fs-3 pt-2">
                                                    يرجى الإجابة بنعم أو لا
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container pt-4 bg-white form3">
                                        <div class="row">
                                            <!-- <div class="col-2 text-center  questions">
                                                <?php for ($k = 1; $k <= 25; $k++) { if ($k==2) { ?> <p class="p">
                                                    </p><br>
                                                    <?php } else { ?>
                                                    <p><input <?php if($k == 25) {?> style="display:none" <?php }?> class="form-check-input  fs-4 " type="checkbox"
                                                            id="checkboxNoLabelNo_<?php echo $k; ?>"
                                                            value="no"
                                                            name="question_<?php echo $k; ?>"
                                                            aria-label="...">
                                                    </p>
                                                    <?php }
                                                    } ?>

                                                    {{-- <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-1" value="no"  name="question_1"  aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-2" value="no" name="question_2" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-3"value="no" name="question_3" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-4" value="no" name="question_4" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-5" value="no" name="question_5" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-6" value="no" name="question_6" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-7" value="no" name="question_7" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-8" value="no" name="question_8" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-9" value="no" name="question_9" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-10" value="no" name="question_10" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-11" value="no" name="question_11" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-12" value="no" name="question_12" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-13" value="no" name="question_13" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-14" value="no" name="question_14" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-15" value="no" name="question_15" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-16" value="no" name="question_16" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-17" value="no" name="question_17" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-18" value="no" name="question_18" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-19" value="no" name="question_19" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-20" value="no" name="question_20" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-21" value="no" name="question_21" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-22" value="no" name="question_22" aria-label="..." ></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-23" value="no" name="question_23" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-24" value="no" name="question_24" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-25" value="no" name="question_25" aria-label="..."></p> --}}
                                            </div> -->
                                            <!-- <div class="col-2 text-center questions">
                                                <?php for ($m = 1; $m <= 25; $m++) { if ($m==2) { ?> <p class="p">
                                                    </p><br>
                                                    <?php } else { ?>
                                                    <p><input <?php if($m == 25) {?> style="display:none" <?php }?> class="form-check-input  fs-4 " type="checkbox"
                                                            id="checkboxNoLabelYes_<?php echo $m; ?>"
                                                            value="yes"
                                                            name="question_<?php echo $m; ?>"
                                                            aria-label="...">
                                                    </p>
                                                    <?php }
                                                    } ?>
                                                    {{-- <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabel" value="yes" name="question_1"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-1" value="yes" name="question_1" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-2"  value="yes" name="question_2" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-3"  value="yes" name="question_3" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-4"  value="yes" name="question_4" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-5" value="yes" name="question_5" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-6"  value="yes" name="question_6" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-7"  value="yes" name="question_7" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-8"  value="yes" name="question_8" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-9"  value="yes" name="question_9" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-10"  value="yes" name="question_10" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-11"  value="yes" name="question_11" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-12"  value="yes" name="question_12" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-13"  value="yes" name="question_13" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-14"  value="yes" name="question_14" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-15"  value="yes" name="question_15" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-16"  value="yes" name="question_16" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-17"  value="yes" name="question_17" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-18"  value="yes" name="question_18" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-19"  value="yes" name="question_29" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-20"  value="yes" name="question_20" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-21"  value="yes" name="question_21" aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-22" value="yes" name="question_22" aria-label="..." ></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-23"  value="yes" name="question_23"aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-24"  value="yes" name="question_24"aria-label="..."></p>
                                                <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabel-25"  value="yes" name="question_25"aria-label="..."></p>  --}}
                                            </div> -->


                                            <div class="col-12   " >
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_1" value="yes" name="question_1"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_1" value="no"  name="question_1"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_1" >
                                            ⸮ هل سبق أن حدثت معك مشكلة أثناء أو بعد علاج الأسنان
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-1</span>
                                            </div>

                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_2" value="yes" name="question_2"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_2" value="no"  name="question_2"  aria-label="..."></p>
                                            </div>


                                            <div class="col-6 text-right" >
                                            <p class="question_2" >
                                            ⸮ هل سبق أن أصبت أو تعاني حاليا من
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-2</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_3" value="yes" name="question_3"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_3" value="no"  name="question_3"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_3" >
                                            أمراض القلب
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-3</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_4" value="yes" name="question_4"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_4" value="no"  name="question_4"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_4" >
                                            إرتفاع ضغط الدم
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-4</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_5" value="yes" name="question_5"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_5" value="no"  name="question_5"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_5" >
                                            إنخفاض ضغط الدم
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-5</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_6" value="yes" name="question_6"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_6" value="no"  name="question_6"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_6" >
                                            الحمى الروماتيزمية
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-6</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_7" value="yes" name="question_7"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_7" value="no"  name="question_7"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_7" >
                                            فقر الدم
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-7</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_8" value="yes" name="question_8"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_8" value="no"  name="question_8"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_8" >
                                            أمراض الدم
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-8</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_9" value="yes" name="question_9"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_9" value="no"  name="question_9"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_9" >
                                            أمراض الغدة الدرقية الصفراء
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-9</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_10" value="yes" name="question_10"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="no"  name="question_10"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_10" >
                                            الكبد الوبائي
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-10</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="yes" name="question_11"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_11" value="no"  name="question_11"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_11" >
                                            مرض السكر
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-11</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_12" value="yes" name="question_12"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_12" value="no"  name="question_12"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_12" >
                                            أي من أفرد العائلة تعرض لمرض السكر
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-12</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_13" value="yes" name="question_13"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_13" value="no"  name="question_13"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_13" >
                                            الربو السل
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-13</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_14" value="yes" name="question_14"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_14" value="no"  name="question_14"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_14" >
                                            صعوبة في التنفس
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-14</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_15" value="yes" name="question_15"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_15" value="no"  name="question_15"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_15" >
                                            أمراض الكلى
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-15</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_16" value="yes" name="question_16"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_16" value="no"  name="question_16"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_16" >
                                            التشنج
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-16</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_17" value="yes" name="question_17"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_17" value="no"  name="question_17"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_17" >
                                            الصرع
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-17</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_18" value="yes" name="question_18"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_18" value="no"  name="question_18"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_18" >
                                            الإغماء
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-18</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_19" value="yes" name="question_19"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_19" value="no"  name="question_19"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_19" >
                                            هل لديك حساسية من البنسولين ؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-19</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_20" value="yes" name="question_20"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_20" value="no"  name="question_20"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_20" >
                                            هل لديك حساسية من الأدوية ؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-20</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_21" value="yes" name="question_21"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_21" value="no"  name="question_21"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_21" >
                                            هل إكتسبت تان ؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-21</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_22" value="yes" name="question_22"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_22" value="no"  name="question_22"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_22" >
                                            هل تتعاطى أودية حاليا ؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-22</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_23" value="yes" name="question_23"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_23" value="no"  name="question_23"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_23" >
                                            هل سبق لك عمل الليزر؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-23</span>
                                            </div>
                                            </div>
                                            <div class="row  " >
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_24" value="yes" name="question_24"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_24" value="no"  name="question_24"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_24" >
                                            هل لديك تحسس جلدي ؟

                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-24</span>
                                            </div>
                                            </div>
                                            <div class="row" style="display: none"  id="question_25">
                                            <div class="col-2 text-center"  >
                                            <p><input class="form-check-input  fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_25" value="yes" name="question_25"  aria-label="..."  ></p>
                                                <p class="p"></p><br>
                                            </div>
                                            <div class="col-2 text-center" >
                                            <p><input class="form-check-input fs-4" type="checkbox"
                                                        id="checkboxNoLabelNo_25" value="no"  name="question_25"  aria-label="..."></p>
                                            </div>

                                            <div class="col-6 text-right" >
                                            <p class="question_25" >
                                            هل أنتي حامل ؟
                                                </p>
                                            </div>
                                            <div class="col-2 " >
                                            <span >-25</span>
                                            </div>
                                            </div>

                                                <!-- <p class="question_1" >
                                                    هل سبق أن حدثت معك مشكلة أثناء أو بعد علاج الأسنان.
                                                    <span dir="rtl" >1-</span>
                                                </p>
                                                <p class="question_2">
                                                    :هل سبق أن أصبت أو تعاني حاليا من
                                                    <span dir="rtl">2-</span>
                                                </p>
                                                <p class="question_3">
                                                    أمراض القلب
                                                    <span dir="rtl">3-</span>
                                                </p>
                                                <p class="question_4">
                                                    إرتفاع ضغط الدم
                                                    <span dir="rtl">4-</span>
                                                </p>
                                                <p class="question_5">
                                                    إنخفاض ضغط الدم
                                                    <span dir="rtl">5-</span>
                                                </p>
                                                <p class="question_6">
                                                    الحمى الروماتيزمية
                                                    <span dir="rtl">6-</span>
                                                </p>
                                                <p class="question_7">
                                                    فقر الدم
                                                    <span dir="rtl">7-</span>
                                                </p>
                                                <p class="question_8">
                                                    أمراض الدم
                                                    <span dir="rtl">8-</span>
                                                </p>
                                                <p class="question_9">
                                                    أمراض الغدة الدرقية الصفراء
                                                    <span dir="rtl">9-</span>
                                                </p>
                                                <p class="question_10">
                                                    الكبد الوبائي
                                                    <span dir="rtl">10-</span>
                                                </p>
                                                <p class="question_11">
                                                    مرض السكر
                                                    <span dir="rtl">11-</span>
                                                </p>
                                                <p class="question_12">
                                                    أي من أفرد العائلة تعرض لمرض السكر
                                                    <span dir="rtl">12-</span>
                                                </p>
                                                <p class="question_13">
                                                    الربو السل
                                                    <span dir="rtl">13-</span>
                                                </p>
                                                <p class="question_14">
                                                    صعوبة في التنفس
                                                    <span dir="rtl">14-</span>
                                                </p>
                                                <p class="question_15">
                                                    أمراض الكلى
                                                    <span dir="rtl">15-</span>
                                                </p>
                                                <p class="question_16">
                                                    التشنج
                                                    <span dir="rtl">16-</span>
                                                </p>
                                                <p class="question_17">
                                                    الصرع
                                                    <span dir="rtl">17-</span>
                                                </p>
                                                <p class="question_18">
                                                    الإغماء
                                                    <span dir="rtl">18-</span>
                                                </p>
                                                <p class="question_19">
                                                    هل لديك حساسية من البنسولين ؟
                                                    <span dir="rtl">19-</span>
                                                </p>
                                                <p class="question_20">
                                                    هل لديك حساسية من الأدوية ؟
                                                    <span dir="rtl">20-</span>
                                                </p>
                                                <p class="question_21">
                                                    هل إكتسبت تان ؟
                                                    <span dir="rtl">21-</span>
                                                </p>
                                                <p class="question_22">

                                                    هل تتعاطى أودية حاليا ؟
                                                    <span dir="rtl">22-</span>
                                                </p>

                                                <p class="question_23">
                                                    هل سبق لك عمل الليزر؟
                                                    <span dir="rtl">23-</span>
                                                </p>
                                                <p class="question_24">
                                                    هل لديك تحسس جلدي
                                                    <span dir="rtl">24-</span>
                                                </p>

                                                <p class="question_25" id="question_25" style="display: none">
                                                    هل أنتي حامل ؟
                                                    <span dir="rtl">25-</span>
                                                </p>
                                            </div> -->
<<<<<<< HEAD

=======
>>>>>>> 00ebbff99a57d04a80e0c0e5e48c70050f566bc2

>>>>>>> ca689484f35761426c7b3071f38d1f5bfd020f5e
                                        </div>

                                        <div class="row">
                                            <div class="col-12 py-4">
                                                <div class="pe-5">
                                                    <button
                                                        class="btn btn-primary nextBtn pull-right fw-bolder fs-2 w-25"
                                                        type="button"> التالي </button>
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
                                            <div class="fw-bolder pe-4" dir="rtl">
                                                <h3> تعليمات الليزر قبل العلاج: </h3>
                                                <p>
                                                    تجنب التعرض لأشعة الشمس من 4 إلى 6 أسابيع قبل العلاج
                                                </p>
                                                <p>
                                                    تجنب التقشير- النتف - الشمع
                                                </p>
                                                <p>
                                                    الإخبار بالأمراض الجلدية
                                                </p>
                                                <p>
                                                    عدم تناول أي نوع من أنواع الأدوية وخصوصا الروكتان
                                                </p>
                                                <p>
                                                    حلق المنطقة قبل يوم أو يومين من الليزر وترك منطقة صغيرة
                                                </p>
                                                <p>
                                                    تجنب تسمير المنطقة قبل الجلسة لمدة 6أسابيع والمعروف بالتاننج
                                                </p>
                                                <p>
                                                    ممنوع منعا باتا استخدام حمام البخار والساونا والحمامات المغربية قبل
                                                    جلسة الليزر بأسبوعان
                                                </p>
                                                <p>
                                                    عدم إستخدام أي نوع كريمات أو معطرات الجسم أو مزيل العرق قبل جلسة
                                                    الليزر

                                                </p>
                                            </div>
                                            <div class="fw-bolder pt-5 pe-4" dir="rtl">
                                                <h3> تعليمات الليزر بعد العلاج: </h3>
                                                <p>
                                                    ممكن حدوث إحمرار أو حروق طفيفة
                                                </p>
                                                <p>
                                                    وضع كمادات باردة لمدة ربع ساعة للتخفيف من الألم والاحمرار
                                                </p>
                                                <p>
                                                    يمكن الإستحمام بعد ساعتين
                                                </p>
                                                <p>
                                                    ضرورة إستخدام مرطبات للجسم والعلاجات الموصوفة من قبل الطبيب
                                                </p>
                                                <p>
                                                    عدم إستخدام كريمات معطرة أو عطور مباشر بعد الجلسة
                                                </p>
                                                <p>
                                                    تجنب النتف – الشمع – التقشيير
                                                </p>
                                                <p>
                                                    ممنوع منعا باتا استخدام حمامات البخار والساونا والحمامات المغربية
                                                    بعد جلسة الليزر </p>

                                            </div>
                                            <div class="pe-5 iqrar py-5">
                                        <button class="btn btn-primary nextBtn pull-right fw-bolder fs-2 w-25"
                                            type="button"> التالي </button>
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
                                        <div class="col-12" dir="rtl">
                                            <div class="text-center pt-2">
                                                <h3> أنا المقر أدناه بموافقتي على إجراء الفحص في مركز العناية العميقة
                                                    علما بما يلي </h3>
                                                <h4 class="pt-4">
                                                    نحن فی مرکز العنایۃ العمیقۃ نلزم کل مریض علی قراءة وامضاء " اقرار

                                                    خطۃ المعالجة" قبل بدء تلقی العلاج للحالات داخل التغطیة،

                                                    وشکرا التعاونکم۔
                                                </h4>
                                            </div>
                                            <div class="pt-3" dir="rtl">
                                                <ol class="fs-3 fw-bolder py-3 lh-lg">
                                                    <li>
                                                        إن المحافظة على المواعيد مهم جدا، وعدم حضوري في اليوم المحدد
                                                        سيؤثر على سير العلاج
                                                    </li>
                                                    <li>
                                                        في حالة الدخول على الطبيب للإستشارة أو الفحص يلزم المريض بقيمة
                                                        الإستشارة الإكلينيكية
                                                    </li>
                                                    <li>
                                                        ما يؤخذ في المركز  أشعة أو معلومات وماشابه ذلك تكون ملكا للمركز
                                                    </li>
                                                    <li>
                                                        إن علي إتباع جميع الإرشادات وتعليمات الطبيب المعالج وأن عدم
                                                        إتبعاعها يعد
                                                        إهمالا وأتحمل ما يترتب عليه من أضرار
                                                    </li>
                                                    <li>
                                                        دفع جميع المستحقات المالية في وقتها
                                                    </li>
                                                    <li>
                                                        في حال وجود أي إستفسار بخصوص العلاج يمكن مراجعة الإستعلامات
                                                    </li>
                                                    <li>
                                                        اقرا انا ان الطبیب المعالج و الفریق الطبي قد قاما بمناقشۃ و شرح
                                                        هدف و طبیعۃ الخطۃ المعالجۃ بالاضافۃ الی الاعراض الجانبیۃ التی قد
                                                        تنتج اثناء المعالجۃ المذکورۃ فی الموافقۃ الخطيۃ۔
                                                    </li>
                                                    <li>
                                                        اقر انا ان الطبیب المعالج و الفریق الطبی قد قاما با عطائی الفرصۃ
                                                        الكاملۃ لطرح الاسنلۃ بخصوص خطۃ المعالجۃ و البدائل العالجیۃ
                                                        المحتملۃ الخاصۃ بحالتی وبناء علیہ فاننی اقر ان المعلومات التی
                                                        تلقیتھا کافیۃ لابداء موافقتی علی البدء بمراحل خطۃ المعالجۃ
                                                        المذکورۃ فی الموافقۃ
                                                    </li>
                                                    <li>
                                                        افوض الطبیب المعالج و الفریق الطبی علی اجراء اي علاجات طبية
                                                        اضافیة ضروریة قد تطرأ علی اثناء مراحل المعالجة وبناء علیه سوف
                                                        تضاف تکفلة تلك المعالجات الی خطۃ المعالجة المذکورۃ
                                                    </li>
                                                    <li>
                                                        اقر بمسولیتی الکاملة علی الموافقة علی خطة المعالجة المذکورة
                                                    </li>
                                                    <li>
                                                        فی حال قرر المشترك ایقاف خطۃ العلاج، فانه یتوجب علی الطبیب
                                                        المعالج ابلاغ الادارۃ خلال 10 ایام عمل
                                                    </li>
                                                </ol>
                                                <div class="pe-5">

                                                    <h4 class="lh-lg">
                                                        أقرأ بأني قرأت التعليمات وتم الأجابة على جميع تساؤلاتي وأوافق
                                                        على إجراء خدمة الليزر وفي حال عدم إلتزامي التعليمات الطبية
                                                        السابقة أتحمل مسؤولية أي اثار جانبية قد تحدث
                                                    </h4>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-4 pe-5 " dir="rtl">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label text-right fs-3" > رقم
                                            الجوال </label>
                                        <div class="col-sm-9 form-group">

                                            <input type="text" name="phone" class="form-control w-75 sm-w-100"
                                             pattern="\d*" minlength="10" id="phone_number" maxlength="10" placeholder=" رقم الجوال" required="required">
                                        </div>
                                    </div>
                                    {{-- <div class="row my-4 pe-5" dir="rtl">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label text-right fs-3"> يرجى
                                        يرجى ادخال رمز التاكيد المرسل اليك </label>
                                        <div class="col-sm-9 form-group">
                                            <input type="text" class="form-control w-75"   pattern="\d*" minlength="10" maxlength="10"
                                                placeholder=" يرجى ادخال رمز التاكيد المرسل اليك">
                                        </div>
                                    </div> --}}
                                    <div class="py-5 pe-4 mb-5">
                                                <button class="btn btn-success pull-right fw-bolder fs-2" id="btnSave"
                                                    type="submit">
                                                    <i class="fa fa-spinner fa-spin" style="display: none"></i>

                                                    الموافقة والمتابعة</button>

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
                <div class="col-6">
                    <p class="fw-bolder">920004309
                        <span class="fa fa-phone" aria-hidden="true"></span>
                    </p>
                </div>
                <div class="col-6 ">
                    <p class="fw-bolder"> المملكة العربية السعودية-الرياض-حي الملقا-طريق أنس بن مالك
                        <span class="fa fa-map-marker ms-2 pe-2" aria-hidden="true"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('javascript')


    <!-- script link end here  -->
</body>

</html>
