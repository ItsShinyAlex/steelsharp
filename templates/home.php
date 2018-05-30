<?php
    /* Template Name:  Principal - Home*/ 
    get_header();
?>

<section id="home-banner">
        <?php putRevSlider("home", "home.php"); ?>
</section>

<section id="who">
    <div class="flex">
        <div class="col">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/CajaFuerteYdemas.png" alt="Caja fuerte e inmuebles de alta seguridad" id="cajas-fuertes">
        </div>
        <div class="col">
            <h2>¿Quiénes <br><span class="pad-left dark-blue">Somos?</span></h2>
            <p>
                Somos una empresa mexicana con más de 25 años de 
                <span class="dark-blue">experiencia en </span>
                 la fabricación de
                <span class="dark-blue">soluciones de seguridad.</span>
            </p>
            <p>
                Nos enfocamos en brindar 
                <span class="navy">productos resistentes y duraderos</span>
                , hechos con los mejores 
                <span  class="navy">materiales certificados</span>
                y la
                <span  class="navy">mayor tecnología</span>
            </p>
            <p>
                Ofrecemos productos 
                <span class="sky"> diseñados a tus necesidades, con </span>
                la
                <span class="sky">asesoría de expertos</span>
                capacitados.
            </p>
            
        </div>
    </div>
</section>

<section id="valores">
    <div class="center dark-blue-back">
        <h2 class="white">
           Nuestros <br>
           <span class="heavy white pad-r">Valores</span>
        </h2>
    </div>
    <div class="flex">
        <div class="col right">
            <p>Veracidad ·</p>
            <p>Responsabilidad ·</p>
            <p>Honestidad · </p>
            <p>Compromiso ·</p>
        </div>
        <div class="col left">
            <p>· Confidencialidad</p>
            <p>· Bienestar</p>
            <p>· Orgullo</p>
            <p>· Efectividad</p>
        </div>
    </div>
</section>

<section id="proposito">
    <div class="flex">
        <div class="col">
            <h2>
                Nuestro Propósito<br>
                <span class="dark-blue pad-left">en
                <span class="steelsharp">STEELSHARP</span>
                </span>

            </h2>
            
            <p class="border-left">
                Brindarte tranquilidad, con soluciones de seguridad que resguarden tu patrimonio.
            </p>
        </div>
        <div id="miss-happy" class="col">
            
        </div>
    </div>
</section>

<section id="patrimonio">
    <div class="center dark-blue-back">
        <h2 class="white">Blindamos tu<br>
            <span class="heavy">Patrimonio</span>
        </h2>
    </div>
    <div class="flex nowrap">
        <div class="l-col col center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/1.svg" alt="Equipo de computo">
            <p>
                Mayor tecnología en el sistema de  combinaciones, con la certificación “UL de U.S.A.” (Underwriters Laboratorios), más sofisticado y difícil de descifrar. 
            </p>
        </div>
        <div class="col center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/3.svg" alt="Mecanismos">
            <p>
                Mecanismos de combinación certificados, combinaciones mecánicas y digitales fáciles de programar.
            </p>
        </div>
        <div class="r-col col center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/2.svg" alt="Herramientas">
            <p>
                Nuestros productos son fáciles de instalar y ofrecemos servicio de instalación en algunas ciudades del territorio mexicano.
            </p>
        </div>
    </div>
    <div class="center"><img id="line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/line-h.png" alt="---------------------------------------"></div>
    
    
    <div class="flex nowrap">
        <div class="l-col col center ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/4.svg" alt="Viga">
            <p>
                Mayor durabilidad y resistencia en los materiales. 
                Los productos son fabricados con  placas de acero tratado de alto calibre.
            </p>
        </div>
        <div class="col center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/5.svg" alt="Regla">
            <p>
                Fabricamos nuestros productos con  medidas personalizadas de acuerdo a las necesidades del cliente.
            </p>
        </div>
        <div class="r-col col center ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/6.svg" alt="Envíos">
            <p>
                Ventas y envíos a nivel nacional, con asesoría para la  instalación del producto.
            </p>
        </div>
    </div>

</section>

<section id="soluciones">
    <div class="center">
        <h2>
            SOLUCIONES DE SEGURIDAD<br>
            <span class="heavy dark-blue">QUE TE OFRECEMOS</span>
        </h2>
    </div>
    <p class="border-right">
        Para casas, oficinas, negocios y empresas, 
        <b>STEELSHARP </b>
         te ofrece soluciones de seguridad personalizada con la mayor tecnología y los mejores materiales en cajas fuertes, puertas y ventanas blindadas.
    </p>
    
    <div class="flex nowrap dark-blue-back">
        <div class="l-col col center">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/cajaFuerte.png" alt="caja fuerte"></div>
            </div>
        <div class="col center">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/PuertaBlindada.png" alt="Esclusa blindada">
            </div>
        </div>
        <div class="r-col col center">
            <div>
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/VidrioBlindado.png" alt="Ventana blindada">
            </div>
        </div>
    </div>
    <div class="flex nowrap flex-small">
        <div class="l-col col center col-small ">
            <p>Cajas Fuertes</p>
        </div>
        <div class="col center col-small ">
            <p>Puertas y Esclusas<br>
            <span class="dark-blue heavy">Blindadas</span>
            </p>
        </div>
        <div class="r-col col center col-small ">
            <p>Ventanas<br>
            <span class="dark-blue heavy">Blindadas</span>
            </p>
        </div>
    </div>
</section>

<section id="contacto">
    <div class="flex">
        <div id="c-small" class="col">
            <img id="industria-tuberias" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/TuboContacto.jpg" alt="Fabrica industrial">
            <div class="center logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="STEELSHARP, cajas fuertes y equipos blindados">
            </div>
            
        </div>
        <div id="c-big" class="col" >
            <h2 class="heavy">Contáctanos</h2>
            <div class="gray-block">
                 <?php echo do_shortcode("[caldera_form id='CF5b0f1c3c6fe80']"); ?>
                
            </div>
        </div>
    </div>
    <div id="contact-flex" class="flex nowrap">
        <div class="col icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/7.svg" alt="horario">
        </div>
        <div class="col">
            <p>De Lunes a  Viernes<br> 
            de 10:00 a 19:00 hrs <br>
            Sábado de 10:00 a 14:00 hrs
            </p>
        </div>
        <div id="wa" class="col icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/8.svg" alt="WhatsApp número telefónico">
        </div>
        <div class="col ">
            <p>(045) 477 647 3642</p>
        </div>
        <div class="col icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/9.svg" alt="correo electrónico">
        </div>
        <div class="col">
            <a href="mailto:contacto@steelsharp.com?Subject=Informes%20-Contacto" target="_top">    <p>contacto@steelsharp.com</p>
            </a>
        </div>
        
    </div>
    <div class="flex">
        <div id="face" class="col flex">
           <div class="col">
               <p class="white heavy">Síguenos en</p>
           </div>
           <div class="col">
               <a href="https://www.facebook.com/Steelsharp-Seguridad-368465093644569/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/10.svg" alt="Facebook"></a>
           </div>
        </div>
        <div class="col"></div>
    </div>
    
    <div class="left pad-left">
        <p class="dark-blue">Diseño por EsBrillante Estudio Digital 2018</p>
    </div>
    
</section>

<?php 
    get_footer();
?>



