<template>
  <div class="single-page">
    <div class="wrapper" v-if="!loading">
      <div
        class="p-5 bg-light"
        :style="{
          backgroundImage: 'url(/storage/' + post.cover_image + ')',
          backgroundRepeat: 'no-repeat',
        }"
      >
        <div class="container">
          <h1 class="display-3">{{ post.title }}</h1>
          <hr class="my-2" />
        </div>
        <div class="container">
          <p>{{ post.content }}</p>
          <div>
            <hr />
            <div class="category" v-if="post.category">
              <strong>Category: </strong>{{ post.category.name }}
            </div>
            <div class="tags" v-if="post.tags.length > 0">
              <ul>
                <li v-for="tag in post.tags" :key="tag">
                  Tags: {{ tag.name }}
                </li>
              </ul>
            </div>
            <div class="no-tags" v-else>
              <strong>Tags: N/A</strong>
            </div>
            <div class="author" v-if="post.user">
              Author: {{ post.user.name }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="loading text-center" v-else>
        ⏳ Loading...
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: "Post",
  data() {
    return {
      post: "",
      loading: true,
    };
  },
  mounted() {
    axios
      .get('/api/posts/' + this.$route.params.slug)
      .then((response) => {
        // console.log(response);
        this.post = response.data;
        this.laoding = false;
      })
      .catch((e) => {
        console.error(e);
      });
  },
};
</script>

<style>
</style>