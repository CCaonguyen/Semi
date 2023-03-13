<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="shortcut icon" href="favicon.ico" sizes="small" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ | BTEC FPT</title>
</head>
<body>
    <div class="sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="logo">
                        <img src="Images/BTEC.webp">
                    </div>
                    <a class="active" href="homepage"><i class="fa-solid fa-house"></i>Trang Chủ</a>
                    <a href="attendance"><i class="fa-solid fa-user-check"></i>Điểm Danh</a>
                    <a href="schedule"><i class="fa-regular fa-clock"></i>Lịch Học</a>
                    <a href="#"><i class="fa-solid fa-list"></i>Danh Sách Hỗ Trợ</a>
                    <a href="#"><i class="fa-solid fa-headset"></i>Hỗ Trợ</a>
                </div>
                <div class="col-10">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12" style="background: url(Images/bg.jpg); background-position: calc(
                                    100% - 50px) 50%; background-size: cover; height: 300px; background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed; background-blend-mode: overlay; background-color: rgba(0, 0, 0, 0.5); display: flex; align-items: center; justify-content: center;">
                                    <div class="text">
                                        <h1>Chào mừng đến với BTEC FPT</h1>
                                        <h3>Welcome to BTEC FPT</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="news">
                                        <h3>Thông Báo</h3>
                                        <ul>
                                            <li><b>14/02/2023</b>: Sự kiên valentine cho sinh viên của trường cao đẳng anh quốc BTEC FPT</li>
                                            <li><b>15/02/2023</b>: Thông báo lịch thi tiếng anh Top-Notch 3</li>
                                            <li><b>18/02/2023</b>: Seminar ChatGPT - workshop cho ngành công nghệ thông tin</li>
                                            <li><b>22/02/2023</b>: Đăng ký thi lại cho sinh viên khóa 4 - hết hạn: 25/02/2023</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="news">
                                        <h3>News</h3>
                                        <ul>
                                            <li><b>14/02/2023</b>: Valentine event for students of British college BTEC FPT</li>
                                            <li><b>15/02/2023</b>: Announcement of Top-Notch 3 English exam schedule</li>
                                            <li><b>18/02/2023</b>: Seminar ChatGPT - workshop for the information technology industry</li>
                                            <li><b>22/02/2023</b>: Registration for re-examination for students of course 4 - expiration: 25/02/2023</li>
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
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <img src="Images/lgd.png">
                    </div>
                </div>
                <div class="col-9">
                    <h4>THÔNG TIN LIÊN HỆ</h4>
                    <p>Trụ sở chính Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    <p>BTEC Tower, Trinh Van Bo, Nam Tu Liem, Hanoi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    <div class="group-text">
                        <a href="">Cơ Sở Hà Nội</a>
                        <p>Phòng Công Tác Sinh Viên: <b>sro.btec.hn@fe.edu.vn</b></p>
                        <p>Phòng Tổ Chức Và Quản Lý Đào Tạo: <b>academic.btec.hn@fe.edu.vn</b></p>
                        <p>Bộ Phận Thu Ngân: <b>accounting.btec.hn@fe.edu.vn</b></p>
                        <p>Đường Dây Nóng: <b>024 730 99 588</b></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="group-text">
                        <a href="">Hanoi Campus</a>
                        <p>Academic Department: <b>academic.btec.hn@fe.edu.vn</b></p>
                        <p>SRO Department: <b>sro.btec.hn@fe.edu.vn</b></p>
                        <p>Finance Department: <b>accounting.btec.hn@fe.edu.vn</b></p>
                        <p>Hotline: <b>024 730 99 588</b></p>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>