<?php
    $nombrePagina = "Woodies";
    $rutaRelativa = "woodies.php";

    // Header y navegación
    require "../layout/navegacion.php"; 
?>

<!-- Proyecto -->
<div class="row gx-0">
    <div class="col-12">
        <div class="sticky-top container-80-vh py-5">
            <div class="row gx-0 align-content-end bg-container" style="background-image: url('../img/woodies_header.jpg');">
                <div class="col-12 px-5"> 
                    <div class="text-center"><span class="px-3 highlight display-1 text-primary"><?php echo $lang['woodies_titulo']?></span></div>
                    <div class="py-2 text-center"><span class="px-2 highlight lead"><?php echo $lang['woodies_descripcion_corta']?></span></div>
                </div>
                <div class="col-12 px-5 pb-4 text-end d-none">
                    <a href="#" class="project-btn"><?php echo $lang['woodies_boton']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- miga de pan -->
<div class="container my-2 pt-3 pt-lg-4">
    <div class="row border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php"><?php echo $lang['nav_item1']?></a></li>
                <li class="breadcrumb-item"><a href="../index.php#portafolio"><?php echo $lang['nav_item3']?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $nombrePagina?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Descripción General -->

<div class="container my-5 py-3 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-5 lead">
            <?php echo $lang['woodies_descripcion']?>  
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-4 py-lg-0 offset-lg-1">
            <div class="caption"><?php echo $lang['proyecto_rol']?></div>
            <div class="text"><?php echo $lang['woodies_rol']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_herramientas']?></div>
            <div class="text"><?php echo $lang['woodies_herramientas']?></div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-0 py-md-4 py-lg-0">
            <div class="caption"><?php echo $lang['proyecto_habilidades']?></div>
            <div class="text"><?php echo $lang['woodies_habilidades']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_duracion']?></div>
            <div class="text"><?php echo $lang['woodies_duracion']?></div>
        </div>
    </div>
</div>

<!-- Justificación | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/woodies_justificacion.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_justificacion']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['woodies_justificacion']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Izquierda -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/woodies_desarrollo.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_desarrollo']?>    
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['woodies_desarrollo']?>
            </div>
        </div>
    </div>
</div>

<!-- Aprendizaje | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/woodies_aprendizaje.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_aprendizaje']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['woodies_aprendizaje']?>
            </div>
        </div>
    </div>
</div>

<!-- Siguiente proyecto -->
<div class="row px-2 py-5 p-md-5 gx-0 nav-projects align-items-center">
    <div class="col-3 text-start">
        <a href="../index.php#portafolio" class="project-btn"><i class="fa-solid fa-arrow-left pe-2"></i><?php echo $lang['btn_portafolio']?></a>
    </div>
    <div class="col-6 display-6 text-light text-center">
        Rutinapp
    </div>
    <div class="col-3 text-end">
        <a href="rutinapp.php" class="project-btn"><?php echo $lang['btn_siguiente_proyecto']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
    </div>
</div>

<?php
    // Footer
    require "../layout/footer.php";    
?>