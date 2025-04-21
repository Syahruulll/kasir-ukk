@extends('layouts.master')

@section('title', 'Home Page')

@section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="index.html" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Dashboard</h1>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (Auth::user()->role == 'admin')
                        <h3>Selamat Datang, {{ Auth::user()->nama }}!</h3>
                        <div class="row">
                            <div class="col-8">
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                            <div class="col-4">
                                <canvas id="myChart2" width="400" height="200"></canvas>
                            </div>
                         <div class="col-4">
                                <canvas id="myChart3" width="400" height="200"></canvas>


                        </div>
                    @else
                        <h3>Selamat Datang, {{ Auth::user()->nama }}!</h3>
                        <div class="card d-block m-auto text-center">
                            <div class="card-header">
                                <h5 class="card-title">Total Penjualan Hari ini</h5>
                            </div>
                            <div class="card-body text-center">
                                <div class="total-sales">{{ $todaySalesCount }}</div>
                                <p class="card-text">Jumlah total penjualan yang terjadi hari ini.</p>
                            </div>
                            <div class="card-footer">
                                <i class="far fa-clock me-2"></i>
                                Terakhir diperbarui: {{ $lastTransactionTime }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
      document.addEventListener('DOMContentLoaded', function() {
        const chartData = @json($chartData);
        const labels = chartData.map(item => item.date);
        const counts = chartData.map(item => item.count);
        const ctx1 = document.getElementById('myChart').getContext('2d');
        const barChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Penjualan',
                    data: counts,
                    backgroundColor: 'rgba(54, 162, 235, 0.4)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Jumlah Penjualan',
                        font: {
                            size: 16
                        }
                    },
                    legend: {
                        display: false
                    }
                }
            }
        });


        const productLabels = @json($productLabels);
        const productData = @json($productData);

        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const pieChart = new Chart(ctx2, {

            type: 'pie',
            data: {
                labels: productLabels,
                datasets: [{
                    data: productData,
                    backgroundColor: productLabels.map((_, index) => {
                        // Buat warna acak per produk
                        const r = Math.floor(Math.random() * 255);
                        const g = Math.floor(Math.random() * 255);
                        const b = Math.floor(Math.random() * 255);
                        return `rgba(${r}, ${g}, ${b}, 0.6)`;
                    }),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Presentasi Penjualan Produk',
                        font: {
                            size: 16
                        }
                    }
                }
            }
        });

    // Chart 3: Data Produk dan Stok
const ctx3 = document.getElementById('myChart3').getContext('2d');
const produkChart = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: @json($produkLabels),
        datasets: [{
            label: 'Jumlah Stok',
            data: @json($produkStokData),
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Stok Produk (Total: ' + @json($totalProduk) + ' produk)',
                font: {
                    size: 14
                }
            },
            tooltip: {
                callbacks: {
                    afterLabel: function(context) {
                        return 'Stok: ' + context.raw;
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Jumlah Stok'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Nama Produk'
                }
            }
        }
    }
});



    });
</script>
@endsection
