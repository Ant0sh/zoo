<div id='menu'><ul class="menu"><li><a href="index.php">�������</a></li><li><a href="map.php">����� ��������</a></li><li><a href="animal.php">��������</a></li><li>������ ������</li><li><a href="contacts.php">��������</a></li></ul></div>
<div id='content'>
	<div id='left'>
	</div>
	<div id='right'>
		<table border="0">
			<thead>
				<tr><td><b>�����</b></td><td><b>����� ������</b></td></tr>
			</thead>
			<tbody>
				{foreach from=$location key=k item=v}
					<tr><td>{$k}</td><td>{$v}</td></tr>
					{foreachelse}
					<tr><td>������� �������� �� ��������.</td></tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>