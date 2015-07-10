var searchSubmit = function(e)
{
	e.preventDefault();
	
	var formData = $(this).serialize();

	$.ajax({
		method: "POST",
		url: $(this).attr('action'),
		data: formData,
		success: function(data, textStatus)
		{
			$('#content').html(data);
		}
	});
};

$(document).ready(function()
{
	$('#search-form form').submit(searchSubmit);
});