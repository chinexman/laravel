<!DOCTYPE html>
</!DOCTYPE html>
<html>
<head>
   <title>  </title>
</head>
<body>

<h1> create a new Project</h1>

<form method="POST" action="/projects">
	{{csrf_field()}}
	
	<div>

		<input type="text" name="title" placeholder="Project title" required="" value="{{ old('title')}}">
	</div>
	<div>
		<textarea name="description" placeholder="project description" ></textarea>
	</div>
	<div>
		<button type="submit">create project</button>
	</div>

	@include ('projects.errors')
</form>

</body>
</html>