@extends('layouts.adminHeader')

@section('content')

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>{{ $service->service_title }} Details</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            {{-- <ol class="breadcrumb text-right">
                                <li class="active">Dashboard</li>
                            </ol> --}}
                        </div>
                    </div>
                </div>
            </div> 
        
            <div class="row form-group" style="margin-top: 30px;">
                    <div class="col col-md-3" style="margin-left: 50px;">
                        <label for="text-input" class=" form-control-label">Service Title:</label>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><a href="">{{ $service->service_title }}</a></p>
                    </div>
            </div>

            <div class="row form-group">
                    <div class="col col-md-3" style="margin-left: 50px;">
                        <label for="text-input" class=" form-control-label">Service Description:</label>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><a href="">{{ $service->service_description }}</a></p>
                    </div>
            </div>
            <div class="row form-group">
                    <div class="col col-md-3" style="margin-left: 50px;">
                        <label for="text-input" class=" form-control-label">Service Image:</label>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="/img/service/{{ $service->service_image}}" type= "file" width="300px"/>
                    </div>
            </div>
            <div class="class">
                <a class="btn btn-outline-info" href="{{ route('admin.services')}}" role="button" style="margin-left: 400px; margin-bottom: 30px;">Back</a>
            </div>
    </div>
    


        <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>
    

        <script src="{{ URL::asset('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/dashboard.js') }}"></script>
        <script src="{{ URL::asset('js/widgets.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    
    
@endsection