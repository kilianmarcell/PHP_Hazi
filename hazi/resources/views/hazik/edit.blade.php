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
          <form method='POST' action="{{ route('hazik.update', $hazi->id) }}">
               @method('PATCH')
               @csrf
               <div>
                    <selection class="kitoltendo">Url:</selection><br>
                    <input type="text" name="url" value="{{ $hazi->url }}">
               </div>
               <div>
                    <selection class="kitoltendo">Szöveges értékelés:</selection><br>
                    <input type="number" name="szoveges_ertekeles" value="{{ $hazi->szoveges_ertekeles }}">
               </div>
               <div>
                    <selection class="kitoltendo">Pontszám:</selection><br>
                    <input type="number" name="pontszam_ertekeles" value="{{ $hazi->pontszam_ertekeles }}">
               </div>
               <div>
                    <input type="submit" value="Edit">
               </div>
          </form>
     </div>
</body>
</html>