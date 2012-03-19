$(document).ready(function() {

	$('.vid_id').live('click', function(event){
		var vid_id = $(this).attr('id');
		$('#right').load('animal_ajax.php', {vid_id: vid_id})
	})
});