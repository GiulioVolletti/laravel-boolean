<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Macchine </h1>

    @foreach ($cars as $car)
    <div>      
      <h2>{{$car['name']}}</h2>
      <h2>{{$car['tipe']}}</h2>
      <h2>{{$car['model']}}</h2>
    </div>
    <hr>
    @endforeach

  </body>
</html>
