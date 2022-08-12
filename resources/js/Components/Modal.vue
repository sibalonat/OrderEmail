<template>
    <div class="modal-mask" v-if="show">
        <div class="modal-container">
            <div>
                <slot>default body</slot>
            </div>
            <footer class="modal-footer">
                <!-- <slot name="footer"></slot> -->
                <button @click="$emit('close')"> Close </button>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        show: Boolean,
        userID: Number
    },

    // data() {
    //     return {
    //         form: this.$inertia.form({
    //             price: '',
    //             quantity: '',
    //             product_name: '',
    //             user_id: ''
    //         }),
    //     }
    // },
    // created() {
    //     // console.log(this.userID);
    //     this.form.user_id = this.userID
    //     console.log(this.form.user_id);
    // },


};
</script>

<style scoped>
.modal-mask {
    position: fixed;
    inset: 0;
    /* background: rgba(0, 0, 0, .3); */
    display: grid;
    place-items: center;
}
.modal-container {
    background: white;
    padding: 1rem;
    width: 90vw;
    max-width: 600px;
    border-radius: 7px;

}

.modal-footer {
    border-top: 1px solid #ddd;
    margin-top: 1rem;
    padding-top: .5rem;
    font-size: .8rem;
}

.modal-footer button {
    background: #ddd;
    padding: .25rem .75rem;
    border-radius: 25px;
}

.modal-footer button:hover {
    background: #c8c8c8;
    padding: .25rem .75rem;
    border-radius: 25px;
}
</style>
