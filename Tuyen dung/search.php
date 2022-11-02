<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TechJobs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Roboto Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- select 2 css -->
  <link rel="stylesheet" href="css/select2.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css copy/bootstrap.css">
    <link rel="stylesheet" href="css copy/style.css">
   <!-- main css -->
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
<div class="container-fluid d-flex justify-content-center" id="navbar">
        <nav class="navbar navbar-expand-md">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../HomeScreen/index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../About-us/view/client/About-us.php">Đội ngũ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../News/news.php">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tuyển dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact/contactForm.html">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../core/login.php">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>
<!-- (end) main nav -->

<div class="clearfix"></div>

<!-- search section -->
<div class="container-fluid search-fluid">
  <div class="container">
      <!-- content tab 1 -->
      <div class="tab-pane stab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form class="bn-search-form">
          <div class="row">
            <div class="col-md-10 col-sm-12">
              <div class="row">
                <div class="col-md-5">
                  <div class="input-group s-input-group">
                    <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                    <span><i class="fa fa-search"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-12">
              <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
            </div>
          </div>
        </form>  
      </div>
      <!-- (end) content tab 1 -->
      <!-- content tab 2 -->
      <div class="tab-pane stab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <form class="bn-search-form">
          <div class="row">
            <div class="col-md-10 col-sm-12">
                  <div class="input-group s-input-group w-100">
                    <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                    <span><i class="fa fa-search"></i></span>
                  </div>
            </div>
            <div class="col-md-2 col-sm-12">
              <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
            </div>
          </div>
        </form> 
      </div>
      <!-- (end) content tab 2 -->
    </div>

    </div>
  </div>
</div>
<!-- (end) search section -->



<div class="container-fluid">
  <div class="container search-wrapper">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-12">
            <div class="collapse show" id="collapseExample" style="">
              <div class="card card-body bg-card-body-filter">
                <div class="filter-bar">
                    <div class="filter-form">
                         <div class="filter-form-item">
                           <p>
                              <a id="clickc_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-topic" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Ngành nghề
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                              </a>
                            </p>
                            <div class="collapse show" id="filter-topic">
                              <div class="card o-card card-body">
                                <div class="filter-panel">
                                    <div class="panel-content">
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Tất cả ngành nghề</a>
                                            <span class="filter-count">1,000</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Lập trình viên</a>
                                            <span class="filter-count">555</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kiểm thử phần mềm</a>
                                            <span class="filter-count">233</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Thiết kế đồ họa</a>
                                            <span class="filter-count">100</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Tuyển dụng (HR)</a>
                                            <span class="filter-count">99</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kĩ sư cầu nối</a>
                                            <span class="filter-count">95</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">77</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Kỹ sư mạng</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                    </div>
                                </div>
                               </div>
                            </div>

                            <p>
                              <a id="clickc2_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-price" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Mức Lương
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                              </a>
                            </p>
                            <div class="collapse show" id="filter-price">
                              <div class="card o-card card-body">
                                <div class="filter-panel">
                                    <div class="panel-content">
                                        <div class="filter-topic filter-input-price">
                                            <form class="al-price-filter">
                                                <span class="_fpblock">
                                                    <input type="number" class="if-price" id="" placeholder="50,000">
                                                </span>
                                                <span class="_fpblock _line">
                                                    <p>-</p>
                                                </span>
                                                <span class="_fpblock">
                                                    <input type="number" class="if-price" id="" placeholder="1,000,000">
                                                </span>
                                                 <span class="_fpblock">
                                                     <button type="submit" class="sb-fprice"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                                 </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               </div>
                            </div>
                                </div>
                                <div class="filter-form-item">
                                    <p>
                                      <a id="clickc3_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-video-duration" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Đánh giá
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                      </a>
                                    </p>
                                    <div class="collapse show" id="filter-video-duration">
                                      <div class="card o-card card-body">
                                        <div class="filter-panel">
                                            <div class="panel-content">
                                                <div class="filter-rating">
                                                    <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                        <span>(từ 5 sao)</span>
                                                    </a>
                                                </div>
                                                <div class="filter-rating">
                                                    <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span>(từ 4 sao)</span>
                                                    </a>
                                                </div>
                                                <div class="filter-rating">
                                                    <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span>(từ 3 sao)</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                    </div>
                            <p>
                              <a id="clickc4_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-provider" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Cấp bậc
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                              </a>
                            </p>
                            <div class="collapse show" id="filter-provider">
                              <div class="card o-card card-body">
                                <div class="filter-panel">
                                    <div class="panel-content">
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Tất cả cấp bậc</a>
                                            <span class="filter-count">2,450</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Thực tập sinh</a>
                                            <span class="filter-count">555</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Nhân viên</a>
                                            <span class="filter-count">233</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Trưởng nhóm</a>
                                            <span class="filter-count">100</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Trưởng phòng</a>
                                            <span class="filter-count">99</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Phó giám đốc</a>
                                            <span class="filter-count">95</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Giám đốc</a>
                                            <span class="filter-count">77</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Tổng giám đốc điều hành</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Thư kí</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                        <div class="filter-topic cotain-common-filter">
                                            <a href="#" class="filter-action">Khác</a>
                                            <span class="filter-count">50</span>
                                        </div>
                                    </div>
                                </div>
                               </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        window.onload = function() {screenCollapse()};

                        let ele = document.getElementsByClassName("collapse");

                        function screenCollapse() { 
                            if(window.innerWidth < 720) {
                                $(".collapse").removeClass("show");
                                $(".collapse").addClass("hide");
                            }
                        }
                    </script>
              </div>
            </div> <!-- ./ collapse -->
                </div>
    <div class="col-md-9 col-sm-12 col-12"> 
      <div class="job-board-wrap">
        <div class="job-group">
          <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                  </div>
                  <div class="job-company">
                    <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Đà Nẵng</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/alipay-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">Fullstack .NET Developer (Angular/React)</a>
                  </div>
                  <div class="job-company">
                    <a href="#">Orient Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Hà Nội</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> .NET</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/02/2020</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/nvg-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">Frontend Developer (JavaScript, ReactJS)</a>
                  </div>
                  <div class="job-company">
                    <a href="#">mgm technology</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Đà Nẵng</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> JavaScript, ReactJS</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/luxoft-vietnam-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">IVI System Test Engineer</a>
                  </div>
                  <div class="job-company">
                    <a href="#">NVG TECHNOLOGY</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Đà Nẵng</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Javascript</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                  </div>
                  <div class="job-company">
                    <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Đà Nẵng</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="job pagi">
              <div class="job-content">
                <div class="job-logo">
                  <a href="#">
                    <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                  </a>
                </div>

                <div class="job-desc">
                  <div class="job-title">
                    <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                  </div>
                  <div class="job-company">
                    <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
Đà Nẵng</a>
                  </div>

                  <div class="job-inf">
                    <div class="job-main-skill">
                      <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
                    </div>
                    <div class="job-salary">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                      <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                    </div>
                    <div class="job-deadline">
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                    </div>
                  </div>
                </div>
                <div class="wrap-btn-appl">
                  <a href="#" class="btn btn-appl">Apply Now</a>
                </div>
              </div>
            </div>

</div>
      </div>
      
    </div>
    </div>
  </div>
</div>




<!-- footer -->

<footer class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="logo-part">
                        <img src="images/logo.png" class="w-75 logo-footer"
                            style="margin: auto; display: block; padding-top: 18%;">
                        <h4 style="font-size: 15px; margin-top: 7%; color: #DFDFDF;">Trung tâm Ứng cứu khẩn cấp không
                            gian mạng Việt Nam</h4>
                    </div>
                </div>
                <div class="col-md-7 px-4" style="line-height: 25px;">
                    <h6 style="color: #DFDFDF;"> Thông tin liên hệ</h6>
                    <span class="create"><img src="images/phone-call.png" /> Hotline:</span><br>
                    <p class="contact-info">0869 100317</p>
                    <span class="create" style="padding-left: 20px;"> Fax:</span><br>
                    <p class="contact-info">84.24.36404425</p>
                    <span class="create"><img src="images/mail.png" /> Email:</span><br>
                    <p class="contact-info">office@vncert.vn</p>
                    <span class="create"><img src="images/maps-and-flags.png" /> Địa chỉ:</span>
                    <p class="contact-info">Tầng 5, 115 Trần Duy Hưng, Trung Hoà, Cầu Giấy, Hà Nội</p>
                </div>
                <div class="col-md-2">
                    <h6 style="color: #DFDFDF;">Hỗ trợ</h6>
                    <ul id="footer-menu">
                        <li> <a href="../HomeScreen/index.php"> Trang chủ</a> </li>
                        <li> <a href="../About-us/view/client/About-us.php"> Đội ngũ</a> </li>
                        <li> <a href="#"> Tin tức</a> </li>
                        <li> <a href="../Tuyen dung/search.php"> Tuyển dụng</a> </li>
                        <li> <a href="../Contact/contactForm.html"> Liên hệ</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>


<!-- (end) footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/readmore.js"></script>
    <script type="text/javascript">
      $('.catelog-list').readmore({
        speed: 75,
        maxHeight: 150,
        moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
        lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
      });
    </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jobdata.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <!-- Owl Stylesheets Javascript -->
    <script src="js/owlcarousel/owl.carousel.js"></script>
    <!-- Read More Plugin -->

    

</body>
</html>