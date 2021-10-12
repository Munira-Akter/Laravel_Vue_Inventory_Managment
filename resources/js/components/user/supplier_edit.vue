<template>
    <div id="supplier_edit">
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
                            All Supplier
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Supplier </a>
                            </li>
                            <li class="breadcrumb-item active">
                                All Supplier
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
                                <h4 class="card-title">Edit Supplier</h4>

                                <form
                                    class="pl-3 pr-3"
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
                                                <span class="text-danger">
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="Email"
                                                    placeholder="Enter Email"
                                                    v-model="form.email"
                                                />
                                                <span class="text-danger">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Shop">Shop</label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="Shop"
                                                    placeholder="Enter Shop"
                                                    v-model="form.shop"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Address"
                                                    >Address</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="Address"
                                                    placeholder="Enter Address"
                                                    v-model="form.address"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Phone">Phone</label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="Phone"
                                                    placeholder="Enter Phone"
                                                    v-model="form.phone"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Photo">Photo</label>
                                                <input
                                                    class="form-control"
                                                    type="file"
                                                    id="Photo"
                                                    @change="fileupload($event)"
                                                />
                                            </div>

                                            <img :src="form.new_photo" alt="" />
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            Update Supplier
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
                shop: null,
                address: null,
                photo: null,
                new_photo: null
            }
        };
    },

    mounted() {
        let id = this.$route.params.id;
        axios
            .get("/api/supplier-edit/" + id)
            .then(({ data }) => (this.form = data))
            .catch(console.log("error"));
    },

    methods: {
        fileupload(event) {}
    }
};
</script>

<style lang="scss" scoped></style>
