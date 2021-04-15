<template>
    <div class="d-flex justify-content-around flex-wrap ">
        <div v-for="item in catalog" class="card mt-2" style="width: 18rem;">
            <div class="card-body">
                <img :src="item.img" class="card-img-top" :alt="item.name">
                <h5 class="card-title">{{item.name}}</h5>
                <p class="card-text">{{item.desc}}</p>
               {{item.price}} руб.
            </div>

        </div>

    </div>


</template>

<script>
    export default {
        data() {
            return {
                catalog: []
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/catalog').then((res) => this.catalog = res.data)
        }
    }
</script>
