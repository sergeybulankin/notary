<template>
    <div v-show="orders" class="mt-5">
        <h3>Ох, а вот эти документы уже подавались: </h3>
        <div class="row mb-5">
            <div class="card col-6" v-for="(document, index) in documents" :key="index">
                <div class="card-body" >
                    <strong>#{{ index + 1 }}</strong>
                    {{ document.get_full_information[0].type_document }}
                    оформлена в <strong>{{ document.created_order }}</strong>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            orders: false,
            documents: {},
            getDocumentsUrl: 'api/v1/get-documents'
        }
    },
    methods: {
        async checkOrders(user_id) {
            let response = await fetch(this.getDocumentsUrl, {
                method: 'post',
                body: JSON.stringify({'user_id': user_id}),
                headers: {
                    'content-type': 'application/json'
                }
            });

            if (response.ok) {
                this.documents = await response.json();
            }else {
                console.log('Ошибка во время отправки запроса: ' + response.status);
            }
        }
    },
    filters: {
        formatCreatedDateOrder: (date) => {
            return date.toLocaleDateString("ru-RU");
        }
    },
    mounted() {
        if (localStorage.getItem('notary')) this.checkOrders(JSON.parse(localStorage.getItem('notary'))['id']);
        if (this.documents) this.orders = !this.orders;

    }
}
</script>
