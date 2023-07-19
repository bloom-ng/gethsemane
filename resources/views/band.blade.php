<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gethsemane District HQ</title>
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       
  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Core theme CSS (includes Bootstrap)
   <link href="css/styles.css" rel="stylesheet" />
-->
     
         <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

        <link href="/css/geths.css" rel="stylesheet" />
		
		
    </head>
    <body>
    <x-nav></x-nav>
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('assets/img/cross.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class=" col-md-12 mx-auto">
          <div class="site-heading">
            <h1 class=' '>Church Bands </h1>
          
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="container-fluid my-5">
        <table class="table my-5">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Logo</th>
                <th>President</th>
                <th>President Image</th>
                <th>Secretary</th>
                <th>Secretary Image</th>
            </tr>

            @foreach ($bands as $band)
                <tr>
                    <td>{{$loop->count}}</td>
                    <td>{{$band->name}}</td>
                    <td><img height="50px" width="50px" src="{{Voyager::image($band->logo)}}" /></td>
                    <td>{{$band->president}}</td>
                    <td><img height="100px" width="100px" src="{{Voyager::image($band->president_avatar)}}" /></td>
                    <td>{{$band->secretary}}</td>
                    <td><img height="100px" width="100px" src="{{Voyager::image($band->secretary_avatar)}}" /></td>
                </tr>
            @endforeach
        </table>

    </div>

    <x-footer />     
    </body>
</html>
