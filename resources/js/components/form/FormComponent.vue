<template>
    <div>
        <form>
            <form-name-component v-model="name" class="mb-3" />
            <form-surname-component v-model="surname" class="mb-3" />
            <form-email-component v-model="email" class="mb-3" />
            <form-date-component v-model="created_date" class="mb-3" />
            <form-type-document-component @changeTypeDocument="changeTypeDocument" />
            <Button
                :name="name"
                :surname="surname"
                :email="email"
                :created_date="created_date"
                :type_document="type_document"
            />
        </form>
    </div>
</template>

<script>
import FormTypeDocumentComponent from "./FormTypeDocumentComponent";
import ButtonComponent from "./ButtonComponent";
import FormNameComponent from "./FormNameComponent";
import FormEmailComponent from "./FormEmailComponent";
import FormSurnameComponent from "./FormSurnameComponent";
import FormDateComponent from "./FormDateComponent";

export default {
    name: 'FormComponent',
    data() {
      return {
        name: '',
        surname: '',
        email: '',
        created_date: new Date(),
        type_document: 0
      }
    },
    methods: {
        changeTypeDocument(id) {
            this.type_document = id;
        }
    },
    components: {
        'form-name-component': FormNameComponent,
        'form-surname-component': FormSurnameComponent,
        'form-email-component': FormEmailComponent,
        'form-type-document-component': FormTypeDocumentComponent,
        'form-date-component': FormDateComponent,
        'Button': ButtonComponent
    }
}
</script>
