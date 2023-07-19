<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gethsemane District HQ | Articles</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <x-nav />

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Articles</h1>
            <span class="subheading">Be edified</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @forelse($posts as $post)
        <div class="post-preview">
          <a href="/articles/{{$post->slug}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
              {{$post->excerpt}}
            </h3>
          </a>
          <p class="post-meta">
            on {{$post->created_at}}</p>
        </div>
        <hr>
        @empty
            <p>No Published Articles.</p>
        @endforelse
        
        <hr>
        <!-- Pager -->
        <div class="clearfix">
            {{$posts->links()}}
          
        </div>
      </div>
    </div>
  </div>

  

  <x-footer />

</body>

</html>
