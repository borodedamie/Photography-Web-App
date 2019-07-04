@extends('layouts.adminHeader')

@section('content')

        {{-- session --}}
        @if ($errors->any())
        <div class="alert alert-danger" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
    
    
        @if(Session::has('success'))
          <div id = "success-div" class="alert alert-success" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
              <div class = "text-center" >{{Session::get('success')}}

                <button style = "" type="button" class="close" onclick = "document.getElementById('success-div').style.display = 'none';" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> 
              </div>              
        
          </div>
        @endif

        <div class="col-lg-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $service->service_title }}</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('admin.updateService', [$service->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3" style="">
                                        <label for="text-input" class=" form-control-label">Service Title</label>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" id="text-input" name="service_title" placeholder="" class="form-control" value="{{ $service->service_title }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3" style="">
                                            <label for="" class="form-control-label">Service Image</label>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img name = "" class ="img-responsive" alt=" No image" width="400px" src ="/img/service/{{ $service->service_image}}">
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" >
                                        <label for="file-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-lg-6" style="">
                                        <input type="file" id="file-input" name="service_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3" style="">
                                            <label for="textarea-input" class=" form-control-label">Service Description</label>
                                        </div>
                                        <div class="col-12 col-lg-6"><textarea name="service_description" id="textarea-input" rows="9" placeholder="Write a brief description about your service..." class="form-control">{{ $service->service_description }}</textarea></div>
                                </div>
                                <div class="card-footer" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.services')}}" role="button">
                                        <i class="fa fa-minus-square-o"></i> Back 
                                    </a>   
                               </div>
                            </form>
                        </div>
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