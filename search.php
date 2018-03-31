<?php
include("config.php");
include("access.php");
?>

<html>
<head>
	<title>поиск</title>
	<?php
		include "include.php";
	?>
</head>
<body>
	<div class="container">
			<?php
		include "private.php";
	?>
	<div class="button">
		<form>
			<input type="text" name="поиск" placeholder="ПОИСК" id="searchInput" class="input"><br>
		</form>
	</div>
	<div class="whitebox3" id="photoContainer">
		
	</div>
	</div>
	<script type="text/javascript">
		$("#searchInput").keyup(function(){
			$("#photoContainer").html("");
			var txt=$("#searchInput").val();
			$.get("/search_request.php", {"txt":txt},function(data){
				var photos = JSON.parse(data);
				for(var i = 0; i < photos.length; i++) {
					var photo = photos[i];
					var tmp = "<a  href=\"/photo.php?id="+photo.id+"\" class=\"photobox\"><div class=\"img-container\">\
					<img src=\""+photo.photo+"\">\
				</div>\
				<div class=\"txt\">\
					"+photo.txt+"\
				</div></a>";
					$("#photoContainer").append(tmp);
					console.log(photo);
				}
			});
		});
	</script>
</body>
</html>