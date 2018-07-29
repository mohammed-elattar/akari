
<div class="form-group">
    <div class="col-md-2 pull-right">
        اسم العقار
    </div>

    <div class="col-md-10">
        {!!Form::text('bu_name',null,['class'=>'form-control'])!!}

        @if ($errors->has('bu_name'))
            <span class="help-block">
                        <strong>{{ $errors->first('bu_name') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        عدد الغرف
    </div>

    <div class="col-md-10">
        {!!Form::text('rooms',null,['class'=>'form-control'])!!}

        @if ($errors->has('rooms'))
            <span class="help-block">
                    <strong>{{ $errors->first('rooms') }}</strong>
                </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        سعر العقار
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_price',null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_price'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_price') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        نوع العملية
    </div>
    <div class="col-md-10">
        {!!Form::select('bu_rent',bu_rent(),null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_rent'))
            <span class="help-block">
            <strong>{{ $errors->first('bu_rent') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        مساحة العقار
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_square',null,['class'=>'form-control'])!!}

        @if ($errors->has('bu_square'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_square') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        نوع العقار
    </div>
    <div class="col-md-10">
        {!!Form::select('bu_type',bu_type(),null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_type'))
            <span class="help-block">
            <strong>{{ $errors->first('bu_type') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        الكلمات الدلاليه
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_meta',null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_meta'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_meta') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        مساحة العقار
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_square',null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_square'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_square') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        خط الطول
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_langitude',null,['class'=>'form-control'])!!}

        @if ($errors->has('bu_langitude'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_langitude') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        دائرة العرض
    </div>
    <div class="col-md-10">
        {!!Form::text('bu_latitude',null,['class'=>'form-control'])!!}

        @if ($errors->has('bu_latitude'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_latitude') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        حالة العقار
    </div>
    <div class="col-md-10">
        {!!Form::select('bu_status',bu_status(),null,['class'=>'form-control'])!!}
        @if ($errors->has('bu_status'))
            <span class="help-block">
            <strong>{{ $errors->first('bu_status') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        وصف العقار
    </div>
    <div class="col-md-10">
        {!!Form::textarea('bu_large_disc',null,['class'=>'form-control','rows'=>4])!!}

        @if ($errors->has('bu_large_disc'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_large_disc') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-2 pull-right">
        وصف العقار لمحركات البحث
    </div>

    <div class="col-md-10">
        {!!Form::textarea('bu_small_disc',null,['class'=>'form-control','rows'=>4])!!}

        @if ($errors->has('bu_small_disc'))
            <span class="help-block">
                <strong>{{ $errors->first('bu_small_disc') }}</strong>
            </span>
        @endif
        <br>
        <div class="alert alert-warning">
            لا يمكن ادخال اكثر من 160 حرف علي حسب معايير جوجل
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-warning">
            <i class="fa fa-btn fa-registered"></i> اضافة عقار جديد
        </button>

    </div>
</div>
