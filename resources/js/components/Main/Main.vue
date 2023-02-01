<template>
    <div class="main_wrapper  ">

        <div class="main_index_wrapper  ">

            <div class="wrapper_list_news">


                <template v-if="posts">

                    <div class="news_item" v-for="post in posts">


                        <img :src="post.image">
                        <div class="news_item_index_text  ">
                            <p style="color: #dc0e0e"><i>{{ post.category_name.title }}</i></p>
                            <router-link :to="{ name: 'post.show', params: { id: post.id } }">
                                <h1>{{ post.title }}</h1>
                            </router-link>
                            <div class="news_item_index_date_com  ">
                                <p>
                                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
                                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M12 8V13" stroke="#ffffff" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9 2H15" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                    {{ post.created_at }}
                                </p>
                                <p>
                                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z"
                                                stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.9965 11H16.0054" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11.9955 11H12.0045" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.99451 11H8.00349" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                    Yesterday, 16:11
                                </p>
                            </div>
                        </div>

                    </div>

                </template>

            </div>


            <div class="button_wrapper_index">
                <a href="#" class="btn">MORE NEWS ></a>
            </div>

        </div>

        <div class="side_bar_index_wrapper  ">

            <div class="panel_side">
                <div class="wrapper_title_panel">
                    <h3>F1 STANDINGS 2023</h3>
                </div>

                <div class="panel__tabs">
                    <h4>DRIVERS </h4>
                    <h4> TEAMS </h4>

                </div>

                <div class="table">

                    <div class="table_header" style="padding: 0 10px;">

                        <div class="header_one">
                            <p>Pos.</p>
                            <p>Driver</p>
                        </div>

                        <div class="header_two">
                            <p>Points</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>

                        </div>

                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>
                        </div>

                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>

                        </div>

                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>

                        </div>

                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>

                        </div>

                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                    <div class="table_header pilot_side_table">

                        <div class="header_one" style="border-left-color: #1e5bc6">
                            <p style="text-align: center;">1</p>

                            <div class="table_pilot">
                                <img src="https://cdn.racingnews365.com/Riders/Verstappen/_51x51_crop_center-center_none/f1_2022_mv_red_sm.png?v=1647864773"
                                    alt="Max Verstappen" loading="lazy" class="table__data__driver_image">
                                <div class="table_name_pilot">
                                    <p><img src="https://racingnews365.com/images/flags/nld.png" alt="nld" width="14"
                                            loading="lazy" class="flag-image ">Max Verstappen</p>
                                    <p style=" text-align: left;">
                                        Red Bull</p>
                                </div>
                            </div>

                        </div>
                        <div class="header_two">
                            <p>0</p>
                        </div>

                    </div>

                </div>

                <div class="button_wrapper_index button_wrapper_slide">
                    <a href="" class="btn">Full standings</a>
                </div>

            </div>


            <div class="panel_side">
                <div class="wrapper_title_panel">
                    <h3>F1 CALENDAR 2023</h3>
                </div>


                <div class="table">

                    <div class="table_header" style="padding: 0 15px;">

                        <div class="header_one">
                            <p>Race</p>
                        </div>

                        <div class="header_two">
                            <p>Date</p>
                        </div>

                    </div>


                    <div class="table_header race_side_table">

                        <div class="header_one">
                            <div class="table_race">
                                <div class="wrapper_race_flag">
                                    <img src="https://racingnews365.com/images/flags/bhr.png" alt="nld" width="20"
                                        height="12">
                                    <div class="table_race_name">
                                        <p style="text-align: left;">Bahrain</p>
                                        <p style="color: #acacac; font-size: 12px;">Bahrain International Circuit</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header_two">
                            <p>7 May</p>
                        </div>

                    </div>
                    <div class="table_header race_side_table">

                        <div class="header_one">
                            <div class="table_race">
                                <div class="wrapper_race_flag">
                                    <img src="https://racingnews365.com/images/flags/bhr.png" alt="nld" width="20"
                                        height="12">
                                    <div class="table_race_name">
                                        <p style="text-align: left;">Bahrain</p>
                                        <p style="color: #acacac; font-size: 12px;">Bahrain International Circuit</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header_two">
                            <p>7 May</p>
                        </div>

                    </div>
                    <div class="table_header race_side_table">

                        <div class="header_one">
                            <div class="table_race">
                                <div class="wrapper_race_flag">
                                    <img src="https://racingnews365.com/images/flags/bhr.png" alt="nld" width="20"
                                        height="12">
                                    <div class="table_race_name">
                                        <p style="text-align: left;">Bahrain</p>
                                        <p style="color: #acacac; font-size: 12px;">Bahrain International Circuit</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header_two">
                            <p>7 May</p>
                        </div>

                    </div>


                </div>

                <div class="button_wrapper_index button_wrapper_slide">
                    <a href="" class="btn">Full standings</a>
                </div>

            </div>

        </div>

    </div>
</template>
<script>

export default {
    name: "FooterComponent",
    data() {
        return {
            access_token: null,
            posts: null
        }
    },
    mounted() {
        this.getAccessToken()
        this.indexPost()
    },
    updated() {

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
        getAccessToken() {
            this.access_token = localStorage.getItem('access_token')
        },
        logout() {
            axios.post('/api/auth/logout').then(res => {
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
