@extends('layouts.app')
@section('title')
register
@endsection
@section('content')
<div class="container">
    <div class="contact_bottom">
        <div class="row">
            <hr>
            <h3>تسجيل عضوية جديدة</h3>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="الاسم">

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" placeholder="الايميل" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-6">
                            <input id="password" type="password" placeholder="كلمة السر" class="form-control" name="password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" placeholder="تأكيد كلمة السر" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-btn fa-registered"></i> تسجيل عضوية جديدة
                        </button>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <br>
        </div>
    </div>
</div>
@endsection
