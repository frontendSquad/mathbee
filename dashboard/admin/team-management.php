<?php
$title = "Team Management";
$pg = "team-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="team-management" class="team-management-page">
    <div class="row">
        <div class="col-12">
            <div class="content-body shadow-full bg-white rounded-5 p-md-5 p-4">
                <div class="page-title mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2>Team Management</h2>
                        </div>
                    </div>
                </div>
                <div class="dataTables_wrapper">
                    <div class="user-listing-top">
                        <div class="row align-items-end d-flex justify-content-between mb-3">
                            <div class="col-12 col-lg-12 col-xl-6 col-xxl-4 mb-2 mb-md-0">
                                <div class="d-block d-md-flex align-items-center mb-3">
                                    <label class="mb-0 d-block flex-shrink-0 me-3 mb-md-0 mb-2 pt-3">Sort By:</label>
                                    <div class="d-sm-flex d-block flex-grow-1">
                                        <div class="input-wrap me-0 me-sm-2 mb-2 mb-sm-0">
                                            <label>From</label>
                                            <input type="date" placeholder="From" class="form-control">
                                        </div>
                                        <div class="input-wrap">
                                            <label>To</label>
                                            <input type="date" placeholder="To" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
                                    <label class="d-inline-md-block d-block me-4">Show</label>
                                    <div class="d-block d-md-flex">
                                        <div class="select-wrapper  d-block d-inline-md-block w-auto">
                                            <select class="form-control d-inline-block">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 col-xl-6 col-xxl-4 text-start mt-3 mt-xxl-0 order-md-1">
                                <div class="select-wrapper d-block d-md-flex align-items-center w-auto position-relative mb-4">
                                    <label class="flex-shrink-0 me-3">Filter By:</label>
                                    <select name="" class="form-control" id="">
                                        <option selected disabled>Select</option>
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>
                                    </select>
                                </div>
                                <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                                    <div class="search-wrap flex-grow-1">
                                        <input type="search" class="form-control" placeholder="Search Zip Code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-tabble table-responsive mx-n2">
                        <table class="table table-borderless dataTable px-2">
                            <thead>
                                <tr>
                                    <th class="sorting">S.No</th>
                                    <th class="sorting">Name</th>
                                    <th class="sorting">Class Grade</th>
                                    <th class="sorting">Date Registered</th>
                                    <th class="sorting">Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Mark Carson</td>
                                    <td>Class 6</td>
                                    <td>mm/dd/yyyy</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-team"><i class="fas fa-ban"></i> Inactive</a>
                                                <a class="dropdown-item" href="view-team-details.php"><i class="far fa-eye"></i> View</a>
                                                <a class="dropdown-item" href="edit-team-details.php"><i class="fas fa-pen"></i> Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Mark Carson</td>
                                    <td>Class 6</td>
                                    <td>mm/dd/yyyy</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-team"><i class="fas fa-ban"></i> Inactive</a>
                                                <a class="dropdown-item" href="view-team-details.php"><i class="far fa-eye"></i> View</a>
                                                <a class="dropdown-item" href="edit-team-details.php"><i class="fas fa-pen"></i> Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Mark Carson</td>
                                    <td>Class 6</td>
                                    <td>mm/dd/yyyy</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-team"><i class="fas fa-ban"></i> Inactive</a>
                                                <a class="dropdown-item" href="view-team-details.php"><i class="far fa-eye"></i> View</a>
                                                <a class="dropdown-item" href="edit-team-details.php"><i class="fas fa-pen"></i> Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Mark Carson</td>
                                    <td>Class 6</td>
                                    <td>mm/dd/yyyy</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-team"><i class="fas fa-ban"></i> Inactive</a>
                                                <a class="dropdown-item" href="view-team-details.php"><i class="far fa-eye"></i> View</a>
                                                <a class="dropdown-item" href="edit-team-details.php"><i class="fas fa-pen"></i> Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Mark Carson</td>
                                    <td>Class 6</td>
                                    <td>mm/dd/yyyy</td>
                                    <td>Inactive</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".active-team"><i class="fas fa-ban"></i> Active</a>
                                                <a class="dropdown-item" href="view-team-details.php"><i class="far fa-eye"></i> View</a>
                                                <a class="dropdown-item" href="edit-team-details.php"><i class="fas fa-pen"></i> Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container-fluid">
                            <div class="row mt-3">
                                <div class="col-sm-12 col-xxl-5 align-self-center text-center text-xxl-start">
                                    <div class="dataTables_info pl-2">Showing 1 to 3 of 3 entries</div>
                                </div>
                                <div class="col-sm-12 col-xxl-7 d-flex justify-content-center justify-content-xxl-end">
                                    <div class="dataTables_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" class="page-link">01</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">02</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">03</a></li>
                                            <li class="paginate_button page-item next disabled" i=""><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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