<div id='menu'><ul class="menu"><li><a href="index.php">Главная</a></li><li><a href="map.php">Карта зоопарка</a></li><li>Животные</li><li><a href="schedule.php">График работы</a></li><li><a href="contacts.php">Контакты</a></li></ul></div>
<div id='content'>
	<div id='left'>
		<p>Виды животных:</p>
		<ul id="vid">
			{foreach from=$vids key=k item=val}
				<li class="vid_id" id="{$k}">{$val}</li>
			{foreachelse}
				<li>Животных нет.</li>
			{/foreach}
		</ul>
	</div>
	<div id='right'></div>
</div>