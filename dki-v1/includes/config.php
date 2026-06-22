<?php

$config = [

  // Business identity
  'business_name'  => 'DKI Empire',
  'tagline'        => 'Full-Service Digital Agency',
  'founded'        => '2013',

  // Contact
  'phone'          => '(800) 555-0199',
  'phone_href'     => 'tel:+18005550199',
  'email'          => 'hello@dkiempire.com',
  'email_href'     => 'mailto:hello@dkiempire.com',

  // Location
  'city'           => 'Ohio',
  'service_area'   => 'Serving Clients Nationwide',

  // Hours
  'hours'          => 'Mon–Fri 9:00 AM – 5:00 PM EST',

  // Social
  'facebook'       => '#',
  'instagram'      => '#',
  'linkedin'       => '#',
  'twitter'        => '#',
  'google_reviews' => '#',

  // Site URL (no trailing slash)
  'site_url'       => 'https://dkiempire.com',

  // CTA label used throughout
  'cta_label'      => 'GET A FREE CONSULTATION',

  // Services (8 total)
  'services' => [
    ['slug' => 'custom-website-design',  'title' => 'Custom Website Design',        'icon' => 'bi-palette2',         'desc' => 'Unique, conversion-focused designs tailored to your brand and goals.'],
    ['slug' => 'web-development',        'title' => 'Web Development',              'icon' => 'bi-code-slash',       'desc' => 'Scalable, high-performance web applications built to last.'],
    ['slug' => 'ada-accessibility',      'title' => 'ADA Accessibility Compliance', 'icon' => 'bi-universal-access', 'desc' => 'WCAG 2.1 AA/AAA compliance for legal protection and full inclusion.'],
    ['slug' => 'hosting-maintenance',    'title' => 'Hosting & Maintenance',        'icon' => 'bi-server',           'desc' => 'Managed hosting, security monitoring, updates, and 24/7 support.'],
    ['slug' => 'seo',                    'title' => 'Search Engine Optimization',   'icon' => 'bi-graph-up-arrow',   'desc' => 'Data-driven SEO strategies that increase visibility and drive leads.'],
    ['slug' => 'custom-software',        'title' => 'Custom Software Development',  'icon' => 'bi-cpu',              'desc' => 'Bespoke software solutions for complex business and government workflows.'],
    ['slug' => 'ecommerce',              'title' => 'E-Commerce Solutions',         'icon' => 'bi-bag-check-fill',   'desc' => 'Full-featured online stores designed to convert visitors to customers.'],
    ['slug' => 'government-municipal',   'title' => 'Government & Municipal',       'icon' => 'bi-bank2',            'desc' => 'ADA-compliant, Section 508 ready websites for government entities.'],
  ],

  // Client types
  'client_types' => [
    'County Courts', 'Municipal Governments', 'State Agencies', 'Healthcare Organizations',
    'E-Commerce Businesses', 'Non-Profit Organizations', 'School Districts', 'Emergency Services',
  ],

  // Stats
  'stats' => [
    ['num' => '10+',  'label' => 'Years Experience'],
    ['num' => '200+', 'label' => 'Projects Delivered'],
    ['num' => '50+',  'label' => 'Government Clients'],
    ['num' => '100%', 'label' => 'ADA Compliance Rate'],
  ],

  // Testimonials
  'testimonials' => [
    [
      'name'   => 'Commissioner Patricia Hayes',
      'title'  => 'County Commissioner',
      'org'    => 'Franklin County, Ohio',
      'type'   => 'Government',
      'rating' => 5,
      'text'   => 'DKI Empire transformed our county website from an outdated, inaccessible system into a modern, fully ADA-compliant platform. Their expertise in government compliance and Section 508 requirements was exceptional. Our constituents have praised the new site constantly.',
    ],
    [
      'name'   => 'Marcus D. Reynolds',
      'title'  => 'CEO & Founder',
      'org'    => 'Reynolds Industrial Supply',
      'type'   => 'E-Commerce',
      'rating' => 5,
      'text'   => 'Our e-commerce revenue increased 340% within six months of launching our new DKI Empire-built site. The performance optimization and conversion-focused design made an immediate, measurable difference. Best investment we have made in years.',
    ],
    [
      'name'   => 'Dr. Sandra Okonkwo',
      'title'  => 'Director of Operations',
      'org'    => 'Midwest Regional Health Network',
      'type'   => 'Healthcare',
      'rating' => 5,
      'text'   => 'HIPAA considerations, ADA compliance, and a patient-friendly interface — DKI Empire delivered on all three. Their team understood the unique regulatory environment of healthcare and built a solution that serves our patients and protects our organization.',
    ],
    [
      'name'   => 'Theresa Callahan',
      'title'  => 'City Clerk',
      'org'    => 'City of Westfield Municipal Government',
      'type'   => 'Government',
      'rating' => 5,
      'text'   => 'From our initial consultation to launch day, DKI Empire was professional, communicative, and delivered exactly what they promised. Our new municipal website passed WCAG 2.1 AAA on first audit. The ongoing hosting and maintenance plan gives us complete peace of mind.',
    ],
  ],

  // Portfolio items
  'portfolio_items' => [
    ['title' => 'Franklin County Court Portal',         'category' => 'Government',       'tag' => 'ADA Compliant',     'color' => '0F172A/4FC3F7'],
    ['title' => 'Midwest Health Network Patient Hub',   'category' => 'Healthcare',       'tag' => 'WCAG 2.1 AAA',      'color' => '1E293B/4FC3F7'],
    ['title' => 'Reynolds Industrial E-Commerce',       'category' => 'E-Commerce',       'tag' => 'WooCommerce',       'color' => '0F172A/FBBF24'],
    ['title' => 'City of Westfield Municipal Site',     'category' => 'Government',       'tag' => 'Section 508',       'color' => '1E293B/4FC3F7'],
    ['title' => 'Ohio Emergency Services Platform',     'category' => 'Custom Software',  'tag' => 'Laravel + React',   'color' => '0F172A/4FC3F7'],
    ['title' => 'Great Lakes Nonprofits Network',       'category' => 'Non-Profit',       'tag' => 'WordPress',         'color' => '1E293B/FBBF24'],
  ],

  // Process steps
  'process_steps' => [
    ['num' => 1, 'icon' => 'bi-binoculars-fill',      'title' => 'Discovery',    'desc' => 'We learn your goals, audience, compliance needs, and competitive landscape through structured discovery sessions.'],
    ['num' => 2, 'icon' => 'bi-palette2',             'title' => 'Design',       'desc' => 'Our designers create wireframes and high-fidelity mockups aligned to your brand and accessibility requirements.'],
    ['num' => 3, 'icon' => 'bi-code-slash',           'title' => 'Development',  'desc' => 'Experienced engineers build your solution with clean, performant, standards-compliant code and rigorous QA.'],
    ['num' => 4, 'icon' => 'bi-rocket-takeoff-fill',  'title' => 'Launch',       'desc' => 'We deploy your project, conduct final accessibility audits, and provide training and documentation for your team.'],
  ],

  // Tech stack
  'tech_stack' => [
    'WordPress', 'React', 'PHP', 'MySQL', 'WooCommerce', 'Shopify', 'Laravel', 'Node.js',
  ],

  // Compliance badges
  'compliance_badges' => [
    'ADA Title II', 'Section 508', 'WCAG 2.1 AA', 'WCAG 2.1 AAA', 'ADA Title III',
  ],

];
