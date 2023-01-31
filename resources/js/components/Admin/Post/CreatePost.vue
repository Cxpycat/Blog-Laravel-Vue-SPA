<template>
    <div class="w-50">
        <div class="p-3">
            <label for="title">Название статьи</label>
            <input type="text" id="title" class="form-control" placeholder="Название статьи" v-model="title">
        </div>
        <div class="p-3">
            <label for="title">Контент</label>
            <vue-editor v-model="content" useCustomImageHandler @image-added="contentImageAdded"></vue-editor>
        </div>

        <div class="p-3">
            <label>Категория</label>
            <select class="custom-select" name="category_id">
                <option selected="true" disabled="disabled">Категории</option>
                <template v-for="category in categories">
                    <option :v-model="category_id = category.id">
                        {{ category.title }}
                    </option>
                </template>
            </select>
        </div>

        <div class="w-75">
            <div ref="dropzone" class="btn d-block p-5 bg-gray text-center text-light m-3">Загрузить</div>
        </div>
        <input type="submit" class="btn btn-primary m-3" value="Добавить" @click.prevent="storePost()">
    </div>
</template>

<script>
import {Dropzone} from "dropzone";
import {VueEditor} from "vue3-editor";

export default {
    components: {VueEditor},
    name: "CreatePost", data() {
        return {
            title: null,
            content: null,
            dropzone: null,
            categories: null,
            category_id: null
        }
    },
    mounted() {
        this.indexCategory()
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: 'http://127.0.0.1:8000/api/admin/post',
            autoProcessQueue: false,
            maxFiles: 2
        })
    },
    methods: {
        storePost() {
            const data = new FormData()
            data.append('title', this.title);
            data.append('content', this.content);
            data.append('category_id', this.category_id);
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('image[]', file);
                this.dropzone.removeFile(file)
            })
            this.title = ''
            this.content = ''
            axios.post('http://127.0.0.1:8000/api/admin/post', data).then(res => {
                this.$router.push({name: 'admin.post.index'});
            }).catch(err => {
                console.log(err)
            })

        },
        indexCategory() {
            axios.get('http://127.0.0.1:8000/api/admin/category').then(res => {
                this.categories = res.data
            }).catch(err => {
                alert('Ошибка')
                console.log(err)
            })
        },
        contentImageAdded(file, Editor, cursorLocation, resetUploader) {
            console.log(file)
            const formData = new FormData();
            formData.append("image", file);
            console.log(formData)
            axios.post('http://127.0.0.1:8000/api/image', formData)
                .then(result => {
                    const url = result.data.url;
                    Editor.insertEmbed(cursorLocation, "image", url);
                    resetUploader();
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
}
</script>

<style>

</style>
