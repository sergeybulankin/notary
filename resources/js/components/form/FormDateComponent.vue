<template>
    <div class="form-group">
        <label for="date">Датв выборки документа</label>
        <input type="datetime-local" class="form-control" id="date"
               required
               v-model="created_date"
               @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>

<script>
export default {
    props: {
        created_date: Date
    }
}
</script>
