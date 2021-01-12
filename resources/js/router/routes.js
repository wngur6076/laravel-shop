import ProductsPage from '../pages/ProductsPage.vue'
import NotFoundPage from '../pages/NotFoundPage.vue'

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
        path: '*',
        component: NotFoundPage
    }
]

export default routes

