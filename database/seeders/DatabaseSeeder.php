<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'CodeLean',
                'email' => 'CodeLean@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('brands')->insert([
            [
                'id' => 1,
                'brand_name' => 'Hades',
                'brand_desc' => 'Hades',
            ],
            [
                'id' => 2,
                'brand_name' => 'Gonz',
                'brand_desc' => 'Gonz',
            ],
            [
                'id' => 3,
                'brand_name' => '5theway',
                'brand_desc' => '5theway',
            ],
            [
                'id' => 4,
                'brand_name' => 'Yame',
                'brand_desc' => 'Yame',
            ],
            [
                'id' => 5,
                'brand_name' => 'Hnoss',
                'brand_desc' => 'Hnoss',
            ],
            [
                'id' => 6,
                'brand_name' => 'Converse',
                'brand_desc' => 'Converse',
            ],
            [
                'id' => 7,
                'brand_name' => 'Nike',
                'brand_desc' => 'Nike',
            ],
            [
                'id' => 8,
                'brand_name' => 'No Brand',
                'brand_desc' => 'No Brand',
            ],

        ]);

        DB::table('product_categories')->insert([
            [
                'id' => 1,
                'category_name' => 'Men',
                'category_desc'=>'Thời trang Nam',
            ],
            [
                'id' => 2,
                'category_name' => 'Women',
                'category_desc'=>'Thời trang Nữ',
            ],
            [
                'id' => 3,
                'category_name' => 'Jacket',
                'category_desc'=>'Áo khoác',
            ],
            [
                'id' => 4,
                'category_name' => 'Shoes',
                'category_desc'=>'Giày',
            ],
            [
                'id' => 5,
                'category_name' => 'Accessory',
                'category_desc'=>'Phụ kiện',
            ],
            [
                'id' => 6,
                'category_name' => 'Secondhand',
                'category_desc'=>'Secondhand',
            ],

        ]);



        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Áo Thun Cổ Tròn Đơn Giản',
                'path' => '1.jpg',
                'description' => 'Chất liệu: Cotton 2 chiều,Thành phần: 100% Cotton,Co dãn 2 chiều,Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát',
                'content' => '',
                'price' => 180000,
                'qty' => 20,
                'discount' => 150000,

                'tag' =>'New',
            ],
            [
                'id' => 2,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Áo Thun Cổ Trụ Đơn Giản J01',
                'path' => '2.jpg',
                'description' => 'Chất liệu: Cotton 4 Chiều,Thành phần: 95% cotton 5% Spandex,Co giãn tốt,Độ bền cao',
                'content' => null,
                'price' => 180000,
                'qty' => 20,
                'discount' => 150000,
                'tag' =>'New',

            ],
            [
                'id' => 3,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Áo Thun Linh Vật Teddy M6',
                'path' => '3.jpg',
                'description' => 'Chất liệu: Cotton 2 Chiều,Thành phần: 100% cotton,Thân thiện,Thấm hút thoát ẩm,Mềm mại,Kiểm soát mùi,Điều hòa nhiệt,Họa tiết in dẻo',
                'content' => null,
                'price' => 185000,
                'qty' => 20,
                'discount' => null,
                'tag' =>'New',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Áo Thun 3 Lỗ Đơn Giản B01',
                'path' => '4.jpg',
                'description' => 'Chất liệu: Cotton 4 Chiều,Thành phần: 95% cotton 5% Spandex,Co giãn tốt,Độ bền cao',
                'content' => null,
                'price' => 150000,
                'qty' => 20,
                'discount' => 120000,

                'tag' =>'New',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => "GANGSTA TEE",
                'path' => '5.jpg',
                'description' => 'Chất liệu: Cotton 2 chiều 100%, in lụa,Thiết kế và sản xuất bởi Hades Studio.',
                'content' => null,
                'price' => 380000,
                'qty' => 20,
                'discount' => 340000,

                'tag' =>'New',
            ],
            [
                'id' => 6,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' =>  'Varsity FF Pink V2 Gonz',
                'path' => '6.jpg',
                'description' => 'Thông tin sản phẩm ,Ống tay và thân áo được làm nhung tăm,Cổ áo, cổ tay và tà áo được bo vải gân,Áo sở hữu hai túi ngoài ,Form áo cơ bản, phù hợp với nhiều dáng vóc ,Họa tiết trên áo thêu 100%',
                'content' => null,
                'price' => 750000,
                'qty' => 20,
                'discount' => 375000,

                'tag' =>'New',
            ],
            [
                'id' => 7,
                'brand_id' => 5,
                'product_category_id' => 2,
                'name' => 'ÁO BẸT VAI DÁNG RỘNG',
                'path' => '7.jpg',
                'description' => 'Miêu tả: ÁO BẸT VAI DÁNG RỘNG.Đặc tính: Phóng khoáng - Nữ tính - Trẻ trung.Thể loại: Trang phục dạo phố, công sở.',
                'content' => null,
                'price' => 499000,
                'qty' => 20,
                'discount' => 299000,

                'tag' =>'New',
            ],
            [
                'id' => 8,
                'brand_id' => 5,
                'product_category_id' => 2,
                'name' => 'ÁO CROP CỔ VUÔNG ',
                'path' => '8.jpg',
                'description' => 'Miêu tả: ÁO CROP CỔ VUÔNG TAY PHỒNG TẦNG.Đặc tính: Cổ điển - Nữ Tính.Thể loại: Trang phục dạo phố, công sở, tiệc, du lịch.',
                'content' => null,
                'price' => 399000,
                'qty' => 20,
                'discount' => 299000,

                'tag' =>'New',
            ],
            [
                'id' => 9,
                'brand_id' => 5,
                'product_category_id' => 2,
                'name' => 'ĐẦM TAY BÍ CỔ TRỤ',
                'path' => '9.jpg',
                'description' => 'Miêu tả: ĐẦM TAY BÍ CỔ TRỤ.Đặc tính: Cổ điển - Thanh lịch.Thể loại: Trang phục dự tiệc, công sở.',
                'content' => null,
                'price' => 599000,
                'qty' => 20,
                'discount' => 399000,

                'tag' =>'New',
            ],
            [
                'id' => 10,
                'brand_id' => 2,
                'product_category_id' => 3,
                'name' => 'VARSITY GONZ BLACK',
                'path' => '10.jpg',
                'description' => 'Thông tin sản phẩm ,Ống tay và thân áo được làm nhung tăm,Cổ áo, cổ tay và tà áo được bo vải gân,Áo sở hữu hai túi ngoài ,Form áo cơ bản, phù hợp với nhiều dáng vóc ,Họa tiết trên áo thêu 100%.',
                'content' => null,
                'price' => 750000,
                'qty' => 20,
                'discount' => 375000,

                'tag' =>'New',
            ],
            [
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'Áo hoodie sói HADES',
                'path' => '11.jpg',
                'description' => 'Áo hoodie cao cấp này chất nỉ ngoại cotton, êm mịn, dày dặn thấm hút mồ hôi tốt, mặc thoải mái. phù hợp với mọi tuổi teen.',
                'content' => null,
                'price' => 550000,
                'qty' => 20,
                'discount' => 350000,

                'tag' =>'New',
            ],
            [
                'id' => 12,
                'brand_id' => 3,
                'product_category_id' => 3,
                'name' => 'COURT JACKET – WHITE',
                'path' => '12.jpg',
                'description' => 'Áo hoodie cao cấp này chất nỉ ngoại cotton, êm mịn, dày dặn thấm hút mồ hôi tốt, mặc thoải mái. phù hợp với mọi tuổi teen.',
                'content' => null,
                'price' => 630000,
                'qty' => 20,
                'discount' => null,

                'tag' =>'New',
            ],
            [
                'id' => 13,
                'brand_id' => 5,
                'product_category_id' => 3,
                'name' => 'ÁO KHOÁC THÔ TÚI HỘP',
                'path' => '13.jpg',
                'description' => 'Miêu tả: Khoác jacket tay dài cài khóa kéo đồng, lai áo và lai tay nhún thun, có túi hộp hai bên.',
                'content' => null,
                'price' => 450000,
                'qty' => 20,
                'discount' => null,

                'tag' =>'New',
            ],
            [
                'id' => 14,
                'brand_id' => 6,
                'product_category_id' => 4,
                'name' => 'Converse Chuck Taylor',
                'path' => '14.jpg',
                'description' => 'THÔNG TIN SẢN PHẨM Thương hiệu Converse Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam',
                'content' => null,
                'price' => 1999000,
                'qty' => 20,
                'discount' => 799000,

                'tag' =>'New',
            ],
            [
                'id' => 15,
                'brand_id' => 6,
                'product_category_id' => 4,
                'name' => 'Giày Converse Hồng',
                'path' => '15.jpg',
                'description' => 'THÔNG TIN SẢN PHẨM Thương hiệu Converse Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam',
                'content' => null,
                'price' => 1800000,
                'qty' => 20,
                'discount' => 799000,

                'tag' =>'New',
            ],
            [
                'id' => 16,
                'brand_id' => 7,
                'product_category_id' => 4,
                'name' => 'NIKE AF1 ORIGINAL',
                'path' => '16.jpg',
                'description' => 'THÔNG TIN SẢN PHẨM Thương hiệu Nike chính hãng',
                'content' => null,
                'price' => 2400000,
                'qty' => 20,
                'discount' => 899000,

                'tag' =>'New',
            ],
            [
                'id' => 17,
                'brand_id' => 7,
                'product_category_id' => 4,
                'path' => '17.jpg',
                'name' => 'Air Jordan 1 Retro High OG',
                'description' => 'THÔNG TIN SẢN PHẨM Thương hiệu Nike chính hãng',
                'content' => null,
                'price' => 12500000,
                'qty' => 20,
                'discount' => 1500000,

                'tag' =>'New',
            ],
            [
                'id' => 18,
                'brand_id' => 8,
                'product_category_id' => 5,
                'name' => 'Dây chuyền mặt ngôi sao',
                'path' => '18.jpg',
                'description' => 'Vĩnh viễn không mất màu Thoài mái tắm biển Dây dài 60 cm có thể cắt ngắn',
                'content' => null,
                'price' => 129000,
                'qty' => 20,
                'discount' => 99000,

                'tag' =>'New',
            ],
            [
                'id' => 19,
                'brand_id' => 8,
                'product_category_id' => 5,
                'name' => 'Nhẫn nam hình đầu lâu',
                'path' => '19.jpg',
                'description' => 'Vĩnh viễn không mất màu Thoài mái tắm biển ',
                'content' => null,
                'price' => 170000,
                'qty' => 20,
                'discount' => 120000,

                'tag' =>'New',
            ],
            [
                'id' => 20,
                'brand_id' => 8,
                'product_category_id' => 5,
                'path' => '20.jpg',
                'name' => 'Bông tai Titan họa tiết La Mã ',
                'description' => 'Bông tai Titan họa tiết La Mã được thiết kế dựa trên ý tưởng các ký tự số của người La Mã tạo nên nét độc đáo và mới lạ cho người đeo ngắn',
                'content' => null,
                'price' => 69000,
                'qty' => 20,
                'discount' => 65000,

                'tag' =>'New',
            ],
            [
                'id' => 21,
                'brand_id' => 8,
                'product_category_id' => 5,
                'name' => 'nón Snapback',
                'path' => '21.jpg',
                'description' => 'Mũ snapback qp với kiểu dáng độc đáo và thiết kế vành nón rộng và phẳng, mũ Snapback qp logo đồng tĩnh điện giúp bạn có được phong cách thời trang cá tính, nổi bật.',
                'content' => null,
                'price' => 145000,
                'qty' => 20,
                'discount' => 99000,

                'tag' =>'New',
            ],
            [
                'id' => 22,
                'brand_id' => 8,
                'product_category_id' => 6,
                'name' => 'Áo Khoác Kaki 2hand',
                'path' => '22.jpg',
                'description' => 'Hàng bên Mình là hàng 2Hand. Cond từ 9/10 bao lỗi rách nha.',
                'content' => null,
                'price' => 750000,
                'qty' => 1,
                'discount' => 200000,

                'tag' =>'Secondhand',
            ],
            [
                'id' => 23,
                'brand_id' => 8,
                'product_category_id' => 6,
                'name' => 'Quần Baggy Jean (V2)',
                'path' => '23.jpg',
                'description' => 'Hàng bên Mình là hàng 2Hand. Cond từ 9/10 bao lỗi rách nha.',
                'content' => null,
                'price' => 350000,
                'qty' => 1,
                'discount' => 120000,

                'tag' =>'Secondhand',
            ],
            [
                'id' => 24,
                'brand_id' => 8,
                'product_category_id' => 6,
                'name' => 'Quần Baggy Nam',
                'path' => '24.jpg',
                'description' => 'Hàng bên Mình là hàng 2Hand. Cond từ 9/10 bao lỗi rách nha.',
                'content' => null,
                'price' => 350000,
                'qty' => 2,
                'discount' => 120000,

                'tag' =>'Secondhand',
            ],
            [
                'id' => 25,
                'brand_id' => 8,
                'product_category_id' => 6,
                'path' => '25.jpg',
                'name' => 'Tai nghe hình tai Mèo',
                'description' => 'Tai nghe hình tai Mèo cực dễ thương <3!, Thiết kế gọn gàng nhỏ nhắn., Đèn LED 1 màu., Tai Mèo có 2 chế độ LED, Không có mic phù hợp với stream',
                'content' => null,
                'price' => 1200000,
                'qty' => 1,
                'discount' => 250000,

                'tag' =>'Secondhand',
            ],
            [
                'id' => 26,
                'brand_id' => 8,
                'product_category_id' => 6,
                'name' => 'Gile túi hộp 351',
                'path' => '26.jpg',
                'description' => 'Hàng bên Mình là hàng 2Hand. Cond từ 9/10 bao lỗi rách nha.',
                'content' => null,
                'price' => 499000,
                'qty' => 1,
                'discount' => 100000,

                'tag' =>'Secondhand',
            ],
            [
                'id' => 27,
                'brand_id' => 8,
                'product_category_id' => 6,
                'name' => 'Giày tây nam cao cấp',
                'path' => '27.jpg',
                'description' => 'Hàng bên Mình là hàng 2Hand. Cond từ 9/10 bao lỗi rách nha.',
                'content' => null,
                'price' => 350000,
                'qty' => 1,
                'discount' => 120000,

                'tag' =>'Secondhand',

            ],

        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => '1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => '2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => '3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => '4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => '5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => '6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => '7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => '8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => '9.jpg',
            ],
            [
                'product_id' => 10,
                'path' => '10.jpg',
            ],
            [
                'product_id' => 11,
                'path' => '11.jpg',
            ],
            [
                'product_id' => 12,
                'path' => '12.jpg',
            ],
            [
                'product_id' => 13,
                'path' => '13.jpg',
            ],
            [
                'product_id' => 14,
                'path' => '14.jpg',
            ],
            [
                'product_id' => 15,
                'path' => '15.jpg',
            ],
            [
                'product_id' => 16,
                'path' => '16.jpg',
            ],
            [
                'product_id' => 17,
                'path' => '17.jpg',
            ],
            [
                'product_id' => 18,
                'path' => '18.jpg',
            ],
            [
                'product_id' => 19,
                'path' => '19.jpg',
            ],
            [
                'product_id' => 20,
                'path' => '20.jpg',
            ],
            [
                'product_id' => 21,
                'path' => '21.jpg',
            ],
            [
                'product_id' => 22,
                'path' => '22.jpg',
            ],
            [
                'product_id' => 23,
                'path' => '23.jpg',
            ],
            [
                'product_id' => 24,
                'path' => '24.jpg',
            ],
            [
                'product_id' => 25,
                'path' => '25.jpg',
            ],
            [
                'product_id' => 26,
                'path' => '26.jpg',
            ],
            [
                'product_id' => 27,
                'path' => '27.jpg',
            ],

        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [

                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [

                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'customer_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog_1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'customer_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog_2.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
            [
                'customer_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog_3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'customer_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog_4.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
            [
                'customer_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'image' => 'blog_5.jpg',
                'category' => 'MODEL',
                'content' => '',
            ],
            [
                'customer_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog_6.jpg',
                'category' => 'CODELEANON',
                'content' => '',
            ],
        ]);

        DB::table('tbl_admin')->insert([
            [
                'admin_id'=>1,
                'admin_email'=>'tinofashionshop@gmail.com',
                'admin_password'=>md5('123456'),
                'admin_name' =>'Tino Shop',
                'admin_phone'=>'0987987987'
            ]
        ]);
        DB::table('tbl_customer')->insert([
            [
                'customer_id'=>1,
                'customer_email'=>'tinofashionshop@gmail.com',
                'customer_password'=>md5('123456'),
                'customer_name' =>'Tino Shop',
                'customer_phone'=>'0987987987'
            ]
        ]);

    }
}

