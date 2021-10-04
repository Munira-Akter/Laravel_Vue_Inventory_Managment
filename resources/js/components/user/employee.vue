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
                                        <div
                                            id="example23_filter"
                                            class="dataTables_filter"
                                        >
                                            <label
                                                >Search:<input
                                                    v-model="serach"
                                                    type="search"
                                                    class="form-control form-control-sm"
                                                    placeholder=""
                                                    aria-controls="example23"
                                            /></label>
                                        </div>
                                        <div class="table-responsive">
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
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Role
                                                        </th>
                                                        <th>
                                                            Salary
                                                        </th>
                                                        <th>
                                                            Image
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Name
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Email
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Phone
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Role
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Salary
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Image
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Action
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr
                                                        role="row"
                                                        v-for="employe in filterSreach"
                                                        :key="employe.id"
                                                    >
                                                        <td>
                                                            {{ employe.name }}
                                                        </td>
                                                        <td>
                                                            {{ employe.email }}
                                                        </td>
                                                        <td>
                                                            {{ employe.phone }}
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-danger"
                                                                >{{
                                                                    employe.role
                                                                }}</span
                                                            >
                                                        </td>
                                                        <td>
                                                            {{ employe.salary }}
                                                        </td>
                                                        <td>
                                                            <img
                                                                :src="
                                                                    employe.photo
                                                                "
                                                                class="employee_photo"
                                                            />
                                                        </td>

                                                        <td class="text-nowrap">
                                                            <router-link
                                                                :to="{
                                                                    name:
                                                                        '/employee-edit',
                                                                    params: {
                                                                        id:
                                                                            employe.id
                                                                    }
                                                                }"
                                                                data-toggle="tooltip"
                                                                data-original-title="Edit"
                                                                aria-describedby="tooltip766382"
                                                            >
                                                                <i
                                                                    class="fas fa-pencil-alt text-inverse mr-2"
                                                                ></i>
                                                            </router-link>
                                                            <a
                                                                href="#"
                                                                @click.prevent="
                                                                    deleteEmployee(
                                                                        employe.id
                                                                    )
                                                                "
                                                                data-toggle="tooltip"
                                                                data-original-title="Close"
                                                            >
                                                                <i
                                                                    class="fas fa-window-close text-danger"
                                                                ></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
                    ref="vuemodal"
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

            errors: {},

            employee: [],
            serach: ""
        };
    },
    computed: {
        filterSreach() {
            return this.employee.filter(employe => {
                return (
                    employe.name
                        .toLowerCase()
                        .match(this.serach.toLowerCase()) ||
                    employe.email
                        .toLowerCase()
                        .match(this.serach.toLowerCase()) ||
                    employe.phone.toLowerCase().match(this.serach.toLowerCase())
                );
            });
        }
    },

    methods: {
        showAllEmployee() {
            axios.get("/api/employee").then(response => {
                this.employee = response.data;
            });
        },
        fileUpload(event) {
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = event => {
                this.form.photo = event.target.result;
                // console.log(this.form.photo);
            };
            reader.readAsDataURL(file);
        },
        addEmployee() {
            axios
                .post("/api/create", this.form)
                .then(response => {
                    this.showAllEmployee();
                    this.form = "";
                    $("#success-header-modal").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Employee Added Successfully"
                    });
                })
                .catch(error => {
                    console.log(error);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                });
        },
        // Delete Sinle Employee Data
        deleteEmployee(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#2196F3",
                confirmButtonText: "Delete"
            }).then(result => {
                if (result.isConfirmed) {
                    axios
                        .delete("api/employee/delete/" + id)
                        .then(res => {
                            this.employee = this.employee.filter(employee => {
                                return employee.id != id;
                            });
                        })
                        .catch(error => {
                            this.$router.push({ name: "/employee" });
                            Swal.fire("Warning!", error.data, "warning");
                        });
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    );
                } else {
                    Toast.fire({
                        icon: "info",
                        title: "Your Data is Now"
                    });
                }
            });
        }
    },

    created() {
        this.showAllEmployee();
    }
};
</script>

<style lang="scss" scoped>
.employee_photo {
    width: 50px !important;
    height: 50px !important;
}
</style>
