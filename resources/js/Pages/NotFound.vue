<template>
  <div class="page container mt-4">
    <div class="p-5 bg-dark rounded-3">
      <div class="container text-white">
        <div class="d-flex gap-4">
          <div class="avatar">
            <img
              class="rounded-circle"
              src="https://picsum.photos/100/100"
              alt=""
            />
          </div>
          <div class="jumbo-text">
            <h1 class="display-3">Ops! Page not found, 404</h1>
            <p class="lead">Sorry! The page you requested doesn't exist.</p>
          </div>
        </div>
        <hr class="my-2" />
        <div class="container py-5">
          <p>
            The page you requested was not found. Try visit these pages instead:
          </p>
          <ul>
            <li>
              <router-link :to="{ name: 'home' }">Homepage</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'posts' }">Posts</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'about' }">About me</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NotFound",
};
</script>

<style>
</style>