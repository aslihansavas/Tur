<?php 
session_start();

$turlar =[
    [
        'id' => 1,
        'ad' => 'Kapadokya Turu',
        'fiyat' => '500',
        'indirim'=>30,
        'ozellikler' => [
            '3 Gece 4 Gün',
            'Otobüslü',
            'Balon turu',
            'Ürgüp',
            'Göreme Açık Hava Müzesi'
        ],
        'slider_gorsel' => 'kapadokya-slider.jpg',
        'programlar' => [
            [
                'baslik' => '1.gun',
                'icerik' => '05.30 Ataköy Sinan Erdem Spor Salonu önü, 06.00 Kadıköy Evlendirme Dairesi önünden bineceğimiz otobüs ile Kapadokya bölgesine varış.
                ilk olarak içinde;Göreme Açık Hava Müzesi’ni gezmek için hareket ediyoruz. Tokalı Kilise müzede göreceğimiz yerler arasında. Ürgüp  içinde yapacağımız tur sonrası, Şarap Mahzenlerini ve Ana-Baba-Çocuk Peribacalarını görüyoruz. Sonrasında  otele varış. Akşam yemeği ve konaklama otelimizde.'
            ],
            [
                'baslik' => '2.gun',
                'icerik' => 'Bugün dileyenler Balon Turu yapabilir.  Otelde kahvaltı sonrası hareket. vadi Paşabağ (Keşişler Vadisi) gezisini gerçekleştiriyoruz. turun devamında Dervent Vadisi de geziliyor. Sonrasında  Avanos’a gidiyor ve Hitit döneminden gelen 4000 yıllık el sanatı merkezindeki Çanak-Çömlek atölyelerini geziyoruz. 
                Güvercinlik Vadisi görüldükten sonra dönüşte halı atölyelerinin gezilmesi ile otele varış.'
            ],
            [
                'baslik' => '3.gun',
                'icerik' => 'Kahvaltı sonrası otelden ayrılıyoruz.
                Derinkuyu Yeraltı Şehri (veya Kaymaklı Yeraltı Şehri) ilk durağımız.  Kayseride Yöresel ürünler için verilen serbest zamanda yapılan alış-verişi takiben otobüslere biniş ve istanbula hareket.
                '
            ]
        ]
    ],
    [
        'id' => 2,
        'ad' => 'Amsterdam Turu',
        'fiyat' => '870',
        'indirim'=>0,
        'ozellikler' => [
            '2 Gece 3 Gün',
			'Kraliyet Sarayı',
			'Van Gogh Müzesi',
			'Rijksmuesum Amsterdam',
			'Dam Meydanı'
        ],
        'slider_gorsel' => 'amsterdam-slider.jpg',
        'programlar' => [
            [
                'baslik' => '1.gun',
                'icerik' => 'İstanbul Sabiha Gökçen Havalimanı ‘nda saat 06:45 ‘te buluşma. Pegasus Hava yolları ile 08.45’de Amsterdam’a hareket. 
                Yerel saat ile 10:30’da varışımızın ardından özel otobüsümüzle panoramik Amsterdam şehir turu.
                 Turumuzda Dam Meydanı, Leidseplein, Rembrandtplein, Kraliyet Sarayı ve Kırmızı Fener Sokağı görülecek yerler arasındadır. 
                 Tur bitimi serbest zaman ve otelinize transfer. Geceleme otelinizde.'
            ],
            [
                'baslik' => '2.gun',
                'icerik' => 'Brugge turumuzda Dantel ve goblenleri ile ünlü bu şirin ortaçağ kentinin pazar yeri ve panoramik olarak Belfry Kulesini ve de Brugge Şehrinin enfes manzarasını görme fırsatı bulacaksınız.'
            ],
            [
                'baslik' => '3.gun',
                'icerik' => 'Sabah kahvaltısı sonrası odaların boşaltıyoruz. Dileyen misafirlerimiz ekstra olarak düzenlenecek olan yarım gün Marken & Volendam turuna katılabilirler. Turumuzda; eski balıkçı kasabası olan Volendam’ da tarihi evler ve limanları gezip daha sonra küçük bir ada olan Marken’i ziyaret ediyoruz. Turumuz sonrası Havalimanına transfer.'
            ]
        ]

    ],
    [
        'id' => 3,
        'ad' => 'Yedigöller Kamp',
        'fiyat' => '300',
        'indirim'=>0,
        'ozellikler' => [
            '1 Gece 2 Gün',
            'Kamp ekipmanları dahil',
            'Öğle ve akşam yemeği',
            'Bölgede yürüyüş',
            'Ateş başı eğlenceli kamp etkinlikleri'
        ],
        'slider_gorsel' => 'yedigoller.jpg',
        'programlar' => [
            [
                'baslik' => '1.gun',
                'icerik' =>'Belirtmiş olduğumuz noktalardan hareketle yola koyulup Yedigöller bölgesindeki kamp alanına ulaşıyoruz.
                Yedigöller’i keşfetme zamanı diyerek gezilerimize başlıyoruz. 
                Büyük göl, derin göl ve serin göl gezilerimizi yaparak ve orman içerisinde gezintiler yaparak  tamamlıyoruz. Ardından kamp alanına dönerek akşam yemeği. kamp ateşi için odun toplayıp günü sonlandırıyoruz. Akşam yemeği sonrası isteyenlerle gece yürüyüşü ve kamp ateşi başında eğlenceler yapıyor olacağız. 
                ' 
            ],
            [
                'baslik' => '2.gun',
                'icerik' => 'Saat 10:00 dolaylarında kahvaltımızı yapıp kampımızı toplamaya başlıyoruz. 
                Toparlanmamızı tamladıktan sonra şelaleler ve kuru göl, nazlı göl ve sazlı göl gezilerimizi yaparak aracımıza binip alandan ayrılıyoruz.
                dönüş yolculuğumuza başlıyoruz 21:00 dolaylarında İstanbul’a dönerek gurubumuzu aldığımız noktalara bırakarak vedalaşıyoruz.'
            ]
        ]
    ],
    [
        'id' => 4,
        'ad' => 'İskandinavya Turu ',
        'fiyat' => '799',
        'indirim'=>0,
        'ozellikler' => [
            'Kopenhag şehir turu',
            'Danimarka Şatoları ve Rivierası Turu',
            'Masthugget Kilisesi',
            'Frogner Parkı'
        ],
        'slider_gorsel' => 'iskan.jpg',
        'programlar' => [
            [
                'baslik' => '1.gun',
                'icerik' => 'Sabiha Gökçen Havalimanı Dış Hatlar gidiş terminali önünde 07:30’da buluşma.Pegasus Hava Yolları uçuşu ile saat 09:30’da Kopenhag’a uçuş. Yerel saat ile 11:55’te varış.
                 Varışımızı takiben alanda bekleyen özel otobüslerimiz ile panoramik Kopenhag şehir turu. Turumuzda, Christianborg Kalesi, Glypthoteki Amelienborg Sarayı görülecek yerler arasındadır.
                  Tur bitimi otelinize transfer ve geceleme'
            ],
            [
                'baslik' => '2.gun',
                'icerik' => 'Sabah kahvaltısının ardından serbest zaman. 
                Arzu eden misafirlerimiz ile ekstra düzenlenecek olan Danimarka Şatoları ve Rivierası turuna katılma imkanı.
                 Tur sonrası otelinize transfer ve geceleme.'
            ],
            [
                'baslik' => '3.gun',
                'icerik' => 'Sabah kahvaltısının ardından ilk durağımız olan Malmö’ye hareket. İsveç’in üçüncü büyük şehri Malmö’ye varışımızın ardından, Malmö kalesi, Turning Törso binası, Liman bölgesi gördükten sonra dünyanın ikinci büyük köprüsü olan Oresund’dan geçiyoruz ve ikinci durağımız Goteburg’a varışımızın ardından panoromik şehir turu. Bu turumuzda Şehir Tiyatro Binası, Opera Binası, Poseidon Heykeli, Alman ve Haga Kiliseleri ile Goteborg’un Masthugget Kilisesi görülecek yerler arasındadır.'
            ],
            [
                'baslik'=>'4.gun',
                'icerik'=>'Sabah kahvaltısının ardından uçak saatine bağlı olarak havalimanına transfer. Bagaj ve check-in işlemlerinin ardından Pegasus Hava Yolları’nın PC 1280 sefer sayılı tarifeli seferi ile saat 11:20’de İstanbul’a hareket. Yerel saat ile 15:50’de İstanbul’a varış ve turumuzun sonu.'
            ]
        ]
    ]         
];
   
 function indirimHesapla( $fiyat ,$indirim)
{
    $fiyat = (double) $fiyat;
    $indirim = (double) $indirim;
    return ($fiyat*$indirim)/100;
}


   
?>