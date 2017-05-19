@extends('layout.master')
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href=".public/css/slick-theme.css" rel="stylesheet">
    <link href="public/css/slick.css" rel="stylesheet">
    <link href="public/css/select2.css" rel="stylesheet">
    <link href="public/css/stylea744.css?v=3.1.9" rel="stylesheet">
    <link rel="stylesheet" href="public/css/modal4a744.css?v=3.1.9" type="text/css" media="all" />

    <link href="public/css/style_fixa744.css" rel="stylesheet">
    
    <link href="public/css/stylebxh.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/responsive6a744.css?v=3.1.9" type="text/css" media="all" />
@section('noidung')
<body id="page" >

<main>
    <div class="prize">
        <div class="container">
            <div class="title_box0">
                <h2 class="title_box">Xếp Hạng Tổng</h2>
            </div>
            <div class="row m8 box_prize">
                <div class="col-sm-6 p8">
                    <div class="prize_left">
                        <div class="info">
                            <h3 class="title_txt">JUNIOR</h3>
                            <ul>
                                <li>
                                    <div class="bold">Nguyễn Hoàng Hiếu</div>
                                    Tổng:30 Điểm
                                   
                                </li>
                                <li>
                                    <div class="bold">Phạm Quốc Dương</div>
                                    Tổng:30 Điểm
                                   
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                            </ul>
                        </div>
                        <div class="clr"></div>
                    </div>

                </div>
                <div class="col-sm-6 p8">
                    <div class="prize_right">
                       
                        <div class="info">
                            <h3 class="title_txt">SENIOR</h3>
                           <ul>
                                <li>
                                    <div class="bold">Nguyễn Hoàng Hiếu</div>
                                    Tổng:30 Điểm
                                   
                                </li>
                                <li>
                                    <div class="bold">Phạm Quốc Dương</div>
                                    Tổng:30 Điểm
                                   
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                                 <li>
                                    <div class="bold">Phạm Trần Hoài Thịnh</div>
                                    Tổng:30 Điểm
                                </li>
                            </ul>
                        </div>
                        <div class="clr"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="rankings" >
        <div class="container">
            <div class="bg_bxh_top"></div>
            <div class="bg_bxh">
                <div class="title_box0" data-anchor="rank-table">
                    <h2 class="title_box">Bảng xếp hạng</h2>
                </div>

                <div class="box_shadow">
                    <div class="list-container">
                        <div class="lc-content">
                            <div class="table_top">
                                <ul class="nav nav-tabs rankboard fl">
                                    <li class="active">
                                        <select class="loaibang">
                                            <option class="loaibang">JUNIOR</option>
                                            <option class="loaibang"v>SENIOR</option>
                                        </select>
                                    </li>
                                    <li> 
                                        <select class="kithi">
                                            <option class="kithi">Kì 1</option>
                                            <option class="kithi">Kì 2</option>
                                        </select>
                                    </li>
                                </ul>
                                <div class="search fr">
                                    <form class="search" method="post" action="https://hocmai.vn/thi-thu-thpt-quoc-gia/search.php" >
                                        <div class="form_search">
                                            <input name="query" id="query" type="text" class="form-control search_input" placeholder="Tìm kiếm">
                                            <button class="search-submit submit_button btn" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="board board-1 table-responsive table_responsive" data-type="1" data-top="20" data-month="4" data-round="1" data-year="2017" data-subject="3">
                                <div id="home" class="tab-pane fade in active">
                                    <table class="table table-striped table-bordered table-hover table-responsive text-center">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tài khoản</th>
                                            <th>Họ tên</th>
                                            <th>Trường</th>
                                            <th>Điểm</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>DoanNguyen</th>
                                            <th>Nguyễn Trung Đoàn</th>
                                            <th>Cao Đẳng Kĩ Thuật Cao Thắng</th>
                                            <th>8</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
</body>
@endsection