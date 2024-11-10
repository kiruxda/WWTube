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
      component: HomeView
    },
    {
      path: '/channel',
      name: 'channel',
      component: ChannelView
    },
    {
      path: '/subscriptions',
      name: 'subscriptions',
      component: SubscriptionsView
    },
    {
      path: '/video/:id',
      name: 'video-info',
      component: VideoView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/shorts',
      name: 'shorts',
      component: ShortsView
    },
  ]
})

export default router
