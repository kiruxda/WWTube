<script>
import LoginLayout from '@/layouts/LoginLayout.vue';

    export default {
        name: "login"
    }
</script>
<template>
    <body>
        <div id="login">
            <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
            <form>
                <label class="login-label"><span class="ll-span">LL</span>ogin</label>
                <input type="text" class="login-input">
                <label class="password-label">Pass<span class="ww-span">WW</span>ord</label>
                <input type="password" class="password-input">
                <input type="button" class="sumbit-button" value="Login"/>
            </form>
        </div>
    </body>
</template>
