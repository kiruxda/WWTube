<script setup>
    import Video from '@/components/videos/Video.vue';
    const videos =[
        {
            id:1,
            name: 'малый эло',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'кирюха',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:2,
            name: 'второе видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'крутой канал',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:3,
            name: 'третье видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'канал покруче',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
    ]
</script>

<template>
    <main>
        <div id = "content-subscriptions">
            <section class="section-video">
                <div class="video-list" v-for="video in videos">
                    <Video :video></Video>
                </div>
            </section>
        </div>
    </main>
</template>

  