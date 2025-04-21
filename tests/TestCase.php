<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
//
        // const ctx3 = document.getElementById('myChart3').getContext('2d');
        // const pieChart = new Chart(ctx4, {
        //     type: 'pie',
        //     data: {
        //         labels: productLabels,
        //         datasets: [{
        //             data: productData,
        //             backgroundColor: productLabels.map((_, index) => {
        //                 // Buat warna acak per produk
        //                 const r = Math.floor(Math.random() * 255);
        //                 const g = Math.floor(Math.random() * 255);
        //                 const b = Math.floor(Math.random() * 255);
        //                 return `rgba(${r}, ${g}, ${b}, 0.6)`;
        //             }),
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         plugins: {
        //             title: {
        //                 display: true,
        //                 text: 'Presentasi Penjualan Produk',
        //                 font: {
        //                     size: 16
        //                 }
        //             }
        //         }
        //     }
        // });

        // const ctx4 = document.getElementById('myChart4').getContext('2d');
        // const pieChart = new Chart(ctx4, {
        //     type: 'pie',
        //     data: {
        //         labels: productLabels,
        //         datasets: [{
        //             data: productData,
        //             backgroundColor: productLabels.map((_, index) => {
        //                 // Buat warna acak per produk
        //                 const r = Math.floor(Math.random() * 255);
        //                 const g = Math.floor(Math.random() * 255);
        //                 const b = Math.floor(Math.random() * 255);
        //                 return `rgba(${r}, ${g}, ${b}, 0.6)`;
        //             }),
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         plugins: {
        //             title: {
        //                 display: true,
        //                 text: 'Presentasi Penjualan Produk',
        //                 font: {
        //                     size: 16
        //                 }
        //             }
        //         }
        //     }
        // });

        // // Pie Chart for Product Sales Percentage
        // const ctx2 = document.getElementById('myChart2').getContext('2d');
        // const pieChart = new Chart(ctx2, {
        //     type: 'pie',
        //     data: {
        //         labels: ['jpo', 'bebek', 'rulminions', 'Obat', 'red orchid flower'],
        //         datasets: [{
        //             data: [25, 20, 15, 30, 10],
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.7)',
        //                 'rgba(54, 162, 235, 0.7)',
        //                 'rgba(255, 206, 86, 0.7)',
        //                 'rgba(75, 192, 192, 0.7)',
        //                 'rgba(153, 102, 255, 0.7)'
        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',
        //                 'rgba(153, 102, 255, 1)'
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         plugins: {
        //             title: {
        //                 display: true,
        //                 text: 'Persentase Penjualan Produk',
        //                 font: {
        //                     size: 16
        //                 }
        //             },
        //             legend: {
        //                 position: 'right'
        //             }
        //         }
        //     }
        // });
