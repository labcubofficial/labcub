@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category</h1>
		<div>
			<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="refresh-category">Refresh</button>
			<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="add-category">Add Category</button>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Category List</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="table" width="100%" cellspacing="0">
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
			</div>
		</div>
	</div>

</div>
@endsection

<script type="text/javascript">
	$(document).ready(function() {
		$('#add-category').on('click', function() {
			$('#category_id').val(0);
			$('#category-modal').toggle();
		});
		$('#close').on('click', function() {
			$('#category-modal').hide();
		});


		var table = $('#table').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('category.index') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'category_name',
					name: 'category_name'
				},
				{
					data: 'image',
					name: 'image'
				},
				{
					data: 'status',
					name: 'status'
				},
				{
					data: 'action',
					name: 'action'
				},
			]
		});


		$('#form-submit').on('submit', function() {
			$('#loading').show();
			e.preventDefault();
			var formdata = $('#form-submit').serialize();
			$.ajax({
				url: "{{ route('category.store') }}",
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
		$(document).on('click', '.delete', function(event) {
			let confirm_del = confirm('Are you sure you want to delete!');
			if (confirm_del) {
				event.preventDefault();
				var id = $(this).data('id');
				$.ajax({
					type: 'DELETE',
					url: "{{ route('category.destroy', ':id') }}".replace(':id', id),
					data: {
						_token: "{{ csrf_token() }}"
					},
					success: function(response) {
						table.draw();
					},
					error: function(response) {
						console.log('Error', response);
					}
				});
			}
		});

		// Edit Data in Ajax
		$(document).on('click', '.edit', function() {
			$('#loading').show();
			var id = $(this).data('id');
			$.ajax({
				type: 'GET',
				url: "{{ route('category.edit', ':id') }}".replace(':id', id),
				success: function(response) {
					$('#category_name').val(response.category_name);
					if (response.category_name == '1') {
						$('#status').val(1);
					} else {
						$('#status').val(0);
					}
					$('#submit').val('Update');
					$('#category_id').val(response.id);
					$('#old_image').val(response.image);
					$('#loading').hide();
					$('#category-modal').show();
				},
				error: function(response) {
					console.log('Error', response);
				}
			});
		});

		// Refresh Data
		$('#refresh-category').on('click', function() {
			table.draw();
		});
	});
</script>