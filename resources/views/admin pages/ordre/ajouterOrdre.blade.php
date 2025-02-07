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
    <div class="container">
        <div class="header">

            <p class="d-flex justify-content-start">المملكة المغربية <br>
                وزارة الداخلية <br>
                ولاية جهة الشرق <br>
                عمالة وجدة أنكاد<br>
                جماعة وجدة<br>
                المديرية العامة للمحصالح</p>
            <h1>أمر بمهمة</h1>
        </div>
        <div class="content">
            <form action="" method="POST" class="text-right">
                @csrf
                <div class="container mt-5">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Formulaire Professionnel</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prenom" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" required>
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="dateDebut" class="form-label">Date Début</label>
                                        <input type="date" class="form-control" id="dateDebut" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dateArrivee" class="form-label">Date Arrivée</label>
                                        <input type="date" class="form-control" id="dateArrivee" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dateFin" class="form-label">Date Fin</label>
                                        <input type="date" class="form-control" id="dateFin" required>
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="transport" class="form-label">Transport</label>
                                        <select class="form-select" id="transport" required>
                                            <option value="">Choisissez un moyen de transport</option>
                                            <option value="Voiture">Voiture</option>
                                            <option value="Train">Train</option>
                                            <option value="Avion">Avion</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="destination" class="form-label">Destination</label>
                                        <input type="text" class="form-control" id="destination" required>
                                    </div>
                                </div>
            
                                <div class="mb-3">
                                    <label for="sujet" class="form-label">Sujet</label>
                                    <textarea class="form-control" id="sujet" rows="3" required></textarea>
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
