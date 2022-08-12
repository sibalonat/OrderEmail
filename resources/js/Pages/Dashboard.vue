<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Modal from '@/Components/Modal.vue';
</script>

<template>

    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex w-10/12 justify-end mb-4 mx-auto">
                            <button class="bg-slate-900 text-slate-100 w-40 rounded-lg py-1 px-4" @click="showModal = true">Create Order</button>
                        </div>
                        <table class="table-fixed w-full">
                            <thead class="bg-slate-100 mb-14">
                                <tr>
                                    <th class="text-left p-3">Product Name</th>
                                    <th class="text-center p-3">Price </th>
                                    <th class="text-center p-3">Quantity</th>
                                </tr>
                            </thead>
                            <br>
                            <tbody>
                                <tr v-for="order in orders" :key="order.id" class="leading-10">
                                    <td>{{ order.product_name }}</td>
                                    <td class="text-center p-3 text-sm">{{ order.price }}</td>
                                    <td class="text-center p-3 text-sm">{{ order.quantity }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
    <Modal :show="showModal" @close="showModal = false" :userID="this.orders[0].user_id" class="bg-neutral-500/[.6]" >

    <template #default>
        <p class="text-2xl">Create Order</p>
        <form class="mt-6" @submit.prevent="submitForm">
            <div class="flex gap-2 flex-wrap">
                <input type="number" v-model="form.price" class="flex-1" placeholder="Price">
                <input type="number" v-model="form.quantity" class="flex-1" placeholder="Quantity">
                <input type="text" v-model="form.product_name" class="flex-1" placeholder="Product Name">
            </div>
            <button type="submit" class="bg-green-700 text-slate-100 mt-12 px-6 py-1 rounded-lg">Add & Send Email</button>
        </form>
        <!-- overide header -->
    </template>

    </Modal>

</template>

<script>
export default {
    props: {
        orders: Object,
    },

    data() {
        return {
            showModal: false,
            form: this.$inertia.form({
                price: '',
                quantity: '',
                product_name: '',
                user_id: ''
            }),
        }
    },
    methods: {
        submitForm() {
            this.form.user_id = this.orders[0].user_id
            this.form.post('/order')
            this.showModal = false
        }
    }
}
</script>

<style scoped>

table {
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}

</style>
