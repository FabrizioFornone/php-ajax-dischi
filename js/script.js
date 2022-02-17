new Vue({
  el: "#app",
  data: {
    discList: [],
  },
  mounted() {
    axios
      .get("http://localhost:80/Esercizi/php-ajax-dischi/api/api.php")
      .then((resp) => {
        this.discList = resp.data;
      });
  },
});
