import { createRouter, createWebHistory } from '@ionic/vue-router';
import HomePage from '../views/HomePage.vue';
import LogInPage from '../views/login-page';
import SignInPage from '../views/signin-page';

const routes = [
  { path: '/', redirect: '/signin' },
  { path: '/signin', name: 'SignInPage', component: SignInPage },
  { path: '/login', name: 'LogInPage', component: LogInPage },
  { path: '/home', name: 'Home', component: HomePage },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
