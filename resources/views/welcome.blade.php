<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List</title>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<h2>To Do List</h2>

<div id="showitems"></div>
<div><input type="text" id="list_item" size="35" name="list_item"></div>
<div><input type="Button" onclick="add_item(document.getElementById('list_item').value)" value="+ Add New Item"></div>
<div></div>
<div id="select_all_div">
    <input type="checkbox" name="select_all" id="select_all" value="1" onClick="update_all(this)">
	Select All<br/>
</div>


<hr />
</body>
</html>