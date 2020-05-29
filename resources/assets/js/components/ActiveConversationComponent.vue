<template>
 <b-row>
      <b-col cols="8">
        <b-card
            footer-bg-variant="light"
            footer-border-variant="dark"
            title="Conversacion Activa"
            class="h-80">

        <message-conversation-component 
        v-for="message in messages"
        :key="message.id" :written-by-me="message.written_by_me">

            {{message.content}}
    
        </message-conversation-component>


            <div slot="footer">
                <b-form class="mb-0">
                    <b-input-group>
                         <b-form-input class="text-center"
                            type="text"
                            placeholder="Escribe un mensaje">
                        </b-form-input>
                        <b-input-group-append>
                            <b-button variant="primary">Enviar</b-button>
                        </b-input-group-append>
                    </b-input-group>
                </b-form>     
            </div>
        </b-card>
         </b-col>
        <b-col cols="4">
            <b-img rounded="circle" blank width="50" height="50" blank-color="#777" alt="img" class="m-1"></b-img>
            <p>Usuario Seleccionado</p>
            <br>
        <b-form-checkbox>
             Desactivar notificaciones
        </b-form-checkbox>
        </b-col>
 </b-row>

</template>


<script>
    export default {
        data() {
            return{
               messages:[

               ]
            };
        },
        mounted() {
            axios.get('/api/messages')
            .then((response) => {
                console.log(response.data)
                this.messages = response.data;
            });
            
            
        }
    }
</script>
