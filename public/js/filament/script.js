// public/js/landing.js

function showToast(msg) {
    const el = document.createElement("div");
    el.textContent = msg;
    el.style.position = "fixed";
    el.style.bottom = "24px";
    el.style.left = "50%";
    el.style.transform = "translateX(-50%)";
    el.style.padding = "10px 18px";
    el.style.borderRadius = "999px";
    el.style.background = "rgba(15,23,42,0.98)";
    el.style.color = "#f9fafb";
    el.style.fontSize = "13px";
    el.style.boxShadow = "0 14px 40px rgba(0,0,0,0.9)";
    el.style.zIndex = "9999";
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 2200);
}

document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("btnGetStarted");
    if (btn) {
        btn.addEventListener("click", () => {
            // Toast kecil sebelum pindah ke /admin
            showToast("Mulai kelola keuangan Anda sekarang.");
        });
    }

    //  ANIMASI SLIDE-IN BOTTOM DENGAN INTERSECTION OBSERVER
    const revealEls = document.querySelectorAll(".reveal");

    // Kalau browser lama tidak support IO, langsung tampilkan tanpa animasi
    if (!("IntersectionObserver" in window)) {
        revealEls.forEach(el => el.classList.add("visible"));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                // Setelah kelihatan sekali, kita tidak perlu observe lagi
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    revealEls.forEach(el => observer.observe(el));
});
