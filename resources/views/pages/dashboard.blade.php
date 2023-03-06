@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
         
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard </h1> 
                    </div>
                    
                   </div>
              </div>
           @if(Session::get('userlevel')=='1')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card-group">
                <!-- Column -->
                <div class="card">
                  <div class="card-body text-center">
                    <h4 class="text-center text-primary">Unique Visit</h4>
                    <h2>1200</h2>
                    <div class="row pt-2 pb-2">
                      <!-- Column -->
                      <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20">
                          <i class="display-8 bi bi-person-circle"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 border-end">
                        <h4 class="font-weight-medium mb-0">
                          <i class="ri-arrow-up-s-line fs-6 text-success"></i>
                          <br>
                          12056
                        </h4>
                      </div>
                      <div class="col-6">
                        <h4 class="font-weight-medium mb-0">
                          <i class="ri-arrow-down-s-line fs-6 text-danger"></i>
                          <br>
                          145
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                  <div class="card-body text-center">
                    <h4 class="text-center text-danger">Total Visit</h4>
                    <h2>1200</h2>
                    <div class="row pt-2 pb-2">
                      <!-- Column -->
                      <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-danger css-bar-20">
                          <i class="display-8 ri-star-line"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 border-end">
                        <h4 class="font-weight-medium mb-0">
                          <i class="fs-6 ri-arrow-up-s-line text-success"></i>
                          <br>
                          21456
                        </h4>
                      </div>
                      <div class="col-6">
                        <h4 class="font-weight-medium mb-0">
                          <i class="fs-6 ri-arrow-down-s-line text-danger"></i>
                          <br>
                          145
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                  <div class="card-body text-center">
                    <h4 class="text-center text-cyan">Bounce rate</h4>
                    <h2>1200</h2>
                    <div class="row pt-2 pb-2">
                      <!-- Column -->
                      <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-success css-bar-20">
                          <i class="display-8 bi bi-bag-check-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 border-end">
                        <h4 class="font-weight-medium mb-0">
                          <i class="fs-6 ri-arrow-up-s-line text-success"></i>
                          <br>
                          12465
                        </h4>
                      </div>
                      <div class="col-6">
                        <h4 class="font-weight-medium mb-0">
                          <i class="fs-6 ri-arrow-down-s-line text-danger"></i>
                          <br>
                          145
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
              </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Students</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="adminlte/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span> <span class="badge bg-primary">Pending</span> <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="adminlte/assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="badge bg-success">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="adminlte/assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="badge bg-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
             @elseif(Session::get('userlevel')=='2')
             <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Teachers</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="adminlte/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span> <span class="badge bg-primary">Pending</span> <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="adminlte/assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="badge bg-success">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="adminlte/assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <span class="badge bg-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            @else
                <h4>some error occured</h4>

                 @endif
@stop