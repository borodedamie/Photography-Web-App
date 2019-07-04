@extends('layouts.adminHeader')

@section('content')

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Services</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{!! route('admin.index') !!}">Admin Home</a></li>
                                <li class="active">Services</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> 
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Service</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <th scope="row">{!! $service->id !!}</th>
                                    <td>{!! $service->service_title !!}</td>
                                    <td>{!! $service->service_description !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.showService', [ $service->id ]) }}" class='btn btn-primary btn-xs'><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('admin.editService', [ $service->id ]) }}" class='btn btn-success btn-xs'><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                            <a href="#" class='btn btn-danger btn-xs'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
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

        <script>
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
    </script>
    
@endsection