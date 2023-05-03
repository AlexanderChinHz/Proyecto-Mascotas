// import './bootstrap';
import 'flowbite';

let miDiv = document.getElementById("miDiv");
        miDiv.innerHTML = "<p>Este es un texto agregado desde JavaScript.</p>";
     
        // Agregar evento 'click' al documento
  document.addEventListener("click", function(event) {
    // Si el clic no fue dentro del div, ocultarlo
    if (!miDiv.contains(event.target)) {
      miDiv.style.display = "none";
    }
  });