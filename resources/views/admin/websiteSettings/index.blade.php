@extends('layouts.app_admin')

@section('content')
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Website settings</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Website settings</li>
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
                            <span class="pull-right"><a href="javascript:void(0);" class="btn btn-primary btn-sm" onclick="add()"></i> Add new menu</a></span>
                            <h3><i class="far fa-file-alt"></i> Menu</h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="reload">
                                    <thead>
                                    <tr>
                                        <th style="min-width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Url</th>
                                        <th>Icon</th>
                                        <th style="width:110px;" id="status">Status</th>
                                        <th style="width:140px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menu as $key => $val)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$val->menu}}</td>
                                            <td>{{$val->slug}}</td>
                                            <td>{{$val->url}}</td>
                                            <td>{{$val->icon}}</td>
                                            <td>
                                                @php $che = ($val->status == '1')?'checked':''; $value = ($val->status == '1')?'0':'1'; @endphp
                                                <label class="switch">
                                                    <input type="checkbox" {{$che}} value="{{$value}}" onclick="changeStatus(this.value,'{{$val->id}}','{{route('menu.status-action')}}')" >
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="{{route('edit.page',$val->slug)}}" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Page</a>
                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-block" onclick="updateMenu('{{route('menu.edit',$val->id)}}')" id="btnupdate"><i
                                                        class="far fa-edit"></i> Menu</a>
                                                <a href="" class="btn btn-danger btn-sm btn-block mt-2" id="delete"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!--  add modal  -->
                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="add-form" action="{{route('menu.action')}}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" required placeholder="Title" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Slug<span class="text-danger">*</span></label>
                                                    <input type="text" name="slug" required placeholder="slug" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Url</label>
                                                    <input type="text" name="url" placeholder="url" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Icon</label>
                                                    <input type="text" name="icon"  placeholder="Icon" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" id="btnSubmit" >Add</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade update-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="update-form" action="{{route('menu.update.action')}}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" required placeholder="Title" id="name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Slug<span class="text-danger">*</span></label>
                                                    <input type="text" name="slug" id="slug" required placeholder="slug" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Url<span class="text-danger">*</span></label>
                                                    <input type="text" name="url" placeholder="url" id="url" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Icon<span class="text-danger">*</span></label>
                                                    <input type="text" name="icon" id="icon"  placeholder="Icon" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id" id="id"  class="form-control">
                                                <button type="submit" class="btn btn-primary" id="btnSubmit" >Update</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
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
