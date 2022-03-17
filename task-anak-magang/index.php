<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>PMJSmart</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/logo/pmjsmart-favicon.png" />
    <link href="assets/css/pages/wizard/wizard-3.css?v=7.1.0" rel="stylesheet" type="text/css" />
    <link href="assets/css/image-uploader.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

    <link href="assets/css/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />


    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.1.2" rel="stylesheet" type="text/css" />

    <!-- custom style CSS -->
    <link href="assets/css/style-pegawai.css" rel="stylesheet">

    <!-- FilePond -->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- BudleJs -->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.1.0"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.0">
    </script>
    <script src="assets/js/scripts.bundle.js?v=7.1.0"></script>

    <!-- Datatables -->
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


    <!-- ChartJS-->
    <script src="assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Flot -->
    <script src="assets/js/plugins/flot/jquery.flot.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.time.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- Image uploader -->
    <script src="assets/js/image-uploader.min.js"></script>

    <script src="assets/js/jquery.imageloader.js"></script>


    <script src="assets/js/plugins/clockpicker/bootstrap-clockpicker.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="assets/js/pages/crud/forms/editors/summernote.js?v=7.1.5"></script>


    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPQua--pCZ9MySlLnTxumT9rYXZdYkCH8&libraries=places">
    </script>
    <script src="assets/js/plugins/geocoding/jquery.geocomplete.min.js"></script>
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
    </script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <style>
       
        .card-header {
            padding: 5px;
            color: black;
            
        }
        
        .jumbotron .display-4{
            color: "black";
            margin-top: -50px;
        }

        .card-img-top{
            width: 100px;
            height: 50px auto; 

        }

        .card-title{
            margin: 3px;
            color: grey;
        }

        .card-text{
            font-size: 7.5px;
            
        }

        .breadcrumb-item>a.text-muted {
            color: black !important;
        }

        .card-header>.btn {
            text-shadow: none;
        }

        .fc-unthemed th.fc-day-header>a,
        .fc-unthemed th.fc-day-header>span,
        .fc-button,
        .fc-day-number {
            font-weight: 500;
            font-size: 15px !important;
            color: black !important;
        }

        .fc-button-active {
            color: white !important;
        }

        .list-group-item:first-child {
            border-radius: 0px;
        }

        div.tooltip-inner {
            max-width: none;
            white-space: nowrap;
        }

        .alert {
            border-radius: 0px !important;
        }

        .nav .nav-link.active {
            background-color: white !important;
        }

        .tab-content>.active {
            background-color: white !important;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        <blade media|%20screen%20and%20(max-width%3A%20992px)%20%7B%0D>.topbar-item.mr-4.text-center.mt-7 {
            margin-top: 9px !important;
        }
        }

    .aa {
      background-color: aqua;
      height: 125px;
    }
    .aab{
      position: relative;
      top: -175px;
    }
    .bb {
      background-color: aquamarine;
      height: 175px;
    }
    .of {
      position: relative;
      top: -100px;
    }
    
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
        <!--begin::Logo-->
        <a href="#">
            <img alt="Logo" src="assets/logo/logo-green.png" class="logo-default max-h-40px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_actions_toggle_2">
                <span class="svg-icon  svg-icon-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between" style="background-size: 100%; background-position: 30px 0px;">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Aside Toggle-->
                            <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                                <span class="svg-icon svg-icon-xxl">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </button>
                            <!--end::Aside Toggle-->
                            <!--begin::Logo-->
                            <!--end::Logo-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar">

                            <div class="topbar-item mr-4 text-center mt-7" style="display: block;">
                                <p>
                                    Test
                                </p>
                                <p class="text-muted" style="margin-top: -14px;">
                                    <small>
                                        test
                                    </small>
                                </p>
                            </div>


                            <!--begin::User-->
                            <div class="topbar-item mr-4">
                                <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_user_toggle">
                                    <div class="symbol-group symbol-hover">
                                        <div class="symbol symbol-30 symbol-circle">
                                            <img alt="Pic" src="assets/default.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="background-image: url(assets/media/bg/bg-3.jpg); background-size: 150%; background-attachment: fixed;">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                       
                            <!-- Ngoding nya disini -->
                            
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->


                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021©</span>
                            <a href="#" target="_blank" class="text-dark-75 text-hover-primary">PMJSmart</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Global Config(global config for global JS scripts)-->



 
    <div class="row bb">
      <div class="container">
        <div class="col-lg-6">
          <center>
            <img src="https://fakeimg.pl/500x125/?text=World&font=lobster"><br>
            <a href="konten.html" class="btn btn-primary mt-2">Click Here!</a>
          </center>

        </div>
      </div>
    </div>

  <div class="container">  
    <div class="row aa">
      <div class="col-lg-6 mt-2">
        <img src="https://fakeimg.pl/550x100/?text=World&font=lobster">
      </div>
      <div class="col-lg-6 aab">
        <img src="https://fakeimg.pl/450x300/?text=World&font=lobster">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
        <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
      </div>
      <div class="col-sm-2">
      </div>
    </div>

    <div class="row mt-3 mb-3" style="background-color: aqua; height: 100px;">
      <div class="col-sm-5"></div>
      <div class="col-sm-7">Lorem Ipsum Dolor Sit Amet.</div>
    </div>

    <div class="row">
      <div class="col-sm-6 of">
        <img src="https://fakeimg.pl/450x450/?text=World&font=lobster">
      </div>
      <div class="col-sm-6">
        <div class="container">

          <div class="row">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-4">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3 mb-3" style="background-color: aqua; height: 100px;">
      <div class="col-sm-5"><p style="float: right;"> Lorem Ipsum Dolor Sit Amet.</p></div>
      <div class="col-sm-7"></div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="container">

          <div class="row">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-4">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 of">
        <img src="https://fakeimg.pl/450x450/?text=World&font=lobster">
      </div>
    </div>

    <div class="row mt-3 mb-3" style="background-color: aqua; height: 100px;">
      <div class="col-sm-5"></div>
      <div class="col-sm-7"> Lorem Ipsum Dolor Sit Amet.</div>
    </div>

    <div class="row">
      <div class="col-sm-6 of">
        <img src="https://fakeimg.pl/450x450/?text=World&font=lobster">
      </div>
      <div class="col-sm-6">
        <div class="container">

          <div class="row">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
            <div class="col-sm-4">
              <img src="https://fakeimg.pl/150x150/?text=World&font=lobster">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    

    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.0"></script>

    <script src="assets/js/scripts.bundle.js?v=7.1.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <script src="assets/tableHeadFixer.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />

    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <script src="assets/js/pages/custom/todo/todo.js?v=7.1.5"></script>

    <!-- Image uploader -->
    <script src="assets/js/image-uploader.min.js"></script>
    <script>
        $('.menu-item-active').attr('id', 'menu-scroll');
        $('#kt_aside_desktop_toggle').click(function() {
            var scrollyDiv = document.getElementById('menu-scroll');
            scrollyDiv.scrollIntoView({
                behavior: 'auto',
                block: 'center',
                inline: 'center'
            });
        });
    </script>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</body>
<!--end::Body-->

</html>