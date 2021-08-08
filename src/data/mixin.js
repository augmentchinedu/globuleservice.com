import { mapGetters } from "vuex";

export default {
  computed: {
    ...mapGetters(["data", "info", "headings"])
  }
};
