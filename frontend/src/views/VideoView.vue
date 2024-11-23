<script setup>
    import PanelVideo from '@/components/videos/PanelVideo.vue';
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
    
const video={
    name:'leo',
    channel_name:'kiruxda',
    channel_url:'kiruxda',
    likes:'4800',   
}

</script>
<template>
    <div id = "content-video">
        <div class="video-side">
            <video src="@/assets/img/leo.mp4" controls type="video/mp4"></video>
            <div class="about-video">
                <p class="video-title">{{ video.name }}</p>
                <div class="video-data">
                    <div class="channel-data">
                        <RouterLink :to="{name: 'channel-info', params: {id: video.channel_url}}" class="channel-img-ref">
                            <img src="@/assets/img/kiruxa.jpg">
                        </RouterLink>
                        <div class="channel-details">
                            <RouterLink :to="{name: 'channel-info', params: {id: video.channel_url}}" class="video-channel-ref">{{ video.channel_name }}</RouterLink>
                            <span>1m subscribers</span>
                        </div>
                        <button type="button" class="sub-btn">Subscribe</button>
                    </div>
                    <div class="func-btns">
                        <div class="rate-btns">
                            <button type="button" class="like-btn">WW {{ video.likes }}</button>
                            <button type="button" class="dislike-btn">LL</button>
                        </div>
                        <button type="button" class="save-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="right-panel-video">
        <section class="section-video">
            <div class="video-list" v-for="video in videos">
                <PanelVideo :video></PanelVideo>
            </div>
        </section>
    </div>
</template>
