@extends('layouts.app_admin')

@section('content')
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Home page</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Home page</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <h3><i class="far fa-file-alt"></i> Home page</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form id="submitForm" action="{{route('web.logo.update')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="title">Logo</label>
                                                <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <a role="button" class="input-group-text" id="logo"
                                                           onclick="choseFile(this)">Browse Files</a>
                                                    </div>
                                                    <input type="text" id="logo_url" class="form-control">
                                                    <input type="hidden" name="logo" id="logo_val">
                                                </div>
                                                <div class="input-group mt-4">
                                                    <input type="hidden" name="id" value="{{$page->id}}">
                                                    <button type="submit" class="btn btn-primary" id="btnSubmit">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-6 text-center" id="reload">
                                                <div id="logo_img">
                                                    <img src="{{id_by_image($page->logo)}}" alt="logo" style="max-width:100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="card mb-3" id="reloaddiv">
                                <div class="card-body">
                                    <form id="submitForm" action="{{route('web.slider.update')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="title">Slider 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <a role="button" class="input-group-text" id="slider1"
                                                           onclick="choseFile(this)">Browse Files</a>
                                                    </div>
                                                    <input type="text" id="slider1_url" class="form-control">
                                                    <input type="hidden" name="slider_1" id="slider1_val">
                                                </div>

                                                <label for="title" class="mt-2">Title</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="title" name="title" value="{{$page->title}}">
                                                </div>

                                                <label for="title" class="mt-2">Sub Title</label>
                                                <div class="input-group">

                                                    <input type="text" class="form-control" placeholder="sub title" name="sub_title" value="{{$page->subtitle}}">
                                                </div>

                                                <div class="input-group mt-4">
                                                    <input type="hidden" name="id" value="{{$page->id}}">
                                                    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-6 text-center" id="reload2">
                                                <div id="slider1_img">
                                                    <img src="{{id_by_image($page->slider_1)}}" alt="logo" style="max-width:100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- end card-body -->

                </div>
                <!-- end card -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- END container-fluid -->

    </div>
    <!-- END content -->
@endsection
