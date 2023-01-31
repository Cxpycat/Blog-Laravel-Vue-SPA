<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Посты</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Превью</th>
                    <th>Название</th>
                    <th>Контент</th>
                    <th>Категория</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody v-if="posts">
                <tr v-for="post in posts">
                    <td>{{ post.id }}</td>
                    <td><img :src=" post.image" style="width: 100px"></td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.content }}</td>
                    <td>{{ post.category_id }}</td>
                    <td>
                        <router-link :to="{name: 'admin.post.edit', params: {id:post.id}}"><i
                            class="fas fa-pen"></i></router-link>
                        <a @click.prevent="deletePost(post.id)" class="text-danger"> <i
                            class="fas fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>


            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div>
        <router-link :to="{name: 'admin.post.create'}" class="btn btn-primary btn-fw m-5">Добавить</router-link>
    </div>
</template>

<script>
export default {
    name: "IndexPost",
    data() {
        return {
            categories: null,
            posts: null,
            nameCategoryFull: null

        }
    },
    mounted() {
        this.indexCategory()
        this.indexPost()
    },
    methods: {
        indexPost() {
            axios.get('http://127.0.0.1:8000/api/admin/post').then(res => {
                this.posts = res.data
                console.log(res.data)
            }).catch(err => {
                alert('Ошибка')
                console.log(err)
            })
        },
        indexCategory() {
            axios.get('http://127.0.0.1:8000/api/admin/category').then(res => {
                this.categories = res.data
                console.log(res.data)
            }).catch(err => {
                alert('Ошибка')
                console.log(err)
            })
        },
        deletePost(id) {
            axios.delete(`http://127.0.0.1:8000/api/admin/post/${id}`).then(res => {
                this.indexCategory()
                this.indexPost()
            })
        },


    },
    computed: {
        nameCategory(id) {
            this.categories.forEach(category => {
                if (category.id === id) {
                    return category.title
                }

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
