import './bootstrap';

/* ✅ Floating Particles Background */
document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("particles-canvas");
    if (!canvas) return;

    const ctx = canvas.getContext("2d");
    let w, h, particles;

    function resize(){
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resize);
    resize();

    particles = Array.from({length: 70}).map(() => ({
        x: Math.random()*w,
        y: Math.random()*h,
        r: Math.random()*1.8 + 0.6,
        vx: (Math.random()-0.5)*0.35,
        vy: (Math.random()-0.5)*0.35,
        alpha: Math.random()*0.5 + 0.2
    }));

    function draw(){
        ctx.clearRect(0,0,w,h);
        for(const p of particles){
            p.x += p.vx; p.y += p.vy;

            if(p.x<0 || p.x>w) p.vx *= -1;
            if(p.y<0 || p.y>h) p.vy *= -1;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI*2);
            ctx.fillStyle = `rgba(180,190,255,${p.alpha})`;
            ctx.fill();
        }
        requestAnimationFrame(draw);
    }
    draw();
});

/* ✅ Smooth scroll navbar offset */
document.addEventListener("click", (e) => {
    const link = e.target.closest("a[href^='#']");
    if (!link) return;

    const id = link.getAttribute("href");
    const section = document.querySelector(id);
    if (!section) return;

    e.preventDefault();

    const header = document.querySelector("header");
    const offset = header ? header.offsetHeight + 8 : 0;
    const top = section.getBoundingClientRect().top + window.scrollY - offset;

    window.scrollTo({ top, behavior: "smooth" });
});
