@extends('layouts.adminHeader')

@section('content')

        <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>All Feedbacks</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{!! route('admin.index') !!}">Admin Home</a></li>
                                <li class="active">Feedback</li>
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
                                    <th scope="col">Feedback</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($feedbacks as $feedback)
                                    <tr>
                                        <th scope="row">{!! $feedback->feedback_id !!}</th>
                                        <td>{!! $feedback->feedback !!}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class='btn btn-primary btn-xs'><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="" class='btn btn-danger btn-xs' id="deleteFeedback" data-id="{{ $feedback->feedback_id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
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
                $('#deleteFeedback').click(function(e){
                    e.preventDefault();

                    var obj = $(this).parents("tr");
                    $.ajaxSetup({
                        headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('admin.destroyFeedback', [ $feedback->feedback_id ]) }}",
                        method: 'DELETE',
                        data: {
                            id: $(this).data("id")
                        },
                        success: function(result){
                            obj.remove();

                            console.log(result);
                        }
                    });
                });
            });
        </script>
    
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
    