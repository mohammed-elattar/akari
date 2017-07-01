
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

               <d iv class="col-md-10">
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
    <div class="col-md-12">
        <button type="submit" class="btn btn-warning">
            <i class="fa fa-btn fa-registered"></i> اضافة عقار جديد
        </button>
    </div>
</div>
