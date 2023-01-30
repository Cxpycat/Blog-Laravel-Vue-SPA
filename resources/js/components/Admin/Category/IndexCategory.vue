<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Категории</h4>

            <table class="table table-dark">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody v-if="categories">
                <tr v-for="category in categories">
                    <td>{{category.id}}</td>
                    <td>{{category.title}}</td>
                    <td>
                        <router-link :to="{name: 'admin.category.show', params: {id:category.id}}"><i
                            class="mdi mdi-eye"></i></router-link>
                        <router-link :to="{name: 'admin.category.edit', params: {id:category.id}}"><i
                            class="mdi mdi-table-edit"></i></router-link>


                        <a @click.prevent="deleteCategory(category.id)"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div>
        <a href="/admin/category/create" type="button" class="btn btn-primary btn-fw m-5">Добавить</a>
    </div>
</template>

<script>
    export default {
        name: "IndexCategory",
        data() {
            return {
                categories: null
            }
        },
        mounted() {
            this.indexCategory()
        },
        methods: {
            indexCategory() {
                axios.get('http://127.0.0.1:8000/api/admin/category').then(res => {
                    this.categories = res.data
                    console.log(res.data)
                }).catch(err => {
                    alert('Ошибка')
                    console.log(err)
                })
            },
            deleteCategory(id) {
                axios.delete(`http://127.0.0.1:8000/api/admin/category/${id}`).then(res => {
                    console.log(res)
                    this.indexCategory()
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
