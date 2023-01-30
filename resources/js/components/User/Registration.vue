<template>

    <div class="main_wrapper">
        <div class="main_login_wrapper">
            <p style="color: #dc0e0e">RN365 ACCOUNT</p>
            <h2>REGISTER WITH EMAIL ADDRESS</h2>
            <p>Create an RN365 account.</p>
            <div class="wrapper_form_login">
                <div class="wrapper_form_login_item">
                    <label for="name">Name *</label> <input type="text" id="name" v-model="name" placeholder="Имя"/>
                </div>

                <div class="wrapper_form_login_item">
                    <label for="email">Email *</label> <input type="email" id="email" v-model="email"
                                                              placeholder="Email"/>
                </div>
                <div class="wrapper_form_login_item">
                    <label for="password">Password *</label>
                    <input type="password" id="password" v-model="password" placeholder="Пароль"/>
                </div>
                <div class="wrapper_form_login_item">
                    <label for="password_confirmation">Confirm password *</label>
                    <input type="password" id="password_confirmation" v-model="password_confirmation"
                           placeholder="Подтвердить пароль"/>
                </div>
            </div>
            <div class="wrapper_lokin_btn">
                <input @click.prevent="storeUser()" class="btn_submit btn" value="Create account">
            </div>
            <p v-if="error" class="text-danger text-center m-3">{{error}}</p>
        </div>
    </div>


</template>

<script>
    export default {
        name: "Registration",
        data() {
            return {
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
                error: null
            }
        },
        methods: {
            storeUser() {
                axios.post('/api/users/users', {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }).then(res => {
                    localStorage.access_token = res.data.access_token;
                    this.$router.push({name: 'user.personal'})
                    console.log(res)
                }).catch(err => {
                    this.error = err.response.data.message;
                    console.log(this.error)
                })
            }
        }
    }
</script>

<style scoped>

</style>
