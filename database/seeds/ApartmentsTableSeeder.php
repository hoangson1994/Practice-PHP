<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
                'ten_chungcu' => 'Chung cu 1',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [
                'ten_chungcu' => 'Chung cu 2',
                'dia_chi' => 'Hoan Kiem-Ha Noi',
                'gia_ban' => '500000000',
                'thongtin_chung' => '100m2',
                'thongtin_chitiet' => 'huong tay, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [
                'ten_chungcu' => 'Chung cu 3',
                'dia_chi' => 'Ha Dong-Ha Noi',
                'gia_ban' => '100000000',
                'thongtin_chung' => '120m2',
                'thongtin_chitiet' => 'huong bac, 3 phong ngu, 2 wc',
                'hinh_daidien' => 'http://www.duanvinhomes.vn/Uploads/Image/bat-dong-san/chung-cu-khong-chi-la-lua-chon-cua-gioi-tre-2.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [
                'ten_chungcu' => 'Chung cu 4',
                'dia_chi' => 'Dong Da-Ha Noi',
                'gia_ban' => '300000000',
                'thongtin_chung' => '200m2',
                'thongtin_chitiet' => 'huong dong, 3 phong ngu, 3 wc',
                'hinh_daidien' => 'https://lh5.googleusercontent.com/-yrP2dBktoZM/U-eqdhWX8OI/AAAAAAAAALQ/Koaq7EoNH10/s720/chung-cu-ciputra-01.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 5',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '600000000',
                'thongtin_chung' => '250m2',
                'thongtin_chitiet' => 'huong dong, 4 phong ngu, 2 wc',
                'hinh_daidien' => 'http://thongtinchungcu.com/wp-content/uploads/2016/10/chung-cu-hong-kong-tower.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 6',
                'dia_chi' => 'Tay Ho-Ha Noi',
                'gia_ban' => '250000000',
                'thongtin_chung' => '180m2',
                'thongtin_chitiet' => 'huong nam, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://thongtinchungcu.com.vn/wp-content/uploads/2016/12/phoi-canh-chung-cu-eurowindow-river-park-long-bien-1024x704.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 7',
                'dia_chi' => 'Ba Dinh-Ha Noi',
                'gia_ban' => '950000000',
                'thongtin_chung' => '450m2',
                'thongtin_chitiet' => 'huong dong, 5 phong ngu, 4 wc',
                'hinh_daidien' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-sun-grand-city-luong-yen-1.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 8',
                'dia_chi' => 'My Dinh-Ha Noi',
                'gia_ban' => '450000000',
                'thongtin_chung' => '350m2',
                'thongtin_chitiet' => 'huong dong, 3 phong ngu, 2 wc',
                'hinh_daidien' => 'http://thongtinnhadat24.com/wp-content/uploads/2017/06/chung-cu-the-two-residence3.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 9',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '260000000',
                'thongtin_chung' => '250m2',
                'thongtin_chitiet' => 'huong dong, 3 phong ngu, 3 wc',
                'hinh_daidien' => 'http://www.khahomex.com.vn/assets/uploads/myfiles/images/project/trucgiang4.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 10',
                'dia_chi' => 'Time City-Ha Noi',
                'gia_ban' => '850000000',
                'thongtin_chung' => '220m2',
                'thongtin_chitiet' => 'huong dong, 3 phong ngu, 3 wc',
                'hinh_daidien' => 'http://nhadatxanhmienbac.com/wp-content/uploads/2017/07/du-an-chung-cu-new-horizon-city-87-linh-nam-01.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 11',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 12',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 13',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 14',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 15',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 16',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 17',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 18',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 19',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ],
            [ 'ten_chungcu' => 'Chung cu 20',
                'dia_chi' => 'Cau Giay-Ha Noi',
                'gia_ban' => '200000000',
                'thongtin_chung' => '150m2',
                'thongtin_chitiet' => 'huong dong, 2 phong ngu, 2 wc',
                'hinh_daidien' => 'http://file4.batdongsan.com.vn/2016/03/29/0I4XNtd4/20160329103632-19b9.jpg',
                'trang_thai' => 1,
                'created_at' => date("Y-m-d H:i"),
                'updated_at' => date("Y-m-d H:i")
            ]
        ]);
    }
}