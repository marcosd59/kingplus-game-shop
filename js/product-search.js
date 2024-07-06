axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-app-product-search",
  data: {
    categoria: "",
    busqueda: "",
    productos: [],
  },
  mounted: function () {
    console.log("Vue cargó correctamente la Búsqueda de Productos");
    this.get_products();
  },
  methods: {
    get_products: async function () {
      const response = await axios.get(
        `${global_apiserver}/public/ecommerce/buscar/?b=${this.busqueda}&c=${this.categoria}`
      );
      console.log(response.data);
      this.productos = response.data.data;
    },
    change_busqueda: function (e) {
      const value = e.target.elements.search.value;
      this.busqueda = value;
      this.get_products();
    },
    change_categoria: function (categoria) {
      this.categoria = categoria;
      this.get_products();
    },
  },
  computed: {},
});
