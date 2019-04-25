<!DOCTYPE html>
</!DOCTYPE html>
<html>
<head>
   <title>  </title>
</head>
<body>
<ul>
<h1>Project</h1>
@foreach($projects as $project)
<a href="/projects/{{$project->id}}">
<li>{{$project->title}}</li>
</a>
</ul>
@endforeach
</body>
</html>