<?php
    require_once('header.php');
?>

<!-- INICIO CARRINHO -->

<div class="corpo-categorias carrinho-compras">

<table> <!-- INICIO TABELA -->

   <tr> <!-- INICIO CABEÇALHO -->
       <th>Produto</th>
       <th>Quantidade</th>
       <th>Valor</th>
   </tr> <!-- FIM CABEÇALHO -->

   <tr> <!-- INICIO ITEM 1 -->
       <td>
           <div class="info-carrinho">
               <img src="assets/img/carrinho-1.jpg" alt="">

               <div>
                   <p>Cosmos - Carl Sagan</p>
                   <small>Valor: R$35,00</small>
                   <br>
                   <a href="" title="">Remover</a>
               </div>
           </div>
       </td>
       <td>
           <form action="" method="post"> 
               <input type="number" name="" id="" value="1">
           </form>
       </td>
       <td>R$35,00</td>
   </tr> <!-- FIM ITEM 1 -->

   <tr> <!-- INICIO ITEM 2 -->
       <td>
           <div class="info-carrinho">
               <img src="assets/img/carrinho-2.jpg" alt="">

               <div>
                   <p>Cosmos - Carl Sagan</p>
                   <small>Valor: R$35,00</small>
                   <br>
                   <a href="" title="">Remover</a>
               </div>
           </div>
       </td>
       <td>
           <form action="" method="post"> 
               <input type="number" name="" id="" value="1">
           </form>
       </td>
       <td>R$35,00</td>
   </tr> <!-- FIM ITEM 2 -->

   <tr> <!-- INICIO ITEM 3 -->
       <td>
           <div class="info-carrinho">
               <img src="assets/img/carrinho-3.jpg" alt="">

               <div>
                   <p>Cosmos - Carl Sagan</p>
                   <small>Valor: R$35,00</small>
                   <br>
                   <a href="" title="">Remover</a>
               </div>
           </div>
       </td>
       <td>
           <form action="" method="post"> 
               <input type="number" name="" id="" value="1">
           </form>
       </td>
       <td>R$35,00</td>
   </tr><!-- FIM ITEM 3 -->

</table> <!-- FIM TABELA -->


 <div class="valor-total"> <!-- INICIO VALOR TOTAL -->
   <table>

       <tr>
           <td>Subtotal</td>
           <td>R$105,00</td>
       </tr>

       <tr>
           <td>Frete</td>
           <td>R$10,00</td>
       </tr>

       <tr>
           <td>Total</td>
           <td>R$115,00</td>
       </tr>


   </table> <!-- FIM VALOR TOTAL -->
 </div>


</div>

<!-- FIM CARRINHO -->

<?php
    require_once('footer.php');
?>