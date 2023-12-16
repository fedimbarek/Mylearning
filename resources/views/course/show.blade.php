@extends('welcome')
@section('content')

@if (session('etat'))
    

<div class="alert alert-success">
    {{session('etat') }}
</div>
@endif
{{'id'.$cours->id}}<br>
titre: {{$cours->titre}}<br>
description: {{$cours->description}}<br>
catego{{$cours->categorie->name}}
<form method="POST" action="{{route ('course.remove',['cours'=>$cours])}}">
@method("DELETE")    
<button>delete</button>@csrf</form>
@endsection