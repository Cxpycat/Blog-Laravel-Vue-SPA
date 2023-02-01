<template>
    <div class="main_wrapper">
        <div class="wrapper_profile_main">
            <div class="sidebar_left">
                <div class="wrapper_sidebar_border">
                    <h2>MY PROFILE</h2>
                    <div class="sidebar_options">
                        <p class="option_selected">Preferences</p>

                    </div>
                    <a class="option_logout" @click.prevent="logout()">Logout</a>
                </div>
            </div>
        </div>

        <div class="sidebar_right">
            <h2><i>PREFERENCES</i></h2>
            <div class="wrapper_img_profile">
                <div class="wrapper_dropzone">
                    <h3>Аватар</h3>
                    <div ref="dropzone" class="dropzone">Загрузить</div>
                </div>
                <div class="sidebar_right_main">
                    <div class="wrapper_form_login_item">
                        <label for="email">Email</label> <input type="email" id="email" v-model="email" />
                    </div>

                    <div class="wrapper_form_login_item">
                        <label for="name">Имя</label> <input type="text" id="name" v-model="name" />
                    </div>

                    <div class="wrapper_form_login_item">
                        <label for="password">Пароль</label>
                        <input type="password" id="password" v-model="password" />
                    </div>

                    <div class="wrapper_form_login_item">
                        <label for="password_confirmation">Повторите пароль</label>
                        <input type="password" id="password_confirmation" v-model="password_confirmation" />
                    </div>
                </div>
            </div>

            <div class="wrapper_lokin_btn">
                <input class="btn_submit btn" id="btn_submit" value="Change profile" @click.prevent="UpdateUser()" />
            </div>
        </div>
    </div>
</template>

<script>
import api from '../../api';
import { Dropzone } from "dropzone";

export default {
    name: "Personal",
    data() {
        return {
            dropzone: null,
            imagesIdForDelete: [],
            imagesUrlForDelete: [],
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
            avatar: null,
            id: null
        }
    },
    mounted() {

        this.getUser()
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: `http://127.0.0.1:8000/api/users/user/${this.id}`,
            autoProcessQueue: false,
            addRemoveLinks: true
        })
        this.dropzone.on('removedfile', (file) => {
            console.log(file)
            this.imagesIdForDelete.push(file.name)
        })
    },
    methods: {
        getUser() {
            api.post('http://127.0.0.1:8000/api/auth/me').then(res => {
                this.name = res.data.name
                this.email = res.data.email
                this.avatar = res.data.avatar
                this.id = res.data.id

                let mockFile = { id: res.data.id, name: this.avatar, size: res.data.size };
                this.dropzone.displayExistingFile(mockFile, this.avatar);

                console.log(res.data)
            })
        },

        UpdateUser() {
            const data = new FormData()
            data.append('name', this.name);
            data.append('email', this.email);
            data.append('_method', "PATCH");
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('avatar[]', file);
            })
            api.post(`http://127.0.0.1:8000/api/users/user/${this.id}`, data).then(res => {
                let btn = document.querySelector('#btn_submit');
                btn.value = 'Done';
            })
        },
        logout() {
            api.post('/api/auth/logout').then(res => {
                localStorage.removeItem('access_token')
                this.$router.push({ name: 'user.login' })
            })
        }

    },
}
</script>

<style>
.wrapper_form_login_item {
    margin: 15px 0;
}

.wrapper_form_login_item label {
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 20vw;
    margin: 0;
}

.main_wrapper {
    margin: 0 16vw;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: flex-start;
}

.dz-button {
    opacity: 0;
    display: none;
}

.dz-success-mark,
.dz-error-mark,
.dz-filename,
.dz-size {
    display: none;
}

.dz-preview,
.dz-image-preview {
    text-align: center;
}
</style>
