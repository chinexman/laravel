@extends('projects.Layout')

@section('content')

<h1 class="title">{{$project->title}}</h1>
<div class="content">{{$project->description}}</div>

<p>
	<a href="/projects/{{$project->id}}/edit">edit</a>

</p>
   
@if($project->tasks->count())
@foreach ($project->tasks as $task)
     <div>

     	<form method="POST" action="/tasks/{{$task->id}}">
     		@method('PATCH')
     		@csrf
     		<label class="checkbox {{$task->completed?'is-complete':""}}" for="completed" >
     			<input type="checkbox" name="completed" onchange="this.form.submit()"  {{$task->completed?'checked':""}}>
     		</label>

     		{{
     	$task->description
     }}

 </form>


</div>
@endforeach
@endif


<form method="POST" action="/projects/{{$project->id}}/tasks">
	@csrf
	<div class="field">
		<label class="label" for="description">New task</label>
		<div class="control">
			<input type="text" class="input" name="description" placeholder="New Task">
		</div>
<div>
		<button type="submit">add Task</button>
	</div>
	</div>
	@include ('projects.errors')
</form>
@endsection