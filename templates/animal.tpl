<div id='menu'><ul class="menu"><li><a href="index.php">�������</a></li><li><a href="map.php">����� ��������</a></li><li>��������</li><li><a href="schedule.php">������ ������</a></li><li><a href="contacts.php">��������</a></li></ul></div>
<div id='content'>
	<div id='left'>
		<ul>
			{foreach from=$animals key=k item=v}
				<li><a class="vid_animal" href="animal.php?vid_id={$k}">{$v}</a></li>
			{foreachelse}
				<li>�������� ���.</li>
			{/foreach}
		</ul>
	</div>
	<div id='right'></div>
</div>