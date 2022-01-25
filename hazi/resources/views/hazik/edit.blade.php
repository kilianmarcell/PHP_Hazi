<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Szerkesztés</title>
    <link rel="stylesheet" href="{{ asset('css/hazi.css') }}">
</head>
<body>
     <div>
          <p><a href="{{ route('hazik.index') }}">Vissza a főoldalra</a></p>
          
          <form method='POST' action="{{ route('hazik.update', $haziertekeles->id) }}">
               @method('PATCH')
               @csrf
               <div>
                    Person:<br>
                    <input type="text" name="person" value="{{ $haziertekeles->person }}">
               </div>
               <div>
                    Height:<br>
                    <input type="number" name="height" value="{{ $haziertekeles->height }}">
               </div>
               <div>
                    Price:<br>
                    <input type="number" name="price" value="{{ $haziertekeles->price }}">
               </div>
               <div>
                    <input type="submit" value="Edit">
               </div>
          </form>
     </div>
</body>
</html>