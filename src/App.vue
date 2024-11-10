<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>
<template>
  <header>
    <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
            <input type="text" class="search" placeholder="Найти видео">
            <nav>      
                <ul>
                    <li><RouterLink to="/login" id = "top">Войти</RouterLink></li>
                    <li><RouterLink to="/login" id = "top">Зарегистрироваться</RouterLink></li>
                </ul>
            </nav>
  </header>
  <main>
    <nav id = "sidebar-main">
      <ul>
        <li><RouterLink to="/" class="sidebar-button"><img src="@/assets/img/WTUBE_home.svg"/>Главная страница</RouterLink></li>
        <li><RouterLink to="/shorts" class="sidebar-button"><img src="@/assets/img/WTUBE_shorts.svg"/>Шорты</RouterLink></li>
        <li><RouterLink to="/subscriptions" class="sidebar-button"><img src="@/assets/img/WTUBE_sub.svg"/>Подписки</RouterLink></li>
      </ul>
    </nav>
  </main>
  <RouterView />
</template>