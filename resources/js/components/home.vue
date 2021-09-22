<template>
    <div id="home">
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard3</li>
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
                                    <div id="monthchart"></div>
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
                                    <div id="lastmonthchart"></div>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col pr-0 align-self-center">
                                    <h2 class="font-weight-light mb-0">324</h2>
                                    <h6 class="text-muted">New Clients</h6>
                                </div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div
                                        data-label="20%"
                                        class="css-bar mb-0 css-bar-info css-bar-20"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col pr-0 align-self-center">
                                    <h2 class="font-weight-light mb-0">2376</h2>
                                    <h6 class="text-muted">Total Visits</h6>
                                </div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div
                                        data-label="30%"
                                        class="css-bar mb-0 css-bar-success css-bar-20"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col pr-0 align-self-center">
                                    <h2 class="font-weight-light mb-0">1795</h2>
                                    <h6 class="text-muted">New Leads</h6>
                                </div>
                                <!-- Column -->
                                <div class="col text-right ">
                                    <div
                                        data-label="40%"
                                        class="css-bar mb-0 css-bar-primary css-bar-40"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col pr-0 align-self-center">
                                    <h2 class="font-weight-light mb-0">
                                        36870
                                    </h2>
                                    <h6 class="text-muted">Page Views</h6>
                                </div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div
                                        data-label="60%"
                                        class="css-bar mb-0 css-bar-danger css-bar-60"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Overview</h4>
                                <h6 class="card-subtitle">
                                    Ample Admin Vs Pixel Admin
                                </h6>
                                <div
                                    class="amp-pxl"
                                    style="height: 300px;"
                                ></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-success">
                                                <i
                                                    class="fa fa-circle font-10 mr-2 "
                                                ></i
                                                >Ample
                                            </h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class=" text-info">
                                                <i
                                                    class="fa fa-circle font-10 mr-2"
                                                ></i
                                                >Pixel
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Newsletter Campaign</h4>
                                <h6 class="card-subtitle">
                                    Overview of Newsletter Campaign
                                </h6>
                                <div
                                    class="campaign2 ct-charts"
                                    style="height: 300px;"
                                ></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-success">
                                                <i
                                                    class="fa fa-circle font-10 mr-2 "
                                                ></i
                                                >Open Rate
                                            </h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-info">
                                                <i
                                                    class="fa fa-circle font-10 mr-2"
                                                ></i
                                                >Recurring
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Current Visitors</h4>
                                <h6 class="card-subtitle">
                                    Different Devices Used to Visit
                                </h6>
                                <div id="usa" style="height: 300px"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-success">
                                                <i
                                                    class="fa fa-circle font-10 mr-2 "
                                                ></i
                                                >Valley
                                            </h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-info">
                                                <i
                                                    class="fa fa-circle font-10 mr-2"
                                                ></i
                                                >Newyork
                                            </h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-danger">
                                                <i
                                                    class="fa fa-circle font-10 mr-2"
                                                ></i
                                                >Kansas
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex no-block">
                                    <h4 class="card-title">
                                        Projects of the Month
                                    </h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="month-table">
                                    <div class="table-responsive mt-3">
                                        <table class="table stylish-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        Assigned
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Priority</th>
                                                    <th>Budget</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:50px;">
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                                            >S</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Sunil Joshi</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Web Designer</small
                                                        >
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-success px-2 py-1"
                                                            >Low</span
                                                        >
                                                    </td>
                                                    <td>$3.9K</td>
                                                </tr>
                                                <tr class="active">
                                                    <td>
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                                            ><img
                                                                :src="
                                                                    'assets/images/users/2.jpg'
                                                                "
                                                                alt="user"
                                                                width="50"
                                                        /></span>
                                                    </td>
                                                    <td>
                                                        <h6>Andrew</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Project
                                                            Manager</small
                                                        >
                                                    </td>
                                                    <td>Real Homes</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-info px-2 py-1"
                                                            >Medium</span
                                                        >
                                                    </td>
                                                    <td>$23.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-success"
                                                            >B</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Bhavesh patel</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Developer</small
                                                        >
                                                    </td>
                                                    <td>MedicalPro Theme</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-primary px-2 py-1"
                                                            >High</span
                                                        >
                                                    </td>
                                                    <td>$12.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-primary"
                                                            >N</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Nirav Joshi</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Frontend Eng</small
                                                        >
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-danger px-2 py-1"
                                                            >Low</span
                                                        >
                                                    </td>
                                                    <td>$10.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-warning"
                                                            >M</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Micheal Doe</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Content
                                                            Writer</small
                                                        >
                                                    </td>
                                                    <td>Helping Hands</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-warning px-2 py-1"
                                                            >High</span
                                                        >
                                                    </td>
                                                    <td>$12.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-danger"
                                                            >N</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Johnathan</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Graphic</small
                                                        >
                                                    </td>
                                                    <td>Digital Agency</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-info px-2 py-1"
                                                            >High</span
                                                        >
                                                    </td>
                                                    <td>$2.6K</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:50px;">
                                                        <span
                                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                                            >S</span
                                                        >
                                                    </td>
                                                    <td>
                                                        <h6>Sunil Joshi</h6>
                                                        <small
                                                            class="text-muted"
                                                            >Web Designer</small
                                                        >
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-success px-2 py-1"
                                                            >Low</span
                                                        >
                                                    </td>
                                                    <td>$3.9K</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Column -->
                        <div class="card">
                            <img
                                :src="'assets/images/background/profile-bg.jpg'"
                                alt="Card image cap"
                                class="profile-bg-height  w-100 rounded-top"
                            />
                            <div class="card-body little-profile text-center">
                                <div class="pro-img">
                                    <img
                                        :src="'assets/images/users/1.jpg'"
                                        alt="user"
                                        class="rounded-circle shadow-sm"
                                    />
                                </div>

                                <h3 class="mb-0">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <p>
                                    <small
                                        >Lorem ipsum dolor sit amet, this is a
                                        consectetur adipisicing elit</small
                                    >
                                </p>
                                <a
                                    href="javascript:void(0)"
                                    class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded"
                                    >Follow</a
                                >
                                <div class="row text-center mt-3 pt-1">
                                    <div class="col-lg-4 col-md-4 mt-4">
                                        <h3 class="mb-0 font-weight-light">
                                            1099
                                        </h3>
                                        <small>Articles</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-4">
                                        <h3 class="mb-0 font-weight-light">
                                            23,469
                                        </h3>
                                        <small>Followers</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-4">
                                        <h3 class="mb-0 font-weight-light">
                                            6035
                                        </h3>
                                        <small>Following</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- card -->
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white">
                                            <i class="ti-pie-chart"></i>
                                        </h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">
                                            Bandwidth usage
                                        </h3>
                                        <h6 class="card-subtitle">
                                            March 2020
                                        </h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 align-self-center">
                                        <h2
                                            class="font-weight-light text-white text-nowrap"
                                        >
                                            50 GB
                                        </h2>
                                    </div>
                                    <div
                                        class="col-8 pt-1 pb-2 align-self-center"
                                    >
                                        <div
                                            class="usage chartist-chart"
                                            style="height:60px"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white">
                                            <i class="icon-cloud-download"></i>
                                        </h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">
                                            Download count
                                        </h3>
                                        <h6 class="card-subtitle">
                                            March 2020
                                        </h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 align-self-center">
                                        <h2
                                            class="font-weight-light text-white text-nowrap text-truncate"
                                        >
                                            35487
                                        </h2>
                                    </div>
                                    <div class="col-8 pt-1 pb-2 text-right">
                                        <div
                                            class="spark-count"
                                            style="height:60px"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <ul class="feeds m-0 p-0 mt-3 pt-2">
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-info btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="far fa-bell"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class=""
                                                >You have 4 pending tasks.</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >Just Now</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-success btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="ti-server"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class="text-truncate"
                                                >Server #1 overloaded</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >2 Hours ago</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-warning btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="ti-shopping-cart"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class="text-truncate"
                                                >New order received.</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >31 May</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-danger btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="ti-user"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class="text-truncate"
                                                >New user registered.</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >30 May</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-inverse btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="ti-user"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class="text-truncate"
                                                >New Version just arrived.</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >27 May</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="feed-item d-flex py-2 align-items-center"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-info btn-circle font-18 text-white d-flex align-items-center justify-content-center"
                                            ><i class="far fa-bell"></i
                                        ></a>
                                        <div class="ml-3 text-truncate">
                                            <span class="text-truncate"
                                                >You have 4 pending tasks.</span
                                            >
                                        </div>
                                        <div
                                            class="justify-content-end text-truncate ml-auto"
                                        >
                                            <span class="font-12 text-muted"
                                                >30 May</span
                                            >
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">
                                    My Contacts
                                </h4>
                                <h6 class="card-subtitle text-white mb-0 op-5">
                                    Checkout my contacts here
                                </h6>
                            </div>
                            <div class="card-body p-2">
                                <div
                                    class="message-box contact-box position-relative mt-2"
                                >
                                    <h2 class="add-ct-btn position-absolute">
                                        <button
                                            type="button"
                                            class="btn btn-circle btn-lg btn-success waves-effect waves-dark"
                                        >
                                            +
                                        </button>
                                    </h2>
                                    <div
                                        class="message-widget contact-widget position-relative"
                                    >
                                        <!-- Message -->
                                        <a
                                            href="#"
                                            class="py-3 px-2 border-bottom d-block text-decoration-none"
                                        >
                                            <div
                                                class="user-img position-relative d-inline-block mr-2"
                                            >
                                                <img
                                                    :src="
                                                        'assets/images/users/1.jpg'
                                                    "
                                                    alt="user"
                                                    class="rounded-circle"
                                                />
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"
                                                ></span>
                                            </div>
                                            <div
                                                class="mail-contnet d-inline-block align-middle"
                                            >
                                                <h5 class="my-1">
                                                    Pavan kumar
                                                </h5>
                                                <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block"
                                                    >info@wrappixel.com</span
                                                >
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a
                                            href="#"
                                            class="py-3 px-2 border-bottom d-block text-decoration-none"
                                        >
                                            <div
                                                class="user-img position-relative d-inline-block mr-2"
                                            >
                                                <img
                                                    :src="
                                                        'assets/images/users/2.jpg'
                                                    "
                                                    alt="user"
                                                    class="rounded-circle "
                                                />
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-danger rounded-circle"
                                                ></span>
                                            </div>
                                            <div
                                                class="mail-contnet d-inline-block align-middle"
                                            >
                                                <h5 class="my-1">Sonu Nigam</h5>
                                                <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block"
                                                    >pamela1987@gmail.com</span
                                                >
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a
                                            href="#"
                                            class="py-3 px-2 border-bottom d-block text-decoration-none"
                                        >
                                            <div
                                                class="user-img position-relative d-inline-block mr-2"
                                            >
                                                <span
                                                    class="round text-white d-inline-block text-center rounded-circle bg-info"
                                                    >A</span
                                                >
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"
                                                ></span>
                                            </div>
                                            <div
                                                class="mail-contnet d-inline-block align-middle"
                                            >
                                                <h5 class="my-1">
                                                    Arijit Sinh
                                                </h5>
                                                <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block"
                                                    >cruise1298.fiplip@gmail.com</span
                                                >
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a
                                            href="#"
                                            class="py-3 px-2 d-block text-decoration-none"
                                        >
                                            <div
                                                class="user-img position-relative d-inline-block mr-2"
                                            >
                                                <img
                                                    :src="
                                                        'assets/images/users/4.jpg'
                                                    "
                                                    alt="user"
                                                    class="rounded-circle "
                                                />
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"
                                                ></span>
                                            </div>
                                            <div
                                                class="mail-contnet d-inline-block align-middle"
                                            >
                                                <h5 class="my-1">
                                                    Pavan kumar
                                                </h5>
                                                <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block"
                                                    >kat@gmail.com</span
                                                >
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title">Recent Comments</h4>
                                <h6 class="card-subtitle mb-3 pb-1">
                                    Latest Comments on users from Material
                                </h6>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div
                                class="comment-widgets position-relative mb-2 common-widget"
                            >
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span
                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                            ><img
                                                :src="
                                                    'assets/images/users/1.jpg'
                                                "
                                                alt="user"
                                                width="50"
                                        /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1 overflow-hidden">
                                            Lorem Ipsum is simply dummy text of
                                            the printing and type setting
                                            industry. Lorem Ipsum has beenorem
                                            Ipsum is simply dummy text of the
                                            printing and type setting industry.
                                        </p>
                                        <div class="comment-footer">
                                            <span class="text-muted pull-right"
                                                >April 14, 2016</span
                                            >
                                            <span class="badge badge-info"
                                                >Pending</span
                                            >
                                            <span class="action-icons">
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i
                                                        class="ti-pencil-alt"
                                                    ></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-check"></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-heart"></i
                                                ></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div
                                    class="d-flex flex-row comment-row active p-3"
                                >
                                    <div class="p-2">
                                        <span
                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                            ><img
                                                :src="
                                                    'assets/images/users/2.jpg'
                                                "
                                                alt="user"
                                                width="50"
                                        /></span>
                                    </div>
                                    <div class="comment-text active w-100 p-3">
                                        <h5>Michael Jorden</h5>
                                        <p class="mb-1 overflow-hidden">
                                            Lorem Ipsum is simply dummy text of
                                            the printing and type setting
                                            industry. Lorem Ipsum has beenorem
                                            Ipsum is simply dummy text of the
                                            printing and type setting industry..
                                        </p>
                                        <div class="comment-footer ">
                                            <span class="text-muted pull-right"
                                                >April 14, 2016</span
                                            >
                                            <span
                                                class="badge badge-light-success text-success"
                                                >Approved</span
                                            >
                                            <span class="action-icons active">
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i
                                                        class="ti-pencil-alt"
                                                    ></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="icon-close"></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i
                                                        class="ti-heart text-danger"
                                                    ></i
                                                ></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span
                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                            ><img
                                                :src="
                                                    'assets/images/users/3.jpg'
                                                "
                                                alt="user"
                                                width="50"
                                        /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5>Johnathan Doeting</h5>
                                        <p class="mb-1 overflow-hidden">
                                            Lorem Ipsum is simply dummy text of
                                            the printing and type setting
                                            industry. Lorem Ipsum has beenorem
                                            Ipsum is simply dummy text of the
                                            printing and type setting industry.
                                        </p>
                                        <div class="comment-footer">
                                            <span class="text-muted pull-right"
                                                >April 14, 2016</span
                                            >
                                            <span class="badge badge-danger"
                                                >Rejected</span
                                            >
                                            <span class="action-icons">
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i
                                                        class="ti-pencil-alt"
                                                    ></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-check"></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-heart"></i
                                                ></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span
                                            class="round text-white d-inline-block text-center rounded-circle bg-info"
                                            ><img
                                                :src="
                                                    'assets/images/users/4.jpg'
                                                "
                                                alt="user"
                                                width="50"
                                        /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1 overflow-hidden">
                                            Lorem Ipsum is simply dummy text of
                                            the printing and type setting
                                            industry. Lorem Ipsum has beenorem
                                            Ipsum is simply dummy text of the
                                            printing and type setting industry..
                                        </p>
                                        <div class="comment-footer">
                                            <span class="text-muted pull-right"
                                                >April 14, 2016</span
                                            >
                                            <span class="badge badge-info"
                                                >Pending</span
                                            >
                                            <span class="action-icons">
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i
                                                        class="ti-pencil-alt"
                                                    ></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-check"></i
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="pl-3"
                                                    ><i class="ti-heart"></i
                                                ></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <button
                                    class="float-right btn btn-sm btn-rounded btn-success"
                                    data-toggle="modal"
                                    data-target="#myModal"
                                >
                                    Add Task
                                </button>
                                <h4 class="card-title">To Do list</h4>
                                <h6 class="card-subtitle mb-0">
                                    List of your next task to complete
                                </h6>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget mt-3 common-widget">
                                    <!-- .modal for add task -->
                                    <div
                                        class="modal fade"
                                        id="myModal"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog"
                                            role="document"
                                        >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">
                                                        Add Task
                                                    </h4>
                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true"
                                                            >&times;</span
                                                        >
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label
                                                                >Task
                                                                name</label
                                                            >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Enter Task Name"
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                >Assign
                                                                to</label
                                                            >
                                                            <select
                                                                class="custom-select form-control pull-right"
                                                            >
                                                                <option
                                                                    selected=""
                                                                    >Sachin</option
                                                                >
                                                                <option
                                                                    value="1"
                                                                    >Sehwag</option
                                                                >
                                                                <option
                                                                    value="2"
                                                                    >Pritam</option
                                                                >
                                                                <option
                                                                    value="3"
                                                                    >Alia</option
                                                                >
                                                                <option
                                                                    value="4"
                                                                    >Varun</option
                                                                >
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button
                                                        type="button"
                                                        class="btn btn-secondary"
                                                        data-dismiss="modal"
                                                    >
                                                        Close
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-success"
                                                        data-dismiss="modal"
                                                    >
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <ul
                                        class="list-task todo-list list-group mb-0"
                                        data-role="tasklist"
                                    >
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputSchedule"
                                                    name="inputCheckboxesSchedule"
                                                />
                                                <label
                                                    for="inputSchedule"
                                                    class=""
                                                >
                                                    <span
                                                        >Schedule meeting
                                                        with</span
                                                    >
                                                </label>
                                            </div>
                                            <ul
                                                class="assignedto list-style-none m-0 pl-4 ml-1"
                                            >
                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/1.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Steave"
                                                        class="rounded-circle"
                                                    />
                                                </li>

                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/2.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Jessica"
                                                        class="rounded-circle"
                                                    />
                                                </li>

                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/3.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Priyanka"
                                                        class="rounded-circle"
                                                    />
                                                </li>

                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/4.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Selina"
                                                        class="rounded-circle"
                                                    />
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputCall"
                                                    name="inputCheckboxesCall"
                                                />
                                                <label for="inputCall" class="">
                                                    <span
                                                        >Give Purchase report
                                                        to</span
                                                    >
                                                    <span
                                                        class="badge badge-danger"
                                                        >Today</span
                                                    >
                                                </label>
                                            </div>
                                            <ul
                                                class="assignedto m-0 pl-4 ml-1"
                                            >
                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/3.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Priyanka"
                                                        class="rounded-circle"
                                                    />
                                                </li>

                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/4.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Selina"
                                                        class="rounded-circle"
                                                    />
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputBook"
                                                    name="inputCheckboxesBook"
                                                />
                                                <label for="inputBook" class="">
                                                    <span
                                                        >Book flight for
                                                        holiday</span
                                                    >
                                                </label>
                                            </div>
                                            <div
                                                class="font-12 pl-3 d-inline-block ml-2"
                                            >
                                                26 jun 2020
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputForward"
                                                    name="inputCheckboxesForward"
                                                />
                                                <label
                                                    for="inputForward"
                                                    class=""
                                                >
                                                    <span
                                                        >Forward all tasks</span
                                                    >
                                                    <span
                                                        class="badge badge-warning"
                                                        >2 weeks</span
                                                    >
                                                </label>
                                            </div>
                                            <div
                                                class="font-12 pl-3 d-inline-block ml-2"
                                            >
                                                26 jun 2020
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputRecieve"
                                                    name="inputCheckboxesRecieve"
                                                />
                                                <label
                                                    for="inputRecieve"
                                                    class=""
                                                >
                                                    <span
                                                        >Recieve shipment</span
                                                    >
                                                </label>
                                            </div>
                                            <div
                                                class="font-12 pl-3 d-inline-block ml-2"
                                            >
                                                26 jun 2020
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputpayment"
                                                    name="inputCheckboxespayment"
                                                />
                                                <label
                                                    for="inputpayment"
                                                    class=""
                                                >
                                                    <span
                                                        >Send payment
                                                        today</span
                                                    >
                                                </label>
                                            </div>
                                            <div
                                                class="font-12 pl-3 d-inline-block ml-2"
                                            >
                                                26 jun 2020
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 mb-0 py-3 pr-3 pl-0"
                                            data-role="task"
                                        >
                                            <div
                                                class="checkbox checkbox-info w-100"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="inputForward2"
                                                    name="inputCheckboxesd"
                                                />
                                                <label
                                                    for="inputForward2"
                                                    class=""
                                                >
                                                    <span>Important tasks</span>
                                                    <span
                                                        class="badge badge-success"
                                                        >2 weeks</span
                                                    >
                                                </label>
                                            </div>
                                            <ul
                                                class="assignedto m-0 pl-4 ml-1"
                                            >
                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/1.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Assign to Steave"
                                                        class="rounded-circle"
                                                    />
                                                </li>
                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/2.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Assign to Jessica"
                                                        class="rounded-circle"
                                                    />
                                                </li>
                                                <li
                                                    class="d-inline-block border-0 mr-1"
                                                >
                                                    <img
                                                        :src="
                                                            'assets/images/users/4.jpg'
                                                        "
                                                        alt="user"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Assign to Selina"
                                                        class="rounded-circle"
                                                    />
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title">
                            Service Panel
                            <span
                                ><i class="ti-close right-side-toggle"></i
                            ></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="mt-3">
                                <li><b>With Light sidebar</b></li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="default"
                                        class="default-theme"
                                        >1</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="green"
                                        class="green-theme"
                                        >2</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="red"
                                        class="red-theme"
                                        >3</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="blue"
                                        class="blue-theme working"
                                        >4</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="purple"
                                        class="purple-theme"
                                        >5</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="megna"
                                        class="megna-theme"
                                        >6</a
                                    >
                                </li>
                                <li class="d-block mt-4">
                                    <b>With Dark sidebar</b>
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="default-dark"
                                        class="default-dark-theme"
                                        >7</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="green-dark"
                                        class="green-dark-theme"
                                        >8</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="red-dark"
                                        class="red-dark-theme"
                                        >9</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="blue-dark"
                                        class="blue-dark-theme"
                                        >10</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="purple-dark"
                                        class="purple-dark-theme"
                                        >11</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        data-theme="megna-dark"
                                        class="megna-dark-theme "
                                        >12</a
                                    >
                                </li>
                            </ul>
                            <ul class="mt-3 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/1.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Varun Dhavan
                                            <small class="text-success"
                                                >online</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/2.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Genelia Deshmukh
                                            <small class="text-warning"
                                                >Away</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/3.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Ritesh Deshmukh
                                            <small class="text-danger"
                                                >Busy</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/4.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Arijit Sinh
                                            <small class="text-muted"
                                                >Offline</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/5.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Govinda Star
                                            <small class="text-success"
                                                >online</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/6.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >John Abraham<small
                                                class="text-success"
                                                >online</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/7.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Hritik Roshan<small
                                                class="text-success"
                                                >online</small
                                            ></span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        ><img
                                            :src="'assets/images/users/8.jpg'"
                                            alt="user-img"
                                            class="rounded-circle"
                                        />
                                        <span
                                            >Pwandeep rajan
                                            <small class="text-success"
                                                >online</small
                                            ></span
                                        ></a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
</template>

<script>
export default {
    created() {
        if (!User.loggedIn()) {
            this.$router.push({ name: "/login" });
        }
    }
};
</script>

<style lang="scss" scoped></style>
