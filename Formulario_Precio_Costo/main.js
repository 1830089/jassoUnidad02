class Producto{
   constructor(nombre,precio,cantidad){
      this.nombre=nombre;
      this.precio=precio;
      this.cantidad=cantidad;
   }
}

class UsuarioInterfaz{
   Aproducto(producto){
      const productolista= document.getElementById("producto-lista");
      const elemento= document.createElement("div");
      elemento.innerHTML= '<div class="card text-center mb-4"><div class"card-body"><strong>Nombre del producto</strong>:'+producto.nombre+'<strong>Precio del producto</strong>:'+producto.precio+'<strong>Cantidad del producto</strong>:'+producto.cantidad+' <a href="#" class="btn btn-danger" name="borrar">Borrar</a></div></div>';
      productolista.appendChild(elemento);
      this.calcular(producto.precio,producto.cantidad);

   }

   resetearFormulario(){
      document.getElementById("producto-formulario").reset();
   }

   Bproducto(elemento){
      if(elemento.name === "borrar"){
         elemento.parentElement.parentElement.parentElement.remove();
         this.MostrarMensaje("el producto se elimino exitosamente","info");
      }
   }

   MostrarMensaje(mensaje, cssClass){
      const div= document.createElement("div");
      div.className="alert alert-"+cssClass+" mt-2";
      div.appendChild(document.createTextNode(mensaje));

      //mostrar en el dom

      const container= document.querySelector(".container");
      const app= document.querySelector("#App");
      container.insertBefore(div, app);
      setTimeout(function(){
         document.querySelector(".alert").remove();
      }, 1000);

   }

   calcular(precio,cantidad){
      let reGcantidad=Gcantidad;
      let reGiva= Giva;
      let reGcantidadTotal= GcantidadTotal;

      Gcantidad= (precio*cantidad)+reGcantidad;
      Giva= ((0.16*precio)*cantidad)+reGiva;
      GcantidadTotal= Gcantidad+Giva;
   }

   MostrarCalculo(){
      const mostrarCalculo=document.getElementById("calcular");
      const elementodiv= document.createElement("div");
      elementodiv.innerHTML= '<div class="card text-center mb-4"><div class"card-body"><strong>Subtotal </strong>:'+Gcantidad+'<br><strong>Iva </strong>:'+Giva+'<strong>Total </strong>:'+GcantidadTotal+'</div></div>';
      mostrarCalculo.appendChild(elementodiv);
   }

   EliminarCalculo(elemento){

   }
}
var Gcantidad=0;
var Giva=0;
var GcantidadTotal=0;
//eventos del dom
document.getElementById("producto-formulario").addEventListener("submit",function(e){
   
   //valor de cada componente de nuestro formulario
   const nombre= document.getElementById("nombre-producto").value;
   const precio= document.getElementById("precio-producto").value;
   const cantidad= document.getElementById("cantidad-producto").value;

   //instanciamos la clase producto

   const producto= new Producto(nombre,precio,cantidad);

   //instanciamos la clase interfaz
   const Ui= new UsuarioInterfaz();

   if(nombre === ''||precio === '' ||cantidad === ''){
      return Ui.MostrarMensaje("Complete los campos porfavor", "danger");
   }

   //añadir producto
   Ui.Aproducto(producto);

   //resetear formulario
   Ui.resetearFormulario();

   //mensaje
   Ui.MostrarMensaje("producto agregado satisfactoriamente","success")

   //para que no se actualice la pagina despues del evento
   e.preventDefault();
});


//borrar elemento
document.getElementById("producto-lista").addEventListener("click",function(e){
   const Ui= new UsuarioInterfaz();
   Ui.Bproducto(e.target);
});


//evento calcular

document.getElementById("calcular").addEventListener("click",function(e){
   const Ui= new UsuarioInterfaz();
   Ui.MostrarCalculo();
});