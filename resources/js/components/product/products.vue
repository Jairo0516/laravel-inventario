<template>

    <div class="container">
        <div class="row justify-content-center">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
                Registrar
            </button>
            <AddProduct></AddProduct>
            <EditProduct :product="product"></EditProduct>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">SKU</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(product,index) in products" :key="product.sku">
                    <th scope="row">{{product.sku}}</th>
                    <td>{{product.descripcion}}</td>
                    <td>{{product.valor}}</td>
                    <td>{{product.tienda}}</td>
                    <td>
                        <img class="card-img-top" v-bind:src="product.imagen" alt="Card image" style="width: 5em">
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduct" :product="product" v-on:click="edit(index)">
                            Editar
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



</template>


<script>
export default {
    data(){
        return {
            products : [
                {
                    sku: 1,
                    descripcion: "Producto bueno",
                    valor: 3000000,
                    tienda: "Ktronix",
                    imagen: "https://i.blogs.es/74c33b/captura-de-pantalla-2020-04-17-a-las-13.02.30/1366_2000.png",
                    nombre: "Portatil Asus"
                },
                {
                    sku: 2,
                    descripcion: "Producto bueno",
                    valor: 50000,
                    tienda: "Exito",
                    imagen: "https://static.acer.com/up/Resource/Acer/Predator/Homepage/Featured_Products/20200609/Predator-Helios-700-PH717-71-preview.png",
                    nombre: "Portatil Asus"
                }
            ],
            product: {
                sku: "",
                descripcion: "",
                valor: 0,
                tienda: "",
                imagen: "",
                nombre: ""
            },
        }
    },
    methods: {
        edit : function(index){
            this.product = this.products[index]
        }
    },
    mounted() {

        console.log('Component mounted.')
    }
}
</script>
