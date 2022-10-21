<script setup>
import { computed } from "vue";

const { type } = defineProps(['type']);

const classes = computed(() => {
    if (type === "first") {
        return "max-w-0 py-4 pl-4 pr-3 text-xs sm:text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6"
    }
    if (type === "normal") {
        return "px-3 py-4 text-xs sm:text-sm text-gray-500 lg:table-cell"
    }
    if (type === "action") {
        return "py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 max-w-xs"
    }
})
</script>

<template>
    <td :class="classes">
        <slot />
    </td>
</template>
