<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Anant Yoga & Spiritual Awakening Foundation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

<style>
:root {
    --primary: #f86f03;
    --primary-light: #fff0e5;
    --dark: #0f172a;
    --dark-blue: #1a1a2e;
    --text-main: #334155;
    --text-muted: #64748b;
    --cream: #fdf6ec;
    --gold: #c9a84c;
    --green: #10b981;
    --border: #e2e8f0;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'DM Sans',sans-serif;color:var(--text-main);background:#fff;overflow-x:hidden;}
a{text-decoration:none;color:inherit;transition:all 0.3s;}
a:hover{color:var(--primary);text-decoration:none;}
img{max-width:100%;height:auto;}

/* ===== HEADER ===== */
.header{background:#fff;box-shadow:0 2px 15px rgba(0,0,0,0.05);position:relative;z-index:999;}
.header__top{background:#1a1a2e;padding:10px 0;}
.header__top__widget{display:flex;align-items:center;justify-content:flex-end;gap:20px;height:100%;flex-wrap:wrap;}
.header__top__widget ul{list-style:none;display:flex;gap:25px;margin:0;padding:0;flex-wrap:wrap;}
.header__top__widget ul li{color:#ddd;font-size:13px;letter-spacing:.5px;display:flex;align-items:center;}
.header__top__widget ul li i{color:var(--primary);margin-right:8px;font-size:16px;}
.header__nav{background:#fff;border-top:3px solid var(--primary);transition:all 0.3s ease;}
.header__menu ul{list-style:none;display:flex;gap:5px;margin:0;padding:0;justify-content:center;}
.header__menu ul li{position:relative;}
.header__menu ul li a{display:block;padding:20px 22px;font-size:15px;font-weight:600;color:#222;text-transform:uppercase;transition:.3s;}
.header__menu ul li a:hover,.header__menu ul li.active a{color:var(--primary);}
.header__social{display:flex;align-items:center;justify-content:flex-end;gap:10px;height:100%;}
.header__social a{width:36px;height:36px;border-radius:50%;background:#f5f5f5;color:#333;display:flex;align-items:center;justify-content:center;font-size:14px;transition:.3s;}
.header__social a:hover{background:var(--primary);color:#fff;transform:translateY(-3px);}
.header__nav.header__nav--fixed{position:fixed;top:0;left:0;width:100%;z-index:1000;box-shadow:0 4px 20px rgba(0,0,0,0.1);animation:slideDown 0.4s ease;}
@keyframes slideDown{from{transform:translateY(-100%);}to{transform:translateY(0);}}
.primary-btn{display:inline-block;background:var(--primary);color:#fff;padding:12px 28px;border-radius:30px;font-weight:700;font-size:14px;letter-spacing:1px;transition:.3s;text-transform:uppercase;}
.primary-btn:hover{background:#333;color:#fff;}

/* ── Logo + mobile title ── */
.header__logo{padding:10px 0;}
.header__logo a{display:flex;align-items:center;text-decoration:none;gap: 10px;}
.header__logo img{max-height:65px;width:auto;border-radius:4px;display:block;flex-shrink:0;}
.header-title{
    
    font-family:'Playfair Display',serif;
    font-size:11px;font-weight:700;
    color:#1a1a2e;text-transform:uppercase;
   
}

/* Offcanvas */
.canvas__open{position:absolute;right:15px;top:50%;transform:translateY(-50%);display:none;cursor:pointer;background:var(--primary);color:#fff;width:40px;height:40px;border-radius:4px;align-items:center;justify-content:center;font-size:20px;}
.offcanvas-menu-overlay{position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,.7);z-index:1000;opacity:0;visibility:hidden;transition:.4s;}
.offcanvas-menu-overlay.active{opacity:1;visibility:visible;}
.offcanvas-menu{position:fixed;left:-350px;top:0;width:320px;height:100%;background:#1a1a2e;z-index:1001;overflow-y:auto;transition:.4s;padding:40px 25px;}
.offcanvas-menu.active{left:0;}
.offcanvas__logo img{max-height:60px;border-radius:4px;margin-bottom:30px;}
.offcanvas__close{position:absolute;right:20px;top:20px;color:#fff;font-size:24px;cursor:pointer;}
.offcanvas__nav ul{list-style:none;padding:0;}
.offcanvas__nav ul li a{display:flex;justify-content:space-between;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.1);color:#eee;font-size:15px;font-weight:600;text-transform:uppercase;}
.offcanvas__nav ul li a:hover{color:var(--primary);}
.offcanvas__widget ul{list-style:none;padding:20px;margin-bottom:30px;background:rgba(255,255,255,0.05);border-radius:8px;}
.offcanvas__widget ul li{color:#ddd;font-size:13px;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.1);}
.offcanvas__widget ul li:last-child{border-bottom:none;}
.offcanvas__widget ul li i{color:var(--primary);margin-right:8px;}
.offcanvas__social{display:flex;gap:12px;margin-top:30px;}
.offcanvas__social a{width:38px;height:38px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.offcanvas__social a:hover{background:#fff;color:var(--primary);}

/* ── Responsive header ── */
@media(max-width:991px){
    .header__top{display:none;}
    .header__nav{padding:8px 0;border-top:none;}
    .header__menu,.header__social{display:none;}
    .canvas__open{display:flex!important;}
    .header__logo{padding:6px 0;}
    .header__logo img{max-height:52px;}
    .header-title{display:block;font-size:22px;}
}
@media(max-width:575px){.header-title{font-size:12px;letter-spacing:0.3px;}}
@media(max-width:480px){.header-title{font-size:13px;}.header__logo img{max-height:44px;}}
@media(max-width:360px){.header-title{font-size:9.5px;}}

/* ===== HERO ===== */
.donate-hero{position:relative;min-height:560px;background:#060d1a;display:flex;align-items:center;overflow:hidden;}
.donate-hero__bg{position:absolute;inset:0;background:radial-gradient(ellipse 70% 80% at 30% 50%,rgba(248,111,3,0.18) 0%,transparent 60%),radial-gradient(ellipse 50% 70% at 90% 20%,rgba(201,168,76,0.1) 0%,transparent 50%),radial-gradient(ellipse 40% 60% at 10% 90%,rgba(16,185,129,0.06) 0%,transparent 50%);}
.donate-hero__grid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.02) 1px,transparent 1px);background-size:60px 60px;}
.heart-particle{position:absolute;font-size:20px;opacity:0;animation:floatHeart 6s ease-in infinite;}
.hp-1{left:10%;top:80%;animation-delay:0s;font-size:16px;}
.hp-2{left:25%;top:70%;animation-delay:1.5s;font-size:24px;}
.hp-3{left:50%;top:85%;animation-delay:3s;font-size:14px;}
.hp-4{left:70%;top:75%;animation-delay:0.8s;font-size:20px;}
.hp-5{left:85%;top:80%;animation-delay:2.2s;font-size:18px;}
@keyframes floatHeart{0%{opacity:0;transform:translateY(0) scale(1);}20%{opacity:0.6;}80%{opacity:0.2;}100%{opacity:0;transform:translateY(-200px) scale(1.3);}}
.donate-hero__content{position:relative;z-index:2;}
.donate-hero__eyebrow{display:inline-flex;align-items:center;gap:12px;background:rgba(248,111,3,0.1);border:1px solid rgba(248,111,3,0.3);padding:8px 20px;border-radius:50px;margin-bottom:25px;}
.donate-hero__eyebrow::before{content:'❤️';font-size:14px;}
.donate-hero__eyebrow span{color:var(--primary);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;}
.donate-hero h1{font-family:'Cormorant Garamond',serif;font-size:clamp(48px,7vw,86px);font-weight:300;color:#fff;line-height:1.05;letter-spacing:-1px;margin-bottom:22px;}
.donate-hero h1 em{color:var(--primary);font-style:italic;}
.donate-hero p{color:rgba(255,255,255,0.5);font-size:17px;max-width:520px;line-height:1.8;margin-bottom:40px;}
.hero-breadcrumb{display:flex;align-items:center;gap:10px;margin-bottom:25px;flex-wrap:wrap;}
.hero-breadcrumb a{color:rgba(255,255,255,0.45);font-size:14px;display:flex;align-items:center;gap:5px;}
.hero-breadcrumb a:hover{color:var(--primary);}
.hero-breadcrumb span{color:rgba(255,255,255,0.2);}
.hero-breadcrumb .active{color:var(--primary);font-size:14px;font-weight:600;}
.impact-row{display:flex;gap:0;flex-wrap:wrap;}
.impact-item{padding:0 35px;}
.impact-item:first-child{padding-left:0;}
.impact-item h3{font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;color:var(--primary);margin:0;line-height:1;}
.impact-item p{color:rgba(255,255,255,0.4);font-size:12px;letter-spacing:1.5px;text-transform:uppercase;margin:6px 0 0;}
.impact-div{width:1px;background:rgba(255,255,255,0.1);}
.donate-hero__visual{position:absolute;right:0;top:0;width:42%;height:100%;overflow:hidden;}
.donate-hero__visual::before{content:'';position:absolute;inset:0;background:linear-gradient(90deg,#060d1a 0%,rgba(6,13,26,0.5) 40%,transparent 100%);z-index:1;}
.donate-hero__visual img{width:100%;height:100%;object-fit:cover;filter:saturate(0.5) brightness(0.5);opacity:0.7;}

/* ===== AMOUNT SECTION ===== */
.amount-section{padding:100px 0;background:var(--cream);position:relative;overflow:hidden;}
.amount-section::before{content:'GIVE';position:absolute;bottom:-40px;right:-10px;font-family:'Cormorant Garamond',serif;font-size:200px;font-weight:800;color:rgba(248,111,3,0.035);pointer-events:none;line-height:1;}
.sec-eyebrow{display:inline-flex;align-items:center;gap:10px;color:var(--primary);font-size:12px;font-weight:800;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;}
.sec-eyebrow::before{content:'';width:40px;height:2px;background:var(--primary);}
.sec-heading{font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4vw,56px);font-weight:600;color:var(--dark);line-height:1.1;margin-bottom:20px;}
.sec-heading em{color:var(--primary);font-style:italic;}
.donate-box{background:#fff;border-radius:28px;padding:50px;box-shadow:0 20px 60px rgba(0,0,0,0.07);border:1px solid rgba(248,111,3,0.08);}
.amount-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-bottom:20px;}
.amount-btn{background:var(--cream);border:2px solid rgba(248,111,3,0.12);border-radius:14px;padding:18px 10px;text-align:center;cursor:pointer;transition:all 0.35s cubic-bezier(0.4,0,0.2,1);font-family:'DM Sans',sans-serif;}
.amount-btn:hover,.amount-btn.active{background:var(--primary);border-color:var(--primary);transform:translateY(-4px);box-shadow:0 10px 30px rgba(248,111,3,0.3);}
.amount-btn h4{font-size:22px;font-weight:800;color:var(--dark);margin:0 0 4px;transition:0.3s;}
.amount-btn p{font-size:12px;color:var(--text-muted);margin:0;transition:0.3s;}
.amount-btn:hover h4,.amount-btn.active h4,.amount-btn:hover p,.amount-btn.active p{color:#fff;}
.custom-amount-wrap{position:relative;margin-bottom:25px;}
.custom-amount-wrap input{width:100%;height:58px;background:#fff;border:2px solid var(--border);border-radius:14px;padding:0 20px 0 60px;font-size:22px;font-weight:700;color:var(--dark);font-family:'DM Sans',sans-serif;outline:none;transition:0.3s;}
.custom-amount-wrap input:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(248,111,3,0.08);}
.custom-amount-wrap .rupee{position:absolute;left:20px;top:50%;transform:translateY(-50%);font-size:20px;font-weight:700;color:var(--primary);}
.custom-amount-wrap input::placeholder{color:#cbd5e1;font-weight:400;font-size:16px;}
.freq-toggle{display:flex;gap:10px;margin-bottom:30px;}
.freq-btn{flex:1;padding:12px;border-radius:50px;border:2px solid var(--border);background:#fff;font-size:14px;font-weight:700;color:var(--text-muted);cursor:pointer;transition:0.3s;text-align:center;}
.freq-btn.active,.freq-btn:hover{border-color:var(--primary);color:var(--primary);background:var(--primary-light);}
.donate-submit-btn{display:flex;align-items:center;justify-content:center;gap:12px;width:100%;background:var(--primary);color:#fff;border:none;border-radius:50px;padding:18px;font-size:17px;font-weight:800;cursor:pointer;transition:all 0.35s cubic-bezier(0.4,0,0.2,1);font-family:'DM Sans',sans-serif;letter-spacing:0.5px;}
.donate-submit-btn:hover{background:var(--dark);transform:translateY(-3px);box-shadow:0 15px 40px rgba(248,111,3,0.3);}
.donate-submit-btn i{font-size:20px;}
.secure-note{display:flex;align-items:center;justify-content:center;gap:8px;margin-top:16px;color:var(--text-muted);font-size:13px;}
.secure-note i{color:var(--green);font-size:16px;}

/* ===== IMPACT CARDS ===== */
.impact-section{padding:100px 0;background:#fff;position:relative;overflow:hidden;}
.impact-card{background:var(--cream);border-radius:24px;padding:40px 35px;height:100%;position:relative;overflow:hidden;transition:all 0.45s cubic-bezier(0.4,0,0.2,1);border:1px solid rgba(248,111,3,0.07);}
.impact-card::before{content:'';position:absolute;inset:0;border-radius:24px;background:var(--primary);transform:translateY(100%);transition:0.5s cubic-bezier(0.4,0,0.2,1);}
.impact-card:hover{transform:translateY(-8px);box-shadow:0 30px 60px rgba(248,111,3,0.15);}
.impact-card:hover::before{transform:translateY(0);}
.impact-card__icon{width:65px;height:65px;border-radius:18px;display:flex;align-items:center;justify-content:center;font-size:30px;margin-bottom:28px;position:relative;z-index:1;transition:0.4s;}
.ic-1 .impact-card__icon{background:rgba(248,111,3,0.1);color:var(--primary);}
.ic-2 .impact-card__icon{background:rgba(16,185,129,0.1);color:var(--green);}
.ic-3 .impact-card__icon{background:rgba(201,168,76,0.1);color:var(--gold);}
.ic-4 .impact-card__icon{background:rgba(99,102,241,0.1);color:#6366f1;}
.impact-card:hover .impact-card__icon{background:rgba(255,255,255,0.2);color:#fff;}
.impact-card h4{font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:700;color:var(--dark);margin-bottom:14px;position:relative;z-index:1;transition:0.4s;}
.impact-card p{color:var(--text-muted);font-size:15px;line-height:1.8;margin:0;position:relative;z-index:1;transition:0.4s;}
.impact-card:hover h4,.impact-card:hover p{color:#fff;}
.impact-list{list-style:none;padding:0;margin:16px 0 0;position:relative;z-index:1;}
.impact-list li{font-size:14px;color:var(--text-muted);padding:8px 0;border-bottom:1px solid rgba(248,111,3,0.08);display:flex;align-items:center;gap:10px;transition:0.4s;}
.impact-list li:last-child{border-bottom:none;}
.impact-list li i{color:var(--primary);font-size:16px;flex-shrink:0;transition:0.4s;}
.impact-card:hover .impact-list li{color:rgba(255,255,255,0.8);border-color:rgba(255,255,255,0.1);}
.impact-card:hover .impact-list li i{color:rgba(255,255,255,0.9);}

/* ===== WHY DONATE ===== */
.why-section{padding:110px 0;background:#060d1a;position:relative;overflow:hidden;}
.why-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 80% at 0% 50%,rgba(248,111,3,0.08) 0%,transparent 60%),radial-gradient(ellipse 40% 60% at 100% 30%,rgba(201,168,76,0.05) 0%,transparent 60%);}
.why-img-wrap{position:relative;}
.why-img-main{width:100%;height:700px;object-fit:cover;border-radius:28px;display:block;filter:brightness(0.85);}
.why-img-badge{position:absolute;bottom:-20px;right:-20px;background:var(--primary);color:#fff;padding:28px;border-radius:22px;text-align:center;box-shadow:0 20px 50px rgba(248,111,3,0.4);}
.why-img-badge h3{font-family:'Cormorant Garamond',serif;font-size:42px;font-weight:800;margin:0;line-height:1;}
.why-img-badge p{font-size:12px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin:5px 0 0;opacity:0.9;}
.why-content{padding-left:20px;}
.why-content .sec-eyebrow{color:var(--primary);}
.why-content .sec-heading{color:#fff;}
.why-content > p{color:rgba(255,255,255,0.45);font-size:16px;line-height:1.8;margin-bottom:40px;}
.why-list{list-style:none;padding:0;}
.why-item{display:flex;align-items:flex-start;gap:18px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:16px;padding:22px;margin-bottom:14px;transition:all 0.4s;}
.why-item:last-child{margin-bottom:0;}
.why-item:hover{background:rgba(248,111,3,0.07);border-color:rgba(248,111,3,0.2);transform:translateX(8px);}
.why-item-icon{width:46px;height:46px;border-radius:12px;background:rgba(248,111,3,0.12);display:flex;align-items:center;justify-content:center;font-size:22px;color:var(--primary);flex-shrink:0;}
.why-item h5{color:#fff;font-size:16px;font-weight:700;margin:0 0 5px;}
.why-item p{color:rgba(255,255,255,0.45);font-size:14px;margin:0;line-height:1.6;}

/* ===== LEGAL BADGES ===== */
.legal-section{padding:80px 0;background:var(--cream);text-align:center;}
.legal-grid{display:flex;justify-content:center;flex-wrap:wrap;gap:16px;margin-bottom:70px;}
.legal-card{background:#fff;border:1px solid rgba(248,111,3,0.1);border-radius:18px;padding:28px 30px;display:flex;align-items:center;gap:16px;transition:all 0.35s;min-width:220px;}
.legal-card:hover{border-color:var(--primary);transform:translateY(-5px);box-shadow:0 15px 40px rgba(248,111,3,0.12);}
.legal-icon{width:52px;height:52px;border-radius:14px;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:24px;color:var(--primary);flex-shrink:0;}
.legal-card h6{font-size:15px;font-weight:700;color:var(--dark);margin:0 0 3px;}
.legal-card span{font-size:12px;color:var(--text-muted);}

/* ===== CTA BANNER ===== */
.cta-banner{background:var(--dark);border-radius:28px;padding:70px 60px;text-align:center;position:relative;overflow:hidden;margin:0 15px;}
.cta-banner::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(248,111,3,0.12) 0%,transparent 50%,rgba(201,168,76,0.05) 100%);border-radius:28px;}
.cta-banner::after{content:'"';position:absolute;top:-20px;right:30px;font-family:'Cormorant Garamond',serif;font-size:300px;color:rgba(248,111,3,0.05);line-height:1;pointer-events:none;}
.cta-inner{position:relative;z-index:1;max-width:700px;margin:0 auto;}
.cta-inner h2{font-family:'Cormorant Garamond',serif;font-size:clamp(36px,4vw,56px);font-weight:600;color:#fff;margin-bottom:12px;}
.cta-inner h2 em{color:var(--primary);font-style:italic;}
.cta-quotes{margin-bottom:40px;}
.cta-quotes p{font-family:'Cormorant Garamond',serif;font-size:20px;font-style:italic;color:rgba(255,255,255,0.45);line-height:1.6;margin:0;}
.cta-buttons{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;}
.cta-btn-primary{display:inline-flex;align-items:center;gap:10px;background:var(--primary);color:#fff;padding:16px 40px;border-radius:50px;font-weight:800;font-size:15px;transition:all 0.35s;letter-spacing:0.5px;}
.cta-btn-primary:hover{background:#fff;color:var(--primary);transform:translateY(-3px);box-shadow:0 15px 40px rgba(248,111,3,0.3);}
.cta-btn-outline{display:inline-flex;align-items:center;gap:10px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.25);padding:16px 40px;border-radius:50px;font-weight:700;font-size:15px;transition:all 0.35s;}
.cta-btn-outline:hover{border-color:#fff;background:rgba(255,255,255,0.1);color:#fff;transform:translateY(-3px);}

/* ===== FOOTER ===== */
.footer{background:#111827;padding:70px 0 0;color:#9ca3af;}

/* Footer logo + title side by side */
.footer-logo-link{
    display:flex;
    align-items:center;
    gap:14px;
    text-decoration:none;
    margin-bottom:20px;
}
.footer__about img{
    max-height:65px;
    border-radius:6px;
    margin-bottom:0;
    background:#fff;
    padding:5px;
    flex-shrink:0;
}
.footer-logo-title{
    font-family:'Playfair Display',serif;
    font-size:18px;
    font-weight:700;
    color:#fff;
    text-transform:uppercase;
    letter-spacing:0.8px;
    line-height:1.55;
}

.footer__about p{font-size:14px;line-height:1.8;margin-bottom:20px;}
.footer__about ul{list-style:none;padding:0;margin-bottom:25px;}
.footer__about ul li{font-size:14px;padding:6px 0;}
.footer__about ul li i{color:var(--primary);margin-right:8px;font-size:16px;}
.subscribe-form{display:flex;background:#1f2937;border-radius:30px;overflow:hidden;padding:4px;}
.subscribe-form input{flex:1;padding:12px 20px;border:none;background:transparent;color:#fff;font-size:14px;outline:none;min-width:0;}
.subscribe-form input::placeholder{color:#6b7280;}
.subscribe-form button{background:var(--primary);color:#fff;border:none;padding:0 25px;border-radius:30px;cursor:pointer;transition:.3s;font-weight:600;white-space:nowrap;}
.subscribe-form button:hover{background:#fff;color:var(--primary);}
.footer__widget{margin-bottom:30px;}
.footer__widget h5{color:#fff;font-size:18px;font-weight:700;margin-bottom:25px;position:relative;padding-bottom:12px;}
.footer__widget h5::after{content:'';position:absolute;left:0;bottom:0;width:40px;height:3px;background:var(--primary);}
.footer__widget ul{list-style:none;padding:0;}
.footer__widget ul li{padding:8px 0;}
.footer__widget ul li a{color:#9ca3af;font-size:14px;transition:.3s;display:inline-block;}
.footer__widget ul li a:hover{color:var(--primary);transform:translateX(5px);}
.footer-address{padding:0;list-style:none;}
.footer-address li{font-size:14px;display:flex;gap:12px;align-items:flex-start;padding:8px 0;line-height:1.6;}
.footer-address li i{color:var(--primary);margin-top:4px;font-size:16px;}
.footer-social{display:flex;gap:10px;margin-top:20px;flex-wrap:wrap;}
.footer-social a{width:38px;height:38px;border-radius:50%;background:#1f2937;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.footer-social a:hover{background:var(--primary);transform:translateY(-3px);}
.footer__copyright{border-top:1px solid rgba(255,255,255,0.1);padding:25px 0;margin-top:50px;}
.footer__copyright__text{text-align:center;}
.footer__copyright__text p{margin:0;font-size:14px;}

/* ===== ANIMATIONS ===== */
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal.visible{opacity:1;transform:translateY(0);}
.reveal-left{opacity:0;transform:translateX(-40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal-left.visible{opacity:1;transform:translateX(0);}
.reveal-right{opacity:0;transform:translateX(40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal-right.visible{opacity:1;transform:translateX(0);}
.reveal-delay-1{transition-delay:0.1s;}
.reveal-delay-2{transition-delay:0.2s;}
.reveal-delay-3{transition-delay:0.3s;}
.reveal-delay-4{transition-delay:0.4s;}

/* ===== RESPONSIVE ===== */
@media(max-width:991px){
    .donate-hero__visual{display:none;}
    .donate-hero{min-height:auto;padding:100px 0 80px;}
    .why-content{padding-left:0;margin-top:40px;}
    .why-img-badge{right:0;bottom:-10px;}
    .cta-banner{padding:50px 30px;}
    .amount-grid{grid-template-columns:repeat(2,1fr);}
    .impact-row{flex-wrap:wrap;gap:20px;}
    .footer-logo-title{font-size:12px;}
}
@media(max-width:767px){
    .amount-section,.impact-section,.why-section,.legal-section{padding:70px 0;}
    .donate-box{padding:30px 20px;}
    .amount-grid{grid-template-columns:1fr 1fr;}
    .legal-grid{flex-direction:column;align-items:center;}
    .legal-card{width:100%;max-width:320px;}
    .cta-buttons{flex-direction:column;align-items:center;}
    .impact-div{display:none;}
    .impact-item{padding:10px 20px 10px 0;}
    .footer-logo-title{font-size:12px;letter-spacing:0.5px;}
}
@media(max-width:575px){
    .impact-item h3{font-size:32px;}
    .donate-box{padding:25px 16px;}
    .footer-logo-title{font-size:11px;letter-spacing:0.4px;}
    .footer__about img{max-height:52px;}
}
@media(max-width:480px){
    .footer-logo-title{font-size:12px;letter-spacing:0.3px;}
    .footer__about img{max-height:44px;}
}
@media(max-width:360px){
    .footer-logo-title{font-size:15px;}
}
</style>
</head>
<body>

<!-- Offcanvas Overlay -->
<div class="offcanvas-menu-overlay"></div>

<!-- Offcanvas Menu -->
<div class="offcanvas-menu">
    <div class="offcanvas__close"><i class="fa fa-times"></i></div>
    <div class="offcanvas__logo">
        <a href="index.php"><img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/f86f03/fff?text=Anant+Yoga'"></a>
    </div>
    <div class="offcanvas__widget">
        <ul>
            <li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li>
            <li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li>
            <li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li>
        </ul>
    </div>
    <div class="offcanvas__nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About</a></li>
            <li><a href="spiritulactivities.php">YOGA SPIRITUAL ACTIVITES</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="Donation.php">Donation</a></li>
        </ul>
    </div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
</div>

<!-- ===== HEADER ===== -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="header__top__widget">
                        <ul>
                            <li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li>
                            <li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li>
                            <li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li>
                        </ul>
                        <a href="Donation.php" class="primary-btn">DONATE NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav" id="mainNav">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-3 col-md-6 col-8">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/250x70/fff/f86f03?text=Anant+Yoga'">
                            <div class="header-title">ANANT YOGA &amp; SPIRITUAL AWAKENING FOUNDATION</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="header__menu">
                        <ul class="justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="spiritulactivities.php">
                                ACTIVITES</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="active"><a href="Donation.php">Donation</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="header__social">
                        <a href="https://www.facebook.com/share/1EeQMtXNpX/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/anantyoga.class?igsh=MW95YXVwcHhlN2ZjNA=="><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
    </div>
</header>

<!-- ===== HERO ===== -->
<section class="donate-hero">
    <div class="donate-hero__bg"></div>
    <div class="donate-hero__grid"></div>
    <div class="heart-particle hp-1">🧡</div>
    <div class="heart-particle hp-2">❤️</div>
    <div class="heart-particle hp-3">🧡</div>
    <div class="heart-particle hp-4">❤️</div>
    <div class="heart-particle hp-5">🧡</div>
    <div class="donate-hero__visual">
        <img src="https://www.goodwillaz.org/wp-content/uploads/2021/11/5-15-1.jpg" alt="Donation Impact">
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="donate-hero__content">
            <div class="hero-breadcrumb">
                <a href="index.php"><i class="ri-home-5-line"></i> Home</a>
                <span>/</span>
                <span class="active">Donation</span>
            </div>
            <div class="donate-hero__eyebrow"><span>Make a Difference</span></div>
            <h1>Give Hope,<br>Change <em>Lives</em></h1>
            <p>Your contribution empowers underprivileged women, funds free wellness camps, and advances yoga research that transforms communities across India.</p>
            <div class="impact-row">
                <div class="impact-item"><h3>2000+</h3><p>Lives Changed</p></div>
                <div class="impact-div"></div>
                <div class="impact-item"><h3>50</h3><p>Women Trained</p></div>
                <div class="impact-div"></div>
                <div class="impact-item"><h3>100%</h3><p>Transparent</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== DONATE AMOUNT ===== -->
<section class="amount-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 reveal reveal-left">
                <div class="sec-eyebrow">Your Gift</div>
                <h2 class="sec-heading">Choose How<br>Much to <em>Give</em></h2>
                <p style="color:var(--text-muted);font-size:17px;line-height:1.8;margin-bottom:30px;">Every rupee creates real, measurable change. Whether it's ₹500 or ₹50,000 — your generosity matters deeply to us and the communities we serve.</p>
                <div style="background:#fff;border-radius:20px;padding:30px;border:1px solid rgba(248,111,3,0.1);">
                    <h6 style="font-size:13px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--dark);margin-bottom:20px;">What your donation does:</h6>
                    <div style="display:flex;flex-direction:column;gap:12px;">
                        <div style="display:flex;gap:12px;align-items:center;">
                            <div style="width:40px;height:40px;border-radius:10px;background:var(--primary-light);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;color:var(--primary);">₹</div>
                            <div><strong style="color:var(--dark);font-size:14px;">₹500</strong> <span style="color:var(--text-muted);font-size:13px;">— Funds 1 yoga kit for a student</span></div>
                        </div>
                        <div style="display:flex;gap:12px;align-items:center;">
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(16,185,129,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;color:var(--green);">₹</div>
                            <div><strong style="color:var(--dark);font-size:14px;">₹2,000</strong> <span style="color:var(--text-muted);font-size:13px;">— Sponsors a month of wellness classes</span></div>
                        </div>
                        <div style="display:flex;gap:12px;align-items:center;">
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(201,168,76,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;color:var(--gold);">₹</div>
                            <div><strong style="color:var(--dark);font-size:14px;">₹10,000</strong> <span style="color:var(--text-muted);font-size:13px;">— Covers a woman's full teacher training</span></div>
                        </div>
                        <div style="display:flex;gap:12px;align-items:center;">
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(99,102,241,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;color:#6366f1;">₹</div>
                            <div><strong style="color:var(--dark);font-size:14px;">₹50,000</strong> <span style="color:var(--text-muted);font-size:13px;">— Funds an entire community wellness camp</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 reveal reveal-right">
                <div class="donate-box">
                    <div class="freq-toggle">
                        <div class="freq-btn active" onclick="setFreq(this)">One-Time</div>
                        <div class="freq-btn" onclick="setFreq(this)">Monthly</div>
                        <div class="freq-btn" onclick="setFreq(this)">Annual</div>
                    </div>
                    <div class="amount-grid" id="amountGrid">
                        <div class="amount-btn active" onclick="selectAmount(this,'500')"><h4>₹500</h4><p>Supporter</p></div>
                        <div class="amount-btn" onclick="selectAmount(this,'1000')"><h4>₹1,000</h4><p>Friend</p></div>
                        <div class="amount-btn" onclick="selectAmount(this,'2500')"><h4>₹2,500</h4><p>Champion</p></div>
                        <div class="amount-btn" onclick="selectAmount(this,'5000')"><h4>₹5,000</h4><p>Patron</p></div>
                        <div class="amount-btn" onclick="selectAmount(this,'10000')"><h4>₹10,000</h4><p>Guardian</p></div>
                        <div class="amount-btn" onclick="selectAmount(this,'custom')"><h4>Custom</h4><p>Your Choice</p></div>
                    </div>
                    <div class="custom-amount-wrap">
                        <span class="rupee">₹</span>
                        <input type="number" id="amountInput" placeholder="Enter custom amount" value="500">
                    </div>
                    <div style="margin-bottom:16px;">
                        <input type="text" placeholder="Your Full Name" style="width:100%;height:52px;background:#f8fafc;border:2px solid var(--border);border-radius:14px;padding:0 20px;font-size:15px;color:var(--text-main);font-family:'DM Sans',sans-serif;outline:none;transition:0.3s;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'">
                    </div>
                    <div style="margin-bottom:20px;">
                        <input type="email" placeholder="Email Address (for receipt)" style="width:100%;height:52px;background:#f8fafc;border:2px solid var(--border);border-radius:14px;padding:0 20px;font-size:15px;color:var(--text-main);font-family:'DM Sans',sans-serif;outline:none;transition:0.3s;" onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border)'">
                    </div>
                    <button class="donate-submit-btn" onclick="handleDonate()">
                        <i class="ri-heart-line"></i> Donate Now — ₹<span id="btnAmount">500</span>
                    </button>
                    <div class="secure-note">
                        <i class="ri-shield-check-line"></i>
                        Secured payment · 80G receipt · 100% transparent
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== IMPACT CARDS ===== -->
<section class="impact-section">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <div class="sec-eyebrow">Your Impact</div>
            <h2 class="sec-heading">Where Your <em>Money Goes</em></h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 reveal reveal-delay-1">
                <div class="impact-card ic-1">
                    <div class="impact-card__icon"><i class="ri-women-line"></i></div>
                    <h4>Women Scholarships</h4>
                    <p>Full teacher training for underprivileged women seeking a new beginning.</p>
                    <ul class="impact-list">
                        <li><i class="ri-check-line"></i> Skill development</li>
                        <li><i class="ri-check-line"></i> Livelihood creation</li>
                        <li><i class="ri-check-line"></i> Social dignity</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 reveal reveal-delay-2">
                <div class="impact-card ic-2">
                    <div class="impact-card__icon"><i class="ri-community-line"></i></div>
                    <h4>Free Wellness Camps</h4>
                    <p>Community yoga and stress relief sessions for underserved populations.</p>
                    <ul class="impact-list">
                        <li><i class="ri-check-line"></i> Rural outreach</li>
                        <li><i class="ri-check-line"></i> School programs</li>
                        <li><i class="ri-check-line"></i> Senior care</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 reveal reveal-delay-3">
                <div class="impact-card ic-3">
                    <div class="impact-card__icon"><i class="ri-flask-line"></i></div>
                    <h4>Research Centre</h4>
                    <p>Scientific documentation and validation of yogic practices for public health.</p>
                    <ul class="impact-list">
                        <li><i class="ri-check-line"></i> Clinical studies</li>
                        <li><i class="ri-check-line"></i> Publications</li>
                        <li><i class="ri-check-line"></i> Data validation</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 reveal reveal-delay-4">
                <div class="impact-card ic-4">
                    <div class="impact-card__icon"><i class="ri-global-line"></i></div>
                    <h4>Digital Expansion</h4>
                    <p>Online classes, awareness campaigns and platform development.</p>
                    <ul class="impact-list">
                        <li><i class="ri-check-line"></i> Online programs</li>
                        <li><i class="ri-check-line"></i> Social media</li>
                        <li><i class="ri-check-line"></i> Tech infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY DONATE ===== -->
<section class="why-section">
    <div class="container" style="position:relative;z-index:1;">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 reveal reveal-left">
                <div class="why-img-wrap">
                    <img src="img/WhatsApp Image 2026-03-02 at 4.27.43 PM.jpeg" alt="Impact" class="why-img-main">
                   
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 reveal reveal-right">
                <div class="why-content">
                    <div class="sec-eyebrow">Why Us</div>
                    <h2 class="sec-heading">Why <em>Donate</em><br>to Anant Yoga?</h2>
                    <p>We are a fully registered, compliant, and accountable Public Charitable Trust — every rupee is tracked, reported, and used with purpose.</p>
                    <ul class="why-list">
                        <li class="why-item">
                            <div class="why-item-icon"><i class="ri-women-line"></i></div>
                            <div><h5>Creates Livelihood for Women</h5><p>Vulnerable women gain financial independence through certified yoga teaching.</p></div>
                        </li>
                        <li class="why-item">
                            <div class="why-item-icon"><i class="ri-heart-pulse-line"></i></div>
                            <div><h5>Promotes Preventative Healthcare</h5><p>Free camps reduce disease burden and improve mental wellness across communities.</p></div>
                        </li>
                        <li class="why-item">
                            <div class="why-item-icon"><i class="ri-bar-chart-grouped-line"></i></div>
                            <div><h5>Transparent &amp; Accountable</h5><p>Annual reports, 80G receipts, and full regulatory compliance — always.</p></div>
                        </li>
                        <li class="why-item">
                            <div class="why-item-icon"><i class="ri-seedling-line"></i></div>
                            <div><h5>Long-Term Social Impact</h5><p>We build self-sustaining communities, not just short-term relief programs.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== LEGAL BADGES + CTA ===== -->
<section class="legal-section">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <div class="sec-eyebrow">Certifications</div>
            <h2 class="sec-heading">Fully <em>Certified</em> &amp; Compliant</h2>
        </div>
        <div class="legal-grid reveal">
            <div class="legal-card"><div class="legal-icon"><i class="ri-percent-line"></i></div><div><h6>80G Certified</h6><span>Tax Exemption on Donations</span></div></div>
            <div class="legal-card"><div class="legal-icon"><i class="ri-building-4-line"></i></div><div><h6>CSR Eligible</h6><span>Corporate Funding Ready</span></div></div>
            <div class="legal-card"><div class="legal-icon"><i class="ri-shield-check-line"></i></div><div><h6>Public Trust</h6><span>Mumbai Public Trust Act, 1950</span></div></div>
            <div class="legal-card"><div class="legal-icon"><i class="ri-government-line"></i></div><div><h6>NITI Aayog</h6><span>Government Registered</span></div></div>
            <div class="legal-card"><div class="legal-icon"><i class="ri-award-line"></i></div><div><h6>ISO Certified</h6><span>Quality Assured Operations</span></div></div>
        </div>
        <div class="cta-banner reveal" style="margin-top:60px;">
            <div class="cta-inner">
                <h2>Every donation creates <em>dignity.</em></h2>
                <div class="cta-quotes">
                    <p>Every contribution builds resilience.</p>
                    <p>Every partnership transforms lives.</p>
                </div>
                <div class="cta-buttons">
                    <a href="#" class="cta-btn-primary" onclick="document.querySelector('.amount-section').scrollIntoView({behavior:'smooth'});return false;"><i class="ri-heart-line"></i> Donate Now</a>
                    <a href="contact.php" class="cta-btn-outline"><i class="ri-mail-line"></i> Become a CSR Partner</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="footer__about">
                    <!-- ✅ UPDATED: Logo + Title side by side -->
                    <a href="index.php" class="footer-logo-link">
                        <img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/fff/f86f03?text=Anant+Yoga'">
                        <div class="footer-logo-title">ANANT YOGA &amp; SPIRITUAL<br>AWAKENING FOUNDATION</div>
                    </a>
                    <p>Empowering lives through yoga, spiritual wellness and community service since 2015.</p>
                    <ul>
                        <li><i class="fa fa-phone"></i><span>8149751780 / 9607511939</span></li><li><i class="fa fa-envelope"></i><span>anantyogaclasses@gmail.com</span></li>
                        <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am – 7:45pm</li>
                        
                    </ul>
                    <form class="subscribe-form" onsubmit="return false;">
                        <input type="email" placeholder="Your Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-3 col-6 mb-5">
                <div class="footer__widget">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About</a></li>
                        <li><a href="spiritulactivities.php">YOGASPIRITUAL</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="Donation.php">Donation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <div class="footer__widget">
                    <h5>Contact Us</h5>
                    <ul class="footer-address">
                        <li><i class="fa fa-phone"></i><span>8149751780<br>9607511939</span></li>
                        <li><i class="fa fa-envelope"></i><span>anantyogaclasses@gmail.com</span></li>
                        <li><i class="fa fa-map-marker"></i><span>Mumbai, Maharashtra, India</span></li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/share/1EeQMtXNpX/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/anantyoga.class?igsh=MW95YXVwcHhlN2ZjNA=="><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/@anantyogaclasses1292"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row"><div class="col-12">
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <span id="year"></span> Anant Yoga &amp; Spiritual Awakening Foundation. All rights reserved. Designed with <i class="fa fa-heart" style="color:#f86f03;"></i> for a Better World.</p>
                </div>
            </div></div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#year').text(new Date().getFullYear());
    var $nav = $('#mainNav');
    var topH = $('.header__top').outerHeight() || 0;
    $(window).on('scroll', function(){
        $(this).scrollTop() > topH ? $nav.addClass('header__nav--fixed') : $nav.removeClass('header__nav--fixed');
    });
    $('.canvas__open').on('click', function(){
        $('.offcanvas-menu').addClass('active');
        $('.offcanvas-menu-overlay').addClass('active');
        $('body').css('overflow','hidden');
    });
    $('.offcanvas__close, .offcanvas-menu-overlay').on('click', function(){
        $('.offcanvas-menu').removeClass('active');
        $('.offcanvas-menu-overlay').removeClass('active');
        $('body').css('overflow','auto');
    });
    function revealOnScroll(){
        var st = $(window).scrollTop() + $(window).height();
        $('.reveal, .reveal-left, .reveal-right').each(function(){
            if(st > $(this).offset().top + 60){ $(this).addClass('visible'); }
        });
    }
    $(window).on('scroll', revealOnScroll);
    revealOnScroll();
    function animateCounters(){
        $('.impact-item h3').each(function(){
            var $this = $(this);
            var text = $this.text();
            var num = parseInt(text.replace(/[^0-9]/g,''));
            var suffix = text.replace(/[0-9]/g,'');
            if(!isNaN(num)){
                $({n:0}).animate({n:num},{duration:2000,easing:'swing',step:function(){ $this.text(Math.ceil(this.n)+suffix); },complete:function(){ $this.text(num+suffix); }});
            }
        });
    }
    setTimeout(animateCounters, 500);
    $('#amountInput').on('input', function(){
        var v = $(this).val() || '500';
        var formatted = parseInt(v).toLocaleString('en-IN');
        $('#btnAmount').text(formatted);
    });
});
function selectAmount(el, val){
    document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    if(val !== 'custom'){
        document.getElementById('amountInput').value = val;
        document.getElementById('btnAmount').textContent = parseInt(val).toLocaleString('en-IN');
    } else {
        document.getElementById('amountInput').focus();
    }
}
function setFreq(el){
    document.querySelectorAll('.freq-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
}
function handleDonate(){
    var amount = document.getElementById('amountInput').value || 500;
    alert('Thank you for your generous donation of ₹' + parseInt(amount).toLocaleString('en-IN') + '!\n\nYou will be redirected to our secure payment gateway.\n\n(Connect your payment gateway like Razorpay/Instamojo here)');
}
</script>
</body>
</html>