import Layout from "./Layout.vue"
import Dashboard from "../Dashboard.vue"

import user_routes from "../management/user/setup/routes";

import blog_category_routes from "../management/BlogManagement/Category/setup/routes";
import blog_routes from "../management/BlogManagement/Blog/setup/routes";



const routes = {
    path: '/dashboard',
    component: Layout,
    children: [
        {
            path: '',
            component: Dashboard,
            name: 'adminDashboard',
        },

        user_routes,


        blog_category_routes,
        blog_routes,

    ]
};


export default routes;
