<template>
    <label :class="classes">{{ value || $slots.default }}</label>
</template>

<script>
export default {
    props: {
        value: {
            type: String,
            default: "",
        },
        classes: {
            type: String,
            default: "block font-medium text-label text-gray-700",
        },
    },
};
</script>
