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
                    <a href="attendance"><i class="fa-solid fa-user-check"></i>Quản Lý Điểm Danh</a>
                    <a class="active" href="course"><i class="fa-regular fa-clock"></i>Quản Lý Môn Học</a>
                    <a href="class"><i class="fa-solid fa-landmark"></i>Quản Lý Lớp Học</a>
                    <a href="#"><i class="fa-solid fa-list"></i>Danh Sách Hỗ Trợ</a>
                    <a href="#"><i class="fa-solid fa-headset"></i>Hỗ Trợ</a>
                </div>
                <div class="col-10">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <h3 style="font-weight: 600;">Course / Môn Học</h3>
                                <div class="col-8">
                                    <div class="table-attendance">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Major</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Lecturer</th>
                                                <th scope="col">Number of lessons</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Function</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Computing</td>                                             
                                                <td>Networking</td>
                                                <td>IT0501</td>
                                                <td>Le Van Thuan</td>
                                                <td>15</td>
                                                <td>20/02/2023</td>
                                                <td class="warning">Teaching</td>
                                                <td><a href="course_2"><i class="fa-solid fa-edit"></i> Edit</a></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <form action="#">
                                        <h5>Create Course</h5>
                                        <table>
                                            <tr>
                                                <td>Major</td>
                                                <td>
                                                    <select class="form-control" name="major" id="major">
                                                        <option value="Computing">Computing</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Engineering">Graphic</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Course</td>
                                                <td><input class="form-control" type="text" name="course" id="course"></td>
                                            </tr>
                                            <tr>
                                                <td>Class</td>
                                                <td>
                                                    <select name="class" id="class" class="form-control">
                                                        <option value="IT0501">IT0501</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lecturer</td>
                                                <td><input class="form-control" type="text" name="lecturer" id="lecturer"></td>
                                            </tr>
                                            <tr>
                                                <td>Number of lessons</td>
                                                <td><input class="form-control" type="text" name="number" id="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Start Date</td>
                                                <td><input class="form-control" type="date" name="date" id="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                    <select class="form-control" name="status" id="status">
                                                        <option value="Teaching">Teaching</option>
                                                        <option value="Finished">Finished</option>
                                                        <option value="Preparing">Preparing</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button class="btn-create" type="submit">Create</button></td>
                                            </tr>
                                        </table>
                                    </form>
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