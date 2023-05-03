<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav id="miNav">
        <ul>
          <li>Elemento 1</li>
          <li>Elemento 2</li>
        </ul>
        
        <div id="miDiv">
          Contenido del div hola
        </div>
      </nav>
      
      {{-- <div id="miDiv" style="border: 1px solid black;"></div> --}}


      <script>
        let miDiv = document.getElementById("miDiv");
        miDiv.innerHTML = "<p>Este es un texto agregado desde JavaScript.</p>";
     
        // Agregar evento 'click' al documento
  document.addEventListener("click", function(event) {
    // Si el clic no fue dentro del div, ocultarlo
    if (!miDiv.contains(event.target)) {
      miDiv.style.display = "none";
    }
  });
     
     </script>

</body>
</html>