let assuntosQ = window.document.getElementById("assuntosQ")
let assuntosF = window.document.getElementById("assuntosF")
let assuntosB = window.document.getElementById("assuntosB")
let bgFisica = document.getElementById("fisica");
let bgQuimica = document.getElementById("quimica");
let bgBiologia = document.getElementById("biologia");

function exibirQuimica() {
  if (assuntosF.style.display == "inline") {
    assuntosF.style.display = "none"
    assuntosQ.style.display = "inline";

  } else if (assuntosB.style.display == "inline") {
    assuntosB.style.display = "none"
    assuntosQ.style.display = "inline";
  }
  else {
    assuntosQ.style.display = "inline";
  }

}
function exibirFisica() {
  if (assuntosQ.style.display == "inline") {
    assuntosQ.style.display = "none";
    assuntosF.style.display = "inline";


  } else if (assuntosB.style.display == "inline") {
    assuntosB.style.display = "none";
    assuntosF.style.display = "inline";

  }
  else {
    assuntosF.style.display = "inline";
  }
}
function exibirBiologia() {
  if (assuntosF.style.display == "inline") {
    assuntosF.style.display = "none";
    assuntosB.style.display = "inline";


  } else if (assuntosQ.style.display == "inline") {
    assuntosQ.style.display = "none";
    assuntosB.style.display = "inline";

  }
  else {
    assuntosB.style.display = "inline";
  }
}

function exibirCin() {
  let content = document.getElementById("conteudoCin")
  content.classList.toggle('conteudo');
}
function exibirDin() {
  let content = document.getElementById('conteudoDin');
  content.classList.toggle('conteudo');
}
function exibirEs() {
  let content = document.getElementById('conteudoEs');
  content.classList.toggle('conteudo');
}
function exibirOp() {
  let content = document.getElementById('conteudoOp');
  content.classList.toggle('conteudo');
}
function exibirOnd() {
  let content = document.getElementById('conteudoOnd');
  content.classList.toggle('conteudo');
}
function exibirTerm() {
  let content = document.getElementById('conteudoTerm');
  content.classList.toggle('conteudo');
}
function exibirElet() {
  let content = document.getElementById('conteudoElet');
  content.classList.toggle('conteudo');
}
function exibirCon() {
  let content = document.getElementById('conteudoCon');
  content.classList.toggle('conteudo');
}
function exibirMis() {
  let content = document.getElementById('conteudoMis');
  content.classList.toggle('conteudo');
}
function exibirTab() {
  let content = document.getElementById('conteudoTab')
  content.classList.toggle('conteudo');
}
function exibirMod() {
  let content = document.getElementById('conteudoMod')
  content.classList.toggle('conteudo');
}
function exibirLigQ() {
  let content = document.getElementById('conteudoLigQ');
  content.classList.toggle('conteudo');
}
function exibirRadio() {
  let content = document.getElementById('conteudoRadio');
  content.classList.toggle('conteudo');
}
function exibirEsteq() {
  let content = document.getElementById('conteudoEsteq');
  content.classList.toggle('conteudo');
}
function exibirTermQ() {
  let content = document.getElementById('conteudoTermQ');
  content.classList.toggle('conteudo');
}
function exibirEqui() {
  let content = document.getElementById('conteudoEquiQ');
  content.classList.toggle('conteudo');
}
function exibirOrgan() {
  let content = document.getElementById('conteudoOrgan');
  content.classList.toggle('conteudo');
}
function exibirIso() {
  let content = document.getElementById('conteudoIso');
  content.classList.toggle('conteudo');
}
function exibirCito() {
  let content = document.getElementById('conteudoCito')
  content.classList.toggle('conteudo')
}
function exibirEco() {
  let content = document.getElementById('conteudoEco')
  content.classList.toggle('conteudo')
}
function exibirCitoplas() {
  let content = document.getElementById('conteudoCitoplas')
  content.classList.toggle('conteudo')
}
function exibirNucleo() {
  let content = document.getElementById('conteudoNucleo')
  content.classList.toggle('conteudo')
}
function exibirRepro() {
  let content = document.getElementById('conteudoRepro')
  content.classList.toggle('conteudo')
}
function exibirGen() {
  let content = document.getElementById('conteudoGen')
  content.classList.toggle('conteudo')
}
function exibirEmbrio() {
  let content = document.getElementById('conteudoEmbrio')
  content.classList.toggle('conteudo')
}
function exibirEvo() {
  let content = document.getElementById('conteudoEvo')
  content.classList.toggle('conteudo')
}
function exibirBioQ() {
  let content = document.getElementById('conteudoBioQ')
  content.classList.toggle('conteudo')
}