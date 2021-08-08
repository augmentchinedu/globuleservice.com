<template>
  <v-app>
    <v-app-bar app dark>
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="./assets/logo/camronservice.png"
          transition="scale-transition"
          width="200"
          height="100"
          max-height="100"
          max-width="200"
        />
      </div>

      <div style="display: none" id="google_translate_element"></div>
      <v-spacer></v-spacer>
      <div class="d-none d-sm-none d-md-flex">
        <router-link
          :to="i.link"
          v-for="(i, n) in linksAndRoutes"
          :key="n"
          style="text-decoration: none; color: inherit"
        >
          <span class="text-caption text-uppercase px-2">{{ i.text }}</span>
        </router-link>

        <v-menu offset-y>
          <template v-slot:activator="{ on, attrs }">
            <v-btn text small v-bind="attrs" v-on="on"
              ><v-icon> mdi-translate</v-icon>
              <v-icon small>mdi-chevron-down</v-icon></v-btn
            >
          </template>
          <v-list>
            <v-list-item>
              <a style="display: none" id="current" href="#">English</a>
              <ul>
                <li>
                  <a id="English" onclick="checklang('English')">English </a>
                </li>

                <li>
                  <a
                    href="javascript:;"
                    id="Chinese"
                    onclick="checklang('Chinese')"
                    >Chinese
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="German"
                    onclick="checklang('German')"
                    >German
                  </a>
                </li>
                <li>
                  <a href="javascript:;" id="Dutch" onclick="checklang('Dutch')"
                    >Dutch
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Italian"
                    onclick="checklang('Italian')"
                    >Italian
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="French"
                    onclick="checklang('French')"
                    >French
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Russian"
                    onclick="checklang('Russian')"
                    >Russian
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Spanish"
                    onclick="checklang('Spanish')"
                    >Spanish
                  </a>
                </li>
              </ul>
            </v-list-item>
          </v-list>
        </v-menu>
      </div>
      <div class="d-xl-none d-md-none">
        <v-menu offset-y>
          <template v-slot:activator="{ on, attrs }">
            <v-btn text small v-bind="attrs" v-on="on"
              ><v-icon> mdi-translate</v-icon>
              <v-icon small>mdi-chevron-down</v-icon></v-btn
            >
          </template>
          <v-list>
            <v-list-item>
              <a style="display: none" id="current" href="#">English</a>
              <ul>
                <li>
                  <a id="English" onclick="checklang('English')">English </a>
                </li>

                <li>
                  <a
                    href="javascript:;"
                    id="Chinese"
                    onclick="checklang('Chinese')"
                    >Chinese
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="German"
                    onclick="checklang('German')"
                    >German
                  </a>
                </li>
                <li>
                  <a href="javascript:;" id="Dutch" onclick="checklang('Dutch')"
                    >Dutch
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Italian"
                    onclick="checklang('Italian')"
                    >Italian
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="French"
                    onclick="checklang('French')"
                    >French
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Spanish"
                    onclick="checklang('Spanish')"
                    >Spanish
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:;"
                    id="Russian"
                    onclick="checklang('Russian')"
                    >Russian
                  </a>
                </li>
              </ul>
            </v-list-item>
          </v-list>
        </v-menu>
        <v-menu offset-y>
          <template v-slot:activator="{ on, attrs }">
            <v-btn fab v-bind="attrs" v-on="on" text>
              <v-icon> mdi-menu </v-icon>
            </v-btn>
          </template>
          <v-list class="d-xl-none d-md-none">
            <router-link
              v-for="(i, n) in linksAndRoutes"
              :key="n"
              :to="i.link"
              style="text-decoration: none; color: inherit"
            >
              <v-list-item>
                <v-btn elevation="0" text>
                  <v-list-item-title class="text-button font-weight-bold">{{
                    i.text
                  }}</v-list-item-title>
                </v-btn>
              </v-list-item>
            </router-link>
          </v-list>
        </v-menu>
      </div>
    </v-app-bar>

    <v-main class="pa-0">
      <router-view></router-view>
    </v-main>
    <Footer />
  </v-app>
</template>
<script>
import Footer from "./components/Footer";
export default {
  name: "App",
  data: () => ({
    home: "contact",
    linksAndRoutes: [
      { link: "/", text: "home" },
      { link: "/executive-air-charter", text: "executive air charter" },
      { link: "/float-plane-services", text: "float plane services" },
      { link: "/home-security", text: "home security" },
      { link: "/our-photo-gallery", text: "our photo gallery" },
      { link: "/request-a-quote", text: "request a quote" },
      { link: "/scenic-flights", text: "scenic flights" },
      { link: "/track", text: "track" },
    ],
    languaes: ["English", "japanese"],
  }),
  methods: {
    toLowerCase(input) {
      return input.toLowerCase();
    },
  },
  components: {
    Footer,
  },
  metaInfo() {
    return {
      title: "Globule  Services || Fast Secure",
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        { name: "robots", content: "index, follow" },

        {
          name: "description",
          content: `At Cameron Air, our top priorities are your safety and comfort during your time with us. Our fleet of aircraft are designed to provide fast, comfortable and safe travel options to our passengers. Our all-weather aircraft are fully equipped to go where you want, when you want.`,
        },
      ],
    };
  },
};
</script>
<style lang="scss">
.v-application ul {
  padding-left: 0px;
}
.skiptranslate {
  display: none;
}
.list {
  list-style: none;
}
#goog-gt-tt {
  display: none !important;
}
li {
  list-style: none;
}

html,
body,
.v-application {
  font-family: "Poppins" !important;
}
//added all typography helper classes because of css specificity override
//https://vuetifyjs.com/en/styles/typography#typography
.v-application {
  .text-h1,
  .text-h2,
  .text-h3,
  .text-h4,
  .text-h5,
  .text-h6,
  .text-subtitle-1,
  .text-subtitle-2,
  .text-body-1 .text-body-2 .text-button .text-caption .text-overline {
    font-family: "Poppins" !important;
  }
}
</style>
