axios.defaults.headers.common["token"] = global_token;

let filter = sessionStorage.getItem("filter");
let producto = sessionStorage.getItem("producto");
let terminoBusqueda = sessionStorage.getItem("terminoBusqueda");

var app = new Vue({
  el: "#vue-app-productos",
  data: {
    pagina_actual: 1,
    productos: [],
    SKU: [],
  },
  mounted: function () {
    console.log("Vue cargó correctamente la Tienda.");
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
    realizarBusqueda: async function () {
      let th = this;
      try {
        let response = await axios.get(
          global_apiserver + "/public/ecommerce/buscar/?b=" + th.terminoBusqueda
        );
        th.productos = response.data.data;
        th.total_de_resultados = response.data.total;
      } catch (error) {
        console.error("Error al buscar productos:", error);
      }
    },
  },
});

function changeFilter(filterParam) {
  sessionStorage.setItem("filter", filterParam);
  window.location.reload();
}

function realizarBusqueda(terminoBusqueda) {
  sessionStorage.setItem("terminoBusqueda", terminoBusqueda);
  console.log("Buscar: ", terminoBusqueda);
}

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

function changeFilter(filterParam) {
  sessionStorage.setItem("filter", filterParam);
  window.location.reload();
}
