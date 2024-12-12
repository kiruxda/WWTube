<script setup>
import Video from '@/components/videos/MainVideo.vue';
//import axios from 'axios';
//import {ref} from 'vue';

    const videos_old =[
        {
            id:1,
            title: 'малый эло',
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
        {
            id:4,
            name: 'видева',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'самый умный',
            channel_url: 'ch4',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:5,
            name: 'видео',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'самый смелый',
            channel_url: 'ch5',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
        {
            id:6,
            name: 'вау',
            thumbnail: '@/assets/img/rachel.jpg',
            channel_name: 'ch6',
            channel_url: 'kiruxda',
            channel_img: '@/assets/img/kiruxa.jpg',
            views: '100k',
            date: '1 week ago'
        },
    ]
const videos=ref([])
const result = axios.get('videos')
    .then((response)=>{
        videos.value = response.data
});
result.catch();

</script>
<template>
        <div id = "content-main">
            <section class="section-video">
                <div class="video-list" v-for="video in videos">
                    <Video :video></Video>
                </div>
            </section>
        </div>
</template>