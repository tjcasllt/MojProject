<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<?php include('include/head.php'); ?>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header Section -->
    <?php include('include/header.php'); ?>
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>บทความ</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าหลัก</a></li>
              <li>บทความ</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content" class="bg-white">
      <div class="container">
        <div class="row sidebar-page">


          <!-- Page Content -->
          <div class="col-md-3 blog-box">
            <div class="member-photo">
               <img alt="" src="images/img-paper.png" />
            </div>
          </div>

          <div class="col-md-6 blog-box">
            <!-- Post Content -->
              <div class="post-content">
                <p> </p>
                <h2><a href="#">ชื่อบทความ...</a></h2>
                <p>ชื่อหน่วยงาน...</p>
                <ul class="post-meta">
                  <li>โดย <a href="#">ชื่อ-นามสกุล</a></li>
                  <li>23 สิงหาคม 2560</li>
                </ul>
                <p>
                  แจ๊กพอตฟลอร์เอ๋อ วัจนะ สคริปต์ คีตราชันเทรลเล่อร์สังโฆ คาแรคเตอร์พันธกิจแครอทเฮอร์ริเคน พอเพียงรูบิค ฟอยล์เทอร์โบสไตรค์เฟรชธรรมาภิบาล เนิร์สเซอรี่อุปทานสเปควิก ศิลปากรคลาสสิกพุดดิ้งเพรียวบาง บ๊อบเป่ายิ้งฉุบ แพกเกจแซมบ้า บูมกรอบรูปชาร์จ โต๊ะจีนโบรชัวร์คอนโด ปอดแหกมาร์เก็ตไอติมโมเต็ล ฟลอร์ แพ็ค จีดีพี ปิกอัพลอจิสติกส์วอลซ์สไปเดอร์มายาคติ โรแมนติคเพรียวบาง เบอร์เกอร์ อิกัวนาเบญจมบพิตร พุดดิ้งเคอร์ฟิวช็อปเปอร์ ตุ๋ยดยุคผลักดันยูโร มอคค่าเจี๊ยวซาร์ดีนซิ้ม จิ๊กโจ๋ศากยบุตรศิลปวัฒนธรรม เกย์ อีแต๋นพาร์ทเนอร์ร็อคมาราธอนกรีน ซาฟารี เทคคอนแท็คโต๊ะจีน สตรอเบอร์รีอิกัวนาหยวน เห่ยรูบิคโอเปอเรเตอร์ลีเมอร์ เจ็ตแพกเกจฮองเฮา เช็งเม้งไอติมคอปเตอร์โปรโมท ป่าไม้พาร์ทเนอร์กาญจน์กีวีนิรันดร์ ตะหงิด
                </p>
                <a class="main-button" href="#">อ่านต่อ <i class="fa fa-angle-right"></i></a>
              </div>
          </div>
          <!-- End Page Content-->


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Popular Posts widget -->
            <div class="tabs-section widget">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-star"></i>บทความยอดนิยม</a></li>
                <!-- <span class="pull-right" style="padding: 8px 0px;"><a href="#" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span> -->
              </ul>

              <!-- Tab panels -->
              <div class="tab-content widget-popular-posts">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <ul>
                    <?php  
                      for ($x = 0; $x <= 4; $x++) {
                        echo '<li>
                      <div class="widget-thumb">
                        <a href="#"><img src="images/img-news.png" alt="" /></a>
                      </div>
                      <div class="widget-content">
                        <h5><a href="#">ชื่อบทความ...</a></h5>
                        <span><i class="fa fa-calendar"></i> : 29/08/2560</span> <br>
                        <span><i class="fa fa-eye"></i> : 123 ครั้ง</span>
                      </div>
                      <div class="clearfix"></div>
                    </li>';
                      }
                    ?> 
                  </ul>
                </div>
              </div>
              <!-- End Tab Panels -->

            </div>

            <!-- Tags Widget -->
            <div class="tabs-section widget widget-tags">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-tag"></i>แท็ก</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <div class="tagcloud">
                    <a href="#">แท็ก1</a>
                    <a href="#">แท็ก2</a>
                    <a href="#">แท็ก3</a>
                    <a href="#">แท็ก4</a>
                    <a href="#">แท็ก5</a>
                    <a href="#">แท็ก6</a>
                    <a href="#">แท็ก7</a>
                    <a href="#">แท็ก8</a>
                    <a href="#">แท็ก9</a>
                    <a href="#">แท็ก10</a>
                    <a href="#">แท็ก11</a>
                  </div>
                </div>
              </div>
              <!-- End Tab Panels -->

            </div>

          </div>
          <!--End sidebar-->


        </div>
      </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer Section -->
    <?php include('include/footer.php'); ?>
    <!-- End Footer Section -->

  </div>
  <!-- End Container -->

  <?php include('include/bottom.php'); ?>

</body>

</html>