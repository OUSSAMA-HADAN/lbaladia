@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    .sidebar1{
        width: 250px;
    }
    .button1{
        width: 110%;
    }
    .button1>a{
        border-radius: 10px;
    }
    .button2{
        width: 110%;
    }
</style>
<body>
<div class="d-flex">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0 bg-dark text-light w-100" style="background-color: #d9d9d9 !important; border: 1px solid black">
            <div class="d-flex flex-column vh-100 ms-2 sidebar1"><br><br><hr>
                <div class="list-group flex-grow-1 mt-auto p-3 button1 text-center"><br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #e48e1e !important;">Accueil</a><br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #e48e1e !important;">Raports</a><br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #e48e1e !important;">Statistics</a><br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #e48e1e !important;">Archive</a><br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #e48e1e !important;">Gestion Foncionnaire</a><br>
                </div>
                <div class="mt-auto p-3">
                    <button class="btn btn-danger button2">Logout</button>
                </div>
            </div>
        </div>

        <div class="col-md-9 ms-auto">
        </div>
    </div>
</div>
</body>