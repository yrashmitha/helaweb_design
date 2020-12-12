<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $project->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $project->description }}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $project->url }}</p>
</div>

<!-- Image Path Field -->
<div class="form-group">
    {!! Form::label('image_path', 'Image Path:') !!}
    <img src="/storage{{$project->image}}" width="300px" height="300px" alt="">

    <p>{{ $project->image_path }}</p>
</div>

<!-- Cover-Path Field -->
<div class="form-group">
    {!! Form::label('cover-path', 'Cover-Path:') !!}
    <img src="/storage{{$project->cover}}" width="300px" height="300px" alt="">
    <p>{{ $project->cover_path }}</p>
</div>

