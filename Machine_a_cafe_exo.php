<!DOCTYPE html>
<html>
<head>
	<title>Exo PHP Machine a café</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Projet machine à café</h1>
<div class="container">
  <h2>selection de la boisson</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">boisson</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
      <div class="dropdown">
    	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">sélection nombre de sucre
    	<span class="caret"></span></button>
    	<ul class="dropdown-menu">
      		<li><a href="#">1</a></li>
      		<li><a href="#">2</a></li>
      		<li><a href="#">3</a></li>
      		<li><a href="#">4</a></li>
      		<li><a href="#">5</a></li>
    	</ul>
  	</div>
    	<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body