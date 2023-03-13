<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm Danh | BTEC FPT</title>
</head>
<body>
    <div class="sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="logo">
                        <img src="Images/BTEC.webp">
                    </div>
                    <a href="homepage"><i class="fa-solid fa-house"></i>Trang Chủ</a>
                    <a href="attendance"><i class="fa-solid fa-user-check"></i>Điểm Danh</a>
                    <a class="active" href="schedule"><i class="fa-regular fa-clock"></i>Lịch Học</a>
                    <a href="#"><i class="fa-solid fa-list"></i>Danh Sách Hỗ Trợ</a>
                    <a href="#"><i class="fa-solid fa-headset"></i>Hỗ Trợ</a>
                </div>
                <div class="col-10">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h3 style="font-weight: 600;">Schedule / Lịch Học</h3>
                                    <div class="table-attendance">
                                        <table>
                                            <tr>
                                                <th>Date</th>
                                                <th>Slot</th>
                                                <th>Group Name</th>
                                                <th>Subject</th>
                                                <th>Lecturer</th>
                                            </tr>
                                            <tr>
                                                <td>20/02/2023</td>
                                                <td>1</td>
                                                <td>PBIT17101</td>
                                                <td>Programming</td>
                                                <td>Ngo Thi Mai Loan</td>
                                            </tr>
                                            <tr>
                                                <td>20/02/2023</td>
                                                <td>1</td>
                                                <td>PBIT17101</td>
                                                <td>Programming</td>
                                                <td>Ngo Thi Mai Loan</td>
                                            </tr>
                                            <tr>
                                                <td>20/02/2023</td>
                                                <td>1</td>
                                                <td>PBIT17101</td>
                                                <td>Programming</td>
                                                <td>Ngo Thi Mai Loan</td>
                                            </tr>
                                            <tr>
                                                <td>20/02/2023</td>
                                                <td>1</td>
                                                <td>PBIT17101</td>
                                                <td>Programming</td>
                                                <td>Ngo Thi Mai Loan</td>
                                            </tr>
                                            <tr>
                                                <td>20/02/2023</td>
                                                <td>1</td>
                                                <td>PBIT17101</td>
                                                <td>Programming</td>
                                                <td>Ngo Thi Mai Loan</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <b>Note/Lưu ý:</b>
                                    <ul>
                                        <li>Slot 1: 7:30 AM - 9:30 AM</li>
                                        <li>Slot 2: 10:00 AM - 12:00 AM</li>
                                        <li>Slot 3: 12:30 PM - 14:30 PM</li>
                                        <li>Slot 4: 15:00 PM - 17:00 PM</li>
                                        <li>Slot 5: 17:30 PM - 19:30 PM</li>
                                    </ul>
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