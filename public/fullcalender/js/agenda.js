// const { default: axios } = require("axios");

document.addEventListener('DOMContentLoaded', function() {

  //var baseURL = json_encode(url('/'))

    let formulario = document.querySelector("form")

    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',

      locale:"es",
      displayEventTime:false,
     
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth'
      },
      

      //events: "http://127.0.0.1:8000/evento/mostrar",

  
      dateClick: function(info) {
        formulario.reset();
        formulario.start.value=info.dateStr;
        formulario.end.value=info.dateStr;

        $("#evento").modal("show");
        
      },
      eventClick:function (info) {
        var evento = info.event;
        console.log(evento);

      axios.post(baseURL+"/evento/editar/"+info.event.id).
      then(
        (respuesta) =>{

          formulario.id.value = respuesta.data.id
          formulario.title.value = respuesta.data.title
          formulario.descripcion.value = respuesta.data.descripcion
          formulario.start.value = respuesta.data.start
          formulario.end.value = respuesta.data.end

          $("#evento").modal("show");
        }

        ).catch(

          error=>{
            if(error.response){
              console.log(error.response.data);
            }
          }
        )
        
      }

    });
    calendar.render();
    calendar.addEventSource(baseURL+"/evento/mostrar" )

    document.getElementById("btnguardar").addEventListener("click",function(){

      enviardatos("/evento/agregar")
    
      
    })

    document.getElementById("btneliminar").addEventListener("click",function(){

      enviardatos("/evento/borrar/"+formulario.id.value)
    })

    document.getElementById("btnmodificar").addEventListener("click",function(){

      enviardatos("/evento/actualizar/"+formulario.id.value)
    })



    function enviardatos(url) {

      const datos = new FormData(formulario);
      // console.log(datos);
      // console.log(formulario.title.value)
      const newURL = baseURL+url;

      axios.post(newURL, datos).
      then(
        (respuesta) =>{
          calendar.refetchEvents()
          $("#evento").modal("hide");
        }

        ).catch(error=>{if(error.response){console.log(error.response.data);}})
      
    }





  });