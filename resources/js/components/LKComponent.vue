<template>

    <div class="d-flex justify-content-between flex-wrap ">
        <ul class="list-group">
            <li class="list-group-item">Имя: {{users.name}}</li>
            <li class="list-group-item">email: {{users.email}}</li>
            <li class="list-group-item">Дата регистрации: {{users.created_at}}</li>
        </ul>
    </div>


</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            users: []
        }
    },
    mounted() {
        console.log('Component mounted.')
        axios.get(`api/user/${this.id}`).then((res) => this.users = res.data)
    }
}
</script>
