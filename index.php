<?php
    include "config.php";

    $rutaRelativa = 'index.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portafolio de proyectos web front-end y UX/UI de Alejandra Sierra, diseñadora visual con especialización en desarrollo y conceptualización web." />
    <meta name="author" content="Alejandra Sierra" />
    <title>Alejandra Sierra | <?php echo $lang['title']?></title>
    <meta property="og:title" content="Alejandra Sierra | Portafolio" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://asierra-design.com/" />
    <meta property="og:image" content="https://asierra-design.com/img/portafolio-alejandra-sierra.jpg" />
    <meta property="og:description"
        content="Portafolio de proyectos web front-end y UX/UI de Alejandra Sierra, diseñadora visual con especialización en desarrollo y conceptualización web." />
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Hotjar Tracking Code for https://www.asierra-design.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 2938619, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- Barra de Navegación -->
    <div class="w-100 px-2 px-md-5" id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light barra-navegacion">
            <div class="container-fluid">
                <a class="navbar-brand order-lg-2" href="index.php"><img src="img/logo.svg"
                        alt="Alejandra Sierra _Design"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-lg-1" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 h6">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home"><?php echo $lang['nav_item1']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><?php echo $lang['nav_item2']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portafolio"><?php echo $lang['nav_item3']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><?php echo $lang['nav_item4']?></a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-lang dropdown-toggle ps-2" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-lang" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button"><a href="<?php echo $rutaRelativa.'?lang=es' ?>" class="nav-link">Español</a></button></li>
                          <li><button class="dropdown-item" type="button"><a href="<?php echo $rutaRelativa.'?lang=en' ?>" class="nav-link">English</a></button></li>
                        </ul>
                      </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bienvenida -->

    <div class="row gx-0" id="home">
        <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="sticky-top container-vh">
                <div class="bg-container" style="background-image: url('img/home_img.jpg');">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="row gx-0 h-100 px-3 px-lg-5">
                <div class="py-5 align-self-end">
                    <div class="display-3 mt-3 mt-lg-5">
                        <?php echo $lang['saludo']?>
                    </div>
                    <div class="lead mt-3">
                        <?php echo $lang['mensaje']?>
                    </div>
                    <a href="#about"><button type="button" class="btn btn-primary btn-lg mt-4"><?php echo $lang['btn_conoceme'] ?><i
                                class="fa-solid fa-arrow-right ps-2"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre mi -->

    <div class="row gx-0" id="about">
        <div class="col-12 col-lg-6 order-1">
            <div class="sticky-top container-vh py-5">
                <div class="bg-container" style="background-image: url('img/about_img.jpg');">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-2">
            <div class="row gx-0 h-100 px-3 px-lg-5">
                <div class="py-5">
                    <div class="display-6 mb-2"><?php echo $lang['sobre_mi']?></div>
                    <div class="mb-3">
                        <?php echo $lang['texto_sobre_mi']?>
                    </div>
                    <div class="h3 py-4">
                        <?php echo $lang['habilidades']?>
                    </div>

                    <div class="row align-items-stretch pb-4 px-3 px-lg-0">
                        <div class="col-12 col-md-4 pe-3">
                            <div class="h5 text-md-end pb-2 pb-lg-0"><?php echo $lang['hab_cat1']?></div>
                        </div>
                        <div class="col-6 col-md-4 ps-4 lead info-skill">
                            <?php echo $lang['hab_cat1_info1']?>
                        </div>
                        <div class="col-6 col-md-4 ps-4 lead">
                            <?php echo $lang['hab_cat1_info2']?>
                        </div>
                    </div>

                    <div class="row align-items-stretch pb-4 px-3 px-lg-0">
                        <div class="col-12 col-md-4 pe-3">
                            <div class="h5 text-md-end pb-2 pb-lg-0"><?php echo $lang['hab_cat2']?></div>
                        </div>
                        <div class="col-12 col-md-8 ps-4 lead info-skill">
                            <?php echo $lang['hab_cat2_info2']?>
                        </div>
                    </div>

                    <div class="row align-items-stretch pb-4 px-3 px-lg-0">
                        <div class="col-12 col-md-4 pe-3">
                            <div class="h5 text-md-end pb-2 pb-lg-0"><?php echo $lang['hab_cat3']?></div>
                        </div>
                        <div class="col-12 col-md-8 ps-4 lead info-skill">
                            <?php echo $lang['hab_cat3_info3']?>
                        </div>
                    </div>

                    <a 
                        <?php if($_SESSION['lang'] == 'es') {
                            echo 'href="docs/cv_alejandra_sierra.pdf"';
                        } else if($_SESSION['lang'] == 'en') {
                            echo 'href="docs/ecv_alejandra_sierra.pdf"';
                        } ?>
                    target="_blank"><button type="button"
                    class="btn btn-primary mt-2"><?php echo $lang['btn_cv'] ?>
                    <i class="fa-solid fa-arrow-right ps-2"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio -->

    <div class="row gx-0 p-0 p-lg-5" id="portafolio">
        <div class="col-12 px-3 px-lg-5">
            <div class="display-6 text-center mt-0 mt-lg-5"><?php echo $lang['portafolio']?></div>
            <ul class="nav nav-pills h5 mb-3 pt-5 pb-4 mx-2 justify-content-center tablist" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-todos-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-todos" type="button" role="tab" aria-controls="pills-todos"
                        aria-selected="true"><?php echo $lang['pt_todo']?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-frontend-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-frontend" type="button" role="tab" aria-controls="pills-frontend"
                        aria-selected="false"><?php echo $lang['pt_front']?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-uxui-tab" data-bs-toggle="pill" data-bs-target="#pills-uxui"
                        type="button" role="tab" aria-controls="pills-uxui" aria-selected="false"><?php echo $lang['pt_ux']?></button>
                </li>
            </ul>

            <div class="col-12 pb-5">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active pt-4" id="pills-todos" role="tabpanel"
                        aria-labelledby="pills-todos-tab">
                        <div class="row gx-0">
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/bitacora_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                            <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                        <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/recetario_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                            <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                        <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/appio_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_appio'] ?></p>
                                            <a href="projects/appio.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_appio'] ?></p>
                                        <a href="projects/appio.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/woodies_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_woodies'] ?></p>
                                            <a href="projects/woodies.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_woodies'] ?></p>
                                        <a href="projects/woodies.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/rutinapp_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_rutinapp'] ?></p>
                                            <a href="projects/rutinapp.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_rutinapp'] ?></p>
                                        <a href="projects/rutinapp.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/poli_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_poli'] ?></p>
                                            <a href="projects/poli.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_poli'] ?></p>
                                        <a href="projects/poli.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Módulo Frontend-->
                    <div class="tab-pane fade pt-4" id="pills-frontend" role="tabpanel"
                        aria-labelledby="pills-frontend-tab">
                        <div class="row gx-0">
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/bitacora_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                            <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                        <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/recetario_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                            <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                        <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/appio_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_appio'] ?></p>
                                            <a href="projects/appio.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_appio'] ?></p>
                                        <a href="projects/appio.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/woodies_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_woodies'] ?></p>
                                            <a href="projects/woodies.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_woodies'] ?></p>
                                        <a href="projects/woodies.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Módulo UX/UI-->
                    <div class="tab-pane fade pt-4" id="pills-uxui" role="tabpanel" aria-labelledby="pills-uxui-tab">
                        <div class="row gx-0">
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/rutinapp_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_rutinapp'] ?></p>
                                            <a href="projects/rutinapp.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_rutinapp'] ?></p>
                                        <a href="projects/rutinapp.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/poli_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_poli'] ?></p>
                                            <a href="projects/poli.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_poli'] ?></p>
                                        <a href="projects/poli.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/bitacora_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                            <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_bitacora'] ?></p>
                                        <a href="projects/bitacora.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 px-2 py-3 py-md-2">
                                <div class="project">
                                    <img src="img/recetario_portfolio.jpg" alt="" class="img-fluid project-img">
                                    <div class="d-none d-lg-block project-overlay">
                                        <div class="project-text flex-column">
                                            <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                            <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                    class="fa-solid fa-arrow-right ps-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-block d-lg-none mobile-project flex-column p-4">
                                        <p class="h5"><?php echo $lang['pj_recetario'] ?></p>
                                        <a href="projects/recetario.php?lang=<?php echo $_SESSION['lang'] ?>" class="project-btn"><?php echo $lang['btn_proyecto'] ?><i
                                                class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto -->

    <div class="row gx-0" id="contact">
        <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="sticky-top container-vh py-5">
                <div class="bg-container" style="background-image: url('img/contact_img.png');">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="row gx-0 h-100 px-5">
                <div class="py-5 align-self-end">
                    <div class="display-6 mb-2"><?php echo $lang['contacto'] ?></div>
                    <div class="lead mt-3 mb-5">
                        <?php echo $lang['contacto_texto'] ?>
                    </div>
                    <div class="caption"><?php echo $lang['contacto_email'] ?></div>
                    <div class="p mb-3"><a href="mailto:asierra0321@gmail.com">asierra0321@gmail.com</a></div>
                    <div class="caption"><?php echo $lang['contacto_tel'] ?></div>
                    <div class="p mb-3">+34 642 092 992</div>
                    <div class="social-media">
                        <a href="https://wa.me/+34642092992" target="_blank"><i
                                class="fa-brands fa-whatsapp-square me-2"></i></a>
                        <a href="https://github.com/AlejandraSierra" target="_blank"><i
                                class="fa-brands fa-github-square me-2"></i></a>
                        <a href="https://www.linkedin.com/in/diana-alejandra-sierra-gonz%C3%A1lez-431916b1"
                            target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="row gx-0 footer py-3 justify-content-between">
        <div class="col-12 col-lg-6 ps-lg-5 pt-2 pt-lg-0 text-center text-lg-start order-2 order-lg-1">
            Alejandra Sierra | 2022
        </div>
        <div class="col-12 col-lg-6 pe-lg-5 text-center text-lg-end order-1 order-lg-2">
            <a href="policies/aviso_legal.php"><?php echo $lang['foo_aviso'] ?></a> |
            <a href="policies/politica_privacidad.php"><?php echo $lang['foo_privacidad'] ?></a> |
            <a href="policies/politica_cookies.php"><?php echo $lang['foo_cookies'] ?></a>
        </div>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8d4237abe0.js" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
</body>

</html>