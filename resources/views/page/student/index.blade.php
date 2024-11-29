@extends('welcome')

@section('content')
<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Filter -->
                <div class="showing-list">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <div class="view-icons">
                                    <a href="students-grid.html" class="list-view"><i class="feather-grid"></i></a>
                                    <a href="students-list.html" class="list-view active"><i class="feather-list"></i></a>
                                </div>
                                <div class="show-result">
                                    <h4>Showing 1-9 of 50 results</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->

                <div class="row">

                    <!-- Instructor List -->
                    <div class="col-lg-12">
                        <div class="student-grid-blk">

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-01.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Charles Dickens</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Brazil</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-02.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Gabriel Palmer</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Italy</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-03.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">James Lemire</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Louisiana</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-04.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Olivia Murphy</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>France</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-05.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Rebecca Swartz</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Iceland</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-06.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Betty Richards</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Louisiana</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-07.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Jeffrey Montgomery</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Brazil</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-08.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Brooke Hayes</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>United States</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-09.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Gertrude Shorter</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Louisiana</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-10.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">David Garza</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Tunisia</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->

                            <!-- Row alignment -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-11.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Vivian Winders</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Louisiana</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="student-list flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="img-fluid" alt="Img" src="assets/img/students/student-12.jpg">
                                            </a>
                                        </div>
                                        <div class="student-content">
                                            <h5><a href="student-profile.html">Sean Leon</a></h5>
                                            <h6>Student</h6>
                                            <div class="student-info">
                                                <div class="loc-blk d-flex justify-content-center">
                                                    <img src="assets/img/students/loc-icon.svg" class="me-1" alt="Img">
                                                    <p>Spain</p>
                                                </div>
                                                <ul class="list-unstyled inline-inline profile-info-social">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Row alignment -->
                        </div>
                    </div>
                    <!-- /Instructor List -->


                </div>

                <!-- /pagination -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination lms-page">
                            <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                            </li>
                            <li class="page-item first-page active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /pagination -->

            </div>
        </div>
    </div>
</div>
@endsection
