<template>
  <div class="page container mt-4">
    <div class="p-5 bg-dark">
      <div class="container text-white">
        <div class="d-flex gap-4">
          <div class="avatar">
            <img class="rounded-circle" src="https://picsum.photos/100/100" alt="" />
          </div>
          <div class="jumbo-text">
            <h1 class="display-3">About me</h1>
            <p class="lead">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam ullam est omnis vitae! Ipsum sint dolorum, corporis
              sequi fugiat dignissimos at, laboriosam facilis quis provident
              dicta deleniti ut minima iusto?
            </p>
          </div>
        </div>
        <hr class="my-2" />
        <p>More info</p>
        <p class="lead">
          <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }"
            >Read my blog</router-link
          >
        </p>
        <div class="content">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique
          architecto expedita alias quasi atque quos mollitia accusamus soluta,
          minus optio eos modi praesentium quisquam nulla! Perferendis corrupti
          ut quas facilis quia, sunt nihil magni maiores ad natus. Sit
          exercitationem, cupiditate excepturi quo nobis saepe at, deserunt quos
          repellat corporis nostrum esse magnam hic vero quisquam eveniet non,
          totam quaerat? Debitis assumenda eaque pariatur! Quas ab velit amet
          facere, architecto accusantium modi iusto voluptatibus reiciendis
          vitae corporis quo autem doloribus. Eaque rerum distinctio vitae quis
          cumque culpa totam incidunt obcaecati porro, inventore a hic, facilis
          quibusdam doloremque pariatur numquam enim aliquam eos dolore
          reprehenderit iusto ipsa! Dolor consequatur quidem ipsam tempora
          laborum adipisci corporis optio nobis esse? Vitae soluta hic
          consectetur neque, facilis exercitationem quam officiis fugit eveniet
          illum veniam ipsam distinctio quia cupiditate blanditiis animi at
          iusto quaerat saepe aperiam et culpa molestias? Tempore explicabo
          perferendis iusto reprehenderit incidunt, nulla veritatis corporis
          quam rerum temporibus, praesentium dolores neque fuga ratione
          perspiciatis deleniti rem eum? Labore, alias libero asperiores veniam
          at possimus magnam incidunt! Consectetur sunt fugiat fuga quis
          expedita. Sint vero incidunt maiores? Veritatis modi ducimus aut, vero
          unde sequi quo eligendi itaque blanditiis dolore voluptates. Error
          quam soluta quis laudantium. Eos aspernatur hic, in totam deleniti
          dolor non asperiores architecto quidem ex illo nihil eius amet
          veritatis quae sequi beatae perferendis alias eligendi possimus
          dolores, dolore pariatur provident a. Fugiat et earum officiis quo,
          obcaecati similique neque modi? Vel, sunt? Incidunt delectus neque
          consequatur cupiditate? Ullam sunt ad mollitia neque ipsum ut
          similique praesentium aliquid eum, tempore eos officia asperiores
          maiores? Tenetur magnam voluptatem accusamus veritatis, soluta eius
          consectetur quam quod sit cupiditate nisi ullam dolorem iusto porro?
          Voluptate, odio animi earum dolor, fuga dolore magni voluptatem rerum
          dolores modi velit, veniam minus inventore perferendis voluptatum
          atque iusto. Unde.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "About",
};
</script>

<style>
</style>