<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šablóna stránky</title>
    <!-- CSS styly pre framework bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ikonky -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body style="padding-top: 56px;">

    <!-- horne menu zaciatok -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
                <i class="bi bi-cloud-sun"></i> Menu
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hlavne-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="hlavne-menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Domov
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Fotogaléria
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="nav-produkty" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produkty
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Športové potreby</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Cukrárske potreby</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Počítačové kurzy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- horne menu koniec -->

    <!-- zaciatok obsahu stranky -->
    <div id="obsah">
        <!-- fotografie na vrchu stranky zaciatok -->
        <div class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" id="galeria1">
            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-slide-to="0" data-bs-target="#galeria1"></button>
                <button type="button" data-bs-slide-to="1" data-bs-target="#galeria1"></button>
                <button type="button" data-bs-slide-to="2" data-bs-target="#galeria1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.itlearning.sk" target="_blank">
                        <img src="obrazky/01.jpg" alt="" class="d-block w-100">
                    </a>
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5>Nazov prveho obrazku</h5>
                        <p>Nejaky text, ktory vystizne popisuje obrazok</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Sem klikni</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="obrazky/02.jpg" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5>Nazov druheho obrazku</h5>
                        <p>Nejaky text, ktory vystizne popisuje obrazok</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="obrazky/03.jpg" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5>Nazov tretieho obrazku</h5>
                        <p>Nejaky text, ktory vystizne popisuje obrazok</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#galeria1">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#galeria1">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- fotografie na vrchu stranky koniec -->

        <!-- hlavna cast stranky zaciatok -->
        <div class="container">
            <h1 class="display-6">Vitajte na tejto stránke</h1>
            <div class="row align-items-end mb-4">

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/tender-son-kisses-happy-mother-600w-1922681069.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 1</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 1, ktory je nas najoblubenejsi. Toto je kratky popis produktu 1, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary"><i class="bi bi-zoom-in"></i> Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/new-year-2021-start-straight-600w-1843332130.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 2</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 2, ktory je nas najoblubenejsi. Toto je kratky popis produktu 2, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/over-shoulder-view-female-worker-600w-1938542422.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 3</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 3, ktory je nas najoblubenejsi. Toto je kratky popis produktu 3, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/portrait-young-smiling-woman-looking-600w-1865153395.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 4</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 4, ktory je nas najoblubenejsi. Toto je kratky popis produktu 4, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- tabulka s kontaktami zaciatok -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Meno</th>
                            <th>Priezvisko</th>
                            <th>Telefón</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-success">Peter</td>
                            <td>Novák</td>
                            <td>0903 123 456</td>
                            <td>peter.novak@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Zuzana</td>
                            <td>Veselá</td>
                            <td>0904 123 456</td>
                            <td>zuzana.vesela@gmail.com</td>
                        </tr>
                        <tr class="table-danger">
                            <td>Daniel</td>
                            <td>Vysoký</td>
                            <td>0905 123 456</td>
                            <td>daniel.vysoky@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Marta</td>
                            <td>Modrá</td>
                            <td>0906 123 456</td>
                            <td>marta.modra@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Milan</td>
                            <td>Silný</td>
                            <td>0907 123 456</td>
                            <td>milan.silny@gmail.com</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-info">
                        <tr>
                            <th colspan="3">Celkom:</th>
                            <th>5</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- tabulka s kontaktami koniec -->

            <!-- hra kocky zaciatok -->
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Hodiť kockami</a><br>
                <i class="bi bi-dice-1 display-5"></i>
                <i class="bi bi-dice-2 display-5"></i>
                <i class="bi bi-dice-3 display-5"></i>
                <i class="bi bi-dice-4 display-5"></i>
                <i class="bi bi-dice-5 display-5"></i>
                <i class="bi bi-dice-6 display-5"></i>
            </div>
            <!-- hra kocky koniec -->
        </div>
        <!-- hlavna cast stranky koniec -->
    </div>
    <!-- koniec obsahu stranky -->

    <!-- JavaScript pre fungovanie frameworku Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>