axios.defaults.headers.common["token"] = global_token;

var app = new Vue({
  el: "#vue-content-checkout",
  data: {
    subtotal: 0.0,
    envio: 0.0,
    costoEnvio: {},
    total: 0.0,
    productos: [],
    cantidad: [],
    filtered_productos: [],
    filtered_amount: [],
    datosOrden: {
      NOMBRE: "",
      APELLIDOS: "",
      EMAIL: "",
      TELEFONO: "",
      PAIS: "",
      ESTADO: "",
      MUNICIPIO: "",
      CALLE: "",
      NUM_INTERIOR: "",
      NUM_EXTERIOR: "",
      CODIGO_POSTAL: "",
      NOTAS_CLIENTE: "",
      PAGO_CON: "MercadoPago",
      PRODUCTOS: [],
    },
    descuento: {},
    cuponActivo: false,
    descuentoes: "",
    total_descuento: 0.0,
    cupon: { TIPO: "cantidad", VALOR: 0 },
  },
  mounted: async function () {
    console.log("Vue cargó correctamente el Checkout.");
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
    verificarCupon() {
      if (this.cuponActivo) {
        this.total = parseFloat(this.total_descuento) + parseFloat(this.envio);
      } else {
        this.total = parseFloat(this.subtotal) + parseFloat(this.envio);
      }
      let cupones = localStorage.getItem("cupon_tago");
      console.log(JSON.parse(cupones));
      this.cupon = JSON.parse(cupones);
    },
    verificarDescuento() {
      this.descuento = JSON.parse(localStorage.getItem("descuento"));
      console.log(this.descuento.total);
      if (parseInt(this.descuento.total) > 0) this.cuponActivo = true;
      if (this.descuento.tipo == "porcentaje")
        this.descuentoes = `%${this.descuento.valor}`;
      if (this.descuento.tipo == "cantidad")
        this.descuentoes = `$${this.descuento.valor}`;
      this.total_descuento = parseFloat(this.descuento.total).toFixed(2);
    },
    verificarProductos: function () {
      this.productos = JSON.parse(...localStorage);
      // if (localStorage.getItem("descuento") != null && localStorage.getItem("descuento") != "undefined") {
      //   this.verificarDescuento();
      // }

      // Ciclo for para sumar los elementos del array
      for (let i = 0; i < this.productos.length; i++) {
        this.subtotal += this.productos[i].CANTIDAD * this.productos[i].PRECIO;
      }

      // this.subtotal = parseFloat(localStorage.getItem("total")).toFixed(2);
    },
    realizarOrden: async function () {
      this.datosOrden.NOMBRE = document.getElementById("fname").value;
      this.datosOrden.APELLIDOS = document.getElementById("lname").value;
      this.datosOrden.EMAIL = document.getElementById("email").value;
      this.datosOrden.TELEFONO = document.getElementById("phone").value;
      this.datosOrden.PAIS = document.getElementById("country").value;
      this.datosOrden.ESTADO = document.getElementById("state").value;
      this.datosOrden.MUNICIPIO = document.getElementById("town").value;
      this.datosOrden.CALLE = document.getElementById("street").value;
      this.datosOrden.NUM_INTERIOR =
        document.getElementById("interiornumber").value;
      this.datosOrden.NUM_EXTERIOR =
        document.getElementById("exteriornumber").value;
      this.datosOrden.CODIGO_POSTAL = document.getElementById("zipcode").value;
      this.datosOrden.NOTAS_CLIENTE = document.getElementById("notes").value;
      let carritoString = {};

      // console.log de todos los datos de envio
      console.log(this.datosOrden);

      var i = 0;

      this.filtered_productos.forEach((element) => {
        carritoString["" + element.ID] = this.cantidad[i];
        i = i + 1;
      });

      this.datosOrden.PRODUCTOS = JSON.stringify(carritoString);
      this.datosOrden.COSTOS_ENVIO = JSON.stringify(this.costoEnvio);
      if (parseInt(this.descuento.total) > 0)
        this.datosOrden.CUPON = this.cupon;
      if (parseInt(this.descuento.total) > 0 && this.total == 0) {
        this.datosOrden.PAGO_CON = "Cupon";
      }

      await axios
        .post(`${global_apiserver}/public/ecommerce/ordenar/`, this.datosOrden)
        .then((response) => {
          console.log(response);
          if (response.data.response == "success") {
            Swal.fire({
              icon: "success",
              title: "¡Excelente!",
              text: "Redirigiendo al pago...",
            }).then((_result) => {
              window.location.replace(`./pago?orden=${response.data.id}`);
              console.log(`orden = ${response.data.id}`);
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "¡Algo salió mal!",
              html: response.data.message,
            });
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    pruebas: function () {
      let productosOrden = {};
      productosOrden = this.productos.map((elemento) => {
        return {
          ID: elemento.ID,
          NOMBRE: elemento.NOMBRE,
          PRECIO: elemento.PRECIO,
          CANTIDAD: elemento.CANTIDAD,
        };
      });

      this.datosOrden.PRODUCTOS = JSON.stringify(productosOrden);
      console.log(this.productos);
      console.log(this.datosOrden);
    },
  },
});
