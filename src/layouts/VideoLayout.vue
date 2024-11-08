<script>
    export default {
        name: "Video"
    }
</script>
<template>
    <header>
        <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
        <input type="text" class="search" placeholder="Найти видео">
        <nav>      
            <ul>
                <li><RouterLink to="/login" href="login.html" id = "top">Войти</RouterLink></li>
                <li><RouterLink to="/login" href="register.html" id = "top">Зарегистрироваться</RouterLink></li>
            </ul>
        </nav>
    </header>
</template>