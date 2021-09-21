<template>
    <div id="forget_password">
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
                                            <h2 class="mb-2">Reset Password</h2>
                                            <p>
                                                Enter your email address and
                                                we'll send you an email with
                                                instructions to reset your
                                                password.
                                            </p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div
                                                            class="floating-label form-group"
                                                        >
                                                            <input
                                                                class="floating-input form-control"
                                                                type="email"
                                                                placeholder=""
                                                            />
                                                            <label
                                                                >Enter your
                                                                Exiting Email
                                                                Address</label
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Reset
                                                </button>

                                                <p class="mt-3">
                                                    Go to Sign In page
                                                    <router-link
                                                        to="/"
                                                        href="auth-sign-up.html"
                                                        class="text-primary"
                                                        >Sign In</router-link
                                                    >
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
export default {};
</script>

<style lang="scss" scoped></style>
