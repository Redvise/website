<?php

return [
    'production' => false,
    'baseUrl' => '',
    'meta' => [
        'company' => 'Redvise Ltd.',
        'name' => 'Redvise',
        'description' => 'IT consulting, development and embedded systems',
        'privacy_email' => 'contact+privacy@redvi.se',
    ],
    'collections' => [],

    'labels' => [
        '2.4GHz' => 'light',
        '5GHz' => 'primary',
        '2.4/5GHz' => 'success',
        'PoE-in' => 'warning',
        'PoE-out' => 'warning',
        'PoE-in/out' => 'warning',
        '100Mbps' => 'secondary',
        '1Gbps' => 'info',
    ],
    'mikrotik' => [
        'hAP mini' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1283_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1283_hi_res.png',
            'title' => 'Tiny size home 2.4Ghz AP with three LAN ports.',
            'url' => 'https://mikrotik.com/product/RB931-2nD',
            'labels' => [
                '2.4GHz',
                '100Mbps',
            ],
        ],
        'hAP lite' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1007_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1007_hi_res.png',
            'title' => 'Low cost home wireless AP with dual chain 2.4GHz wireless, powered by USB.',
            'url' => 'https://mikrotik.com/product/RB941-2nD',
            'labels' => [
                '2.4GHz',
                '100Mbps',
            ],
        ],
        'hAP lite TC' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1766_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1766_hi_res.png',
            'title' => 'Small home AP with four ethernet ports and a colorful enclosure.',
            'url' => 'https://mikrotik.com/product/RB931-2nD-TC',
            'labels' => [
                '2.4GHz',
                '100Mbps',
            ],
        ],
        'cAP lite' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1272_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1272_hi_res.png',
            'title' => 'Low-cost dual-chain 2.4GHz AP with wall and ceiling enclosure',
            'url' => 'https://mikrotik.com/product/RBcAPL-2nD-307',
            'labels' => [
                '2.4GHz',
                'PoE-in',
                '100Mbps',
            ],
        ],
        'hAP' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1059_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1059_hi_res.png',
            'title' => '2.4GHz AP, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.',
            'url' => 'https://mikrotik.com/product/RB951Ui-2nD',
            'labels' => [
                '2.4GHz',
                'PoE-in/out',
                '100Mbps',
            ],
        ],
        'cAP' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1409_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1409_hi_res.png',
            'title' => 'Ceiling AP, Dual-Chain 2.4GHz, 650MHz CPU, RouterOS L4, 802.3at/af support',
            'url' => 'https://mikrotik.com/product/RBcAP2nD',
            'labels' => [
                '2.4GHz',
                'PoE-in',
                '100Mbps',
            ],
        ],
        'hAP ac lite' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1413_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1413_hi_res.png',
            'title' => 'Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.',
            'url' => 'https://mikrotik.com/product/RB952Ui-5ac2nD',
            'labels' => [
                '2.4/5GHz',
                'PoE-in/out',
                '100Mbps',
            ],
        ],
        'hAP ac lite TC' => [
            'img' => 'https://i.mt.lv/cdn/rb_images/1230_m.png',
            'img_hi' => 'https://i.mt.lv/cdn/rb_images/1230_hi_res.png',
            'title' => 'Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support, universal tower case.',
            'url' => 'https://mikrotik.com/product/RB952Ui-5ac2nD-TC',
            'labels' => [
                '2.4/5GHz',
                'PoE-in/out',
                '100Mbps',
            ],
        ],
    ],
];
