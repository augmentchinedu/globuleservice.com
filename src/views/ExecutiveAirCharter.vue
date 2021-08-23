<template>
  <div>
    <v-row>
      <v-img src="../assets/images/slider/1.jpg" height="400">
      </v-img>
    </v-row>
    <v-row class="my-16">
      <v-col cols="10" class="mx-auto">
        <div class="text-center">
          <h1>Executive Air Charter Services</h1>
          <p>
            At Globule Air, we are prepared to provide you with executive air
            charter service for any occasion. From local trips to long range
            charters, we will get you and your passengers where you need to go
            without delay. Whether your private charter is for a small group of
            executives or a large number of associates, we have the flexibility
            to accommodate passenger lists of all sizes.
          </p>
          <p>
            Our executive air charter flights offer you a number of luxurious
            benefits, including:
          </p>
        </div>
        <ul>
          <li class="my-2">
            <div>
              Convenience.
              <span
                >With hundreds of destinations serviced to date, we can access
                any airport, big or small.</span
              >
            </div>
          </li>
          <li class="my-2">
            <div>
              Security.
              <span>
                Travel with family, friends, or associates. You charter the
                aircraft and control the passenger list.</span
              >
            </div>
          </li>

          <li class="my-2">
            <div>
              Comfort.
              <span
                >Fly first class in our executive leather interior with fully
                reclining and articulating club seats, and couch.</span
              >
            </div>
          </li>
          <li class="my-2">
            <div>
              Efficiency.
              <span
                >Use executive terminals and avoid the crowded main terminal
                buildings. No early check in, no line ups, no waiting.</span
              >
            </div>
          </li>
          <li class="my-2">
            <div>
              Flexibility.
              <span
                >If your meeting runs late or you are caught in traffic, your
                flight will not depart until you are on board. Your schedule is
                our schedule.</span
              >
            </div>
          </li>
          <li class="my-2">
            <div>
              Cost.
              <span
                >Aircraft charter can be more cost effective than flying with an
                airline.</span
              >
            </div>
          </li>
        </ul>
        <h4>
          <p><router-link to="/request-a-quote" >Request a quote today</router-link> for travel to any destination.</p>
        </h4>
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
