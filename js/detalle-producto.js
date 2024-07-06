axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-container",
  data: {
    numProductos: 0,
    total: 0.0,
    productosEnCarrito: [],
    productoExiste: null,
    nProdDiferenciaExis: 0,

    idLocalProducto: 0,
    maxProducto: 1,
    productosCargar: 1,
    productoEnVista: null,
  },
  mounted: async function () {
    console.log("Vue cargó correctamente el Detalle Producto.");
    let th = this;
    this.idLocalProducto = idGlobalProducto;
    this.productoEnVista = productoEnVista;
    console.log(this.productoEnVista);
    this.numProductos = parseInt(localStorage.getItem("numProductos"));
    this.total = parseFloat(localStorage.getItem("total"));
    this.productosEnCarrito = JSON.parse(localStorage.getItem("productos"));
    this.revisarExistencia(1);
  },
  methods: {
    actualizarProductoCarrito: async function () {
      this.revisarExistencia(2);
      if (this.productoExiste) {
        let cantidadAumentoReal =
          parseInt(this.productosCargar) -
          parseInt(this.productoExiste.CANTIDAD);
        this.numProductos += parseInt(cantidadAumentoReal);
        this.total +=
          parseInt(cantidadAumentoReal) *
          parseFloat(this.productoExiste.PRECIO_FLOAT);
        this.productoExiste.CANTIDAD = this.productosCargar;

        for (var i = 0; i < this.productosEnCarrito.length; i++) {
          if (this.productosEnCarrito[i].ID == this.productoExiste.ID) {
            this.productosEnCarrito[i] = this.productoExiste;
            break;
          }
        }
      } else {
        this.productoEnVista.CANTIDAD = parseInt(this.productosCargar);
        this.numProductos += parseInt(this.productosCargar);
        this.total +=
          parseInt(this.productosCargar) *
          parseFloat(this.productoEnVista.PRECIO_FLOAT);
        this.productosEnCarrito.push(this.productoEnVista);
      }

      await this.actualizarCarrito();
    },

    validarEntrada: function () {
      this.productosCargar = parseInt(
        this.productosCargar.toString().replace("-", "")
      );
      if (isNaN(this.productosCargar) || parseInt(this.productosCargar) < 1)
        this.productosCargar = 1;
      if (
        this.productoExiste &&
        this.productosCargar > this.productoExiste.EXISTENCIAS
      )
        this.productosCargar = this.productoExiste.EXISTENCIAS;
    },

    revisarExistencia: function (opcion) {
      let th = this;
      let productoExiste = this.productosEnCarrito.find(function (item) {
        return item.ID == th.idLocalProducto;
      });

      console.log(productoExiste);
      if (productoExiste) {
        this.maxProducto = productoExiste.EXISTENCIAS;
        if (opcion == 1)
          this.productosCargar = parseInt(productoExiste.CANTIDAD);
      } else {
        this.maxProducto = this.productoEnVista.EXISTENCIAS;
      }

      this.productoExiste = productoExiste;
    },

    actualizarCarrito: async function () {
      appCarrito.$root.$data.numProductos = this.numProductos;
      appCarrito.$root.$data.total = parseFloat(this.total).toFixed(2);
      appCarrito.$root.$data.productos = this.productosEnCarrito;

      console.log(this.productosEnCarrito);
      localStorage.setItem("numProductos", this.numProductos);
      localStorage.setItem("total", parseFloat(this.total).toFixed(2));
      localStorage.setItem(
        "productos",
        JSON.stringify(this.productosEnCarrito)
      );
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
