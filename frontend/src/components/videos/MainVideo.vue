<script setup>
    defineProps({
        video:{}
    })
</script>

<template >
    <article class="container-video">
        <RouterLink :to="{name: 'video-info', params: {id: video.id}}" class="thumbnail">
            <img class="thumbnail-img" :src="video.thumbnail">
        </RouterLink>
        <div class="details-video">
            <RouterLink :to="{name: 'channel-info', params: {id: video.channel_url}}" class="channel-img-ref">
                <img src="@/assets/img/kiruxa.jpg">
            </RouterLink>
            <div class="about-video">
                <RouterLink :to="{name:'video-info', params:{id: video.id}}" class="video-title-ref">{{ video.title }}</RouterLink>
                <RouterLink :to="{name: 'channel-info', params: {id: video.channel_url}}" class="video-channel-ref">{{ video.channel_name }}</RouterLink>
                <div class="data-video">
                    <span>{{ video.views }}</span>
                    <span>{{ video.date }}</span>
                </div>
            </div>
        </div>
    </article>
</template>
