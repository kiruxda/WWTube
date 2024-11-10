<script setup>
    defineProps({
        video:{}
    })
</script>

<template >
    <article class="container-video">
        <RouterLink :to="{name: 'video-info', params: {id: video.id}}" class="thumbnail">
            <img class="thumbnail-img" src="@/assets/img/rachel.jpg">
        </RouterLink>
        <div class="details-video">
                <RouterLink :to="{name:'video-info', params:{id: video.id}}" class="video-title-ref">{{ video.name }}</RouterLink>
                <div class="data-video">
                    <span>{{ video.views }}</span>
                    <span>{{ video.date }}</span>
                </div>
            </div>
    </article>
</template>