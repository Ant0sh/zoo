{if !isset($notVid) && is_array($animals)}
	<table id="animals">
		<thead>
			<tr>
				<td>Имя</td>
				<td>Пол</td>
				<td>Возраст</td>
				<td>Окрас</td>
				<td>День рождения</td>
				<td>Дата поступления</td>
			</tr>
		</thead>
		<tbody>
			{foreach from=$animals key=key item=arr}
				<tr id="{$key}">
				{foreach from=$arr item=val}
					<td>{$val}</td>
				{/foreach}
				</tr>
			{/foreach}
		</tbody>
	</table>
{else}
	{$notVid}
{/if}