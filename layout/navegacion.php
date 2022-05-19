<?php
    include "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandra Sierra | <?php echo $nombrePagina ?></title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Hotjar Tracking Code for https://www.asierra-design.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2938619,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body>

    <!-- Barra de Navegación -->
    <div class="w-100 px-2 px-md-5" id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light barra-navegacion">
            <div class="container-fluid">
                <a class="navbar-brand order-lg-2" href="../index.php"><img src="../img/logo.svg"
                        alt="Alejandra Sierra _Design"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-lg-1" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 h6">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php#home"><?php echo $lang['nav_item1']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#about"><?php echo $lang['nav_item2']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#portafolio"><?php echo $lang['nav_item3']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#contact"><?php echo $lang['nav_item4']?></a>
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