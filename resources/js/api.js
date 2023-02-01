import axios from "axios";

const api = axios.create();
api.interceptors.request.use(
    (config) => {
        if (localStorage.getItem("access_token")) {
            config.headers.authorization = `Bearer ${localStorage.getItem(
                "access_token"
            )}`;
        }
        return config;
    },
    (error) => {
        // console.log('qqqqqqqqq')
    }
);

api.interceptors.response.use(
    (config) => {
        if (localStorage.getItem("access_token")) {
            config.headers.authorization = `Bearer ${localStorage.getItem(
                "access_token"
            )}`;
        }
        return config;
    },
    (error) => {
        // console.log(error.response.data.message)
        if (error.response.data.message == "Token has expired") {
            return axios
                .post(
                    "/api/auth/refresh",
                    {},
                    {
                        headers: {
                            authorization: `Bearer ${localStorage.getItem(
                                "access_token"
                            )}`,
                        },
                    }
                )
                .then((res) => {
                    // console.log(res.data.access_token);
                    localStorage.access_token = res.data.access_token;
                    error.config.headers.authorization = `Bearer ${res.data.access_token}`;

                    return api.request(error.config);
                });
        } else if (error.response.status == 401) {
        }
    }
);

export default api;
