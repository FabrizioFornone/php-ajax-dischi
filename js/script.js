new Vue({
  el: "#app",
  data: {
    discList: [],
    vmodel: "",
  },
  methods: {
    callFilteredApi: function () {
      if (this.vmodel === "") {
        axios
          .get("http://localhost:80/Esercizi/php-ajax-dischi/api/api.php")
          .then((res) => {
            this.discList = res.data;
          });
      } else {
        this.discList = "";
        axios
          .get(
            `http://localhost:80/Esercizi/php-ajax-dischi/api/api.php?genre=${this.vmodel}`
          )
          .then((res) => {
            this.discList = res.data;
          });
      }
    },
  },
  mounted() {
    axios
      .get("http://localhost:80/Esercizi/php-ajax-dischi/api/api.php")
      .then((res) => {
        this.discList = res.data;
      });
  },
});
