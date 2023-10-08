@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@section('content')
	<div>
		<div class="header-button">
			<button id="refresh-category" class="btn btn-primary">Refresh</button>
			<button id="add-category" class="btn btn-primary">Add Category</button>
		</div>
	</div>
	<h1>Category</h1>

	{{-- DataTable Start --}}
	<table class="table" border="1" id="table">
		<thead>
			<tr>
				<th>S.No</th>
				<th>Category Name</th>
				<th>Image</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			{{-- DataTable --}}
		</tbody>
	</table>
	{{-- DataTable End --}}

	{{-- Modal Form Start --}}
	<div id="category-modal" class="modal">
		<div id="modal-content" class="modal-content">
			<div class="modal-close d-flex justify-content-rig">
				<span id="close" class="btn btn-danger close">&times;</span>
			</div>
			{!! Form::open(['id'=>'form-submit', 'class' => '', 'files' => 'true']) !!}
				<div>
	    			{!! Form::label('parent_category', 'Parent Category') !!}<br>
	    			{!! Form::select('parent_category',$parent_category,['Select'],['class' => 'form-control']) !!}
				</div>
				<div>
		    		{!! Form::label('category_name', 'Category Name') !!}<br>
	    			{!! Form::text('category_name',null,['class' => 'form-control']) !!}
	    			@error('category_name')
	    				<div class="error">
	    					<span class="error-message">email</span>
	    				</div>
	    			@enderror
				</div>
				<div>
		    		{!! Form::label('image', 'Category Image') !!}<br>
	    			{!! Form::file('image',null,['class' => 'form-input']) !!}
				</div>
				<div>
		    		{!! Form::label('status', 'Status') !!}
	    			{!! Form::checkbox('status', 1, true, ['class' => 'form-check-input']) !!}
				</div>
				<div class="d-flex justify-content-rig">
	    			{!! Form::submit('Add',['class'=>'btn btn-primary', 'id'=>'submit']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
	{{-- Modal Form End --}}

	{{-- Delete Modal Start --}}
	<div class="modal">
		<div class="modal-content">
			<button class="btn btn-lite">Cancel</button>
			<button class="btn btn-danger">Delete</button>
		</div>
	</div>
	{{-- Delete Modal End --}}

@endsection

<script type="text/javascript">
	$(document).ready(function() {
		$('#add-category').on('click',function() {
			$('#category-modal').toggle();
		});
		$('#close').on('click',function() {
			$('#category-modal').hide();
		});

		
		var table = $('#table').DataTable({
        	processing: true,
        	serverSide: true,
        	ajax: "{{ route('subcategory.index') }}",
        	columns: [
        		{ data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            	{ data: 'category_name', name: 'category_name' },
            	{ data: 'image', name: 'image' },
            	{ data: 'status', name: 'status' },
            	{ data: 'action', name: 'action' },
        	]
    	});


    	$('#form-submit').on('submit',function() {
    		e.preventDefault();
    		var formdata = $('#form-submit').serialize();
    		$.ajax({
    			url: "{{ route('subcategory.store') }}",
    			type: 'POST',
        		data: formData,
        		dataType: 'json',
        		success: function(response) {
            		$('#form-submit').trigger('reset');
            		table.draw();
        		},
        		error: function(response) {
            		console.log(response);
        		}
    		});
    	});

    	// Delete Data in Ajax
    	$(document).on('click','.delete',function(event){
    		let confirm_del = confirm('Are you sure you want to delete!');
    		if(confirm_del){
    			event.preventDefault();
	    		var id = $(this).data('id');
	    		$.ajax({
	    			type: 'DELETE',
	    			url: "{{ route('subcategory.destroy', ':id') }}".replace(':id', id),
	    			data: {_token: "{{ csrf_token() }}"},
	    			success: function(response){
	    				table.draw();
	    			},
	    			error: function(response){
	    				console.log('Error', response);
	    			}
	    		});
    		}else{
    			console.log('canceled');
    		}
    	});

    	// Edit Data in Ajax
    	$(document).on('click','.edit', function(){
    		$('#category-modal').show();
    	});

    	// Refresh Data
    	$('#refresh-category').on('click', function(){
    		table.draw();
    	});
	});
</script>