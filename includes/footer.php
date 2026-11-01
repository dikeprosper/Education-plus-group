<?php
/**
 * Shared footer: contact form + FAQ + site footer + shared scripts.
 * Edit here once and it updates on every page.
 */
$formSource = ($active ?? 'home') === 'isr' ? 'ISR page' : 'Home page';
$chev = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>';

$faqMain = [
  ['Am I eligible to study abroad?', 'Most likely, yes. Each university and scholarship body sets its own entry rules, so what you need depends on the school and course you choose. Typically that means your previous academic results, an English language qualification, and sometimes a personal statement or references. Competitive programs may ask for higher grades.'],
  ['How much will it cost me?', 'Your total cost is made up of tuition, living expenses, health insurance and visa fees. It varies a lot by country, school and course, and it shifts with the exchange rate. The UK, USA and Canada are generally pricier, while parts of Europe and Asia can be cheaper. <a href="#contact" class="font-bold text-brand-royal hover:underline">Book a free consultation</a> and we\'ll work out a current estimate in naira for your situation.'],
  ['Which countries can I study in as an international student?', 'There are plenty of options. Popular choices include the UK, USA, Canada, Australia, Ireland, New Zealand, Austria and Belgium, and many more welcome international students. The best fit depends on your budget, your course, and what you want after graduation.'],
  ['What documents will I need to apply?', 'Requirements differ between schools, but the usual list is:<ul class="mt-2 list-disc pl-5 space-y-1"><li>Secondary school results (SSCE)</li><li>Degree certificate or statement of results (for postgraduate study)</li><li>Academic transcripts</li><li>A valid international passport</li><li>Reference letters (academic or work)</li><li>A statement of purpose and a CV</li><li>An English test or GRE/GMAT score, if your school asks for one</li></ul>'],
  ['Do I have to take IELTS or TOEFL?', 'Often, but not always. Many schools will waive the test if your previous education was taught entirely in English. Policies vary by university and country, so check with your chosen school before you book a test.'],
];
$faqMore = [
  ['Can I work while I study?', 'In many countries, yes, including the UK, Canada and the USA. There\'s usually a cap on weekly hours so your studies come first, and the rules differ by country and visa type. Always check the work conditions on your student visa before you apply.'],
  ['Do I really need an agent?', 'No, it\'s not compulsory, but it helps. Studying abroad is a big financial and personal investment, and a good adviser can guide you through choosing a course, applying and handling the visa. Just make sure the agent is approved by the university you\'re applying to, so you stay clear of scammers.'],
  ['What if I don\'t meet the entry requirements, or my grades are low?', 'You still have options. Undergraduate applicants can often take a foundation year, which leads straight into the degree. Postgraduate applicants may be offered a pre-master\'s or postgraduate certificate course of about 3 to 6 months. If you do well, you move on to the full program.'],
  ['What\'s the difference between an offer letter and a conditional offer?', 'An offer letter confirms the university has accepted you. A conditional offer means you\'re accepted, but you still need to meet certain conditions, such as submitting an English test result, a missing document or your passport. Once you\'ve met the conditions, it becomes a full offer.'],
  ['How hard is the visa process, and what if I\'m refused?', 'Requirements differ by country, and approval depends on having complete, accurate documents and showing a genuine plan to study. Nobody can guarantee an outcome. If your visa is refused, tell the university straight away. You may be able to defer to the next intake. If you\'ve been barred from entering the country, speak to an immigration expert about other options.'],
  ['Can I work in the country after I graduate?', 'Often, yes, if you get the right work permit. Many countries have post-study work routes for international graduates, and the rules and duration differ by country. Look into the permit options early if you\'re thinking of staying on after your course.'],
  ['What should I put in my statement of purpose?', 'Cover four things: why you want this university, why you chose this course, the personal or professional experiences that sparked your interest, and why you\'d be a strong fit. If the school gives its own guidelines for the statement, follow those.'],
];
?>

    <!-- BEGIN: ContactAndConsultation (shared) -->
    <section class="py-20 bg-brand-ice" data-purpose="contact-intake-form" id="contact">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
          <div data-aos="fade-right" class="lg:col-span-5 space-y-6">
            <h2 class="text-3xl font-extrabold text-brand-navy tracking-tight">Let's Discuss Your Education Plan</h2>
            <p class="text-slate-600 text-sm leading-relaxed">Fill in the consultation form and our senior education counselors will respond within 24 to 48 hours to schedule your introductory profile assessment.</p>
            <div class="space-y-4 pt-4">
              <div class="flex items-start space-x-3.5 p-4 rounded-xl bg-white border border-slate-200">
                <div class="w-10 h-10 rounded-lg bg-brand-tint text-brand-royal flex items-center justify-center shrink-0">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </div>
                <div><p class="text-xs text-slate-500 font-semibold">Direct Call &amp; WhatsApp</p><a class="text-sm font-bold text-brand-navy hover:text-brand-royal" href="tel:+447495359904">+44 7495 359904</a></div>
              </div>
              <div class="flex items-start space-x-3.5 p-4 rounded-xl bg-white border border-slate-200">
                <div class="w-10 h-10 rounded-lg bg-brand-tint text-brand-royal flex items-center justify-center shrink-0">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </div>
                <div><p class="text-xs text-slate-500 font-semibold">Admissions Email</p><a class="text-sm font-bold text-brand-navy hover:text-brand-royal" href="mailto:contact@edplusisr.com">contact@edplusisr.com</a></div>
              </div>
              <div class="flex items-start space-x-3.5 p-4 rounded-xl bg-white border border-slate-200">
                <div class="w-10 h-10 rounded-lg bg-brand-tint text-brand-royal flex items-center justify-center shrink-0">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </div>
                <div><p class="text-xs text-slate-500 font-semibold">Expected Response Time</p><p class="text-sm font-bold text-brand-navy">Within 24 to 48 Hours</p></div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl shadow-subtle border border-slate-200">
            <form class="space-y-5" method="POST" action="https://formspree.io/f/xjyyarny">
              <input type="hidden" name="_subject" value="Website enquiry (<?= h($formSource) ?>)" />
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                  <label class="block text-xs font-bold text-brand-navy uppercase mb-1.5" for="fullName">Full Name *</label>
                  <input class="w-full text-sm rounded-xl border-slate-300 focus:border-brand-royal focus:ring-brand-royal" id="fullName" name="fullName" placeholder="e.g. Sarah Jenkins" required type="text" />
                </div>
                <div>
                  <label class="block text-xs font-bold text-brand-navy uppercase mb-1.5" for="email">Email Address *</label>
                  <input class="w-full text-sm rounded-xl border-slate-300 focus:border-brand-royal focus:ring-brand-royal" id="email" name="email" placeholder="sarah@example.com" required type="email" />
                </div>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                  <label class="block text-xs font-bold text-brand-navy uppercase mb-1.5" for="phone">Phone / WhatsApp *</label>
                  <input class="w-full text-sm rounded-xl border-slate-300 focus:border-brand-royal focus:ring-brand-royal" id="phone" name="phone" placeholder="+44 7123 456789" required type="tel" />
                </div>
                <div>
                  <label class="block text-xs font-bold text-brand-navy uppercase mb-1.5" for="destination">Primary Target Country</label>
                  <select class="w-full text-sm rounded-xl border-slate-300 focus:border-brand-royal focus:ring-brand-royal" id="destination" name="destination">
                    <option value="UK">United Kingdom</option>
                    <option value="USA">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <option value="Multiple">Multiple / Undecided</option>
                  </select>
                </div>
              </div>
              <div>
                <label class="block text-xs font-bold text-brand-navy uppercase mb-1.5" for="notes">Academic Background &amp; Questions</label>
                <textarea class="w-full text-sm rounded-xl border-slate-300 focus:border-brand-royal focus:ring-brand-royal" id="notes" name="message" placeholder="Tell us about your current qualifications, intended major, and target intake year..." rows="3"></textarea>
              </div>
              <button class="w-full py-3.5 px-6 rounded-xl font-bold text-white bg-brand-navy hover:bg-brand-navyDark transition-all duration-200 shadow-md shadow-brand-navy/30" type="submit">Submit Enquiry to Advisor</button>
              <p class="text-[11px] text-slate-500 text-center">Your data is kept confidential and will only be used by Education Plus ISR advisors.</p>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END: ContactAndConsultation -->

    <!-- BEGIN: FAQSection (shared) -->
    <section class="py-20 bg-white border-t border-slate-200 scroll-smooth" data-purpose="faq-section" id="faq-section">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="text-center max-w-2xl mx-auto mb-10">
          <h3 class="text-2xl sm:text-3xl font-extrabold text-brand-navy tracking-tight">Frequently Asked Questions</h3>
          <p class="mt-2 text-slate-600 text-sm">Clear advisory answers to guide your applications, document submissions, and visa journey.</p>
        </div>
        <div class="space-y-4 max-w-4xl mx-auto">
          <?php foreach ($faqMain as [$q, $a]): ?>
          <div data-aos="fade-up"><details class="group bg-slate-50 border border-slate-200/90 rounded-2xl p-5 sm:p-6 transition-all duration-200 shadow-sm open:bg-white open:shadow-subtle open:border-brand-royal/30">
            <summary class="flex items-center justify-between cursor-pointer font-bold text-base sm:text-md text-brand-navy select-none list-none">
              <span class="pr-4 leading-snug"><?= $q ?></span>
              <span class="w-8 h-8 rounded-full bg-brand-tint flex items-center justify-center text-brand-royal group-open:rotate-180 transition-transform shrink-0"><?= $chev ?></span>
            </summary>
            <div class="mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed font-normal"><?= $a ?></div>
          </details></div>
          <?php endforeach; ?>
        </div>
        <div data-aos="fade-up" class="text-center mt-8">
          <button type="button" id="faqOpen" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-brand-navy border border-brand-navy/30 bg-white hover:bg-brand-navy hover:text-white transition-colors shadow-sm">
            View <?= count($faqMore) ?> more questions
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
        </div>

        <dialog id="faqModal" class="m-auto w-[calc(100%-2rem)] max-w-3xl p-0 rounded-3xl bg-white shadow-2xl backdrop:bg-slate-950/60 backdrop:backdrop-blur-sm">
          <div class="flex flex-col max-h-[85vh]">
            <div class="flex items-start justify-between gap-4 p-5 sm:p-6 border-b border-slate-200 shrink-0">
              <div>
                <h3 class="text-xl sm:text-2xl font-extrabold text-brand-navy tracking-tight">More Questions</h3>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">Everything else students ask us about admissions, agents and visas.</p>
              </div>
              <button type="button" id="faqClose" aria-label="Close" class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-brand-navy hover:text-white transition-colors shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
              </button>
            </div>
            <div class="overflow-y-auto p-5 sm:p-6 space-y-3">
              <?php foreach ($faqMore as [$q, $a]): ?>
              <details class="group bg-slate-50 border border-slate-200/90 rounded-2xl p-4 sm:p-5 open:bg-white open:border-brand-royal/30">
                <summary class="flex items-center justify-between cursor-pointer font-bold text-sm sm:text-base text-brand-navy select-none list-none">
                  <span class="pr-4 leading-snug"><?= $q ?></span>
                  <span class="w-7 h-7 rounded-full bg-brand-tint flex items-center justify-center text-brand-royal group-open:rotate-180 transition-transform shrink-0"><?= $chev ?></span>
                </summary>
                <div class="mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed"><?= $a ?></div>
              </details>
              <?php endforeach; ?>
            </div>
            <div class="p-5 sm:p-6 border-t border-slate-200 bg-brand-ice flex flex-col sm:flex-row items-center justify-between gap-3 shrink-0 rounded-b-3xl">
              <p class="text-sm font-bold text-brand-navy text-center sm:text-left">Still have a question?</p>
              <a href="#contact" id="faqContact" class="px-5 py-2.5 rounded-xl font-bold text-white bg-brand-navy hover:bg-brand-navyDark text-xs transition-colors shadow-sm">Contact Advisory Desk</a>
            </div>
          </div>
        </dialog>
        <script>
          (function () {
            const dlg = document.getElementById('faqModal');
            document.getElementById('faqOpen').addEventListener('click', () => {
              dlg.showModal();
              document.documentElement.classList.add('overflow-hidden');
            });
            document.getElementById('faqClose').addEventListener('click', () => dlg.close());
            document.getElementById('faqContact').addEventListener('click', () => dlg.close());
            dlg.addEventListener('click', (e) => { if (e.target === dlg) dlg.close(); });
            dlg.addEventListener('close', () => document.documentElement.classList.remove('overflow-hidden'));
          })();
        </script>
      </div>
    </section>
    <!-- END: FAQSection -->

    <!-- BEGIN: ComprehensiveFooter (shared) -->
    <footer class="bg-brand-dark text-slate-300 py-12 border-t border-brand-navy" data-purpose="site-footer">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-8 border-b border-slate-800">
          <div class="flex flex-col md:flex-row items-center space-x-3 text-center md:text-left">
            <div class="w-11 h-11 rounded-xl bg-white p-1.5 flex items-center justify-center shrink-0 shadow-md">
              <img loading="lazy" alt="Education Plus ISR Logo" class="w-full h-full object-contain" src="./image/logo.webp" />
            </div>
            <div class="flex flex-col text-left">
              <span class="text-xl text-center md:text-left font-extrabold text-white tracking-tight">Education Plus ISR</span>
              <span class="text-[10px] text-center md:text-left uppercase font-bold tracking-widest text-blue-300">Opening Doors. Creating Global Opportunities.</span>
            </div>
          </div>
          <nav class="flex flex-wrap items-center justify-center gap-6 text-sm font-medium text-slate-300">
            <a class="hover:text-white transition-colors" href="./">Home</a>
            <a class="hover:text-white transition-colors" href="<?= $home ?>#about">About</a>
            <a class="hover:text-white transition-colors" href="<?= $home ?>#services">Services</a>
            <a class="hover:text-white transition-colors" href="./isr">ISR</a>
            <a class="hover:text-white transition-colors" href="#faq-section">Resources &amp; FAQs</a>
            <a class="hover:text-white transition-colors" href="#contact">Contact</a>
          </nav>
          <div class="flex flex-wrap items-center justify-center gap-5 text-xs text-slate-300">
            <a class="flex items-center space-x-1.5 hover:text-white transition-colors" href="tel:+447495359904"><span>📞</span><span>+44 7495 359904</span></a>
            <a class="flex items-center space-x-1.5 hover:text-white transition-colors" href="mailto:contact@edplusisr.com"><span>✉️</span><span>contact@edplusisr.com</span></a>
          </div>
        </div>
        <!-- SOCIAL LINKS: add Facebook, Instagram, LinkedIn and TikTok here once the client supplies the official URLs -->
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
          <p>© <?= date('Y') ?> Education Plus ISR. All rights reserved.</p>
          <div class="flex items-center space-x-6">
            <a class="hover:text-slate-200 transition-colors" href="#">Privacy Policy</a>
            <span>|</span>
            <a class="hover:text-slate-200 transition-colors" href="#">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END: ComprehensiveFooter -->

    <script src="./assets/js/main.js?v=<?= $ver ?? '1' ?>"></script>
    <script src="./assets/js/aos.js"></script>
    <script>AOS.init({});</script>
  </body>
</html>
