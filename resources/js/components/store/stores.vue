<template>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">FECHA APERTURA</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="store in stores" :key="store.id">
                    <th scope="row">{{store.id}}</th>
                    <td>{{store.nombre}}</td>
                    <td>{{store.fechaApertura}}</td>
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
            stores : [
                {
                    id: 1,
                    nombre: "Alkosto",
                    fechaApertura: "2020/05/12"
                }
            ]
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
