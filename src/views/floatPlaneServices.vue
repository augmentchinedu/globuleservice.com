<template>
  <div>
    <v-row>
      <v-img src="../assets/images/about/5.jpg" height="400">
      </v-img>
    </v-row>
    <v-row class="text-center my-16">
      <v-col cols="10" class="mx-auto">
        <h1>Float Plane Services in Toronto, Muskoka Region and More</h1>
        <p>
          Our fleet consists of the best equipped, most comfortable and most
          reliable aircraft in the industry. Our Cessna 208 Caravans and Cessna
          206 amphibious float planes are world leaders, providing fast, safe
          transportation from the busiest urban centres to your favourite great
          escape.
        </p>
        <p>
          Whether you will be going to the cottage, golfing in Muskoka or
          meeting a client in New York City, our amphibious aircraft allow you
          to go directly from the dock to any runway, big or small. We look
          forward to providing you with the best service in the industry.
        </p>
        <p>
          From Muskoka, Georgian Bay, Temagami and Quebec to further
          destinations, we do it all. <span>Request a quote</span> today for
          more information on our float plane services.
        </p>
       
      </v-col>
    </v-row>
    <Contact />
  </div>
</template>

<script>
import Contact from "../components/Contact";
export default {
  components: {
    Contact,
  },
};
</script>
