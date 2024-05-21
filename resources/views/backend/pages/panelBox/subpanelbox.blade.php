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
                  <h3 class="card-title" style="padding-top: 5px;">SUB PANEL LIST</h3>
                  <a href="{{ URL::to('manage-panel-box') }}" class="btn btn-danger btn-sm" style="float: right"><i class="fas fa-exchange-alt" style="padding-right: 5px;"></i>Back</a>
                </div>
                {{-- <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div> --}}
                {!! Form::open(array('route' => 'sub-panel-box.store','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">
                    <input type="hidden" name="fk_panel_id" value="{{$panelbox->id}}">
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('name', 'SubPanel Name : ', array('class' => 'col-md-2 control-label'))}}
                                <div class="col-sm-10">
                                    {{Form::text('name','',array('class'=>'form-control','id'=>'name','placeholder'=>'name','required'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('url', 'SubPanel Url : ', array('class' => 'col-md-2 control-label'))}}
                                <div class="col-sm-10">
                                    {{Form::text('url','',array('class'=>'form-control','id'=>'url','placeholder'=>'Panle Url','required'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Serial No :</label>
                            <div class="col-sm-10">
                                <?php $max=$max_serial+1; ?>
                                {{Form::number('serial_num',"$max",array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max",'min'=>'0'))}}
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Status :</label>
                            <div class="col-sm-10">
                                {{Form::select('status', array('1' => 'Active', '2' => 'Inactive'),'1', ['class' => 'form-control'])}}
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row offset-1">
                        <div class="col-md-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Panel Image :</label>
                            <div class="col-sm-10">
                                <label class="slide_upload" for="file">
                                    <img id="image_load" src="{{asset('images/default/photo.png')}}" style=" width: 200px;max-height: 120px;">
                                </label>
                                {{Form::file('image',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,'image_load')"))}}
                            </div>
                        </div>
                        </div>
                    </div> --}}
                    <div class="form-group row offset-1">
                        <div class="offset-sm-2 col-sm-10">
                        <div class="form-check" style="padding-left: 0;">
                            <button type="submit" class="btn btn-info"><i class="fas fa-plus" style="padding-right: 5px;"></i>CREATE</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
              {!! Form::close() !!}
                <div class="or">
                    -OR-
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Serial No</th>
                        <th>Panel Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->serial_num }}</td>
                            <td>
                                <a href="{{URL::to('manage-panel-box')}}" class="badge badge-success m-1" style="color: #fff;">{{ $data->panel_name }}</a>
                            </td>
                            <td>
                                <i class="{{($data->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle'}}"></i>
                            </td>
                            <td>
                                <a href="{{route('sub-panel-box.edit',$data->id)}}" class="btn btn-info waves-effect">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteConfirm({{$data->id}})">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <form id="delete-data{{$data->id}}" method="post" action="{{route('sub-panel-box.destroy',$data->id)}}" style="display: none;">
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