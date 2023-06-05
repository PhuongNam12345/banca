@extends('admin_layout')
@section('admin_content')

<div class="container text-center">
<span style="font-size: 35px; color:rgb(17, 8, 63)"> <b>Thống Kê Cửa Hàng</b></span>

<div class="market-updates ">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3 " >
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
             <div class="col-md-8 market-update-left">
             <h4>Khách Hàng</h4>
            <h3>{{ $khachhang }}</h3>

          </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-book" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Sản phẩm</h4>
                <h3>{{ $sanpham }}</h3>
             
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <div class="col-md-4 market-update-right">
                
                <i class="fa fa-tasks"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Loại sản phẩm</h4>
                <h3>{{ $loaisp }}</h3>
 
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-5">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-user-secret"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Nhà cung cấp</h4>
                <h3>{{ $ncc }}</h3>
 
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hàng</h4>
                <h3>{{ $donhang }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class='fa fa-bell'></i>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn chờ duyệt</h4>
                <h3>{{ $duyet }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class='fa fa-window-close'></i>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hủy</h4>
                <h3>{{ $donhuy }}</h3>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
   <div class="clearfix"> </div>

</div>
{{-- kksssssssssssssssssssssssssssssssssss --}}
<div class="row">
    <div class="col-md-6">
        <form method="get" action="#" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group ">
                {{-- <label for="thoigianLapBaoCao">Thời gian lập báo cáo</label>
                <input type="text" class="form-control" id="thoigianLapBaoCao">
                <span id="thoigianLapBaoCaoText" class="notice"></span>
            </div>
            <div class="form-group" style="display: none;"> --}}
                <label for="tuNgay">Từ ngày</label>
                <input type="date" class="form-control" id="tuNgay" name="tuNgay">
            </div>
            <div class="form-group " >
                <label for="denNgay">Đến ngày</label>
                <input type="date" class="form-control" id="denNgay" name="denNgay">
            </div>
            <button type="submit" class="btn btn-primary" id="btnLapBaoCao">Lập báo cáo</button>
        </form>
    </div>
    <div class="col-md-12">
        <canvas id="chartOfobjChart" style="width: 100%;height: 400px;"></canvas>
    </div>
</div>
<script type="text/javascript" src="{{ asset('public/frontend/vendors/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/vendors/bootstrap-datepicker/daterangepicker.min.js') }}"></script>
{{-- <script>
    $(document).ready(function() {
        $('#thoigianLapBaoCao').daterangepicker({
            "showWeekNumbers": true,
            "showISOWeekNumbers": true,
            "timePicker": true,
            "timePicker24Hour": true,
            "locale": {
                "format": "DD/MM/YYYY HH:mm:ss",
                "separator": " - ",
                "applyLabel": "Đồng ý",
                "cancelLabel": "Hủy",
                "fromLabel": "Từ",
                "toLabel": "Đến",
                "customRangeLabel": "Tùy chọn",
                "weekLabel": "T",
                "daysOfWeek": [
                    "CN",
                    "T2",
                    "T3",
                    "T4",
                    "T5",
                    "T6",
                    "T7"
                ],
                "monthNames": [
                    "Tháng 1",
                    "Tháng 2",
                    "Tháng 3",
                    "Tháng 4",
                    "Tháng 5",
                    "Tháng 6",
                    "Tháng 7",
                    "Tháng 8",
                    "Tháng 9",
                    "Tháng 10",
                    "Tháng 11",
                    "Tháng 12",
                ],
                "firstDay": 1
            },
            "startDate": "25/05/2023",
            "endDate": "25/06/2023",
            ranges: {
                'Hôm nay': [moment(), moment()],
                'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 ngày gần nhất': [moment().subtract(6, 'days'), moment()],
                'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                'Tháng rồi': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, function(start, end, label) {
            // Hiển thị thời gian đã chọn
            $('#thoigianLapBaoCaoText').html('Dữ liệu sẽ được thống kê từ <span style="font-weight: bold">' + start.format('DD/MM/YYYY, HH:mm') + '</span> đến <span style="font-weight: bold">' + end.format('DD/MM/YYYY, HH:mm') + '</span><br />Thời gian lập báo cáo có thể tốn vài phút, vui lòng bấm nút <span style="font-weight: bold">"Lập báo cáo"</span> và chờ đợi trong giây lát!');

            // Gán giá trị cho Ngày để gởi dữ liệu về Backend
            $('#tuNgay').val(start.format('YYYY-MM-DD HH:mm:ss'));
            $('#denNgay').val(end.format('YYYY-MM-DD HH:mm:ss'));
        });
    });
</script> --}}
<!-- Các script dành cho thư viện Numeraljs -->
<script src="{{ asset('public/frontend/vendors/numeral/numeral.min.js') }}"></script>
<script>
    // Đăng ký tiền tệ VNĐ
    numeral.register('locale', 'vi', {
        delimiters: {
            thousands: ',',
            decimal: '.'
        },
        abbreviations: {
            thousand: 'k',
            million: 'm',
            billion: 'b',
            trillion: 't'
        },
        ordinal: function(number) {
            return number === 1 ? 'một' : 'không';
        },
        currency: {
            symbol: 'vnđ'
        }
    });

    // Sử dụng locate vi (Việt nam)
    numeral.locale('vi');
</script>

<!-- Các script dành cho thư viện ChartJS -->
<script src="{{ asset('public/frontend/vendors/Chart.js/Chart.min.js') }}"></script>
<script>
    $(document).ready(function() {
        Chart.defaults.global.defaultFontColor = '#FFFFFF';
        // Chart.defaults.global.defaultFontFamily = 'Arial';
        Chart.defaults.global.defaultFontSize = 18;
        var objChart;
        var $chartOfobjChart = document.getElementById("chartOfobjChart").getContext("2d");

        $("#btnLapBaoCao").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ url('/bieudo') }}",
                method: "GET",
                data: {
                    tuNgay: $('#tuNgay').val(),
                    denNgay: $('#denNgay').val(),
                },
                success: function(response) {
                    var myLabels = [];
                    var myData = [];
                    $(response.data).each(function() {
                        
                        myLabels.push(moment(this.thoiGian).format('DD/MM/YYYY'));
                        myData.push(this.tongThanhTien);
                    });
                    myData.push(0); // creates a '0' index on the graph

                    if (typeof $objChart !== "undefined") {
                        $objChart.destroy();
                    }

                    $objChart = new Chart($chartOfobjChart, {
                        
                        // The type of chart we want to create
                        type: "line",

                        data: {
                            labels: myLabels,
                            datasets: [{
                                data: myData,
                                borderColor: "#9ad0f5",
                                backgroundColor: "#9ad0f5",
                                borderWidth: 1
                            }]
                        },

                        // Configuration options go here
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Báo cáo đơn hàng",
                                color: "red"
                             
                            },
                            scales: {
                                xAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Ngày nhận đơn hàng'
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        callback: function(value) {
                                            return numeral(value).format('0,0 $')
                                        }
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Tổng thành tiền'
                                    }
                                }]
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        return numeral(tooltipItem.value).format('0,0 $')
                                    }
                                }
                            },
                            responsive: true,
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        });
    });
</script>
	</div>
@endsection