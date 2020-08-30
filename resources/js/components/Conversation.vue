<template>
    <div class="col-md-8" >
        <div class="main-card mb-3 card">
            <div class="card-header">
                <div class="contact-header" v-if="contact">
                    <div class="widget-content" >
                        <div class="widget-content-wrapper">
                            <div class="widget-content mr-3">
                                <img class="rounded-circle" :src="/avatars/ + contact.avatar" alt="">
                                <span class="online_icon"></span>
                            </div>
                            <div class="widget-content-right">
                            <div class="widget-heading">Your Conversations With {{ contact.name }}</div>
                                <div class="widget-subheading">{{ contact.current_company }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-header" v-else="">
                    Select a Contact
                </div>
            </div>
            <div class="card-body">
                <div class="scroll-area">
                    <div class="scrollbar-container ps--active-y">
                        <MessageFeed :contact="contact" :messages="messages"></MessageFeed>
                    </div>
                </div>
            </div>
            <div class="d-block card-footer">
                <MessageComposer @send="sendMessage"></MessageComposer>
            </div>
        </div>
    </div>
</template>

<script>
import MessageFeed from './MessageFeed';
import MessageComposer from './MessageComposer';

    export default {

        components: {MessageFeed, MessageComposer},

        props: {

            contact: {
                type: Object,
                default: null,
            },

            messages: {
                type: Array,
                default: []
            }
        },

        methods: {
            sendMessage(text) {

                if (!this.contact){
                    return;
                }
                    axios.post('/conversation/send', {
                        contact_id: this.contact.id,
                        text: text,
                    }).then((response) => {
                            this.$emit('new', response.data)
                        })
                }
        },

    }
</script>

<style scoped>
    .scroll-area {
        height: 350px ;
        overflow-y: auto;
    }
    .card-header{
        height: 5rem !important;
    }
</style>
