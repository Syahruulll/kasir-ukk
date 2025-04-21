<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


// const memberCtx = document.getElementById('memberChart').getContext('2d');
    // const memberChart = new Chart(memberCtx, {
    //     type: 'pie',
    //     data: {
    //         labels: @json($memberLabels),
    //         datasets: [{
    //             label: 'Jumlah Transaksi',
    //             data: @json($memberCounts),
    //             backgroundColor: [
    //                 'rgba(75, 192, 192, 0.6)',   // Warna untuk Member
    //                 'rgba(255, 99, 132, 0.6)'    // Warna untuk Non Member
    //             ],
    //             borderColor: '#fff',
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         responsive: true,
    //         plugins: {
    //             title: {
    //                 display: true,
    //                 text: 'Perbandingan Transaksi Member vs Non-Member'
    //             }
    //         }
    //     }
    // });


     

// // Chart 4: Data User
// // Chart 4: Data User
// const ctx4 = document.getElementById('myChart4').getContext('2d');
// const userChart = new Chart(ctx4, {
//     type: 'pie',
//     data: {
//         labels: @json($userNames),
//         datasets: [{
//             label: 'Daftar User',
//             data: Array(@json($userNames).length).fill(1), // Setiap user dihitung 1
//             backgroundColor: @json($userNames).map(() => {
//                 // Generate warna random untuk setiap user
//                 const r = Math.floor(Math.random() * 255);
//                 const g = Math.floor(Math.random() * 255);
//                 const b = Math.floor(Math.random() * 255);
//                 return `rgba(${r}, ${g}, ${b}, 0.6)`;
//             }),
//             borderColor: 'rgba(255, 255, 255, 0.8)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         responsive: true,
//         plugins: {
//             title: {
//                 display: true,
//                 text: 'Daftar User (Total: ' + @json($totalUser) + ')',
//                 font: {
//                     size: 14
//                 }
//             },
//             legend: {
//                 position: 'right',
//                 labels: {
//                     boxWidth: 12
//                 }
//             },
//             tooltip: {
//                 callbacks: {
//                     label: function(context) {
//                         return context.label;
//                     }
//                 }
//             }
//         }
//     }
// });



// ->timezone('Asia/Jakarta')
