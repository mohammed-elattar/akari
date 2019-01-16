@extends('admin.layouts.layout')
@section('title')
اضافة عقار
@endsection

@section('header')
{!! Html::style("admin/plugins/datatables/dataTables.bootstrap.css") !!}
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        اضافة عقار
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/bu')}}">التحكم في العقارات</a></li>
        <li class="active"><a href="{{url('/adminpanel/bu/create')}}">اضافة عقار جديد</a></li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">أضف عقار جديد</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                {!! Form::open(['url'=>'/adminpanel/bu','method'=>'POST']) !!}
                        @include('admin/bu/form')
                {!! Form::close()!!}

                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->

@endsection