const table_row = document.querySelectorAll(".table-row");
const btnVerImg = document.getElementById("verImg");

function verModal() {
  const myModal = new bootstrap.Modal("#modalImagen");
  myModal.show();
}

function tablaActiva(tr) {
  let trActiva = document.querySelector(".table-active");
  if (trActiva !== null) trActiva.classList.remove("table-active");

  tr.classList.add("table-active");
}

table_row.forEach((tr) => {
  tr.addEventListener("click", (e) => tablaActiva(tr));
});

btnVerImg.addEventListener("click", verModal);
