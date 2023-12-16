<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <title>@yield("title")eLEARNING - eLearning HTML Template @show</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{  route ('about')}}" class="nav-item nav-link">About</a>
                <a href="{{  route ('course.index')}}" class="nav-item nav-link">Courses</a>
                <a href="{{  route ('contact')}}" class="nav-item nav-link">Contact</a>
                @auth
                
                
                
                <a href="{{  route ('logout')}}" class="nav-item nav-link">logout</a>
                    
                <span>{{Auth::user()->name}}</span>
                @endauth
                @guest
                <a href="{{  route ('login')}}" class="nav-item nav-link">Connect</a>
                    
                @endguest

            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->

 

    <!-- Courses Start -->
   
    <div class="container-xxl py-5">
@section('content')
   
   <div class="container">    
         <div class="text-center wow " >
             <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
             <h1 class="mb-5">Popular Courses</h1>
         </div>
         <div class="row g-4 justify-content-center">
             <div class="col-lg-4 col-md-6 wow " >
                 <div class="course-item bg-light">
                     <div class="position-relative overflow-hidden">
                         <img class="img-fluid" src="img/course-1.jpg" alt="">
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
                         <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                         <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                     </div>
                 </div>
             </div>
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
                         <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                         <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="course-item bg-light">
                     <div class="position-relative overflow-hidden">
                         <img class="img-fluid" src="img/course-3.jpg" alt="">
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
                         <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                         <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                     </div>
                 </div>
             </div>
         </div>
</div>
     @show()
    </div>
    <!-- Courses End -->

      

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-auto" >
       
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


</body>

</html>