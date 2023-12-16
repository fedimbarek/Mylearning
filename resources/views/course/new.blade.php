@extends("welcome")
@section("title")
creation nouveau cours
@endsection

@section('content')
<div class="container px-5 my-5">
    @error('titre')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
<ul>
    @foreach ($errors->all() as $e )
    <li> {{ $e }} </li>  
    @endforeach
</ul>
<form id="contactForm" class="col-md-4" method="post" enctype="multipart/form-data">
<div class="form-floating mb-3">
<input class="form-control" name="titre" id="titre" value="{{old('titre')}}" type="text" placeholder="titre" data-sb-validations="" />
<label for="titre">titre</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" name="description" value="{{old('description')}}" id="description" type="text" placeholder="description" data-sb-validations="" />
<label for="description">description</label>
</div>
<div class="form-floating mb-3">
<label for="ca">cate</label>
<select name="categorie_id" value="{{old('categorie')}}"  class="form-control" id="categorie" >
@foreach ($cat as $ca )
<option @selected(old('categorie_id')==$ca->id  ) value="{{$ca->id}}">{{$ca->name}}</option> 
@endforeach    

</select>

</div>

<div class="form-floating">
    <input type="file" class="form-control" id="image" name="image">
</div>
<div class="form-floating mb-3">
<textarea class="form-control"name="content" value="{{old('content')}}" id="newField4" type="text" placeholder="contenu" style="height: 10rem;" data-sb-validations=""></textarea>
<label for="newField4">content</label>
</div>

@if($errors->any())
<div class="d-none" id="submitErrorMessage">
<div class="text-center text-danger mb-3">Error sending message!</div>
</div>
@endif
<div class="d-grid">
<button class="btn btn-primary " id="submitButton" type="submit">Submit</button>
</div>
<!--<input type="hidden" name="__token" value="{{csrf_token()}}">-->
@csrf
</form>
</div>

@endsection