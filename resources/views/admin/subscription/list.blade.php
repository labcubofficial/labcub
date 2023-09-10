@extends('admin.master.dashboard_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@section('content')
	{{-- DataTable Start --}}
	<table class="table" border="1" id="table">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Subscribed Date</th>
			</tr>
		</thead>
		<tbody>
			{{-- DataTable --}}
		</tbody>
	</table>
	{{-- DataTable End --}}
@endsection

<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#table').DataTable({
	    	processing: true,
	    	serverSide: true,
	    	ajax: "{{ route('subscription.index') }}",
	    	columns: [
	    		{ data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
	        	{ data: 'name', name: 'name' },
	        	{ data: 'email', name: 'email' },
	        	{ data: 'status', name: 'status' },
	        	{ data: 'created_at', name: 'created_at' }
	    	]
		});
	});

</script>

