<x-master>
    @section('main')
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>ADMIN</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>

        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search...">
                        <button class="btn btn-primary d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.442 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-md-4 text-end">
                        <a class="btn btn-success" href="{{ route('ordres.create') }}">Nouveau Ordre de Mission</a>
                    </div>
                </div>
            </div>
            </div>
            <x-tableCard :orders="$orders">
                <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                    <tr class="text-center">
                        <th class="col-3">Nom foncionnaire</th>
                        <th class="col-2">destination</th>
                        <th class="col-3">Sujet</th>
                        <th>etat de rembourcement</th>
                        <th class="col-2">Date</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)
                        <tr class="text-center">
                            <td style="background-color: #ffc271;">{{ $order->utilisateur->prenom }}
                                {{ $order->utilisateur->nom }}</td>
                            <td style="background-color: #ffc271;">{{ $order->destination }}</td>
                            <td style="background-color: #ffc271; font-size: small;">{{ $order->objectif }}</td>
                            <td style="background-color: #ffc271;">{{ $order->etatRemboursement }}</td>
                            <td style="background-color: #ffc271;">de:{{ $order->dateDebut }} <br> a:{{ $order->dateFin }}
                            </td>
                            <form action="{{ route('ordres.edit' , $order->id) }}" method="get">
                                @csrf
                                <td style="background-color: #ffc271;"><button class="btn btn-success">Edit</button>
                                </td>
                            </form>

                            <form action="{{ route('ordres.destroy' , $order->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td style="background-color: #ffc271;">
                                <button class="btn btn-danger"><i class="bi bi-trash me-1"></i></button>
                                </td>
                            </form>

                            {{-- <aclass=""></aclass=> --}}
                        </tr>
                    @endforeach
                </tbody>
            </x-tableCard>

        </body>

        </html>
    @endsection
</x-master>
