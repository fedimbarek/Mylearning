@extends("welcome")
@section('title')
Se connecter
@endsection
@section('content')
<div class="container">
   
    <div class="row">

   
<form method="post">
<div>
    @error('email')
        {{$message}}
    @enderror
    <label>nom</label>
<input type="text" class="form-control" value="" name="nom">
    <label>email</label>
    <input type="email" class="form-control" value="{{old('email')}}" name="email">
    <label>Password</label>
    <input type="password" class="form-control"  name="password">

</div>
<button type="submit" class="btn btn-success">register</button>
@csrf
</form>
</div>
</div>
@endsection