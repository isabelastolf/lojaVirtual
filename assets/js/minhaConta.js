let EntrarPainel = document.getElementById("EntrarPainel");
let CadastroSite = document.getElementById("CadastroSite");
let Indicador = document.getElementById("Indicador");

function Cadastro() {
  CadastroSite.style.transform = "translateX(0rem)";
  EntrarPainel.style.transform = "translateX(0rem)";
  Indicador.style.transform = "translateX(6.9rem)";
}

function Entrar() {
  CadastroSite.style.transform = "translateX(17.5rem)";
  EntrarPainel.style.transform = "translateX(17.5rem)";
  Indicador.style.transform = "translateX(0rem)";
}
