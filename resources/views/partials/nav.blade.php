
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    span{
        color: white;
    }
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
        </a>

        <div class="mx-auto page-title">Accueil</div>

        <div class="d-flex align-items-center">
            <div
            <span class="">User Name</span><br>
            <span class="">000000000000</span></div>
            <img src="{{ asset('storage/images/logo.png') }}" alt="User" class="rounded-circle me-2">
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>