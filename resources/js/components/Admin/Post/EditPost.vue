<template>
    <div class="w-50">
        <div class="w-50">
            <div ref="dropzone" class="btn d-block p-5 bg-gray text-center text-light m-3">Загрузить</div>
        </div>
        <div class="p-3">
            <label for="title">Превью</label>
            <div><img :src="image" style="width: 200px"></div>
        </div>

        <div class="p-3">
            <label for="title">Название статьи</label>
            <input type="text" id="title" class="form-control" placeholder="Название статьи"
                   v-model="title">
        </div>
        <div class="p-3">
            <label for="title">Контент</label>
            <vue-editor v-model="content" useCustomImageHandler @image-added="contentImageAdded"
                        @image-removed="contentImageRemove"></vue-editor>
        </div>


        <div class="p-3">
            <label for="title">Категория</label>
            <input type="text" id="title" class="form-control" placeholder="Контент" v-model="category_id">
        </div>
    </div>


    <input type="submit" class="btn btn-primary m-3" value="Изменить" @click.prevent="UpdatePost()">
</template>

<script>
import {Dropzone} from "dropzone";
import {VueEditor} from "vue3-editor";


export default {
    name: "CreateCategory", data() {
        return {
            image: null,
            title: null,
            content: null,
            category_id: null,
            dropzone: null,
            imagesIdForDelete: [],
            imagesUrlForDelete: []
        }
    },
    components: {VueEditor},
    mounted() {
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: `http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`,
            autoProcessQueue: false,
            addRemoveLinks: true
        })

        this.dropzone.on('removedfile', (file) => {
            console.log(file)
            this.imagesIdForDelete.push(file.name)
        })

        this.showCategory()
    },
    methods: {
        showCategory() {
            axios.get(`http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`).then(res => {
                this.image = res.data.data.image
                this.title = res.data.data.title
                this.content = res.data.data.content
                this.category_id = res.data.data.category_id
                console.log(res.data.data)

                let mockFile = {id: res.data.data.id, name: this.image, size: res.data.data.size};
                this.dropzone.displayExistingFile(mockFile, this.image);

            })
        },
        UpdatePost() {


            const data = new FormData()
            data.append('title', this.title);
            data.append('content', this.content);
            data.append('category_id', this.category_id);
            this.imagesIdForDelete.forEach(imageIdForDelete => {
                data.append('imageIdForDelete[]', imageIdForDelete.replace('http://127.0.0.1:8000/storage/', ''))
            })
            data.append('_method', "PATCH");
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('image[]', file);
                this.dropzone.removeFile(file)
            })
            this.title = ''
            this.content = ''
            axios.post(`http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`, data).then(res => {
                this.$router.push({name: 'admin.post.index'});
            }).catch(err => {
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
        },
        contentImageRemove(url) {
            this.imagesUrlForDelete.push(url);
        }
    }
}
</script>

<style>
img {
    max-width: 200px;
}

.dz-success-mark, .dz-error-mark, .dz-filename, .dz-size {
    display: none;
}
</style>
