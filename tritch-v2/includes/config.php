<?php

$config = [

  // Business identity
  'business_name'  => 'Tritch Door & Window',
  'tagline'        => "Northwest Ohio's Trusted Door & Window Experts Since 1947",
  'founded'        => '1947',

  // Contact
  'phone'          => '(419) 332-9554',
  'phone_href'     => 'tel:+14193329554',
  'email'          => 'info@tritchdoorandwindow.net',
  'email_href'     => 'mailto:info@tritchdoorandwindow.net',

  // Location
  'city'           => 'Fremont',
  'state'          => 'OH',
  'service_area'   => 'Serving Northwest Ohio',

  // Hours
  'hours'          => 'Mon–Fri 8:00 AM – 5:00 PM',
  'hours_sat'      => 'Saturday: By Appointment',

  // Social
  'facebook'       => '#',
  'instagram'      => '#',
  'google_reviews' => '#',

  // Site URL (no trailing slash)
  'site_url'       => 'https://tritchdoorandwindow.net',

  // CTA label used throughout
  'cta_label'      => 'REQUEST FREE ESTIMATE',

  // Service locations (used in nav dropdown, service area section, footer)
  'locations' => [
    'Fremont', 'Sandusky', 'Port Clinton', 'Clyde',
    'Bellevue', 'Norwalk', 'Tiffin', 'Findlay', 'Fostoria', 'Toledo',
  ],

  // Residential services (used in nav, services section, footer, quote form)
  'residential_services' => [
    ['slug' => 'garage-doors',        'title' => 'Garage Doors',        'desc' => 'Stylish. Durable. Built to last.',      'icon' => 'bi-house-door'],
    ['slug' => 'garage-door-openers', 'title' => 'Garage Door Openers', 'desc' => 'Smart & reliable solutions.',            'icon' => 'bi-toggles'],
    ['slug' => 'garage-door-repair',  'title' => 'Garage Door Repair',  'desc' => 'Fast repairs. Same-day service.',        'icon' => 'bi-wrench'],
    ['slug' => 'entry-doors',         'title' => 'Entry Doors',         'desc' => 'Make a lasting first impression.',       'icon' => 'bi-door-open'],
    ['slug' => 'windows',             'title' => 'Windows',             'desc' => 'Energy-efficient & beautiful.',          'icon' => 'bi-grid'],
    ['slug' => 'patio-doors',         'title' => 'Patio Doors',         'desc' => 'Open up your living space.',             'icon' => 'bi-box-arrow-right'],
  ],

  // Commercial services
  'commercial_services' => [
    ['slug' => 'commercial-overhead-doors', 'title' => 'Commercial Overhead Doors', 'desc' => 'Built for performance.',          'icon' => 'bi-building'],
    ['slug' => 'dock-equipment',            'title' => 'Dock Equipment',            'desc' => 'Safe. Reliable. Efficient.',      'icon' => 'bi-truck'],
    ['slug' => 'storefront-systems',        'title' => 'Storefront Systems',        'desc' => 'Modern. Secure. Professional.',   'icon' => 'bi-shop'],
    ['slug' => 'steel-doors',               'title' => 'Steel Doors',               'desc' => 'Strong. Secure. Reliable.',       'icon' => 'bi-shield'],
    ['slug' => 'commercial-operators',      'title' => 'Commercial Operators',      'desc' => 'Powerful & dependable.',          'icon' => 'bi-lightning'],
    ['slug' => 'service-repair',            'title' => 'Service & Repair',          'desc' => 'Keep your business moving.',      'icon' => 'bi-gear'],
  ],

  // Reviews
  'reviews' => [
    ['name' => 'Jason M.',  'city' => 'Fremont, OH',  'text' => 'Tritch Door & Window did an amazing job on our new garage door. The installers were professional, on time, and the quality is outstanding. Highly recommend!'],
    ['name' => 'Mark T.',   'city' => 'Sandusky, OH', 'text' => 'Our commercial overhead door replacement was completed on schedule and within budget. Excellent communication from start to finish.'],
    ['name' => 'Sarah L.',  'city' => 'Tiffin, OH',   'text' => "Professional service and outstanding workmanship. We've used Tritch for multiple projects and they never disappoint."],
    ['name' => 'David R.',  'city' => 'Clyde, OH',    'text' => 'Called them on a Monday morning with a broken spring and they had it fixed the same day. Fast, friendly, and fair pricing.'],
  ],

  // Manufacturers / brands
  'brands' => [
    'Clopay', 'LiftMaster', 'Amarr', 'Wayne Dalton',
    'Andersen Windows', 'ProVia', 'Therma-Tru', 'CHI', 'Haas Door',
  ],

  // Why choose features
  'features' => [
    ['icon' => 'bi-calendar-check-fill', 'title' => 'Decades of Experience',       'text' => 'Serving Northwest Ohio families and businesses since 1947 with a proven track record of quality.'],
    ['icon' => 'bi-house-heart-fill',    'title' => 'Local Family-Owned Company',  'text' => 'A trusted local company with deep roots in the community — not a big-box chain.'],
    ['icon' => 'bi-tools',               'title' => 'Professional Installation',   'text' => 'Our certified technicians install every product with precision and attention to detail.'],
    ['icon' => 'bi-star-fill',           'title' => 'Quality Products',            'text' => 'We carry industry-leading brands built to perform beautifully for years to come.'],
    ['icon' => 'bi-building',            'title' => 'Commercial & Residential',    'text' => 'Full-service door and window solutions for homes and businesses of all sizes.'],
    ['icon' => 'bi-clipboard-check-fill','title' => 'Free Estimates',              'text' => 'Get a detailed, no-obligation estimate with zero pressure and full transparency.'],
  ],

  // Process steps
  'process_steps' => [
    ['num' => 1, 'icon' => 'bi-clipboard2-check-fill', 'title' => 'Request Estimate',          'desc' => 'Contact us online or by phone to get your free, no-obligation estimate.'],
    ['num' => 2, 'icon' => 'bi-calendar-event-fill',   'title' => 'Schedule Consultation',     'desc' => "We'll visit your property, assess your needs, and discuss the best options."],
    ['num' => 3, 'icon' => 'bi-tools',                 'title' => 'Professional Installation', 'desc' => 'Our certified technicians install your products with precision and care.'],
    ['num' => 4, 'icon' => 'bi-headset',               'title' => 'Ongoing Support',           'desc' => "We're here for service, maintenance, and any future needs you may have."],
  ],

];
