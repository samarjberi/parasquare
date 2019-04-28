<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet"
  <href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    
     <ul>
  
  <li style="float:right" class="topnav"><a class="active"  href="{{url('login')}}">êtes-vous un administrateur? </a></li>
</ul>

 

    <div class="s01">
      <form>
        <fieldset>
          <legend>chercher votre produit</legend>
        </fieldset>
        <div class="inner-form" action="/search" method="POST" role="search" name="q">
          <div class="input-group">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="Que cherchez-vous?" class="form-control" />
          </div>
        </div>
          

          <div class="input-field third-wrap">
            <button class="btn-search" type="button">chercher <span class="glyphicon glyphicon-search"></span>
            </button>
          </div>
        </div>
        
      </form>
      <div class="container">
      @if(isset($details))
      <p> The Search results for your query <b> {{ $query }} </b> are :</p>
      <h2>details</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($details as $chercher)
          <tr>
            <td>{{$chercher->name}}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
      @elseif(isset($message))
      <p>{{ $message }}</p>
      @endif
    </div>
    </div>

  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
