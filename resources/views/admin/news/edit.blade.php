@extends('admin.layout.master')
@section('title', 'تعديل الخبر')

@section('styles')
    <style>
        .erro {
            color: red;
        }
    </style>
@endsection

@section('content')
    <!-- Page Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <a href="{{ route('admin.news.index') }}" class="btn btn-custom dropdown-toggle waves-effect waves-light">رجوع
                    لإدارة الاخبار<span class="m-l-5"><i class="fa fa-reply"></i></span></a>
            </div>
            <h4 class="page-title">تعديل الخبر</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <h4 class="header-title m-t-0 m-b-30">بيانات الخبر: {{ $news->ar_title }}</h4>

                <div class="row">

                    {!! Form::model($news, ['route' => ['admin.news.update', $news->id], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('admin.news.form')
                    {!! Form::close() !!}


                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
@endsection
