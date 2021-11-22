@extends('layouts.app_admin')

@section('content')
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Blog posts</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Blog posts</li>
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
                            <span class="pull-right"><a href="{{route('blog.add')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add new post</a></span>
                            <h3><i class="far fa-file-alt"></i> Blog posts</h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="reload">
                                    <thead>
                                    <tr>
                                        <th style="min-width: 300px">Article details</th>
                                        <th style="width:110px;">Category</th>
                                        <th style="min-width:110px">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog as $val)

                                    <tr>
                                        <td>
                                            <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="@php echo id_by_image($val->thum_image);@endphp" /></div>
                                            <h4>{{$val->title}}</h4>
                                            <p>Posted by <b>{{get_data_by_id('name','users','id',$val->user_id)}}</b> at {{date_view($val->created_at)}}</p>
                                            @php echo substr($val->description , 0,190) @endphp..
                                        </td>

                                        <td style="text-transform: capitalize;">@php echo get_data_by_id('name','categories','id',$val->category_id); @endphp</td>

                                        <td>
                                            <a href="{{route('blog.edit',$val->id)}}" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>
                                            <a href="{{route('blog.delete',$val->id)}}"  class="btn btn-danger btn-sm btn-block mt-2" id="delete"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
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
