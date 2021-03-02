function guardarGasto () {
    event.preventDefault();
    const myObject = new Vue({
        created () {
            this.crearGasto()
        },
        methods : {
            async crearGasto(){

                let data = {
                    datos  : {
                        gasto   : $( '#nombre' ).val(),
                        estado  : $( '#estado' ).prop('checked')
                    }
                  };
      
                const resp = await  axios.post( '/gastos/crear', data );
                  if(resp.status == 200){
                    console.log(resp)
                    createMessageToast( 'Creación exitosa', 'success' )
                  }else{
                    console.log(resp)
                    createMessageToast( 'Error creando', 'error' )
                  }
              },
    
            createPersona (){
                let persona = this.persona
                console.log(persona)
                axios.post('/user', {
                    persona: persona
                  })
                  .then(function (response) {
                    console.log(response);
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
    
        },
        computed: {
    
        }
    
    })
}