<template>
    <div class="wrapper_title_post">
        <p style="color: #dc0e0e;">{{ category_id }}</p>
        <h1>{{ title }}</h1>
        <div class="hot_new_date_com">
            <p>
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 8V13" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M9 2H15" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                {{ created_at }}
            </p>
            <p>
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M8.5 19H8C4 19 2 18 2 13V8C2 4 4 2 8 2H16C20 2 22 4 22 8V13C22 17 20 19 16 19H15.5C15.19 19 14.89 19.15 14.7 19.4L13.2 21.4C12.54 22.28 11.46 22.28 10.8 21.4L9.3 19.4C9.14 19.18 8.77 19 8.5 19Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M15.9965 11H16.0054" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M11.9955 11H12.0045" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M7.99451 11H8.00349" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </g>
                </svg>
                0 comments
            </p>
        </div>
    </div>
    <div class="show_wrapper main_wrapper  ">

        <div class="main_show_wrapper">


            <div class="wrapper_content_post">
                <div class="main_img_content">
                    <img :src="image">
                </div>
                <div class="wrapper_content_text" v-html="content">


                </div>
            </div>

        </div>


        <div class="side_bar_index_wrapper  ">

            <div class="panel_side">
                <div class="wrapper_title_panel">
                    <h2>F1 STANDINGS 2023</h2>
                </div>

                <div class="panel__tabs">
                    <h3>DRIVERS </h3>
                    <h3> TEAMS </h3>

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
                    <h2>F1 CALENDAR 2023</h2>
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
    name: "ShowPost",
    data() {
        return {
            image: null,
            title: null,
            content: null,
            category_id: null,
            created_at: null
        }
    },
    mounted() {
        this.showPost()
        console.log(this.$route.params.id);
    },
    methods: {
        showPost() {
            axios.get(`http://127.0.0.1:8000/api/admin/post/${this.$route.params.id}`)
                .then(res => {
                    this.title = res.data.data.title,
                        this.content = res.data.data.content,
                        this.category_id = res.data.data.category_id,
                        this.image = res.data.data.image,
                        this.created_at = res.data.data.created_at,

                        console.log(res.data.data)
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
