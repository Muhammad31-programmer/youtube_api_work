<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2 class="text-center" style="text-decoration: underline;">IMPORT Videos from youtube using YOUTUBE API V3</h2>
	<div class="row">
		
	
	<?php
	// youtube api key
	$youtube_key="AIzaSyBpkrPUwVouYP0GTirxwoxwmNg_2-1N5v8";
	// base url
	$base_url="https://www.googleapis.com/youtube/v3/";
	// youtube channel id
	$channelID="UCZWoLZt3H3hVieIOSopBrbg";
	// number of videos
	$max_results=20;

	$API_URL=$base_url."search?order=date&part=snippet&channelId=".$channelID."&maxResults=".$max_results."&key=".$youtube_key;
	$videos=json_decode(file_get_contents($API_URL));
foreach ($videos->items as $data) {
?>
<div class="col-md-6">
<iframe width="500" height="300" src="https://www.youtube.com/embed/<?php echo $data->id->videoId?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php
}
?>
	
</div>
</div>
</body>
</html>