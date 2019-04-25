@extends('Layout1')


@section('content')

<h1>my {{$foo}} First website</h1>
<h1>my {{$boo}} pages</h1> 
<ul>
@foreach($tasks as $task)
<li>{{$task}}</li>
@endforeach

</ul>
@endsection

