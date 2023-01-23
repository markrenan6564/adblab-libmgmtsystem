<?php

include 'db_connect.php';
include 'db_create.php';
include 'db_read.php';
include 'db_update.php';
include 'db_delete.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Publishers | libPLM</title>

  <link rel="stylesheet" href="assets/css/main/app.css" />
  <link rel="stylesheet" href="assets/css/main/app-dark.css" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />

  <link rel="stylesheet" href="assets/css/shared/iconly.css" />
  <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
  <link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />
  <link rel="stylesheet" href="assets/extensions/choices.js/public/assets/styles/choices.css" />
</head>

<body>
  <script src="assets/js/initTheme.js"></script>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="index.php"><img src="assets/images/logo/logo.svg" alt="Logo" srcset="" /></a>
            </div>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--system-uicons" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                    opacity=".3"></path>
                  <g transform="translate(-210 -1)">
                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                    <circle cx="220.5" cy="11.5" r="4"></circle>
                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                  </g>
                </g>
              </svg>
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer" />
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                  d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                </path>
              </svg>
            </div>
            <div class="sidebar-toggler x">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">

            <li class="sidebar-item">
              <a href="index.php" class="sidebar-link">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="transaction.php" class="sidebar-link">
                <i class="bi bi-arrow-left-right"></i>
                <span>Transactions</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="penalty.php" class="sidebar-link">
                <i class="bi bi-exclamation-diamond-fill"></i>
                <span>Penalties</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="inventory.php" class="sidebar-link">
                <i class="bi bi-grid-3x3-gap-fill"></i>
                <span>Inventory</span>
              </a>
            </li>

            <li class="sidebar-title">Library Catalog</li>

            <li class="sidebar-item">
              <a href="catalog.php" class="sidebar-link">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Catalog</span>
              </a>
            </li>

            <li class="sidebar-item ">
              <a href="catalog_type.php" class="sidebar-link">
                <i class="bi bi-list-nested"></i>
                <span>Catalog Types</span>
              </a>
            </li>

            <li class="sidebar-item ">
              <a href="author.php" class="sidebar-link">
                <i class="bi bi-people-fill"></i>
                <span>Authors</span>
              </a>
            </li>

            <li class="sidebar-item active">
              <a href="publisher.php" class="sidebar-link">
                <i class="bi bi-building"></i>
                <span>Publishers</span>
              </a>
            </li>

            <li class="sidebar-title">Dewey Decimal System</li>

            <li class="sidebar-item">
              <a href="dewey_category.php" class="sidebar-link">
                <i class="bi bi-diagram-3-fill"></i>
                <span>Dewey Categories</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="dewey_index.php" class="sidebar-link">
                <i class="bi bi-card-list"></i>
                <span>Dewey Indices</span>
              </a>
            </li>

            <li class="sidebar-title">People</li>

            <li class="sidebar-item has-sub">
              <a href="#" class="sidebar-link">
                <i class="bi bi-person-badge-fill"></i>
                <span>Students</span>
              </a>
              <ul class="submenu">
                <li class="submenu-item">
                  <a href="student.php">Students</a>
                </li>
                <li class="submenu-item">
                  <a href="program.php">Programs</a>
                </li>
                <li class="submenu-item">
                  <a href="college.php">Colleges</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item has-sub">
              <a href="#" class="sidebar-link">
                <i class="bi bi-briefcase-fill"></i>
                <span>Faculty</span>
              </a>
              <ul class="submenu">
                <li class="submenu-item">
                  <a href="faculty.php">Faculty</a>
                </li>
                <li class="submenu-item">
                  <a href="department.php">Departments</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a href="staff.php" class="sidebar-link">
                <i class="bi bi-person-workspace"></i>
                <span>Staffs</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div id="main" class="layout-navbar navbar-fixed">
      <header class="mb-3">
        <nav class="navbar navbar-expand navbar-light navbar-top">
          <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
              <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="ms-auto">
                <div class="user-menu d-flex">
                  <div class="user-name text-end me-3 d-flex flex-column align-items-center">
                    <h6 class="mb-0 text-gray-600">libPLM</h6>
                    <p class="mb-0 text-sm text-gray-600">Administrator</p>
                  </div>
                  <div class="user-img d-flex align-items-center">
                    <div class="avatar avatar-md">
                      <img src="assets/images/plm_seal.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <!-- Page title -->
      <div id="main-content">
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Publishers</h3>
                <p class="text-subtitle text-muted">
                  Welcome, user!
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Publishers
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>


        <div class="page-content">
          <section class="row">
            <div class="col-12 col-lg-12">
              <div class="row">

                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div class="col-md-4 col-lg-6 col-xl-4 col-xxl-5 d-flex justify-content-center">
                          <div class="stats-icon green mt-3">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-8 col-xxl-7">
                          <a data-bs-toggle="modal" data-bs-target="#addModal"
                            class="btn icon icon-left btn-success mt-2 mb-2 w-75">
                            <i data-feather="plus-circle"></i> Add</a>
                          <h6 class="text-muted font-semibold">Add Publisher</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

        <!-- Add entity Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
            role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                  Publisher
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
                </button>
              </div>
              <div class="modal-body">
                <!-- Forms -->
                <form class="form" action="db_create.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="first-name-column">Publisher Name</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Publisher Name"
                          name="publisher_name" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="last-name-column">Publisher Description</label>
                        <input type="text" id="last-name-column" class="form-control" placeholder="Publisher Description"
                          name="publisher_description" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="city-column">Publisher Country</label>
                        <input type="text" id="city-column" class="form-control" placeholder="Publisher Country"
                          name="publisher_country" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="country-floating">Publisher City</label>
                        <input type="text" id="country-floating" class="form-control" name="publisher_city"
                          placeholder="Publisher City" />
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button type="button" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">
                        Cancel
                      </button>
                      <button type="submit" name="add_publisher" class="btn btn-success me-1 mb-1 ml-2" data-bs-dismiss="modal">
                        Add
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Database Table -->
        <section class="section">
                  <div class="card">
                    <div class="card-header">Publisher</div>
                    <div class="card-body">
                      <table class="table table-striped" id="table1">
                        <thead>
                          <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
                            <th>Publisher Description</th>
                            <th>Publisher Country</th>
                            <th>Publisher City</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($read_publishers as $column) {
                            echo '<tr>';
                            echo '<td>' . $column['publisher_id'] . '</td>';
                            echo '<td>' . $column['publisher_name'] . '</td>';
                            echo '<td>' . $column['publisher_description'] . '</td>';
                            echo '<td>' . $column['publisher_country'] . '</td>';
                            echo '<td>' . $column['publisher_city'] . '</td>';
                            echo '<td>
                            <a data-bs-toggle="modal" data-bs-target="#editModal" class="badge bg-primary">Edit</a>
                            <a data-bs-toggle="modal" data-bs-target="#deleteModal" class="badge bg-danger">Delete</a>
                          </td>';
                            echo '</tr>';
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </section>

        <!-- Edit entity Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
            role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                  Edit
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
                </button>
              </div>
              <div class="modal-body">
                <!-- Forms -->
                <form class="form">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="first-name-column">Publisher Name</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Publisher Name"
                          name="fname-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="last-name-column">Publisher Description</label>
                        <input type="text" id="last-name-column" class="form-control" placeholder="Publisher Description"
                          name="lname-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="city-column">Publisher Country</label>
                        <input type="text" id="city-column" class="form-control" placeholder="Publisher Country"
                          name="city-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label for="city-column">Publisher City</label>
                        <input type="text" id="city-column" class="form-control" placeholder="Publisher City"
                          name="city-column" />
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button type="button" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">
                        Cancel
                      </button>
                      <button type="submit" class="btn btn-primary me-1 mb-1 ml-2" data-bs-dismiss="modal">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Delete  entity Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-m"
            role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                  Delete {Entity}
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
                </button>
              </div>
              <div class="modal-body">
                <p>
                  Do you want to delete this item?
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                  <i class="bx bx-x d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Cancel</span>
                </button>
                <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                  <i class="bx bx-check d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Delete</span>
                </button>
              </div>
            </div>
          </div>
        </div>


        <footer class="mt-auto">
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; libPLM</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i>
                </span>
                by <a href="https://ahmadsaugi.com">Saugi</a>
              </p>
            </div>
          </div>
        </footer>

      </div>
    </div>
  </div>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/app.js"></script>

  <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
  <script src="assets/js/pages/simple-datatables.js"></script>
  <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
  <script src="assets/js/pages/form-element-select.js"></script>
</body>

</html>