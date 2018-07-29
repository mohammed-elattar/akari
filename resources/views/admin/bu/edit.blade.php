@extends('admin.layouts.layout')
@section('title')
تعديل العقار 
{{$bu->bu_name}}
@endsection

@section('header')
{!! Html::style("admin/plugins/datatables/dataTables.bootstrap.css") !!}
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       تعديل العقار 
{{$bu->bu_name}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/bu')}}">التحكم في العقارات</a></li>
        <li class="active"><a href="{{url('/adminpanel/bu/'.$bu->id.'/edit')}}">
                تعديل العقار
{{$bu->bu_name}}
            </a></li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        تعديل العقار 
{{$bu->bu_name}}
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! Form::model($bu,['route'=>['adminpanel.bu.update',$bu->id],'method'=>'PATCH'])!!}
                        @include('admin/bu/form')
                    {!! Form::close()!!}
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->

@endsection


