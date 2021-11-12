@extends('layouts.app_admin')

@section('content')

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Category</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Category</li>
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
                            <a href="{{route('category.create')}}" class="btn btn-primary float-right" >Add</a>
                            <h3><i class="fas fa-clipboard-list"></i> Category List</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Parent category</th>
                                        <th>Icon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $key => $item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{get_data_by_id('name','categories','id',$item->parent_id)}}</td>
                                            <td>{{$item->icon}}</td>
                                            <td>
                                                <a class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->

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
