<script setup>
import {onMounted} from "vue";

onMounted(() => {
    const title = document.getElementById("title");
    const titleText = "Welcome";
    titleText.split("").map((letter) => {
        const letterSpan = document.createElement("span")
        letterSpan.textContent = letter;
        letterSpan.style.color = "#23387c"
        letterSpan.onClick = () => {
            letterSpan.textContent = "no";
        }
        letterSpan.onmouseover = () => {
            if (letterSpan.style.color !== "transparent") {
                letterSpan.style.color = "transparent";
            } else {
                letterSpan.style.color = "#23387c";
            }
            letterSpan.style.transition = "0.35s all ease-in-out";
        };
        title.appendChild(letterSpan);
    })
});

</script>

<template>
    <main class="container mx-auto grid gap-1 text-blue-950 justify-center place-content-center w-dvw h-dvh">
        <section id="title" class="text-5xl p-4 text-amber-50 rounded"></section>
        <span class="gap-2 text-2xl flex place-content-center">
            <a class="text-1xl" href="/">Home</a>
            <a class="text-1xl" href="/convert">Convert</a>
        </span>
    </main>
</template>
