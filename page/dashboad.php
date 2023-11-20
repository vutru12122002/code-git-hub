<?php 
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
    }


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Web blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif; 
        }      
    .navbar-nav .nav-link {
      font-size: 30px;
    }

        .logo {
            float: left;
            font-size: 24px;
            font-weight: bold;
            max-width: 100px;
            height: 100px;
            margin-left: 150px;
        }

        .menu {
            float: left;
            margin-left: 50px;
        }

        .menu a {
            margin-left: 30px;
            text-decoration: none;
            color: #333;
        }

        .search-bar {
            width: 50px;
            margin-left: 120px;
            padding: 00px;
            
        }

        .login-register {
            float: right;
            margin-left: 400px;
        }

        .login-register a {
            margin-left: 10px;
            text-decoration: none;
            color: #333;
        }
        .login {
          border-radius: 50px;
          text-align: center;
          padding: 15px;
          border: 2px solid black;
          font-size: 18px;
        }
        .input{
            height: 25px;
            font-size: 16px;
            width: 350px;
        }
        .full-width-image {
            width: 100%;
            overflow: hidden;
            margin-top: 120px;
          }
          
          .full-width-image img {
            width: 100%;
            height: auto;
          }
          .iteam_load{
            margin-left: 130px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            display: flex;
          }
          .iteam_load_2 {
            float: right;
            margin-right: 80px;
          }
          .iteam_load_1 {
            margin-right: 50px;
            }
          .item{
            margin-left: 70px;
          }
          .iteam_blog{
            text-align: center;
            width: 800px;
            justify-content: center;
            margin-left: 450px;
            font-size: 24px;
            margin-bottom: 630px;
          }
          .like{
            width: 900px;
            height: 230px;
            background-color: rgb(172, 175, 175);
            border-radius: 100px;
            justify-content: center;
            margin-left: 400px;
            line-height: 50px;
            font-size: 30px;
          }
          .like_1{
            width: 400px;
            height: 100px;
            background-color: rgb(50, 51, 52);
            border-radius: 100px;
            justify-content: center;
            display: flex;
            margin-left: 660px;
            margin-top: 15px;
            text-align: center;
            line-height: 100px;
            color: white; 
            font-size: 60px;
          }
          .like_1:hover{
            cursor: pointer;
            background-color: white;
            color: black;
          }
          .like_hi{
            display: flex;
            margin-left: 100px;
            margin-top: 10px;
          }
          .like:hover{
            cursor: pointer;
            background-color: white;
          }
          .like_two{
            text-align: center;
          }
          .like_it{
            margin-left: 50px;
            margin-right: 50px;
          }
          .internet{
            margin-left: 49px;
            margin-top: 10px;
            background-image: none;
          }
          .picture{
            background-image: url('../image/picture.jpg'); 
            background-size: cover; 
            background-position: center 0px; 
            height: 700px;
          }
          .iteam_blog1{
            text-align: center;
            width: 800px;
            justify-content: center;
            margin-left: 450px;
            font-size: 60px;
            margin-bottom: 0px;
          }
          .picture_1 {
            width: 100%;
            background-size: cover;
            height: 100%;
            margin-top: 0px;
            background-image: url('../image/background.jpg');
            position: relative;
        }
          .end{
            background-color:#333;
            display: flex;
            justify-content: center;
            color: white;
          }
          .end_2_image{
            margin-left: 600px;
            margin-top: 10px;
            height: 90%;
            width: 300px;
          }
          .picture_1 .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 28px;
            text-align: center;
            padding: 20px;
       
          }
          .font{
            margin-top: 50px;
            margin-left: 100px;
            margin-bottom: 80px;
            margin-right: 100px;
          }
          .ketnoi{
            display: flex;
            justify-content: center; 
            margin-left: 50px;
          }
          .ketnoi_1{
            margin-left: 40px;
            margin-top: 30px;
          }
          .add{
            display: flex;
            justify-content: center; 
          }
          li{
            font-size: 21px;
          }
          .login::after{
            background-color: rgb(172, 175, 175);
          }
          .styte_image{
            width: 100px;
          }
    </style> 
</head>
<body>
    <?php 
        include '../inc/NavBar.php';
	 ?>
    <div class="full-width-image">
        <img src="../image/am-thuc.jpg" alt="Ảnh" />
    </div>
    <div class="item">
        <img src="../image/iteams.png" alt="">
    </div>
    <div class="iteam_load">
       <div class="iteam_load_1"> 
        <p>Để sinh tồn thuở hồng hoang, con người sơ khai đã biết săn bắt và hái lượm cây dại. Nhưng phải đến khi làm chủ được ngọn lửa, cuộc sống của con người đã hoàn toàn thay đổi, từ đây, họ biết đến chế biến thực phẩm thành vô số món ăn.</p>
       <p> Trải qua hàng nghìn năm phát triển, con người đã xây dựng được một nền ẩm thực vô cùng đa dạng và phong phú. YFOOD sẽ dẫn dắt bạn đọc khám phá hành trình lịch sử ẩm thực đầy thú vị, những câu chuyện đằng sau những gì chúng ta ăn hay bí quyết giữ trọn hương vị thông qua hàng triệu món ăn thức uống nổi tiếng trên toàn thế giới.</p>
         <p>Người La Mã cổ đại nhâm nhi món gì? Bằng cách nào mà củ khoai tây khiêm nhường lại định hình nên lịch sử? Và phải chăng burger tảo sẽ trở thành món ăn nhanh của tương lai? Cả một thế giới ẩm thực muôn vàn sắc màu đang chờ chúng ta khám phá đấy!</p>
        </div>
        <div class="iteam_load_2"><img src="../image/Yfood.png" alt=""></div>
    </div>
    <div class="picture">
    <div class="iteam_blog">
        <p>YFOOD - chung tay bảo tồn và phát huy sự đa dạng ẩm thực - văn hóa của tất cả các quốc gia trên thế giới.</p>
        <P>Cùng nhau, chúng ta hãy tạo nên bản đồ ẩm thực xuyên biên giới.</p>
    </div>
   

    <div class="like">
       <div class="like_two">YFOOD Highlights</div>
        <div class="like_hi">
        <div class="like_it">
            <div class="internet"><span class="icon-twitter"></div>
            <h2>130.000+</h2>
        </div>
        <div class="like_it">
            <div class="internet"><span class="icon-facebook"></div>
            <h2>150.000+</h2>
        </div>
        <div class="like_it">
            <div class="internet"><span class="icon-instagram"></div>
            <h2>105.000+</h2>
        </div>
    </div>
    </div>
    <div class="like_1">
        1.000.000+
    </div>
    <div class="iteam_blog1">
         Bài viết đã được chia sẻ
    </div>
    <section class="ftco-section bg-light">
      <div class="container">
      <div class="carousel-testimony owl-carousel ftco-owl">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha1.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Khám phá ẩm thực Việt Nam. Học món Việt!</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha2.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Đi tìm đặc trưng trong nền ẩm thực Việt.</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha3.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Nét đặc trưng trong văn hoá ẩm thưc Việt.</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha4.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Đi Tìm Đặc Trưng Trong Nền Ẩm Thực Việt</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha5.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Ẩm thực Việt thời hiện đại.</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha6.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Ẩm thực Việt xưa và nay: Hấp dẫn và nổi danh bốn phương</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha7.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Đưa văn hoá ẩm thực Việt thành tài sản quốc gia</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha8.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Ẩm thực Việt Nam: Tinh hoa các món ăn Bắc - Trung - Nam</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha9.png');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Khám phá ẩm thực Việt Nam</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha10.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">ẨM THỰC VIỆT NAM TRONG MẮT NGƯỜI NƯỚC NGOÀI, QUỐC TẾ</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha11.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">
 
 Tin tức
  Từ khóa gợi ý: Minh Long Cuộc thi Chiếc thìa vàngTin tức
 Văn hoá ẩm thực Việt Nam - Nhật Bản: Khác biệt và tương đồng</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha12.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Cuộc thi "Tự hào hàng Việt": Bánh mì lan tỏa giá trị ẩm thực Việt Nam</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha13.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Ẩm thực Việt Nam - nét đặc sắc vùng miền</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha14.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Ẩm Thực Việt Nam: Tinh Hoa Các Món Ngon Việt Nam Đặc Sắc & Hấp Dẫn Nhất</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha15.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">Nov 05, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Nhà văn hóa Hữu Ngọc: Đôi nét về văn hóa ẩm thực Việt Nam</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha16.jpg');">
              </a>
              <div class="text p-3 d-block">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">The Travel: Ẩm thực Việt Nam thuộc top ngon nhất thế giới</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha17.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Văn hóa ẩm thực Việt Nam với sự cân bằng cùng nét đặc trưng riêng biệt</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog_single.php" class="block-20" style="background-image: url('../image/khampha18.jpg');">
              </a>
              <div class="text p-3">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">ẨM THỰC VIỆT NAM NGÀY TẾT</a></h3>
              </div>
            </div>
          </div>
        </div>
       
        </div> -->
      </div>
    </section>
    
    <div class="picture_1">
    <div class="overlay">
    <div class="font">
      <p>YFOOD là diễn đàn chia sẻ và thảo luận về văn hóa ẩm thực thế giới. Chúng tôi cung cấp cho bạn các công thức nấu ăn ngon, giàu dinh dưỡng, giữ trọn hương vị riêng, thông tin về các loại thực phẩm, cùng với lời khuyên của chuyên gia, đầu bếp về thực phẩm và sức khỏe, nhằm xây dựng đời sống ẩm thực phong phú trong mỗi gia đình.</p>
      <p>Cùng với đó, chúng tôi muốn lan tỏa văn hóa tinh thần của con người trong ẩm thực, chính là sự thể hiện nét đẹp trong văn hóa giao tiếp, là sự cư xử giữa người với người trong bữa ăn, làm vui lòng nhau qua thái độ ứng xử lịch lãm, có giáo dục. Việc ăn uống đều có những phép tắc, lề lối riêng, từ bản thân, đến trong gia đình, trong các mối quan hệ ngoài xã hội.</p>
      <p> Tất cả các công thức nấu ăn của chúng tôi đều được phát triển với sự cộng tác của tất cả người dùng trên toàn thế giới với mong muốn xây dựng một diễn đàn để chia sẻ, thảo luận, giữ gìn nét tinh hoa thực, quảng bá và phát triển nền ẩm thực của mỗi quốc gia. Bất kỳ quảng cáo nào trên YFOOD đều được đánh dấu rõ ràng và ranh giới giữa biên tập và quảng cáo không bao giờ bị xóa nhòa.</p>
      <p>Bằng cách đăng ký Yfood.com,  bạn sẽ có quyền truy cập vào tất cả các tính năng phổ biến nhất trên trang web của chúng tôi. Hãy cùng nhau khám phá văn hóa ẩm thực trên toàn thế giới cùng YFOOD!</p>
    </div>
    </div>
    </div>
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ultim8.</h2>
              <p>Hãy cùng nhau khám phá văn hóa ẩm thực trên toàn thế giới cùng YFOOD!</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Questions</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../image/khampha1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Khám phá ẩm thực Việt Nam. Học món Việt!</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 05, 2023</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../image/khampha2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Đi tìm đặc trưng trong nền ẩm thực Việt.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 05, 2023</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact Info</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">79 Đ. Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+0 123 4567 890</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">123@contact123.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank">Team 1</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Get a Quote" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>