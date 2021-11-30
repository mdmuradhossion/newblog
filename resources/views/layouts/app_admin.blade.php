<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css') }}"/>

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/chart.js/Chart.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css')}}">
    <!-- END CSS for this page -->
    <link href="{{ asset('assets/css/richtext.min.css')}}" type="text/css" rel="stylesheet"/>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/drag/dropzone.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/drag/bootstrap-tagsinput.css')}}">

</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="{{route('admin.home')}}" class="logo">
                <img alt="Logo" src="{{ asset('assets/images/logo.png') }}"/>
                <span> Admin</span>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false"
                       aria-expanded="false">
                        <i class="far fa-envelope"></i>
                        <span class="notif-bullet"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5>
                                <small>
                                    <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>John Doe</b>
                                <span>New message received</span>
                                <small class="text-muted">3 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Michael Smith</b>
                                <span>New message received</span>
                                <small class="text-muted">18 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>John Lenons</b>
                                <span>New message received</span>
                                <small class="text-muted">Yesterday, 18:27</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All Messages
                        </a>

                    </div>

                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false"
                       aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <span class="notif-bullet"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5>
                                <small>
                                    <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="{{ asset('assets/images/avatars/avatar2.png') }}" alt="img"
                                     class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>John Doe</b>
                                <span>User registration</span>
                                <small class="text-muted">3 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michael Cox</b>
                                <span>Task 2 completed</span>
                                <small class="text-muted">12 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michelle Dolores</b>
                                <span>New job completed</span>
                                <small class="text-muted">35 minutes ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All Allerts
                        </a>

                    </div>
                </li>


                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false"
                       aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5>
                                <small>Settings</small>
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <i class="fas fa-cog"></i>
                                <b>Settings 1</b>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <i class="fas fa-cog"></i>
                                <b>Settings 2</b>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <i class="fas fa-cog"></i>
                                <b>Settings 3</b>
                            </p>
                        </a>

                    </div>

                </li>


                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false"
                       aria-expanded="false">
                        <img src="{{ asset('assets/images/avatars/admin.png') }}" alt="Profile image"
                             class="avatar-rounded">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow">
                                <small>{{ Auth::user()->name }}</small>
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="profile.html" class="dropdown-item notify-item">
                            <i class="fas fa-user"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="dropdown-item notify-item">
                            <i class="fas fa-power-off"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fas fa-bars"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- End Navigation -->
    @include('layouts/admin_sidebar')


    <div class="content-page">

        <div class="flash-message"></div>
        @include('layouts/flash-message')
        @yield('content')

    </div>
    <!-- END content-page -->

    <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Company</a>
            </span>
        <span class="float-right">
                Powered by <a target="_blank" href="#" title="Download free Bootstrap templates"><b>gfhg</b></a>
            </span>
    </footer>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Gallery <b id="messUplode"></b></h5>

                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#gallery" role="tab"
                               aria-controls="home" aria-selected="true" onclick="lodeImage()">Gallery</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#uplode" role="tab"
                               aria-controls="profile" aria-selected="false">Uplode file</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="gallery" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{route('choose.gallery.image')}}" method="POST" id="galleryImageForm">
                                @csrf
                                <div class="row" id="galleryImageShow" style="padding: 10px;"></div>

                                <button type="submit" class="btn btn-primary" id="subBtn" style="float: right;"> Add
                                </button>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="uplode" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="{{route('gallery.action')}}" class="dropzone" id="file-upload" enctype="multipart/form-data">
                                @csrf
                                <div class="dz-message">
                                    <i class="fa-4x mr-2 fas fa-cloud-download-alt"></i><br>
                                    Drag and Drop Single/Multiple Files Here<br>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.richtext.js') }}"></script>
<!-- Counter-Up-->
<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- dataTabled data -->
<script src="{{ asset('assets/data/data_datatables.js') }}"></script>

<!-- Charts data -->
<script src="{{ asset('assets/data/data_charts_dashboard.js') }}"></script>

<script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>


<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/up/image-uploader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/drag/dropzone.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/drag/bootstrap-tagsinput.min.js') }}"></script>
{{--<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>--}}

<script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="{{ asset('assets/js/custom.js') }}"></script>


<script>
    $(document).on('ready', function () {
        // data-tables
        $('#dataTable').DataTable({});
        $("#form").validate();

        $('#txtEditor').richText();

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });


        // select2
        $('.select2').select2();

        setTimeout(function () {
            $("#toast-container").fadeOut();
        }, 2000);
    });



    $('.input-images-1').imageUploader();

    function lodeImage(){
        $.ajax({
            method: "GET",
            url: "{{route('gallery.image')}}",
            success: function (response) {
                $('#galleryImageShow').html(response);
            }
        });
    }

    function choseFile(elem){
        var id = $(elem).attr("id");
        var ext = id+'_url';
        var val = id+'_val';
        var image = id+'_img';

        $('.bd-example-modal-lg').modal('show');

        $.ajax({
            method: "GET",
            url: "{{route('gallery.image')}}",
            beforeSend: function () {
                $('#messUplode').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                $('#galleryImageShow').html(response);
                $('#messUplode').html('');
            }
        });

        $('#galleryImageForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).prop('action'),
                data: $(this).serialize(),
                beforeSend: function () {
                    $('#subBtn').html('<i class="fa fa-spinner fa-spin"></i>');
                },
                success: function( response ) {
                    $('#'+ext).val(response.extention);
                    $('#'+val).val(response.id);
                    $('#'+image).html(response.image);
                    $("#galleryImageForm")[0].reset();
                    ext = '';
                    val = '';
                    image ='';
                    $('.bd-example-modal-lg').modal('hide');
                    $('#subBtn').html('Add');
                }
            });
        });
    }

    $(document).on( "click", "#delete", function(event) {
        event.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                var url = $(this).attr('href');
                $.ajax({
                    method: "GET",
                    url: url,
                    beforeSend: function () {
                        $('#delete').html('<i class="fa fa-spinner fa-spin"></i>');
                    },
                    success: function (response) {
                        if (response.data == 1) {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            $("#reload").load(location.href + " #reload");
                            $("#dataTable").load(location.href + " #dataTable");
                        }
                    }
                });


            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })


    });

    function changeStatus(val,id,url){
        $.ajax({
            method: "GET",
            url: url,
            data: {val:val,id:id,url:url },
            beforeSend: function () {
                $('#status').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if (response.success) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: response.success
                    })

                    $("#reload").load(location.href + " #reload");
                    $("#dataTable").load(location.href + " #dataTable");
                }
            }
        });
    }


</script>
<!-- END Java Script for this page -->

</body>
</html>
