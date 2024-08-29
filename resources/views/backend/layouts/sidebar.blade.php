<nav class="navbar navbar-vertical navbar-expand-lg">

{{-- bullet point with each menu --}}
<style>
    .bullet-items{
            height: 5px; 
            width:5px;
        }
    </style>


    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

  {{-- Dashboard --}}
<li class="nav-item text-dark" data-nav="dashboard">
    <!-- parent pages-->
    <div class="nav-item-wrapper text-dark">
        <a class="nav-link label-1" href="" role="button" data-bs-toggle="" aria-expanded="false">
        <div class="d-flex align-items-center text-dark"><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text-wrapper">
            <span class="nav-link-text text-dark">Dashboard</span></span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
        </div>
        </a>
    </div>
</li>
        
<li class="nav-item" data-nav="user">

<hr class="navbar-vertical-line" />
<!-- parent pages-->
<div class="nav-item-wrapper">

<a class="nav-link dropdown-indicator label-1" href="#nv-user" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-user">
    
<div class="d-flex align-items-center">
    <div class="dropdown-indicator-icon">
        <span class="fas fa-caret-right"></span>
    </div>

    <span class="nav-link-icon">
        <span data-feather="users"></span>
    </span>
    <span class="nav-link-text text-dark">CMS</span>
</div>
</a>

 <div class="parent-wrapper label-1">
    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-user">
        <li class="collapsed-nav-item-title d-none">CMS
        </li>
       
        
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('template') }}">
        <div class="d-flex align-items-center text-dark"><span class="nav-link-text"><i class="fa-solid fa-circle me-1 mb-1 bullet-items"></i>Templates</span>
        </div>
    </a>
    <!-- more inner pages-->
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('custom.content') }}">
        <div class="d-flex align-items-center text-dark"><span class="nav-link-text"><i class="fa-solid fa-circle me-1 mb-1 bullet-items"></i>Custom Content</span>
        </div>
    </a>
    <!-- more inner pages-->
    </li>
   
    </ul>
</div>

</div>
</li>    
</ul>
</div>
</div>
    <div class="navbar-vertical-footer">
      <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current URL path
        var currentUrl = window.location.href;

        console.log('Current Url: ' + currentUrl);

        // Loop through each nav-link in the sidebar
        document.querySelectorAll('.nav-link').forEach(function (link) {
            if (currentUrl.includes(link.href)) {
                // nav-link-text
                let textParent = link.parentNode.parentNode.parentNode.parentNode;
                console.log(textParent);

                // Check if textParent or any of its children contains the 'nav-link-text' class
                if (textParent.querySelector('.nav-link-text')) {
                    // If found, apply the desired styles or class
                    textParent.querySelector('.nav-link-text').style.color = 'blue'; // Example: make it blue
                    textParent.querySelector('.nav-link-text').classList.add('active');
                    // console.log('dfgdg');
                } else {
                    console.log('No element with class nav-link-text found in textParent or its children.');
                }

                // Add active class to the current link
                link.classList.add('active');
                // let parentText = document.querySelector('.nav-link-text');
                link.classList.add('active');

                // Expand the parent section if it's collapsible
                var parentCollapse = link.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');
                }

               
            }
        });
    });
</script>