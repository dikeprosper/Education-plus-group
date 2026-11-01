<?php
$pageTitle = 'Education Plus ISR | Opening Doors. Creating Global Opportunities.';
$pageDesc  = 'Personalised guidance for students applying to universities in the United Kingdom, United States, Canada and Australia, from choosing a course to your student visa.';
$active    = 'home';

$isrBoxes = [
  'Course and Institution Selection Guidance',
  'Assessment of Academic Background and Study Objectives',
  'University and College Applications',
  'Application Document Guidance',
  'English Language Testing Application Support',
  'Student Visa Application Guidance and Document Preparation',
  'Support Throughout the Admissions and Visa Application Process',
];
$visaBoxes = [
  'Tourist and Visit Visas',
  'Family Visit Visas',
  'Work Visa Guidance',
  'Initial Visa Assessment and Advice on Next Steps',
];
$destinations = [
  ['uk', '🇬🇧', 'United Kingdom', 'Aerial view of Tower Bridge and the Tower of London beside the River Thames in London, United Kingdom', './image/country/uk/1.webp', 'object-[50%_45%]'],
  ['usa', '🇺🇸', 'United States', 'Statue of Liberty and the New York City skyline beneath an American flag, United States', './image/country/usa/1.webp', 'object-[50%_55%]'],
  ['canada', '🇨🇦', 'Canada', 'Welcome to Canada road sign with snow-capped mountains and forest in the background', './image/country/canada/1.webp', 'object-[50%_20%]'],
  ['australia', '🇦🇺', 'Australia', 'Snorkellers swimming over turquoise coral reef water at the Great Barrier Reef, Australia', './image/country/australia/1.webp', 'object-[50%_55%]'],
];
$values = [
  ['01. Integrity', 'Uncompromising honesty and ethical compliance in every recommendation.'],
  ['02. Excellence', 'Rigorous document curation and top-ranked institutional placement standards.'],
  ['03. Client Centred', 'Every student receives personalized roadmap options tailored to their profile.'],
  ['04. Empowerment', 'Equipping applicants with critical decision-making insights and confidence.'],
  ['05. Inclusivity', 'Democratizing access to international study for learners worldwide.'],
  ['06. Accountability', 'Reliable tracking, rapid communication, and transparent status updates.'],
];
$gallery = [
  ['./image/gallery/auck.jpg', 'The University of Auckland', 'New Zealand\'s No 1. ranked', 'Centuries of academic excellence and collegiate tradition.', 'ɴᴢ', 'The University of Auckland campus'],
  ['./image/gallery/lipscomb.jpg', 'University of Lipscomb', 'ASUN Conference', 'Premier research facilities, innovation centers, and vibrant grounds.', '🇺🇸', 'Lipscomb university campus grounds'],
  ['./image/gallery/sydney.jpg', 'University of Sydney Academic Grounds', 'Tier 1 / University', 'Grand historic collegiate landmarks and welcoming student communities.', 'ᴀᴜ', 'University of Sydney'],
  ['./image/gallery/consultation.jpg', 'Advisory & Intake Consultations', 'HQ • Personalized Counseling', 'Personalized academic profiling, prospectus review, and family support.', '🤝', 'Education advisors consulting student and family in modern bright office'],
  ['./image/gallery/milestone.jpg', 'Global Student Milestone', 'United Kingdom • Intake', 'Celebrating milestone arrivals and starting higher education overseas.', '✨', 'International student arriving in London overlooking Big Ben'],
];
$chevR = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>';
$expand = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>';
$box = 'group/box flex items-center gap-3 text-left bg-white rounded-2xl border border-slate-200/90 p-4 shadow-subtle hover:border-brand-royal hover:shadow-card-hover transition-all duration-300';
$num = 'w-8 h-8 rounded-lg bg-brand-tint text-brand-navy flex items-center justify-center font-bold text-sm shrink-0 group-hover/box:bg-brand-royal group-hover/box:text-white transition-colors';

require __DIR__ . '/includes/header.php';
?>

    <!-- BEGIN: HeroSection -->
    <section class="hero relative from-brand-ice via-white to-white pt-10 lg:pt-16 overflow-hidden" id="home">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
          <div class="lg:col-span-7 space-y-6">
            <div data-aos="fade-down" class="flex items-center text-slate-500 font-semibold text-[10px] sm:text-xs tracking-widest uppercase mb-4">
              <span>STUDY</span><span class="mx-2.5 text-slate-400">|</span><span>WORK</span><span class="mx-2.5 text-slate-400">|</span><span>TRAVEL</span><span class="mx-2.5 text-slate-400">|</span><span>SETTLE</span>
            </div>
            <h1 data-aos="fade-up" class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-slate-950 leading-[1.08] tracking-tight">Study Abroad<br /><span class="text-brand-orange">Made Easy</span></h1>
            <p data-aos="fade-up" class="text-sm text-slate-600 max-w-2xl leading-relaxed">Personalised guidance for students applying to universities in the United Kingdom, United States, Canada and Australia, from choosing a course to your student visa.</p>
            <div data-aos="fade-up" class="pt-2 flex items-center gap-4 text-[4px]">
              <a class="inline-flex items-center px-7 py-2.5 rounded-md text-white bg-brand-navy hover:bg-brand-navyDark transition-all duration-200 shadow-md shadow-brand-navy/25 text-sm" href="#faq-section">FAQs<svg class="w-5 h-5 ml-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
              <a class="inline-flex items-center px-4 py-2.5 rounded-md text-brand-navy bg-white hover:bg-brand-tint border border-slate-300 transition-all duration-200 shadow-sm text-sm" href="https://wa.me/447495359904" rel="noopener noreferrer" target="_blank">Chat on WhatsApp&nbsp;</a>
            </div>
            <div data-aos="fade-up" class="pt-6 flex flex-wrap gap-4 border-t border-slate-200">
              <div class="flex items-center space-x-2 text-slate-700 font-semibold text-xs">
                <span class="w-6 h-6 rounded-full bg-brand-tint text-brand-royal flex items-center justify-center shrink-0"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg></span>
                <span>Personalised Guidance</span>
              </div>
              <div class="flex items-center space-x-2 text-slate-700 font-semibold text-xs">
                <span class="w-6 h-6 rounded-full bg-brand-tint text-brand-royal flex items-center justify-center shrink-0"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg></span>
                <span>Global Opportunities</span>
              </div>
            </div>
          </div>
          <div class="lg:col-span-5 relative">
            <div data-aos="zoom-in" class="relative mx-auto max-w-md lg:max-w-none">
              <div class="absolute -top-6 -left-6 w-72 h-72 bg-brand-royal/10 rounded-full blur-3xl"></div>
              <div class="absolute -bottom-8 -right-8 w-72 h-72 bg-brand-navy/10 rounded-full blur-3xl"></div>
              <div class="rounded-3xl">
                <img loading="lazy" alt="International student with backpack and folder admiring Big Ben and the Palace of Westminster along River Thames in London" class="w-full transition-transform duration-700" src="./image/hero.webp" />
                <div class="absolute inset-0"></div>
                <div class="absolute bottom-5 left-4 right-4 sm:left-5 sm:right-5 bg-white/95 backdrop-blur-md rounded-full py-2.5 px-4 shadow-xl flex items-center justify-between border border-white/60">
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-xl shadow-inner shrink-0 overflow-hidden border border-slate-200"><span class="leading-none text-xl">🇬🇧</span></div>
                    <div class="text-left">
                      <p class="text-[12px] font-extrabold text-brand-navy tracking-wider uppercase leading-none">UNITED KINGDOM</p>
                      <p class="text-[11px] text-slate-500 font-medium leading-tight mt-0.5">Our Top Destination</p>
                    </div>
                  </div>
                  <a class="w-8 h-8 rounded-full bg-slate-100 hover:bg-brand-royal hover:text-white text-brand-navy flex items-center justify-center transition-colors shadow-sm shrink-0" href="#destinations"><span class="text-xs font-bold">→</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img loading="lazy" src="./image/orangebg2.webp" style="width: 100%" class="heroOverlay max-w-8xl mx-auto" alt="" />
    </section>
    <!-- END: HeroSection -->

    <!-- BEGIN: ImpactMetricsBar -->
    <section class="bg-brand-navy text-white py-6 relative z-20 shadow-lg" data-purpose="metrics-bar">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-4 gap-8 divide-y lg:divide-y-0 lg:divide-x divide-brand-royal/40">
          <?php foreach ([['10+ Key', 'Global Destinations'], ['50+', 'Top Universities'], ['100%', 'Dedicated Advisory'], ['24-48h', 'Prompt Response']] as [$big, $small]): ?>
          <div data-aos="fade-up" class="flex flex-col items-center text-center">
            <div class="text-1xl lg:text-3xl font-extrabold text-white tracking-tight"><?= $big ?></div>
            <div class="text-[10px] lg:text-[14px] text-blue-200"><?= $small ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- END: ImpactMetricsBar -->

    <!-- BEGIN: CoreServicesOverview -->
    <section class="py-20 bg-brand-ice" data-purpose="services-overview" id="services">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="text-center max-w-3xl mx-auto mb-14">
          <h2 class="mt-1 text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">What we offer</h2>
          <p class="mt-3 text-slate-600 text-sm">Education Plus ISR operates tailored recruitment and advisory divisions designed to eliminate ambiguity and streamline your path to overseas success.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

          <!-- ISR: the cards link to the dedicated ISR page -->
          <div data-aos="fade-up">
            <div class="flex flex-col gap-4">
              <a href="./isr" class="group bg-white rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center gap-6 sm:gap-8 shadow-subtle hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300">
                <div class="w-full sm:w-36 h-48 sm:h-36 shrink-0 overflow-hidden rounded-3xl bg-brand-tint">
                  <img src="./image/isr.webp" alt="International student planning to study abroad" loading="lazy" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="min-w-0">
                  <h3 class="text-1xl sm:text-[23px] font-extrabold text-brand-navy leading-tight group-hover:text-brand-royal transition-colors">International Student Recruitment (ISR)</h3>
                  <p class="mt-3 text-slate-600 text-[15px] leading-relaxed">Guidance for students applying to study in the United Kingdom, United States, Canada and Australia.</p>
                  <span class="mt-4 inline-flex items-center gap-1.5 text-sm font-bold text-brand-royal group-hover:gap-3 transition-all duration-300">Learn more <?= $chevR ?></span>
                </div>
              </a>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <?php foreach ($isrBoxes as $i => $label): ?>
                <a data-aos="fade-up" href="./isr" class="<?= $box ?><?= ($i === count($isrBoxes) - 1 && count($isrBoxes) % 2) ? ' sm:col-span-2' : '' ?>">
                  <span class="<?= $num ?>"><?= $i + 1 ?></span>
                  <span class="text-sm font-semibold text-brand-navy leading-snug"><?= h($label) ?></span>
                </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Visa Support Services -->
          <div data-aos="fade-up">
            <div class="flex flex-col gap-4">
              <div class="group bg-white rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center gap-6 sm:gap-8 shadow-subtle hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300 cursor-pointer" onclick="openServiceModal('visa')" onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openServiceModal('visa')}" role="button" tabindex="0">
                <div class="w-full sm:w-36 h-48 sm:h-36 shrink-0 overflow-hidden rounded-3xl bg-brand-tint">
                  <img src="./image/gallery/consultation.jpg" alt="Advisors consulting a student and family" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="min-w-0">
                  <h3 class="text-1xl sm:text-[23px] font-extrabold text-brand-navy leading-tight group-hover:text-brand-royal transition-colors">Visa Support Services</h3>
                  <p class="mt-3 text-slate-600 text-[15px] leading-relaxed">Guidance for tourist, family and work visas, with an initial assessment and advice on your next steps.</p>
                  <span class="mt-4 inline-flex items-center gap-1.5 text-sm font-bold text-brand-royal group-hover:gap-3 transition-all duration-300">Learn more <?= $chevR ?></span>
                </div>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <?php foreach ($visaBoxes as $i => $label): ?>
                <button data-aos="fade-up" type="button" onclick="openServiceModal('visa')" class="<?= $box ?>">
                  <span class="<?= $num ?>"><?= $i + 1 ?></span>
                  <span class="text-sm font-semibold text-brand-navy leading-snug"><?= h($label) ?></span>
                </button>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END: CoreServicesOverview -->

    <!-- BEGIN: StudyDestinations -->
    <section class="py-20 bg-white" data-purpose="study-destinations" id="destinations">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="flex flex-col md:flex-row md:items-end justify-between mb-8">
          <div>
            <h2 class="mt-1 text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Study in Your Dream Destination</h2>
            <p class="mt-2 text-slate-600 text-base max-w-xl">Access world-class higher education in premier countries. We guide you into world-ranked universities aligned with your career goals.</p>
          </div>
          <div class="mt-4 md:mt-0 flex justify-between items-center gap-4">
            <a class="inline-flex items-center text-sm font-bold text-brand-navy hover:underline" href="#contact">View Entry Requirements <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
            <div class="flex gap-2">
              <button id="destPrev" type="button" aria-label="Previous" class="w-10 h-10 rounded-full border border-slate-200 bg-white text-brand-navy flex items-center justify-center hover:bg-brand-royal hover:text-white transition disabled:opacity-40 disabled:pointer-events-none">←</button>
              <button id="destNext" type="button" aria-label="Next" class="w-10 h-10 rounded-full border border-slate-200 bg-white text-brand-navy flex items-center justify-center hover:bg-brand-royal hover:text-white transition disabled:opacity-40 disabled:pointer-events-none">→</button>
            </div>
          </div>
        </div>
        <div id="destTrack" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pt-2 pb-6 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
          <?php foreach ($destinations as [$key, $flag, $name, $alt, $img, $pos]): ?>
          <div data-slide class="snap-start shrink-0 basis-[85%] sm:basis-[calc((100%-1.5rem)/2)] lg:basis-[calc((100%-3rem)/3)]">
            <div class="h-full rounded-2xl border border-slate-200 overflow-hidden bg-white shadow-subtle hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between cursor-pointer" onclick="openUniversityLightbox('<?= $key ?>')">
              <div class="h-44 overflow-hidden relative">
                <img loading="lazy" alt="<?= h($alt) ?>" class="w-full h-full object-cover <?= $pos ?> group-hover:scale-105 transition-transform duration-500" src="<?= $img ?>" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-3 left-3 bg-white p-1 rounded-full shadow-md flex items-center space-x-1.5 px-2"><span class="text-sm"><?= $flag ?></span><span class="text-[11px] font-bold text-brand-navy"><?= $name ?></span></div>
              </div>
              <div class="p-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-brand-royal">
                <button class="text-left font-bold text-brand-royal hover:underline" onclick="event.stopPropagation(); openUniversityLightbox('<?= $key ?>');" type="button">Explore country</button>
                <span class="w-7 h-7 rounded-full bg-brand-tint flex items-center justify-center group-hover:bg-brand-royal group-hover:text-white transition-colors">→</span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <script>
        (function () {
          const track = document.getElementById('destTrack'), prev = document.getElementById('destPrev'), next = document.getElementById('destNext');
          const step = () => track.querySelector('[data-slide]').offsetWidth + 24;
          const update = () => { prev.disabled = track.scrollLeft <= 4; next.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 4; };
          prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
          next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
          track.addEventListener('scroll', update, { passive: true });
          window.addEventListener('resize', update);
          update();
        })();
      </script>
    </section>
    <!-- END: StudyDestinations -->

    <!-- BEGIN: AboutAndValuesSection -->
    <section class="py-20 bg-brand-ice border-t border-slate-200" data-purpose="about-section" id="about">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          <div data-aos="fade-right" class="lg:col-span-5 relative">
            <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white">
              <img loading="lazy" alt="Professional and warm international education advisors consulting with a student and family in a modern bright office" class="w-full h-[420px] object-cover object-center" src="./image/about.webp" />
            </div>
            <div class="absolute -bottom-6 right-6 bg-brand-navy text-white p-5 rounded-2xl shadow-xl max-w-xs border border-brand-royal/30 cursor-pointer hover:bg-brand-navyDark transition-colors group" onclick="openLeadershipModal('founder')" role="button" tabindex="0">
              <p class="text-xs italic text-blue-100">"Education is more than a degree; it is the catalyst for global mobility and lifelong leadership."</p>
              <div class="flex items-center justify-between mt-2">
                <p class="text-[11px] font-bold text-white">— Education Plus ISR Directorate</p>
                <span class="text-[10px] text-blue-300 font-semibold group-hover:underline flex items-center gap-1">View Bio →</span>
              </div>
            </div>
          </div>
          <div class="lg:col-span-7">
            <div data-aos="fade-up">
              <span class="text-brand-navy font-bold text-[9px] uppercase tracking-widest bg-white px-3.5 py-1.5 rounded-full border border-brand-navy/30">About Education Plus ISR</span>
              <h2 class="mt-1 text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Building Trusted Bridges to Global Education</h2>
              <p class="mt-3 text-slate-600 text-sm leading-relaxed">We are an international education and advisory consultancy committed to helping ambitious individuals access top-tier learning opportunities across the UK, US, Canada, and Australia. Through our dedicated subsidiary, <span class="font-bold text-brand-navy">Education Plus ISR</span>, we remove systemic barriers, ensure verified institutional representation, and deliver ethical admissions guidance.</p>
            </div>
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4">
              <?php foreach ($values as [$t, $d]): ?>
              <div data-aos="fade-up" class="bg-white p-4 rounded-xl border border-slate-200">
                <span class="text-brand-royal font-bold text-base block mb-1"><?= $t ?></span>
                <p class="text-xs text-slate-500"><?= $d ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END: AboutAndValuesSection -->

    <!-- BEGIN: CTASection -->
    <section class="banner text-white py-16 relative overflow-hidden" data-purpose="call-to-action-band">
      <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#1F5FA8_1px,transparent_1px)] [background-size:16px_16px]"></div>
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span data-aos="fade-down" class="inline-block px-3.5 py-1 mb-4 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-royal/20 text-blue-200 border border-brand-royal/30">Student Resources, Guides &amp; FAQs</span>
        <h2 data-aos="fade-up" class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">Empowering Your Global Education Journey</h2>
        <p data-aos="fade-up" class="mt-4 text-slate-300 text-base max-w-2xl mx-auto leading-relaxed">Access comprehensive downloadables, visa guidelines, application checklists, and verified answers to your most pressing study abroad questions.</p>
        <div data-aos="fade-up" class="mt-8 flex flex-wrap justify-center gap-4">
          <a class="px-8 py-3.5 rounded-xl text-white bg-brand-royal hover:bg-blue-600 transition-all duration-200 shadow-lg flex items-center group" href="#faq-section"><span>Explore Resources &amp; FAQs</span></a>
          <a class="px-7 py-2 rounded-xl text-white bg-brand-navy hover:bg-brand-navyDark transition-all duration-200 flex items-center" href="https://wa.me/447495359904" rel="noopener noreferrer" target="_blank"><span>Direct WhatsApp Inquiry</span></a>
        </div>
      </div>
    </section>
    <!-- END: CTASection -->

    <!-- BEGIN: GallerySection -->
    <section class="py-20 bg-white border-t border-slate-200" id="gallery" data-purpose="gallery-section">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="text-center max-w-3xl mx-auto mb-14">
          <h2 class="mt-1 text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Visual Showcase</h2>
          <p class="mt-3 text-slate-600 text-base">Moments from student journeys, historic campuses, and international advising.</p>
        </div>
        <div id="galTrack" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pt-2 pb-6 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
          <?php foreach ($gallery as [$img, $title, $tag, $desc, $flag, $alt]): ?>
          <div data-slide class="snap-start shrink-0 basis-[85%] sm:basis-[calc((100%-1.5rem)/2)] lg:basis-[calc((100%-3rem)/3)]">
            <div class="group relative h-80 rounded-3xl overflow-hidden cursor-pointer shadow-subtle hover:shadow-card-hover transition-all duration-300" onclick="openPhotoLightbox(<?= js($img) ?>, <?= js($title) ?>, <?= js($tag) ?>, <?= js($desc) ?>)" role="button" tabindex="0">
              <img loading="lazy" src="<?= $img ?>" alt="<?= h($alt) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>
              <div class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0"><?= $expand ?></div>
              <div class="absolute bottom-5 left-5 right-5 text-white">
                <div class="flex items-center gap-2 mb-1.5"><span class="text-xs"><?= $flag ?></span><span class="text-[11px] font-bold uppercase tracking-wider text-blue-200"><?= h($tag) ?></span></div>
                <h4 class="text-lg font-bold tracking-tight text-white leading-snug"><?= h($title) ?></h4>
                <p class="text-xs text-slate-300 mt-1 line-clamp-1"><?= h($desc) ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="mt-4 flex justify-center gap-3">
          <button id="galPrev" type="button" aria-label="Previous" class="w-11 h-11 rounded-full border border-slate-200 bg-white text-brand-navy flex items-center justify-center hover:bg-brand-royal hover:text-white transition disabled:opacity-40 disabled:pointer-events-none">←</button>
          <button id="galNext" type="button" aria-label="Next" class="w-11 h-11 rounded-full border border-slate-200 bg-white text-brand-navy flex items-center justify-center hover:bg-brand-royal hover:text-white transition disabled:opacity-40 disabled:pointer-events-none">→</button>
        </div>
      </div>
      <script>
        (function () {
          const track = document.getElementById('galTrack'), prev = document.getElementById('galPrev'), next = document.getElementById('galNext');
          const step = () => track.querySelector('[data-slide]').offsetWidth + 24;
          const update = () => { prev.disabled = track.scrollLeft <= 4; next.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 4; };
          prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
          next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
          track.addEventListener('scroll', update, { passive: true });
          window.addEventListener('resize', update);
          update();
        })();
      </script>
    </section>
    <!-- END: GallerySection -->

    <!-- BEGIN: Photo Gallery Lightbox Modal -->
    <div aria-modal="true" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-6 bg-slate-950/90 backdrop-blur-md transition-opacity duration-300 opacity-0 pointer-events-none" id="photo-lightbox-modal" role="dialog">
      <div class="relative w-full max-w-4xl bg-slate-900 rounded-3xl overflow-hidden shadow-2xl border border-slate-700/60 flex flex-col max-h-[92vh]">
        <div class="flex items-center justify-between px-6 py-4 bg-slate-900/95 border-b border-slate-800">
          <div>
            <h4 class="text-base sm:text-lg font-bold text-white tracking-tight" id="photo-modal-title">Gallery Photo</h4>
            <p class="text-xs text-blue-300 font-medium" id="photo-modal-location">Location Tag</p>
          </div>
          <button aria-label="Close photo preview" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-colors" onclick="closePhotoLightbox()" type="button">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
        </div>
        <div class="relative bg-black flex items-center justify-center min-h-[340px] max-h-[65vh] overflow-hidden">
          <img loading="lazy" src="" alt="" id="photo-modal-img" class="max-h-[65vh] w-auto max-w-full object-contain" />
        </div>
        <div class="px-6 py-4 bg-slate-900 border-t border-slate-800 flex items-center justify-between text-xs text-slate-300">
          <p id="photo-modal-desc" class="line-clamp-2">Description</p>
          <a href="#contact" onclick="closePhotoLightbox()" class="ml-4 shrink-0 px-4 py-2 rounded-xl font-bold text-white bg-brand-royal hover:bg-blue-600 transition-colors shadow-md">Speak With Advisor</a>
        </div>
      </div>
    </div>

    <!-- BEGIN: Interactive Bio Pop-up Modal -->
    <div aria-modal="true" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-slate-950/80 backdrop-blur-md transition-opacity duration-300 opacity-0 pointer-events-none" id="leadership-modal" role="dialog">
      <div class="relative w-full max-w-2xl bg-white rounded-3xl overflow-hidden shadow-2xl border border-slate-200 flex flex-col max-h-[90vh]">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50">
          <span class="text-xs font-bold uppercase tracking-wider text-brand-navy" id="bio-modal-badge">Executive Profile</span>
          <button class="w-8 h-8 rounded-full bg-white hover:bg-slate-200 text-slate-500 flex items-center justify-center transition-colors shadow-xs" onclick="closeLeadershipModal()" type="button">✕</button>
        </div>
        <div class="p-6 sm:p-8 overflow-y-auto space-y-5">
          <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5">
            <img loading="lazy" id="bio-modal-img" src="" alt="" class="w-28 h-28 rounded-2xl object-cover shadow-md border-2 border-brand-navy shrink-0" />
            <div class="text-center sm:text-left">
              <h3 class="text-2xl font-extrabold text-brand-navy" id="bio-modal-name">David Chen</h3>
              <p class="text-sm font-bold text-brand-royal" id="bio-modal-role">Founder &amp; Chief Executive Officer</p>
              <p class="text-xs text-slate-500 mt-0.5" id="bio-modal-dept">Education Plus ISR Directorate</p>
            </div>
          </div>
          <div class="text-sm text-slate-600 leading-relaxed space-y-3 pt-2 border-t border-slate-100" id="bio-modal-text">
            <p>Biographical profile detailing professional leadership, advisory standards, and commitments to verified admissions across the UK, USA, Canada, and Australia.</p>
          </div>
        </div>
        <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
          <span class="text-xs text-slate-500">24–48h Consultation Response</span>
          <a href="#contact" onclick="closeLeadershipModal()" class="px-5 py-2.5 rounded-xl font-bold text-white bg-brand-navy hover:bg-brand-navyDark transition-colors text-xs shadow-md">Schedule Consultation</a>
        </div>
      </div>
    </div>

    <!-- BEGIN: Interactive University Lightbox Modal -->
    <div aria-modal="true" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-6 bg-slate-950/85 backdrop-blur-md transition-opacity duration-300 opacity-0 pointer-events-none" id="university-lightbox-modal" role="dialog">
      <div class="relative w-full max-w-5xl bg-slate-900 rounded-3xl overflow-y-auto shadow-2xl border border-slate-700/60 flex flex-col max-h-[92vh]">
        <div class="flex items-center justify-between px-5 py-4 bg-slate-900/90 border-b border-slate-800 z-20">
          <div class="flex items-center space-x-3">
            <span class="text-2xl" id="lightbox-flag">🇬🇧</span>
            <div><h4 class="text-base sm:text-lg font-bold text-white tracking-tight gap-2"><div id="lightbox-country-name">United Kingdom</div></h4></div>
          </div>
          <div class="flex items-center space-x-3">
            <span class="text-xs font-semibold text-slate-300 bg-slate-800/80 px-2.5 py-1 rounded-full border border-slate-700" id="lightbox-counter">1 / 3</span>
            <button aria-label="Close modal" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-colors" onclick="closeUniversityLightbox()" type="button">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
          </div>
        </div>
        <div class="relative bg-black h-[45vh] sm:h-[min(430px,48vh)] shrink-0 overflow-hidden flex items-center justify-center">
          <img alt="" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl opacity-60 pointer-events-none select-none" id="lightbox-bg-img" src="./image/country/uk/1.webp" />
          <img alt="Aerial view of Tower Bridge and the Tower of London beside the River Thames in London, United Kingdom" class="relative z-10 h-full w-auto max-w-full object-contain select-none transition-opacity duration-300" id="lightbox-main-img" src="./image/country/uk/1.webp" style="opacity: 1" />
          <button aria-label="Previous photo" class="absolute z-20 left-3 sm:left-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-slate-900/70 hover:bg-slate-900 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-lg hover:scale-105" onclick="navigateLightbox(-1)" type="button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
          </button>
          <button aria-label="Next photo" class="absolute z-20 right-3 sm:right-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-slate-900/70 hover:bg-slate-900 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-lg hover:scale-105" onclick="navigateLightbox(1)" type="button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
          </button>
        </div>
        <div class="px-5 py-4 bg-slate-900 border-t border-slate-800 flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-white">
          <div class="min-w-0">
            <p class="text-[11px] font-bold uppercase tracking-wider text-blue-200" id="lightbox-location">London, England</p>
            <h3 class="text-lg sm:text-xl font-bold tracking-tight text-white leading-tight mt-0.5" id="lightbox-uni-name">Tower Bridge &amp; the River Thames</h3>
            <p class="text-xs sm:text-sm text-slate-300 mt-1 leading-relaxed max-w-2xl" id="lightbox-uni-desc">London is home to several world-ranked universities and one of the most international student communities anywhere.</p>
          </div>
          <a class="shrink-0 self-start sm:self-center px-4 py-2 rounded-xl text-xs font-bold text-white bg-brand-royal hover:bg-blue-600 transition-colors shadow-md" href="#contact" onclick="closeUniversityLightbox(); fillConsultationForm();">Inquire Admission</a>
        </div>
        <div class="px-5 py-3.5 bg-slate-900 border-t border-slate-800 flex flex-wrap items-center justify-between gap-3">
          <div class="flex items-center gap-1.5 sm:gap-2">
            <button class="px-2.5 py-1 rounded-lg text-xs font-bold text-white bg-brand-royal transition-colors" data-country="uk" onclick="switchLightboxCountry('uk')">🇬🇧 UK</button>
            <button class="px-2.5 py-1 rounded-lg text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800 transition-colors" data-country="usa" onclick="switchLightboxCountry('usa')">🇺🇸 USA</button>
            <button class="px-2.5 py-1 rounded-lg text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800 transition-colors" data-country="canada" onclick="switchLightboxCountry('canada')">🇨🇦 Canada</button>
            <button class="px-2.5 py-1 rounded-lg text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800 transition-colors" data-country="australia" onclick="switchLightboxCountry('australia')">🇦🇺 Australia</button>
          </div>
          <div class="flex items-center space-x-2" id="lightbox-indicators"></div>
        </div>
      </div>
    </div>

    <script>
      // Lightbox data (3 photos per country)
      const universityData = {
        uk: { country: "United Kingdom", flag: "🇬🇧", photos: [
          { title: "Tower Bridge & the River Thames", location: "London, England", image: "./image/country/uk/1.webp", alt: "Aerial view of Tower Bridge and the Tower of London beside the River Thames in London, United Kingdom", desc: "London is home to several world-ranked universities and one of the most international student communities anywhere." },
          { title: "Westminster & Big Ben", location: "London, England", image: "./image/country/uk/2.webp", alt: "Red double-decker bus passing Big Ben and the Houses of Parliament in Westminster, London", desc: "Landmarks, free national museums and green spaces to explore between classes." },
          { title: "Big Ben & Royal London", location: "London, England", image: "./image/country/uk/3.webp", alt: "White horses pulling a red carriage past Big Ben and the Houses of Parliament in London", desc: "Centuries of history and tradition shape everyday life in the UK capital." }
        ] },
        usa: { country: "United States", flag: "🇺🇸", photos: [
          { title: "Statue of Liberty & New York Skyline", location: "New York, USA", image: "./image/country/usa/1.webp", alt: "Statue of Liberty and the New York City skyline beneath an American flag flying against a blue sky", desc: "New York City is home to leading universities, global industries and endless opportunities." },
          { title: "Chicago Riverwalk & Skyline", location: "Chicago, Illinois", image: "./image/country/usa/2.webp", alt: "Tour boat on the Chicago River with the downtown skyline and autumn trees along the Riverwalk", desc: "A major hub for business, technology and research, with several well-known universities." },
          { title: "The U.S. Capitol", location: "Washington, D.C.", image: "./image/country/usa/3.webp", alt: "The U.S. Capitol dome in Washington, D.C. at dusk with a pink sky and traffic on the avenue below", desc: "The centre of government and international relations, with the free Smithsonian museums nearby." }
        ] },
        canada: { country: "Canada", flag: "🇨🇦", photos: [
          { title: "Welcome to Canada", location: "Across Canada", image: "./image/country/canada/1.webp", alt: "Welcome to Canada road sign above a highway with snow-capped mountains and pine forest behind it", desc: "A welcoming, bilingual country known for its mountains, forests and wide open roads." },
          { title: "Toronto's Food Market", location: "Toronto, Ontario", image: "./image/country/canada/2.webp", alt: "Shoppers walking through an indoor food market in Toronto with a Toronto Maple Leafs banner overhead", desc: "Canada's largest city is a multicultural hub with a food scene that reflects students from around the world." },
          { title: "Historic Old-Town Streets", location: "Canada", image: "./image/country/canada/3.webp", alt: "Cobbled pedestrian street lined with ivy-covered shops and a hanging shop sign in a historic Canadian district", desc: "Cobbled streets, local shops and European-style charm in Canada’s historic districts." }
        ] },
        australia: { country: "Australia", flag: "🇦🇺", photos: [
          { title: "Great Barrier Reef", location: "Queensland, Australia", image: "./image/country/australia/1.webp", alt: "Snorkellers swimming over turquoise coral reef water at the Great Barrier Reef, Australia", desc: "Study near one of the natural wonders of the world and snorkel the largest coral reef system on Earth." },
          { title: "Sydney Harbour & Harbour Bridge", location: "Sydney, New South Wales", image: "./image/country/australia/2.webp", alt: "Aerial view of the Sydney Harbour Bridge, the harbour waterfront and city skyline in Sydney, Australia", desc: "Sydney is Australia's largest city and home to several leading universities." },
          { title: "Kangaroos in the Park", location: "Western Australia", image: "./image/country/australia/3.webp", alt: "A group of kangaroos grazing on grass beneath tall eucalyptus trees in an Australian park", desc: "Native wildlife is never far away, with national parks just outside the major cities." }
        ] }
      };

      let currentCountryKey = "uk";
      let currentUniIndex = 0;
      const TAB_ON = "px-2.5 py-1 rounded-lg text-xs font-bold text-white bg-brand-royal transition-colors";
      const TAB_OFF = "px-2.5 py-1 rounded-lg text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800 transition-colors";

      function updateLightboxDOM() {
        const countryData = universityData[currentCountryKey];
        if (!countryData) return;
        const photo = countryData.photos[currentUniIndex];
        if (!photo) return;
        document.getElementById("lightbox-flag").textContent = countryData.flag;
        document.getElementById("lightbox-country-name").textContent = countryData.country;
        document.getElementById("lightbox-counter").textContent = `${currentUniIndex + 1} / ${countryData.photos.length}`;
        const mainImg = document.getElementById("lightbox-main-img");
        const bgImg = document.getElementById("lightbox-bg-img");
        mainImg.style.opacity = "0.4";
        setTimeout(() => { mainImg.src = photo.image; mainImg.alt = photo.alt; bgImg.src = photo.image; mainImg.style.opacity = "1"; }, 120);
        document.getElementById("lightbox-uni-name").textContent = photo.title;
        document.getElementById("lightbox-location").textContent = photo.location;
        document.getElementById("lightbox-uni-desc").textContent = photo.desc;
        document.querySelectorAll("[data-country]").forEach((btn) => {
          btn.className = btn.getAttribute("data-country") === currentCountryKey ? TAB_ON : TAB_OFF;
        });
        const indicators = document.getElementById("lightbox-indicators");
        indicators.innerHTML = "";
        countryData.photos.forEach((p, idx) => {
          const dot = document.createElement("button");
          dot.type = "button";
          dot.setAttribute("aria-label", `Show photo ${idx + 1}: ${p.title}`);
          dot.className = `h-2 rounded-full transition-all ${idx === currentUniIndex ? "w-6 bg-brand-royal" : "w-2 bg-slate-600 hover:bg-slate-400"}`;
          dot.onclick = () => { currentUniIndex = idx; updateLightboxDOM(); };
          indicators.appendChild(dot);
        });
      }
      function openUniversityLightbox(countryKey) {
        if (universityData[countryKey]) { currentCountryKey = countryKey; currentUniIndex = 0; }
        updateLightboxDOM();
        const modal = document.getElementById("university-lightbox-modal");
        modal.classList.remove("opacity-0", "pointer-events-none");
        modal.classList.add("opacity-100", "pointer-events-auto");
        document.body.style.overflow = "hidden";
      }
      function closeUniversityLightbox() {
        const modal = document.getElementById("university-lightbox-modal");
        modal.classList.remove("opacity-100", "pointer-events-auto");
        modal.classList.add("opacity-0", "pointer-events-none");
        document.body.style.overflow = "";
      }
      function navigateLightbox(direction) {
        const total = universityData[currentCountryKey].photos.length;
        currentUniIndex = (currentUniIndex + direction + total) % total;
        updateLightboxDOM();
      }
      function switchLightboxCountry(countryKey) {
        if (universityData[countryKey]) { currentCountryKey = countryKey; currentUniIndex = 0; updateLightboxDOM(); }
      }
      function fillConsultationForm() {
        const sel = document.getElementById("destination");
        const map = { uk: "UK", usa: "USA", canada: "Canada", australia: "Australia" };
        if (sel && map[currentCountryKey]) sel.value = map[currentCountryKey];
      }
      window.addEventListener("keydown", (e) => {
        const modal = document.getElementById("university-lightbox-modal");
        if (modal && modal.classList.contains("opacity-100")) {
          if (e.key === "ArrowLeft") navigateLightbox(-1);
          if (e.key === "ArrowRight") navigateLightbox(1);
        }
        if (e.key === "Escape") { closeLeadershipModal(); closePhotoLightbox(); closeUniversityLightbox(); }
      });
      const modalEl = document.getElementById("university-lightbox-modal");
      if (modalEl) modalEl.addEventListener("click", (e) => { if (e.target === modalEl) closeUniversityLightbox(); });

      function openLeadershipModal(id) {
        const people = {
          founder: ["David Chen", "Founder & Chief Executive Officer", "<p>With extensive leadership in cross-border higher education consulting, David has spearheaded institutional advisory bridges linking ambitious students with elite Russell Group, Ivy League, Canadian U15, and Australian Group of Eight universities.</p><p>David oversees the group's strategic compliance protocols, maintaining direct coordination with accredited admissions bodies, UCAS channels, and international education agencies.</p>"],
          team1: ["Sarah Jenkins", "Head of Admissions & UK Placements", "<p>Sarah directs university application processing for undergraduate and postgraduate candidates targeting the UK. She provides deep guidance on UCAS clearing, personal statement crafting, and faculty interview readiness.</p>"],
          team2: ["Marcus Adebayo", "Lead Advisor, North America & Australia", "<p>Marcus guides students into Designated Learning Institutions (DLIs) across Ontario, British Columbia, and US Tier-1 institutions, alongside Australian post-study work visa alignment.</p>"],
          team3: ["Elena Rostova", "Head of Visa Guidance & Compliance", "<p>Elena manages visa document compliance verification, CAS and COE validation, proof-of-funds analysis, and statutory immigration assessment.</p>"]
        };
        const p = people[id];
        if (!p) return;
        document.getElementById("bio-modal-name").textContent = p[0];
        document.getElementById("bio-modal-role").textContent = p[1];
        document.getElementById("bio-modal-img").src = "./image/staff/unnamed.jpg";
        document.getElementById("bio-modal-text").innerHTML = p[2];
        document.getElementById("leadership-modal").classList.remove("opacity-0", "pointer-events-none");
        document.body.style.overflow = "hidden";
      }
      function closeLeadershipModal() {
        document.getElementById("leadership-modal").classList.add("opacity-0", "pointer-events-none");
        document.body.style.overflow = "";
      }
      function openPhotoLightbox(src, title, location, desc) {
        document.getElementById("photo-modal-img").src = src;
        document.getElementById("photo-modal-title").textContent = title;
        document.getElementById("photo-modal-location").textContent = location;
        document.getElementById("photo-modal-desc").textContent = desc;
        document.getElementById("photo-lightbox-modal").classList.remove("opacity-0", "pointer-events-none");
        document.body.style.overflow = "hidden";
      }
      function closePhotoLightbox() {
        document.getElementById("photo-lightbox-modal").classList.add("opacity-0", "pointer-events-none");
        document.body.style.overflow = "";
      }
      // Visa service modal: the original markup for this was not in the page, so this is a safe no-op for now.
      function openServiceModal(type) {
        var modal = document.getElementById(type === "isr" ? "service-modal-isr" : "service-modal-visa");
        if (modal) { modal.classList.remove("opacity-0", "pointer-events-none"); document.body.style.overflow = "hidden"; }
      }
    </script>

<?php require __DIR__ . '/includes/footer.php'; ?>
