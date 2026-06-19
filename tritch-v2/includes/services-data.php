<?php
/**
 * Extended service data — detailed content for individual service pages.
 * Keyed by slug to match $config['residential_services'] and $config['commercial_services'].
 */
$services_data = [

  /* ===================== RESIDENTIAL ===================== */

  'garage-doors' => [
    'type'     => 'residential',
    'tagline'  => 'Stylish, durable doors built to perform and impress.',
    'full_desc'=> 'A new garage door is one of the smartest investments you can make for your home — boosting curb appeal, security, and energy efficiency all at once. Tritch Door & Window carries an extensive selection of residential garage doors from industry-leading brands like Clopay, Amarr, and CHI, in every style from classic raised panel to modern full-view aluminum.',
    'benefits' => [
      'Wide selection of styles, colors, and materials',
      'Energy-efficient insulated door options',
      'Custom sizing for non-standard openings',
      'Professional installation by certified technicians',
      'Backed by full manufacturer warranties',
      'Increases curb appeal and home value',
    ],
    'faqs' => [
      ['q' => 'How long does a garage door installation take?',       'a' => 'Most standard installations are completed in 3–4 hours. Custom or larger doors may take a full day.'],
      ['q' => 'What brands of garage doors do you carry?',            'a' => 'We carry Clopay, Amarr, CHI, and Haas Door — top-rated manufacturers known for quality and durability.'],
      ['q' => 'Do you offer insulated garage doors?',                 'a' => 'Yes. We carry a full range of insulated doors with varying R-values to improve energy efficiency and reduce noise.'],
      ['q' => 'Can I get a custom color or style?',                   'a' => 'Absolutely. Many of our doors are available in custom colors, finishes, and window configurations to match your home perfectly.'],
    ],
  ],

  'garage-door-openers' => [
    'type'     => 'residential',
    'tagline'  => 'Smart, reliable openers for every garage.',
    'full_desc'=> 'Upgrade your garage with a modern LiftMaster opener featuring Wi-Fi connectivity, battery backup, and smartphone control. Whether you\'re replacing an outdated unit or adding automation to a new door, our certified technicians handle professional installation and full programming so everything works perfectly from day one.',
    'benefits' => [
      'LiftMaster & Chamberlain brand openers',
      'Wi-Fi enabled smartphone control via MyQ app',
      'Battery backup for power outages',
      'Ultra-quiet belt and screw drive options',
      'Professional installation and programming',
      'Compatible with all major door brands',
    ],
    'faqs' => [
      ['q' => 'How long do garage door openers last?',                'a' => 'With proper maintenance, most openers last 10–15 years. If yours is older, upgrading to a smart opener is a great investment.'],
      ['q' => 'Can I control my opener from my phone?',               'a' => 'Yes. LiftMaster MyQ-enabled openers let you open, close, and monitor your garage door from anywhere via smartphone.'],
      ['q' => 'Do you install battery backup openers?',               'a' => 'Absolutely. We highly recommend battery backup models so your garage operates even during power outages.'],
      ['q' => 'Will a new opener work with my existing door?',         'a' => 'In most cases, yes. Our technicians assess your current door and hardware to recommend the best compatible opener.'],
    ],
  ],

  'garage-door-repair' => [
    'type'     => 'residential',
    'tagline'  => 'Fast, reliable repairs when you need them most.',
    'full_desc'=> 'A broken garage door can disrupt your entire day and compromise your home\'s security. Tritch Door & Window offers prompt repair services throughout Northwest Ohio — from broken spring replacement to cable, roller, and panel repairs. Our experienced technicians diagnose the problem fast and fix it right the first time.',
    'benefits' => [
      'Same-day service available',
      'Broken spring & cable replacement',
      'Panel dent repair and replacement',
      'Roller, hinge, and track realignment',
      'Opener sensor and remote repairs',
      'Honest, upfront pricing — no surprises',
    ],
    'faqs' => [
      ['q' => 'How quickly can you respond to a repair call?',         'a' => 'We offer same-day service for most repairs. Emergency calls are handled as quickly as possible.'],
      ['q' => 'My garage door is making a loud noise — what\'s wrong?','a' => 'Loud grinding or squeaking often indicates worn rollers, loose hardware, or a broken spring. We\'ll diagnose it quickly.'],
      ['q' => 'How much does a spring replacement cost?',              'a' => 'Pricing depends on the spring type and door size. We provide upfront estimates before any work begins — no hidden fees.'],
      ['q' => 'Can you repair any brand of garage door?',              'a' => 'Yes. Our technicians are experienced with all major garage door brands and can source replacement parts quickly.'],
    ],
  ],

  'entry-doors' => [
    'type'     => 'residential',
    'tagline'  => 'Make a lasting first impression.',
    'full_desc'=> 'Your entry door is the first thing visitors see — and a critical line of defense for your home\'s security and energy efficiency. Tritch Door & Window offers a beautiful selection of fiberglass, steel, and wood entry doors from ProVia and Therma-Tru, professionally measured and installed for a perfect fit.',
    'benefits' => [
      'Steel, fiberglass, and wood door options',
      'Energy Star certified options available',
      'Custom glass inserts and sidelight options',
      'Multiple finish and hardware choices',
      'Precise professional installation',
      'Improved security and weather sealing',
    ],
    'faqs' => [
      ['q' => 'What\'s the difference between fiberglass and steel entry doors?', 'a' => 'Fiberglass doors offer superior energy efficiency and won\'t rust or warp. Steel doors are extremely durable and provide great security at a lower cost.'],
      ['q' => 'Do you offer custom entry doors?',                      'a' => 'Yes. We can configure doors with custom glass inserts, sidelights, transoms, and finishes to match your home\'s style.'],
      ['q' => 'How long does an entry door installation take?',        'a' => 'Most standard entry door installations are completed in 2–4 hours.'],
      ['q' => 'Will a new entry door improve energy efficiency?',      'a' => 'Absolutely. Modern entry doors are significantly better insulated than older models, reducing drafts and lowering heating and cooling costs.'],
    ],
  ],

  'windows' => [
    'type'     => 'residential',
    'tagline'  => 'Energy-efficient windows for every home.',
    'full_desc'=> 'Old, drafty windows are one of the biggest sources of energy loss in a home. Tritch Door & Window offers a complete range of replacement and new construction windows from Andersen Windows — the industry\'s most trusted brand — professionally installed to maximize energy performance, comfort, and curb appeal.',
    'benefits' => [
      'Andersen Windows — industry\'s #1 brand',
      'Double and triple-pane insulated glass',
      'Energy Star certified options',
      'Styles: double-hung, casement, bay, picture & more',
      'Low-maintenance exterior finishes',
      'Professional installation with full sealing',
    ],
    'faqs' => [
      ['q' => 'How do I know if I need new windows?',                  'a' => 'Signs include drafts near the frame, condensation between panes, difficulty opening or closing, and higher utility bills.'],
      ['q' => 'What\'s the difference between double and triple-pane windows?', 'a' => 'Double-pane provides excellent insulation for most climates. Triple-pane adds an extra layer for maximum efficiency in extreme temperatures.'],
      ['q' => 'How long does window installation take?',               'a' => 'We can typically replace 8–10 windows in a single day, depending on style and complexity.'],
      ['q' => 'Do you offer Energy Star certified windows?',           'a' => 'Yes. Many of our Andersen window lines are Energy Star certified, qualifying for potential tax credits and utility rebates.'],
    ],
  ],

  'patio-doors' => [
    'type'     => 'residential',
    'tagline'  => 'Open up your living space.',
    'full_desc'=> 'A beautiful patio door creates a seamless connection between your indoor living space and outdoor areas. Tritch Door & Window offers sliding, hinged French, and multi-panel patio doors from top manufacturers, professionally installed to provide years of smooth, trouble-free operation.',
    'benefits' => [
      'Sliding, French, and multi-panel styles',
      'Energy-efficient insulated glass',
      'Multiple frame material options',
      'Built-in multi-point security locks',
      'Smooth, quiet operation',
      'Custom sizes available',
    ],
    'faqs' => [
      ['q' => 'Which is better — a sliding or French patio door?',     'a' => 'Sliding doors are great for tight spaces and easy to operate. French doors create a more traditional, elegant look and offer a wider opening.'],
      ['q' => 'Are patio doors energy efficient?',                     'a' => 'Yes. Our patio doors feature multi-pane insulated glass and tight weatherstripping to minimize air infiltration.'],
      ['q' => 'Do patio doors come with security locks?',              'a' => 'Yes. All our patio doors include multi-point locking systems and security glass options for added protection.'],
      ['q' => 'How long does patio door installation take?',           'a' => 'Most patio door installations are completed in a half to full day.'],
    ],
  ],

  /* ===================== COMMERCIAL ===================== */

  'commercial-overhead-doors' => [
    'type'     => 'commercial',
    'tagline'  => 'Heavy-duty overhead doors built for performance.',
    'full_desc'=> 'Tritch Door & Window specializes in commercial overhead door installation, replacement, and service for businesses across Northwest Ohio. From warehouses and distribution centers to retail and manufacturing facilities, we supply and install heavy-duty sectional, rolling steel, and fire-rated overhead doors engineered for high-cycle performance.',
    'benefits' => [
      'Heavy-duty sectional and rolling steel doors',
      'Fire-rated door options available',
      'High-cycle models for frequent operation',
      'Custom sizing for any opening',
      'Insulated options for temperature-controlled spaces',
      'Fast installation to minimize business downtime',
    ],
    'faqs' => [
      ['q' => 'What size commercial overhead doors can you install?',  'a' => 'We handle doors of all sizes, from standard commercial openings to wide-span custom installations for large facilities.'],
      ['q' => 'Do you offer fire-rated commercial doors?',             'a' => 'Yes. We carry fire-rated overhead door options that meet local code requirements for your facility type.'],
      ['q' => 'How long do commercial overhead doors last?',           'a' => 'High-quality commercial doors typically last 15–25 years with proper maintenance. We offer service contracts to keep them running smoothly.'],
      ['q' => 'Can you work around our business hours?',               'a' => 'Absolutely. We schedule installations to minimize disruption to your operations, including evenings and weekends.'],
    ],
  ],

  'dock-equipment' => [
    'type'     => 'commercial',
    'tagline'  => 'Safe, efficient loading dock solutions.',
    'full_desc'=> 'Efficient loading dock operations are critical to your business\'s productivity and safety. Tritch Door & Window supplies and installs a complete range of dock equipment including dock levelers, seals and shelters, vehicle restraints, and bumpers — keeping your facility running safely and efficiently every day.',
    'benefits' => [
      'Hydraulic, mechanical, and air-powered levelers',
      'Dock seals and shelters for all trailer types',
      'Vehicle restraint systems for driver safety',
      'Rubber dock bumpers and edge protection',
      'Full installation and commissioning',
      'Ongoing service and maintenance contracts',
    ],
    'faqs' => [
      ['q' => 'What types of dock levelers do you install?',           'a' => 'We install hydraulic, mechanical, and air-powered dock levelers from leading manufacturers, sized for your specific loading requirements.'],
      ['q' => 'How important is a dock seal or shelter?',             'a' => 'Dock seals and shelters prevent heat loss, keep pests out, and improve worker safety by sealing the gap between the trailer and building.'],
      ['q' => 'Do you service existing dock equipment?',              'a' => 'Yes. We provide comprehensive service and repair for all types of dock equipment regardless of brand.'],
      ['q' => 'How long does dock equipment installation take?',       'a' => 'Most standard dock leveler installations are completed in one to two days per dock position.'],
    ],
  ],

  'storefront-systems' => [
    'type'     => 'commercial',
    'tagline'  => 'Modern, professional storefront entrances.',
    'full_desc'=> 'First impressions matter in retail and commercial spaces. Tritch Door & Window designs and installs aluminum storefront door systems that combine security, accessibility, and professional aesthetics for retail shops, office buildings, and commercial facilities throughout Northwest Ohio.',
    'benefits' => [
      'Aluminum framed storefront door systems',
      'ADA compliant door configurations',
      'Automatic door operator options',
      'Security glazing and locking options',
      'Custom frame finishes and glass types',
      'Single and double door configurations',
    ],
    'faqs' => [
      ['q' => 'Are your storefront doors ADA compliant?',              'a' => 'Yes. We configure storefront systems with ADA-compliant hardware and automatic operators to meet accessibility requirements.'],
      ['q' => 'Can I get a custom finish on the aluminum frames?',     'a' => 'Absolutely. Anodized and powder-coat finishes are available in a wide range of colors to match your building\'s aesthetic.'],
      ['q' => 'Do you install automatic door openers for storefronts?','a' => 'Yes. We install automatic door operators that integrate seamlessly with our storefront door systems.'],
      ['q' => 'How long does storefront installation take?',           'a' => 'A standard single-bay storefront can typically be installed in one to two days, depending on the scope.'],
    ],
  ],

  'steel-doors' => [
    'type'     => 'commercial',
    'tagline'  => 'Strong, secure steel doors for any application.',
    'full_desc'=> 'For applications where security and durability are the top priorities, Tritch Door & Window offers a complete selection of commercial and industrial steel doors and frames. From interior stairwell access to heavy-duty exterior applications, our steel doors provide long-lasting protection for any commercial facility.',
    'benefits' => [
      'Hollow metal steel doors and frames',
      'Fire-rated and sound-rated options',
      'Wide range of hardware configurations',
      'Primer and paint-ready factory finish',
      'Standard and fully custom sizes',
      'Suitable for interior and exterior applications',
    ],
    'faqs' => [
      ['q' => 'What\'s the difference between hollow metal and solid steel doors?', 'a' => 'Hollow metal doors have a steel face with an insulated or fire-rated core. Solid steel doors are heavier and used in very high-security applications.'],
      ['q' => 'Do you offer fire-rated steel doors?',                  'a' => 'Yes. We carry 20, 45, 60, and 90-minute fire-rated steel door assemblies to meet code requirements.'],
      ['q' => 'Can steel doors be painted?',                           'a' => 'Yes. Our commercial steel doors come with a factory primer coat ready for your choice of paint color.'],
      ['q' => 'Do you supply steel door frames as well?',              'a' => 'Yes. We supply complete steel door and frame assemblies, ensuring a proper fit and full code compliance.'],
    ],
  ],

  'commercial-operators' => [
    'type'     => 'commercial',
    'tagline'  => 'Powerful operators for demanding commercial environments.',
    'full_desc'=> 'Commercial door operators need to be durable, reliable, and safe under heavy use. Tritch Door & Window installs commercial-grade operators for overhead doors, rolling steel doors, and high-speed doors — engineered to handle high-cycle demands in busy commercial and industrial environments.',
    'benefits' => [
      'High-cycle commercial grade operators',
      'Compatible with all major door brands',
      'Safety edge and sensor integration',
      'Access control system compatible',
      'Remote monitoring capabilities',
      'Factory-trained installation technicians',
    ],
    'faqs' => [
      ['q' => 'What makes a commercial operator different from a residential one?', 'a' => 'Commercial operators are designed for far higher cycle counts, heavier doors, and 24/7 operation with greater torque and more robust safety features.'],
      ['q' => 'Can commercial operators integrate with access control?', 'a' => 'Yes. We can integrate operators with keypad entry, card readers, and other access control systems.'],
      ['q' => 'How often should commercial operators be serviced?',     'a' => 'We recommend annual preventive maintenance for regular-use operators, or semi-annual for high-frequency applications.'],
      ['q' => 'Do you offer emergency operator repair service?',        'a' => 'Yes. We provide prompt repair service to minimize downtime for your business.'],
    ],
  ],

  'service-repair' => [
    'type'     => 'commercial',
    'tagline'  => 'Fast, reliable service — keeping your business moving.',
    'full_desc'=> 'Downtime is costly. Tritch Door & Window\'s commercial service team provides fast, knowledgeable repair service for overhead doors, dock equipment, operators, and related hardware. We respond quickly, diagnose accurately, and fix efficiently — minimizing disruption to your operations.',
    'benefits' => [
      'Prompt response for commercial service calls',
      'Experienced commercial door technicians',
      'Service all major brands and door types',
      'Preventive maintenance contracts available',
      'Emergency repair service available',
      'Transparent pricing with no hidden fees',
    ],
    'faqs' => [
      ['q' => 'Do you service doors you didn\'t install?',             'a' => 'Yes. Our technicians are experienced with all major commercial door brands and systems.'],
      ['q' => 'Do you offer preventive maintenance contracts?',         'a' => 'Yes. We offer annual and semi-annual service contracts to keep your doors and dock equipment at peak performance.'],
      ['q' => 'How quickly can you respond to an emergency repair?',   'a' => 'We prioritize emergency service calls and aim to respond as quickly as possible to minimize disruption to your business.'],
      ['q' => 'What types of commercial equipment do you service?',    'a' => 'We service overhead sectional doors, rolling steel doors, high-speed doors, dock equipment, operators, and storefront systems.'],
    ],
  ],

];
