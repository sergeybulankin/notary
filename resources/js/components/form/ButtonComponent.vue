<template>
    <div>
        <button type="submit"
                class="btn btn-success mt-4"
                @click.prevent="add()"
                :disabled="isDisabled === 0 ? true : false">Добавить</button>

        <div class="success" v-show="success">
            Новый документ добавили!
        </div>
    </div>
</template>

<script>
export default {
    name: 'ButtonComponent',
    props: ['name', 'surname', 'email', 'created_date', 'type_document'],
    data() {
        return {
            addNewDocument: 'api/v1/add-new-document',
            result: false,
            success: false
        }
    },
    computed: {
        isDisabled() {
            return this.type_document;
        }
    },
    methods: {
        async add() {
            this.success = false; // ой ой ой, что это тут у нас? АААА, костыль!

            let data = {
                'name': this.name,
                'surname': this.surname,
                'email': this.email,
                'created_date': this.created_date,
                'type_document_id': parseInt(this.type_document.type_document_id),
                'user_id': JSON.parse(localStorage.getItem('notary'))['id']
            }

            let response = await fetch(this.addNewDocument, {
                method: 'post',
                body: JSON.stringify(data),
                headers: {
                    'content-type': 'application/json'
                }
            });

            if (response.ok) {
                this.result = await response.json();
                if (this.result === true) this.success = !this.success;
            }else {
                console.log('Ошибка во время отправки запроса: ' + response.status);
            }
        }
    }
}
</script>
