<x-master>
    @section('main')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 d-flex">
                <input type="text" class="form-control me-2" placeholder="Search...">
                <button class="btn btn-primary d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.442 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"/>
                    </svg>
                </button>
            </div>
            <div class="col-md-4 text-end">
                <a class="btn btn-success" href="{{route("admin.ordre")}}">Nouveau Ordre de Mission</a>
            </div>
            </div>
        </div>
    </div>
    <div class="mt-5" style="max-height: 50vh; overflow-y: auto;">
        <table class="table table-bordered border-dark">
            <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                <tr>
                    <th class="col-3">Destination</th>
                    <th>Sujet</th>
                    <th class="col-3">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td  style="background-color: #ffc271;">Row 1, Cell 1</td>
                    <td  style="background-color: #ffc271;">Row 1, Cell 2</td>
                    <td  style="background-color: #ffc271;">Row 1, Cell 2</td>
                </tr>
                <tr >
                    <td style="background-color: #8c8282;">Row 2, Cell 1</td>
                    <td style="background-color: #8c8282;">Row 2, Cell 2</td>
                    <td style="background-color: #8c8282;">Row 2, Cell 2</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
</html>


    @endsection
</x-master>
