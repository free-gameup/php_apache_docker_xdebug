<?php
// php周りの設定 確認用
phpinfo();

$view_data = [];
$menu_list = [
	['name' => 'TODOアプリ - vue練習用', 'href' => 'todo.php']
];
$view_data['menus'] = $menu_list;
$view_data_json = json_encode($view_data);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ZONOプロジェクト</title>
	<!-- axios -->
	<script src="https://cdn.jsdelivr.net/npm/axios@0.17.1/dist/axios.min.js"></script>
	<!-- vue -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
	<script id="json-vue" data-json="<?php echo htmlspecialchars($view_data_json); ?>"></script>
</head>

<body>
<h2>ZONO PROJECT2</h2>
<div>
	<!-- header -->
</div>
<div>
	<!-- main -->
	<div id="menu">
		<!-- left side -->
		<p>{{ menu_title }}</p>
		<div v-for="menu in menus">
			<a v-bind:href="menu.href">{{ menu.name }}</a>
		</div>
	</div>
</div>
<div>
	<!-- footer -->
	<footer>Copyright ZONO PROJECT All rights reserved.</footer>
</div>
<script>
	// get json from element
    var vue_json = JSON.parse(document.getElementById('json-vue').dataset.json);

	var menu = new Vue({
		el: '#menu',
		data: {
			menu_title: 'メニューリスト',
			menus: vue_json['menus']
		}
	})
</script>
</body>
</html>
