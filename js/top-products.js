axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-app-top-productos",
  data: {
    pagina_actual: 1,
    productos: [],
    SKU: [],
  },
  mounted: function () {
    console.log("Vue cargó correctamente los Productos Destacados.");
    this.get_all_productos();
  },
  methods: {
    get_all_productos: async function () {
      let th = this;
      let response = await axios.get(
        global_apiserver + "/public/ecommerce/buscar/"
      );
      th.productos = response.data.data.slice(-3);
      console.log(th.productos);
      console.log(th.productos[0].PERMALINK);
    },
  },
});
