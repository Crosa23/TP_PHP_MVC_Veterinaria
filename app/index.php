<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Vet NTD</title>
</head>

<body>
    <h1>Hola Grupo!!</h1>


    <nav class="navbar navbar-dark bg-dark fixed-top  py-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-light"><i class="bi bi-image me-3"></i>PetShop</a>

            <form action="#" class="d-flex">
                <input type="search" class="form-control me-2 rounded-pill" placeholder="Buscar">
                <button class="btn btn-primary  rounded-circle" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark navbar-nav navbar-nav-scroll" tabindex="-1" id="menuLateral" style="--bs-scroll-height: 100vh;">
                <div class="offcanvas-haeder d-flex justify-content-between my-3 px-3">
                    <h5 class="offcanvas-title">PET SHOP</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas"></button>
                </div>
                <form action="#" class="d-flex px-2 my-4">
                    <input type="search" class="form-control me-2 rounded-pill" placeholder="Buscar">
                    <button class="btn btn-primary  rounded-circle" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="d-flex flex-column">
                    <a href="#" class="d-flex mb-1 py-3 text-decoration-none text-light">
                        <i class="bi bi-person mx-3"></i>
                        <p class="m-0">Mi Cuenta</p>
                    </a>
                    <a href="#" class="d-flex mb-1 py-3 text-decoration-none text-light">
                        <i class="bi bi-megaphone mx-3"></i>
                        <p class="m-0">Novedades</p>
                    </a>
                    <a href="#" class="d-flex mb-1 py-3 text-decoration-none text-light">
                        <i class="bi bi-coin mx-3"></i>
                        <p class="m-0">Ofertas Increibles</p>
                    </a>
                </div>

                <div class="d-flex flex-column mt-3">
                    <h5 class="border-bottom border-light pb-2 mx-2">Categorias</h5>
                    <div class="accordion accordion-flush " id="categorias">
                        <div class="accordion-item bg-dark text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoria-1">
                                    <img src="img/dog.png" alt="" class="me-3" style="filter: invert(100%) grayscale(1);">
                                    Perro
                                </button>
                            </h2>
                            <div id="categoria-1" class="accordion-collapse collapse" data-bs-parent="#categorias">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item bg-dark text-light list-group-item-action">Alimento Seco</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Alimento Humedo</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Higiene y Estetica</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Accesorios</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Salud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoria-2">
                                    <img src="img/cat.png" alt="" class="me-3" style="filter: invert(100%) grayscale(1);">
                                    Gato
                                </button>
                            </h2>
                            <div id="categoria-2" class="accordion-collapse collapse" data-bs-parent="#categorias">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item bg-dark text-light list-group-item-action">Alimento Seco</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Alimento Humedo</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Higiene y Estetica</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Accesorios</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Salud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoria-3">
                                    <img src="img/bird.png" alt="" class="me-3" style="filter: invert(100%) grayscale(1);">
                                    Aves
                                </button>
                            </h2>
                            <div id="categoria-3" class="accordion-collapse collapse" data-bs-parent="#categorias">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item bg-dark text-light list-group-item-action">Alimento Seco</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Alimento Humedo</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Higiene y Estetica</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Accesorios</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Salud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoria-4">
                                    <img src="img/fish.png" alt="" class="me-3" style="filter: invert(100%) grayscale(1);">
                                    Peces
                                </button>
                            </h2>
                            <div id="categoria-4" class="accordion-collapse collapse" data-bs-parent="#categorias">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item bg-dark text-light list-group-item-action">Alimento Seco</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Alimento Humedo</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Higiene y Estetica</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Accesorios</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Salud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark text-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-dark text-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoria-5">
                                    <img src="img/rabbit.png" alt="" class="me-3" style="filter: invert(100%) grayscale(1);">
                                    Otras Especies
                                </button>
                            </h2>
                            <div id="categoria-5" class="accordion-collapse collapse" data-bs-parent="#categorias">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item bg-dark text-light list-group-item-action">Alimento Seco</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Alimento Humedo</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Higiene y Estetica</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Accesorios</a>
                                        </li>
                                        <li class="list-group-item bg-dark text-light border-button border-light">
                                            <a href="" class="list-group-item list-group-item-action bg-dark text-light">Salud</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <a href="#" class="d-flex mb-1 py-3 text-decoration-none text-light">
                        <i class="bi bi-geo mx-3"></i>
                        <p class="m-0">Sucursales</p>
                    </a>
                    <a href="#" class="d-flex mb-1 py-3 text-decoration-none text-light">
                        <i class="bi bi-telephone mx-3"></i>
                        <p class="m-0">Contacto</p>
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <div id="carrusel" class="carousel slide" data-bs-ride="true">

<div class="carousel-indicators">
  <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>

<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/carrusel1.png" class="d-block w-100" alt="banner1">
  </div>
  <div class="carousel-item">
    <img src="img/carrusel2.png" class="d-block w-100" alt="banner2">
  </div>
  <div class="carousel-item">
    <img src="img/carrusel3.png" class="d-block w-100" alt="banner3">
  </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden"></span>
</button>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>