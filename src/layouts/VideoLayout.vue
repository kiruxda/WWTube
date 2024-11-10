<template>
    <header>
      <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
        <input type="text" class="search" placeholder="Найти видео">
        <RouterLink to="/login" class="login">Войти</RouterLink>
    </header>
    <main>
        <RouterView />
    </main>

</template>