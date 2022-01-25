<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házik</title>
    <link rel="stylesheet" href="{{ asset('css/hazi.css') }}">
</head>
<body>
    <div>
        <h1>Házi feladatok</h1>
        <a href="{{ route('hazik.create') }}"><button>Új házi hozzáadása</button></a>
        <table>
            <thead>
                <th>Url</th>
                <th>Szöveges értékelés</th>
                <th>Pontszámos értékelés</th>
            </thead>
            <tbody>
                @foreach ($hazik as $h)
                    <tr>
                        <td class="kozep">{{ $h->url }}</td>
                        <td class="sorkizart">{{ $h->szoveges_ertekeles }}</td>
                        <td class="kozep">{{ $h->pontszam_ertekeles }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
