<template>
    <main>
        <div id = "content-channel">
            <div class="section-channel">
                <img class="cover-img" src="">
                <div class="channel">
                    <img class="channel-img" src="@/assets/img/kiruxa.jpg">
                    <div class="channel-details">
                        <span class="channel-name">Кирюха</span>
                        <div class="channel-data">
                            <span>@kiruxda</span>
                            <span>52m subscribers</span>
                            <span>322 videos</span>
                        </div>
                        <span class="channel-description">WW описание</span>
                        <RouterLink to ="https://vk.com/kiruxda" class="channel-links">vk.com/kiruxda</RouterLink>
                        <button type="button" class="subscribe-btn">Subscribe</button>
                    </div>
                </div>
            </div>
            <section class="section-video">
                <article class="container-video">
                    <RouterLink to = "\" class="thumbnail">
                        <img class="thumbnail-img" src="@/assets/img/rachel.jpg">
                    </RouterLink>
                    <div class="details-video">
                        <RouterLink to ="\" class="video-title-ref">малый эло</RouterLink>
                        <div class="data-video">
                            <span>355K views</span>
                            <span>1 week ago</span>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
</template>