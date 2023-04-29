@extends('layouts.front')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Account
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#dashboard" role="tab" aria-controls="dashboard"
                                                aria-selected="false"><i
                                                    class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                                role="tab" aria-controls="orders" aria-selected="false"><i
                                                    class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        

                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#account-detail" role="tab" aria-controls="account-detail"
                                                aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#change-password" role="tab" aria-controls="Change-password"
                                                aria-selected="true"><i class="fi-rs-user mr-10"></i>Change Pssword</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="page-login-register.html"><i
                                                    class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Hello Rosie! </h5>
                                            </div>
                                            <div class="card-body">
                                                <p>From your account dashboard. you can easily check &amp; view your <a
                                                        href="#">recent orders</a>, manage your <a
                                                        href="#">shipping and billing addresses</a> and <a
                                                        href="#">edit your password and account details.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Your Orders</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    @if ($orders->isNotEmpty())
                                                        <table class="table">
                                                            <thead>

                                                                <tr>
                                                                    <th>Order</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ($orders as $order)
                                                                    <tr>
                                                                        <td>
                                                                            <ul>
                                                                            @foreach ($order->order_details as $detail)
                                                                                <li>{{ $detail->qty }} x 
                                                                                    @if ($detail->product != null)
                                                                                    {{ $detail->product->name }}
                                                                                   @else
                                                                                    Product not found
                                                                                  @endif 
                                                                                    Rs.{{ number_format($detail->price) }} =
                                                                                    Rs. {{ number_format($detail->total) }}
                                                                                </li>
                                                                            @endforeach
                                                                            </ul>
                                                                        </td>
                                                                        <td>{{ $order->created_at }}</td>
                                                                        <td>{{ $order->status }}</td>

                                                                    </tr>

                                                             @endforeach



                                                            </tbody>
                                                        </table>
                                                @else
                                                    <h4>No data found</h4>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Already have an account? <a href="page-login-register.html">Log in
                                                        instead!</a></p>
                                                <form method="post" name="enq" action="{{ route('front.profile.edit') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label> Name <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                             value="{{ old('name',$user->name) }}"   name="name" type="text" id="name" required>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label>Address<span class="required">*</span></label>
                                                            <textarea required class="form-control square"
                                                            name="address" type="text" id="address">{{ old('address',$user->address) }}</textarea>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email Address <span class="required">*</span></label>
                                                            <input required="" class="form-control  square text-plain"
                                                             id="email" value="{{old('email', $user->email) }}"   name="email" type="email" readonly>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label> Phone <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                             value="{{ old('phone',$user->phone) }}"   name="phone" type="text" id="phone" required>
                                                        </div>

                                                     
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-fill-out submit"
                                                                name="submit" value="Submit">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="change-password" role="tabpanel"
                                    aria-labelledby="change-password-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Change Password</h5>
                                        </div>
                                        <div class="card-body">
                                            
                                            <form method="post" name="enq" action="{{ route('front.profile.password') }}">
                                                @csrf
                                                    <div class="form-group col-md-12">
                                                        <label>Current Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square @error('old_password') is-invalid @enderror"
                                                            name="old_password" id="old_password" type="password">

                                                            @error('old_password')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>New Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square @error('new_password') is-invalid @enderror"
                                                            name="new_password" id="new_password" type="password">
                                                            @error('new_password')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror 

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Confirm Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square @error('password_confirmation') is-invalid @enderror"
                                                            name="password_confirmation" id="password_confirmation" type="password">

                                                            @error('password_confirmation')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                       @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-fill-out submit"
                                                            name="submit" value="Submit">Save</button>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <hr>

@endsection
