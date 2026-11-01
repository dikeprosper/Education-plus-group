/* Shared site scripts: mobile navigation */
function toggleMobileNav() {
  var drawer = document.getElementById("mobile-navigation-drawer");
  var toggleBtn = document.getElementById("mobile-nav-toggle");
  var openIcon = document.getElementById("mobile-hamburger-icon");
  var closeIcon = document.getElementById("mobile-close-icon");
  if (!drawer) return;
  if (drawer.classList.contains("pointer-events-none")) {
    drawer.classList.remove("opacity-0", "pointer-events-none", "-translate-y-4");
    drawer.classList.add("opacity-100", "pointer-events-auto", "translate-y-0");
    if (toggleBtn) toggleBtn.setAttribute("aria-expanded", "true");
    if (openIcon) openIcon.classList.add("hidden");
    if (closeIcon) closeIcon.classList.remove("hidden");
  } else {
    closeMobileNav();
  }
}
function closeMobileNav() {
  var drawer = document.getElementById("mobile-navigation-drawer");
  var toggleBtn = document.getElementById("mobile-nav-toggle");
  var openIcon = document.getElementById("mobile-hamburger-icon");
  var closeIcon = document.getElementById("mobile-close-icon");
  if (!drawer) return;
  drawer.classList.add("opacity-0", "pointer-events-none", "-translate-y-4");
  drawer.classList.remove("opacity-100", "pointer-events-auto", "translate-y-0");
  if (toggleBtn) toggleBtn.setAttribute("aria-expanded", "false");
  if (openIcon) openIcon.classList.remove("hidden");
  if (closeIcon) closeIcon.classList.add("hidden");
}
document.addEventListener("click", function (event) {
  var drawer = document.getElementById("mobile-navigation-drawer");
  var toggleBtn = document.getElementById("mobile-nav-toggle");
  if (!drawer || !toggleBtn) return;
  if (!drawer.contains(event.target) && !toggleBtn.contains(event.target)) closeMobileNav();
});
window.addEventListener("resize", function () {
  if (window.innerWidth >= 1024) closeMobileNav();
});
