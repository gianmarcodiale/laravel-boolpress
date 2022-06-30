import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

// 0. If using a module system (e.g. via vue-cli), import Vue and VueRouter
// and then call `Vue.use(VueRouter)`.

// 1. Define route components.
// These can be imported from other files

import routes from "./routes";


// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode: 'history',
    routes, // short for `routes: routes`
});

// Export the router file
export default router;