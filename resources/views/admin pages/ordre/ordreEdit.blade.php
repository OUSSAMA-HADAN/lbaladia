<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable A4 Template</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @if ($errors->any())
    <x-alert type="danger">
        Errors :
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
    @endif

    <form action="{{ route('ordres.update' , $order->id) }}" method="POST" class="text-right" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container mt-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Formulaire Professionnel</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input value="{{ old('nom' , $order->utilisateur->nom) }}" type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input value="{{ old('prenom' , $order->utilisateur->prenom) }}" type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="dateDebut" class="form-label">Date Début</label>
                            <input value="{{ old('dateDebut' , $order->dateDebut) }}" type="date" class="form-control" id="dateDebut" name="dateDebut" required>
                        </div>
                        <div class="col-md-4">
                            <label for="dateArrive" class="form-label">Date Arrivée</label>
                            <input value="{{ old('dateArrive' , $order->dateArrive) }}" type="date" class="form-control" id="dateArrive" name="dateArrive" required>
                        </div>
                        <div class="col-md-4">
                            <label for="dateFin" class="form-label">Date Fin</label>
                            <input value="{{ old('dateFin' , $order->dateFin) }}" type="date" class="form-control" id="dateFin" name="dateFin" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="transport" class="form-label">Transport</label>
                            {{-- <select class="form-select" id="transport" name="transport" required>
                                <option value="Voiture" {{ old('transport', $order->transport) == 'Voiture' ? 'selected' : '' }}>Voiture</option>
                                <option value="Train" {{ old('transport', $order->transport) == 'Train' ? 'selected' : '' }}>Train</option>
                                <option value="Avion" {{ old('transport', $order->transport) == 'Avion' ? 'selected' : '' }}>Avion</option>
                                <option value="Autre" {{ old('transport', $order->transport) == 'Autre' ? 'selected' : '' }}>Autre</option>
                            </select> --}}

                            <input type="text" name="transport" class="form-control" id="transport" value="{{ old('transport', $order->transport)}}">
                        </div>
                        <div class="col-md-6">
                            <label for="destination" class="form-label">Destination</label>
                            <input value="{{ old('destination' , $order->destination) }}" type="text" class="form-control" id="destination" name="destination" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="objectif" class="form-label">Sujet</label>
                        <textarea class="form-control" id="objectif" rows="3" name="objectif" required>{{ old('objectif' , $order->objectif) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">attache l'ordre de mission</label>
                        <input type="file" class="form-control" id="file_path" name="file_path" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
