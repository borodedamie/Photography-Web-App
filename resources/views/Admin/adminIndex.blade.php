@extends('layouts.adminHeader')

@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Frontpage</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Admin Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 

        <!-- session message -->

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
                    <div class="card-body card-block">
                        <form action="{!! route('admin.updateBanner') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="text-input" class=" form-control-label">Name:</label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="text-input" name="company_name" placeholder="" class="form-control" value="{{ $banner[0]->company_name }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col col-md-3" style="">
                                        <label for="textarea-input" class=" form-control-label">Motto:</label>
                                    </div>
                                    <div class="col-12 col-lg-6 "><textarea name="motto" id="textarea-input" rows="5" placeholder="Content..." class="form-control">{{ $banner[0]->description }}</textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="textarea-input" class=" form-control-label">Address:</label>
                                </div>
                                <div class="col-12 col-lg-6 "><textarea name="address" id="textarea-input" rows="5" placeholder="" class="form-control">{{ $banner[0]->address }}</textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="text-input" class=" form-control-label">City:</label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="text-input" name="city" placeholder="" class="form-control" value="{{ $banner[0]->city }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="text-input" class=" form-control-label">Email:</label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="text-input" name="email_address" placeholder="opeoluborode@yahoo.com" class="form-control" value="{{ $banner[0]->email }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="text-input" class=" form-control-label">Phone Number:</label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="text-input" name="phone_number" placeholder="+2348135019640" class="form-control" value="{{ $banner[0]->phone_number }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3" style="">
                                    <label for="text-input" class=" form-control-label">Opening & Closing time:</label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="text-input" name="opening_closing_time" placeholder="Mon to Fri 9am to 6 pm" class="form-control" value="{{ $banner[0]->opening_closing_time }}">
                                </div>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
            </div>
        </div>
        </div>
   

    
        <!-- Right Panel -->
       

    <!-- Right Panel -->

    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>


    {{-- <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script> --}}


@endsection
