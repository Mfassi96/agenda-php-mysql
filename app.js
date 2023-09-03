const bauble=document.getElementById('bauble_check');
const titulo=document.getElementById('titulo')
const inputnombre=document.getElementById('inputnombre')
const inputDireccion=document.getElementById('inputdireccion')
const inputCar=document.getElementById('inputcaracteristica')
const inputnumTel=document.getElementById('numerotelefono')
const btn=document.getElementById('btnEnviar')
const tabla=document.getElementById('tablaContactos')



bauble.addEventListener('click',()=>{
   if(bauble.checked){
    document.body.classList.add('darkmode')
    // tabla.classList.remove('table')
    // tabla.classList.add('table-dark')
   }else{
    document.body.classList.remove('darkmode')
    // tabla.classList.remove('table-dark')
    // tabla.classList.add('table')

   }
})

let nombre
let edad
let numero

inputnombre.addEventListener('click',()=>{
  Swal.fire({
    title: "Ingrese su nombre",
    input: "text",
    inputPlaceholder: "Ingrese su nombre",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      inputnombre.value=result.value
    }
  });
});


inputDireccion.addEventListener('click',()=>{
  Swal.fire({
    title: "Ingrese una direccion",
    input: "text",
    inputPlaceholder: "Ingrese una direccion",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      inputDireccion.value=result.value
    }
  });

})  ;


