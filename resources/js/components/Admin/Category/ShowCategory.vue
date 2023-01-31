<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Категории</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody v-if="category">
                <tr>
                    <td>{{ category.id }}</td>
                    <td>{{ category.title }}</td>
                    <td>
                        <router-link :to="{name: 'admin.category.edit', params: {id:category.id}}"><i
                            class="fas fa-pen"></i></router-link>
                        <a @click.prevent="deleteCategory(category.id)" class="text-danger"> <i
                            class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</template>

<script>
export default {
    name: "IndexCategory",
    data() {
        return {
            category: null
        }
    },
    mounted() {
        this.showCategory()
    },
    methods: {
        showCategory() {
            axios.get(`http://127.0.0.1:8000/api/admin/category/${this.$route.params.id}`).then(res => {
                this.category = res.data.data
            })
        },
        deleteCategory(id) {
            axios.delete(`http://127.0.0.1:8000/api/admin/category/${id}`).then(res => {
                console.log(res)
                this.$router.push({name: 'admin.category.index'})
            })
        }

    }
}
</script>

<style scoped>
td i {
    margin: 5px;
    cursor: pointer;
}

</style>
