var counter = 1;
var limit = 3;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<form>Lugar<br><select name='lugar'><option value='DGI'>DGI</option><option value='BPS'>BPS</option><option value='BPS-DGI'>BPS-DGI</option><option value='MTSS'>MTSS</option><option value='IMM'>IMM</option><option value='MACHADO'>MACHADO</option><option value='OTRO'>OTRO</option></select><br><br>Empresa<br><input type='text' name='empresa'><br><br>Trámite<br><input type='text' name='tramite'><br><br>Comentario<br><textarea name='comentario'></textarea><br><br>Gastos<br><input type='text' name='gastos' value='$ '><br><br></form>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
