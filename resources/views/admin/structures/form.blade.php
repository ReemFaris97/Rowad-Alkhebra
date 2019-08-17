@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> اسم الهيكل باللغة العربية</label>
        <div class="form-line">
            {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'  اسم الهيكل باللغة العربية'])!!}
        </div>
    </div>
</div>

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">اسم الهيكل باللغة  الانجليزية</label>
        <div class="form-line">
            {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>' اسم الهيكل باللغة الانجليزية'])!!}
        </div>
    </div>
</div>


<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> الوصف باللغة العربية</label>
        <div class="form-line">
            {!! Form::text("ar_desc",null,['class'=>'form-control','placeholder'=>'  الوصف باللغة العربية'])!!}
        </div>
    </div>
</div>

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">الوصف باللغة  الانجليزية</label>
        <div class="form-line">
            {!! Form::text("en_desc",null,['class'=>'form-control','placeholder'=>' الوصف باللغة الانجليزية'])!!}
        </div>
    </div>
</div>




<div class="form-group col-xs-12 col-md-6 form-float image_male">
    <label>صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>



@if( isset($structure))

    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($structure->image)}}" style="width:100px; height:100px">
    </div>


@endif



<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

