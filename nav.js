const botonAbrir = document.querySelector(".boton-abrir");
const botonCerrar = document.querySelector(".boton-cerrar");
const lista = document.querySelector(".lista");
const enlaces = lista.querySelectorAll(".enlace");

botonAbrir.addEventListener("click", () => {
  botonAbrir.style.display = "none";
  lista.style.display = "flex"
});

botonCerrar.addEventListener("click", () => {
  botonAbrir.style.display = "block";
  lista.style.display = "none";
});

enlaces.forEach(enlace => {
  enlace.addEventListener("click", () => {
    lista.style.display = "none"; 
    botonAbrir.style.display = "block"; 
  });
});