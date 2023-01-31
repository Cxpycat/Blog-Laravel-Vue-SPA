<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Создание категории</h4>
            <form class="forms-sample">
                <div class="form-group">
                    <input v-model="title" type="text" class="form-control" placeholder="Название">
                </div>
                <a class="btn btn-primary me-2" @click.prevent="storeCategory()">Создать</a>
            </form>
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
    methods: {
        storeCategory() {
            axios.post('http://127.0.0.1:8000/api/admin/category', {
                title: this.title
            }).then(res => {
                this.title = null
                this.$router.push({name: 'admin.category.index'})
            }).catch(err => {
                alert('Ошибка')
                console.log(err)
            })

        }
    }
}
</script>

<style scoped>

</style>
