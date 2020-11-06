<template>
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <Form action="" v-on:submit="saveProduct">
                        <div class="justify-content-center">
                            <div class="card" style="width: 30em">
                                <img class="card-img-top" alt="Card imagen" v-bind:src="product.imagen" style="width: 100%" v-if="product.imagen" name="imagen">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Nombre de producto:
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nombre">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            Descripción:
                                        </div>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="descripcion"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            Valor:
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="valor">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            Tienda:
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="tienda">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Cargar imagenn:
                                        </div>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" v-on:change="uploadimagen">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </Form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            product: {
                imagen : ""
            }
        }
    },
    methods: {
        uploadimagen(e){
            console.log(e)
            let file = e.target.files[0];
            let reader = new FileReader();
            // this.product.imagen = e.target.files[0];

            if(file['size'] < 2111775)
            {
                reader.onloadend = (file) => {
                    console.log('RESULT', reader.result)
                    this.product.imagen = reader.result;
                }
                reader.readAsDataURL(file);
            }else{
                alert('File size can not be bigger than 2 MB')
            }
        },
        saveProduct(data){

        }
    },
    name: "add"
}
</script>

<style scoped>

</style>
