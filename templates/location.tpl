<div id='menu'><ul class="menu"><li><a href="index.php">Главная</a></li><li><a href="map.php">Карта зоопарка</a></li><li><a href="animal.php">Животные</a></li><li>График работы</li><li><a href="contacts.php">Контакты</a></li></ul></div>
<div id='content'>
	<div id='left'>
	</div>
	<div id='right'>
		<table border="0">
			<thead>
				<tr><td><b>Место</b></td><td><b>Время работы</b></td></tr>
			</thead>
			<tbody>
				{foreach from=$location key=k item=v}
					<tr><td>{$k}</td><td>{$v}</td></tr>
					{foreachelse}
					<tr><td>Зоопарк временно не работает.</td></tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>