<template>
    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar {{ product.nombre }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="justify-content-center">
                        <div class="card" style="width: 30em">
                            <img class="card-img-top" v-bind:src="product.imagen" alt="Card image" style="width: 100%">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-4">
                                        Nombre de producto:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" v-bind:value="product.nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Descripción:
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control">{{ product.descripcion }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Valor:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" v-bind:value="product.valor">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Tienda:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" v-bind:value="product.tienda">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        Cargar imagen:
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["product"],
    data() {
        return {
            data : {
                sku : this.product.sku,
                nombre: this.product.nombre,
                descripcion: this.product.descripcion,
                valor: this.product.valor,
                tienda: this.product.tienda,
                imagen : this.product.imagen
            }
        }
    },
    mounted() {
        console.log(this.data)
    },
    name: "edit"
}
</script>

<style scoped>

</style>
