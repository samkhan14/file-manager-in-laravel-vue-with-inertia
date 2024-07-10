<template>
    <div class="w-[600px] h-[80px] flex items-center">
        <TextInput
            type="text"
            class="block w-full mr-2"
            autocomplete
            placeholder="Search for files and folders"
        />
    </div>
</template>

<script setup>
// Imports
import TextInput from "@/Components/TextInput.vue";
//import { useForm } from "@inertiajs/vue3";

// const form = useForm({
//     search: "",
// });
</script>
