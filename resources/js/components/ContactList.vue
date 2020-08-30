<template>
        <div class="col-md-4 col-xl-4">
            <div class="scroller-area">
                <div class="scrollbar-container">
                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                        <li  v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{ 'active': index == selected }" class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img class="rounded-circle" :src="/avatars/ + contact.avatar" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="widget-content-left">
                                    <div class="widget-heading">{{ contact.name }}</div>
                                        <div class="widget-subheading">{{ contact.current_company }}</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn-wide btn btn-success">
                                        <a style="color:white;" href="@{{ url('/') }}">View</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },

        data() {
            return {
                selected: null
            }
        },

        methods: {
            selectContact(index, contact) {
                this.selected = index;
                this.$emit('selected', contact);
            },
        },


    }
</script>

<style lang="scss" scoped>
	.active {
		background-color: rgba(0,0,0,0.3);
	}
    .scroller-area {
        box-shadow: 5px 10px rgba(58, 55, 55, 0.3);
        border-radius: 20px;
        height: 580px;
        overflow-y: auto;
    }
    .list-group-item {
        padding: 15px;
    }
</style>
