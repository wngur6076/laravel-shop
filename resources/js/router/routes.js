import ProductsPage from '../pages/ProductsPage.vue'
import NotFoundPage from '../pages/NotFoundPage.vue'
import RegisterPage from '../pages/RegisterPage.vue'
import LoginPage from '../pages/LoginPage.vue'

const routes = [
    {
        path: '/',
        component: ProductsPage,
        name: 'home'
    },
    {
        path: '/products',
        component: ProductsPage,
        name: 'products'
    },
    {
        path: '/register',
        component: RegisterPage,
        name: 'register'
    },
    {
        path: '/login',
        component: LoginPage,
        name: 'login'
    },
    {
        path: '*',
        component: NotFoundPage
    }
]

export default routes

