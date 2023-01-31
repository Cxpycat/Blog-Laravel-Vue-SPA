<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">Обновление категории</h4>
            <div class="form-group">
                <input v-model="title" type="text" class="form-control" placeholder="Название">
            </div>
            <a class="btn btn-primary me-2" @click.prevent="updateCategory()">Обновить</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateCategory", data() {
        return {
            title: null
        }
    },
    mounted() {
        this.getCategory()
    },
    methods: {
        getCategory() {
            axios.get(`http://127.0.0.1:8000/api/admin/category/${this.$route.params.id}`)
                .then(res => {
                    this.title = res.data.data.title
                })

        },
        updateCategory() {
            axios.patch(`http://127.0.0.1:8000/api/admin/category/${this.$route.params.id}`, {
                title: this.title
            }).then(res => {
                this.$router.push({name: 'admin.category.index'})
            })
        }
    }
}
</script>

<style scoped>

</style>
