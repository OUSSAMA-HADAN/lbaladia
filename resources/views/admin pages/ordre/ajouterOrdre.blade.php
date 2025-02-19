<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'ordre</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="container">
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
        
        <div class="content">
            <form action="{{ route('ordres.store') }}" method="POST" class="text-right" enctype="multipart/form-data">
                @csrf
                <div class="container mt-5">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Formulaire Professionnel</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="utilisateur" class="form-label">Utilisateur</label>
                                        <select class="form-select" id="idUtilisateur" name='idUtilisateur'>
                                            <option value="">Choisissez un utilisateur</option>
                                            @foreach($utilisateurs as $utilisateur)
                                                <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="dateDebut" class="form-label">Date Début</label>
                                        <input type="date" class="form-control" id="dateDebut" name='dateDebut'>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dateArrivee" class="form-label">Date Arrivée</label>
                                        <input type="date" class="form-control" id="dateArrivee" name='dateArrivee'>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dateFin" class="form-label">Date Fin</label>
                                        <input type="date" class="form-control" id="dateFin" name='dateFin'>
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="transport" class="form-label">Transport</label>
                                        <select class="form-select" id="transport" name='transport'>
                                            <option value="">Choisissez un moyen de transport</option>
                                            <option value="Voiture">Voiture</option>
                                            <option value="Train">Train</option>
                                            <option value="Avion">Avion</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="destination" class="form-label">Destination</label>
                                        <input type="text" class="form-control" id="destination" name='destination'>
                                    </div>
                                </div>
            
                                <div class="mb-3">
                                    <label for="objectif" class="form-label">Sujet</label>
                                    <textarea class="form-control" id="sujet" rows="3" name='objectif'></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">attache l'ordre de mission</label>
                                    <input type="file" class="form-control" id="file_path" name="file_path">
                                </div>
            
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>

            </form>
        

    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
