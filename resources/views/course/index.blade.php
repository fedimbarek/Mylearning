@extends('welcome')
@section('title')

@endsection
  @section('content')

   <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            @if (session('etat'))
    

    <div class="alert alert-danger">
        {{session('etat') }}
    </div>
    @endif
                   @forelse($cours as $item)
                <div class="container">    
                    <div class="text-center wow " >
                        <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                        <h1 class="mb-5">Popular Courses</h1>
                    </div>
                        <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow " >
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{$item->imgPath() ?? '/img/course-1.jpg'}}" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="{{route('course.show',['slug'=>$item->slug,'id'=>$item->id])}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">{{Str::limit($item->titre,20)}}</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div>
                                    <h5 class="mb-4">{{Str::limit($item->description,20)}}</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{$item->categorie->name}}</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                                </div>
                            </div>
                        </div>
                        @empty
                        pas de cours disponible
                        @endforelse
                        {{$cours->links()}}
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/course-2.jpg" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">$149.00</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div>
                                    <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i></small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>  
               
        </div>

    </div>
    <!-- Categories Start -->
 @endsection
   
     


        

  
       
       
        
