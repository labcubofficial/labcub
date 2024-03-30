@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@section('content')
<div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
	<!-- title -->
	<h1 class="text-xl text-white">Category</h1>
	<a href="{{ route('category.create') }}" class="btn bg-white text-gray-800 border-gray-600 hover:bg-gray-100 hover:text-gray-800 hover:border-gray-200 active:bg-gray-100 active:text-gray-800 active:border-gray-200 focus:outline-none focus:ring-4 focus:ring-indigo-300">
		Add Category
	</a>
</div>
<div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-12 xl:grid-cols-12">
	<div class="card h-full shadow">
		<div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
			<!-- title -->
			<div>
				<h4>Category List</h4>
			</div>
		</div>

		<div class="relative overflow-x-auto">
			<!-- table -->
			<table class="text-left w-full whitespace-nowrap">
				<thead class="text-gray-700">
					<tr>
						<th scope="col" class="border-b bg-gray-100 px-6 py-3">S. No</th>
						<th scope="col" class="border-b bg-gray-100 px-6 py-3">Category Name</th>
						<th scope="col" class="border-b bg-gray-100 px-6 py-3">Image</th>
						<th scope="col" class="border-b bg-gray-100 px-6 py-3">Status</th>
						<th scope="col" class="border-b bg-gray-100 px-6 py-3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($category as $item)
					<tr>
						<td class="border-b border-gray-300 font-medium py-3 px-6 text-left">{{ $item->id }}</td>
						<td class="border-b border-gray-300 font-medium py-3 px-6 text-left">{{ $item->category_name }}</td>
						<td class="border-b border-gray-300 font-medium py-3 px-6 text-left"><img src="{{ url('media/category/') }}" alt="{{ $item->category_name }}" /></td>
						<td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
							<span class="bg-{{ ($item->status)?'green':'red' }}-100 px-2 py-1 text-{{ ($item->status)?'green':'red' }}-700 text-sm font-medium rounded-md">{{ ($item->status)?'Active':'Inactive' }}</span>
						</td>
						<td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
							<a type="button" href="{{ route('category.edit', $item->id) }}" class="btn gap-x-2 bg-blue-700 text-white border-blue-700 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">Edit</a>
							<a type="button" href="{{ url('admin/category/delete').'/'.$item->id }}" class="btn gap-x-2 bg-red-600 text-white border-red-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-700 active:border-red-700 focus:outline-none focus:ring-4 focus:ring-red-300">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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