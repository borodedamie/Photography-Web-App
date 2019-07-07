@extends('layouts.adminHeader')

@section('content')

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Create New Event</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{!! route('admin.index') !!}">Admin Home</a></li>
                                <li><a href="{{ route('admin.newEvent') }}">Event</a></li>
                                <li class="active">New Event</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> 

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
                    <div class="card-body card-block">
                        {!! Form::open(array('route' => 'admin.storeEvent','method'=>'POST','files'=>'true')) !!}
                        
                        <div class="col-6">
                        <div class="form-group">
                                {!! Form::label('event_title','Title:') !!}
                                <div class="">
                                {!! Form::text('event_title', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('event_title', '<p class="alert alert-danger">:message</p>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                            {!! Form::label('start_date','Start Date:') !!}
                            <div class="">
                            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                            {!! Form::label('end_date','End Date:') !!}
                            <div class="">
                            {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                            </div>
                        </div>

                        <div class="col-12"> &nbsp;<br/>
                        {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                        </div>
                        </div>
                        </div>
               {!! Form::close() !!}
            </div>
        </div>
        </div>

        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>
    

        <script>
            $(document).ready(function(){
                $("#reset-btn").click(function(){
                    $("#eventForm").trigger("reset");
                });
            });
        </script>
    
@endsection