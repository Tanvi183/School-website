@extends('backend.layouts.master')
@section('title','Harinarayanpur')
@push('css')
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ URL::to('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Panel Box</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-info">
                <div class="card-header" style="padding: 5px 22px 5px 22px;">
                  <h3 class="card-title" style="padding-top: 5px;">PANEL LIST</h3>
                  <a href="{{route('manage-panel-box.create')}}" class="btn btn-success btn-sm" style="float: right"><i class="fas fa-plus" style="padding-right: 5px;"></i>ADD NEW</a>
                </div>
                {{-- <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div> --}}
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Serial No</th>
                        <th>Sub Panel Box</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($allPanelBox as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->serial_num }}</td>
                            <td>
                                <a href="{{URL::to('sub-panel-box',$data->id)}}" class="badge badge-success m-1" style="color: #fff;">Sub Panelbox</a>
                            </td>
                            <td>
                                <i class="{{($data->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle'}}"></i>
                            </td>
                            <td>
                                <a href="{{route('manage-panel-box.edit',$data->id)}}"> <img style="width:100px;height:50px;" src="{{asset($data->image)}}" width="100px"> </a>
                            </td>
                            <td>
                                <a href="{{route('manage-panel-box.edit',$data->id)}}" class="btn btn-info waves-effect">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteConfirm({{$data->id}})">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <form id="delete-data{{$data->id}}" method="post" action="{{route('manage-panel-box.destroy',$data->id)}}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>


@endsection

@section('js')

@endsection