<template>
    <div id="employee">
        <div class="page-wrapper" style="min-height: 479px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">
                            All Employee
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Employee </a>
                            </li>
                            <li class="breadcrumb-item active">
                                All Employee
                            </li>
                        </ol>
                    </div>
                    <div
                        class="col-md-7 col-12 align-self-center d-none d-md-block"
                    >
                        <div class="d-flex mt-2 justify-content-end">
                            <div class="d-flex mr-3 ml-2">
                                <div class="chart-text mr-2">
                                    <h6 class="mb-0">
                                        <small>THIS MONTH</small>
                                    </h6>
                                    <h4 class="mt-0 text-info">$58,356</h4>
                                </div>
                                <div class="spark-chart">
                                    <div id="monthchart">
                                        <canvas
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                            width="60"
                                            height="35"
                                        ></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mr-3 ml-2">
                                <div class="chart-text mr-2">
                                    <h6 class="mb-0">
                                        <small>LAST MONTH</small>
                                    </h6>
                                    <h4 class="mt-0 text-primary">$48,356</h4>
                                </div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart">
                                        <canvas
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                            width="60"
                                            height="35"
                                        ></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button
                                    class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right ml-2"
                                >
                                    <i class="ti-settings text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Employee</h4>
                                <form
                                    class="pl-3 pr-3"
                                    @submit.prevent="updateEmployee"
                                    enctype="multipart/form-data"
                                >
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username"
                                                    >Name</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="username"
                                                    placeholder="Enter Name"
                                                    v-model="form.name"
                                                />
                                                <span v-if="errors.name">{{
                                                    errors.name[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailaddress"
                                                    >Email address</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="email"
                                                    id="emailaddress"
                                                    placeholder="Email Address"
                                                    v-model="form.email"
                                                />
                                                <span v-if="errors.email">{{
                                                    errors.email[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="phone"
                                                    placeholder="Phone Number"
                                                    v-model="form.phone"
                                                />
                                                <span v-if="errors.phone">{{
                                                    errors.phone[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select
                                                    class="form-control"
                                                    v-model="form.role"
                                                >
                                                    <option value="Employee"
                                                        >Employee</option
                                                    >
                                                </select>
                                                <span v-if="errors.role">{{
                                                    errors.role[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="salary"
                                                    >salary</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="salary"
                                                    placeholder="Salary"
                                                    v-model="form.salary"
                                                />
                                                <span v-if="errors.salary">{{
                                                    errors.salary[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input
                                                    class="form-control"
                                                    type="file"
                                                    id="photo"
                                                    @change="fileUpload"
                                                />
                                                <span v-if="errors.photo">{{
                                                    errors.photo[0]
                                                }}</span>
                                                <img
                                                    :src="form.photo"
                                                    height="100px"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="form-group text-center">
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            Update Employee
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: null,
                email: null,
                phone: null,
                role: null,
                salary: null,
                photo: null
            },
            errors: {}
        };
    },

    methods: {
        updateEmployee() {
            let id = this.$route.params.id;
            axios
                .patch("/api/employee/update", this.form)
                .then(response => {
                    this.$router.push({ name: "/employee" });
                    Toast.fire({
                        icon: "Success",
                        title: "Data updated Successfully"
                    });
                })
                .catch(error => {});
        }
    },
    created() {
        let id = this.$route.params.id;
        axios
            .get("/api/employee/edit/" + id)
            .then(({ data }) => (this.form = data));
    }
};
</script>

<style lang="scss" scoped></style>
