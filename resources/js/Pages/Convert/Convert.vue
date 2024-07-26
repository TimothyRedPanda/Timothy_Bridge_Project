<script setup>
import {ref} from "vue";

const text = ref('The time in hex is...');

setInterval(() => {
    const time = new Date().toLocaleTimeString();
    const timeNumb = time.split(":").join("");
    const binary = Number(timeNumb).toString(16)
    text.value = `${time} = 0x${binary}`;
}, 1000)
</script>

<template>
    <main class="container mx-auto grid gap-1 text-blue-950 justify-center place-content-center w-dvw h-dvh">
        <p class="text-5xl text-blue-950 p-4">{{ text }}</p>
        <span class="gap-2 text-2xl flex place-content-center">
            <a class="text-1xl" href="/">Home</a>
            <a class="text-1xl" href="/convert">Convert</a>
        </span>
    </main>
</template>

