<div class="table-responsive">
    <table class="table" id="projects-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Url</th>
{{--        <th>Image Path</th>--}}
{{--        <th>Cover-Path</th>--}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->url }}</td>
{{--            <td>{{ $project->image_path }}</td>--}}
{{--            <td>{{ $project->cover_path }}</td>--}}
                <td>
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [$project->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i>Edit</a>
                        <a href="{{ route('projects.edit', [$project->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
