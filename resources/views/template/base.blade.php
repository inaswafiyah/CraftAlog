@extends('template.index')

@section('title', 'Dashboard AdminCraft')

@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">CRAFTALOG</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$produk}}</h3>

                                <p>Tutorials</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{route('index.tutorial')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><sup style="font-size: 20px">%</sup></h3>
                                <p>Produk</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('index.produk')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><!-- {{$user}} --> 12</h3> <!-- Sesuaikan dengan jumlah like -->

                                <p>Jumlah User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{route('data.user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3> <!-- Sesuaikan dengan jumlah Unique Visitors -->

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- Row for the chart -->
                <div class="row mt-4"> <!-- Tambahkan margin top untuk memberi jarak dari small boxes -->
                    <div class="col-lg-12">
                        <div id="transactionChart" style="width: 100%; height: 400px;"></div> <!-- Ubah height jika ingin lebih besar -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  var transaksiDataduk = @json($user2); // Laravel blade syntax
  var labels = transaksiDataduk.map(function(e) {
    return e.date;
  });
  var data = transaksiDataduk.map(function(e) {
    return e.count;
  });

  Highcharts.chart('transactionChart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Transactions per Day'
    },
    xAxis: {
        categories: labels,
        title: {
            text: 'Date'
        }
    },
    yAxis: {
        title: {
            text: 'Number of Transactions'
        }
    },
    colors: ['#FF69B4', '#FF1493', '#FFC0CB', '#FFB6C1', '#DB7093'],
    series: [{
        name: 'Transactions',
        data: data
    }]
});
</script>
@endsection