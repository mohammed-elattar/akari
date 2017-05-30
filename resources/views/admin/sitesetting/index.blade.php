@extends('admin.layouts.layout')
@section('title')
تعديل اعدادات الموقع
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        تعديل اعدادات الموقع
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li class="active"><a href="{{url('/adminpanel/sitesetting')}}">تعديل اعدادات الموقع</a></li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">تعديل اعدادات الموقع</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ url('/adminpanel/sitesetting') }}" method="POST">
                        {{csrf_field()}}
                    @foreach($sitesettings as $sitesetting)
                     <div class="form-group">                                            
                         <div class="col-md-3 pull-right">
                             {{$sitesetting->slug}}
                         </div>
                         
                    <div class="col-md-9">
                        @if($sitesetting->type == 0)
                        {!!Form::text($sitesetting->namesetting,$sitesetting->value,['class'=>'form-control'])!!}                        
                        @else
                        {!!Form::textarea($sitesetting->namesetting,$sitesetting->value,['class'=>'form-control'])!!}                        
                        @endif
                        
                        @if ($errors->has($sitesetting->namesetting))
                        <span class="help-block">
                            <strong>{{ $errors->first($sitesetting->namesetting) }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                    <div class="clearfix"></div>
                    @endforeach
                    <button type="submit" name='submit' class="btn btn-app">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->

@endsection


