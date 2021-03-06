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
          <p><a href="{{ route('hazik.index') }}">Vissza a főoldalra</a></p>
          <form method='POST' action="{{ route('hazik.store') }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div>
                    <selection class="kitoltendo">Url:</selection><br>
                    <input type="text" name="url" value="{{ old('url') }}">
                    @error('url')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection class="kitoltendo">Szöveges értékelés:</selection><br>
                    <input type="text" name="szoveges_ertekeles" value="{{ old('szoveges_ertekeles') }}">
                    @error('szoveges_ertekeles')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
               <selection class="kitoltendo">Pontszám:</selection><br>
                    <input type="number" name="pontszam_ertekeles" value="{{ old('pontszam_ertekeles') }}">
                    @error('pontszam_ertekeles')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <input type="submit" value="Create">
               </div>
          </form>
     </div>
</body>
</html>
