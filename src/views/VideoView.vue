
<template>

        <div id = "content-video">
            <div class="video-side">
                <video src="@/assets/img/leo.mp4" controls type="video/mp4"></video>
                <div class="about-video">
                    <p class="video-title">leo messi</p>
                    <div class="video-data">
                        <div class="channel-data">
                            <RouterLink to="/channel" class="channel-img-ref">
                                <img src="@/assets/img/kiruxa.jpg">
                            </RouterLink>
                            <div class="channel-details">
                                <RouterLink to="/channel" class="video-channel-ref">Кирюха</RouterLink>
                                <span>1m subscribers</span>
                            </div>
                            <button type="button" class="sub-btn">Subscribe</button>
                        </div>
                        <div class="func-btns">
                            <div class="rate-btns">
                                <button type="button" class="like-btn">WW 4.8k</button>
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
                <article class="container-video">
                    <RouterLink to="/video/:id" class="thumbnail">
                        <img class="thumbnail-img" src="@/assets/img/rachel.jpg">
                    </RouterLink>
                    <div class="details-video">
                        <RouterLink to="/video/:id" class="video-title-ref">малый эло</RouterLink>
                        <RouterLink to="/channel" class="video-channel-ref">Кирюха</RouterLink>
                        <div class="data-video">
                            <span>355K views</span>
                            <span>1 week ago</span>
                        </div>
                    </div>
                </article>
            </section>
        </div>

</template>
