{if !isset($notVid) && is_array($animals)}
	<table id="animals">
		<thead>
			<tr>
				<td>���</td>
				<td>���</td>
				<td>�������</td>
				<td>�����</td>
				<td>���� ��������</td>
				<td>���� �����������</td>
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