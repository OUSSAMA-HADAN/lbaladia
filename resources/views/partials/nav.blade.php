@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    .navbar {
        margin-bottom: 20px;
    }
    .navbar-brand img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 50%;
    }
    .navbar .page-title {
        font-size: 18px;
        font-weight: 500;
    }
    
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light  text-light " style="background-color: #d9d9d9 !important; border-bottom: 1px solid black">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
        </a>

        <div class="mx-auto page-title border border-dark border-2 rounded-pill text-primary p-2">Accueil</div>

        <div class="d-flex align-items-center">
            <div>
            <span class=" text-primary ">User Name</span><br>
            <span class=" text-primary border-top border-dark">000000000000</span></div>
            <img src="{{ asset('storage/images/profil.png') }}" alt="User" class="rounded-circle me-2" height="50px" width="50px">
            </div>
        </div>
    </div>
</nav>
