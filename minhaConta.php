<?php
    require_once('header.php');
?>

<!-- INICIO ÁREA LOGIN -->

<div class="minha-conta"> <!-- INICIO MINHA CONTA -->

<div class="container"> 

    <div class="row">

        <div class="col-2"> <!-- INICIO IMAGEM À ESQUERDA -->
            <img src="assets/img/banner1.jpg" width="100%" alt="">
        </div> <!-- FIM IMAGEM À ESQUERDA -->

        <div class="col-2"> <!-- INICIO FORMULÁRIO ACESSO/CADASTRO -->
            <div class="formulario">

                <div class="btn-form"> <!-- INICIO MENU ENTRAR OU CADASTRAR -->
                    <span onclick="Entrar()">Entrar</span>
                    <span onclick="Cadastro()">Cadastro</span>
                    <hr id="Indicador">
                </div> <!-- FIM MENU ENTRAR OU CADASTRAR -->

                <form action="" method="post" id="EntrarPainel"> <!-- INICIO FORMULARIO ACESSO -->
                    <input type="email" name="email" id="" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" id="" placeholder="Digite sua senha">
                    <button type="submit" name="sendEntrar" class="btn">Entrar</button>
                    <a href="" title="">Esqueceu sua senha?</a>
                </form> <!-- FIM FORMULARIO ACESSO -->

                <form action="" method="post" id="CadastroSite"> <!-- INICIO FORMULARIO CADASTRO -->
                    <input type="text" name="nome" id="" placeholder="Digite seu nome completo">
                    <input type="email" name="email" id="" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" id="" placeholder="Digite sua senha">
                    <button type="submit" name="sendCadastro" class="btn">Cadastre-se</button>
                </form> <!-- FIM FORMULARIO CADASTRO -->

            </div>
        </div> <!-- FIM FORMULÁRIO ACESSO/CADASTRO -->

    </div>

</div>

</div> <!-- FIM MINHA CONTA -->

<!-- FIM ÁREA LOGIN -->

<script src="assets/js/minhaConta.js"></script>

<?php
    require_once('footer.php');
?>