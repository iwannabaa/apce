<?php
    $root_path = "/apce/eng/";
    $css_path = $root_path . "css/";
    $js_path = $root_path . "js/";
    $images_path = $root_path . "img/";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>APCE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo $js_path; ?>/vendor/nivo-slider/nivo-slider.css">
        <link rel="stylesheet" href="<?php echo $css_path; ?>normalize.css">
        <link rel="stylesheet" href="<?php echo $css_path; ?>main.css">
        <script src="<?php echo $js_path; ?>/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="header clearfix">
            <div class="content-wrapper">
                <a href="<?php echo $root_path; ?>"><img class="logo" src="<?php echo $images_path; ?>logo.jpg" alt="Asociacion Promotora de Centros Educativos"></a>
                <ul class="social-links">
                    <li class="twitter"><a href="#"><img src="<?php echo $images_path; ?>icon-twitter.jpg" alt="Twitter"></a></li>
                    <li class="youtube"><a href="#"><img src="<?php echo $images_path; ?>icon-youtube.jpg" alt="Flickr"></a></li>
                    <li class="facebook"><a href="#"><img src="<?php echo $images_path; ?>icon-facebook.jpg" alt="Facebook"></a></li>
                </ul>
                <ul class="top-menu">
                    <li class="c-online"><a href="#"><img src="<?php echo $images_path; ?>conline.png" width="140"></a></li>
                    <li><a href="#">Padres</a></li>
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Maestros</a></li>
                    <li><a href="#">Administrativo</a></li>   
                </ul>
            </div>
        </div>
        <div class="main-menu-container">
            <div class="content-wrapper clearfix">
                <ul class="main-menu clearfix">
                    <li><a><span>Acerca de APCE</span></a>
                        <ul>
                            <li><a href="<?php echo $root_path; ?>acerca/historia.php">Historia</a></li>
                            <li><a href="<?php echo $root_path; ?>acerca/mision-vision.php">Misi&oacute;n/Visi&oacute;n</a></li>
                            <li><a href="<?php echo $root_path; ?>acerca/caracter-propio.php">Filosof&iacute;a Educativa</a></li>
                        </ul>
                    </li>
                    <li><a><span>Colegios</span></a>
                        <ul>
                            <li><a href="<?php echo $root_path; ?>colegios/horizontes.php">Horizontes</a></li>
                            <li><a href="<?php echo $root_path; ?>colegios/campoverde.php">Campoverde</a></li>
                            <li><a href="<?php echo $root_path; ?>colegios/floresta.php">La Floresta</a></li>
                            <li><a href="<?php echo $root_path; ?>colegios/lamatepec.php">Lamatepec</a></li>
                        </ul>
                    </li>
                    <li><a><span>Excelencia Educativa</span></a>
                        <ul>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/programas.php">Programas</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/pre-escolar.php">Educ. Pre-escolar</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/educacion-bilingue.php">Educ. Bilingüe</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/educacion-personalizada.php">Educ. Personalizada</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/educacion-diferenciada.php">Educ. Diferenciada</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/educacion-fisica.php">Educ. Fisica</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/cdc.php">CDC</a></li>
                            <li><a href="<?php echo $root_path; ?>excelencia-educativa/oportunidades.php">Oportunidades</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $root_path; ?>padres/"><span>Padres</span></a></li>
                    <li><a href="<?php echo $root_path; ?>maestros/"><span>Maestros</span></a></li>
                    <li><a href="<?php echo $root_path; ?>formacion-humana/"><span>Formaci&oacute;n Humana</span></a></li>
                </ul>
            </div>
        </div>