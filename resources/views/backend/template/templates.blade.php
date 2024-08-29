@extends('backend.layouts.master_page')
@section('title')
<title>Choose Template</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection
@section('content')

<div class="content">

@if(session('success'))
    <div  class="alert alert-danger success-alert">
      {{ session('success') }}
    </div>
@endif


  <script>
    let alerts = document.querySelectorAll('.success-alert');
    // console.log("Alert: ", alerts);

    alerts.forEach((alert)=>{

            setTimeout(function() {

                    if (alert) {
                        alert.style.transition = 'opacity 0.5s ease';
                        alert.style.opacity = '0';

                        setTimeout(function() {
                            alert.style.display = 'none';
                        }, 500);
                    }
                }, 1000); // 1 second delay
        });
      
  </script>

    <div class="mb-9">
      <div class="row g-3 mb-4">
            <div class="col-auto">
            <h2 class="mb-2"></h2>
            <h5 class="text-body-tertiary fw-semibold">Choose Template</h5>
            </div>
            <div class="col-auto">
            <h2 class="mb-0"></h2>
            </div>
      </div>
     
      <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
       
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
          
         <div class="row">

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 me-3 position-relative" style="border: 2px solid red;">

                    <style>
                        .custom-checkbox {
                            transform: scale(1.5);
                            -webkit-transform: scale(1.5);
                            -moz-transform: scale(1.5);
                            -ms-transform: scale(1.5);
                            -o-transform: scale(1.5);
                        }
                    </style>

                   <label class="icon-checkbox d-flex justify-content-end">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="">
                        <span class=" text-primary">
                            <i class="fas fa-check d-none" style="font-size: 35px;" id="checkIcon1"></i>
                        </span>
                   </label>

                    <div class="p-4">
                        <img src="{{ asset('assets/img/temp1.PNG') }}" alt="" style="width:100%;">
                    </div>
                  
                    <div class="position-absolute top-50 start-50">
                        <a href="{{ route('temp1')}}">
                            <button class="btn btn-dark">Preview</button></a>
                        </a> 
                        {{-- <a href="{{ route('temp1.edit')}}">
                            <button class="btn btn-dark">Edit</button></a>
                        </a>  --}}
                        <label class="btn btn-primary" id="selectLabel1">Select</label>
                    </div>

                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 me-3 position-relative" style="border: 2px solid blue;">
                    
                    <label class="icon-checkbox text-end">
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="">

                        <span class="text-primary">
                            <span class=" text-primary">
                                <i class="fas fa-check d-none" style="font-size: 35px;" id="checkIcon2"></i>

                            </span>                       
                         </span>
                   </label>

                    <div class="p-4">
                        <img src="{{ asset('assets/img/temp2.PNG') }}" alt=""  style="width:100%;">
                    </div>
            

                <div class="position-absolute top-50 start-50">

                    <a href="{{ route('temp2')}}">
                        <button class="btn btn-dark">Preview</button></a>
                    </a> 

                    <label class="btn btn-primary" id="selectLabel2">Select</label>

                    {{-- <a href="{{ route('temp2')}}">
                        <button class="btn btn-primary">Select</button></a>
                    </a>  --}}
                    {{-- <a href="{{ route('temp2.edit')}}">
                        <button class="btn btn-dark">Edit</button></a>
                    </a>  --}}
                </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 position-relative" style="border: 2px solid yellow;">
                   
                    <label class="icon-checkbox text-end">
                        <input type="radio" class="checkbox-input d-none" />

                        <span class=" text-primary">

                            <i class="fas fa-check d-none" style="font-size: 35px;" id="checkIcon3"></i>

                        </span>
                   </label>

                   
                    <div class="p-4">
                        <img src="{{ asset('assets/img/temp3.PNG') }}" alt="" style="width:100%;">
                    </div>
             
                <div class="position-absolute top-50 start-50">
                    <a href="{{ route('temp3')}}">
                        <button class="btn btn-dark">Preview</button></a>
                    </a> 

                    <label class="btn btn-primary" id="selectLabel3">Select</label>

                    {{-- <a href="{{ route('temp3.edit')}}">
                        <button class="btn btn-dark">Edit</button></a>
                    </a>  --}}
                    {{-- <a href="{{ route('temp2')}}">
                        <button class="btn btn-primary">Select</button></a>
                    </a>  --}}
                </div>
                </div>
         </div>
        
        </div>
      </div>
    </div>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-body-tertiary text-opacity-85">v1.16.0</p>
        </div>
      </div>
    </footer>
  </div>
  
  <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
      <div class="modal-content mt-15 rounded-pill">
        <div class="modal-body p-0">
          <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>

            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
              <button class="btn btn-link p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/10.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/12.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
 
    document.getElementById("selectLabel1").addEventListener("click", function() {
    // console.log('yy');


    let icon = document.getElementById("checkIcon1");
    let label = this;

    console.log(label);

    if (icon.classList.contains("d-none")) {
        icon.classList.remove("d-none");
        icon.classList.add("d-block");
        label.textContent = "Deselect";
    } else {
        icon.classList.remove("d-block");
        icon.classList.add("d-none");
        label.textContent = "Select";
    }

});


document.getElementById("selectLabel2").addEventListener("click", function() {
    // console.log('yy');


    let icon = document.getElementById("checkIcon2");
    let label = this;

    console.log(label);

    if (icon.classList.contains("d-none")) {
        icon.classList.remove("d-none");
        icon.classList.add("d-block");
        label.textContent = "Deselect";
    } else {
        icon.classList.remove("d-block");
        icon.classList.add("d-none");
        label.textContent = "Select";
    }

});
   
 
document.getElementById("selectLabel3").addEventListener("click", function() {
    // console.log('yy');


    let icon = document.getElementById("checkIcon3");
    let label = this;

    console.log(label);

    if (icon.classList.contains("d-none")) {
        icon.classList.remove("d-none");
        icon.classList.add("d-block");
        label.textContent = "Deselect";
    } else {
        icon.classList.remove("d-block");
        icon.classList.add("d-none");
        label.textContent = "Select";
    }

});
   


</script>
 

@endsection