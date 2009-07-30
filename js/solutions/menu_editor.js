$(document).ready(function() {
	var url = '/dummy.php';

	$('#main table td').click(function() {
		var $this = $(this);
		if ($this.hasClass('eip')) { return; }

		$this.addClass('eip');
		var value = $this.text();
		var id = $this.closest('tr').attr('data-id') || 'new';
		var type = $this.attr('data-type');

		var $input = $('<input type="text" />').val(value);
		var $submit = $('<input type="button" value="Save" />');

		$this.empty().append($input).append($submit);

		$submit.click(function(e) {
			e.preventDefault();
			var val = $input.val();

			$.ajax({
				url : url,
				type : 'post',
				data : type + '=' + val + '&id=' + id,
				success : function(resp) {
					console.log(resp);
					$this.html(val);
				}
			});
		});
	});
});