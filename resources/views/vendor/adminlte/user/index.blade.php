@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-16 col-md-offset-">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">User List</h3>

					</div>

					@if(session('success'))
					<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					{{ session('success') }}
					</div>
					@endif
					<div class="box-body">
						
               		<div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>Have pet</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Email Address</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = ($guides->currentPage() - 1)* $guides->perPage()+1; @endphp
                        @foreach($guides as $guide)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $guide->first_name  }}</td>
                                <td>{{ $guide->last_name  }}</td>
                                <td>{{ $guide->have_pet  }}</td>
                                <td>{{ $guide->city  }}</td>
                                <td>{{ $guide->state  }}</td>
                                <td>{{ $guide->email_address  }}</td>
                                <td><a href="{{ url('my_audio_pet/preview.php?entry_id='.$guide->id)  }}">View Certificate </a></td>

                                <td> 
                                <a href="javascript:void(0);"
                                       data-form="{{ 'deleteUser' . $guide->id }}"
                                       class="btn btn-sm btn- btn-danger btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="deleteUser{{ $guide->id }}"
                                          action="{{ route('deleteUser', ['id' => $guide->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>		
                                </td>
                                
                               
                            </tr>
                          @php $i++ @endphp  
                        @endforeach
                        </tbody>
                    </table>
                </div>
         	
					<div class="box-body">
						<div class="col-xs-12">
						<div class="center-block">
						{{ $guides->appends(Request::except('page'))->links() }}
						</div>
						</div>
					</div>  
				</div>
			</div>
		</div>
	</div>
</div>



	
@endsection
