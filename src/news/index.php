<!DOCTYPE html>
<html lang="en">
  <head>
        <title>FCSTAC | News</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="/stylesheets/news.css">
		<link rel="stylesheet" type="text/css" href="/stylesheets/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style>
			.news-header{
				font-weight: 200;
				font-size: 50px;
			}
			.news-link{
				font-weight: 200;
				font-size: 30px;
			}
			body{
				width:100%;
			}
		</style>
	</head>
    <body>
      <?php include'../navbar.php';?>
           <div class="container-fluid text-center" id="main">
				<div class="row">
					<div class="col-md-12">
						 <h1 style="font-weight: 200; font-size:60px;">Archived News Letters</h1>
					</div>
					<news-list class="col-md-12"></news-list>
					<div class="col-md-12" id="loading">
						<p>LOADING...</p>
					</div>
					<div class="col-md-12">
						<br>
						<img src="http://adelledavis.org/wp-content/uploads/2010/06/DSC00817_t479.jpg" />
						<img class="col-md-12" src="/images/Banner.png" />
					</div>
				</div>
			</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/riot/3.9.4/riot+compiler.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="news/news-list.tag" type="riot/tag"></script>
		<script>
			fetch('/news/news-list.json').catch(function(err){
				throw "Network Error";
			}).then(function(response){
				return response.json()
			}).catch(function(err){
				throw "Parse Error"
			}).then(function(json){
				riot.mount('news-list', json);
				document.getElementById('loading').style.display = 'none';
			});
		</script>
	</body>
</html>
