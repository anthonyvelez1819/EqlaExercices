let bouton = document.getElementById("monBouton");
bouton.addEventListener("click", buttonClicked);
function buttonClicked(){
if (bouton.textContent == "pas cliqué"){
    bouton.textContent = "cliqué";
}else {
    bouton.textContent = "pas cliqué";
}
}