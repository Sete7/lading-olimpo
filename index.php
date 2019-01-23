<?php require_once './app/config.php'; ?>
<!--DOCTYPE html-->
<html  lang="pt-br" itemscope="" itemtype="http://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">

        <title>Leads - Olimpo</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Page Leads, Informe Publicidade, Marketing,olimpoconstrutora">        
        <link href="<?= INCLUDE_PATH; ?>/assets/image/favicon-96x96.png" rel="shortcut icon">  
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">      
        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="<?= INCLUDE_PATH; ?>/assets/css/style.css" rel="stylesheet" type="text/css"/> 


    </head>
    <body>
        <header class="main-header">
            <div class="container">              
                <div class="bx-header">                        
                    <div class="main-logo">                        
                        <a target="_blank" class="logo" href="https://olimpoconstrutora.com.br">
                            <img src="<?= INCLUDE_PATH; ?>/assets/image/logo.png" alt=""/>
                        </a>                      
                    </div>
                </div>
                <!--  END LOGO -->
                <div class="bx-header">                        
                    <div class="social-network">
                        <ul class="main-network">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/olimpoconstrutora">
                                    <img src="<?= INCLUDE_PATH; ?>/assets/image/facebook.png" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a  target="_blank" href="https://www.instagram.com/olimpoconstrutora">
                                    <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-instagram.png" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a  target="_blank" href="https://api.whatsapp.com/send?phone=5561992368011&text=Bem%20vindo%20a%20olimpo!">
                                    <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-whatsapp.png" alt=""/>
                                    <span>(61) <strong>3022-2645</strong></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END SOCIAL NETWORK -->

                </div>            
            </div>            
            <div class="clear"></div>            
        </header>
        <!-- END HEADER -->


        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>


        <footer class="main-footer">           
            <section class="sec-contact">
                <div class="content">
                    <article class="artc-contact">
                        <h2>Contato</h2>
                        <p>
                            Tire suas dúvidas e solicite 
                            agora seu orçamento!
                        </p>
                    </article>
                    <article class="artc-contact">                   
                        <div class="box-footer-contact">
                            <ul>
                                <li>
                                    <span class="field-icon-footer">
                                        <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-phone-contact.png" alt=""/>
                                    </span>
                                    <span class="desc">(61) 3022-2645</span>
                                </li>
                                <li>
                                    <span class="field-icon-footer">
                                        <a  target="_blank" href="https://api.whatsapp.com/send?phone=5561992368011&text=Bem%20vindo%20a%20olimpo!">
                                            <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-whats-contact.png" alt=""/>
                                        </a>
                                    </span>
                                    <span class="desc">(61) 9 9236-8011</span>
                                </li>

                            </ul> 
                        </div>

                        <p>
                            <span class="field-icon-footer">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-envelope-contact.png" alt=""/>
                            </span> <span class="desc">contato@olimpoconstrutora.com.br</span>
                        </p>

                        <p>
                            <span class="field-icon-footer">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-map-contact.png" alt=""/>
                            </span>
                            <span class="desc">
                                SIA Sul, Trecho 3, L. 625/695 - Bloco C,</br>
                                <strong class="marck"></strong>Sala 324 C - Ed. SIA Center - DF
                            </span>
                        </p>
                    </article>
                </div>
            </section>
            <!--END CONTACT-->
            <div class="main-map">
                <div class="main-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7678.0538588703785!2d-47.957404!3d-15.802534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ae4a964d812a41a!2sShopping+Sia+Center+Mall!5e0!3m2!1spt-BR!2sus!4v1547661256404" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="clear"></div>            
            </div>
            <!--END MAP-->
            <div class="main-copy">
                <div class="copy content">
                    <p>&COPY; <?php echo date('Y'); ?> Desenvolvido por <a href="#">KMB DIGITAL</a></p>
                </div>
            </div>
            <div class="clear"></div>            
        </footer>
        <!--END FOOTER-->

        <script src="<?= INCLUDE_PATH; ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>