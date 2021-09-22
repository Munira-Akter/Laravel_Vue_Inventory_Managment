<template>
    <div id="forget_password">
        <div class="container-fluid">
            <div
                class="row justify-content-center align-content-center"
                style="padding-top:200px;"
            >
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Forget Password</h4>
                            <h6 class="card-subtitle"></h6>
                            <form class="form pt-3">
                                <div class="form-group">
                                    <label for="">Email address</label>
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
                                            id=""
                                            placeholder="Enter email"
                                        />
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-success waves-effect waves-light mr-2"
                                >
                                    Verify Email
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
export default {};
</script>

<style lang="scss" scoped></style>
