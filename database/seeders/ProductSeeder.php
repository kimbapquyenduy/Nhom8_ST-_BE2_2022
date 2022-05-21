<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_name' => 'PAPAYA',
                'product_price' => '12000',
                'product_img' => 'papaya.jpg',
                'product_description' => 'Papaya is a delicious tropical fruit native to northern Mexico, it is also known as the "sun orange".',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '12',
                'expire_date' => '2022-04-30',
                'manufacture_id' => '1',
                'type_id' => '1',
                'review_id' => '1'
            ],
            [
                'product_name' => 'SOLID FRUITS',
                'product_price' => '15000',
                'product_image' => 'trairan.jpg',
                'product_description' => 'The snake fruit is an exotic tropical plant belonging to the Palm family. The homeland of the Snake fruit is Southeast Asia.',
                'product_feature' => '0',
                'stock' => '̀50',
                'sale_amount' => '17',
                'expire_date' => '2022-04-29',
                'manufacture_id' => '2',
                'type_id' => '2',
                'review_id' => '2'
            ],
            [
                'product_name' => 'MANGO',
                'product_price' => '20000',
                'product_image' => 'mango.jpg',
                'product_description' => 'Mango is a tropical evergreen tree that grows up to 20 meters tall. The fruit is oval and yellow in color. The pulp of the fruit is dense and juicy, with a sweet taste',
                'product_feature' => '1',
                'stock' => '20',
                'sale_amount' => '19',
                'expire_date' => '2022-04-24',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '3'
            ],
            [
                'product_name' => 'ORANGE',
                'product_price' => '9000',
                'product_image' => 'instagram-img-06.jpg',
                'product_description' => 'Orange (lat.Citrus sinensis) is a fruit tree of the genus Citrus of the Rute family, one of the most common citrus trees in the tropics and subtropics.',
                'product_feature' => '1',
                'stock' => '80',
                'sale_amount' => '42',
                'expire_date' => '2022-04-22',
                'manufacture_id' => '2',
                'type_id' => '1',
                'review_id' => '1'
            ],
            [
                'product_name' => 'DILL',
                'product_price' => '5000',
                'product_image' => 'gallery-img-11.jpg',
                'product_description' => 'It is a perennial herb that belongs to the celery family. Stems are straight, slender, with white flowers. The tree can reach 3 meters in height.',
                'product_feature' => '0',
                'stock' => '40',
                'sale_amount' => '22',
                'expire_date' => '2022-04-22',
                'manufacture_id' => '3',
                'type_id' => '2',
                'review_id' => '2'
            ],
            [
                'product_name' => 'CARROT',
                'product_price' => '10000',
                'product_image' => 'blog-img-01.jpg',
                'product_description' => 'Eating carrots contains vitamin A, vitamin C, carotenoids, potassium and antioxidants, not only good for eyes, but also gives you healthy skin,',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '32',
                'expire_date' => '2022-04-20',
                'manufacture_id' => '2',
                'type_id' => '1',
                'review_id' => '1'
            ],
            [
                'product_name' => 'GREEN BEAN',
                'product_price' => '20000',
                'product_image' => 'gallery-img-08.jpg',
                'product_description' => 'The bright green cylindrical seeds are 4 to 6 mm long, 3.5 to 4.5 mm in diameter. The seed umbilicus running along the length of the seed is bright white.',
                'product_feature' => '0',
                'stock' => '100',
                'sale_amount' => '82',
                'expire_date' => '2022-04-26',
                'manufacture_id' => '2',
                'type_id' => '2',
                'review_id' => '1'
            ],
            [
                'product_name' => 'AVOCADO',
                'product_price' => '15000',
                'product_image' => 'avocado.jpg',
                'product_description' => 'An avocado is a bright green fruit with a large pit and dark leathery skin. They re also known as alligator pears or butter fruit. Avocados are a favorite of the produce section. They re the go-to ingredient for guacamole dips. And they re turning up in everything from salads and wraps to smoothies and even brownies',
                'product_feature' => '1',
                'stock' => '50',
                'sale_amount' => '20',
                'expire_date' => '2022-06-26',
                'manufacture_id' => '3',
                'type_id' => '2',
                'review_id' => '1'
            ],
            [
                'product_name' => 'COCONUT KUMQUAT',
                'product_price' => '14900',
                'product_image' => 'coconutkumquat.jpg',
                'product_description' => 'Coconut and kumquat juice is a cooling beverage easy to drink, and beneficial to health. Enjoying a glass of fresh coconut kumquat juice in such hot weather will be very interesting.',
                'product_feature' => '0',
                'stock' => '10',
                'sale_amount' => '6',
                'expire_date' => '2022-06-22',
                'manufacture_id' => '1',
                'type_id' => '3',
                'review_id' => '1'
            ],
            [
                'product_name' => 'AVOCADO SMOTHIES',
                'product_price' => '20000',
                'product_image' => 'avocadojucie.jpg',
                'product_description' => 'It s sweet, thick and creamy and tastes like an avocado-flavored milkshake. The traditional version uses a lot of condensed milk to sweeten the drink and create a thick milkshake-like texture. However, this is a lightened version that tastes just as creamy and delicious',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '14',
                'expire_date' => '2022-06-22',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '2'
            ],
            [
                'product_name' => 'BLUEBERRY SMOTHIES',
                'product_price' => '25000',
                'product_image' => 'blue.jpg',
                'product_description' => 'A protein smoothie is a combination of water or some form of dairy product, protein powder, fruits, and vegetables. They can be consumed any part of the day and are used as protein supplement for those who want to increase their protein intake. Protein powder can have a chalky taste when mixed individually by itself with milk or water. The protein smoothie improves the taste of the protein powder through addition of fruits or other sweeteners. Common ingredients include bananas, frozen berries, peanut butter, maple syrup, and chocolate chips.',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '14',
                'expire_date' => '2022-06-12',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '2'
            ],
            [
                'product_name' => 'DRAGONFRUIT',
                'product_price' => '10000',
                'product_image' => 'dragonfruit.jpg',
                'product_description' => 'Central Americans call it pitaya. In Asia, its a strawberry pear. Today, you can buy dragon fruit throughout the U.S. Dragon fruit is juicy with a slightly sweet taste that some describe as a cross between a kiwi, a pear, and a watermelon. The seeds have a nutty flavor',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '14',
                'expire_date' => '2022-06-12',
                'manufacture_id' => '2',
                'type_id' => '2',
                'review_id' => '2'
            ],
            [
                'product_name' => 'GRAPE',
                'product_price' => '35000',
                'product_image' => 'grape.jpg',
                'product_description' => 'Grapes are fleshy, rounded fruits that grow in clusters made up of many fruits of greenish, yellowish or purple skin. The pulp is juicy and sweet, and it contain several seeds or pips. It is a well-known fruit; it is eaten raw, although it is mainly used for making wine.',
                'product_feature' => '0',
                'stock' => '125',
                'sale_amount' => '70',
                'expire_date' => '2022-06-22',
                'manufacture_id' => '3',
                'type_id' => '2',
                'review_id' => '2'
            ],
            [
                'product_name' => 'TOMATO',
                'product_price' => '25000',
                'product_image' => 'tomato.jpg',
                'product_description' => 'tomatoes are a good source of vitamin C and the phytochemical lycopene. The fruits are commonly eaten raw in salads, served as a cooked vegetable, used as an ingredient of various prepared dishes, and pickled. Additionally, a large percentage of the world’s tomato crop is used for processing; products include canned tomatoes, tomato juice, ketchup, puree, paste, and “sun-dried” tomatoes or dehydrated pulp',
                'product_feature' => '1',
                'stock' => '205',
                'sale_amount' => '100',
                'expire_date' => '2022-07-12',
                'manufacture_id' => '3',
                'type_id' => '2',
                'review_id' => '2'
            ],
            [
                'product_name' => 'LETTUCE',
                'product_price' => '10000',
                'product_image' => 'salad.jpg',
                'product_description' => 'a leafy herbaceous annual or biennial plant in the family Asteraceae grown for its leaves which are used as a salad green. The lettuce plant can vary greatly in size, shape and leaf type but generally, the leaves of the plant form a dense head or loose rosette.',
                'product_feature' => '1',
                'stock' => '100',
                'sale_amount' => '50',
                'expire_date' => '2022-06-07',
                'manufacture_id' => '1',
                'type_id' => '1',
                'review_id' => '2'
            ],
            [
                'product_name' => 'GRAPE JUCIE',
                'product_price' => '150000',
                'product_image' => 'grapejuice.jpg',
                'product_description' => 'Grape juice is obtained from crushing and blending grapes into a liquid. In the wine industry, grape juice that contains 7–23 percent of pulp, skins, stems and seeds is often referred to as must. The sugars in grape juice allow it to be used as a sweetener, and fermented and made into wine, brandy, or vinegar.',
                'product_feature' => '1',
                'stock' => '20',
                'sale_amount' => '200',
                'expire_date' => '2022-12-07',
                'manufacture_id' => '1',
                'type_id' => '3',
                'review_id' => '2'
            ],
            [
                'product_name' => 'GALIC',
                'product_price' => '8000',
                'product_image' => 'galic.jpg',
                'product_description' => ' Garlic has a very strong smell and taste and is used in cooking. COLLOCATIONS: clove of ~ We use garlic to add a very strong flavor to the food. If you dont want a strong taste of garlic, add one clove instead of two.',
                'product_feature' => '0',
                'stock' => '150',
                'sale_amount' => '60',
                'expire_date' => '2022-12-07',
                'manufacture_id' => '1',
                'type_id' => '1',
                'review_id' => '2'
            ],
            [
                'product_name' => 'ORAGE JUICE',
                'product_price' => '20000',
                'product_image' => 'orangejucie.jpg',
                'product_description' => 'The juice is balanced in natural sweetness and acidity. An easy drinking juice, but lacking in pulp. The sweet flavour had a hint of bitterness, but the sharp, zesty aroma overwhelmed those looking for a subtler taste. A fresh, sweet aroma thats matched in flavour.',
                'product_feature' => '1',
                'stock' => '30',
                'sale_amount' => '16',
                'expire_date' => '2022-12-07',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '2'
            ],
            [
                'product_name' => 'CUCUMBER',
                'product_price' => '15000',
                'product_image' => 'cucumber.png',
                'product_description' => 'a summer vegetable, with elongate shape and 15cm long. Its skin is of a green colour, turning into yellow in maturation. At present, it is found in the European markets all over the year. Fresh or pickled cucumbers are also available.',
                'product_feature' => '0',
                'stock' => '120',
                'sale_amount' => '32',
                'expire_date' => '2022-08-07',
                'manufacture_id' => '3',
                'type_id' => '1',
                'review_id' => '3'
            ],
            [
                'product_name' => 'KIWI',
                'product_price' => '130000',
                'product_image' => 'kiwis.jpg',
                'product_description' => 'a fruit of ovoid shape, of variable size and covered with a brown fuzzy thin skin. It measures between 4 and 7.5cm long and 3.5 to 5cm wide and the weight oscillates between 30 and150g depending on the variety, the climatic conditions and the planting system.',
                'product_feature' => '1',
                'stock' => '150',
                'sale_amount' => '130',
                'expire_date' => '2022-08-07',
                'manufacture_id' => '3',
                'type_id' => '1',
                'review_id' => '3'
            ],
            [
                'product_name' => 'TOMATO JUICE',
                'product_price' => '30000',
                'product_image' => 'tomatojucie.jpg',
                'product_description' => 'because of tomato juices earthy flavor at a normal pressure, with cabin pressure it becomes sweeter — fruity, even. Additionally, tomatoes are rich in flavor known as umami — a taste that is thought of by most as very savory and pleasant.',
                'product_feature' => '1',
                'stock' => '60',
                'sale_amount' => '25',
                'expire_date' => '2022-07-07',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '3'
            ],
            [
                'product_name' => 'POMEGRANATE JUICE',
                'product_price' => '25000',
                'product_image' => 'popojuice.jpg',
                'product_description' => 'A little sweet, a little tart, and powered by pomegranate antioxidants, pom wonderful 100 percent pomegranate juice is a whole lot of healthy. Every 16oz bottle of pom is made with the juice from four whole pressed California pomegranates and nothing more - no fillers, and never any added sugar.',
                'product_feature' => '1',
                'stock' => '14',
                'sale_amount' => '56',
                'expire_date' => '2022-06-07',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '3'
            ],
            [
                'product_name' => 'WATER MELON JUICE',
                'product_price' => '35000',
                'product_image' => 'watermelon-juice-resize-3-400x400.jpg',
                'product_description' => 'high in vitamin A, vitamin C and potassium. Its about 92% water, so its plenty hydrating, too (nutrition source). I thought my juice was perfectly sweet without any added sugar, but I added a squeeze of lime juice for that extra zing.',
                'product_feature' => '0',
                'stock' => '12',
                'sale_amount' => '6',
                'expire_date' => '2022-06-07',
                'manufacture_id' => '2',
                'type_id' => '3',
                'review_id' => '3'
            ],
        ]);
    }
}
