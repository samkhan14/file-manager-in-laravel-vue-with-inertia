<template lang="">
<modal :show="modalValue">
</modal>
</template>

<script setup>
const {modalValue} = defineProps({
    modalValue: Boolean
});

</script>
<style lang="">

</style>
