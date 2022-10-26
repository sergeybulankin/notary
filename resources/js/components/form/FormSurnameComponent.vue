<template>
    <div class="form-group">
        <label for="surname">Ваша фамилия</label>
        <input type="text"
               class="form-control"
               id="surname"
               placeholder="Ваша фамилия"
               v-model="surname"
               @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>

<script>
export default {
    props: {
        surname: String
    }
}
</script>
