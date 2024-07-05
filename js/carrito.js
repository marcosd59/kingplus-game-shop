axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-app-carrito",
  data: {
    pagina_actual: 1,
    categoria: "",
    total: 0.0,
    productos: [],
    cantidad: [],
    filtered_productos: [],
    filtered_amount: [],
    productos_en_carrito: [],
    total_de_resultados: 0,
    todas_categorias: [],
    numProductos: 0,
  },
  computed: {
    hasProductsInCart() {
      return this.filtered_productos.length > 0;
    },
    iva() {
      return (this.total * 0.16).toFixed(2);
    },
  },
  mounted: async function () {
    console.log("Vue cargó correctamente el Carrito.");
    this.get_all_productos();
  },
  methods: {
    get_all_productos: async function () {
      let filtered_productos = this.filtered_productos;
      let filtered_amount = this.filtered_amount;
      let response = await axios.get(
        global_apiserver + "/public/ecommerce/buscar/"
      );
      this.productos = response.data.data;
      for (var i = 0; i < localStorage.length; i++) {
        var storageId = localStorage.key(i);
        for (var j = 0; j < this.productos.length; j++) {
          if (storageId === this.productos[j].ID) {
            filtered_productos.push(this.productos[j]);
            this.total +=
              localStorage.getItem(storageId) *
              parseFloat(this.productos[j].PRECIO.replace(/,/g, ""));
            filtered_amount.push(
              localStorage.getItem(storageId) *
                parseFloat(this.productos[j].PRECIO.replace(/,/g, ""))
            );
            this.cantidad.push(localStorage.getItem(storageId));
          }
        }
      }
      this.filtered_productos = filtered_productos;
      this.filtered_amount = filtered_amount;
      console.log(this.filtered_productos);
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
