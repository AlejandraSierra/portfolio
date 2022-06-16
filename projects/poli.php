<?php
    $nombrePagina = "Poli";
    $rutaRelativa = "poli.php";

    // Header y navegación
    require "../layout/navegacion.php"; 
?>

<!-- Proyecto -->
<div class="row gx-0">
    <div class="col-12">
        <div class="sticky-top container-80-vh py-5">
            <div class="row gx-0 align-content-end bg-container" style="background-image: url('../img/poli_header.jpg');">
                <div class="col-12 px-5"> 
                    <div class="text-center"><span class="px-3 highlight display-1 text-primary"><?php echo $lang['poli_titulo']?></span></div>
                    <div class="py-2 text-center"><span class="px-2 highlight lead"><?php echo $lang['poli_descripcion_corta']?></span></div>
                </div>
                <div class="col-12 px-5 pb-4 text-end">
                    <a href="https://cei-2.gitbook.io/app-enfermeria/" target="_blank" class="project-btn"><?php echo $lang['poli_boton']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
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
            <?php echo $lang['poli_descripcion']?>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-4 py-lg-0 offset-lg-1">
            <div class="caption"><?php echo $lang['proyecto_rol']?></div>
            <div class="text"><?php echo $lang['poli_rol']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_herramientas']?></div>
            <div class="text"><?php echo $lang['poli_herramientas']?></div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-0 py-md-4 py-lg-0">
            <div class="caption"><?php echo $lang['proyecto_habilidades']?></div>
            <div class="text"><?php echo $lang['poli_habilidades']?></div>
            <div class="caption mt-3"><?php echo $lang['proyecto_duracion']?></div>
            <div class="text"><?php echo $lang['poli_duracion']?></div>
        </div>
    </div>
</div>

<!-- Justificación | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_justificacion.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_justificacion']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['poli_justificacion']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Izquierda -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_observacion.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_observacion']?>  
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['poli_observacion']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Derecha -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_sintesis.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-3 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_sintesis']?>       
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['poli_sintesis']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Izquierda -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_ideacion.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_ideacion']?>  
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['poli_ideacion']?>
            </div>
        </div>
    </div>
</div>

<!-- Paso | Derecha -->

<!-- Paso | Derecha -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_diseno.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-3 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_diseno']?>       
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
            <?php echo $lang['poli_diseno_p1']?>
                <span class="h5"><?php echo $lang['proyecto_sist_diseno']?></span>
                <div class="row gx-0 pt-3">
                    <div class="col-12 col-md-6">
                        <div class="fw-bold"><?php echo $lang['proyecto_colores']?></div>
                        <div class="row gx-0 py-2">
                            <div class="col-4">
                                <div class="color mx-auto" style="background-color:#164CB6;"></div>
                                <div class="text-center pt-1">#164CB6</div>
                            </div>
                            <div class="col-4">
                                <div class="color mx-auto" style="background-color:#0B265B;"></div>
                                <div class="text-center pt-1">#0B265B</div>
                            </div>
                            <div class="col-4">
                                <div class="color mx-auto" style="background: linear-gradient(180deg, rgba(73,127,233,1) 0%, rgba(11,38,91,1) 100%);"></div>
                                <div class="text-center pt-1">Gradiente</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pt-3 pt-md-0 ps-0 ps-md-5">
                        <div class="fw-bold"><?php echo $lang['proyecto_tipografias']?></div>
                        <div class="pt-3"><img src="../img/fuentes_poli.svg" alt=""></div>
                    </div>
                </div>
                <div class="pt-3">
                    <?php echo $lang['poli_diseno_p2']?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Aprendizaje | Centro -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/poli_aprendizaje.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-4 pe-5 pb-3 pb-lg-0 text-lg-end h3">
            <?php echo $lang['proyecto_aprendizaje']?>        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                <?php echo $lang['poli_aprendizaje']?>
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
        Bitácora
    </div>
    <div class="col-3 text-end">
        <a href="bitacora.php" class="project-btn"><?php echo $lang['btn_siguiente_proyecto']?><i class="fa-solid fa-arrow-right ps-2"></i></a>
    </div>
</div>

<?php
    // Footer
    require "../layout/footer.php";    
?>