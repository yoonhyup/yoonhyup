<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Map api Test </title>
		<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=Jl4znfGeB1KtUib0zjdI"></script>  
</head>
<body>
 <div id="map" style="width:800;height:600px;"></div>

 	 <script>
 	 	var mapOptions = {
     center: new naver.maps.LatLng(37,3595704,125.105399),
     zoom: 10 	 	
		}; 	 		   
 	 	
		var map = new naver.maps.Map('map', mapOptions);
 	 	
 	 	</script>
</body>    