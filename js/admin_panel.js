$(document).ready(function(){

	$('.action').live('click', function(event){
		var action_id = $(this).attr('id');
		$('#btn_add').attr('visibility','visible');
		$('#data').load('admin_panel_info_ajax.php', {action_id: action_id});
	});

	$('.edit').live('click', function(event){
		$(this).parent().children().children().removeAttr('disabled');
		$(this).attr('class', 'save');
	});

	$('.save').live('click', function(event){
		$(this).parent().children().children().attr('disabled', 'disabled');
		$(this).attr('class', 'edit');

	});

	$('.del').live('click', function(event){
		var id = $(this).parent().attr('id');
		var del = $(this).parent();
		var item = $(this).parent().parent().attr('id');
		$('#status').text(id);
		$.post('admin_delete_ajax.php', {id: id, item: item},
			function(data){
				if(data == 0){
					del.fadeOut(10);
					$('#status').text('Запись удалена.').css('color', 'green');				}
				else if(data == 2)
				{
					$('#status').text('Нельзя удалить запись!').css('color', '#800');
				}
				else{
					$('#status').text('Не удалось удалить запись.').css('color', '#800');
				}
			}
		);
	});
});