<template>
    <div class="supplier">
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
                                                @click.prevent="showmodal()"
                                                data-toggle="modal"
                                                data-target="#supplier-header-modal"
                                                ><span>Add Supplier</span></a
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
                                                    v-model="search"
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
                                                            Address
                                                        </th>
                                                        <th>
                                                            Shop
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
                                                            Address
                                                        </th>
                                                        <th
                                                            rowspan="1"
                                                            colspan="1"
                                                        >
                                                            Shop
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
                                                        v-for="supplier in suppliers"
                                                        :key="supplier.id"
                                                    >
                                                        <td>
                                                            {{ supplier.name }}
                                                        </td>
                                                        <td>
                                                            {{ supplier.email }}
                                                        </td>
                                                        <td>
                                                            {{ supplier.phone }}
                                                        </td>
                                                        <td>
                                                            {{
                                                                supplier.address
                                                            }}
                                                        </td>
                                                        <td>
                                                            {{ supplier.shop }}
                                                        </td>
                                                        <td>
                                                            <img
                                                                :src="
                                                                    supplier.photo
                                                                "
                                                                height="50px"
                                                            />
                                                        </td>

                                                        <td class="text-nowrap">
                                                            <router-link
                                                                :to="{
                                                                    name:
                                                                        '/supplier-edit',
                                                                    params: {
                                                                        id:
                                                                            supplier.id
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
                                                                data-toggle="tooltip"
                                                                data-original-title="Delete"
                                                                @click.prevent="
                                                                    deleteSupplier(
                                                                        supplier.id
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

            <!-- === =========================================================== -->
            <!-- En d footer -->
            <!-- ============================================================== -->
        </div>
        <div>
            <div class="col-md-12">
                <div
                    ref="vuemodal"
                    class="modal fade"
                    id="supplier-header-modal"
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
                                    Add Supplier
                                </h3>
                                <button
                                    class="float-right close"
                                    data-dismiss="modal"
                                >
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <form
                                        action=""
                                        @submit.prevent="addSupplier"
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
                                                        v-model="form.name"
                                                        placeholder="Enter Supplier Name"
                                                    />
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
                                                        v-model="form.email"
                                                        type="email"
                                                        id="emailaddress"
                                                        placeholder="Email Address"
                                                    />
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone"
                                                        >Phone</label
                                                    >
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        id="phone"
                                                        v-model="form.phone"
                                                        placeholder="Phone Number"
                                                    />
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="shop"
                                                        >Shop Name</label
                                                    >
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        id="shop"
                                                        v-model="form.shop"
                                                        placeholder="Shop Details"
                                                    />
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address"
                                                        >Address</label
                                                    >
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        id="address"
                                                        v-model="form.address"
                                                        placeholder="Address"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Photo"
                                                        >Photo</label
                                                    >
                                                    <input
                                                        class="form-control"
                                                        type="file"
                                                        id="Photo"
                                                        @change.prevent="
                                                            fileupload
                                                        "
                                                    />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <img
                                                    :src="form.photo"
                                                    height="100px"
                                                    width="100px"
                                                    id="supplier_img"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button
                                                class="btn btn-primary"
                                                type="submit"
                                            >
                                                Add Supplier
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
                photo: null,
                address: null,
                phone: null,
                shop: null
            },
            suppliers: [],
            search: ""
        };
    },

    computed: {
        filterSreach() {
            return this.suppliers.filter(supplier => {
                return (
                    supplier.name
                        .toLowerCase()
                        .match(this.search.toLowerCase()) ||
                    supplier.email
                        .toLowerCase()
                        .match(this.search.toLowerCase()) ||
                    supplier.phone
                        .toLowerCase()
                        .match(this.search.toLowerCase())
                );
            });
        }
    },

    


    methods: {
        deleteSupplier(id) {
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
                        .delete("api/supplier/" + id)
                        .then(response => {
                            this.showalldata();
                        })
                        .catch(error => {
                            this.$router.push({
                                name: "/supplier"
                            });
                            Swal.fire(
                                "Something goes wrong",
                                error.data,
                                "warning"
                            );
                        });

                    Toast.fire({
                        icon: "Danger",
                        title: "Supplier Deleted Successfully"
                    });
                } else {
                    Toast.fire({
                        icon: "info",
                        title: "Your Data is Now"
                    });
                }
            });
        },

        showalldata() {
            axios.get("/api/supplier").then(response => {
                this.suppliers = response.data;
            });
        },

        fileupload(event) {
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = event => {
                this.form.photo = event.target.result;
            };

            reader.readAsDataURL(file);
        },
        addSupplier() {
            axios
                .post("api/supplier", this.form)
                .then(response => {
                    this.form = "";
                    this.showalldata();
                    $("#supplier-header-modal").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Supplier Added Successfully"
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },

    created(){
        this.showalldata();
    },
};
</script>

<style lang="scss" scoped></style>
