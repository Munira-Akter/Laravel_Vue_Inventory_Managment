<template>
    <div id="product">
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
                            All Product
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Product </a>
                            </li>
                            <li class="breadcrumb-item active">
                                All Product
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
                                                ><span>Add Product</span></a
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
                                                            Product Code
                                                        </th>
                                                        <th>
                                                            Quantity
                                                        </th>
                                                        <th colspan="2">
                                                            Profit
                                                        </th>

                                                        <th>
                                                            Image
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr role="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td colspan="2">
                                                            <span
                                                                class="badge badge-danger"
                                                            ></span>
                                                        </td>

                                                        <td></td>

                                                        <td class="text-nowrap">
                                                            <a>
                                                                <i
                                                                    class="fas fa-edit text-primary"
                                                                ></i
                                                            ></a>

                                                            <a href="#">
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
                                    Add Product
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
                                    @submit.prevent=""
                                >
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username"
                                                    >Product Name</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="username"
                                                    placeholder="Enter Product Name"
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
                                                    >Product Code</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="Product Code"
                                                    placeholder="Product Code"
                                                    v-model="form.code"
                                                />
                                                <span v-if="errors.code">{{
                                                    errors.code[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone"
                                                    >Category</label
                                                >
                                                <select
                                                    class="form-control"
                                                    v-model="form.category"
                                                >
                                                    <option value=""></option>
                                                </select>

                                                <span v-if="errors.category">{{
                                                    errors.category[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone"
                                                    >Supplier</label
                                                >
                                                <select
                                                    class="form-control"
                                                    v-model="form.supplier"
                                                >
                                                    <option value=""></option>
                                                </select>

                                                <span v-if="errors.supplier">{{
                                                    errors.supplier[0]
                                                }}</span>
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password"
                                                    >Root</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="password"
                                                    placeholder="Enter Root"
                                                    v-model="form.root"
                                                />
                                                <span v-if="errors.root">{{
                                                    errors.root[0]
                                                }}</span>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date"
                                                    >Buying Date</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="date"
                                                    id="date"
                                                    v-model="form.buying_date"
                                                />
                                                <span
                                                    v-if="errors.buying_date"
                                                    >{{
                                                        errors.buying_date[0]
                                                    }}</span
                                                >
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="selling_price"
                                                    >selling_price</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="selling_price"
                                                    placeholder="selling_price"
                                                    v-model="form.selling_price"
                                                />
                                                <span
                                                    v-if="errors.selling_price"
                                                    >{{
                                                        errors.selling_price[0]
                                                    }}</span
                                                >
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="buying_price"
                                                    >buying_price</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="buying_price"
                                                    placeholder="buying_price"
                                                    v-model="form.buying_price"
                                                />
                                                <span
                                                    v-if="errors.buying_price"
                                                    >{{
                                                        errors.buying_price[0]
                                                    }}</span
                                                >
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>

                                    <div class="row pt-3">
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="qty">qty</label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    id="qty"
                                                    @change="qty"
                                                />
                                                <span v-if="errors.qty">{{
                                                    errors.qty[0]
                                                }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            Add Product
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
                code: null,
                category: null,
                supplier: null,
                buying_date: null,
                buying_price: null,
                salling_price: null,
                photo: null,
                qty: null,
                root: null
            },

            errors: {},
            serach: ""
        };
    }
};
</script>

<style lang="scss" scoped>
.employee_photo {
    width: 50px !important;
    height: 50px !important;
}
</style>
