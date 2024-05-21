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
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header" style="padding: 5px 22px 5px 22px;">
                <h3 class="card-title" style="padding-top: 5px;">UPDATE IMPORTANT LINKS</h3>
                <a href="{{ URL::to('manage-links') }}" class="btn btn-danger btn-sm" style="float: right"><i class="fas fa-exchange-alt" style="padding-right: 5px;"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(array('route' => ['manage-links.update', $data->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('name', 'Link Name : ', array('class' => 'col-md-2 control-label'))}}
                                <div class="col-sm-10">
                                    {{Form::text('name',$data->name,array('class'=>'form-control','id'=>'name','placeholder'=>'Link Name','required'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('link', 'Link Url : ', array('class' => 'col-md-2 control-label'))}}
                                <div class="col-sm-10">
                                    {{Form::text('link',$data->link,array('class'=>'form-control','id'=>'link','placeholder'=>'Link Url','required'))}}
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
                                {{Form::number('serial_num',"$data->serial_num",array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max",'min'=>'0'))}}
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Status :</label>
                            <div class="col-sm-10">
                                {{Form::select('status', array('1' => 'Active', '2' => 'Inactive'),$data->status, ['class' => 'form-control'])}}
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row offset-1">
                        <div class="offset-sm-2 col-sm-10">
                        <div class="form-check" style="padding-left: 0;">
                            <button type="submit" class="btn btn-info"><i class="fas fa-arrow-right" style="padding-right: 5px;"></i>UPDATE</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
              {!! Form::close() !!}
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


@endsection

@push('js')


@endpush