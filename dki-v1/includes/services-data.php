<?php
/* Detailed per-service content for service.php router */
$services_detail = [

  'custom-website-design' => [
    'title'    => 'Custom Website Design',
    'icon'     => 'bi-palette2',
    'tagline'  => 'Designs that convert visitors into clients — built around your brand and goals.',
    'full_desc'=> 'Every pixel of your website should work toward a business goal. Our design team combines UX research, brand strategy, and conversion-focused layouts to build sites that look stunning and perform. We don\'t use templates — every design is unique, responsive, and crafted specifically for your audience.',
    'benefits' => [
      'Fully custom design — no templates or page builders',
      'Mobile-first, responsive across all devices',
      'Conversion-optimized layouts and CTAs',
      'Brand-consistent color systems and typography',
      'User experience (UX) wireframing and prototyping',
      'Accessibility baked in from the first wireframe',
    ],
    'deliverables' => [
      'Discovery & brand alignment session',
      'Site map and wireframes',
      'Full desktop + mobile mockups',
      'Revision rounds until you\'re 100% satisfied',
      'Handoff-ready design files',
    ],
    'faqs' => [
      ['q'=>'How long does a custom design take?', 'a'=>'Typical design projects run 3–6 weeks depending on scope. We provide a detailed timeline after our discovery call.'],
      ['q'=>'Do I need to provide my own content?', 'a'=>'We can work with your existing content or connect you with our copywriting partners. We\'ll guide you through exactly what we need.'],
      ['q'=>'How many revisions are included?', 'a'=>'Our standard engagements include three full revision rounds. Most clients finalize their design within two.'],
      ['q'=>'Can you redesign an existing site?', 'a'=>'Absolutely. We audit your current site for UX gaps, analytics performance, and brand gaps before designing your new direction.'],
    ],
  ],

  'web-development' => [
    'title'    => 'Web Development',
    'icon'     => 'bi-code-slash',
    'tagline'  => 'Clean, performant code built to scale — from landing pages to enterprise platforms.',
    'full_desc'=> 'Great design means nothing without rock-solid engineering. Our development team builds fast, secure, and maintainable web applications using the right technology for your project — whether that\'s WordPress, Laravel, React, or a fully custom stack. We write clean code, document everything, and ensure your site is ready to grow.',
    'benefits' => [
      'Custom WordPress development (no bloated page builders)',
      'Laravel and PHP backend applications',
      'React and modern JavaScript frontends',
      'Performance-optimized — 90+ Google PageSpeed scores',
      'Secure coding practices, sanitized inputs, HTTPS everywhere',
      'Version-controlled codebase delivered to your repository',
    ],
    'deliverables' => [
      'Technical architecture and stack recommendation',
      'Full source code in your Git repository',
      'Staging environment for review before launch',
      'Cross-browser and device QA testing',
      'Launch support and post-deploy monitoring',
    ],
    'faqs' => [
      ['q'=>'Do you build on WordPress?', 'a'=>'Yes — WordPress is our primary CMS for content-driven sites. We build custom themes and plugins, never relying on heavy page builders that slow performance.'],
      ['q'=>'Can you take over development someone else started?', 'a'=>'We do code audits and can inherit existing projects. We\'ll be upfront about what we find and what it will take to bring it up to standard.'],
      ['q'=>'What about maintenance after launch?', 'a'=>'We offer ongoing maintenance plans that include updates, security patches, backups, and monitoring. See our Hosting & Maintenance service for details.'],
      ['q'=>'Do I own my code?', 'a'=>'Yes, always. Upon final payment you receive full ownership of all custom code we write for your project.'],
    ],
  ],

  'ada-accessibility' => [
    'title'    => 'ADA Accessibility Compliance',
    'icon'     => 'bi-universal-access',
    'tagline'  => '100% ADA compliance pass rate — we\'ve never missed a remediation target.',
    'full_desc'=> 'ADA Title II now covers all state and local government websites. Title III applies to commercial entities. Non-compliance exposes organizations to lawsuits, DOJ complaints, and reputational damage. Our accessibility team performs full WCAG 2.1 AA audits, remediates every identified issue, and certifies your site before launch — with documentation you can use to defend against claims.',
    'benefits' => [
      'Full WCAG 2.1 A, AA, and AAA audit',
      'Section 508 compliance for government entities',
      'Remediation of all identified barriers — not just reporting',
      'Screen reader testing with NVDA, JAWS, VoiceOver',
      'Keyboard-navigation audit and fix',
      'Signed accessibility statement and compliance report',
    ],
    'deliverables' => [
      'Initial automated + manual audit report',
      'Prioritized remediation roadmap',
      'Full remediation of Level A and AA failures',
      'Re-audit confirmation report',
      'Accessibility statement page and compliance certificate',
    ],
    'faqs' => [
      ['q'=>'Is my organization required to comply with ADA?', 'a'=>'If you are a state or local government entity (Title II) or a business open to the public (Title III), yes. The DOJ finalized rules requiring digital accessibility in 2024.'],
      ['q'=>'What happens if we get a demand letter?', 'a'=>'Contact us immediately. We provide expedited remediation and documentation to support your legal response. Many clients come to us after receiving a letter.'],
      ['q'=>'How long does remediation take?', 'a'=>'Simple sites: 1–2 weeks. Complex enterprise sites: 4–8 weeks. We\'ll give you an accurate estimate after the initial audit.'],
      ['q'=>'Do you provide ongoing compliance monitoring?', 'a'=>'Yes — our maintenance plans include monthly accessibility scans and quarterly manual reviews to catch regressions from content updates.'],
    ],
  ],

  'hosting-maintenance' => [
    'title'    => 'Hosting & Maintenance',
    'icon'     => 'bi-server',
    'tagline'  => 'Enterprise-grade hosting with 99.9% uptime SLA and proactive monitoring.',
    'full_desc'=> 'Your website should never go down, never get hacked, and always load in under two seconds. Our managed hosting plans give you enterprise infrastructure — cloud servers, CDN, daily backups, and 24/7 monitoring — plus a team that handles every update, patch, and performance tweak so you can focus on your mission.',
    'benefits' => [
      '99.9% uptime SLA with monitoring alerts',
      'Daily automated backups with 30-day retention',
      'WordPress core, plugin, and theme updates',
      'Malware scanning and security hardening',
      'CDN acceleration for fast global load times',
      'Dedicated account manager for all requests',
    ],
    'deliverables' => [
      'Managed cloud hosting environment',
      'SSL certificate installation and renewal',
      'Monthly maintenance report',
      'Priority support ticket queue',
      'Annual performance and security review',
    ],
    'faqs' => [
      ['q'=>'What hosting infrastructure do you use?', 'a'=>'We deploy on enterprise cloud providers (AWS, DigitalOcean, and Cloudflare) with redundant architecture and CDN delivery globally.'],
      ['q'=>'Can you migrate my existing site to your hosting?', 'a'=>'Yes — we handle the full migration with zero downtime. DNS cutover is planned and executed during low-traffic hours.'],
      ['q'=>'What\'s your support response time?', 'a'=>'Business plan: 4-hour response during business hours. Enterprise: 1-hour response, 24/7 for critical issues.'],
      ['q'=>'Do you host non-WordPress sites?', 'a'=>'Yes. We host PHP/Laravel, static HTML, and Node.js applications. Contact us to discuss your stack.'],
    ],
  ],

  'seo' => [
    'title'    => 'Search Engine Optimization',
    'icon'     => 'bi-graph-up-arrow',
    'tagline'  => 'Organic traffic that compounds — built on technical excellence and real content strategy.',
    'full_desc'=> 'SEO is a long game, but the right foundation accelerates everything. We combine technical SEO (Core Web Vitals, schema markup, crawlability), on-page optimization, and content strategy to build lasting search visibility for your most valuable keywords. Our government and ADA clients often rank #1 in their regions within 6 months.',
    'benefits' => [
      'Technical SEO audit and remediation',
      'Core Web Vitals optimization (LCP, CLS, FID)',
      'Keyword research and content strategy',
      'On-page optimization for priority pages',
      'Local SEO and Google Business Profile management',
      'Monthly rank tracking and analytics reporting',
    ],
    'deliverables' => [
      'Full technical SEO audit report',
      'Target keyword matrix with difficulty and volume',
      'Optimized meta titles, descriptions, and headings',
      'Schema markup implementation',
      'Monthly performance report with rankings and traffic',
    ],
    'faqs' => [
      ['q'=>'How long before I see SEO results?', 'a'=>'Technical fixes and on-page changes often show results in 4–8 weeks. Competitive keyword rankings typically take 3–6 months of sustained effort.'],
      ['q'=>'Do you guarantee rankings?', 'a'=>'No ethical SEO agency guarantees specific rankings — search algorithms change. We guarantee a documented process, transparent reporting, and measurable progress.'],
      ['q'=>'Do you do link building?', 'a'=>'Yes — white-hat link acquisition through digital PR, local citations, and partnership content. We never buy links or use spammy tactics that create future penalties.'],
      ['q'=>'Can you fix a Google penalty?', 'a'=>'Yes. We perform full manual action and algorithmic penalty assessments and have successfully recouped traffic for multiple clients.'],
    ],
  ],

  'custom-software' => [
    'title'    => 'Custom Software Development',
    'icon'     => 'bi-cpu',
    'tagline'  => 'Purpose-built software that automates workflows and eliminates off-the-shelf limitations.',
    'full_desc'=> 'When no existing software does exactly what you need, we build it. Our team designs and develops custom web applications — internal tools, citizen portals, case management systems, permit platforms, and more — with clean architecture that your team can maintain and extend for years.',
    'benefits' => [
      'Requirements discovery and technical scoping',
      'Database architecture and API design',
      'Role-based access control and authentication',
      'Government-grade security and data handling',
      'Integration with third-party APIs and legacy systems',
      'User training and comprehensive documentation',
    ],
    'deliverables' => [
      'Technical requirements specification',
      'Database schema and API documentation',
      'Fully tested application with QA sign-off',
      'Staging and production deployment',
      'Source code delivery and knowledge transfer',
    ],
    'faqs' => [
      ['q'=>'How do you scope a custom software project?', 'a'=>'We start with a paid discovery engagement: requirements workshops, user interviews, and a technical specification document. This scopes the build accurately before any commitment.'],
      ['q'=>'What technologies do you build with?', 'a'=>'Primarily Laravel (PHP), React, and MySQL for web applications. We evaluate technology against your team\'s maintenance capacity, not just our preferences.'],
      ['q'=>'Can you integrate with our existing software?', 'a'=>'Yes — we regularly integrate with Tyler Technologies, Accela, Salesforce, QuickBooks, and custom legacy systems via REST APIs and file-based integrations.'],
      ['q'=>'What about ongoing support after launch?', 'a'=>'We offer retainer-based support agreements for bug fixes, enhancements, and minor feature additions. Most custom software clients retain us on an ongoing basis.'],
    ],
  ],

  'ecommerce' => [
    'title'    => 'E-Commerce Solutions',
    'icon'     => 'bi-bag-check-fill',
    'tagline'  => 'Online stores built to sell — optimized checkout, fast load times, and zero abandoned carts.',
    'full_desc'=> 'E-commerce success hinges on trust, speed, and a frictionless checkout. We build WooCommerce and Shopify stores designed to convert, with product page optimization, streamlined checkout flows, payment gateway integration, and performance tuning that keeps bounce rates low and conversion rates high.',
    'benefits' => [
      'WooCommerce and Shopify development',
      'Custom product pages with conversion-focused layouts',
      'Streamlined checkout with minimal friction',
      'Payment gateway integration (Stripe, PayPal, Square)',
      'Inventory and order management setup',
      'Abandoned cart and email automation',
    ],
    'deliverables' => [
      'Full store design and development',
      'Product import and catalog setup',
      'Payment and shipping configuration',
      'Tax and legal compliance setup',
      'Analytics and conversion tracking',
    ],
    'faqs' => [
      ['q'=>'WooCommerce or Shopify — which is better?', 'a'=>'Shopify is easier to manage for non-technical owners; WooCommerce gives more flexibility and lower ongoing fees. We recommend based on your catalog size, technical comfort, and budget.'],
      ['q'=>'Can you migrate our existing store?', 'a'=>'Yes — we migrate products, customers, orders, and SEO settings. No data loss, no downtime during business hours.'],
      ['q'=>'Do you help with product photography or copywriting?', 'a'=>'We can connect you with our creative partners for product photography and copywriting. High-quality product content is one of the highest-ROI investments in e-commerce.'],
      ['q'=>'How do you optimize for conversion?', 'a'=>'We implement proven CRO practices: trust badges, clear CTAs, simplified navigation, fast load times, and mobile-optimized checkout. We can also set up A/B testing frameworks.'],
    ],
  ],

  'government-municipal' => [
    'title'    => 'Government & Municipal Websites',
    'icon'     => 'bi-bank2',
    'tagline'  => 'Compliant, accessible, and citizen-friendly government websites — from villages to counties.',
    'full_desc'=> 'Government websites serve every resident and must meet the highest standards of accessibility, transparency, and security. We\'ve built and maintained 50+ government and municipal websites — city halls, county courts, school districts, emergency services, and state agencies. We understand procurement processes, ADA Title II requirements, and the need for easy content management by non-technical staff.',
    'benefits' => [
      'ADA Title II and Section 508 compliant by default',
      'WCAG 2.1 AA certified with compliance documentation',
      'Easy-to-use CMS for non-technical staff',
      'Emergency alert banner integration',
      'Online forms, permits, and payment portals',
      'Procurement-friendly pricing and documentation',
    ],
    'deliverables' => [
      'Full site design and development',
      'ADA compliance audit and certification',
      'Staff CMS training (live and recorded)',
      'Launch and migration support',
      'Ongoing hosting, maintenance, and compliance monitoring',
    ],
    'faqs' => [
      ['q'=>'Are you familiar with government procurement processes?', 'a'=>'Yes — we work within RFP/RFQ frameworks, provide required documentation (W-9, insurance, references), and have completed procurement for municipalities of all sizes.'],
      ['q'=>'How do you handle the DOJ\'s new Title II digital accessibility rules?', 'a'=>'Our government projects are built to WCAG 2.1 AA as a baseline, with full documentation. We also provide the accessibility statement required by the final rule.'],
      ['q'=>'Can non-technical staff manage the content?', 'a'=>'Absolutely. We build on WordPress with a simplified editorial interface so department heads and clerks can update pages, post news, and manage documents without developer help.'],
      ['q'=>'Do you have government client references?', 'a'=>'Yes — we can provide references from county courts, municipalities, and state agencies upon request during the RFP/proposal process.'],
    ],
  ],

];
