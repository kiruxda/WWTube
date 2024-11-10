
<template>
    <main>
        <div id = "content">
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
                        <button type="button" class="like-btn">WW 4.8k</button>
                        <button type="button" class="dislike-btn">LL</button>
                        <button type="button" class="save-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="right-panel">
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
    </main>
</template>
<style lang="css" scoped>
    #content .video-side{
    display: flex;
    flex-direction: column;
    float:left;
    width: 68%;
    margin-left: 4%;
    }
    #content video{
        aspect-ratio: 16/9;
        width: 100%;
    }
    #content .video-title{
        margin-top:10px;
        margin-bottom:0;
        font-size:25px;
        font-weight: bold;
        color:#ffffff;
    }
    #content .video-data{
        margin-top:10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }
    #content .channel-data{
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    #content .channel-img-ref{
        width: 5%;
    }
    #content .channel-img-ref img{
        aspect-ratio: 1/1;
        width: 100%;
        border-radius: 50%;
        background-color: #737373;
    }
    #content .channel-details{
        display: flex;
        flex-direction: column;
        margin-left:1%;
    }
    #content .video-channel-ref{
        font-weight: bold;
        color:#ffffff;
        text-decoration: none;
    }
    #content .channel-details span{
        font-weight: bold;
        color:#737373;
    }
    #content .sub-btn{
        background-color: #500404f3;
        margin-left:1%;
        width: 15%;
        padding: 1%;
        border:none;
        text-align:center;
        text-decoration: none;
        color:#ffffff;
        border-radius: 50px;
        font-weight: bold;
    }
    #content .sub-btn-text{
        content:"Subscribe";
    }
    #content .unsub-btn{
        background-color: #140450f3;
        margin-left:1%;
        width: 15%;
        padding: 1%;
        border:none;
        text-align:center;
        text-decoration: none;
        color:#ffffff;
        border-radius: 50px;
        font-weight: bold;
    }
    #content .sub-btn:hover{
        background-color: #d40606;
    }
    #content .unsub-btn:hover{
        background-color:#0a98f7f3;
    }
    #content .video-data > button{
        background-color: #3c3c3c;
        text-decoration: none;
        padding:1%;
        font-weight: bold;
    }
    #content .like-btn{
        border-radius: 50px 0 0 50px;
        width: 100px;
        border:none;
        color:#d40606;
    } 
    #content .dislike-btn{
        border-radius: 0 50px 50px 0;
        margin-left:-15px;
        border-top: none;
        border-bottom: none;
        border-right: none;
        border-left-color:#737373;
        color:#0a98f7f3;
    }
    #content .save-btn{
        border:none;
        border-radius: 50px;
        color:#ffffff;
    }
    #content .like-btn:hover{
        background-color: #500404f3;
    }
    #content .dislike-btn:hover{
        background-color: #140450f3;
    }
    #content .save-btn:hover{
        background-color: #500404f3;
    }
    #right-panel{
        margin-left: 73%;
    }
    #right-panel .section-video{
        display: grid;
        grid-template-rows:repeat(auto-fill, minmax(15px,100%));
        gap: 15px;
    }
    #right-panel .container-video{
        display:flex;
        flex-direction: row;
        width: 100%;
        height: 150px;
    }
    #right-panel .thumbnail-img{
        aspect-ratio: 16 / 9;
        border-radius: 10px;
        width: 100%;
        height: 100%;
        background-color: #737373;
    }

    #right-panel .details-video{
        display:flex;
        flex-direction: column;
        gap:3%;
        margin-left:1%;
    }
    #right-panel .video-title-ref{
        font-weight: bold;
        color:#ffffff;
        text-decoration: none;
    }
    #right-panel .video-channel-ref{
        font-weight: bold;
        color:#737373;
        text-decoration: none;
    }
    #right-panel .video-title-ref:hover{
        color:#d40606;
    }
    #right-panel .video-channel-ref:hover{
        color:#500404f3;
    }
    #right-panel .data-video{
        font-weight: bold;
        color:#737373;
        text-decoration: none;
    }
</style>