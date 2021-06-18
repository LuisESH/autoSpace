function  edad() {



 do {
   var edad = prompt("introduce tu edad");
       if (Number(edad)==edad) {
       edad = Number(edad);

       }
else {
  if (edad!=undefined) {
    alert("introduce un numero");
  }
}

} while (confirm("dale clic en cancelar para confirmar tu es tu edad"));
if (edad>=18) {
  alert( "ya puedes tener tu licencia de conducir de forma legal");
}
else {
  alert("todavia no puedes tener tu licencia de conducir de forma legal");
}
  }
