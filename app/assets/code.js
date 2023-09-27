const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.id = document.getElementById("id");
    this.titulo = document.getElementById("titulo");
    this.nombre = document.getElementById("nombre");


    this.listado = () => {
        fetch("./app/controllers/listado.php")
            .then((res) => res.json())
            .then((data) => {
                this.tbody.innerHTML = "";      //La variable app, podrá eliminar y actualizar el dato
                data.forEach((item) => {     //Recorre todos los datos con forEach
                    this.tbody.innerHTML += `              
                <tr>
                    <td>${item.id}</td>
                    <td>${item.titulo}</td>
                    <td>${item.nombre}</td>
                    <td>
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</a> 
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.eliminar(${item.id})">Eliminar</a>
                    </td>
                </tr>
                `;
                });
            })
            .catch((error) => console.log(error));
            
    };
    this.guardar = () => {
        var form = new FormData();
        form.append("id", this.id.value);
        form.append("nombre", this.nombre.value);
        form.append("titulo", this.titulo.value);
        //console.log(this.id.value);
        //console.log(this.nombre.value);
        //console.log(this.titulo.value);
        if (this.id.value == "") {
        fetch("./app/controllers/guardar.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
              alert("Creado con exito");
              this.listado();
              this.limpiar();
            })
            .catch((error) => console.log(error));
        }else {
         fetch("./app/controllers/actualizar.php", {
            method: "POST",
            body: form,
         })
          .then((res) => res.json())
          .then((data) => {
            alert("Actualizado con exito");
            this.listado();
            this.limpiar();
          })
          .catch((error) => console.log(error));
        }
    };        
    this.editar = (id) => {
      var form = new FormData();
      form.append("id", id);
      fetch("./app/controllers/editar.php", {
        method: "POST",
        body: form,
      })
        .then((res) => res.json())
        .then((data) => {
            this.id.value = data.id;
            this.titulo.value = data.titulo;
            this.nombre.value = data.nombre;
        })
        .catch((error) => console.log(error));
    };
    this.eliminar = (id) => {
      var form = new FormData();
      form.append("id" , id);
        fetch("./app/controllers/eliminar.php", {
        method: "POST",
        body: form,
    })
        .then((res) => res.json())
        .then((data) => {
            alert("Eliminado con exito");
            this.listado();
        })
       .catch((error) => console.log(error));
    };
    this.limpiar = () => {
        this.id.value = "";
        this.titulo.value = "";
        this.nombre.value = "";
    };
})();
app.listado(); 
//Aquí llamamos a la función, para llamar los datos
//Dentro de app, está guardar, en donde hacemos referencia a onsubmit

//PÁRRAFO

const app_p = new (function () {
    this.tbody_p = document.getElementById("tbody_p");
    this.id = document.getElementById("idp");
    this.descripcion = document.getElementById("descripcion");
    this.id_seccion = document.getElementById("id_seccionp");

    this.listado = () => {
      fetch("./app/controllers/listadop.php")
            .then((res) => res.json())
            .then((data) => {
                this.tbody_p.innerHTML = "";      //La variable app, podrá eliminar y actualizar el dato
                data.forEach((item) => {     //Recorre todos los datos con forEach
                    this.tbody_p.innerHTML += `              
                <tr>
                    <td>${item.id}</td>
                    <td>${item.descripcion}</td>
                    <td>${item.id_seccion}</td>
                    <td>
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app_p.editar(${item.id})">Editar</a> 
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app_p.eliminar(${item.id})">Eliminar</a>
                    </td>
                </tr>
                `;
                });
            })
            .catch((error) => console.log(error));
            //console.log(data);
            
    };
    this.guardar = () => {
        var form = new FormData();
        form.append("idp", this.id.value);
        form.append("descripcion", this.descripcion.value);
        form.append("id_seccionp", this.id_seccion.value);

        if (this.id.value == "") {
        fetch("./app/controllers/guardarp.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
              alert("Creado con exito");
              this.listado();
              this.limpiar();
            })
            .catch((error) => console.log(error));
        }else {
         fetch("./app/controllers/actualizarp.php", {
            method: "POST",
            body: form,
         })
          .then((res) => res.json())
          .then((data) => {
            alert("Actualizado con exito");
            this.listado();
            this.limpiar();
          })
          .catch((error) => console.log(error));
        }
    };
    this.editar = (id) => {
        var form = new FormData();
        
        form.append("idp", id);
        fetch("./app/controllers/editarp.php",{
          method: "POST",
          body: form,
        })
        .then((res) => res.json())
        .then((data) => {
          this.descripcion.value = data.descripcion;
          this.seccion_idp.value = data.section_id;
        })
        .catch((error) => console.log(error));
    };
    this.eliminar = (id) => {
      var form = new FormData();
      form.append("id" , id);
        fetch("./app/controllers/eliminarp.php", {
        method: "POST",
        body: form,
    })
        .then((res) => res.json())
        .then((data) => {
            alert("Eliminado con exito");
            this.listado();
        })
       .catch((error) => console.log(error));
    };
    this.limpiar = () => {
        this.id.value = "";
        this.descripcion.value = "";
        this.id_seccion.value = "";
    };
})();
app_p.listado(); 

//IMAGEN

const appI = new (function () {

    this.tbodyI = document.getElementById("tbodyI");
    this.id = document.getElementById("idI");
    this.imagen = document.getElementById("imagen");
    this.id_seccion = document.getElementById("id_seccionI");

    this.listado = () => {
       
       fetch("./app/controllers/listadoI.php")

            .then((res) => res.json())
            .then((data) => {
                this.tbodyI.innerHTML = "";      //La variable app, podrá eliminar y actualizar el dato
                data.forEach((item) => {     //Recorre todos los datos con forEach {item.imagen} es el url dinámico
                    this.tbodyI.innerHTML += `              
                <tr>
                    <td>${item.id}</td>
                    <td>
                        <img src=${item.imagen}>${item.imagen}</img>
                    </td> 
                    <td>${item.id_seccion}</td>
                    <td>
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="appI.editar(${item.id})">Editar</a> 
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="appI.eliminar(${item.id})">Eliminar</a>
                    </td>
                </tr>
                `;
                });
            })
            .catch((error) => console.log(error));
            //console.log($imag);
    };
    this.guardar = () => {
        var form = new FormData();
        form.append("idI", this.id.value);
        form.append("imagen", this.imagen.value);
        form.append("id_seccionI", this.id_seccion.value);
        if (this.id.value == "") {
        fetch("./app/controllers/guardarI.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
              alert("Creado con exito");
              this.listado();
              this.limpiar();
            })
            .catch((error) => console.log(error));
        }else {
         fetch("./app/controllers/actualizarI.php", {
            method: "POST",
            body: form,
         })
          .then((res) => res.json())
          .then((data) => {
            alert("Actualizado con exito");
            this.listado();
            this.limpiar();
          })
          .catch((error) => console.log(error));
        }
    };
    this.editar = (id) => {
        var form = new FormData(); //esta enviando datos al servidor através de FormData       
        form.append("id", id); //idI mi parámetro en el formulario con el valor de id. Utiliza POST 
        fetch("./app/controllers/editarI.php",{
          method: "POST",
          body: form,
        })
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
          //this.imagen.value = data.descripcion; al no tener un objeto, genereaba problema, en vez de editar la imagen, editamos la sección
          this.id_seccion.value = data.id_seccion;
        })
        .catch((error) => console.log(error));
   };
    this.eliminar = (id) => {
      var form = new FormData();
      form.append("id" , id);
        fetch("./app/controllers/eliminarI.php", {
        method: "POST",
        body: form,
    })
        .then((res) => res.json())
        .then((data) => {
            alert("Eliminado con exito");
            this.listado();
        })
       .catch((error) => console.log(error));
    };
    this.limpiar = () => {
        this.id.value = "";
        this.imagen.value = "";
        this.id_seccion.value = "";
    };
})();
appI.listado(); 







