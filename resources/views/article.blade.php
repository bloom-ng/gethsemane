<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Article | {{$post->title}}</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<x-nav />

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{Voyager::image($post->image)}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$post->title}}</h1>
            
            <span class="meta">
              on {{$post->created_at}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {!! $post->body !!}
        </div>
      </div>
    </div>
  </article>

  <hr>
    <div class="container my-3">
        <h3>More Articles</h3>
        @foreach($more_posts as $more_post)

        <a class="text-black-50 " href="/articles/{{$more_post->slug}}"> {{$more_post->title}}</a> <br>
        @endforeach
        <br>
    </div>
  <!-- Footer -->
<x-footer />

</body>

</html>
