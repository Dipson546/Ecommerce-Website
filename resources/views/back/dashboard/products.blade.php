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
                <img src="{{ url('public\images\theme\logo.png') }}" class="logo" alt="Olanep Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="{{ route('dashboard.index') }}"> <i class="fa fa-home"
                            aria-hidden="true"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.category.index') }}"> <i class="fa fa-shopping-basket"
                            aria-hidden="true"></i>

                        <span class="text">Categories List</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.product.index') }}"> <i class="fa fa-shopping-bag"
                            aria-hidden="true"></i>


                        <span class="text">products List</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.orders.index') }}"> <i class="fa fa-shopping-cart"
                            aria-hidden="true"></i>
                        <span class="text">Orders</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.product.create') }}"> <i class="fa fa-cart-plus"
                            aria-hidden="true"></i>
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
                    <a class="menu-link" href="{{ route('back.reviews.index') }}"> <i class="fa fa-bell"
                            aria-hidden="true"></i>

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
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i
                        class="material-icons md-apps"></i> </button>
                <ul class="nav">




                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount"
                            aria-expanded="false"> {{ auth('cms')->User()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="{{ route('back.profile.edit') }}"><i
                                    class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('back.password.edit') }}"><i
                                    class="material-icons md-settings"></i>change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('back.logout') }}"><i
                                    class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header><!-- card-header end// --><br>
        <aside>
            <div>
                <a href="{{ route('back.product.create') }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </aside>

        @foreach ($products as $product)
            <div class="card-body">
                <article class="itemlist">
                    <div class="row align-items-center">

                        <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                            <a class="itemside" href="#">
                                <div class="left">
                                    <img src="{{ url("public/images/{$product->thumbnail}") }}"
                                        class="img-sm img-thumbnail" alt="Item">
                                </div>
                                <div class="info">
                                    <h6 class="mb-0">{{ $product->name }}</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-price">
                            @empty($product->dicounted_price)
                                <span> Rs. {{ number_format($product->price) }}</span>
                            @else
                                <span> Rs. {{ number_format($product->discounted_price) }}</span>
                                <br>
                                <small class="text-muted text-decoration-line-through">Rs.
                                    {{ number_format($product->price) }}</small>
                            @endempty
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4 col-status">
                            <span class="badge rounded-pill alert-success">{{ $product->status }}</span>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-4 col-category">
                            <span>{{ $product->category->name ?? 'null' }}</span>
                        </div>


                        <div class="col-lg-1 col-sm-2 col-4 col-date">
                            <span>{{ $product->featured }}</span>
                        </div>



                        <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                            <a href="{{ route('back.product.edit', [$product->id]) }}"
                                class="btn btn-sm font-sm rounded btn-brand">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <form action="{{ route('back.product.destroy', [$product->id]) }}" method="get">
                                <button type="submit" class="btn btn-sm font-sm btn-danger mt-1 rounded">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div> <!-- row .// -->
                </article> <!-- itemlist  .// -->
               



            </div> <!-- card-body end// -->
            </div> <!-- card end// -->
        @endforeach


        <br>


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
