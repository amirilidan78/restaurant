<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        $meals = [
            [
                [
                    "name" => "قرمه سبزی",
                ],
                [
                    "description" => "یک قورمه سبزی یا قرمه سبزی خوشمزه و به روغن افتاده ، قورمه سبزی که سبزی هاش به اندازه قاعده استفاده شده باشه و مهمتر از این که در انتخاب لیمو عمانی دقت کنیم تا تلخ نباشند و خورشت قورمه سبزی رو تلخ نکنند.مطمئنن اگر این دو مورد رعایت بشه یعنی نصف راه رو رفتید و با کمی ترفند و حوصله یک قورمه سبزی مجلسی و جا افتاده تهیه خواهید کرد. ",
                    "images" => [],
                    "price" => 45000,
                ],
            ],
            [
                [
                    "name" => "ماکارونی",
                ],
                [
                    "description" => "ماکارونی یکی از گونه های پاستا می باشد که همانطور که مطمئنا می دنید اصالت آن متعلق به کشور ایتالیا می باشد. ماکارونی از محبوبیت بالایی در میان مردن جهان برخوردار است و به همین دلیل یکی از پر مصرف ترین غذاها در کل دنیا می باشد.",
                    "images" => [],
                    "price" => 50000,
                ],
            ],
            [
                [
                    "name" => "عدس پلو",
                ],
                [
                    "description" => "عدس پلو یکی از غذاهای محبوب ایرانی است که به دو صورت ساده و مجلسی طبخ می شود. این غذای خوشمزه علاوه بر اینکه یک غذای خانگی است مانند غذاهایی مثل خورش قیمه به عنوان نذری هم در مراسم های مذهبی پخش می شود.",
                    "images" => [],
                    "price" => 35000,
                ],
            ],
            [
                [
                    "name" => "چلو مرغ زعفرانی",
                ],
                [
                    "description" => "چلو مرغ زعفرانی از غذاهای خوشمزه و پرطرفدار ایرانی است که تقریبا در هر مهمانی و جشن و مراسمی سرو می شود. طرز تهیه این غذای خوشمزه روش های خاص خود را دارد و به خصوص برای کسانی که تمایلی به صرف زمان زیاد برای آشپزی ندارند، غذایی مناسب است.",
                    "images" => [],
                    "price" => 65000,
                ],
            ],
        ] ;

        foreach ( $meals as $meal ) {
            Meal::query()->updateOrCreate(...$meal) ;
        }
    }
}