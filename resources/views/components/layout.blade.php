<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <title>
   PFE_GC Rayen
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{url('kit-m/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('kit-m/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
   <!-- Alpine.js -->
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('kit-m/assets/css/material-kit.css?v=3.0.4')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="index-page bg-gradient-dark" >
  <x-flash-message />
  <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
    <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
      <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-sm-3"  rel="tooltip" title="Designed and Coded by Creative Tim"  href="/">
          PFE_GC
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
          <ul class="navbar-nav navbar-nav-hover ms-auto">
            <li class="nav-item mx-2">
              <div class="input-group">
                <form action="/">
                    
                      <span class="input-group-text text-body">
                        <button class="navbar   blur border-radius-xl top-0 z-index-fixed shadow my 9   " type="submit" >
                        <i class="fas fa-search" aria-hidden="true"></i>
                      </button>
                      </span>
                    
                   <input type="text" name="search" class="form-control" placeholder="Type here...">
                   
                </form>
                  </div></li>
            <li class="nav-item dropdown dropdown-hover mx-2">
              
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                Pages
                <img src="{{url('kit-m/assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                <div class="d-none d-lg-block">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        Landing Pages
      </h6>
      <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
        <span>About Us</span>
      </a>
      <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
        <span>Contact Us</span>
      </a>
      <a href="./pages/author.html" class="dropdown-item border-radius-md">
        <span>Author</span>
      </a>
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
        Account
      </h6>
      <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
        <span>Sign In</span>
      </a>
    </div>
    
    <div class="d-lg-none">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        Landing Pages
      </h6>
    
      <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
        <span>About Us</span>
      </a>
      <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
        <span>Contact Us</span>
      </a>
      <a href="./pages/author.html" class="dropdown-item border-radius-md">
        <span>Author</span>
      </a>
    
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
        Account
      </h6>
      <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
        <span>Sign In</span>
      </a>
    
    </div>
    
              </div>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                Sections
                <img src="{{url('kit-m/assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                <div class="d-none d-lg-block">
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
              <span class="text-sm">See all sections</span>
            </div>
            <img src="{{url('kit-m/assets/img/down-arrow.svg')}}" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
            Page Headers
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
            Features
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
              <span class="text-sm">See all navigations</span>
            </div>
            <img src="{{url('kit-m/assets/img/down-arrow.svg')}}" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
            Navbars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
            Nav Tabs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
            Pagination
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
              <span class="text-sm">See all input areas</span>
            </div>
            <img src="{{url('kit-m/assets/img/down-arrow.svg')}}" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
            Inputs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
            Forms
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
              <span class="text-sm">See all examples</span>
            </div>
            <img src="{{url('kit-m/assets/img/down-arrow.svg')}}" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
            Alerts
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
            Modals
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
            Tooltips & Popovers
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
              <span class="text-sm">See all elements</span>
            </div>
    
            <img src="{{url('kit-m/assets/img/down-arrow.svg')}}" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
            Avatars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
            Badges
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
            Breadcrumbs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
            Buttons
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
            Dropdowns
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
            Progress Bars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
            Toggles
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
            Typography
          </a>
        </div>
      </li>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12">
        <div class="d-flex mb-2">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
          Page Headers
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
          Features
        </a>
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-laptop text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
          Navbars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
          Nav Tabs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
          Pagination
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-badge text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
          Inputs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
          Forms
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-notification-70 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
          Alerts
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
          Modals
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
          Tooltips & Popovers
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-app text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
          Avatars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
          Badges
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
          Breadcrumbs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
          Buttons
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
          Dropdowns
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
          Progress Bars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
          Toggles
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
          Typography
        </a>
      </div>
    </div>
    
              </ul>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">article</i>
                Docs
                <img src="{{url('kit-m/assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
      <ul class="list-group">
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" >
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
            <span class="text-sm">All about overview, quick start, license and contents</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" >
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
            <span class="text-sm">See our colors, icons and typography</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
            <span class="text-sm">Explore our collection of fully designed components</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
            <span class="text-sm">Check how you can integrate our plugins</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" >
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
            <span class="text-sm">For those who want flexibility, use our utility classes</span>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12 g-0">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </a>
      </div>
    </div>
    
              </ul>
            </li>
            @auth
            <li class="nav-item ms-lg-auto">
              <ul class="list-group">
              <span class="nav-link ps-2 d-flex cursor-pointer align-items-center">Welcome {{auth()->user()->name}}    <i class="fa-solid fa-house"></i></span>
              
              </ul>
            </li>
            <li class="nav-item ms-lg-auto">
              <form class="nav-link nav-link-icon me-2" method="POST" action="/logout">
                @csrf
                <button type="submit"  class="btn btn-danger  mb-0 me-1 mt-2 mt-md-0 ">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  logout
                </button>

              </form>
            </li>
            @else
            <li class="nav-item ms-lg-auto">
              <a class="nav-link nav-link-icon me-2" href="/register" >
                <i class="fa-solid fa-user-plus"></i>
                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sign Up">Register</p>
              </a>
            </li>
            <li class="nav-item ms-lg-auto">
              <a class="nav-link nav-link-icon me-2" href="/login" >
                <i class="fa-solid fa-right-to-bracket"></i>
                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="connexion">Login</p>
              </a>
            </li>
            @endauth
            
            <li class="nav-item my-auto ms-3 ms-lg-0">
              
              <a  class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0" href="/listings/create">Post Job</a>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    </div></div></div>
    
       
        <section>
       {{$slot}}
      
        </section>
        <footer class="footer bg-gray-200 pt-5 mt-5">
          <div class="container">
            <div class=" row">
              <div class="col-md-3 mb-4 ms-auto">
                <div>
                 
                    <img src="{{url('kit-m/assets/img/logo-ct-dark.png')}}" class="mb-3 footer-logo" alt="main_logo">
                 
                  <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
                </div>
                <div>
                  <ul class="d-flex flex-row ms-n3 nav">
                    <li class="nav-item">
                      <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                        <i class="fab fa-facebook text-lg opacity-8"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                        <i class="fab fa-twitter text-lg opacity-8"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                        <i class="fab fa-dribbble text-lg opacity-8"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                        <i class="fab fa-github text-lg opacity-8"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                        <i class="fab fa-youtube text-lg opacity-8"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                  <h6 class="text-sm">Company</h6>
                  <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        About Us
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Freebies
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Premium Tools
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Blog
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                  <h6 class="text-sm">Resources</h6>
                  <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                      <a class="nav-link" href="https://iradesign.io/" target="_blank">
                        Illustrations
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Bits & Snippets
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" target="_blank">
                        Affiliate Program
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                  <h6 class="text-sm">Help & Support</h6>
                  <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Contact Us
                      </a>
                    </li>
                   
                   
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Sponsorships
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                  <h6 class="text-sm">Legal</h6>
                  <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Terms & Conditions
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Privacy Policy
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  target="_blank">
                        Licenses (EULA)
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12">
                <div class="text-center">
                  <p class="text-dark my-4 text-sm font-weight-normal">
                    All rights reserved. Copyright © <script>
                      document.write(new Date().getFullYear())
                    </script> PFE_GC <a target="_blank">Rayen</a>.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      

        <script src="{{url('kit-m/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{url('kit-m/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{url('kit-m/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
        <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
        <script src="{{url('kit-m/assets/js/plugins/countup.min.js')}}"></script>
        <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
        <script src="{{url('kit-m/assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript"></script>
        <script>
          // get the element to animate
          var element = document.getElementById('count-stats');
          var elementHeight = element.clientHeight;
      
          // listen for scroll event and call animate function
      
          document.addEventListener('scroll', animate);
      
          // check if element is in view
          function inView() {
            // get window height
            var windowHeight = window.innerHeight;
            // get number of pixels that the document is scrolled
            var scrollY = window.scrollY || window.pageYOffset;
            // get current scroll position (distance from the top of the page to the bottom of the current viewport)
            var scrollPosition = scrollY + windowHeight;
            // get element position (distance from the top of the page to the bottom of the element)
            var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;
      
            // is scroll position greater than element position? (is element in view?)
            if (scrollPosition > elementPosition) {
              return true;
            }
      
            return false;
          }
      
          var animateComplete = true;
          // animate element when it is in view
          function animate() {
      
            // is element in view?
            if (inView()) {
              if (animateComplete) {
                if (document.getElementById('state1')) {
                  const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                  if (!countUp.error) {
                    countUp.start();
                  } else {
                    console.error(countUp.error);
                  }
                }
                if (document.getElementById('state2')) {
                  const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                  if (!countUp1.error) {
                    countUp1.start();
                  } else {
                    console.error(countUp1.error);
                  }
                }
                if (document.getElementById('state3')) {
                  const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                  if (!countUp2.error) {
                    countUp2.start();
                  } else {
                    console.error(countUp2.error);
                  };
                }
                animateComplete = false;
              }
            }
          }
      
          if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
              stringsElement: '#typed-strings',
              typeSpeed: 90,
              backSpeed: 90,
              backDelay: 200,
              startDelay: 500,
              loop: true
            });
          }
        </script>
        <script>
          if (document.getElementsByClassName('page-header')) {
            window.onscroll = debounce(function() {
              var scrollPosition = window.pageYOffset;
              var bgParallax = document.querySelector('.page-header');
              var oVal = (window.scrollY / 3);
              bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
            }, 6);
          }
        </script>
       
    </body>
</html>