<?php
/**
 * Shared header. Set these before including:
 *   $pageTitle, $pageDesc, $active ('home' | 'isr')
 */
if (!function_exists('h')) {
    function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
}
if (!function_exists('js')) {
    // JSON-encode a value so it is safe inside a double-quoted HTML attribute (onclick="...")
    function js($v) { return htmlspecialchars(json_encode($v, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), ENT_QUOTES, 'UTF-8'); }
}
$pageTitle = $pageTitle ?? 'Education Plus ISR | Opening Doors. Creating Global Opportunities.';
$pageDesc  = $pageDesc  ?? '';
$active    = $active    ?? 'home';
$home      = $active === 'home' ? '' : './';   // anchors that live on the home page
$ver       = '1';                               // bump to bust the CSS/JS cache

$navItems = [
    ['home',  './',                  'Home'],
    ['about', $home . '#about',      'About'],
    ['services', $home . '#services', 'Services'],
    ['isr',   './isr',               'ISR'],
    ['dest',  $home . '#destinations', 'Destinations'],
    ['faq',   '#faq-section',        'Resources'],
];
$mobileItems = [
    ['home', './', 'Home'],
    ['services', $home . '#services', 'Services'],
    ['isr', './isr', 'ISR'],
    ['dest', $home . '#destinations', 'Destinations'],
    ['about', $home . '#about', 'About &amp; Values'],
    ['gallery', './#gallery', 'Visual Gallery'],
    ['faq', '#faq-section', 'Resources &amp; FAQs'],
    ['contact', '#contact', 'Contact Advisory Desk'],
];
?>
<!doctype html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= h($pageTitle) ?></title>
    <?php if ($pageDesc): ?><meta name="description" content="<?= h($pageDesc) ?>" /><?php endif; ?>

    <link rel="shortcut icon" href="./image/logo.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <!-- Compiled Tailwind + custom styles (see src/input.css) -->
    <link href="./assets/css/style.css?v=<?= $ver ?>" rel="stylesheet" />
    <!-- AOS (Animate On Scroll) -->
    <link href="./assets/css/aos.css" rel="stylesheet" />
  </head>

  <body class="antialiased selection:bg-brand-royal selection:text-white">
    <!-- Top utility bar -->
    <div class="bg-brand-navy text-slate-200 text-xs" data-purpose="utility-header">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-8 flex items-center justify-between">
        <div class="flex items-center space-x-2"></div>
        <div class="flex items-center space-x-6">
          <a class="hidden sm:flex items-center space-x-1.5 hover:text-white transition-colors" href="tel:+447495359904">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span class="font-medium">+44 7495 359904</span>
          </a>
          <a class="hidden md:flex items-center space-x-1.5 hover:text-white transition-colors" href="mailto:info@educationplusgroup.com">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span>info@educationplusgroup.com</span>
          </a>
          <a class="flex items-center space-x-1 text-white hover:text-emerald-300 font-semibold transition-colors" href="https://wa.me/447495359904" rel="noopener noreferrer" target="_blank">
            <span>WhatsApp Advisor</span>
            <svg class="w-3 h-3 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.976.532 2.008.815 3.149.815 3.18 0 5.767-2.587 5.767-5.766.001-3.18-2.585-5.767-5.767-5.767zm3.391 8.163c-.144.405-.837.774-1.17.822-.312.043-.683.078-2.072-.497-1.782-.738-2.92-2.55-3.009-2.668-.088-.119-.724-.963-.724-1.836 0-.874.457-1.303.621-1.48.165-.176.36-.22.48-.22.12 0 .241.002.346.007.11.005.258-.042.404.308.15.361.512 1.246.557 1.337.045.09.075.197.015.316-.06.12-.09.195-.18.299-.09.105-.189.233-.27.314-.09.09-.185.188-.079.37.106.182.471.777 1.011 1.258.696.62 1.283.812 1.464.902.181.09.286.075.391-.045.105-.12.45-.526.57-.706.12-.18.24-.15.405-.09.165.06 1.05.495 1.23.585.18.09.3.135.345.21.045.075.045.435-.099.84z"></path></svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Main header -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-sm" data-purpose="site-navigation">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
          <a class="flex items-center space-x-3 group" href="./">
            <div class="w-8 h-17 rounded-xl bg-white flex items-center justify-center shrink-0 border-slate-200 group-hover:scale-105 transition-transform duration-200">
              <img loading="lazy" alt="Education Plus ISR Logo" class="w-full h-full object-contain rounded-lg" src="./image/logo.webp" />
            </div>
            <div class="flex flex-col">
              <span class="text-[22px] tracking-tight font-bold text-brand-navy group-hover:text-brand-royal transition-colors">Education Plus ISR</span>
              <span class="text-[11px] tracking-widest text-slate-500 leading-tight" style="margin-top: -5px;">Opening Doors. Creating Global<br />Opportunities.</span>
            </div>
          </a>
          <nav class="hidden lg:flex items-center space-x-8 text-sm text-slate-700" data-purpose="nav-menu">
            <?php foreach ($navItems as [$key, $href, $label]): ?>
              <a class="<?= $key === $active ? 'text-brand-royal font-semibold' : 'hover:text-brand-royal' ?> transition-colors" href="<?= $href ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= $label ?></a>
            <?php endforeach; ?>
          </nav>
          <div class="flex items-center space-x-3">
            <a class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm text-white bg-brand-navy hover:bg-brand-navyDark transition-all duration-200 shadow-md shadow-brand-navy/20 hover:shadow-lg hover:-translate-y-0.5" href="#contact">
              Get in Touch
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </a>
            <button aria-controls="mobile-navigation-drawer" aria-expanded="false" aria-label="Toggle Navigation Menu" class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-ice hover:bg-brand-tint text-brand-navy border border-slate-200 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-royal" id="mobile-nav-toggle" onclick="toggleMobileNav()" type="button">
              <svg class="w-5 h-5 transition-transform duration-200" fill="none" id="mobile-hamburger-icon" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
              <svg class="w-5 h-5 hidden transition-transform duration-200" fill="none" id="mobile-close-icon" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Mobile drawer -->
    <div aria-label="Mobile Navigation" class="lg:hidden fixed inset-x-0 top-20 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-xl transition-all duration-300 ease-in-out opacity-0 pointer-events-none -translate-y-4" id="mobile-navigation-drawer">
      <div class="max-w-7xl mx-auto px-5 py-6 space-y-4">
        <nav class="flex flex-col space-y-3 text-[12px]">
          <?php foreach ($mobileItems as [$key, $href, $label]): ?>
            <a class="flex items-center justify-between px-3 py-2 rounded-xl hover:bg-brand-ice hover:text-brand-royal transition-colors<?= $key === $active ? ' bg-brand-ice text-brand-royal font-semibold' : '' ?>" href="<?= $href ?>" onclick="closeMobileNav()"><span><?= $label ?></span><span class="text-xs text-slate-400">→</span></a>
          <?php endforeach; ?>
        </nav>
        <div class="pt-4 border-t border-slate-100 flex flex-col gap-3">
          <a class="w-full inline-flex items-center justify-center px-5 py-3 rounded-xl text-sm font-bold text-white bg-brand-navy hover:bg-brand-navyDark transition-all duration-200 shadow-md" href="#contact" onclick="closeMobileNav()">Get in Touch</a>
          <a class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-xl text-sm font-semibold text-emerald-600 bg-brand-ice hover:bg-brand-tint border border-slate-200 transition-colors" href="https://wa.me/447495359904" rel="noopener noreferrer" target="_blank">Chat on WhatsApp</a>
        </div>
      </div>
    </div>
