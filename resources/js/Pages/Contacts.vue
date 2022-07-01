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
            <h1 class="display-3">Contact me</h1>
            <p class="lead">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam ullam est omnis vitae! Ipsum sint dolorum, corporis
              sequi fugiat dignissimos at, laboriosam facilis quis provident
              dicta deleniti ut minima iusto?
            </p>
          </div>
        </div>
        <hr class="my-2" />
        <div class="container">
          <div class="content py-4">
            <vue-form method="POST" action="/contact-form">
              <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input
                  type="text"
                  name="full_name"
                  id="full_name"
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                />
                <small id="helpId" class="text-muted">Insert your name</small>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                />
                <small id="helpId" class="text-muted">Insert your email</small>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input
                  type="text"
                  name="subject"
                  id="subject"
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                />
                <small id="helpId" class="text-muted">Insert a subject</small>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea
                  class="form-control"
                  name="message"
                  id="message"
                  rows="5"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary text-white">
                Send Message
              </button>
            </vue-form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import VueForm from "../components/VueForm.vue";
export default {
  name: "Contacts",
  components: { VueForm },
};
</script>

<style>
</style>