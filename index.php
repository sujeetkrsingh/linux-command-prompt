<html>
<head>
	<title>Linux Command Prompt</title>
</head>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<style>
body{margin:0; font-size: 14px; font-family: arial}
h1{margin: 0; padding:10px 0 10px 10px; background: #467fc4; color: #fff; text-align: center; position: fixed; top:0; width:100%; font-weight: normal; font-size: 18px; text-transform: uppercase;}
#result{font-family:courier; padding:0 10px 10px 10px; font-size: 13px; overflow-y: auto; margin-bottom: 30px; margin-top: 35px}
#cmd{width:100%; padding:10px 0 10px 10px; position: fixed; bottom: 0; font-size: 15px; background: #f1f1f1; outline: 0}
</style>
<body onload="document.getElementById('cmd').focus()">
<h1>Linux Command Prompt</h1>
<div id='result'></div>
<input type='text' placeholder="Enter Linux Command Here" id="cmd" autocomplete="off" name='cmd' />
<script>
$('#cmd').bind("keypress", function(e) {
	if($('#cmd').val()=='clear'){
		$('#cmd').val('');
		$('#result').html('');
		return;
	}

	  var code = e.keyCode || e.which; 
	  if (code  == 13) {               
	    $.ajax({
	    	url:'execute.php',
	    	type:'post',
	    	data:{cmd:$('#cmd').val()},
	    	success:function(data){
	    		$('#result').append(data);
	    		$('#cmd').val('');
	    		document.getElementById('cmd').focus();
	    		$("body").animate({ scrollTop: $('body')[0].scrollHeight}, 1000);
	    	}
	    })
	  }
	});
</script>
</body>
</html>