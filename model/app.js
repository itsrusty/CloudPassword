// dom element
const buttonDelete = document.querySelector("#delete-button");

// event listeners
buttonDelete.addEventListener("click", showMessageDelete)

// functions
function showMessageDelete(){
    alert("Elemento eliminado exitosamente");
}