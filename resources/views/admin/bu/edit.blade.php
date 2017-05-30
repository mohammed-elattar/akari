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
        <li><a href="{{url('/adminpanel/bu')}}">التحكم في الأعضاء</a></li>
        <li class="active"><a href="{{url('/adminpanel/bu/'.$bu->id.'/edit')}}">
                تعديل العضو 
{{$user->name}}
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
                <div class="box">
                    <div class="box-header">
                    {!!Form::open(['url'=>'adminpanel/users/changepassword','method'=>'post'])!!}
                    <input type="hidden" value="{{$user->id}}" name="user_id">
                    <div class="form-group">
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-6 pull-right">
                            <input id="password" type="password" placeholder="كلمة السر" class="form-control" name="password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-btn fa-registered"></i> تغيير كلمة السر
                        </button>
                        @if($user->id !=1)
                        <a href='/adminpanel/users/".$user->id."/delete' class='btn btn-info btn-circle'><i class='fa fa-edit'></i></a>
                        @endif
                    </div>
                </div>
                    {!!Form::close()!!}
                </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->

@endsection


