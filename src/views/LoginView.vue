<script>
    const login=''
    const password=''
    const signIn = (event) => {
        if (login.length==0){
            //
        }
        if (password.length==0){
            //
        }
        event.preventDefault()
    }
</script>
<template>
        <div id="login">
            <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
            <form @submit="signIn">
                <label class="login-label"><span class="ll-span">LL</span>ogin</label>
                <input type="text" class="login-input" v-model="login">
                <label class="password-label">Pass<span class="ww-span">WW</span>ord</label>
                <input type="password" class="password-input" v-model="password">
                <button class="submit-button">Login</button>
            </form>
        </div>
</template>
