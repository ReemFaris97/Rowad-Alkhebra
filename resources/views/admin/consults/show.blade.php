@extends('admin.layout.master')
@section('title')
رد على الإستشارة
@endsection

@section('header')

@endsection

@section('content')
    <!-- Vertical form options -->
    <div class="card-box">
    <h4 class="header-title m-t-0 m-b-30">الرد على الإستشارة: {{$consult->email}}</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    {!!Form::open( ['route' => ['admin.consults.update',$consult->id] ,'class'=>'form phone_validate', 'method' => 'patch','files' => true]) !!}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <div class="form-group col-md-12 pull-left">
                      <label>محتوى الرد  </label>
                      {!! Form::textarea("reply",null,['class'=>'form-control ','placeholder'=>'اكتب  الرد '])!!}
                    </div>


                    <br>
                    <div class="text-center col-md-12">
                      <div class="text-right">
                        <button type="submit" class="btn btn-success">ارسال <i class="icon-arrow-left13 position-right"></i></button>
                      </div>
                    </div>



                {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    </div>
<!-- #END# Basic Validation -->
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_layouts.js')}}"></script>
@endsection
