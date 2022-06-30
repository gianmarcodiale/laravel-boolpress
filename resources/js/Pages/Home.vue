<template>
  <div class="page">
    <div class="p-5 bg-dark text-white">
      <div class="container">
        <h1 class="display-3">BoolPress Blog</h1>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dolore
          corporis, autem officia esse laborum dignissimos ut assumenda
          accusamus ullam ipsa sequi tempore voluptate, harum eos at dolorum
          perferendis voluptas.
        </p>
      </div>
    </div>

    <section class="recent-articles py-4">
      <div class="container">
        <h2>Recent Articles</h2>
        <div class="row">
          <div class="col" v-for="post in posts" :key="post.id">
            <div class="card">
              <img
                class="img-fluid"
                :src="'/storage/' + post.cover_image"
                alt=""
              />
              <div class="card-body">
                <p>{{ post.content.slice(0, 200) + "..." }}</p>
                <router-link :to="{ name: 'post', params: { slug: post.slug } }"
                  >Read more</router-link
                >
              </div>
            </div>
          </div>
        </div>
        <div class="go-to-blog text-center py-4">
          <router-link
            class="btn btn-primary text-white"
            :to="{ name: 'posts' }"
            >Go to blog</router-link
          >
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      posts: "",
    };
  },
  methods: {},
  mounted() {
    axios
      .get("/api/posts")
      .then((response) => {
        console.log(response.data);
        const posts = response.data.data;
        this.posts = posts.slice(0, 4);
      })
      .catch((e) => {
        console.error(e);
      });
  },
};
</script>

<style>
</style>