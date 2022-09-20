@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> عنوان الخبر باللغة العربية</label>
        <div class="form-line">
            {!! Form::text('ar_title', null, ['class' => 'form-control', 'placeholder' => '  عنوان الخبر باللغة العربية']) !!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">عنوان الخبر باللغة الانجليزية</label>
        <div class="form-line">
            {!! Form::text('en_title', null, ['class' => 'form-control', 'placeholder' => ' عنوان الخبر باللغة الانجليزية']) !!}
        </div>
    </div>
</div>

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> الوصف باللغة العربية</label>
        <div class="form-line">
            {!! Form::textarea('ar_description', null, [
                'class' => 'form-control',
                'placeholder' => '  الوصف باللغة العربية',
            ]) !!}
        </div>
    </div>
</div>

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">الوصف باللغة الانجليزية</label>
        <div class="form-line">
            {!! Form::textarea('en_description', null, [
                'class' => 'form-control',
                'placeholder' => ' الوصف باللغة الانجليزية',
            ]) !!}
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> اسم الكاتب باللغة العربية</label>
        <div class="form-line">
            {!! Form::text('ar_writer', null, ['class' => 'form-control', 'placeholder' => '  اسم الكاتب باللغة العربية']) !!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">اسم الكاتب باللغة الانجليزية</label>
        <div class="form-line">
            {!! Form::text('en_writer', null, ['class' => 'form-control','placeholder' => ' اسم الكاتب باللغة الانجليزية']) !!}
        </div>
    </div>
</div>

<div class="form-group col-xs-12 col-md-6 form-float image_male">
    <label>صوره </label>
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>


@if (isset($news))

    @if (in_array(pathinfo($news->image)['extension'], ['mp4', '3gp', 'mkv', 'mpeg', 'avi']))
        <a href="{{ $news->image }}" target="_blank" rel="noopener noreferrer">عرض الفيديو</a>
    @else
        <div class="form-group col-xs-12 col-md-6 form-float">
            <label>الصورة: </label>
            <img src="{{ $news->image }}" style="width:100px; height:100px">
        </div>
    @endif

@endif



<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>
