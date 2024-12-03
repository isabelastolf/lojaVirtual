let produtoImg = document.getElementById("produtoImg");

let produtoMiniatura = document.getElementsByClassName("produtoMiniatura");
if (produtoMiniatura.length) {
  produtoMiniatura[0].onclick = function () {
    produtoImg.src = produtoMiniatura[0].src;
  };

  produtoMiniatura[1].onclick = function () {
    produtoImg.src = produtoMiniatura[1].src;
  };

  produtoMiniatura[2].onclick = function () {
    produtoImg.src = produtoMiniatura[2].src;
  };
}
