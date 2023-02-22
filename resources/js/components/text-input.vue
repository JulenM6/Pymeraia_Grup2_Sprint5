<template>
    <div>
        <input :disabled="disabled" :class="classes" />
    </div>
</template>

<script>
export default {
    props: {
        disabled: {
            type: Boolean,
            default: false,
        },
        classes: {
            type: String,
            default:
                "rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50",
        },
    },
};
</script>
