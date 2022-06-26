

<nav   class="navbar navbar-expand-md shadow-sm" style="background-color: #493a60; ">
    <div class="container">
            <a href="">   <img class="logo" src="../assets/img/diary.png" alt="design" width="30%"  class="img-fluid"> </a>

        <a class="navbar-brand" href="{{ url('/') }}">
            
        </a>
        <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span style=" color:white;" class="navbar-toggler-icon">
                 <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>


            <nav style="margin: 0px 130px 0px 0px;" >
                <a style="color:white; font-size: 17px; font-family: Helvetica;" href="{{ url('/') }}">Home</a>
                <div class="dropdown">
                    <button style="background-color:#493a60;" class="dropbtn"><a style="color:white; font-size: 17px; font-family: Helvetica;"  href="{{ url('/services') }}">Services</a></button>
                    <div class="dropdown-content">
                        
                        <a class="p-2 " href="{{ url('/web-app-development') }}">Old Service</a>
                        <a class="p-2 " href="{{ url('/android-app-development') }}">Free Service</a>
                        <a class="p-2 " href="{{ url('/desktop-app-development') }}">Premium Service</a>
                      
                       
                    </div>
                </div>
                  
                <a style="color:white; font-size: 17px; font-family: Helvetica;" class="p-2 " href="{{ url('/Portfolio') }}">Portfolio</a>
                <a style="color:white; font-size: 17px; font-family: Helvetica;"  class="p-2 " href="{{ url('/Gallery/create') }}">Gallery</a>
               <div class="dropdown">
                    <button style="background-color:#493a60;" class="dropbtn"><a style="color:white; font-size: 17px; font-family: Helvetica;"  href="{{ url('/services') }}">Corporate Space</a></button>
                    <div class="dropdown-content">
                        
                        <a class="p-2 " href="{{ url('/web-app-development') }}">Gulsan High-Tech Park</a>
                        <a class="p-2 " href="{{ url('/android-app-development') }}">Uttara High-Tech Park</a>
                        <a class="p-2 " href="{{ url('/desktop-app-development') }}">Purbachal High-Tech Park</a>
                      
                       
                    </div>
                </div>
                 <a style="color:white; font-size: 17px; font-family: Helvetica;" class="p-2 " href="{{ url('/contact') }}">Contact us</a>
                <a style="color:white; font-size: 17px; font-family: Helvetica;" class="p-2 " href="{{ url('/about') }}">About us</a>
                 
    
                </nav>






            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto"> 
               
                
                   <a data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background-color:#493a60; color: white;" type="submit"><i class="fa fa-search"></i></a>

                 <div style="margin:80px 0px 0px 1000px; width:230px; " class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="" placeholder="Search">
   
                     
                    </div>
                  </div>
                </div>
                 
                  
                 
            </ul>
        </div>
    </div>
</nav>


