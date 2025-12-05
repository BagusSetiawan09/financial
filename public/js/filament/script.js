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
});
