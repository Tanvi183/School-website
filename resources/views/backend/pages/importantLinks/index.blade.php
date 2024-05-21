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
              <li class="breadcrumb-item active">Important Links</li>
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
                  <h3 class="card-title" style="padding-top: 5px;">IMPORTANT LINKS LIST</h3>
                  <a href="{{route('manage-links.create')}}" class="btn btn-success btn-sm" style="float: right"><i class="fas fa-plus" style="padding-right: 5px;"></i>ADD NEW</a>
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
                        <th>Url</th>
                        <th>Serial No</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($allLinks as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->link }}</td>
                            <td>{{ $data->serial_num }}</td>
                            <td>
                                @if($data->status==1)
                                    <span class="badge badge-success m-1">Active</span>
                                @else
                                    <span class="badge badge-danger m-1">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('manage-links.edit',$data->id)}}" class="btn btn-info waves-effect">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteConfirm({{$data->id}})">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <form id="delete-data{{$data->id}}" method="post" action="{{route('manage-links.destroy',$data->id)}}" style="display: none;">
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