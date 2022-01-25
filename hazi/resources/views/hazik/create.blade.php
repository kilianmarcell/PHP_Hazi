<!DOCTYPE html>
<html lang="hu">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Házi hozzáadása</title>
     <link rel="stylesheet" href="{{ asset('css/hazi.css') }}">
</head>
<body>
     <div>
          <h1>Új házi</h1>
          @if ($errors->any())
               @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
               @endforeach
          @endif

          <p><a href="{{ route('hazik.index') }}">Vissza a főoldalra</a></p>
          <form method='POST' action="{{ route('hazik.store') }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div>
                    Url:<br>
                    <input type="text" name="url">
               </div>
               <div>
                    Szöveges értékelés:<br>
                    <input type="text" name="szoveges_ertekeles">
               </div>
               <div>
                    Pontszám:<br>
                    <input type="number" name="pontszam_ertekeles">
               </div>
               <div>
                    <input type="submit" value="Create">
               </div>
          </form>
     </div>
</body>
</html>