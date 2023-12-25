<?php
//Pricing Packages:
$package_pricing = array(
    "usa" => array(
        "region_title" => "US Dollar",
        "packages_name" => array(
            "two_day_class" => "$29",
            "three_day_class" => "$45",
            "four_days_classes" => "$60",
            "four_days_classes" => "$60",
            "weekend_classes" => "$70",
        )
    ),
    "uk" => array(
        "region_title" => "UK GPB",
        "packages_name" => array(
            "two_day_class" => "&pound;12",
            "three_day_class" => "&pound;24",
            "four_days_classes" => "&pound;34",
            "four_days_classes" => "&pound;44",
            "six_days_classes" => "&pound;54",
            "weekend_classes" => "&pound;104",
        )
    ),
);

$packages = array(
    "two_day_class" => array(
        "title" => "2 Classes in a week",
        "perks" => array(
            "3 Days Free Trial",
            "Upto 20 Minutes",
            "8 Classes Per Month",
            "Monthly Test",
            "Adming Meetings",
        )
    ),
    "three_day_class" => array(
        "title" => "3 Classes in a week",
        "perks" => array(
            "3 Days Free Trial",
            "Upto 20 Minutes",
            "12 Classes Per Month",
            "Monthly Test",
            "Adming Meetings",
        )
    ),
    "four_days_classes" => array(
        "title" => "4 Classes in a week",
        "perks" => array(
            "3 Days Free Trial",
            "Upto 20 Minutes",
            "16 Classes Per Month",
            "Monthly Test",
            "Adming Meetings",
        )
    ),
    "five_days_classes" => array(
        "title" => "5 Classes in a week",
        "perks" => array(
            "3 Days Free Trial",
            "Upto 20 Minutes",
            "24 Classes Per Month",
            "Monthly Test",
            "Adming Meetings",
        )
    ),
    "weekend_classes" => array(
        "title" => "Weekened Classes",
        "perks" => array(
            "3 Days Free Trial",
            "Upto 20 Minutes",
            "24 Classes Per Month",
            "Monthly Test",
            "Adming Meetings",
        )
    ),
    // "quran_memorization" => array(
    //     "title" => "Quran Memorization",
    //     "perks" => array(
    //         "3 Days Free Trial",
    //         "Upto 20 Minutes",
    //         "24 Classes Per Month",
    //         "Monthly Test",
    //         "Adming Meetings",
    //     )
    // ),
);


add_theme_support( 'post-thumbnails' ); 


register_nav_menus(array(
    'header-menu' => 'header-main-menu',
    'footer-menu' => 'footer-main-menu',
));
