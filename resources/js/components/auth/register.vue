<template>
    <div id="register">
        <div class="container-fluid">
            <div
                class="row justify-content-center align-content-center"
                style="padding-top:150px;"
            >
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Register Form</h4>
                            <h6 class="card-subtitle"></h6>
                            <form class="form pt-3" @submit.prevent="register">
                                <div class="form-group">
                                    <label for="exampleInputEmail2"
                                        >UserName</label
                                    >
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text"
                                                id="basic-addon1"
                                            >
                                                <i class="ti-user"></i>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail2"
                                            placeholder="Enter User Name"
                                            v-model="form.name"
                                        />
                                        <br />
                                    </div>
                                    <h6 v-if="errors.name" class="text-danger">
                                        {{ errors.name[0] }}
                                    </h6>
                                </div>

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
                                        <br />
                                    </div>
                                    <h6 v-if="errors.email" class="text-danger">
                                        {{ errors.email[0] }}
                                    </h6>
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
                                        <br />
                                    </div>
                                    <h6
                                        v-if="errors.password"
                                        class="text-danger"
                                    >
                                        {{ errors.password[0] }}
                                    </h6>
                                </div>

                                <div class="form-group">
                                    <label for="pwd1">Confirm Password</label>
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
                                            v-model="form.password_confirmation"
                                        />
                                    </div>
                                </div>
                                <span
                                    v-if="errors.password_confirmation"
                                    class="text-danger"
                                    >{{ errors.password_confirmation[0] }}</span
                                >

                                <div class="form-group">
                                    <div class="checkbox checkbox-success">
                                        <input
                                            id="checkbox1"
                                            type="checkbox"
                                            v-model="form.check"
                                        />
                                        <label for="checkbox1">
                                            Remember me </label
                                        ><br />
                                        <span
                                            v-if="errors.check"
                                            class="text-danger"
                                            >{{ errors.check[0] }}</span
                                        >
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-success waves-effect waves-light mr-2"
                                >
                                    Register
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
