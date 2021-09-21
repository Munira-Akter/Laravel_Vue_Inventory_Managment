<template>
    <div id="login">
        <div class="wrapper">
            <section class="login-content">
                <div class="container">
                    <div
                        class="row align-items-center justify-content-center height-self-center"
                    >
                        <div class="col-lg-8">
                            <div class="card auth-card">
                                <div class="card-body p-0">
                                    <div
                                        class="d-flex align-items-center auth-content"
                                    >
                                        <div class="col-lg-7 align-self-center">
                                            <div class="p-3">
                                                <h2 class="mb-2">Sign In</h2>
                                                <p>Login to stay connected.</p>
                                                <form @submit.prevent="login">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="floating-label form-group"
                                                            >
                                                                <input
                                                                    class="floating-input form-control"
                                                                    type="email"
                                                                    placeholder=" "
                                                                    v-model="
                                                                        form.email
                                                                    "
                                                                />

                                                                <label
                                                                    >Email</label
                                                                >

                                                                <span
                                                                    v-if="
                                                                        errors.email
                                                                    "
                                                                    class="text-danger"
                                                                    >{{
                                                                        errors
                                                                            .email[0]
                                                                    }}</span
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="floating-label form-group"
                                                            >
                                                                <input
                                                                    class="floating-input form-control"
                                                                    type="password"
                                                                    placeholder=" "
                                                                    v-model="
                                                                        form.password
                                                                    "
                                                                />
                                                                <span
                                                                    v-if="
                                                                        errors.password
                                                                    "
                                                                    class="text-danger"
                                                                    >{{
                                                                        errors
                                                                            .password[0]
                                                                    }}</span
                                                                >
                                                                <label
                                                                    >Password</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="custom-control custom-checkbox mb-3"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="customCheck1"
                                                                />
                                                                <label
                                                                    class="custom-control-label control-label-1"
                                                                    for="customCheck1"
                                                                    >Remember
                                                                    Me</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <router-link
                                                                to="/forget-password"
                                                                class="text-primary float-right"
                                                                >Forgot
                                                                Password?</router-link
                                                            >
                                                        </div>
                                                    </div>
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                    >
                                                        Sign In
                                                    </button>
                                                    <p class="mt-3">
                                                        Create an Account
                                                        <router-link
                                                            to="/register"
                                                            class="text-primary"
                                                            >Sign
                                                            Up</router-link
                                                        >
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 content-right">
                                            <img
                                                :src="
                                                    'assets/images/login/01.png'
                                                "
                                                class="img-fluid image-right"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        if (User.loggedIn()) {
            this.$router.push({ name: "/" });
        }
    },
    data() {
        return {
            form: {
                email: null,
                password: null
            },

            errors: {}
        };
    },

    methods: {
        login() {
            axios
                .post("/api/auth/login", this.form)
                .then(response => {
                    User.afterLogin(response);
                    Toast.fire({
                        icon: "success",
                        title: "Signed in successfully"
                    });

                    Notification.success("ki");

                    this.$router.push({ name: "/" });
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                })

                .catch(
                    Toast.fire({
                        icon: "warning",
                        title: "Invalid Email or Password"
                    })
                );
        }
    }
};
</script>

<style lang="scss" scoped></style>
