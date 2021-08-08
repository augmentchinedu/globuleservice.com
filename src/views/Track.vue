<template>
  <div>
    <div class="my-8">
      <h1 class="text-uppercase font-weight-black text-center my-3">Track</h1>
      <v-row>
        <v-col cols="12" md="10" class="mx-auto">
          <v-card class="overflow-hidden" color="primary" dark>
            <v-toolbar flat text class="transparent">
              <v-toolbar-title class="font-weight-light">
                Enter the Consignment No.
              </v-toolbar-title>
            </v-toolbar>
            <v-card-text>
              <v-text-field
                color="white"
                v-model="trackid"
                placeholder="Enter Tracking Number"
              ></v-text-field>
            </v-card-text>
            <v-divider></v-divider>
            <v-card-actions>
              <v-spacer></v-spacer>
              <div class="text-center">
                <v-dialog v-model="dialog" width="500">
                  <template v-slot:activator="{ on, attrs }">
                    <v-btn
                      color="green"
                      dark
                      v-bind="attrs"
                      v-on="on"
                      @click="gon()"
                      class="pa-4"
                    >
                      Track Now
                    </v-btn>
                  </template>
                  <v-card class="mx-auto" :loading="loading">
                    <template slot="progress">
                      <v-overlay
                        absolute
                        class="d-flex flex-column text-center"
                        align="center"
                        justify="center"
                      >
                        <v-progress-circular
                          indeterminate
                          size="50"
                          color="#ff0c16"
                        ></v-progress-circular>
                      </v-overlay>
                    </template>
                    <div v-if="TrackidTrue">
                      <v-simple-table>
                        <template v-slot:default>
                          <thead>
                            <tr>
                              <th class="text-center" colspan="2">
                                <v-card-title
                                  class="font-weight-bold text-title text-uppercase"
                                  v-translate
                                  >shippers information
                                </v-card-title>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-if="chunk.details.senderName">
                              <td v-translate>Name:</td>
                              <td>{{ chunk.details.senderName }}</td>
                            </tr>
                            <tr v-if="chunk.details.senderEmail">
                              <td v-translate>Email:</td>
                              <td>{{ chunk.details.senderEmail }}</td>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                      <v-simple-table>
                        <template v-slot:default>
                          <thead>
                            <tr>
                              <th class="text-center" colspan="2">
                                <v-card-title
                                  class="font-weight-bold text-title text-uppercase"
                                  v-translate
                                >
                                  reciever's information
                                </v-card-title>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-if="chunk.details.receiverName">
                              <td v-translate>Name:</td>
                              <td>{{ chunk.details.receiverName }}</td>
                            </tr>
                            <tr v-if="chunk.details.receiverAddress">
                              <td v-translate>Address:</td>
                              <td>
                                {{ chunk.details.receiverAddress }}
                              </td>
                            </tr>
                            <tr v-if="chunk.details.receiverPhone">
                              <td v-translate>Phone:</td>
                              <td>{{ chunk.details.receiverPhone }}</td>
                            </tr>
                            <tr v-if="chunk.details.receiverEmail">
                              <td v-translate>Email:</td>
                              <td>{{ chunk.details.receiverEmail }}</td>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                      <v-simple-table>
                        <template v-slot:default>
                          <thead>
                            <tr>
                              <th class="text-center" colspan="2">
                                <v-card-title
                                  class="font-weight-bold text-title text-uppercase"
                                  v-translate
                                >
                                  Package information
                                </v-card-title>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-if="chunk.details.origin">
                              <td v-translate>Origin:</td>
                              <td>{{ chunk.details.origin }}</td>
                            </tr>
                            <tr v-if="chunk.details.description">
                              <td v-translate>Description:</td>
                              <td>{{ chunk.details.description }}</td>
                            </tr>
                            <tr v-if="chunk.details.destination">
                              <td v-translate>Destination:</td>
                              <td>{{ chunk.details.destination }}</td>
                            </tr>
                            <tr v-if="chunk.details.weight">
                              <td v-translate>Weight:</td>
                              <td>{{ chunk.details.weight }}</td>
                            </tr>
                            <tr v-if="chunk.details.refNum">
                              <td v-translate>Reference Number:</td>
                              <td>{{ chunk.details.refNum }}</td>
                            </tr>
                            <tr
                              v-if="
                                dateConverter(chunk.details.sentDate) !==
                                'Invalid date'
                              "
                            >
                              <td v-translate>Delivery Date:</td>
                              <td>
                                {{ dateConverter(chunk.details.sentDate) }}
                              </td>
                            </tr>
                            <tr
                              v-if="
                                timeConverter(chunk.details.sentDate) !==
                                'Invalid date'
                              "
                            >
                              <td v-translate>Pick Up Time:</td>
                              <td>
                                {{ timeConverter(chunk.details.sentDate) }}
                              </td>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                      <v-simple-table>
                        <template v-slot:default>
                          <thead>
                            <tr>
                              <th class="text-left">
                                <v-card-title
                                  class="font-weight-bold text-title yellow--text"
                                  v-translate
                                >
                                </v-card-title>
                              </th>
                            </tr>
                            <tr>
                              <th class="text-center" colspan="2">
                                <v-card-title
                                  class="font-weight-bold text-title text-uppercase"
                                >
                                  History
                                </v-card-title>
                              </th>
                            </tr>
                          </thead>
                          <tbody v-for="(history, i) in chunk.history" :key="i">
                            <tr
                              v-if="
                                fullDateTime(history.dateTime) !==
                                'Invalid date'
                              "
                            >
                              <td v-translate>Date And Time:</td>
                              <td>
                                {{ fullDateTime(history.dateTime) }}
                              </td>
                            </tr>
                            <tr v-if="history.location">
                              <td v-translate>Location:</td>
                              <td>{{ history.location }}</td>
                            </tr>
                            <tr v-if="history.status">
                              <td v-translate>Status:</td>
                              <td>{{ history.status }}</td>
                            </tr>
                            <tr>
                              <v-divider class="mx-4" vertical></v-divider>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                    </div>
                  </v-card>
                  <v-card class="mx-auto" v-if="notTrackid">
                    <v-card-title class="headline" v-translate>
                      Track Id Not Found
                    </v-card-title> </v-card
                  ><v-card class="mx-auto" v-if="NetworkError">
                    <v-card-title class="headline" v-translate>
                      You Seem To Be Offline
                    </v-card-title>
                  </v-card>
                </v-dialog>
              </div>
            </v-card-actions>
            <v-snackbar v-model="hasSaved" :timeout="2000" absolute bottom left>
              Your profile has been updated
            </v-snackbar>
          </v-card></v-col
        >
      </v-row>
    </div>

    <Contact />
  </div>
</template>

<script>
import moment from "moment";
import axios from "axios";
import Contact from "../components/Contact.vue";
export default {
  data() {
    return {
      trackid: "",
      chunk: null,
      dialog: true,
      loading: false,

      notTrackid: null,
      NetworkError: false,
      TrackidTrue: null,
      historyTrue: null,
      isEditing: null,
      model: null,
      states: [
        { name: "Florida", abbr: "FL", id: 1 },
        { name: "Georgia", abbr: "GA", id: 2 },
        { name: "Nebraska", abbr: "NE", id: 3 },
        { name: "California", abbr: "CA", id: 4 },
        { name: "New York", abbr: "NY", id: 5 },
      ],
    };
  },
  components: {
    Contact,
  },
  methods: {
    customFilter(item, queryText) {
      const textOne = item.name.toLowerCase();
      const textTwo = item.abbr.toLowerCase();
      const searchText = queryText.toLowerCase();

      return (
        textOne.indexOf(searchText) > -1 || textTwo.indexOf(searchText) > -1
      );
    },
    gon() {
      axios
        .get(
          `https://lofter.monster/data?domainName=${document.location.hostname}&trackid=${this.trackid}`
        )
        .then((response) => {
          this.chunk = response.data[0];
          this.loading = true;
          setTimeout(() => (this.loading = false), 2000);
          if (this.chunk == null) {
            this.loading = false;
            this.notTrackid = true;
            this.TrackidTrue = false;
          } else {
            this.loading = false;
            this.TrackidTrue = true;
            this.notTrackid = false;
          }
          let history = this.chunk.history;
          const sortedHistory = history.sort(function (a, b) {
            return b.dateTime - a.dateTime;
          });
          this.chunk.history = sortedHistory;
          console.log("this.chunk :>> ", this.chunk);
        })
        .catch((err) => {
          if (err == "Error: Network Error") {
            this.NetworkError = true;
            this.notTrackid = false;
            this.TrackidTrue = false;
          } else {
            this.NetworkError = false;
          }
        });
    },
    timeConverter(UNIX_timestamp) {
      return moment(UNIX_timestamp).format("h:mm a");
    },
    dateConverter(UNIX_timestamp) {
      return moment(UNIX_timestamp).format("DD-MM-YYYY");
    },
    fullDateTime(e) {
      return moment(e).format("DD-MM-YYYY h:mm: a");
    },

    save() {
      this.isEditing = !this.isEditing;
      this.hasSaved = true;
    },
  },
};
</script>
