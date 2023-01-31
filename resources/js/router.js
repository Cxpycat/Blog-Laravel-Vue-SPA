import {createWebHistory, createRouter} from 'vue-router';

// import {createWebHistory, createRouter} from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./components/Index.vue"),
        name: "index",
    },
    {
        path: "/main",
        component: () => import("./components/Main/Main.vue"),
        name: "main",
    },
    {
        path: "/user/login",
        component: () => import("./components/User/Login.vue"),
        name: "user.login",
    },
    {
        path: "/registration",
        component: () => import("./components/User/Registration.vue"),
        name: "user.registration",
    },
    {
        path: "/personal",
        component: () => import("./components/User/Personal.vue"),
        name: "user.personal",
    },
    {
        path: "/admin",
        component: () => import("./components/Admin/Index.vue"),
        name: "admin.index",
    },
    {
        path: "/admin/categories",
        component: () => import("./components/Admin/Category/IndexCategory.vue"),
        name: "admin.category.index",
    },
    {
        path: "/admin/category/create",
        component: () => import("./components/Admin/Category/CreateCategory.vue"),
        name: "admin.category.create",
    },
    {
        path: "/admin/category/:id/show",
        component: () => import("./components/Admin/Category/ShowCategory.vue"),
        name: "admin.category.show",
    },
    {
        path: "/admin/category/:id/edit",
        component: () => import("./components/Admin/Category/EditCategory.vue"),
        name: "admin.category.edit",
    },
    {
        path: "/admin/posts",
        component: () => import("./components/Admin/Post/IndexPost.vue"),
        name: "admin.post.index",
    },
    {
        path: "/admin/post/create",
        component: () => import("./components/Admin/Post/CreatePost.vue"),
        name: "admin.post.create",
    },
    {
        path: "/admin/post/:id/show",
        component: () => import("./components/Admin/Post/ShowPost.vue"),
        name: "admin.post.show",
    },
    {
        path: "/admin/post/:id/edit",
        component: () => import("./components/Admin/Post/EditPost.vue"),
        name: "admin.post.edit",
    },

    {
        path: '/:pathMatch(.*)*',
        component: () => import("./components/Index.vue"),
        name: "404",
    },
    {
        path: '/user-:afterUser(.*)',
        component: () => import("./components/Index.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,

});


// router.beforeEach((to, from, next) => {
//     const access_token = localStorage.getItem('access_token');
//
//
//     if (!access_token) {
//         if (to.name === 'user.login' || to.name === 'user.registration') {
//             next()
//         } else {
//             next({name: 'user.login'})
//         }
//     }
//
//     if (to.name === 'user.login' || to.name === 'user.registration' && access_token) {
//         next({name: 'user.personal'})
//     } else next()
//
//
// })

export default router;
