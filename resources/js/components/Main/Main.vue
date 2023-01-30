<template>
   MAIN PAGE
</template>
<script>
    import api from '../../api.js'
    export default {
        name: "FooterComponent",
        data() {
            return {
                access_token: null
            }
        },
        mounted() {
            this.getAccessToken()
        },
        updated() {

            console.log('updated()');

        },

        methods: {
            getAccessToken() {
                this.access_token = localStorage.getItem('access_token')
            },
            logout() {
                api.post('/api/auth/logout').then(res => {
                    localStorage.removeItem('access_token')
                    window.location.href = '/login';
                })
            }

        },
    }
</script>

<style>
    .wrapper_inner a {
        margin: 0 5px;
    }
</style>
