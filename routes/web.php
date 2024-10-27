<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rafly Alfarizi', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Perkembangan Teknologi AI dalam Kehidupan Sehari-hari',
            'author' => 'Rafly Alfarizi',
            'body' => 'Kecerdasan Buatan (AI) kini menjadi bagian penting dari kehidupan 
            sehari-hari, mulai dari asisten virtual hingga rekomendasi film di platform streaming. 
            Teknologi AI terus berkembang, membantu berbagai sektor seperti kesehatan, pendidikan, 
            dan transportasi. Misalnya, AI membantu dokter mendiagnosis penyakit lebih cepat dan akurat. 
            Di sektor transportasi, AI mendukung pengembangan kendaraan otonom yang dapat mengurangi angka 
            kecelakaan lalu lintas. Namun, penerapan AI juga menghadapi tantangan, seperti privasi data dan 
            etika penggunaan, yang perlu diatasi agar teknologi ini dapat dimanfaatkan secara aman dan berkelanjutan.'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Tips Meningkatkan Produktivitas di Era Digital',
            'author' => 'Rafly Alfarizi',
            'body' => 'Di era digital, produktivitas sering kali terhambat oleh distraksi dari media sosial dan aplikasi 
            hiburan. Untuk meningkatkan produktivitas, penting untuk membangun kebiasaan yang baik, seperti mengatur jadwal 
            harian, menetapkan prioritas, dan menggunakan teknik seperti Pomodoro untuk fokus pada tugas dalam waktu tertentu. 
            Penggunaan aplikasi manajemen waktu, seperti Trello atau Notion, juga bisa membantu mengatur tugas dan mengurangi 
            kebingungan. Di samping itu, penting untuk menjaga keseimbangan antara pekerjaan dan waktu istirahat agar tetap produktif 
            sepanjang hari.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Perkembangan Teknologi AI dalam Kehidupan Sehari-hari',
            'author' => 'Rafly Alfarizi',
            'body' => 'Kecerdasan Buatan (AI) kini menjadi bagian penting dari kehidupan 
            sehari-hari, mulai dari asisten virtual hingga rekomendasi film di platform streaming. 
            Teknologi AI terus berkembang, membantu berbagai sektor seperti kesehatan, pendidikan, 
            dan transportasi. Misalnya, AI membantu dokter mendiagnosis penyakit lebih cepat dan akurat. 
            Di sektor transportasi, AI mendukung pengembangan kendaraan otonom yang dapat mengurangi angka 
            kecelakaan lalu lintas. Namun, penerapan AI juga menghadapi tantangan, seperti privasi data dan 
            etika penggunaan, yang perlu diatasi agar teknologi ini dapat dimanfaatkan secara aman dan berkelanjutan.'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Tips Meningkatkan Produktivitas di Era Digital',
            'author' => 'Rafly Alfarizi',
            'body' => 'Di era digital, produktivitas sering kali terhambat oleh distraksi dari media sosial dan aplikasi 
            hiburan. Untuk meningkatkan produktivitas, penting untuk membangun kebiasaan yang baik, seperti mengatur jadwal 
            harian, menetapkan prioritas, dan menggunakan teknik seperti Pomodoro untuk fokus pada tugas dalam waktu tertentu. 
            Penggunaan aplikasi manajemen waktu, seperti Trello atau Notion, juga bisa membantu mengatur tugas dan mengurangi 
            kebingungan. Di samping itu, penting untuk menjaga keseimbangan antara pekerjaan dan waktu istirahat agar tetap produktif 
            sepanjang hari.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
