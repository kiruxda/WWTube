<script setup>
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
        {
            id:4,
            name: 'видева',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'самый умный',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:5,
            name: 'видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'самый смелый',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:6,
            name: 'вау',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'жестянчик',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
    ]
</script>
<template>
    <main>
        <div id = "content">
            <section class="section-video">
                <article class="container-video" v-for="video in videos">
                    <RouterLink :to="{name: 'video-info', params: {id: video.id}}" class="thumbnail">
                        <img class="thumbnail-img" src="@/assets/img/rachel.jpg">
                    </RouterLink>
                    <div class="details-video">
                        <RouterLink to="/channel" class="channel-img-ref">
                            <img src="@/assets/img/kiruxa.jpg">
                        </RouterLink>
                        <div class="about-video">
                            <RouterLink :to="{name:'video-info', params:{id: video.id}}" class="video-title-ref">{{ video.name }}</RouterLink>
                            <RouterLink to="/channel" class="video-channel-ref">{{ video.channel_name }}</RouterLink>
                            <div class="data-video">
                                <span>{{ video.views }}</span>
                                <span>{{ video.date }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
</template>
<style lang="css" scoped>
    #content{
        margin-left: 12.5%;
        padding-left: 1%;
        border-left: 1px solid #3c3c3c;
    }   
    #content .section-video{
        display: grid;
        grid-template-columns:repeat(auto-fill, minmax(300px,19%));
        gap: 15px;
    }
    #content .container-video{
        display:flex;
        flex-direction: column;
        width: 100%;
    }
    #content .thumbnail-img{
        aspect-ratio: 16 / 9;
        border-radius: 15px;
        width: 100%;
        height: 100%;
        background-color: gray;
    }

    #content .details-video{
        margin-top:5%;
        display:flex;
        align-items: flex-start;
    }
    #content .channel-img-ref{
        width: 15%;
        height: 100%;
        margin-right: 5%;
    }
    #content .channel-img-ref img{
        aspect-ratio: 1/1;
        width: 100%;
        border-radius: 50%;
        background-color: #737373;
    }
    #content .about-video{
        display:flex;
        flex-direction: column;
    }
    #content .video-title-ref{
        font-weight: bold;
        font-size:20px;
        color:#ffffff;
        text-decoration: none;
        margin-bottom: 5%;
    }
    #content .video-title-ref:hover{
        color:#d40606;
    }
    #content .video-channel-ref{
        font-weight: bold;
        color:#737373;
        text-decoration: none;
        margin-bottom: 5%;
    }
    #content .video-channel-ref:hover{
        color:#500404f3;
    }
    #content .data-video{
        font-weight: bold;
        color:#737373;
        text-decoration: none;
        margin-bottom: 5%;
    }
</style>