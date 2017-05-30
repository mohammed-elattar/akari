                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        {!!Form::text('name',null,['class'=>'form-control'])!!}                        

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                 <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        {!!Form::select('admin',['0'=>'user','1'=>'admin'],null,['class'=>'form-control'])!!}                        

                        @if ($errors->has('admin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('admin') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        {!!Form::email('email',null,['class'=>'form-control'])!!}                        
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                @if(!isset($user))
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
                @endif
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-btn fa-registered"></i> تسجيل عضوية جديدة
                        </button>
                    </div>
                </div>
