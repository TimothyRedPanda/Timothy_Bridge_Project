<template>
    <div class="container mx-auto grid place-content-center w-dvw h-dvh">
        <p class="text-4xl font-bold text-blue-500 p-4">{{name}}</p>
    </div>
</template>

<script setup>
import {ref} from "vue";

const name = ref('The time in hex is...');

setInterval(() => {
    const time = new Date().toLocaleTimeString();
    const timeNumb = time.split(":").join("");
    const binary = Number(timeNumb).toString(16)
    name.value = `${time} = ${binary}`;
}, 1000)
</script>
