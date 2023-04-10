<!DOCTYPE html>
<html>
<head>
	<title>Historia ime</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit-btn").click(function(e){
				e.preventDefault();
				var uname = $("#uname").val();
				var password = $("#password").val();
				$.ajax({
					url: "histori-php.php",
					method: "POST",
					data: { uname: uname, password: password },
					success: function(data){
						var history = JSON.parse(data);
						var html = "<ul>";
						for(var i = 0; i < history.length; i++) {
							html += "<li>" + history[i].id_booking + " - " + history[i].id_countries + "</li>";
						}
						html += "</ul>";
						$("#history").html(html);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h1>Historia ime</h1>
	<form action="histori-php.php">
		<label>Username:</label>
		<input type="text" id="uname"><br>
		<label>Password:</label>
		<input type="password" id="password">
		<button type="submit" id="submit-btn" value="Shiko historine" >Shiko Historine</button>
	</form>
	<div id="history"></div>
</body>
</html>