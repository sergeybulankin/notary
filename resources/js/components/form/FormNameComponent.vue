<template>
    <div class="form-group">
        <label for="name">Ваше имя</label>
        <input type="text"
               class="form-control"
               id="name"
               placeholder="Введите имя"
               v-model="name"
               @input="$emit('update:modelValue', $event.target.value)">
    </div>
</template>

<script>
export default {
    props: {
        name: String
    }
}
</script>
