<section class="header">
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" height="50px" width="100px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item disappear">
                  <a class="nav-link " aria-current="page" href="#">New</a>
                </li>
                <li class="nav-item disappear show-hover">
                  <a class="nav-link" href="#">Women's</a>
                </li>
                <li class="nav-item disappear show-hover">
                  <a class="nav-link" href="#">Men's</a>
                </li>
                <li class="nav-item disappear show-hover">
                  <a class="nav-link" href="#">Kid's</a>
                </li>
                <li class="nav-item disappear show-hover">
                  <a class="nav-link" href="#">Jewellary</a>
                </li>
                <li class="nav-item disappear show-hover">
                  <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item disappear">
                  <a class="nav-link" href="#">More...</a>
                </li>
              </ul>
              {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
              </form> --}}
               <div class="left-nav-content d-flex">
                {{-- <i class=" bi-person"><a href="Siginin.html"></a></i>
                <i class=" bi-cart"></i> --}}
                @if (Route::has('login'))
                <div class="nav-item disappear show-hover">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                        <x-app-layout>
                        </x-app-layout>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
  
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
            </div>
          </div>
        </nav>
        <div id="hero">
        
            <h4>Welcome,to our Website</h4>
           <h2>Wholsale </h2>
           <h1> all products available</h1>
           <p>Our motto is to give proper service to the customer </p>
           <button type="button" class="btn btn-primary">Shop now</button>
         </div>
       </section>
         <section id="feature" class="section-p1">
           <div class="fe-box">
               <img src="img/images (1).png" alt="">
               <h6>Free Survices</h6>
   
           </div>
           <div class="fe-box">
             <img src="img/nn.jpg" alt="">
             <h6>Online Order</h6>
   
         </div>
         <div class="fe-box">
             <img src="img/kissclipart-money-in-pocket-icon-clipart-money-computer-icons-a36e7dc6b5c17cea.png" alt="">
             <h6>Save Money </h6>
   
         </div>
         <div class="fe-box">
             <img src="img/mmmm.jpg" alt="">
             <h6>Save Time</h6>
   
         </div>
         <div class="fe-box">
             <img src="img/oo.jpg" alt="">
             <h6>Happy Sell</h6>
   
         </div>
         </div>
         <div class="fe-box">
            <img src="img/179-1798115_online-banking-poster-drawing-poster-on-e-banking-clipart.jpg" alt="">
           <h6>Promotions</h6>
          </div>
       </section>
   