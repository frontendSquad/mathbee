<?php
$title = "Dashboard";
$pg = "Dashboard";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="configuration" class="dashboard">
    <div class="row">
        <div class="col-12">
            <div class="content-body">
                <div class="page-title mb-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 mb-3">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
                <div class="card-dashboard mt-2 mt-md-3 mb-0 mb-md-3">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 mb-2 d-flex">
                            <div class="card">
                                <div class="card-title pt-4 mb-3 mb-xl-2">Total Teacher</div>
                                <div class="card-body py-1 pb-4">
                                    <div class="media align-items-center d-flex w-100">
                                        <div class="media-body text-left flex-grow-1">
                                            <h3>100</h3>
                                        </div>
                                        <div class="align-self-center flex-shrink-1">
                                            <h4 class="d-flex mb-0"><img src="../assets/images/total-user.png" alt="" class="img-fluid align-self-center me-2"> 100.0%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 mb-2 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-title pt-4 mb-3 mb-xl-2">Total Student</div>
                                <div class="card-body py-1 pb-4">
                                    <div class="media align-items-center d-flex w-100">
                                        <div class="media-body text-left flex-grow-1">
                                            <h3>100</h3>
                                        </div>
                                        <div class="align-self-center flex-shrink-1">
                                            <h4 class="d-flex mb-0"><img src="../assets/images/total-user.png" alt="" class="img-fluid align-self-center me-2"> 100.0%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 mb-2 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-title pt-4 mb-3 mb-xl-2">Total User</div>
                                <div class="card-body py-1 pb-4">
                                    <div class="media align-items-center d-flex w-100">
                                        <div class="media-body text-left flex-grow-1">
                                            <h3>100</h3>
                                        </div>
                                        <div class="align-self-center flex-shrink-1">
                                            <h4 class="d-flex mb-0"><img src="../assets/images/total-user.png" alt="" class="img-fluid align-self-center me-2"> 100.0%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-block card-chart border-none shadow-none pt-4 rounded-0 align-items-center">
                    <div class="card-header d-block d-sm-flex justify-content-between bg-transparent border-0 p-0 ">
                        <h3 class="fw-bold mb-0 align-self-center">Amount Analytics</h3>
                        <div class="">
                            <div class="select-wrapper d-block d-sm-inline-block mt-1 mt-sm-0 me-0 me-sm-2">
                                <select name="" id="" class="form-control">
                                    <option value="">Year</option>
                                    <option value="">2022</option>
                                    <option value="">2021</option>
                                    <option value="">2020</option>
                                    <option value="">2019</option>
                                    <option value="">2018</option>
                                    <option value="">2017</option>
                                    <option value="">2016</option>
                                    <option value="">2015</option>
                                    <option value="">2014</option>
                                    <option value="">2013</option>
                                    <option value="">2012</option>
                                    <option value="">2011</option>
                                    <option value="">2010</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-5 pb-0">
                        <div class="chartbox position-relative text-center">
                            <img src="../assets/images/chart.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('../include/footer.php');
?>