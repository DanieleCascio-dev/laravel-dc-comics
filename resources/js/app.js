import "./bootstrap";

import "~resources/scss/app.scss";
// Per permettere a vite di processare le immagini
import.meta.glob(["../img/**"]);

// Importiamo parte js di bootstrap css
import * as bootstrap from "bootstrap";

/* let deleteButton = document.querySelector(".btn-danger");
console.log(deleteButton);
deleteButton.addEventListener("click", (event) => {
    event.preventDefault();
    prompt("Sei sicuro?");
});
console.log("ciao"); */
