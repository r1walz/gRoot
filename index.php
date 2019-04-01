<!DOCTYPE html>
<html>
<head>
    <title>Some interesting title</title>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<style>
    body,html{
        padding: 0;
        margin:0;
    }
    #content{
        text-align: center;
        position: absolute;
        top: 50%;
        margin-top: -150px;
        width: 100vw;
    }
    #image{
        height: 200px;
        width: 200px;
        border: 1px solid black;
        display: inline-block;
    }
    
</style>
</head>
<body>
    <div id="content">
    <img id="img" src="#"/>
    <input id="up" type="file" />

        <input type="text" placeholder="Name"/>
    </div>
<script>
	var jcrop_api;
	var canvas;
	var context;
	var image;
	var prefsize;
	var up = document.getElementById('up');
	up.onchange = function(){
		var image = up.files[0];
		console.log(image);
		var reader = new FileReader();
		reader.onloadend = function(){
			console.log(reader.result);
			img = document.createElement('img');
			img.src= reader.result;  //read.result contains the base64 code. Voh seedha src me laga ke bhi chal jata hai.Isko variable me store karva ke send kar de server side
			var li = document.createElement('li');
			//preview ke liye canvas use kar le,it'll be much more efficient
			li.appendChild(img);
			document.getElementById('list').appendChild(li);
		}
		reader.readAsDataURL(image); //this reads the base64 of the image. Iske upar vala block iske baad execute hota hai

	}
</script>
</body>
</html>