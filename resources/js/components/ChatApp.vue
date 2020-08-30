<template>
    <div class="chat-app">
        <Conversation :contact="selectedContact" :messages="messages" @new="saveMessage"></Conversation>
        <ContactList :contacts="contacts" @selected="startConversationWith"></ContactList>
    </div>
</template>

<script>
import Conversation from './Conversation';
import ContactList from './ContactList';

    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },

        data() {
            return {
                selectedContact: null,
                contacts: [],
                messages: []
            }
        },

        mounted() {

            Echo.private(`messages.${this.user.id}`)
                .listen('newMessage', (e) => {
                    this.handleIncoming(e.message);
                }),

            axios.get('/contacts')
                .then((response) => {
                    this.contacts = response.data;
                })

        },

        methods: {

            handleIncoming(message) {
                if(this.selectedContact && message.from == this.selectedContact.id){
                    this.saveMessage(message);
                    return;
                }
                alert(message.text);
            },

            saveMessage(text){
                this.messages.push(text);
            },

            startConversationWith(contact) {
                axios.get(`/conversation/${contact.id}`)
                    .then((response) => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    });
            },
        },

        components: {
            ContactList, Conversation
        },
    }
</script>



<style scoped>
.chat-app {
    display: flex
}
</style>
