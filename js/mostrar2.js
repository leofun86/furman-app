  var i=0;

  while (i < 32) {
    function Mostrar() {
      document.getElementById("caja").style.display = "block";
    }
    function Ocultar1() {
      document.getElementById("caja").style.display = "none";
    }
    function Mostrar_Ocultar() {
      var caja = document.getElementById("caja");

      if (caja.style.display == "none") {
        Mostrar1();
      }
      else {
        Ocultar();
      }
    }
    i++;
  }
