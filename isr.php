<?php
$pageTitle = 'Education Plus International Student Recruitment (ISR) | Education Plus Group';
$pageDesc  = 'Education Plus ISR, the flagship subsidiary of Education Plus Group, supports students applying to the UK, USA, Canada and Australia, from course choice to student visa guidance.';
$active    = 'isr';

$tick = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/></svg>';

$services = [
  ['Course and institution selection guidance', 'We shortlist courses and universities that fit your goals, budget and grades.'],
  ['Assessment of academic background and study objectives', 'We review your results and study objectives to show you where you are competitive.'],
  ['University and college applications', 'We prepare and submit your applications and track each one until you hear back.'],
  ['Application document guidance', 'Help with transcripts, references, your CV and a clear statement of purpose.'],
  ['English language testing application support', 'Where a test is required, we help you find out which one your school accepts and support your application.'],
  ['Student visa application guidance and document preparation', 'We explain what your visa application needs and help you prepare your documents. Visa decisions rest with the relevant authorities and outcomes cannot be guaranteed.'],
];
$programmes = [
  ['Foundation programmes', 'A preparatory year that leads into a degree.'],
  ['A Levels', 'Pre-university qualifications for university entry.'],
  ['International Baccalaureate (IB)', 'An international pre-university diploma.'],
  ['Undergraduate degrees', 'Bachelor\'s degrees across the four destinations.'],
  ['Top-up degrees', 'Build on a previous qualification to complete a full degree.'],
  ['Postgraduate degrees', 'Master\'s degrees, MBAs and doctorates.'],
];
$steps = [
  ['Free consultation', 'Tell us your goals, qualifications and budget. We reply within 24 to 48 hours.'],
  ['Profile assessment and shortlist', 'We assess your academic background and recommend courses and universities.'],
  ['Documents and English test', 'We help you gather your documents, write your statement and book a test if one is needed.'],
  ['Application and offer', 'We submit your applications and help you understand your offers and any conditions attached.'],
  ['Student visa application', 'We guide you through your student visa application and help you prepare your documents. Visa decisions rest with the relevant authorities and outcomes cannot be guaranteed.'],
];
$visa = [
  ['Tourist and visit visas', 'Guidance on the requirements and documents for short visits.'],
  ['Family visit visas', 'Help preparing an application to visit family abroad.'],
  ['Work visa guidance', 'Guidance on work visa routes and what each one requires.'],
  ['Initial visa assessment and advice on next steps', 'We review your situation and explain what to do next.'],
];
$documents = [
  'Secondary school results (SSCE)',
  'Degree certificate and academic transcripts (postgraduate)',
  'Valid international passport',
  'Reference letters, academic or work',
  'Statement of purpose and CV',
  'English test or GRE/GMAT score, if your school asks for one',
];

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<section class="page-hero relative overflow-hidden py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
    <div class="lg:col-span-7 space-y-6">
      <p data-aos="fade-down" class="text-sm text-slate-500"><a class="hover:text-brand-royal" href="./">Home</a> / <a class="hover:text-brand-royal" href="./#services">Services</a> / <span class="text-brand-navy font-semibold">ISR</span></p>
      <h1 data-aos="fade-up" class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-950 leading-[1.1] tracking-tight">International Student Recruitment, <span class="text-brand-orange">handled end to end</span></h1>
      <p data-aos="fade-up" class="text-base text-slate-600 max-w-2xl leading-relaxed">Education Plus International Student Recruitment (Education Plus ISR) is the flagship subsidiary of Education Plus Group. We give personalised guidance to students applying to the United Kingdom, United States, Canada and Australia, from choosing a course to your student visa application.</p>
      <div data-aos="fade-up" class="pt-2 flex flex-wrap items-center gap-4">
        <a class="inline-flex items-center px-7 py-3 rounded-md text-white bg-brand-navy hover:bg-brand-navyDark transition-all shadow-md shadow-brand-navy/25 text-sm" href="#contact">Book a free consultation</a>
        <a class="inline-flex items-center px-5 py-3 rounded-md text-brand-navy bg-white hover:bg-brand-tint border border-slate-300 transition-all shadow-sm text-sm" href="https://wa.me/447495359904" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
      </div>
    </div>
    <div data-aos="zoom-in" class="lg:col-span-5">
      <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white">
        <img alt="International student planning to study abroad" class="w-full h-[380px] object-cover object-top" src="./image/isr.webp" />
      </div>
    </div>
  </div>
</section>

<!-- What ISR covers -->
<section class="py-20 bg-brand-ice">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div data-aos="fade-up" class="max-w-3xl mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">What ISR covers</h2>
      <p class="mt-3 text-slate-600">Seven areas of support, so you always know what comes next between your first enquiry and your student visa application.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($services as [$t, $d]): ?>
      <div data-aos="fade-up" class="bg-white rounded-2xl p-6 shadow-subtle hover:shadow-card-hover transition-shadow">
        <h3 class="font-bold text-brand-navy text-lg"><?= h($t) ?></h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed"><?= h($d) ?></p>
      </div>
      <?php endforeach; ?>
      <div data-aos="fade-up" class="bg-white rounded-2xl p-6 shadow-subtle hover:shadow-card-hover transition-shadow border-2 border-brand-royal/30 sm:col-span-2 lg:col-span-3">
        <h3 class="font-bold text-brand-navy text-lg">Support throughout the admissions and visa application process</h3>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed max-w-3xl">Questions come up at every stage. We are on hand to answer them and to guide you through each step of your admissions and visa applications.</p>
      </div>
    </div>
  </div>
</section>

<!-- Programmes -->
<section class="py-20 bg-white border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div data-aos="fade-up" class="max-w-3xl mb-10">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Programmes we support</h2>
      <p class="mt-3 text-slate-600">From pre-university study to doctorates, we help you find and apply for the right level.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ($programmes as [$t, $d]): ?>
      <div data-aos="fade-up" class="rounded-2xl border border-slate-200 bg-brand-ice p-5"><h3 class="font-bold text-brand-navy"><?= h($t) ?></h3><p class="mt-1 text-sm text-slate-600"><?= h($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Process -->
<section class="py-20 bg-brand-ice border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12">
    <div data-aos="fade-right" class="lg:col-span-4">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">How it works</h2>
      <p class="mt-3 text-slate-600">Five steps from first conversation to your student visa application.</p>
      <a href="#contact" class="mt-6 inline-flex px-6 py-3 rounded-lg text-sm text-white bg-brand-navy hover:bg-brand-navyDark shadow-md shadow-brand-navy/20">Start step 1</a>
    </div>
    <ol class="lg:col-span-8 space-y-8">
      <?php foreach ($steps as $i => [$t, $d]): ?>
      <li data-aos="fade-up" class="step relative flex gap-5">
        <span class="shrink-0 w-10 h-10 rounded-full <?= $i === count($steps) - 1 ? 'bg-brand-orange' : 'bg-brand-navy' ?> text-white font-bold flex items-center justify-center"><?= $i + 1 ?></span>
        <div><h3 class="font-bold text-brand-navy text-lg"><?= h($t) ?></h3><p class="text-sm text-slate-600 mt-1 leading-relaxed"><?= h($d) ?></p></div>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- Visa support services -->
<section class="py-20 bg-white border-t border-slate-200" id="visa-support">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
    <div data-aos="fade-right" class="lg:col-span-5">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Visa support services</h2>
      <p class="mt-3 text-slate-600 leading-relaxed">Travelling or relocating for something other than study? Our team also guides tourist, family and work visa applications, starting with an initial assessment of your situation.</p>
      <p class="mt-6 text-sm text-slate-700 leading-relaxed bg-brand-ice border-l-4 border-brand-orange rounded-r-xl p-4"><strong class="text-brand-navy">Please note:</strong> Visa decisions rest with the relevant authorities and outcomes cannot be guaranteed.</p>
      <a href="#contact" class="mt-6 inline-flex px-6 py-3 rounded-lg text-sm text-white bg-brand-navy hover:bg-brand-navyDark shadow-md shadow-brand-navy/20">Ask about a visa</a>
    </div>
    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
      <?php foreach ($visa as [$t, $d]): ?>
      <div data-aos="fade-up" class="rounded-2xl border border-slate-200 bg-brand-ice p-6 hover:shadow-card-hover transition-shadow"><h3 class="font-bold text-brand-navy text-lg"><?= h($t) ?></h3><p class="mt-2 text-sm text-slate-600 leading-relaxed"><?= h($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Documents checklist -->
<section class="py-20 bg-brand-ice border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Start gathering these now</h2>
      <p class="mt-3 text-slate-600 leading-relaxed">Requirements differ between schools, but most applications ask for the documents below. Having them ready makes the process faster.</p>
    </div>
    <ul data-aos="fade-in" class="bg-white rounded-3xl p-6 sm:p-8 space-y-3 text-sm text-slate-700">
      <?php foreach ($documents as $doc): ?>
      <li class="flex gap-3"><span class="w-6 h-6 rounded-full bg-brand-tint text-brand-royal flex items-center justify-center shrink-0"><?= $tick ?></span><?= h($doc) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- CTA band -->
<section class="banner text-white py-16">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 data-aos="fade-up" class="text-3xl sm:text-4xl font-extrabold tracking-tight">Not sure where to begin?</h2>
    <p data-aos="fade-up" class="mt-4 text-slate-300 max-w-2xl mx-auto leading-relaxed">Send us your details and a senior counsellor will book your profile assessment.</p>
    <div data-aos="fade-up" class="mt-8 flex flex-wrap justify-center gap-4">
      <a class="px-8 py-3.5 rounded-xl text-white bg-brand-royal hover:bg-blue-600 transition-colors shadow-lg" href="#contact">Book a free consultation</a>
      <a class="px-7 py-3.5 rounded-xl text-white bg-brand-navy hover:bg-brand-navyDark transition-colors" href="https://wa.me/447495359904" target="_blank" rel="noopener noreferrer">Direct WhatsApp enquiry</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
