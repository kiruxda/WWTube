<script setup>
    import Video from '@/components/videos/ChannelVideo.vue';
    const videos =[
        {
            id:1,
            name: 'малый эло',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'кирюха',
            channel_url: 'kiruxda',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:2,
            name: 'второе видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'крутой канал',
            channel_url: 'ch2',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:3,
            name: 'третье видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'канал покруче',
            channel_url: 'ch3',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
    ]
const channel={
    name: 'kiruxda',
    videos: videos,
    subscribers: 52,
}
</script>
<template>
        <div id = "content-channel">
            <div class="section-channel">
                <img class="cover-img" src="">
                <div class="channel">
                    <img class="channel-img" src="@/assets/img/kiruxa.jpg">
                    <div class="channel-details">
                        <span class="channel-name">{{ channel.name }}</span>
                        <div class="channel-data">
                            <span>@kiruxda</span>
                            <span>{{ channel.subscribers }} subscribers</span>
                            <span>{{ channel.videos.length }} videos</span>
                        </div>
                        <span class="channel-description">WW описание</span>
                        <RouterLink to ="https://vk.com/kiruxda" class="channel-links">vk.com/kiruxda</RouterLink>
                        <button type="button" class="subscribe-btn">Subscribe</button>
                    </div>
                </div>
            </div>
            <section class="section-video">
                <div class="video-list" v-for="video in videos">
                    <Video :video></Video>
                </div>
            </section>
        </div>

</template>