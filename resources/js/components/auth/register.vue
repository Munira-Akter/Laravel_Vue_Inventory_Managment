<template>
    <div id="register">
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
                                            <h2 class="mb-2">Sign Up</h2>
                                            <p>Create your POSDash account.</p>
                                            <form @submit.prevent="register">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="floating-label form-group"
                                                        >
                                                            <input
                                                                class="floating-input form-control"
                                                                type="text"
                                                                placeholder=" "
                                                                v-model="
                                                                    form.name
                                                                "
                                                            />

                                                            <span
                                                                v-if="
                                                                    errors.name
                                                                "
                                                                class="text-danger"
                                                                style="font-size:10px;"
                                                                >{{
                                                                    errors
                                                                        .name[0]
                                                                }}</span
                                                            >

                                                            <label
                                                                >Full
                                                                Name</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="floating-label form-group"
                                                        >
                                                            <input
                                                                class="floating-input form-control"
                                                                type="text"
                                                                placeholder=" "
                                                                v-model="
                                                                    form.last
                                                                "
                                                            />

                                                            <span
                                                                v-if="
                                                                    errors.last
                                                                "
                                                                class="text-danger"
                                                                style="font-size:10px;"
                                                                >{{
                                                                    errors
                                                                        .last[0]
                                                                }}</span
                                                            >
                                                            <label
                                                                >Last
                                                                Name</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
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

                                                            <span
                                                                v-if="
                                                                    errors.email
                                                                "
                                                                class="text-danger"
                                                                style="font-size:10px;"
                                                                >{{
                                                                    errors
                                                                        .email[0]
                                                                }}</span
                                                            >
                                                            <label>Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="floating-label form-group"
                                                        >
                                                            <input
                                                                class="floating-input form-control"
                                                                type="text"
                                                                placeholder=" "
                                                                v-model="
                                                                    form.phone
                                                                "
                                                            />
                                                            <span
                                                                v-if="
                                                                    errors.phone
                                                                "
                                                                class="text-danger"
                                                                style="font-size:10px;"
                                                                >{{
                                                                    errors
                                                                        .phone[0]
                                                                }}</span
                                                            >
                                                            <label
                                                                >Phone
                                                                No.</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
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
                                                                style="font-size:10px;"
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
                                                            class="floating-label form-group"
                                                        >
                                                            <input
                                                                class="floating-input form-control"
                                                                type="password"
                                                                placeholder=" "
                                                                v-model="
                                                                    form.password_confirmation
                                                                "
                                                            />
                                                            <span
                                                                v-if="
                                                                    errors.password_confirmation
                                                                "
                                                                class="text-danger"
                                                                >{{
                                                                    errors
                                                                        .password_confirmation[0]
                                                                }}</span
                                                            >
                                                            <label
                                                                >Confirm
                                                                Password</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div
                                                            class="custom-control custom-checkbox mb-3"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                class="custom-control-input"
                                                                id="customCheck1"
                                                                v-model="
                                                                    form.check
                                                                "
                                                            />

                                                            <label
                                                                class="custom-control-label"
                                                                for="customCheck1"
                                                                >I agree with
                                                                the terms of
                                                                use</label
                                                            >
                                                            <br />

                                                            <span
                                                                v-if="
                                                                    errors.check
                                                                "
                                                                class="text-danger"
                                                                style="font-size:10px;"
                                                                >{{
                                                                    errors
                                                                        .check[0]
                                                                }}</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Sign Up
                                                </button>
                                                <p class="mt-3">
                                                    Already have an Account
                                                    <router-link
                                                        to="/"
                                                        class="text-primary"
                                                        >Sign In
                                                    </router-link>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img
                                            src=""
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
                name: null,
                last: null,
                email: null,
                phone: null,
                password_confirmation: null,
                password: null,
                check: null
            },

            errors: {}
        };
    },

    methods: {
        register() {
            axios
                .post("/api/auth/register", this.form)
                .then(response => {
                    User.afterLogin(response);
                    Toast.fire({
                        icon: "success",
                        title: "Signed Up successfully"
                    });

                    this.$router.push({ name: "/" });
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                })

                .catch(
                    Toast.fire({
                        icon: "warning",
                        title: "something goes wrong!"
                    })
                );
        }
    }
};
</script>

<style lang="scss" scoped></style>
