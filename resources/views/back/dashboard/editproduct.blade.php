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
                        <h2 class="content-title">Edit Product</h2>

                        <form action="{{ route('back.product.update',[$product->id]) }}" method="post"

                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <button class="btn btn-md rounded font-sm hover-up">Edit</button>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $product->name }}">
                                @error('name')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-4  mb-3">
                                    <label for="product_sku"
                                        class="form-label @error('product_sku') is-invalid @enderror">SKU</label>
                                    <input type="text" placeholder="Type here" class="form-control"
                                        id="product_sku" name="product_sku" value="{{ $product->sku }}">
                                    @error('product_sku')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4  mb-3">
                                    <label for="product_color"
                                        class="form-label @error('product_color') is-invalid @enderror">Color</label>
                                    <input type="text" placeholder="Type here" class="form-control"
                                        id="product_color" name="product_color" value="{{ $product->color }}">
                                    @error('product_color')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4  mb-3">
                                    <label for="product_size"
                                        class="form-label @error('product_size') is-invalid @enderror">Size</label>
                                    <input type="text" placeholder="Type here" class="form-control"
                                        id="product_size" name="product_size" value="{{ $product->size }}">

                                    @error('product_size')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="product_brand"
                                    class="form-label @error('product_brand') is-invalid @enderror">Brand</label>
                                <input type="text" placeholder="Type here" class="form-control"
                                    id="product_brand" name="product_brand">
                                @error('product_brand')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> <!-- card end// -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">summary</label>
                                <textarea placeholder="Type here" class="form-control @error('summary') is-invalid @enderror " rows="4" id="summary" name="summary">{{ $product->summary }}</textarea>
                                @error('summary')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control @error('Description') is-invalid @enderror " rows="4" id="description" name="description">{{ $product->summary }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> <!-- card end// -->
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
                            @foreach ($product->images as  $image)
                            <div class="col-3">
                                <img src="{{ url("public/images/{$image}") }}" class="img-fluid mt-3" alt="" srcset="">
                            </div>
                                
                            @endforeach
                             </div>

                            </div>
                        </div>

                    </div> <!-- card end// -->
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label @error('price') is-invalid @enderror ">Price</label>
                                <input type="text" placeholder="Type here" class="form-control " id="price"
                                    name="price" value="{{ $product->price }}">

                                    @error('price')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Discounted Price</label>
                                <input type="text" placeholder="Type here" class="form-control @error('discounted_price') is-invalid @enderror " id="discounted_price" name="discounted_price" value="{{ $product->discounted_price }}">
                                @error('discounted_price')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="form-label"> Status</label>
                                <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                  <option value="Active" @selected(old('status',$product->status)== 'Active')>Active</option>
                                  <option value="InActive" @selected(old('status',$product->status)== 'InActive')>InActive</option>
          
          
                                </select>
                                @error('status')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                               </div>


                               <div class="mb-4">
                                <label for="featured" class="form-label"> Feature Your Product</label>
                                <select name="featured" id="featured" class="form-select @error('featured') is-invalid @enderror">
                                  <option value="No" @selected(old('featured')== 'No')>No</option>
                                  <option value="Yes" @selected(old('featured')== 'Yes')>Yes</option>
          
          
                                </select>
                                @error('featured')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                               </div>

                               <div class="mb-4">
                                <label for="popular" class="form-label"> Is This Your Product Popular</label>
                                <select name="popular" id="popular" class="form-select @error('popular') is-invalid @enderror">
                                  <option value="No" @selected(old('popular')== 'No')>No</option>
                                  <option value="Yes" @selected(old('popular')== 'Yes')>Yes</option>
          
          
                                </select>
                                @error('popular')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                               </div>



                            <hr>
                            <h5 class="mb-3">Categories</h5>

                            <div class="mb-4">
                                <label for="category_id" class="form-label"> Category</label>
                                <select name="category_id" id="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected(old('category_id',$product->category_id) == $category->id)>
                                            {{ $category->name }}</option>
                                    @endforeach

                                    @error('category_id')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror

                                </select>

                                    </form>

                                    
                            </div>






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
</body>

</html>
