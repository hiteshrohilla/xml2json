<!DOCTYPE html>
<html>
<head>
	<title>Xml to HTML</title>
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
</head>
<body>
	<div id="status"></div>
	<textarea id="data"></textarea>
	<script type="text/javascript">
		$(document).ready(function(){
			var url = "http://www.w3schools.com/xml/note.xml"; // path of xml file comes here
			$.post('xml2json.php', { translate: url }, function(data,status) {
			    if(data!=404){
			    	var json = data
			    	$('#data').html(json);
			    	$('#status').html(status);
			    } else if(data==404||data=="Err!"){
			    	$('#data').html('');
			    	$('#status').html('fail');
			    }
			});
		});
	</script>
</body>
</html>