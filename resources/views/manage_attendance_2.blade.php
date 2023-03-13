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
    <title>Quản Lý Điểm Danh | BTEC FPT</title>
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
                    <a href="manage_attendance"><i class="fa-solid fa-user-check"></i>Quản Lý Điểm Danh</a>
                    <a class="active" href="course"><i class="fa-regular fa-clock"></i>Quản Lý Môn Học</a>
                    <a href="class"><i class="fa-solid fa-landmark"></i>Quản Lý Lớp Học</a>
                    <a href="#"><i class="fa-solid fa-list"></i>Danh Sách Hỗ Trợ</a>
                    <a href="#"><i class="fa-solid fa-headset"></i>Hỗ Trợ</a>
                </div>
                <div class="col-10">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="homepage">Trang Chủ</a></li>
                                      <li class="breadcrumb-item"><a href="manage_attendance">Quản Lý Điểm Danh</a></li>
                                      <li class="breadcrumb-item " aria-current="page">IT0501 </li>
                                    </ol>
                                </nav>
                                <h3 style="font-weight: 600;">Manage Attendance / Quản Lý Điểm Danh</h3>
                                <p>Class: IT0501</p>
                                <p>Date: 20/02/2023 | 9:30 AM - 11:30 AM</p>
                                <div class="col-12">
                                    <div class="table-attendance">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Student ID</th>
                                                    <th scope="col">Student Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col" colspan="2">Attendance</th>
                                                    <th scope="col">Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BH0001</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>nguyenvana@fpt.edu.vn</td>
                                                    <td><input class="form-check-input" type="checkbox" name="attendance" value="Present" id="Present">
                                                        <label for="Present">Present</label>
                                                    </td>
                                                    <td><input class="form-check-input" type="checkbox" name="attendance" value="Absent" id="Absent"> 
                                                        <label for="Absent">Absent</label>
                                                    </td>
                                                    <td><input class="form-control" type="text" name="note" id="note"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button class="btn-save">Back</button> 
                                <button class="btn-save">Save</button> 
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