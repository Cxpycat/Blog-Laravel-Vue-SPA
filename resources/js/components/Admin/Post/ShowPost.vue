<template>
    <div class="w-50">
        <div class="p-3">
            <label for="title">Превью</label>
            <div><img :src="image" style="width: 200px"></div>
        </div>

        <div class="p-3">
            <label for="title">Название статьи</label>
            <input type="text" id="title" class="form-control" placeholder="Название статьи"
                   v-model="title" disabled>
        </div>
        <div class="p-3">
            <label for="title">Контент</label>
            <input type="text" id="title" class="form-control" placeholder="Контент" v-model="content" disabled>
        </div>
        <div class="p-3">
            <label for="title">Категория</label>
            <input type="text" id="title" class="form-control" placeholder="Контент" v-model="category_id"
                   disabled>
        </div>
    </div>

    <input type="submit" class="btn btn-primary m-3" value="Изменить" @click.prevent="UpdatePost()">
    <input type="submit" class="btn btn-danger m-3" value="Удалить" @click.prevent="DeletePost()">

</template>

<script>
import {Dropzone} from "dropzone";

export default {
    name: "IndexCategory",
    data() {
        return {
            image: null,
            title: null,
            content: null,
            category_id: null,
        }
    },
    mounted() {
        this.showCategory()
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: `http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`,
            autoProcessQueue: false,
            maxFiles: 1
        })
    },
    methods: {
        showCategory() {
            axios.get(`http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`).then(res => {
                console.log(res.data.data)
                this.image = res.data.data.image
                this.title = res.data.data.title
                this.content = res.data.data.content
                this.category_id = res.data.data.category_id
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
