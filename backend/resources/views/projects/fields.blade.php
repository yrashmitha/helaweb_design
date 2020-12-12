<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows' => 10, 'cols' => 40,'maxlength' => 9999,'maxlength' => 9999]) !!}
{{--    {!! Form::textarea('placeOfDeath',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}--}}

</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_path', 'Image Path:') !!}
    {!!  Form::file('image_path') !!}
</div>

<!-- Cover-Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover-path', 'Cover-Path:') !!}
    {!!  Form::file('cover_path') !!}
    {{--    {!! Form::text('cover-path', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}--}}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-default">Cancel</a>
</div>
