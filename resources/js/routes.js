
// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
import Home from "./Pages/Home";
import About from "./Pages/About";
import Posts from "./Pages/Posts";
import Post from "./Pages/Post";

const routes = [
    {
        path: "/",
        name: 'home',
        component: Home,
    },
    {
        path: "/about",
        name: 'about',
        component: About,
    },
    {
        path: "/posts",
        name: 'posts',
        component: Posts,
    },
    {
        path: "/posts/:slug",
        name: 'post',
        component: Post,
    }
];

export default routes