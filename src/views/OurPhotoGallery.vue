<template>
  <div>
    <v-container grid-list-xs class="my-6">
      <v-row>
        <v-col
          v-for="n in images"
          :key="n"
          class="d-flex child-flex mx-auto"
          cols="12"
          md="4"
        >
          <v-img :src="n" :lazy-src="n" height="250" class="grey lighten-2">
            <template v-slot:placeholder>
              <v-row class="fill-height ma-0" align="center" justify="center">
                <v-progress-circular
                  indeterminate
                  color="grey lighten-5"
                ></v-progress-circular>
              </v-row>
            </template>
          </v-img>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12">
          <h1 class="text-center">
            OUR EXECUTIVE INTERIORS
          </h1>
        </v-col>
      </v-row>
      <v-row>
        <v-col
          v-for="(n, i) in interior"
          :key="i"
          class="d-flex child-flex"
          cols="12"
          md="4"
        >
          <v-img :src="n" :lazy-src="n" aspect-ratio="1" class="grey lighten-2">
            <template v-slot:placeholder>
              <v-row class="fill-height ma-0" align="center" justify="center">
                <v-progress-circular
                  indeterminate
                  color="grey lighten-5"
                ></v-progress-circular>
              </v-row>
            </template>
          </v-img>
        </v-col>
      </v-row>
    </v-container>
    <Contact />
  </div>
</template>

<script>
import Contact from "../components/Contact.vue";
export default {
  data() {
    return {
      interior: [
        "../assets/images/gallery/exec2.jpg",
        "../assets/images/gallery/exec3.jpg",
        "../assets/images/gallery/exec4.jpg",
      ],
      images: [
        "../assets/images/gallery/1.jpg",
        "../assets/images/gallery/2.jpg",
        "../assets/images/gallery/3.jpg",
        "../assets/images/gallery/4.jpg",
        "../assets/images/gallery/5.jpg",
        "../assets/images/gallery/6.jpg",
        "../assets/images/gallery/7.jpg",
        "../assets/images/gallery/8.jpg",
        "../assets/images/gallery/9.jpg",
        "../assets/images/gallery/10.jpg",
        "../assets/images/gallery/11.jpg",
        "../assets/images/gallery/12.jpg",
        "../assets/images/gallery/13.jpg",
        "../assets/images/gallery/14.jpg",
        "../assets/images/gallery/15.jpg",
        "../assets/images/gallery/16.jpg",
        "../assets/images/gallery/17.jpg",
        "../assets/images/gallery/18.jpg",
        "../assets/images/gallery/19.jpg",
        "../assets/images/gallery/20.jpg",
        "../assets/images/gallery/21.jpg",
        "../assets/images/gallery/22.jpg",
        "../assets/images/gallery/23.jpg",
        "../assets/images/gallery/29.jpg",
        "../assets/images/gallery/30.jpg",
        "../assets/images/gallery/32.jpg",
        "../assets/images/gallery/33.jpg",
        "../assets/images/gallery/34.jpg",
        "../assets/images/gallery/35.jpg",
        "../assets/images/gallery/36.jpg",
        "../assets/images/gallery/37.jpg",
        "../assets/images/gallery/38.jpg",
        "../assets/images/gallery/39.jpg",
      ],
    };
  },
  components: {
    Contact,
  },
};
</script>
