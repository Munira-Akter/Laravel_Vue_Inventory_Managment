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
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">
                                    Export data to Copy, CSV, Excel, PDF &amp;
                                    Print
                                </h6>
                                <div class="table-responsive mt-4">
                                    <div
                                        id="example23_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4"
                                    >
                                        <div class="dt-buttons">
                                            <a
                                                class="dt-button buttons-copy buttons-html5"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                data-toggle="modal"
                                                data-target="#success-header-modal"
                                                ><span>Add Employee</span></a
                                            >
                                            <a
                                                class="dt-button buttons-copy buttons-html5"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                ><span>Copy</span></a
                                            >
                                            <a
                                                class="dt-button buttons-csv buttons-html5"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                ><span>CSV</span></a
                                            ><a
                                                class="dt-button buttons-excel buttons-html5"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                ><span>Excel</span></a
                                            ><a
                                                class="dt-button buttons-pdf buttons-html5"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                ><span>PDF</span></a
                                            ><a
                                                class="dt-button buttons-print"
                                                tabindex="0"
                                                aria-controls="example23"
                                                href="#"
                                                ><span>Print</span></a
                                            >
                                        </div>
                                        <table
                                            id="example23"
                                            class="display nowrap table table-hover table-striped table-bordered dataTable dtr-inline"
                                            role="grid"
                                            aria-describedby="example23_info"
                                            style="width: 100%;"
                                            width="100%"
                                            cellspacing="0"
                                        >
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Position
                                                    </th>
                                                    <th>
                                                        Office
                                                    </th>
                                                    <th>
                                                        Age
                                                    </th>
                                                    <th>
                                                        Start date
                                                    </th>
                                                    <th>
                                                        Salary
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">
                                                        Name
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Position
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Office
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Age
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Start date
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Salary
                                                    </th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td
                                                        tabindex="0"
                                                        class="sorting_1"
                                                    >
                                                        Airi Satou
                                                    </td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            <div class="col-md-12">
                <div
                    class="modal fade"
                    id="success-header-modal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="success-header-modal"
                    aria-hidden="true"
                >
                    <div
                        class="modal-dialog modal-lg modal-dialog-centered"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header bg-info text-center ">
                                <h3 class="text-light font-weight-bold">
                                    Add Employee
                                </h3>
                                <button
                                    class="float-right close"
                                    data-dismiss="modal"
                                >
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mt-2 mb-4">
                                    <a href="index.html" class="text-success">
                                        <span
                                            ><img
                                                class="mr-2"
                                                :src="
                                                    '../assets/images/logo-icon.png'
                                                "
                                                alt=""
                                                height="18"/><img
                                                :src="
                                                    '../assets/images/logo-text.png'
                                                "
                                                alt=""
                                                height="18"
                                        /></span>
                                    </a>
                                </div>

                                <form
                                    class="pl-3 pr-3"
                                    enctype="multipart/form-data"
                                    @submit.prevent="addEmployee"
                                >
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username"
                                                    >Name</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="email"
                                                    id="username"
                                                    required=""
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
                                                    type="email"
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
                                                    <option value=""
                                                        >Male</option
                                                    >
                                                    <option value=""
                                                        >Female</option
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
                                                    height="200px"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password"
                                                    >Password</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="password"
                                                    id="password"
                                                    placeholder="Enter your password"
                                                    v-model="form.password"
                                                />
                                                <span v-if="errors.password">{{
                                                    errors.password[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input
                                                    class="form-control"
                                                    type="password"
                                                    placeholder="Enter your password"
                                                    v-model="
                                                        form.password_confirmation
                                                    "
                                                />
                                                <span
                                                    v-if="
                                                        errors.password_confirmation
                                                    "
                                                    >{{
                                                        errors
                                                            .password_confirmation[0]
                                                    }}</span
                                                >
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="form-group text-center">
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            Add Employee
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
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
                password: null,
                password_confirmation: null,
                role: null,
                salary: null,
                photo: null
            },

            errors: {}
        };
    },

    mounted() {},

    methods: {
        addEmployee() {
            axios
                .post("/api/auth/employee/create", this.form)
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                });
        }
        // fileUpload(event) {
        //     console.log(event);
        // }
    }
};
</script>

<style lang="scss" scoped></style>
