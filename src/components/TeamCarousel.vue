<template>
  <v-sheet class="mx-auto" elevation="0" max-width="800">
    <v-slide-group
      v-model="model"
      class="pa-4"
      active-class="success"
      show-arrows
    >
      <v-slide-item v-for="(item, i) in data.team" :key="i">
        <v-card class="ma-4" height="350" width="300" elevation="0">
          <v-row>
            <v-col cols="12">
              <v-img
                :src="item.imgUrl"
                :lazy-src="item.imgUrl"
                height="250"
              ></v-img>
            </v-col>
            <v-col cols="12">
              <div class="text-center">
                <div class="mx-2">
                  <span class="text--black text-h6">
                    {{ item.name }}
                  </span>
                  <br />
                  <span class="text--black text-subtitle-2">
                    {{ item.position }}
                  </span>
                </div>
              </div>
            </v-col>
          </v-row>
          <!-- <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-scale-transition>
              <v-icon
                v-if="active"
                color="white"
                size="48"
                v-text="'mdi-close-circle-outline'"
              ></v-icon>
            </v-scale-transition>
          </v-row> -->
        </v-card>
      </v-slide-item>
    </v-slide-group>
  </v-sheet>
</template>

<script>
export default {
  data: () => ({
    model: null,
  }),
};
</script>