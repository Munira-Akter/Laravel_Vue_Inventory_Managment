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
                                <h4 class="card-title">Edit Product</h4>

                                  <form
                                    class="pl-3 pr-3"
                                    enctype="multipart/form-data"
                                    @submit.prevent="productInsert()"
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
                                                    <option :value="cat.id" v-for="cat in category" :key="cat.id">{{cat.name}}</option>
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
                                           <option :value="supplier.id" v-for="supplier in suppliers" :key="supplier.id">{{supplier.name}}</option>

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
                                                    >Buying_price</label
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
                                                   
                                                />
                                                <span v-if="errors.photo">{{
                                                    errors.photo[0]
                                                }}</span>
                                                <img
                                                    :src="form.new_photo"
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
                                                    v-model="form.qty"
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
                                            Update Product
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
                code: null,
                category: null,
                supplier: null,
                buying_date: null,
                buying_price: null,
                selling_price: null,
                photo: null,
                qty: null,
                root: null,
                new_photo:null
            },
            errors: []
        };
    }
}

 
</script>

<style lang="scss" scoped></style>
