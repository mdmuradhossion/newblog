@extends('layouts.app_admin')

@section('content')

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Blog posts create</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Blog posts create</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
            <!-- end row -->

            <form id="submitForm" action="{{route('category.create.action')}}" method="POST" data-parsley-validate
                  novalidate>
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="{{route('blog.list')}}" type="reset" class="btn btn-warning m-l-5 float-right">
                                    Back
                                </a>
                                <h3><i class="fas fa-clipboard-list"></i> Blog posts create</h3>
                            </div>
                        {{--                            <div class="card-body">--}}
                        {{--                            </div>--}}
                        <!-- end card-body-->
                        </div>
                        <!-- end card-->

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" data-parsley-trigger="change" required
                                           placeholder="Title" class="form-control" id="title">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="userName">Name<span class="text-danger">*</span></label>
                                    <textarea id="txtEditor"></textarea>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Category</h6>
                                        @php $category = \App\Models\Category::where('parent_id',NULL)->get();  @endphp
                                        <div class="form-group">
                                            <select class="form-control capitalize" name="category">
                                                @foreach($category as $cat)
                                                    @php $subcategory = \App\Models\Category::where('parent_id',$cat->id)->get();  @endphp
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @foreach($subcategory as $subcat)
                                                        <option value="{{$subcat->id}}">-{{$subcat->name}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <h6>Status</h6>
                                        <div class="form-group">
                                            <select class="form-control" name="status" required>
                                                @php echo statusInOption(1); @endphp
                                            </select>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <h6>Main Image</h6>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <h6>Thumbnail Image</h6>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <a role="button" href="javascript:void(0);" class="input-group-text" id="basic-addon3" data-toggle="modal" data-target=".bd-example-modal-lg">Browse Files</a>
                                            </div>
                                            <input type="text" name="thum_image" class="form-control" id="basic-url"
                                                   aria-describedby="basic-addon3">

                                        </div>
                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <h6>TAG</h6>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="tag" placeholder="tags">
                                        </div>
                                        <hr>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary" type="submit" id="btnSubmit">
                                        Submit
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end row -->
            </form>

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

@endsection
