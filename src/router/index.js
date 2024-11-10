import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ChannelView from '../views/ChannelView.vue'
import SubscriptionsView from '../views/SubscriptionsView.vue'
import LoginView from '../views/LoginView.vue'
import VideoView from '@/views/VideoView.vue'
import ShortsView from '@/views/ShortsView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      meta: {template : 'MainLayout'}
    },
    {
      path: '/channel/:id',
      name: 'channel-info',
      component: ChannelView,
      meta: {template : 'MainLayout'}
    },
    {
      path: '/subscriptions',
      name: 'subscriptions',
      component: SubscriptionsView,
      meta: {template : 'MainLayout'}
    },
    {
      path: '/video/:id',
      name: 'video-info',
      component: VideoView,
      meta: {template : 'VideoLayout'}
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView,
      meta: {template : 'LoginLayout'}
    },
    {
      path: '/shorts',
      name: 'shorts',
      component: ShortsView,
      meta: {template : 'MainLayout'}
    },
  ]
})

export default router
