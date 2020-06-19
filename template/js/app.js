function moduleMouseOver(title, icon) {
  let moduleTitle = document.getElementById(title);
  let moduleIcon = document.getElementById(icon);

  moduleTitle.style.background = "rgb(52,58,64)";
  moduleTitle.style.color = "rgba(255,255,255,.7)";
  moduleIcon.style.color = "rgba(52,58,64,0.9)";
}

function moduleMouseOut(title, icon) {
  let moduleTitle = document.getElementById(title);
  let moduleIcon = document.getElementById(icon);

  moduleTitle.style.background = "rgba(52,58,64,0.5)";
  moduleTitle.style.color = "rgb(52,58,64)";
  moduleIcon.style.color = "rgba(52,58,64,0.5)";
}

function viewPassword(){
  var cont=0;

  if (document.getElementById("senha").getAttribute("type") == "password") {
    document.getElementById("eye").setAttribute("class", "fas fa-eye-slash");
    document.getElementById("senha").setAttribute("type", "text");
    document.getElementById("eye").setAttribute("title", "Ocultar senha");
    cont = 1;
  }
  if (cont==0) {
    document.getElementById("eye").setAttribute("class", "fas fa-eye");
    document.getElementById("senha").setAttribute("type", "password");
    document.getElementById("eye").setAttribute("title", "Mostrar senha");
  }
}

function mask(e, id, mask){
  var tecla=(window.event)?event.keyCode:e.which;   
  if((tecla>47 && tecla<58)){
    mascara(id, mask);
    return true;
  } 
  else{
    if (tecla==8 || tecla==0){
      mascara(id, mask);
      return true;
    } 
    else  return false;
  }
}

function mascara(id, mask){
  var i = id.value.length;
  var carac = mask.substring(i, i+1);
  var prox_char = mask.substring(i+1, i+2);
  if(i == 0 && carac != '#'){
    insereCaracter(id, carac);
    if(prox_char != '#')insereCaracter(id, prox_char);
  }
  else if(carac != '#'){
    insereCaracter(id, carac);
    if(prox_char != '#')insereCaracter(id, prox_char);
  }
  function insereCaracter(id, char){
    id.value += char;
  }
}