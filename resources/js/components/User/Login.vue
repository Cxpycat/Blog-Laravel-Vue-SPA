<template>

    <div class="main_wrapper">
        <div class="main_login_wrapper">
            <p style="color: #dc0e0e">RN365 ACCOUNT</p>
            <h2>CONTINUE WITH AN RN365 ACCOUNT</h2>
            <p>Log in with your RN365 account.</p>
            <div class="wrapper_form_login">
                <div class="wrapper_form_login_item">
                    <label for="email">Email</label> <input type="email" id="email" v-model="email"
                        placeholder="Email" />
                </div>
                <div class="wrapper_form_login_item">
                    <label for="password">Password</label>
                    <input type="password" id="password" v-model="password" placeholder="Пароль" />
                </div>
                <p style="text-decoration: underline">Forgot password?</p>
                <div class="wrapper_lokin_btn">
                    <input @click.prevent="loginUser()" class="btn_submit btn" value="LOGIN">
                </div>
            </div>
            <div class="wrapper_lokin_btn">
                <input class="btn_white btn" value="Create account">
            </div>
            <p v-if="error" class="text-danger text-center m-3">{{ error }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login", data() {
        return {
            email: null,
            password: null,
            access_token: null,
            error: null

        }
    },
    methods: {
        loginUser() {
            axios.post('/api/auth/login', {
                email: this.email,
                password: this.password,
            }).then(res => {
                localStorage.access_token = res.data.access_token;
                this.access_token = res.data.access_token;

                // console.log(res.data.access_token);
                this.$router.push({ name: 'main' })
            }).catch(err => {
                this.error = err.response.data.error;
                //console.log(err.response.data.error)
            })
        }
    }
}
</script>

<style scoped>

</style>
