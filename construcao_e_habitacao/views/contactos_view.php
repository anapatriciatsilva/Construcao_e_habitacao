<?php

$contactos = getContactos();

?>
        <!--Parte do Meio-->
        <main class="container">
            <!-- Área Contactos -->
            <div class="row">
                <div class="col-12 conteudo conteudo-main mx-auto">
                    <div class="linha linha-superior"></div>
                    <h1 class="col text-center" id="titulo_contactos">
                        Contactos
                    </h1>

                    <div class="col-12 area-contactos">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="info-contactos">Morada</div>
                                <div class="info-contactos" id="morada-c"><?= $contactos["morada"]; ?></div>

                                <div class="info-contactos">Telefone</div>
                                <div class="info-contactos texto-info-c"><?= $contactos["telefone"]; ?></div>

                                <div class="info-contactos">Fax</div>
                                <div class="info-contactos texto-info-c"><?= $contactos["fax"]; ?></div>

                                <div class="info-contactos">E-mail</div>
                                <div class="info-contactos texto-info-c" ><?= $contactos["email"]; ?></div>

                            </div>
                            <div class="col-lg-7 col-md-12">
                                <form action="">
                                    <label for="nome" class="info-contactos"> *Nome</label><br>
                                    <input type="text" name="nome" placeholder="Insira aqui o seu nome" required class="inserir-dados"><br>
                                    
                                    <label for="email" class="info-contactos"> *E-mail</label><br>
                                    <input type="email" name="email" placeholder="Insira aqui o seu e-mail" required class="inserir-dados"><br>
                                    
                                    <label for="telefone" class="info-contactos"> *Telefone</label><br>
                                    <input type="text" name="telefone" placeholder="Insira aqui o seu telefone" required class="inserir-dados"><br>
                                    
                                    <label for="assunto" class="info-contactos"> *Assunto</label><br>
                                    <input type="text" name="assunto" placeholder="Insira aqui o assunto" required class="inserir-dados"><br>
        
                                    <label for="mensagem" class="info-contactos"> *Mensagem</label><br>
                                    <textarea name="mensagem" placeholder="Insira aqui a sua mensagem" cols="90" rows="15" required id="caixa-mensagem"> </textarea><br>

                                    <div class="row">
                                        <div class="col-lg-8 col-md-12">
                                            <p class="final-contactos" id="campos-preenchimento">* Campos de preenchimento obrigatório</p>

                                            <input type="checkbox" name="copia" value="sim" id="checkbox">
                                            <label for="copia" class="final-contactos" id="copia-mensagem">Quero receber uma cópia desta mensagem no e-mail. </label>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <img src="imagens/buttons_icons/recaptcha.png" alt="recaptcha" id="recaptcha">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="d-flex justify-content-center">
                                        <div class="g-recaptcha" data-sitekey="meta sua chave do site aqui"></div>
                                    </div>
                                    
                                    <div class="enviar-desktop enviar-mobile">
                                        <div class="botao-enviar">
                                            <img src="imagens/buttons_icons/enviar.svg" alt="enviar" class="imagem-botao enviar" id="imagem-original">
                                            <img src="imagens/buttons_icons/enviarHover.svg" alt="enviar_hover" class="imagem-botao enviar" id="imagem-hover">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
