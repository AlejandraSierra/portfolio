<?php
    // Header y navegación
    require "../layout/navegacion.php"; 
?>

<!-- Proyecto -->
<div class="row gx-0">
    <div class="col-12">
        <div class="sticky-top container-80-vh py-5">
            <div class="row gx-0 align-content-end bg-container" style="background-image: url('../img/bitacora_header.jpg');">
                <div class="col-12 px-5"> 
                    <div class="text-center"><span class="px-3 highlight display-1 text-primary">Bitácora</span></div>
                    <div class="py-2 text-center"><span class="px-2 highlight lead">Diseño y desarrollo de sitio web para la gestión de bitácoras de viaje.</span></div>
                </div>
                <div class="col-12 px-5 pb-4 text-end">
                    <a href="#" class="project-btn">Visitar Web<i class="fa-solid fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Descripción General -->

<div class="container my-5 py-3 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-5 lead">
            Bitácora es un sitio web que permite a los usuarios registrar el desarrollo de sus viajes de forma privada con el fin de recopilar sus historias en un mismo espacio y posteriormente poder recordar los detalles y vivencias de cada uno.  
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-4 py-lg-0 offset-lg-1">
            <div class="caption">Rol en el proyecto</div>
            <div class="text">Desarrollador Web Fullstack | Diseñador Web | UX Researcher</div>
            <div class="caption mt-3">Herramientas Utilizadas</div>
            <div class="text">HTML5 | CSS3 | JavaScript | PHP | MySQL | Figma | Miro</div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-0 py-md-4 py-lg-0">
            <div class="caption">Habilidades</div>
            <div class="text">Desarrollo web | Diseño web | UX/UI | Design Thinking</div>
            <div class="caption mt-3">Duración del proyecto</div>
            <div class="text">30 días</div>
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
            Justificación        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                Bitácora se ha creado como un proyecto final para aprobar el módulo de desarrollo web fullstack, se han incorporado elementos de UX research y UI design con el fin de hacer el proyecto mucho más completo. La idea surge a partir de mi interés personal en los viajes, siendo esta una de mis actividades preferidas. Considero que viajar no solo altera la rutina, sino que además permite conocer otras culturas, otros lugares y vivir experiencias inolvidables. Siempre quise hacer un diario o bitácora donde relatar acontecimientos que ocurren durante los viajes para recordar cada detalle, así que ¿Por qué no hacerlo en un ambiente web y extenderlo a otros usuarios interesados?<br><br>
                Así pues, el objetivo del proyecto es <span class="highlight-body">crear un sitio web en el que cada usuario tenga su propio espacio privado en el cual pueda crear viajes o categorías que recopilen historias o entradas, en estas podrán escribir los relatos sobre sus experiencias personales para luego poder consultarlas y rememorar aquellos momentos</span>. Adicionalmente, las imágenes de las historias se agruparán de forma automática creando una galería categorizada por viajes y se podrán gestionar tanto viajes como entradas con el sistema CRUD (Create, read, update and delete).
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
            Research e Ideación     
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                Para realizar el proceso de research, se utilizó la metodología ágil <span class="fw-bold">Design Thinking</span> a partir de la generación de diversos “entregables” que permitieron organizar las ideas e información recolectada para llegar a conclusiones útiles y posibles funcionalidades que tendrá el sitio web. Este proceso incluye cuatro etapas: <span class="fw-bold">observación, síntesis, ideación y diseño</span>.<br><br>
                En la <span class="fw-bold">etapa de observación</span>, se generaron unas <span class="fw-bold">Research questions</span> en las que se tuvieron en cuenta posibles acciones o funcionalidades a las que podría acceder el usuario, con estas preguntas, se generó un <span class="fw-bold">How might we</span> que replantea la formulación para determinar cómo se podrían ejecutar las funcionalidades de acuerdo con los recursos que se disponían, posteriormente estas preguntas fueron categorizadas en: <span class="highlight-body">funcionalidades básicas, complementarias y comunidad</span>. A partir de un <span class="fw-bold">Benchmarking</span>, se realizó una comparación de bitácoras y sitios similares en la web identificando sus funcionalidades más importantes e interfaces, finalmente, se hizo una <span class="fw-bold">Netnografía</span> que recoge opiniones en la web de personas que utilizan aplicaciones o sitios de bitácoras con el fin de conocer sus experiencias positivas y/o negativas. <br><br>
                En la <span class="fw-bold">etapa de síntesis</span>, se realizó una <span class="fw-bold">matriz de utilidad y viabilidad</span> que permitió organizar de manera visual las posibles funcionalidades de acuerdo con su utilidad y viabilidad para así poder establecer su importancia y las posibilidades de crearlos de acuerdo con su dificultad.<br><br>
                En la <span class="fw-bold">etapa de ideación</span>, tomando como referencia la información obtenida en las etapas previas, se definieron las posibles funcionalidades que tendría el sitio web con unos <span class="fw-bold">finding e insights</span>, luego, a partir del uso de un esquema <span class="fw-bold">In – Out</span>, se aplicó un primer filtro para eliminar aquellas funcionalidades que por motivos técnicos o de gestión no se podían incorporar en una primera versión y finalmente, con el uso de un sistema <span class="fw-bold">MoSCoW</span>, se determinaron en orden de importancia cuales funcionalidades tenían que incluirse, cuáles deberían ser tenidas en cuenta, cuales podrían implementarse y cuales definitivamente no se iban a utilizar.<br><br>
                En la <span class="fw-bold">etapa de diseño</span> correspondiente al research, se realizó un <span class="fw-bold">Moodboard</span> o tablero de referentes e inspiración para conocer las últimas tendencias de diseño que podrían utilizarse en los elementos de la bitácora, posteriormente se generó una <span class="fw-bold">planeación de las estructuras que debían tener las bases de datos</span> y un <span class="fw-bold">site map</span> que permitió plantear la estructura del sitio web con sus contenidos.<br><br>
                Puedes ingresar al tablero de Miro <a href="https://miro.com/app/board/o9J_lpguNQc=/" target="_blank">haciendo clic aquí</a> para consultar con detalle el proceso de research.
            </div>
        </div>
    </div>
</div>

<!-- Paso | Derecha -->

<div class="row gx-0">
    <div class="col-12 container-50-vh py-5 bg-parallax" style="background-image: url('../img/bitacora_diseño.jpg');">
    </div>
</div>

<div class="container my-5 py-0 py-lg-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-3 pe-4 pb-3 pb-lg-0 text-lg-end h3">
            Diseño       
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                Con el fin de crear un sitio web consistente y estructurado, se realizó todo un proceso de diseño <span class="highlight-body">utilizando figma como herramienta principal</span>. Inicialmente se estableció el <span class="fw-bold">sistema de diseño</span> en el cual se tuvieron en cuenta elementos como el grid o la retícula para las diversas versiones responsive del sitio web, las tipografías, los colores, los iconos, las imágenes y los componentes a utilizar. A continuación, se crearon unos <span class="fw-bold">wireframes</span> que permitieron tener una previsualización del esquema del sitio web y la ubicación de sus elementos. Posteriormente se generó un <span class="fw-bold">prototipado del sitio web</span> para obtener una visualización más aproximada al resultado final que tendría la bitácora.<br><br>
                <span class="h5">Sistema de diseño</span>
                <div class="row gx-0 pt-3">
                    <div class="col-12 col-md-6">
                        <div class="fw-bold">Colores</div>
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
                        <div class="fw-bold">Tipografías</div>
                        <div class="pt-1"><img src="../img/fuentes_bitacora.svg" alt=""></div>
                    </div>
                </div>
                <div class="pt-3">
                    Puedes ingresar al archivo figma del proyecto <a href="https://www.figma.com/file/RJVS9KeLCM9gS6KACn0wV4/Bit%C3%A1cora?node-id=0%3A1" target="_blank">haciendo clic aquí</a> para consultar con detalle el proceso de diseño.
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
            Desarrollo    
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                Teniendo en cuenta las etapas realizadas previamente, se realizó el <span class="fw-bold">proceso de desarrollo</span> llevando el prototipo a la web utilizando código en <span class="highlight-body">HTML5, CSS3, JavaScript, PHP y bases de datos con MySQL</span>.<br><br>
                El sitio web está compuesto por una <span class="fw-bold">prehome</span> que corresponde al index de la bitácora, en esta vista se dispone información general a cerca de las principales funcionalidades del sitio y contiene los botones de registro en ingreso, asimismo, incluye enlaces a redes sociales, la siguiente página corresponde al <span class="fw-bold">registro e inicio de sesión</span>, dos vistas distintas interconectadas entre sí que permiten al usuario crear su cuenta o ingresar a la zona privada del sitio web.<br><br>
                Una vez iniciada la sesión, el usuario tendrá una vista de <span class="fw-bold">inicio o home</span> en la cual encontrará el menú de navegación lateral, una cabecera que muestra un mensaje de bienvenida y botones para crear viajes e historias, en este panel verá los últimos 3 viajes y 3 historias que ha registrado. Al hacer clic en <span class="fw-bold">nuevo viaje</span>, aparecerá un formulario que captura la información sobre el viaje (Nombre, fecha, imagen y descripción), este funciona como una categoría que puede contener varias historias o entradas, sin embargo, no puede haber historias sin estar relacionadas a algún viaje; para registrarlas, el usuario deberá clicar el botón “<span class="fw-bold">Nueva entrada</span>” que mostrará un formulario diferente y permitirá guardar la información de tipo texto que el usuario quiera introducir.<br><br>
                Existe una vista llamada “<span class="fw-bold">Mis entradas</span>”, en la cual se recopilan y muestran todas las historias que el usuario ha introducido en la web, incluye un campo de tipo select que carga únicamente las historias del viaje seleccionado, cada una de estas historias, incluye un enlace que lleva a la “<span class="fw-bold">Vista de entrada</span>”, allí se cargará la información que contiene la base de datos sobre la historia seleccionada y la dispone de tal forma que el usuario pueda verla organizada. Adicionalmente, incluye un botón que permite editar la historia y otro que le permite eliminarla temporalmente, cambiando su estado y enviándola a la papelera donde eventualmente la podrá recuperar.<br><br>
                Si el usuario presiona el botón “<span class="fw-bold">Editar entrada</span>”, será dirigido a una vista de formulario en la cual cargarán los datos de la historia en cuestión, el usuario podrá modificar cualquiera de los datos y guardar o descartar los cambios realizados.<br><br>
                Cada viaje y entrada contiene en la base de datos un campo booleano denominado estado, en el cual al ser verdadero se muestra en diversas vistas del sitio web, sin embargo, al estar en falso, se muestra únicamente en la sección “<span class="fw-bold">Papelera</span>” donde se muestran algunos datos dispuestos en una tabla, en esta, el usuario tiene la posibilidad de restaurar el elemento o eliminarlo definitivamente de la base de datos sin posibilidad de recuperarlo posteriormente.<br><br>
                Por último, existe una sección extra denominada “<span class="fw-bold">Galería</span>” en la cual se puede visualizar una recopilación de todas las imágenes que se han asignado a las historias. Mediante un campo de tipo select, al igual que en las entradas, se puede seleccionar un viaje para ver únicamente las imágenes de dicho viaje.
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
            Aprendizaje        
        </div>
        <div class="col-12 col-lg-7">
            <div class="text py-0 py-lg-2 ps-3 info-text">
                Este proyecto es el primero que he desarrollado por completo <span class="highlight-body">desde la ideación hasta la construcción del front-end y back-end</span> por lo que el aprendizaje que he obtenido en su ejecución ha sido bastante significativo. Teniendo en cuenta algunas restricciones impuestas por parte de la escuela, no fue posible utilizar ningún framework para el desarrollo del sitio, por lo que sobre todo en el tema de diseño responsive fue bastante enriquecedor; en el planteamiento del proyecto no se incluía la parte de research, sin embargo, quise llevarlo a cabo como una forma de abordarlo de la manera más limpia posible y considero que valió completamente la pena ya que de esta forma tuve más oportunidades de plantear claramente la idea (ya que el tema era libre) y las funcionalidades. Considero que aún hay ciertos elementos que se pueden mejorar y espero en el futuro cercano contar con la disponibilidad de tiempo para hacerlo, así eventualmente será posible sacar este proyecto a un ambiente de producción que pueda servir a usuarios reales.
            </div>
        </div>
    </div>
</div>

<!-- Siguiente proyecto -->
<div class="row p-5 gx-0 nav-projects align-items-center">
    <div class="col-3 text-start">
        <a href="../index.html#portafolio" class="project-btn"><i class="fa-solid fa-arrow-left pe-2"></i>Portfafolio</a>
    </div>
    <div class="col-6 display-6 text-light text-center">
        Recetario
    </div>
    <div class="col-3 text-end">
        <a href="recetario.php" class="project-btn">Ver Proyecto<i class="fa-solid fa-arrow-right ps-2"></i></a>
    </div>
</div>

<?php
    // Footer
    require "../layout/footer.php";    
?>