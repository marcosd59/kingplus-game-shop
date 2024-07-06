axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-app-product-area",
  data: {
    pagina_actual: 1,
    productos: [],
    SKU: [],
  },
  computed: {
    productosLimitados() {
      return this.productos.slice(-8);
    },
  },
  mounted: function () {
    console.log("Vue cargó correctamente Product Area.");
    this.get_all_productos();
  },
  methods: {
    get_all_productos: async function () {
      let th = this;
      let response = await axios.get(
        global_apiserver + "/public/ecommerce/buscar/"
      );
      th.productos = response.data.data;
      console.log(th.productos);
      console.log(th.productos[0].PERMALINK);
    },
  },
});

function eliminarProducto(productId) {
  localStorage.removeItem(productId);
  console.log("Item removed.");
  window.location.reload();
}

function cambiarCantidad(productId, suma, existencias) {
  if (suma) {
    if (parseInt(localStorage.getItem(productId), 10) + 1 <= existencias) {
      console.log(parseInt(localStorage.getItem(productId), 10) + 1);
      console.log(localStorage);
      localStorage.setItem(
        productId,
        parseInt(localStorage.getItem(productId), 10) + 1
      );
    }
  } else {
    if (parseInt(localStorage.getItem(productId), 10) > 1) {
      localStorage.setItem(
        productId,
        parseInt(localStorage.getItem(productId), 10) - 1
      );
    }
  }
  document.getElementById(productId).value = localStorage.getItem(productId);
}

function addToCart(itemId) {
  localStorage.setItem(itemId, 1);
  app.get_all_productos();
}
