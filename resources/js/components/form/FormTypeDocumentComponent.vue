<template>
    <div class="form-group">
        <label for="typesDocuments">Example select</label>
        <select class="form-control" id="typesDocuments" @change="onChange($event)">
            <option :id="0">Выбрать документ</option>
            <option v-for="(type_document, index) in types_documents"
                    :key="index"
                    :id="type_document.id">
                {{ type_document.type_document }}
            </option>
        </select>
    </div>
</template>

<script>
import sendData from '../mixins/send';

export default {
    name: 'FormTypeDocumentComponent',
    data() {
        return {
            getDocumentsUrl: 'api/v1/get-documents',
            types_documents: {}
        }
    },
    mounted() {
        this.getDocuments();
    },
    methods: {
       async getDocuments() {
            this.types_documents = await sendData(this.getDocumentsUrl);
        },
        onChange(event) {
            console.log(event.target[event.target.selectedIndex].id)
            this.$emit('changeTypeDocument', {
                type_document_id: event.target[event.target.selectedIndex].id
            });
        }
    }
}
</script>
x
