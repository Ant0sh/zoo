<div id='menu'><ul class="menu"><li><a href="index.php">�������</a></li><li><a href="map.php">����� ��������</a></li><li>��������</li><li><a href="schedule.php">������ ������</a></li><li><a href="contacts.php">��������</a></li></ul></div>
<div id='content'>
	<div id='left'>
		<p>���� ��������:</p>
		<ul id="vid">
			{if is_array($vids)}
				{foreach from=$vids key=k item=val}
					<li class="vid_id" id="{$k}">{$val}</li>
				{/foreach}
			{else}
				<li>����� �������� ���.</li>
			{/if}

		</ul>
	</div>
	<div id='right'></div>
</div>