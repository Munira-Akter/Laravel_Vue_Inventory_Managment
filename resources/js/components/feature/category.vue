<template>
    <div id="category">
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
                            All Category
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Category </a>
                            </li>
                            <li class="breadcrumb-item active">
                                All Category
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
                                                ><span>Add Category</span></a
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr
                                                        role="row"
                                                        v-for="allcategory in allcat"
                                                        :key="allcategory.id"
                                                    >
                                                        <td>
                                                            {{
                                                                allcategory.name
                                                            }}
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <router-link
                                                                :to="{
                                                                    name:
                                                                        '/category-update',
                                                                    params: {
                                                                        id:
                                                                            allcategory.id
                                                                    }
                                                                }"
                                                            >
                                                                <i
                                                                    class="fas fa-edit text-primary"
                                                                ></i
                                                            ></router-link>

                                                            <a
                                                                href="#"
                                                                @click.prevent="
                                                                    deleteCategory(
                                                                        allcategory.id
                                                                    )
                                                                "
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
                                    Add Category
                                </h3>
                                <button
                                    class="float-right close"
                                    data-dismiss="modal"
                                >
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <form
                                    class="pl-3 pr-3"
                                    enctype="multipart/form-data"
                                    @submit.prevent="addCategory"
                                >
                                    <div class="row pt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username"
                                                    >Name</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="username"
                                                    placeholder="Enter Category Name"
                                                    v-model="form.name"
                                                />
                                                <span v-if="errors.name">{{
                                                    errors.name[0]
                                                }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            Add Category
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
    name: "InventoryCategory",

    data() {
        return {
            form: {
                name: null
            },
            serach: null,
            errors: [],
            allcat: []
        };
    },

    computed: {
        filtersearch() {
            return this.allcat.filter(cat => {
                return cat.name.toLowerCase().match(this.serach.toLowerCase());
            });
        }
    },

    methods: {
        allcategory() {
            axios.get("/api/category").then(response => {
                this.allcat = response.data;
            });
        },

        deleteCategory(id) {
            axios
                .delete("api/category/" + id)
                .then(response => {
                    this.allcategory();
                    this.$router.push({ name: "/category" });
                    Toast.fire({
                        icon: "Success",
                        title: "Category Deleted Successfully"
                    });
                })
                .catch(error => {
                    Toast.fire({
                        icon: "Error",
                        title: error
                    });
                });
        },

        addCategory() {
            axios
                .post("api/category", this.form)
                .then(response => {
                    this.allcategory();
                    $("#success-header-modal").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Category Added Successfully"
                    });

                    $this.router.push({ name: "/category" });
                })
                .catch(error => {
                    this.errors = error.response.data.error;
                });
        }
    },

    created() {
        this.allcategory();
    }
};
</script>

<style lang="scss" scoped></style>
