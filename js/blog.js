axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-app-blog",
  data: {
    pagina_actual: 1,
    categoria: "",
    articulos: [],
    total_de_resultados: 0,
  },
  computed: {
    articulosLimitados() {
      return this.articulos.slice(0, 2);
    },
  },
  mounted: function () {
    console.log("Vue cargó correctamente el Blog.");
    this.get_all_articulos();
  },
  methods: {
    get_all_articulos: async function () {
      let th = this;
      let response = await axios.get(
        global_apiserver +
          "/public/blog/articulos/paginacion/?p=" +
          th.pagina_actual +
          "&c=" +
          th.categoria
      );
      th.articulos = response.data.data;
      total_de_resultados = response.data.total;
      th.total_de_resultados = total_de_resultados;
      console.log(th.articulos);
    },
  },
});

function showModal() {
  document.getElementById("modal").style.display = "block";
}
