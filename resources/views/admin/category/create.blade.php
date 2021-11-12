@extends('layouts.app_admin')

@section('content')

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Category create</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Category create</li>
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
                            <a href="{{route('category.list')}}" type="reset" class="btn btn-warning m-l-5 float-right">
                                Back
                            </a>
                            <h3><i class="fas fa-clipboard-list"></i> Category create</h3>
                        </div>

                        <div class="card-body">
                            <form id="submitForm" action="{{route('category.create.action')}}" method="POST"   data-parsley-validate novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 capitalize">
                                        <div class="form-group">
                                            <label for="userName">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" data-parsley-trigger="change" required
                                                   placeholder="Enter category name" class="form-control" id="name">
                                        </div>

                                        <div class="form-group" id="reload">
                                            <label for="userName">Parent category<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control capitalize" name="parent_id" data-parsley-trigger="change"
                                                    >
                                                @php echo getParentCategoryInOption();@endphp
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Icon<span class="text-danger">*</span></label>
                                            <input type="text" name="icon" data-parsley-trigger="change"
                                                   placeholder="Enter icon" class="form-control" id="icon">
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary" type="submit" id="btnSubmit">
                                                Submit
                                            </button>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>

                                </div>

                            </form>

                        </div>
                        <!-- end card-body-->

                    </div>
                    <!-- end card-->

                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

@endsection
