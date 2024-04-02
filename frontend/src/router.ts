import { createRouter, createWebHistory } from 'vue-router';
import MainContent from './components/MainContent.vue';
import RegistrationForm from './components/RegistrationForm.vue';
import LoginForm from './components/LoginForm.vue';
import PricingPage from './components/PricingPage.vue';
import FeatureContent from './components/FeatureContent.vue';

const routes = [

  {
    path: '/MainContent',
    component: MainContent,
  },
  {
    path: '/pricing',
    component: PricingPage,
  },
  {
    path: '/registration',
    component: RegistrationForm,
  },
  {
    path: '/login',
    component: LoginForm,
  },
  {
    path: '/features',
    component: FeatureContent,
  },
];


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
