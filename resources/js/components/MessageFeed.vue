<template>
    <div class="feed" ref="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :key="message.id" :class="`message${ message.to == contact.id ? ' sent' : ' received' }`">
                <div class="text">
                    {{ message.text }}
                </div>
				<div class="time">{{ message.dateHumanReadable }}</div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {

            contact: {
                type: Object,
            },

            messages: {
                type: Array,
                required: true
            },
        },

        methods: {

            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },

        watch: {

            contact(contact) {
                this.scrollToBottom();
            },

            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>

<style lang="scss" scoped>
.feed {
    background: #f0f0f0;
    height: 100%;
    max-height: 470px;
    overflow: scroll;

    ul {
        list-style-type: none;
        padding: 5px;

        li {
            &.message {
                margin: 10px 0;
                width: 100%;

                .text {
                    max-width: 200px;
                    border-radius: 5px;
                    padding: 12px;
                    display: inline-block;
                }

                &.received {

                    margin-top: auto;
                    margin-bottom: auto;
                    margin-left: 10px;
                    border-radius: 25px;
                    padding: 10px;
                    position: relative;
                    text-align: right;

                    .text {
		                background-color: #82ccdd;
                    }
                    .time {
                        color: rgba(52, 17, 150, 0.5);
                        font-size: 10px;
                    }
                }

                &.sent {
                    margin-top: auto;
                    margin-bottom: auto;
                    margin-right: 10px;
                    border-radius: 25px;
                    padding: 10px;
                    position: relative;
                    text-align: left;

                    .text {
		                background-color: #78e08f;
                    }

                    .time {
                        color: rgba(168, 14, 14, 0.5);
                        font-size: 10px;
                    }
                }
            }
        }
    }
}


	.msg_time{
	}
	.msg_time_send{
	}
</style>
