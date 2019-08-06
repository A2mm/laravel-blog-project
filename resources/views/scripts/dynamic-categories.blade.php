<script type="text/javascript">
	$(document).ready(function()
	{
		$('.temp-deleting-category').on('click', function(event)
			{
				event.preventDefault();
				var id= $(this).attr('id');
				$.ajax({
					url: '{{ route("category.temp_deleting") }}',
					type: 'GET',
					data: { 'id': id },
					success: function(data)
					{
					     $('.modal-title').html('Delete category data temporarily');
						 $('.modal-body').html(data);
						 $('#myModal').modal('show');	
					}
				});
			});

		$('.perm-deleting-category').on('click', function(event)
			{
				event.preventDefault();
				var id= $(this).attr('id');
				$.ajax({
					url: '{{ route("category.perm_deleting") }}',
					type: 'GET',
					data: { 'id': id },
					success: function(data)
					{
					     $('.modal-title').html('Delete category data permanently');
						 $('.modal-body').html(data);
						 $('#myModal').modal('show');	
					}
				});
			});
	});
</script>