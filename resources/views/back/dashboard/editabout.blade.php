<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Olanep Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/theme/favicon.svg') }}">
    <!-- Template CSS -->
    <link href="{{ url('public/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="{{ url('public\images\theme\logo.png')}}" class="logo" alt="Olanep Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="{{ route('dashboard.index') }}"> <i class="fa fa-home" aria-hidden="true"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.category.index') }}"> <i class="fa fa-shopping-basket" aria-hidden="true"></i>

                        <span class="text">Categories List</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.product.index') }}"> <i class="fa fa-shopping-bag" aria-hidden="true"></i>


                        <span class="text">products List</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.orders.index') }}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="text">Orders</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.product.create') }}"> <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </i>
                        <span class="text">Add product</span>
                    </a>
    
                </li>
                
                
                <li class="menu-item">
                    <a class="menu-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="text">Account</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.reviews.index') }}"> <i class="fa fa-bell" aria-hidden="true"></i>

                        <span class="text">Reviews</span>
                    </a>
                </li>
            
            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="fa fa-cog" aria-hidden="true"></i>

                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href="page-settings-1.html">Setting sample 1</a>
                        <a href="page-settings-2.html">Setting sample 2</a>
                    </div>
                </li>
                
            </ul>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    
                   
                    
                    
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> {{ auth('cms')->User()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="{{ route('back.profile.edit') }}"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('back.password.edit') }}"><i class="material-icons md-settings"></i>change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('back.logout') }}"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="row">
                <div class="col-9">


                    <div class="content-header">
                        <h2 class="content-title">Write About Page Details</h2>

                        <form action="{{ route('back.about.update',[$about->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <button class="btn btn-md rounded font-sm hover-up">Publish</button>
                            </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="title" class="form-label">About title</label>
                                <input type="text" placeholder="Type here"
                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ $about->title }}">
                                @error('title')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="row gx-3">
                                
                                
                                
                            
                        </div>
                    </div><br><br>
                    </div> <!-- card end// -->
                    <div class="card mb-8">
                    
                            <div>
                                <label for="content" class="form-label">content</label>
                                <textarea placeholder="Type here" class="form-control @error('content') is-invalid @enderror " rows="4" id="content" name="content">{{ $about->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> <!-- card end// -->
                    <div class="card mb-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div>
                                    <label class="form-label">Images</label>
                                    <input class="form-control @error('pics') is-invalid @enderror " type="file" accept="image/*" multiple id="pics"
                                        name="pics[]">
    
                                        @error('pics')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                 <div class="row" id="img-container"></div>
    
                                 <div class="row">
                                @foreach ($about->images as  $image)
                                <div class="col-3">
                                    <img src="{{ url("public/images/{$image}") }}" class="img-fluid mt-3" alt="" srcset="">
                                </div>
                                    
                                @endforeach
                                 </div>
    
                                </div>
                            </div>
    
                        </div> <!-- card end// -->
                </div>

                    </div> <!-- card end// -->
                </div>
            </div>
        </section>
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> ©, olanep - Developed By Dipson Pokharel .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="C:\xamp\htdocs\ecom\resources\js\back\script.js" type="text/javascript"></script>

    <script src="{{ url('public/js/back.js') }}"></script>
    <script src="{{ url('public/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/select2.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('public/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/chart.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ url('public/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/js/custom-chart.js') }}" type="text/javascript"></script>

</html>
