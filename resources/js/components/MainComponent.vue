<template>
    <div class="container">
        <h1>Приветики 🧁</h1>

        <div v-if="user">
            <order-component  />
            <form-component  />
        </div>
    </div>
</template>

<script>
import FormComponent from './form/FormComponent';
import OrderComponent from './OrderComponent';
import sendData from "./mixins/send";

export default {
    data() {
      return {
          addNewUserUrl: 'api/v1/add-new-user',
          user: {}
      }
    },
    mounted() {
        this.checkLocalStorage();
    },
    methods: {
        checkLocalStorage() {
            if (!localStorage.getItem('notary')) {
                this.addNewUser();
            }else {
                this.user = localStorage.getItem('notary');
            }
        },
        async addNewUser() {
            let newUser = await sendData(this.addNewUserUrl);
            this.createLocalStorage( {'id': parseInt(newUser) });
        },
        createLocalStorage(user) {
            localStorage.setItem('notary', JSON.stringify(user));
        }
    },
    components: {
        'form-component': FormComponent,
        'order-component': OrderComponent
    }
}
</script>
