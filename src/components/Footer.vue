<template>
  <v-footer dark padless>
    <v-card class="flex" flat tile>
      <v-card-text class="white--text text-center">
        <p class="text-uppercase font-weight-medium text-subtitle-2">
          {{ new Date().getFullYear() }} © {{ data.companyName }}, All Right
          Reserved
        </p>
      </v-card-text>
    </v-card>
  </v-footer>
</template>
