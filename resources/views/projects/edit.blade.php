@extends('projects.Layout')



@section('content')

<h1 class="title">edit project</h1>

<form method="POST" action="/projects/{{$project->id}}">

	{{method_field('PATCH')}}
	{{csrf_field()}};
	
	<div>
		<label class="label" for="title">title</label>
		<input type="text" name="title" placeholder="Project title" value="{{$project->title}}">
	</div>
	<div>
				<label class="label" for="description">description</label>

				<input type="text" name="description" placeholder="Project description" value="{{$project->description}}">

	</div>
	<div>
		<button type="submit">update project</button>

	</div>
</form>

<form method="POST" action="/projects/{{$project->id}}">

	
@method('DELETE')
	@csrf
	
	<div>
		<button type="submit">delete project</button>

	</div>
</form>
@endsection