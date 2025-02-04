<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 border py-2">Name et prenom</th>
                <td class="px-4 border py-2">{{$data["nom"] ." ". $data["prenom"]}}</td>
            </tr>
            <tr>
                <th class="px-4 border py-2">Poste</th>
                <td class="px-4 border py-2">{{$data["poste"]}}</td>
            </tr>
            <tr>
                <th class="px-4 border py-2">Module</th>
                <td class="px-4 border py-2">
                    @foreach ($data["module"] as $i)
                        <li>{{$i}}</li>
                    @endforeach
                </td>
            </tr>
        </thead>
      
</body>
</html>