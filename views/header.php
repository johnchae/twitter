<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://johnchae-com.stackstaging.com/twitter/styles.css">

    <title>Twitter Clone</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="http://johnchae-com.stackstaging.com/twitter/">Twitter Clone</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  	  </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="?page=yourtimeline">Your Timeline<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=yourtweets">Your Tweets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <?php if ($_SESSION['id']) { ?>
            <a class="btn btn-outline-success" href="?function=logout">Logout</a>
          <?php } else { ?>
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Login/Signup</button>
          <?php } ?>
        </div>
      </div>
    </nav>