<?php 
/**
 * Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
 * Ad ogni refresh della pagina visualizzare una pubblicitĂ  a schermo, 
 * tenendo conto che possono essere sorteggiate solo quelle is_active true.
 */
    $ads = [
        [
            'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
            'link' => 'https://www.google.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
            'link' => 'https://www.facebook.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
            'link' => 'https://codepen.io',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
            'link' => 'https://laravel.com',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
            'link' => 'https://www.php.net',
            'is_active' => true,
        ],
    ];

    $newAds = [];
        foreach($ads as $spot){
            if ($spot["is_active"]){
                $newAds[] = $spot;
            }
        }
    $activeAd = $newAds[rand(0, count($newAds)-1)];
?>
<style>
    img{
        max-width: 250px;
    }
</style>


<img src="<?php echo $activeAd["image_path"] ?>" alt="">