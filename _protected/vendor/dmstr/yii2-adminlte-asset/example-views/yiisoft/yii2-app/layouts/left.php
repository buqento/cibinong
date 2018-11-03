<aside class="main-sidebar">

    <section class="sidebar">


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site']],
                    ['label' => 'Kegiatan', 'icon' => 'share', 'url' => ['/kegiatan']],
                    ['label' => 'Alarm', 'icon' => 'share', 'url' => ['/alarm']],
                    ['label' => 'Absensi', 'icon' => 'share', 'url' => ['/absensi']],
                    [
                        'label' => 'Master Data',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'WBP', 'icon' => 'circle-o', 'url' =>[ '/wbp']],
                            ['label' => 'Kamera', 'icon' => 'circle-o', 'url' => ['/kamera'],],
                            ['label' => 'Blok', 'icon' => 'circle-o', 'url' => ['/blok'],],
                            ['label' => 'Sel', 'icon' => 'circle-o', 'url' => ['/sel'],]
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
