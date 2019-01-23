<div class="bx-banner-top">
    <div class="container">
        <div class="banner-topo">
                
                    <div class="desc-banner-top">
                        <h2>
                            Cadastre-se e <br>
                            ganhe uma consultoria 
                            condominial gratuita
                        </h2>
                            
                            <?php
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
               
                
                $para = "olimpoconstrutoradf@gmail.com" . ', ';
                $para .= "contato@olimpoconstrutora.com.br";
                
                $assunto = "Contato Page Leads Formulário Olimpo";
                
                $corpo = " Nome: " . $nome . "\r\n" ." E-mail: " . $email ."\r\n" . " Telefone: " . $phone;
                
                $cabeçalho = "FROM: contato@olimpoconstrutora.com.br" . "\r\n" .
                        "Reply-to: " . $email . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();
                mail($para, $assunto, $corpo, $cabeçalho);
//                            echo "Email enviado com sucesso";                          
                echo "<script>window.location = 'https://olimpoconstrutora.com.br/landing/obrigado'</script>";
            }
             ?>
                            
                        <form class="form-banner-top" method="POST">
                            <div class="form-group">                            
                                <input type="text" name="nome" placeholder="NOME" required=""/>
                                <div class="thumb-icon">
                                    <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-user-1.png" alt=""/>
                                </div>
                            </div>
                            <div class="form-group">                            
                                <input type="text" name="email" placeholder="E-MAIL" required=""/>
                                <div class="thumb-icon">
                                    <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-envelope-1.png" alt=""/>
                                </div>
                            </div>
                            <div class="form-group">                            
                                <input type="text" name="phone" placeholder="TELEFONE" required=""/>
                                <div class="thumb-icon">
                                    <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-phone-1.png" alt=""/>
                                </div>
                            </div>
                            <div class="form-group">                            
                                <input type="submit" class="btn-top-enviar" value="ENVIAR"/>                            
                            </div>
                        </form>
                        <!--END FORM-->

                        <div class="bx-consulting">
                            <h2>A CONSULTORIA</h2>
                            <p>
                                Disponibilizamos gratuitamente, um profissional qualificado da
                                área de Engenharia Civil, para apresentar a Consultoria Técnica
                                sobre "Revitalização de Condomínios". Cadastre-se e ganhe uma 
                                Consultoria Condominial Gratuita!
                            </p>
                        </div>
                        <!-- END CONSULTING -->

                    </div>
                    <!-- END CONSULTING -->
                </div>          
            
        </div>
        <!--END BANNER-->        
    <div class="clear"></div>
</div>



<!---------------------------------------------------------------------------------------------->


<!-- END BANNER TOP -->
        <section class="sec-info-olimpo">
            <div class="content">
                <div class="bx-info">
                    <div class="logo-info">
                        <img class="img-responsive" src="<?= REQUIRE_PATH; ?>/assets/image/logo-info.png" alt="logo"/>
                    </div>
                    <div class="desc-logo-info">
                        <p>
                            Fundada em 1998 e com profundas raízes em Brasília/DF,
                            a Olimpo Construtora é uma empresa especializada em
                            “Restauração de Patologias da Construção Civil” em obras de Condomínios. 
                        </p>
                    </div>
                </div>
                <div class="bx-info">
                    <div class="thumb-info">
                        <img class="img-thumbnail" src="<?= REQUIRE_PATH; ?>/assets/image/thumb-info.jpg" alt=""/>
                        <img class="img-thumbnail-dois" src="<?= REQUIRE_PATH; ?>/assets/image/thump-services-olimpo.jpg" alt=""/>
                    </div>
                </div>
            </div> 
            <div class="clear"></div> 
        </section>
        <!--END PROJECTS-->
        <section class="sec-project">
            <div class="bg-image-project">
                <img class="img-responsive" src="<?= REQUIRE_PATH; ?>/assets/image/bg-novos-project.jpg" alt=""/>            
                <div class="title-our-project">
                    <h2>Nossos Projetos</h2>
                </div>            
            </div>
            <div class="bx-grid-thumb">
                <div class="bg-grid-thumb">
					
                        <div class="grid-thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/1-3.jpg" alt=""/>
                        </div>
					
					 <div class="grid-thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/2-2.jpg" alt=""/>
                        </div>
					
					<div class="grid-thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/3-1.jpg" alt=""/>
                        </div>
					
					<div class="grid-thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/4-1.jpg" alt=""/>
                        </div>
					
					<div class="grid-thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/5-1.jpg" />
                        </div>
					
					<div class="grid-thumb">
                          <img src="<?= REQUIRE_PATH; ?>/assets/image/6-2.jpg">
                        </div>
					
					<div class="grid-thumb">
                          <img src="<?= REQUIRE_PATH; ?>/assets/image/7-1.jpg">
                        </div>
					
					<div class="grid-thumb">
                          <img src="<?= REQUIRE_PATH; ?>/assets/image/8.jpg">
                        </div>
					
					<div class="grid-thumb">
                          <img src="<?= REQUIRE_PATH; ?>/assets/image/9.jpg">
                        </div>
                       
					
					
					
                    <div class="clear"></div>
                </div>
            </div>
            <!--END GRID-->
        </section>
        <!--END GRID PROJECTS-->
        <section class="sec-consulting">
            <div class="content">
                <div class="block-consulting">
                    <h2>
                        Cadastre-se e 
                        ganhe uma consultoria 
                        condominial gratuita.
                    </h2>
                </div>
                <!--END INFORMATION REGISTRATION-->
                <div class="block-consulting">
                    <form class="form-registration">
                        <div class="field-input">        
                            <input type="text" placeholder="NOME"/>
                            <div class="icon-field">
                                <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-user-1.png" alt=""/>
                            </div>
                        </div>
                        <div class="field-input">        
                            <input type="text" placeholder="E-MAIL"/>
                            <div class="icon-field">                               
                                <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-envelope-1.png" alt=""/>
                            </div>
                        </div>
                        <div class="field-input">        
                            <input type="text" placeholder="TELEFONE"/>
                            <div class="icon-field">
                                <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-phone-1.png" alt=""/>
                            </div>
                        </div>
                        <div class="field-btn-consulting">
                            <input type="submit" class="btn-consulting" value="ENVIAR"/>
                        </div>
                    </form>
                </div>
                <!--END FORM REGISTRATION-->
            </div>
        </section>
        <!--END REGISTRATION CONSULTING-->
