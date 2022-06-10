const app = new Vue({
    el: "#root",
    data: {
      name: "Chris",
      database: [],
    },
    created() {
      axios
        .get("http://localhost/php-ajax-dischi/api/server.php")
        .then((resp) => {
          this.database = resp.data;
        });
    },
  });