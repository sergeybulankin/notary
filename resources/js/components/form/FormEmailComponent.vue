<template>
    <div class="form-group">
        <label for="email">Ваш email</label>
        <input type="email"
               class="form-control"
               id="email"
               placeholder="name@example.com"
               required
               v-model="email"
               @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>

<script>
export default {
    props: {
        email: String
    }
}
</script>
