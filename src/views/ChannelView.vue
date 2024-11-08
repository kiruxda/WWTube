<template>
    <main>
        <div id = "content">
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
<style lang="css" scoped>
    #content{
        margin-left: 22.5%;
        margin-right: 10%;
        padding-left: 1%;
        font-weight: bold;
    }
    #content .section-channel{
        padding-bottom: 1%;
        border-bottom: 1px solid #3c3c3c;
    }
    #content .cover-img{
        aspect-ratio: 7/1;
        width: 100%;
        background-color: gray;
        border-radius: 15px;
    }
    #content .channel{
        margin-top:2%;
        display:flex;
        flex-direction: row;
    }
    #content .channel-img{
        aspect-ratio: 1/1;
        width: 15%;
        border-radius: 50%;
    }
    #content .channel-details{
        color:#ffffff;
        display:flex;
        flex-direction: column;
        margin-left:1%;
        gap:15px;
    }
    #content .channel-name{
        font-size:25px;
        color:#ffffff;
    }
    #content .channel-data{
        display: flex;
        flex-direction: row;
        gap:15px;
        color:#737373;
    }
    #content .channel-description{
        color:#737373;
    }
    #content .channel-links{
        color:#0a98f7f3;
        text-decoration: none;
    }
    #content .subscribe-btn{
        background-color:#500404f3;
        width: 40%;
        padding: 4%;
        border:none;
        text-align:center;
        text-decoration: none;
        color: #ffffff;
        border-radius: 50px;
        font-weight: bold;
    }
    #content .subscribe-btn:hover{
        background-color: #d40606;
    }
    #content .section-video{
        display: grid;
        grid-template-columns:repeat(auto-fill, minmax(300px,19%));
        gap: 15px;
        margin-top:2%;
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
        margin-top:10px;
        display:flex;
        flex-direction: column;
        gap:10px;
    }
    #content .video-title-ref{
        font-weight: bold;
        font-size:20px;
        color:#ffffff;
        text-decoration: none;
    }
    #content .video-title-ref:hover{
        color:#d40606;
    }
    #content .data-video{
        display: flex;
        gap:10px;
        flex-direction: row;
        font-weight: bold;
        color:#737373;
        text-decoration: none;
    }
</style>