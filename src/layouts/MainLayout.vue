<template>
  <header>
    <RouterLink to="/" class = "logo"><img src="@/assets/img/WTUBE.svg"/></RouterLink>
    <input type="text" class="search" placeholder="Найти видео">
    <RouterLink to="/login" class = "login">Войти</RouterLink>
  </header>
  <main>
    <nav id = "sidebar-main">
      <ul>
        <li><RouterLink to="/" class="sidebar-button"><img src="@/assets/img/WTUBE_home.svg"/>Главная страница</RouterLink></li>
        <li><RouterLink to="/shorts" class="sidebar-button"><img src="@/assets/img/WTUBE_shorts.svg"/>Шорты</RouterLink></li>
        <li><RouterLink to="/subscriptions" class="sidebar-button"><img src="@/assets/img/WTUBE_sub.svg"/>Подписки</RouterLink></li>
      </ul>
    </nav>
    <RouterView />
  </main>
</template>