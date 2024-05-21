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
              <li class="breadcrumb-item active">Primary Info</li>
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
                <h3 class="card-title" style="padding-top: 5px;">PRIMARY INFO</h3>
                <a href="{{ URL::to('dashboard') }}" class="btn btn-danger btn-sm" style="float: right"><i class="fas fa-exchange-alt" style="padding-right: 5px;"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(array('route' =>['primary-info.update',$data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="school_name" value="{{ $data->school_name }}" placeholder="School Name In English..">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Bangla Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="school_name_bn" value="{{ $data->school_name_bn }}" placeholder="School Name In Bangla..">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="address" value="{{ $data->address }}" placeholder="School Address In English..">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Bangla Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="address_bn" value="{{ $data->address_bn }}" placeholder="School Address In Bangla..">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Phone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="mobile_no" value="{{ $data->mobile_no }}" placeholder="School Contact Number..">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Phone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="mobile_no_one" value="{{ $data->mobile_no_one }}" placeholder="School Contact Number..">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="email" value="{{ $data->email }}" placeholder="School Email..">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Code</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="school_code" value="{{ $data->school_code }}" placeholder="School Code..">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">MPO Code</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="school_mpo_code" value="{{ $data->school_mpo_code }}" placeholder="School MPO Code..">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">EIIN Code</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="school_eiin_code" value="{{ $data->school_eiin_code }}" placeholder="School EIIN Code..">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Logo</label>
                        <div class="col-sm-9">
                          <label class="slide_upload" for="file">
                            @if($data->logo!=null)
                                <img id="image_load" src='{{asset("$data->logo")}}' class="img-responsive" style="width: 150px;max-height: 80px;">
                            @else
                                <img id="image_load" src="{{asset('images/default/photo.png')}}" style=" width: 200px;max-height: 80px;">
                            @endif
                        </label>
                        {{Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">School Favicon</label>
                        <div class="col-sm-9">
                          <label class="slide_upload" for="file2">
                            <!--  -->
    
                            @if($data->logo!=null)
                                <img id="image_load2" src='{{asset("$data->favicon")}}' class="img-responsive" style="width: 50px;height: 50px;">
                            @else
                                <img id="image_load2" src="{{asset('images/default/photo.png')}}" style="width: 50px;max-height: 50px;">
                            @endif
    
                        </label>
    
                        {{Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Short Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="short_description" id="exampleFormControlTextarea1" rows="3">{{$data->short_description}}</textarea>
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Description</label>
                    <div class="col-sm-10">
                      <textarea id="summernote" name="long_description">{{$data->long_description}}</textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Map Embed Code</label>
                    <div class="col-sm-10">
                      {{Form::textArea('map_embed',$data->map_embed,array('class'=>'form-control','placeholder'=>'Google Map Embed Code','rows'=>'5'))}}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Google Map</label>
                    <div class="col-sm-10">
                      <iframe src="{{$data->map_embed}}" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check" style="padding-left: 0;">
                        <button type="submit" class="btn btn-info"><i class="fas fa-plus" style="padding-right: 5px;"></i>UPDATE</button>
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