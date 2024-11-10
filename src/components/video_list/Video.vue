<template>
    <main>
        <div id = "content">
            <section class="section-video">
                <article class="container-video">
                    <RouterLink to="/video" class="thumbnail">
                        <img class="thumbnail-img" src="@/assets/img/rachel.jpg">
                    </RouterLink>
                    <div class="details-video">
                        <RouterLink to="/channel" class="channel-img-ref">
                            <img src="@/assets/img/kiruxa.jpg">
                        </RouterLink>
                        <div class="about-video">
                            <RouterLink to="/video" class="video-title-ref">малый эло</RouterLink>
                            <RouterLink to="/channel" class="video-channel-ref">Кирюха</RouterLink>
                            <div class="data-video">
                                <span>355K views</span>
                                <span>1 week ago</span>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
</template>