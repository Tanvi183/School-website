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
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header" style="padding: 5px 22px 5px 22px;">
                <h3 class="card-title" style="padding-top: 5px;">CREATE PANEL BOX</h3>
                <a href="{{ URL::to('photo-gallery') }}" class="btn btn-danger btn-sm" style="float: right"><i class="fas fa-exchange-alt" style="padding-right: 5px;"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(array('route' => ['photo-gallery.update', $data->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}
                <div class="card-body">

                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('caption', 'Caption : ', array('class' => 'col-md-2 control-label'))}}
                                <div class="col-sm-10">
                                    {{Form::text('caption',$data->caption,array('class'=>'form-control','id'=>'caption','placeholder'=>'name','required'))}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                            {{Form::label('status', 'Status :', array('class' => 'col-sm-2 col-form-label'))}}
                            <div class="col-sm-10">
                                {{Form::select('status', array('1' => 'Active', '2' => 'Inactive'),$data->status, ['class' => 'form-control'])}}
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row offset-1">
                        <div class="col-md-12">
                            <div class="form-group row">
                                {{Form::label('category_id', 'Category :', array('class' => 'col-sm-2 col-form-label'))}}
                                <div class="col-sm-10">
                                    {{Form::select('category_id',$category,null, ['class' => 'form-control','required']) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row offset-1">
                        <div class="col-md-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Image :</label>
                            <div class="col-sm-10">
                                <label class="slide_upload" for="file">
                                    @if($data->image != null)
                                        <img id="image_load" src="{{ asset($data->image) }}" style=" width: 200px;max-height: 120px;">
                                    @else
                                        <img id="image_load" src="{{asset('images/default/photo.png')}}" style=" width: 200px;max-height: 120px;">
                                    @endif
                                </label>
                                {{Form::file('image',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,'image_load')"))}}
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