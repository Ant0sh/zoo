{if is_array($info)}
<table class="info">
	<thead>
	<tr>
		{foreach from=$head item=val}
			<td>{$val}</td>
		{/foreach}
	</tr>
	</thead>
	<tbody id="{$item}">
		{foreach from=$info key=key item=arr}
		<tr id="{$key}">
			{foreach from=$arr key=key item=val}
				{if ($item == 'vid_description' OR $item == 'animal_description') AND $key == 'description'}
					<td><textarea class="description" type="text" rows="10" name="{$key}" disabled="disabled">{$val}</textarea></td>
				{else}
					<td><input type="text" name="{$key}" value="{$val}" disabled="disabled"/></td>
				{/if}
			{/foreach}
			<td class="edit"></td>
			<td class="del"></td>
		</tr>
		{/foreach}
	</tbody>
</table>
	{else}
	<b>Данных нет!</b>
{/if}
<div id="status"></div>
<div class="btn" id="btn_add">Добавить</div>
<div id="add">
	<table id="add_info">
		<thead>
		<tr>
		{foreach from=$head item=val}
			<td>{$val}</td>
		{/foreach}
		</tr>
		</thead>
		<tbody>
		<tr>
			{foreach from=$head key=key item=val}
				<td><input type="text" name="{$key}"/></td>
			{/foreach}
		</tr>
		</tbody>
	</table>
	<div class="btn" id="btn_save">Сохранить</div>
</div>
