@extends('layouts.user2')

@section('content')
    @include('components.userHeader2')

     <!-- Content Wrapper -->
     <article> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> product tracking </h2>
                            <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                        </div>
                    </div>
                    <div class="col-sm-4">                        
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>                                   
                            <li class="active">Track</li>
                        </ol>
                    </div>  
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- Tracking -->
        <section class="pt-50 pb-120 tracking-wrap">    
            <div class="theme-container container ">  
                <div class="row pad-10">
                    <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                        <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                        <div class="row">
                            <form method="POST" action="{{ route('user.tracking.search') }}">
                                @csrf
                                <div class="col-md-7 col-sm-7">
                                    <div class="form-group">
                                        <input type="text" name="tracking_number" placeholder="Enter your tracking number" required 
                                               class="form-control box-shadow" value="{{ old('tracking_number') }}">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="form-group">
                                        <button type="submit" class="btn-1">Track Package</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @error('tracking_number')
                            <div class="font-2 fs-20 mt-3 text-capitalize text-center text-danger">{{ $message }}</div>
                        @enderror
                    </div>    
                </div>
                <div class="row">
                    <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s"> 
                        <img alt="" src="assets/img/block/product-1.jpg" />
                    </div>
                    <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                        <div class="prod-info white-clr">
                            <ul>
                                <li> <span class="title-2">Product Name:</span> <span class="fs-16">iPhone 6 Boxed</span> </li>
                                <li> <span class="title-2">Product id:</span> <span class="fs-16">9034215</span> </li>
                                <li> <span class="title-2">order date:</span> <span class="fs-16">21st Feb, 2016</span> </li>
                                <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr">On Process</span> </li>
                                <li> <span class="title-2">weight (kg):</span> <span class="fs-16">0.85 KG</span> </li>
                                <li> <span class="title-2">order type:</span> <span class="fs-16">Basic ($50)</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    @isset($tracking)
                        <div class="col-md-3">
                            <div class="info-box">
                                <h3 class="title-2">Receiver Information</h3>
                                <ul>
                                    <li class="font-2">Name: {{ $tracking->address->client->firstName }} {{ $tracking->address->client->lastName }}</li>
                                    <li class="font-2">Phone: {{ $tracking->address->client->phone }}</li>
                                    <li class="font-2">Email: {{ $tracking->address->client->email }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h3 class="title-2">Address Information</h3>
                                <ul>
                                    <li class="font-2">Address: {{ $tracking->address->address }}</li>
                                    <li class="font-2">City: {{ $tracking->address->city }}</li>
                                    <li class="font-2">State: {{ $tracking->address->state }}</li>
                                    <li class="font-2">ZIP: {{ $tracking->address->zipCode }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h3 class="title-2">Package Details</h3>
                                <ul>
                                    <li class="font-2">Name: {{ $tracking->package->package_name }}</li>
                                    <li class="font-2">Weight: {{ $tracking->package->weight }}kg</li>
                                    <li class="font-2">Description: {{ $tracking->package->description }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h3 class="title-2">Tracking Status</h3>
                                <ul>
                                    <li class="font-2">Status: {{ $tracking->package_status }}</li>
                                    <li class="font-2">Ship Date: {{ $tracking->ship_date->format('M d, Y') }}</li>
                                    <li class="font-2">Est. Delivery: {{ $tracking->delivery_date->format('M d, Y') }}</li>
                                </ul>
                            </div>
                        </div>
                    @endisset
                </div>
                {{-- <div class="progress-wrap mt-40">
                    @foreach($tracking->history as $status)
                    <div class="progress-step {{ $status->is_current ? 'active' : '' }}">
                        <span class="status-dot"></span>
                        <div class="status-info">
                            <p class="fs-12">{{ $status->location }}</p>
                            <p class="fs-12">{{ $status->created_at->format('M d') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div> --}}
            </div>
        </section>
        <!-- /.Tracking -->

    </article>

    <!-- Footer -->
    @include('components.footer')
@endsection
