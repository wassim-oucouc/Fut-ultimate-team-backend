const closemodal = document.querySelector(".sr-only");
const modal_joueur = document.querySelector(".modal-add");


console.log(modal_joueur);
closemodal.addEventListener("click",function(){
    modal_joueur.computedStyleMap.display = "none";
})