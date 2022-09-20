@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="form-group col-xs-12 col-md-6 form-float image_male">
    <label>صوره </label>
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>


@if (isset($banner))

    @if (in_array(pathinfo(getimg($banner->image))['extension'], ['mp4', '3gp', 'mkv', 'mpeg', 'avi']))
        <a href="{{ getimg($banner->image) }}" target="_blank" rel="noopener noreferrer">عرض الفيديو</a>
    @else
        <div class="form-group col-xs-12 col-md-6 form-float">
            <label>الصورة: </label>
            <img src="{{ getimg($banner->image) }}" style="width:100px; height:100px">
        </div>
    @endif

@endif



<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>
