<template>
    <input type="hidden" :value="csrfToken" name="_token" />
</template>

<script>
export default {
    props: { method: { default: "POST" } },

    data() {
        return { csrfToken: null };
    },
    created() {
        this.csrfToken = document.querySelector(
            'meta[name="csrf-token"]'
        ).content;
    }
};
</script>
