<template>
  <v-carousel v-model="model" hide-delimiters  height="350">
    <v-carousel-item v-for="(color, i) in colors" :key="i">
      <v-sheet color="transparent" height="100%" tile>
        <v-row class="fill-height text-center" align="center" justify="center">
          <v-col cols="10">
            
            <div class="text-md-h6 my-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa
              aspernatur, vel sed ipsam consequuntur ducimus hic corporis enim,
              assumenda quaerat minus optio vero quis laborum atque
              reprehenderit aliquam fuga sapiente!
            </div>
            <div class="my-3">
              <v-rating
                value="4"
                color="yellow darken-3"
                background-color="grey darken-1"
                size="20"
                hover
                readonly
              ></v-rating>
            </div>

            <v-avatar>
              <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John" />
            </v-avatar>
          </v-col>
        </v-row>
      </v-sheet>
    </v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
  data: () => ({
    model: 0,
    colors: ["primary", "secondary", "yellow darken-2", "red", "orange"],
  }),
};
</script>
