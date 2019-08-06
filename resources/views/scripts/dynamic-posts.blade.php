<script type="text/javascript">
	$(document).ready(function()
	{
		$('.temp-deleting-post').on('click', function(event)
			{
				event.preventDefault();
				var id= $(this).attr('id');
				$.ajax({
					url: '{{ route("post.temp_deleting") }}',
					type: 'GET',
					data: { 'id': id },
					success: function(data)
					{
					     $('.modal-title').html('Delete post data temporarily');
						 $('.modal-body').html(data);
						 $('#myModal').modal('show');	
					}
				});
			});

		$('.perm-deleting-post').on('click', function(event)
			{
				event.preventDefault();
				var id= $(this).attr('id');
				$.ajax({
					url: '{{ route("post.perm_deleting") }}',
					type: 'GET',
					data: { 'id': id },
					success: function(data)
					{
					     $('.modal-title').html('Delete post data permanently');
						 $('.modal-body').html(data);
						 $('#myModal').modal('show');	
					}
				});
			});
	});
</script>