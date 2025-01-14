@extends('admin.layouts.master')

@section('title', 'Students')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid my-4">
        <div class="row justify-content-center gap-2">
            <!-- Students -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-dark">
                <div class="fs-6">50421</div>
                <div>Students</div>
            </div>
            <!-- Visits -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-danger">
                <div class="fs-6">45730</div>
                <div>Visits</div>
            </div>
            <!-- Wishlist -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-warning">
                <div class="fs-6">2371</div>
                <div>Wishlist</div>
            </div>
            <!-- Cart -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-success">
                <div class="fs-6">4283</div>
                <div>Cart</div>
            </div>
            <!-- Order -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-primary">
                <div class="fs-6">1980</div>
                <div>Order</div>
            </div>
            <!-- Paid -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-success">
                <div class="fs-6">1</div>
                <div>Paid</div>
            </div>
            <!-- Active -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-primary">
                <div class="fs-6">12218</div>
                <div>Active</div>
            </div>
            <!-- Completed -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-secondary">
                <div class="fs-6">-</div>
                <div>Completed</div>
            </div>
            <!-- Certified -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-secondary">
                <div class="fs-6">-</div>
                <div>Certified</div>
            </div>
            <!-- Flag -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-danger">
                <div class="fs-6">125</div>
                <div>Flag</div>
            </div>
            <!-- Review -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-warning">
                <div class="fs-6">312</div>
                <div>Review</div>
            </div>
            <!-- Follow Up -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-primary">
                <div class="fs-6">563</div>
                <div>Follow Up</div>
            </div>
            <!-- N/A -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-secondary">
                <div class="fs-6">-</div>
                <div>N/A</div>
            </div>
            <!-- Paused -->
            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center border border-secondary">
                <div class="fs-6">-</div>
                <div>Paused</div>
            </div>
            <!-- Date -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center border border-dark">
                <div class="fs-6">01/14/2025 - 01/14/2025</div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Students Records</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Roll No</th>
                                        <th>Date</th>
                                        <th>Dp</th>
                                        <th>Status</th>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Courses</th>
                                        <th>Total</th>
                                        <th>Rating</th>
                                        <th>Flag</th>
                                        <th>Affiliate</th>
                                        <th>Follow up</th>
                                        <th>Insights</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>50832</td>
                                        <td>14/Jan/2025</td>
                                        <td><img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt=""
                                                height="30" width="30" class="rounded"></td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>Arsalan Khan</td>
                                        <td>03114595277</td>
                                        <td>English</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>22645</td>
                                        <td>test</td>
                                        <td><a href="#">view</a></td>
                                        <td><a href="#">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>50832</td>
                                        <td>14/Jan/2025</td>
                                        <td><img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt=""
                                                height="30" width="30" class="rounded"></td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>Arsalan Khan</td>
                                        <td>03114595277</td>
                                        <td>English</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>22645</td>
                                        <td>test</td>
                                        <td><a href="#">view</a></td>
                                        <td><a href="#">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>50833</td>
                                        <td>15/Jan/2025</td>
                                        <td><img src="{{ asset('dist/img/user4-128x128.jpg') }}" alt=""
                                                height="30" width="30" class="rounded"></td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>Ayesha Malik</td>
                                        <td>03114595278</td>
                                        <td>Maths</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>22646</td>
                                        <td>completed</td>
                                        <td><a href="#">view</a></td>
                                        <td><a href="#">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>50834</td>
                                        <td>16/Jan/2025</td>
                                        <td><img src="{{ asset('dist/img/user5-128x128.jpg') }}" alt=""
                                                height="30" width="30" class="rounded"></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>Ali Rehman</td>
                                        <td>03114595279</td>
                                        <td>Science</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>22647</td>
                                        <td>pending</td>
                                        <td><a href="#">view</a></td>
                                        <td><a href="#">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>50835</td>
                                        <td>17/Jan/2025</td>
                                        <td><img src="{{ asset('dist/img/user6-128x128.jpg') }}" alt=""
                                                height="30" width="30" class="rounded"></td>
                                        <td><span class="badge badge-info">On Hold</span></td>
                                        <td>Samina Aziz</td>
                                        <td>03114595280</td>
                                        <td>History</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>22648</td>
                                        <td>test</td>
                                        <td><a href="#">view</a></td>
                                        <td><a href="#">view</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Roll No</th>
                                        <th>Dp</th>
                                        <th>Status</th>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Courses</th>
                                        <th>Total</th>
                                        <th>Rating</th>
                                        <th>Flag</th>
                                        <th>Affiliate</th>
                                        <th>Follow up</th>
                                        <th>Insights</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
