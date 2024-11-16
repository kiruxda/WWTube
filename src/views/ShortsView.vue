<script setup>
    import Short from '@/components/videos/Short.vue';
    const shorts =[
        {
            id:1,
            channel_url: 'kiruxda',
            likes: 52,
        },
    ]
</script>
<template>
    <div id = "content-shorts">
        <section class="section-shorts">
            <div class="shorts-list" v-for="short in shorts">
                <Short :short></Short>
            </div>
        </section>
    </div>
</template>