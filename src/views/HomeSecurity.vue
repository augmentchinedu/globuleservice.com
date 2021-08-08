<template>
  <div>
    <div class="ma-6">
      <v-row class="my-6">
        <v-col cols="12" md=""
          ><h1 class="text-uppercase text-h2  font-weight-black ml-6">
            on the move ?
          </h1></v-col
        >
      </v-row>
      <v-row>
        <v-col cols="12">
          <v-img src="../assets/images/moves-program-Banners.jpg">
            <v-row class="fill-height ma-0" align="center" justify="start">
              <v-col cols="12" md="7" class="ml-3 mt-2">
                <h1 class="my-1 text-h3 font-weight-black text-center black--text">
                  DON’T FORGET TO TAKE US WITH YOU
                </h1>
                <p class="my-3 text-center black--text">
                  Let us handle the security for your new home. We’ll upgrade
                  your system and keep providing the professional monitoring
                  that you trust.
                </p>
                <div class="text-center mx-auto">
                  <router-link to="/request-a-quote">
<v-btn class="my-1 mx-auto" elevation="1"
                    >request a quote now</v-btn
                  >
                  </router-link>
                  
                </div>
              </v-col>
            </v-row>
          </v-img>
          <v-img
            src="../assets/images/lifestyle-couple-lounging-in-living-room-2880.jpg"
          >
            <v-row class="fill-height ma-0" align="center" justify="end">
              <v-col cols="12" md="6">
                <h1 class="text-h3 font-weight-black text-center">
                  RISK-FREE FOR 30 DAYS
                </h1>
                <p class="text-center mt-3">
                  You’ll get a system that’s a perfect fit for your needs. But
                  if you are not totally satisfied in the first 30 days, you can
                  cancel your service with no termination fee – no questions
                  asked.
                </p>
              </v-col>
            </v-row>
          </v-img></v-col
        >
        <v-col cols="12" class="my-2">
          <h1 class="my-8 text-center">Browse our suite of solutions</h1>

          <v-row>
            <v-col cols="12" md="4" v-for="(i, n) in browse" :key="n">
              <v-card class="" height="490">
                <v-img height="250" :src="i.image"></v-img>

                <h3 class="text-center my-3">{{ i.title }}</h3>

                <v-card-text class="pa-6">
                  <div class="text-center">{{ i.text }}</div>
                </v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
      <v-row class="px-auto">
        <v-col cols="12" class="text-center">
          <router-link
            to="/request-a-quote"
            style="text-decoration: none; color: inherit;"
            ><v-btn color="success">REQUEST A QUOTE NOW</v-btn></router-link
          >
        </v-col>
      </v-row>
    </div>
    <Contact />
  </div>
</template>
<script>
import Contact from "../components/Contact.vue";
export default {
  data() {
    return {
      browse: [
        {
          image: "../assets/images/homesecurity/1.jpg",
          title: "Private Client Storage",
          text:
            "Our vaulting facilities are built to provide you with state‑of‑the‑art precious metals storage services, including primary dedicated pick‑and‑pack and storage operations around the world.",
        },
        {
          image: "../assets/images/homesecurity/2.png",
          title: "Secure Logistics",
          text:
            "Let globuleservices be your sole provider of secure logistics, managing the pick‑up, transit and delivery of your valuables.",
        },
        {
          image: "../assets/images/homesecurity/3.png",
          title: "Trade Show Services",
          text:
            "Our trade show services manage every level of the supply chain for diamonds, jewelry.",
        },
        {
          image: "../assets/images/homesecurity/4.jpg",
          title: "Secure Long Haul Transportation",
          text:
            "High‑value transportation of valuable assets across countries and borders.",
        },
        {
          image: "../assets/images/homesecurity/5.png",
          title: "Distribution Solutions",
          text:
            "Secure and efficient, our distribution solutions are designed to support your supply chain strategy.",
        },
        {
          image: "../assets/images/homesecurity/6.png",
          title: "CEIV Pharma‑Certified Transport",
          text:
            "End‑to‑end temperature control and security for life science products, via air, sea, and road.",
        },
        {
          image: "../assets/images/homesecurity/7.png",
          title: "Customs Clearance",
          text:
            "Let our global network of customs experts help to reduce delays in your shipments.",
        },
        {
          image: "../assets/images/homesecurity/8.png",
          title: "Secure Vaults and Bonded Warehouses",
          text:
            "Our high‑security warehousing protects your products around the clock.",
        },
        {
          image: "../assets/images/homesecurity/10.png",
          title: "Inventory Management",
          text:
            "With Globuleservices’s inventory management, you stay informed with complete visibility and control.",
        },
        {
          image: "../assets/images/homesecurity/11.jpg",
          title: "Cash Processing",
          text:
            " Globuleservices is the trusted partner to central banks, wholesale, and retail banks for global multi-currency processing.",
        },
      ],
    };
  },
  components: {
    Contact,
  },
};
</script>

<style></style>
