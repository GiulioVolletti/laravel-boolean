<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel boolean</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <h1> Macchine </h1>

    <div class="container">
      @foreach ($cars as $car)
        <div class="car-stile">      
          <h2>{{$car['name']}}</h2>
          <h2>{{$car['tipe']}}</h2>
          <h2>{{$car['model']}}</h2>
        </div>      
      @endforeach
    </div>
    

  </body>
</html>
