

<template>
   <div class="row">
 <div class="col-4">
            <div class="card bg-dark text-white">
                <div class="card-header bg-primary text-center">ONLINE GLOBAL MEMBERS</div>
                <div class="card" style="background:rgba(0,0,0,0.8);">
                    <ul>
                        <li class="py-2" v-for="(user, index) in users" :key="index">
                            {{ user.name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

       <div class="col-8">
           <div class="card" style="background:rgba(0,0,0,0.8);">
               <div class="card-header text-center text-primary border" style="background-color:black;font-size:40px;"><strong>CHATROOM</strong></div>
               <div class="card-body p-0">
                   <ul class="list-unstyled" style="height:400px; overflow-y:scroll" v-chat-scroll>
                       <li class="p-2" v-for="(message, index) in messages" :key="index" >


                      
                          <div v-if="message.user.name == user.name" class="text-primary">

                                  <strong>You</strong> </br>
                                    <div class="btn btn-primary text-light" style="max-width:100%;border-radius:16px"> 
                                   {{ message.message }}    
                                     </div> 
                                             
                           </div>
                      
                           <div v-else>
                             <div class="text-primary">{{message.user.name}}</br></div>
                                  <div  class="btn btn-dark text-light" style="max-width:100%;border-radius:16px;"> 
                                       {{ message.message }}
                                  </div>     
                                        </br>
                                      <p style="color:white; font-style:italic; font-size:12px;">{{ message.created_at}}</p> 
                         </div>
                       
                       </li>
                   </ul>
               </div>

               <input
                    @keydown="sendTypingEvent"
                    @keyup.enter="sendMessage"
                    v-model="newMessage"
                    type="text"
                    name="message"
                    placeholder="Enter your message..."
                    class="form-control">
           </div>
            <span class="text-muted" v-if="activeUser" >{{ activeUser.name }} is typing...</span>
       </div>


   </div>




</template>

<script>
    export default {

        props:['user'],

        data() {
            return {
                messages: [],
                newMessage: '',
                users:[],
                activeUser: false,
                typingTimer: false,
            }
        },

        created() {
            this.fetchMessages();

            Echo.join('chat')
                .here(user => {
                    this.users = user;
                })
                .joining(user => {
                    this.users.push(user);
                })
                .leaving(user => {
                    this.users = this.users.filter(u => u.id != user.id);
                })
                .listen('MessageSent',(event) => {
                    this.messages.push(event.message);
                })
                .listenForWhisper('typing', user => {
                   this.activeUser = user;

                    if(this.typingTimer) {
                        clearTimeout(this.typingTimer);
                    }

                   this.typingTimer = setTimeout(() => {
                       this.activeUser = false;
                   }, 3000);
                })

        },

        methods: {
            fetchMessages() {
                axios.get('messages').then(response => {
                    this.messages = response.data;
                })
            },

            sendMessage() {

                this.messages.push({
                    user: this.user,
                    message: this.newMessage
                });

                axios.post('messages', {message: this.newMessage});

                this.newMessage = '';
            },

            sendTypingEvent() {
                Echo.join('chat')
                    .whisper('typing', this.user);
            }
        }
    }
</script>
