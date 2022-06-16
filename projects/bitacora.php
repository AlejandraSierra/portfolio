<?php
    $nombrePagina = "Bitácora";
    $rutaRelativa = "bitacora.php";

    // Header y navegación
    require "../layout/navegacion.php"; 
?>

<!-- Proyecto -->
<div class="row gx-0">
    <div class="col-12">
        <div class="sticky-top container-80-vh py-5">
            <div class="row gx-0 align-content-end bg-container" style="background-image: url('../img/bitacora_header.jpg');">
                <div class="col-12 px-5"> 
                    <div class="text-center"><span class="px-3 highlight display-1 text-primary"><?php echo $lang['bitacora_titulo']?></span></div>
                    <div class="py-2 text-center"><span class="px-2 highlight lead"><?php echo $lang['bitacora_descripcion_corta']?></span></div>
                </div>
                <div class="col-12 px-5 pb-4 text-end">
                    <a href="#" class="project-btn d-none"><?php echo $lang['bitacora_boton']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
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
            <?php echo $lang['bitacora_descripcion']?>  
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-4 py-lg-0 offset-lg-1">
            <div class="caption"><?php echo $lang['proyecto_rol']?></div>
            <div class="text"><?php echo $lang['bitacora_rol']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_herramientas']?></div>
            <div class="text"><?php echo $lang['bitacora_herramientas']?></div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-0 py-md-4 py-lg-0">
            <div class="caption"><?php echo $lang['proyecto_habilidades']?></div>
            <div class="text"><?php echo $lang['bitacora_habilidades']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_duracion']?></div>
            <div class="text"><?php echo $lang['bitacora_duracion']?></div>
        </div>
    </div>
</div>

<!-- Justificación | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_justificacion.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_justificacion']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['bitacora_justificacion']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Izquierda -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_research.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_research_ideacion']?>     
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['bitacora_research_ideacion']?> 
            </div>
        </div>
    </div>
</div>

<!-- Paso | Derecha -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_diseno.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-3 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_diseno']?>       
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['bitacora_diseno_p1']?>
                <span class="h5"><?php echo $lang['proyecto_sist_diseno']?></span>
                <div class="row gx-0 pt-3">
                    <div class="col-12 col-md-6">
                        <div class="fw-bold"><?php echo $lang['proyecto_colores']?></div>
                        <div class="row gx-0 py-2">
                            <div class="col-4">
                                <div class="color mx-auto" style="background-color:#E59500;"></div>
                                <div class="text-center pt-1">#E59500</div>
                            </div>
                            <div class="col-4">
                                <div class="color mx-auto" style="background-color:#37323E;"></div>
                                <div class="text-center pt-1">#37323E</div>
                            </div>
                            <div class="col-4">
                                <div class="color mx-auto" style="background-color:#6D6A75;"></div>
                                <div class="text-center pt-1">#6D6A75</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pt-3 pt-md-0 ps-0 ps-md-5">
                        <div class="fw-bold"><?php echo $lang['proyecto_tipografias']?></div>
                        <div class="pt-1"><img src="../img/fuentes_bitacora.svg" alt=""></div>
                    </div>
                </div>
                <div class="pt-3">
                    <?php echo $lang['bitacora_diseno_p2']?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Izquierda -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_desarrollo.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_desarrollo']?>    
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['bitacora_desarrollo']?>  
            </div>
        </div>
    </div>
</div>

<!-- Aprendizaje | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_aprendizaje.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_aprendizaje']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['bitacora_aprendizaje']?> 
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
        Recetario
    </div>
    <div class="col-3 text-end">
        <a href="recetario.php" class="project-btn"><?php echo $lang['btn_siguiente_proyecto']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
    </div>
</div>

<?php
    // Footer
    require "../layout/footer.php";    
?>