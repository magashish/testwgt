<?php
/**
 * Extended service data for individual service pages.
 * Keyed by slug to match $config['services'].
 */
$services_data = [

  'custom-website-design' => [
    'tagline'   => 'Designs that convert visitors into clients.',
    'full_desc' => 'Your website is your most powerful sales tool — and it needs to do more than look good. DKI Empire creates custom, conversion-focused website designs tailored to your specific brand, audience, and business objectives. Every layout, color, and interaction is intentional, backed by UX research and data-driven design principles. We do not use templates; every site is built from scratch to stand out and perform.',
    'benefits' => [
      'Fully custom designs — no templates',
      'Mobile-first, responsive across all devices',
      'Conversion-rate optimization built into every layout',
      'Brand-consistent visual identity integration',
      'Fast-loading, performance-optimized designs',
      'ADA accessibility baked in from day one',
    ],
    'faqs' => [
      ['q' => 'How long does a custom website design project take?',       'a' => 'Most custom website projects take 6–12 weeks from discovery to launch, depending on scope and complexity. We provide a detailed project timeline before work begins.'],
      ['q' => 'Do you work with our existing brand guidelines?',           'a' => 'Absolutely. We work within your established brand identity — colors, typography, voice — and elevate it with professional web design.'],
      ['q' => 'Can we see design mockups before development begins?',      'a' => 'Yes. Our process includes wireframes and high-fidelity design mockups for your review and approval before any development work starts.'],
      ['q' => 'Do you design for both desktop and mobile?',                'a' => 'Every design is mobile-first and fully responsive, tested across all major devices, browsers, and screen sizes before launch.'],
    ],
  ],

  'web-development' => [
    'tagline'   => 'Scalable, high-performance web applications.',
    'full_desc' => 'Great design requires great engineering to deliver results. DKI Empire\'s development team builds robust, high-performance web applications using proven technologies including PHP, Laravel, React, WordPress, and Node.js. We architect solutions for longevity and scalability — whether you need a marketing site, a complex web application, or a government-grade content management system.',
    'benefits' => [
      'Custom PHP, Laravel, and React development',
      'WordPress and headless CMS solutions',
      'Performance-optimized for Core Web Vitals',
      'Secure coding practices and vulnerability testing',
      'API integrations and third-party system connections',
      'Scalable architecture built for growth',
    ],
    'faqs' => [
      ['q' => 'What technologies do you develop with?',                    'a' => 'We primarily work with PHP, Laravel, WordPress, React, Node.js, MySQL, and modern front-end technologies. We choose the right stack for each project.'],
      ['q' => 'Will my website be fast and score well on Google PageSpeed?','a' => 'Yes. Performance optimization is core to our development process. We target 90+ scores on Core Web Vitals and Google PageSpeed Insights.'],
      ['q' => 'Can you integrate with our existing software systems?',     'a' => 'Absolutely. We have extensive experience with API integrations including CRMs, ERPs, payment gateways, and government databases.'],
      ['q' => 'Do you provide ongoing development support after launch?',  'a' => 'Yes. We offer monthly maintenance and support retainers for continued development, feature additions, and technical support.'],
    ],
  ],

  'ada-accessibility' => [
    'tagline'   => 'WCAG 2.1 AA/AAA compliance for legal protection.',
    'full_desc' => 'ADA digital accessibility compliance is not optional — it is a legal requirement for government entities, public accommodations, and increasingly for all businesses serving the public. DKI Empire specializes in full WCAG 2.1 AA and AAA compliance audits, remediation, and new-build accessible websites. We protect your organization from litigation while ensuring every user, regardless of ability, can access your digital services.',
    'benefits' => [
      'Full WCAG 2.1 Level A, AA, and AAA audits',
      'ADA Title II compliance for government entities',
      'ADA Title III compliance for businesses',
      'Section 508 compliance for federal contractors',
      'Screen reader optimization and keyboard navigation',
      'Ongoing compliance monitoring and reporting',
    ],
    'faqs' => [
      ['q' => 'What is WCAG 2.1 and why does it matter?',                 'a' => 'WCAG (Web Content Accessibility Guidelines) 2.1 is the internationally recognized standard for digital accessibility. AA compliance is the legal benchmark for most ADA lawsuits, and AAA is the highest level of compliance available.'],
      ['q' => 'Is my government website required to be ADA compliant?',   'a' => 'Yes. Government entities are subject to ADA Title II and Section 504 of the Rehabilitation Act, requiring digital accessibility. The DOJ has issued regulations mandating WCAG 2.1 AA compliance.'],
      ['q' => 'Can you make my existing website ADA compliant?',          'a' => 'Yes. We perform a comprehensive audit, identify all violations, and remediate your existing website to achieve full compliance without requiring a complete rebuild in most cases.'],
      ['q' => 'Do you provide a compliance certificate after remediation?','a' => 'Yes. Upon completion we provide a detailed compliance report and VPAT (Voluntary Product Accessibility Template) documenting your site\'s conformance level.'],
    ],
  ],

  'hosting-maintenance' => [
    'tagline'   => 'Enterprise-grade hosting and 24/7 support.',
    'full_desc' => 'Your website is only as reliable as the infrastructure behind it. DKI Empire offers managed hosting on enterprise-grade servers with 99.9% uptime SLA, automated daily backups, SSL management, security monitoring, and proactive software updates. Our team handles everything so you can focus on running your organization — not managing your technology.',
    'benefits' => [
      '99.9% uptime SLA with proactive monitoring',
      'Automated daily backups with 30-day retention',
      'SSL certificate management and renewal',
      'WordPress core, plugin, and theme updates',
      'Security scanning and malware removal',
      'Priority technical support with fast response times',
    ],
    'faqs' => [
      ['q' => 'What does your managed hosting include?',                   'a' => 'Our managed hosting includes server resources, SSL, CDN, daily backups, security monitoring, uptime monitoring, and a dedicated support team — everything you need to run reliably.'],
      ['q' => 'How quickly do you respond to support requests?',          'a' => 'Standard support requests are handled within 1 business day. Priority clients on our Business and Enterprise plans receive same-day response for critical issues.'],
      ['q' => 'What happens if my website goes down?',                    'a' => 'Our monitoring systems alert us immediately to any downtime, and we investigate and resolve issues proactively — often before you even notice a problem.'],
      ['q' => 'Can you migrate my existing website to your hosting?',     'a' => 'Yes. We handle the entire migration process with zero downtime, including DNS transfer, SSL setup, and post-migration testing.'],
    ],
  ],

  'seo' => [
    'tagline'   => 'Data-driven SEO that drives real leads.',
    'full_desc' => 'Visibility in search engines is one of the most valuable assets your organization can have. DKI Empire\'s SEO strategies are built on data, technical excellence, and deep content expertise. We combine technical SEO audits, keyword research, on-page optimization, local SEO, and authoritative link-building to sustainably grow your organic search presence and drive qualified traffic.',
    'benefits' => [
      'Technical SEO audits and on-page optimization',
      'Local SEO and Google Business Profile management',
      'Keyword research and competitive analysis',
      'Content strategy and SEO copywriting',
      'Monthly rank tracking and performance reporting',
      'Link building and digital authority development',
    ],
    'faqs' => [
      ['q' => 'How long does SEO take to show results?',                  'a' => 'SEO is a long-term investment. Most clients begin seeing measurable improvement in rankings and organic traffic within 3–6 months, with significant results in 6–12 months.'],
      ['q' => 'Do you work with government and healthcare organizations?', 'a' => 'Yes. We have deep experience with local government SEO, healthcare SEO, and compliance-sensitive industries where content accuracy and authority matter most.'],
      ['q' => 'What does your monthly SEO reporting include?',            'a' => 'Monthly reports include keyword rankings, organic traffic trends, backlink growth, Core Web Vitals status, and recommended next actions — all in a clear, non-technical format.'],
      ['q' => 'Can you recover a site that was penalized by Google?',     'a' => 'Yes. We handle Google penalty recovery including manual action responses, toxic backlink removal, and content remediation to restore your search visibility.'],
    ],
  ],

  'custom-software' => [
    'tagline'   => 'Bespoke software for complex workflows.',
    'full_desc' => 'Off-the-shelf software rarely fits the unique operational demands of government agencies, healthcare systems, or enterprise businesses. DKI Empire designs and builds custom software solutions — from internal workflow automation to public-facing portals and data management platforms. We handle requirements gathering, system architecture, development, testing, and deployment.',
    'benefits' => [
      'Custom workflow automation and process optimization',
      'Government and public-sector portal development',
      'Database design and legacy system modernization',
      'Role-based access control and user management',
      'Integration with existing government data systems',
      'Comprehensive testing and QA before deployment',
    ],
    'faqs' => [
      ['q' => 'What types of custom software do you build?',              'a' => 'We build a wide range: case management systems, permit portals, public records databases, internal employee tools, reporting dashboards, and complex web applications.'],
      ['q' => 'Can you modernize our legacy government system?',          'a' => 'Yes. We specialize in migrating legacy systems to modern, maintainable architectures while preserving critical data and minimizing operational disruption.'],
      ['q' => 'How do you handle data security for government software?', 'a' => 'We apply security-by-design principles, conduct penetration testing, implement role-based access controls, and follow NIST cybersecurity framework guidelines for all government software projects.'],
      ['q' => 'Do you provide documentation and training?',               'a' => 'Yes. All custom software projects include complete technical documentation, user guides, and training sessions for your team upon delivery.'],
    ],
  ],

  'ecommerce' => [
    'tagline'   => 'Online stores built to convert and scale.',
    'full_desc' => 'E-commerce success requires more than an attractive storefront — it demands a conversion-optimized shopping experience, fast performance, seamless checkout, and reliable infrastructure. DKI Empire builds full-featured e-commerce solutions on WooCommerce, Shopify, and custom platforms, designed to reduce cart abandonment, increase average order value, and grow your online revenue.',
    'benefits' => [
      'WooCommerce and Shopify expert development',
      'Conversion-rate-optimized product and checkout pages',
      'Payment gateway integration (Stripe, PayPal, Square)',
      'Inventory management and order fulfillment workflows',
      'Mobile-first shopping experience',
      'Performance-optimized for fast load times and SEO',
    ],
    'faqs' => [
      ['q' => 'Which e-commerce platform do you recommend?',              'a' => 'It depends on your needs. WooCommerce (WordPress) offers maximum flexibility and SEO control. Shopify is excellent for rapid deployment and scalability. We evaluate your specific situation and recommend the best fit.'],
      ['q' => 'Can you migrate our existing store to a new platform?',    'a' => 'Yes. We handle full e-commerce migrations including products, customer data, order history, and SEO redirects to ensure no data or search ranking is lost.'],
      ['q' => 'Do you optimize for mobile shoppers?',                     'a' => 'Absolutely. Over 60% of e-commerce traffic is mobile. Every store we build is mobile-first with touch-optimized UI and accelerated checkout flows.'],
      ['q' => 'Can you integrate with our fulfillment or ERP system?',    'a' => 'Yes. We connect e-commerce platforms with shipping carriers, 3PL fulfillment centers, ERPs, and inventory management systems via API.'],
    ],
  ],

  'government-municipal' => [
    'tagline'   => 'ADA-compliant, Section 508 ready government websites.',
    'full_desc' => 'Government websites have unique requirements: mandatory ADA compliance, Section 508 conformance, public records transparency, multi-department content management, and constituents who depend on accessible, reliable digital services. DKI Empire has delivered websites for county courts, municipal governments, state agencies, school districts, and emergency services — on time, on budget, and fully compliant.',
    'benefits' => [
      'ADA Title II and Section 508 compliant by design',
      'WCAG 2.1 AA and AAA certification available',
      'Multi-department CMS with role-based permissions',
      'Public records and document management portals',
      'Emergency alert and notification systems',
      'Ongoing compliance monitoring and annual audits',
    ],
    'faqs' => [
      ['q' => 'Are government websites legally required to be ADA compliant?','a' => 'Yes. Government entities are subject to ADA Title II and Section 504 of the Rehabilitation Act. The DOJ has issued enforceable regulations requiring WCAG 2.1 AA compliance for state and local government websites.'],
      ['q' => 'How do you handle multi-department content management?',   'a' => 'We implement role-based CMS permissions so each department manages its own content independently while your central communications team maintains brand and compliance oversight.'],
      ['q' => 'Can you integrate with existing government systems?',      'a' => 'Yes. We have experience integrating with state databases, GIS mapping services, public records systems, payment processors for fees and permits, and emergency management platforms.'],
      ['q' => 'Do you provide training for government staff?',            'a' => 'Yes. Every government project includes comprehensive CMS training for your team, recorded video tutorials, and a written user guide tailored to your specific setup.'],
    ],
  ],

];
