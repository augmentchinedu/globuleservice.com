<template>
  <div>
    <v-row>
      <v-img
        src="../assets/images/SCENIC/1.jpg"
        height="400"
      >
      </v-img>
    </v-row>
    <v-container class="px-4">
      <v-row>
        <v-col cols="12" class="mt-6">
          <h1>
            Take a 1-hour Toronto/Niagara Scenic or a 20-minute Toronto Scenic
          </h1>
          <p>
            Witness a transformation as the skyline of the city disappears and
            Niagara Falls the world of suburbia passes beneath you. Relax as you
            fly over the Niagara River Whirlpool and the Old Fort George. And at
            the end of your tour, you’ll arrive at the picturesque Billy Bishop
            Toronto City Airport with shoreline and waterfront views in the
            heart of the city.
          </p>
          <p>
            <router-link to="/request-a-quote">Request a quote </router-link>
            today for more information on our scenic tours.
          </p>
        </v-col>
      </v-row>
      <v-row>
        <v-col
          cols="12"
          md="6"
          class="borders"
        >
          <h1>1-HOUR NIAGARA/TORONTO TOUR</h1>
          <p>
            Take off from Billy Bishop Toronto City Airport with views of
            downtown, Ontario Place, CNE, and the waterfront.
          </p>
          <p>Fly direct over Lake Ontario to St. Catharines.</p>
          <p>Attractions include:</p>
          <ul>
            <li>
              Niagara-on-the-Lake
            </li>
            <li>
              Welland Canal
            </li>
            <li>
              Welland Canal lock system and international cargo ships
            </li>
            <li>
              Wineries and Vineyards
            </li>
            <li>
              Major shipping lanes between Canada and the U.S.&nbsp;
            </li>
            <li>
              Canadian and American Niagara Falls
            </li>
            <li>
              Clifton Hill tourist area
            </li>
            <li>
              Skylon Tower
            </li>
          </ul>
        </v-col>

        <v-col cols="12" md="6"
          ><h1>
            You will then circle Niagara Falls and return via Niagara River and
            Niagara Gorge.
          </h1>
          <p>
            Attractions
          </p>
          <ul>
            <li>
              Gorge Amphitheatre&nbsp;
            </li>
            <li>
              Niagara River Whirlpool
            </li>
            <li>
              U.S. to Canada border bridges
            </li>
            <li>
              Sir Adam Beck Hydroelectric Generating Stations
            </li>
            <li>
              Brock’s Monument
            </li>
            <li>
              Old Fort George
            </li>
            <li>
              Marinas and yacht clubs of Niagara-on-the-lake
            </li>
            <li>
              Port Dalhousie (famous for international rowing events
            </li>
          </ul></v-col
        >
      </v-row>
    </v-container>
    <v-divider></v-divider>
    <v-container class="px-4 mb-3">
      <v-row>
        <v-col
          cols="12"
          md="6"
          class="borders"
        >
          <p>Next you will embark on your Downtown Toronto scenic tour.</p>
          <p>Attractions include:</p>
          <ul>
            <li>
              CN Tower
            </li>
            <li>
              Rogers Center
            </li>
            <li>
              Financial District
            </li>
            <li>
              Billy Bishop Toronto City Airport
            </li>
            <li>
              Yonge and Dundas Square
            </li>
            <li>
              Queen’s Park
            </li>
          </ul>
        </v-col>

        <v-col cols="12" md="6"
          ><h1>
            20-MINUTE TORONTO TOUR
          </h1>
          <p>
            Take off from Billy Bishop Toronto City Airport with views of
            downtown Toronto, Ontario Place, CNE, and the waterfront. You will
            then head east past the outer Harbour with views of the Beaches,
            Boardwalk and marinas to the Scarborough Bluffs.
          </p>
          <p>
            Your flight will turn north to Midtown and then back to spectacular
            Downtown Toronto.
          </p>
          <p>Attractions include:</p>
          <ul>
            <li>
              CN Tower
            </li>
            <li>
              Rogers Center
            </li>
            <li>
              Financial District
            </li>
            <li>
              Billy Bishop Toronto City Airport
            </li>
            <li>
              Yonge and Dundas Square
            </li>
            <li>
              Queen’s Park
            </li>
          </ul>
          <p>
            You will then land at Billy Bishop Toronto City Airport with
            shoreline and waterfront views.
          </p>
        </v-col>
      </v-row>
    </v-container>
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

<style>
@media screen and (min-width: 600px) {
  .borders {
    border-style: solid;
    border-color: #b5b5b5;
    border-width: 0px 1px 0px 0px;
  }
}
</style>
