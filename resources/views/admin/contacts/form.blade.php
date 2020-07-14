
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif



<div class="form-group col-md-12 pull-left">
    <label>اسم الرد  </label>
    {!! Form::textarea("reply",null,['class'=>'form-control ','placeholder'=>'اكتب  الرد '])!!}
</div>


<br>
<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">ارسال <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>
