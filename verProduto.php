<?php
    require_once('header.php');
?>

<!-- INICIO PRODUTO -->
<div class="corpo-categorias ver-produto"> <!-- INICIO PRODUTO DETALHES -->

<div class="row">

    <div class="col-3">

        <img src="assets/img/livro3-10.jpg" alt="" id="produtoImg">

        <div class="img-linha"> <!-- INICIO LINHA GALERIA -->

            <div class="img-col">  <!-- INICIO ITEM GALERIA -->
                <img src="assets/img/livro3-10.jpg" alt="" width="100%" class="produtoMiniatura">
            </div>  <!-- FIM ITEM GALERIA --> 

            <div class="img-col">  <!-- INICIO ITEM GALERIA -->
                <img src="assets/img/detalhe-livro.jpg" alt="" width="100%" class="produtoMiniatura">
            </div>  <!-- FIM ITEM GALERIA --> 

            <div class="img-col">  <!-- INICIO ITEM GALERIA -->
                <img src="assets/img/detalhe-autor.jpg" alt="" width="100%" class="produtoMiniatura">
            </div>  <!-- FIM ITEM GALERIA --> 
        
        </div> <!-- FIM LINHA GALERIA -->

    </div>

    <div class="col-3">

        <p>Cosmos - Carl Sagan</p>
        <h1>Compre com desconto</h1>
        <h4>R$35,00</h4>

        <form action="" method="post">

            <select name="" id="">
                <option value="">Selecione</option>
                <option value="">Capa Dura</option>
                <option value="">Capa Comum</option>
                <option value="">E-livro</option>
            </select>

            <input type="number" value="1">

            <button type="submit" class="btn">Adicionar ao Carrinho</button>

        </form>

        <h3>Descrição:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula dui, pharetra at est ac, eleifend eleifend turpis. Donec sodales leo et metus tincidunt maximus. Nullam ac quam imperdiet, tincidunt mi eget, pharetra leo. Praesent vulputate volutpat venenatis. Nam eget tempor arcu. Vivamus eget sodales eros. Quisque aliquam volutpat felis, vitae viverra nunc maximus sed. Pellentesque ac fermentum lectus. Nunc odio nisl, consectetur quis porta quis, suscipit sit amet urna. Cras sit amet dignissim magna, sit amet fringilla dolor. Aenean posuere suscipit elementum. </p>
        <p>Aliquam erat volutpat. Fusce non tempus lacus. Fusce dictum in quam vitae maximus. Maecenas egestas nibh ac neque aliquam vehicula vitae ac nunc. Aliquam semper nulla eros, et efficitur eros laoreet sed.</p>

    </div>

</div>

</div> <!-- FIM PRODUTO DETALHES -->

<div class="corpo-categorias"> <!-- INICIO TITULO RELACIONADOS -->

<div class="row">

    <h2>Produtos Relacionados</h2>

    <p>Veja Mais</p>

</div>

</div> <!-- FIM TITULO RELACIONADOS -->

<div class="corpo-categorias"> <!-- INICIO CORPO PRODUTOS RELACIONADOS -->

<div class="row"> <!-- INICIO LINHA CORPO PRODUTOS RELACIONADOS -->

    <div class="col-4"> <!-- INICIO PRODUTOS RELACIONADOS -->

        <a href="verProduto.php">
            <img src="assets/img/livro3-2.jpg" alt="Capa do livro">
        </a>

        <h4>Titulo do Livro</h4>

        <div class="classificacao">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-half"></ion-icon>
        </div>

        <p>R$ 32,00</p>

    </div><!-- FIM PRODUTOS RELACIONADOS -->

</div><!-- FIM LINHA CORPO PRODUTOS RELACIONADOS -->

</div> <!-- FIM CORPO PRODUTOS RELACIONADOS -->

<!-- FIM PÁGINA PRODUTO -->

<script src="assets/js/verProduto.js"></script>

<?php
    require_once('footer.php');
?>