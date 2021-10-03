<template>
    <div id="login">
        <div class="row justify-content-center" style="padding-top:200px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Login Form</h4>
                        <h6 class="card-subtitle"></h6>
                        <form class="form pt-3" @submit.prevent="login">
                            <div class="form-group">
                                <label for="exampleInputEmail1"
                                    >Email address</label
                                >
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span
                                            class="input-group-text"
                                            id="basic-addon1"
                                        >
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        placeholder="Enter email"
                                        v-model="form.email"
                                    />
                                </div>
                                <br />
                                <p
                                    v-if="errors.email"
                                    class="text-danger font-weight-bold"
                                >
                                    {{ errors.email[0] }}
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span
                                            class="input-group-text"
                                            id="basic-addon1"
                                        >
                                            <i class="ti-lock"></i>
                                        </span>
                                    </div>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="pwd1"
                                        placeholder="Enter Password"
                                        v-model="form.password"
                                    />
                                </div>
                                <br />
                                <span
                                    v-if="errors.password"
                                    class="text-danger font-weight-bold"
                                    >{{ errors.password[0] }}</span
                                >
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox" />
                                    <label for="checkbox1">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-success waves-effect waves-light mr-2"
                            >
                                Login
                            </button>
                            <button
                                type="reset"
                                class="btn btn-inverse waves-effect waves-light"
                            >
                                Reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
                    console.log(error);
                });

            // .catch(
            //     Toast.fire({
            //         icon: "warning",
            //         title: "Invalid Email or Password"
            //     })
            // );
        }
    }
};
</script>

<style lang="scss" scoped></style>
