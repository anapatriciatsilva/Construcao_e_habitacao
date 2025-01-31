function abrirEmpreendimentos(){
  setTimeout(clicarEmpreendimentos, 600);
}

function clicarEmpreendimentos(){
  let link_empreendimentos = document.querySelector("#link_empreendimentos");
  link_empreendimentos.click();
}

function scrollAutomatico(menu_atual){
  if(menu_atual != "home"){
    let main = document.querySelector("main");
    main.scrollIntoView();
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var toggler = document.getElementById('icone-menu');
  var fecharIcone = document.getElementById('icone-fechar');
  var navbarNav = document.getElementById('navbarNav');

  toggler.addEventListener('click', function() {
      if (navbarNav.classList.contains('show')) {
          toggler.style.display = 'block';
          fecharIcone.style.display = 'none';
      } else {
          toggler.style.display = 'none';
          fecharIcone.style.display = 'block';
      }
  });

  fecharIcone.addEventListener('click', function() {
      toggler.style.display = 'block';
      fecharIcone.style.display = 'none';
      navbarNav.classList.remove('show');
  });
});
