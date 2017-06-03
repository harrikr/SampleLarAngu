<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5 and Angular CRUD Application</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div class="container">
        <h2>API DB MOVIE</h2>
        <div>
          @foreach($genredata['genres'] as $client)
          <tr>
            <td><a href="{{$client['id']}}">{{$client['name']}}</a></td>
          </tr>
          @endforeach
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Overview</th>
                <th>Picture</th>
                <th>Vote</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data['results'] as $clients)
              <tr>
                <td>{{$clients['title']}}||{{$clients['id']}}</td>
                <td>{{$clients['overview']}}</td>
                <td><a href="{{url('lihat',$clients['id'])}}"><img height="42" width="42" src="http://image.tmdb.org/t/p/w500/{{$clients['poster_path']}}"></a></td>
                <td>{{$clients['vote_count']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      </html>