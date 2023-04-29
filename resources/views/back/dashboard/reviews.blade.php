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
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Reviews</h2>
                </div>
               
            </div>
            <div class="card mb-4">
               
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($reviews->isNotEmpty())

                        <table class="table table-hover">
                                
                            <thead>
                                <tr>
                                    
                                    <th>Name</th>
                                    <th>comment</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($reviews as $review)
                                   
                                <tr>
                                    <td>{{ $review->user->name }}</td>

                                    <td>{{ $review->comment }}</td>
                                    <td>{{ $review->created_at }}</td>
                                    <td class="text-end">                                            

                                        <form action="{{ route('back.reviews.destroy',[$review->id]) }}" method="get">
                                            <button type="submit" class="btn btn-sm font-sm btn-danger mt-1 rounded">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>                                            </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $reviews->links() }}
                        @else
                        <h4 class="text-muted">No data found</h4>
                        @endif

                    </div> <!-- table-responsive//end -->
                </div>
                <!-- card-body end// -->
            </div>
            
        </section> <!-- content-main end// -->
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
</body>

</html>