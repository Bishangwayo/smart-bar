<?php include_once("../backend/customerController.php"); ?>

<?php include("include/title.php"); ?>

<?php include("include/header.php"); ?>

<?php include("include/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Orders</li>
                <li class="breadcrumb-item active">View Order</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="pagetitle">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">View Order</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Table</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#">1</a></th>
                                <td>Brandon Jacob</td>
                                <td>At praesentium minu</td>
                                <td>Table 10</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->

    </section>

</main><!-- End #main -->


<?php include_once("include/footer.php"); ?>