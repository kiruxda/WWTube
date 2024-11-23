<script setup>
    defineProps({
        short:{}
    })
</script>

<template >
    <article class="container-short">
        <div class="details-short">
            <RouterLink :to="{name: 'channel-info', params: {id: short.channel_url}}" class="channel-img-ref">
                <img src="@/assets/img/kiruxa.jpg">
            </RouterLink>
            <button class="like-button">WW {{ short.likes }}</button>
        </div>
    </article>
</template>
