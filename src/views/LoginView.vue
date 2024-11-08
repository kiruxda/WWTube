<script>
import LoginLayout from '@/layouts/LoginLayout.vue';

    export default {
        name: "login"
    }
</script>
<template>
    <body>
        <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
        <form>
            <label class="login-label"><span class="ll-span">LL</span>ogin</label>
            <input type="text" class="login-input">
            <label class="password-label">Pass<span class="ww-span">WW</span>ord</label>
            <input type="password" class="password-input">
            <input type="button" class="sumbit-button" value="Login"/>
        </form>
    </body>
</template>
<style lang="css" scoped>
    body form{
        font-weight: bold;
        font-size:20px;
        display:flex;
        flex-direction: column;
        align-items: center;
        color:#ffffff;
        gap:10px;
        background-color: #3c3c3c;
        width: 309px;
        margin-left: auto;
        margin-right: auto;
        padding:1%;
        border-radius: 15px;
        border: 2px solid #500404f3;
    }
    body .logo {
        display: block;
        padding: 0;
        margin-left: auto;
        margin-right: auto;
        width: 309px;
    }
    body .logo img{
        width: 100%;
    }
    body .login-input, .password-input{
        border: 2px solid #500404f3;
        border-radius: 30px;
        background: #0f0f0f;
        color: #ffffff;
        outline:none;
        padding: 15px 20px;
        width: 80%;
    }
    body .login-input:hover, .password-input:hover{
        border: 2px solid #d40606;
    }
    body .ll-span{
        color:#0a98f7f3;
    }
    body .ww-span{
        color:#d40606;
    }
    body .sumbit-button{
        background-color:#ffffff;
        width: 40%;
        padding: 4%;
        border:none;
        text-align:center;
        text-decoration: none;
        color:#ffffff;
        background-color: #500404f3;;
        border-radius: 50px;
        font-weight: bold;
    }
    body .sumbit-button:hover{
        background-color: #d40606;
        color:#ffffff;
    }
</style>