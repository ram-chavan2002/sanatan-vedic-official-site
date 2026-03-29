<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga & Spiritual Activities - Anant Yoga Foundation</title>
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
    --bg-section: #f8fafc;
    --cream: #fdf6ec;
    --gold: #c9a84c;
    --border: #e2e8f0;
    --purple: #533483;
    --green: #10b981;
    --pink: #ec4899;
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
.header__logo a{display:flex;align-items:center;text-decoration:none; gap: 10px;}
.header__logo img{max-height:65px;width:auto;border-radius:4px;display:block;flex-shrink:0;}

/* ✅ ONLY CHANGE: Header Title Font Sizes - Mota kiya */
.header-title{
    font-family:'Playfair Display',serif;
    font-size:12px;
    font-weight:700;
    color:#1a1a2e;
    text-transform:uppercase;

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
@media(max-width:575px){.header-title{font-size:14px;letter-spacing:0.4px;}}
@media(max-width:480px){.header-title{font-size:12px;letter-spacing:0.3px;}.header__logo img{max-height:51px;}}
@media(max-width:360px){.header-title{font-size:10px;}}

/* ===== HERO ===== */
.yoga-hero{position:relative;min-height:620px;background:#060d1a;overflow:hidden;display:flex;align-items:center;}
.yoga-hero__bg{
    position:absolute;inset:0;
    background:
        radial-gradient(ellipse 60% 80% at 0% 50%,rgba(83,52,131,0.25) 0%,transparent 60%),
        radial-gradient(ellipse 70% 60% at 100% 30%,rgba(248,111,3,0.18) 0%,transparent 60%),
        radial-gradient(ellipse 40% 60% at 50% 100%,rgba(201,168,76,0.08) 0%,transparent 50%);
}
.yoga-hero__mandala{position:absolute;right:-100px;top:50%;transform:translateY(-50%);width:700px;height:700px;opacity:0.06;animation:rotateSlow 60s linear infinite;}
.yoga-hero__mandala svg{width:100%;height:100%;}
@keyframes rotateSlow{from{transform:translateY(-50%) rotate(0deg);}to{transform:translateY(-50%) rotate(360deg);}}
.hero-orb{position:absolute;border-radius:50%;animation:floatOrb 8s ease-in-out infinite;pointer-events:none;}
.hero-orb-1{width:300px;height:300px;background:radial-gradient(circle,rgba(248,111,3,0.12),transparent 70%);top:10%;right:20%;animation-delay:0s;}
.hero-orb-2{width:200px;height:200px;background:radial-gradient(circle,rgba(83,52,131,0.15),transparent 70%);bottom:20%;right:35%;animation-delay:3s;}
.hero-orb-3{width:150px;height:150px;background:radial-gradient(circle,rgba(201,168,76,0.1),transparent 70%);top:60%;left:5%;animation-delay:5s;}
@keyframes floatOrb{0%,100%{transform:translateY(0);}50%{transform:translateY(-25px);}}
.yoga-hero__content{position:relative;z-index:2;}
.yoga-hero__eyebrow{display:inline-flex;align-items:center;gap:12px;background:rgba(248,111,3,0.1);border:1px solid rgba(248,111,3,0.3);padding:8px 20px;border-radius:50px;margin-bottom:25px;}
.yoga-hero__eyebrow::before{content:'';width:6px;height:6px;background:var(--primary);border-radius:50%;animation:pulse 2s infinite;}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.5;transform:scale(1.5);}}
.yoga-hero__eyebrow span{color:var(--primary);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;}
.yoga-hero h1{font-family:'Cormorant Garamond',serif;font-size:clamp(46px,7vw,88px);font-weight:300;color:#fff;line-height:1.05;letter-spacing:-1px;margin-bottom:22px;}
.yoga-hero h1 em{color:var(--primary);font-style:italic;}
.yoga-hero__desc{color:rgba(255,255,255,0.55);font-size:17px;max-width:500px;line-height:1.8;margin-bottom:40px;}
.hero-breadcrumb{display:flex;align-items:center;gap:10px;margin-bottom:25px;flex-wrap:wrap;}
.hero-breadcrumb a{color:rgba(255,255,255,0.5);font-size:14px;font-weight:500;display:flex;align-items:center;gap:5px;}
.hero-breadcrumb a:hover{color:var(--primary);}
.hero-breadcrumb span{color:rgba(255,255,255,0.25);font-size:14px;}
.hero-breadcrumb .active{color:var(--primary);font-size:14px;font-weight:600;}
.hero-stats-row{display:flex;gap:0;flex-wrap:wrap;}
.hs-item{padding:0 35px;}
.hs-item:first-child{padding-left:0;}
.hs-item h3{font-family:'Cormorant Garamond',serif;font-size:44px;font-weight:700;color:var(--primary);margin:0;line-height:1;}
.hs-item p{color:rgba(255,255,255,0.4);font-size:12px;letter-spacing:1.5px;text-transform:uppercase;margin:6px 0 0;}
.hs-div{width:1px;background:rgba(255,255,255,0.1);}
.yoga-hero__visual{position:absolute;right:0;top:0;width:42%;height:100%;overflow:hidden;z-index:1;}
.yoga-hero__visual::before{content:'';position:absolute;inset:0;background:linear-gradient(90deg,#060d1a 0%,rgba(6,13,26,0.4) 40%,transparent 100%);z-index:2;}
.hero-img-grid{display:grid;grid-template-columns:1fr 1fr;gap:4px;height:100%;}
.hero-img-grid img{width:100%;height:100%;object-fit:cover;filter:saturate(0.6) brightness(0.7);}

/* ===== SECTION HEADER ===== */
.sec-eyebrow{display:inline-flex;align-items:center;gap:10px;color:var(--primary);font-size:12px;font-weight:800;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;}
.sec-eyebrow::before{content:'';width:40px;height:2px;background:var(--primary);}
.sec-heading{font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4vw,58px);font-weight:600;color:var(--dark);line-height:1.1;margin-bottom:20px;}
.sec-heading em{color:var(--primary);font-style:italic;}

/* ===== TEACHER TRAINING ===== */
.training-section{padding:110px 0;position:relative;overflow:hidden;}
.training-section::before{content:'TRAIN';position:absolute;bottom:-50px;left:-20px;font-family:'Cormorant Garamond',serif;font-size:220px;font-weight:800;color:rgba(248,111,3,0.03);pointer-events:none;line-height:1;}
.training-card{background:#fff;border-radius:28px;padding:50px;height:100%;position:relative;overflow:hidden;transition:all 0.5s cubic-bezier(0.4,0,0.2,1);border:1px solid rgba(248,111,3,0.08);}
.training-card:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(0,0,0,0.1);border-color:rgba(248,111,3,0.2);}
.training-card__accent{position:absolute;top:-60px;right:-60px;width:200px;height:200px;border-radius:50%;opacity:0.08;transition:0.5s;}
.training-card:hover .training-card__accent{transform:scale(1.3);opacity:0.12;}
.tc-primary .training-card__accent{background:var(--primary);}
.tc-advanced .training-card__accent{background:var(--purple);}
.tc-badge{display:inline-flex;align-items:center;gap:8px;padding:6px 18px;border-radius:50px;font-size:12px;font-weight:800;letter-spacing:2px;text-transform:uppercase;margin-bottom:30px;}
.tc-primary .tc-badge{background:var(--primary-light);color:var(--primary);}
.tc-advanced .tc-badge{background:rgba(83,52,131,0.08);color:var(--purple);}
.tc-icon{width:72px;height:72px;border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:34px;margin-bottom:28px;position:relative;z-index:1;transition:0.4s;}
.tc-primary .tc-icon{background:var(--primary-light);color:var(--primary);}
.tc-advanced .tc-icon{background:rgba(83,52,131,0.08);color:var(--purple);}
.training-card:hover .tc-icon{transform:rotate(-8deg) scale(1.1);}
.training-card h3{font-family:'Cormorant Garamond',serif;font-size:32px;font-weight:700;color:var(--dark);line-height:1.2;margin-bottom:16px;position:relative;z-index:1;}
.training-card p{color:var(--text-muted);font-size:16px;line-height:1.8;margin-bottom:30px;position:relative;z-index:1;}
.curriculum-list{list-style:none;padding:0;position:relative;z-index:1;}
.curriculum-list li{display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid var(--border);font-size:15px;font-weight:500;color:var(--text-main);transition:0.3s;}
.curriculum-list li:last-child{border-bottom:none;}
.curriculum-list li:hover{color:var(--primary);padding-left:5px;}
.cl-dot{width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:12px;}
.tc-primary .cl-dot{background:var(--primary-light);color:var(--primary);}
.tc-advanced .cl-dot{background:rgba(83,52,131,0.08);color:var(--purple);}

/* ===== COMMUNITY ===== */
.community-section{padding:110px 0;background:#060d1a;position:relative;overflow:hidden;}
.community-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 80% at 10% 50%,rgba(16,185,129,0.06) 0%,transparent 60%),radial-gradient(ellipse 50% 60% at 90% 30%,rgba(248,111,3,0.08) 0%,transparent 60%);}
.community-section .sec-heading{color:#fff;}
.community-section .sec-eyebrow{color:var(--green);}
.community-section .sec-eyebrow::before{background:var(--green);}
.comm-card{background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:24px;padding:40px;height:100%;transition:all 0.4s cubic-bezier(0.4,0,0.2,1);position:relative;overflow:hidden;}
.comm-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;transform:scaleX(0);transition:0.4s;border-radius:0 0 24px 24px;}
.comm-card:hover{border-color:rgba(255,255,255,0.12);transform:translateY(-8px);}
.comm-card:hover::after{transform:scaleX(1);}
.cc-wellness::after{background:var(--green);}
.cc-women::after{background:var(--pink);}
.cc-awareness::after{background:var(--primary);}
.comm-icon{width:60px;height:60px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:28px;margin-bottom:25px;}
.cc-wellness .comm-icon{background:rgba(16,185,129,0.12);color:var(--green);}
.cc-women .comm-icon{background:rgba(236,72,153,0.12);color:var(--pink);}
.cc-awareness .comm-icon{background:rgba(248,111,3,0.12);color:var(--primary);}
.comm-card h3{font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:700;color:#fff;margin-bottom:14px;}
.comm-card p{color:rgba(255,255,255,0.5);font-size:15px;line-height:1.8;margin-bottom:25px;}
.target-pills{display:flex;flex-wrap:wrap;gap:8px;}
.target-pill{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);color:rgba(255,255,255,0.7);padding:5px 14px;border-radius:50px;font-size:13px;font-weight:600;transition:0.3s;}
.cc-wellness .target-pill:hover{background:rgba(16,185,129,0.15);border-color:rgba(16,185,129,0.3);color:var(--green);}
.cc-women .target-pill:hover{background:rgba(236,72,153,0.15);border-color:rgba(236,72,153,0.3);color:var(--pink);}
.cc-awareness .target-pill:hover{background:rgba(248,111,3,0.15);border-color:rgba(248,111,3,0.3);color:var(--primary);}
.hbox{background:rgba(255,255,255,0.04);border-left:3px solid;border-radius:0 12px 12px 0;padding:14px 18px;margin-bottom:12px;}
.hbox:last-child{margin-bottom:0;}
.cc-women .hbox{border-color:var(--pink);}
.hbox strong{display:block;font-size:14px;font-weight:700;color:rgba(255,255,255,0.9);margin-bottom:4px;}
.hbox span{font-size:13px;color:rgba(255,255,255,0.5);}

/* ===== RESEARCH ===== */
.research-section{padding:110px 0;background:#fff;position:relative;overflow:hidden;}
.research-card{background:var(--dark);border-radius:32px;padding:70px;position:relative;overflow:hidden;}
.research-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(248,111,3,0.12) 0%,transparent 50%,rgba(83,52,131,0.08) 100%);border-radius:32px;}
.research-card::after{content:'RESEARCH';position:absolute;bottom:-30px;right:-10px;font-family:'Cormorant Garamond',serif;font-size:120px;font-weight:800;color:rgba(255,255,255,0.025);pointer-events:none;line-height:1;}
.res-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(248,111,3,0.15);border:1px solid rgba(248,111,3,0.3);color:var(--primary);padding:8px 20px;border-radius:50px;font-size:12px;font-weight:800;letter-spacing:2px;text-transform:uppercase;margin-bottom:30px;position:relative;z-index:1;}
.res-badge::before{content:'';width:6px;height:6px;background:var(--primary);border-radius:50%;animation:pulse 2s infinite;}
.research-card h2{font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4vw,58px);font-weight:600;color:#fff;line-height:1.1;margin-bottom:20px;position:relative;z-index:1;}
.research-card h2 em{color:var(--primary);font-style:italic;}
.research-card > p{color:rgba(255,255,255,0.55);font-size:17px;line-height:1.8;max-width:500px;margin-bottom:50px;position:relative;z-index:1;}
.res-initiatives{display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;position:relative;z-index:1;}
.res-init{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.07);border-radius:20px;padding:28px;transition:all 0.4s;}
.res-init:hover{background:rgba(248,111,3,0.08);border-color:rgba(248,111,3,0.2);transform:translateY(-4px);}
.res-init-num{font-family:'Cormorant Garamond',serif;font-size:52px;font-weight:700;color:rgba(248,111,3,0.15);line-height:1;margin-bottom:10px;}
.res-init i{font-size:26px;color:var(--primary);display:block;margin-bottom:14px;}
.res-init h5{font-size:17px;font-weight:700;color:#fff;margin-bottom:8px;}
.res-init p{font-size:14px;color:rgba(255,255,255,0.45);line-height:1.7;margin:0;}
.research-visual{position:relative;display:flex;flex-direction:column;gap:16px;height:100%;}
.rv-img-main{border-radius:24px;overflow:hidden;height:300px;flex:1;}
.rv-img-main img{width:100%;height:100%;object-fit:cover;filter:brightness(0.8);}
.rv-stats-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.rv-stat{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:16px;padding:22px;text-align:center;position:relative;z-index:1;}
.rv-stat h4{font-family:'Cormorant Garamond',serif;font-size:36px;font-weight:700;color:var(--primary);margin:0;line-height:1;}
.rv-stat p{font-size:12px;color:rgba(255,255,255,0.4);margin:5px 0 0;letter-spacing:1px;text-transform:uppercase;}

/* ===== CTA ===== */
.cta-section{padding:100px 0;background:var(--cream);text-align:center;position:relative;overflow:hidden;}
.cta-section::before{content:'';position:absolute;top:-200px;left:50%;transform:translateX(-50%);width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(248,111,3,0.08) 0%,transparent 70%);pointer-events:none;}
.cta-inner{position:relative;z-index:1;max-width:680px;margin:0 auto;}
.cta-inner h2{font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4vw,58px);font-weight:600;color:var(--dark);margin-bottom:20px;}
.cta-inner h2 em{color:var(--primary);font-style:italic;}
.cta-inner p{font-size:17px;color:var(--text-muted);line-height:1.8;margin-bottom:40px;}
.cta-buttons{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;}
.btn-primary-solid{display:inline-flex;align-items:center;gap:10px;background:var(--primary);color:#fff;padding:14px 32px;border-radius:50px;font-weight:700;font-size:15px;transition:all 0.3s;letter-spacing:0.5px;}
.btn-primary-solid:hover{background:var(--dark);color:#fff;transform:translateY(-3px);box-shadow:0 12px 30px rgba(248,111,3,0.3);}
.btn-outline-dark{display:inline-flex;align-items:center;gap:10px;background:transparent;color:var(--dark);border:2px solid var(--dark);padding:14px 32px;border-radius:50px;font-weight:700;font-size:15px;transition:all 0.3s;}
.btn-outline-dark:hover{background:var(--dark);color:#fff;transform:translateY(-3px);}

/* ===== FOOTER ===== */
.footer{background:#111827;padding:70px 0 0;color:#9ca3af;}
.footer-logo-link{display:flex;align-items:center;gap:14px;text-decoration:none;margin-bottom:20px;}
.footer__about img{max-height:65px;border-radius:6px;margin-bottom:0;background:#fff;padding:5px;flex-shrink:0;}
.footer-logo-title{font-family:'Playfair Display',serif;font-size:14px;font-weight:700;color:#fff;text-transform:uppercase;letter-spacing:0.8px;line-height:1.55;}
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
.reveal-delay-1{transition-delay:0.15s;}
.reveal-delay-2{transition-delay:0.3s;}
.reveal-delay-3{transition-delay:0.45s;}
.reveal-left{opacity:0;transform:translateX(-40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal-left.visible{opacity:1;transform:translateX(0);}
.reveal-right{opacity:0;transform:translateX(40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal-right.visible{opacity:1;transform:translateX(0);}

/* ===== RESPONSIVE ===== */
@media(max-width:991px){
    .yoga-hero__visual{display:none;}
    .yoga-hero{min-height:auto;padding:100px 0 80px;}
    .res-initiatives{grid-template-columns:1fr 1fr;}
    .research-card{padding:40px;}
    .hero-stats-row{flex-wrap:wrap;gap:20px;}
    .hs-item{padding:0 20px;}
    .hs-item:first-child{padding-left:0;}
    .footer-logo-title{font-size:15px;}
}
@media(max-width:767px){
    .res-initiatives{grid-template-columns:1fr;}
    .training-section,.community-section,.research-section,.cta-section{padding:70px 0;}
    .hs-div{display:none;}
    .yoga-hero h1{font-size:42px;}
    .research-card{padding:28px 24px;}
    .rv-stats-row{grid-template-columns:1fr 1fr;}
    .training-card{padding:30px 25px;}
    .footer-logo-title{font-size:15px;letter-spacing:0.5px;}
}
@media(max-width:575px){
    .yoga-hero h1{font-size:34px;}
    .training-card{padding:25px 20px;}
    .rv-stats-row{grid-template-columns:1fr;}
    .hs-item{padding:0 12px;}
    .footer-logo-title{font-size:15px;letter-spacing:0.4px;}
    .footer__about img{max-height:52px;}
}
@media(max-width:480px){
    .footer-logo-title{font-size:14px;letter-spacing:0.3px;}
    .footer__about img{max-height:52px;}
}
@media(max-width:360px){
    .footer-logo-title{font-size:13px;}
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
            <li class="active"><a href="spiritulactivities.php">YOGA SPIRITUAL ACTIVITES</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="Donation.php">Donation</a></li>
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
                            <li class="active"><a href="spiritulactivities.php">ACTIVITES</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="Donation.php">Donation</a></li>
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
<section class="yoga-hero">
    <div class="yoga-hero__bg"></div>
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="hero-orb hero-orb-3"></div>
    <div class="yoga-hero__mandala">
        <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="250" cy="250" r="240" stroke="white" stroke-width="1"/>
            <circle cx="250" cy="250" r="200" stroke="white" stroke-width="0.5" stroke-dasharray="10 5"/>
            <circle cx="250" cy="250" r="160" stroke="white" stroke-width="1"/>
            <circle cx="250" cy="250" r="120" stroke="white" stroke-width="0.5" stroke-dasharray="5 5"/>
            <circle cx="250" cy="250" r="80" stroke="white" stroke-width="1"/>
            <circle cx="250" cy="250" r="40" stroke="white" stroke-width="0.5"/>
            <line x1="250" y1="10" x2="250" y2="490" stroke="white" stroke-width="0.5"/>
            <line x1="10" y1="250" x2="490" y2="250" stroke="white" stroke-width="0.5"/>
            <line x1="76" y1="76" x2="424" y2="424" stroke="white" stroke-width="0.5"/>
            <line x1="424" y1="76" x2="76" y2="424" stroke="white" stroke-width="0.5"/>
            <polygon points="250,10 480,490 20,490" stroke="white" stroke-width="0.5" fill="none" opacity="0.5"/>
            <polygon points="250,490 480,10 20,10" stroke="white" stroke-width="0.5" fill="none" opacity="0.5"/>
        </svg>
    </div>
    <div class="yoga-hero__visual">
        <div class="hero-img-grid">
            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=400&q=70" alt="">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=400&q=70" alt="">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=400&q=70" alt="">
            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=400&q=70" alt="">
        </div>
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="yoga-hero__content">
            <div class="hero-breadcrumb">
                <a href="index.php"><i class="ri-home-5-line"></i> Home</a>
                <span>/</span>
                <span class="active">Yoga &amp; Spiritual Activities</span>
            </div>
            <div class="yoga-hero__eyebrow"><span>Our Programs</span></div>
            <h1>Yoga &amp; <em>Spiritual</em><br>Activities</h1>
            <p class="yoga-hero__desc">Comprehensive training, community wellness, and research programs — designed to empower individuals and transform society from within.</p>
            <div class="hero-stats-row">
                <div class="hs-item"><h3>5+</h3><p>Programs</p></div>
                <div class="hs-div"></div>
                <div class="hs-item"><h3>2000+</h3><p>Lives Touched</p></div>
                <div class="hs-div"></div>
                <div class="hs-item"><h3>50</h3><p>Women Trained</p></div>
                <div class="hs-div"></div>
                <div class="hs-item"><h3>10+</h3><p>Yrs Experience</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TEACHER TRAINING ===== -->
<section class="training-section">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <div class="sec-eyebrow">Teacher Training</div>
            <h2 class="sec-heading">Build Your <em>Teaching</em> Journey</h2>
            <p style="color:var(--text-muted);font-size:17px;max-width:580px;margin:0 auto;">Two distinct pathways designed to turn passion for yoga into a life-changing profession.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 reveal reveal-left">
                <div class="training-card tc-primary">
                    <div class="training-card__accent"></div>
                    <div class="tc-badge"><i class="ri-seedling-line"></i> Beginner &middot; Foundation</div>
                    <div class="tc-icon"><i class="ri-user-star-line"></i></div>
                    <h3>45 Days Skill-Based Yoga Training</h3>
                    <p>Expertly designed for beginners and aspiring instructors to build a solid foundation in yogic sciences and teaching practice.</p>
                    <h6 style="font-weight:700;color:var(--dark);margin-bottom:16px;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Curriculum Includes</h6>
                    <ul class="curriculum-list">
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Asana Practice &amp; Alignment</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Pranayama Techniques</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Meditation Practices</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Anatomy &amp; Physiology Basics</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Teaching Methodology</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4 reveal reveal-right">
                <div class="training-card tc-advanced">
                    <div class="training-card__accent"></div>
                    <div class="tc-badge"><i class="ri-medal-fill"></i> Advanced &middot; Mastery</div>
                    <div class="tc-icon"><i class="ri-medal-line"></i></div>
                    <h3>Certificate in Yoga and Meditation Teacher (CYMT-200 HRS)</h3>
                    <p>A specialized program for certified practitioners seeking deeper mastery, therapeutic knowledge and spiritual growth.</p>
                    <h6 style="font-weight:700;color:var(--dark);margin-bottom:16px;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Curriculum Includes</h6>
                    <ul class="curriculum-list">
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Advanced Asana Sequencing</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Yogic Philosophy &amp; Texts</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Stress Management Protocols</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Therapeutic Yoga Applications</li>
                        <li><div class="cl-dot"><i class="ri-check-line"></i></div> Spiritual Discipline Practices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== COMMUNITY PROGRAMS ===== -->
<section class="community-section">
    <div class="container" style="position:relative;z-index:1;">
        <div class="text-center mb-5 reveal">
            <div class="sec-eyebrow">Community Impact</div>
            <h2 class="sec-heading">Reaching <em>Every</em> Life</h2>
            <p style="color:rgba(255,255,255,0.4);font-size:17px;max-width:560px;margin:0 auto;">Free and subsidized programs bringing the healing power of yoga to underserved communities across India.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 reveal reveal-delay-1">
                <div class="comm-card cc-wellness">
                    <div class="comm-icon"><i class="ri-group-line"></i></div>
                    <h3>Community Wellness Camps</h3>
                    <p>Free yoga and stress management programs reaching underserved populations to heal from within.</p>
                    <div class="target-pills">
                        <span class="target-pill">Local Schools</span>
                        <span class="target-pill">Women Groups</span>
                        <span class="target-pill">Senior Citizens</span>
                        <span class="target-pill">Low-income Areas</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 reveal reveal-delay-2">
                <div class="comm-card cc-women">
                    <div class="comm-icon"><i class="ri-women-line"></i></div>
                    <h3>Women Livelihood Program</h3>
                    <p>A scholarship-based teacher training initiative exclusively for underprivileged women seeking a new beginning.</p>
                    <div class="hbox">
                        <strong>&#127919; Goal</strong>
                        <span>Train 50 women as certified yoga teachers</span>
                    </div>
                    <div class="hbox">
                        <strong>&#10024; Outcome</strong>
                        <span>Financial independence &amp; social dignity</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 reveal reveal-delay-3">
                <div class="comm-card cc-awareness">
                    <div class="comm-icon"><i class="ri-megaphone-line"></i></div>
                    <h3>Yoga Awareness Campaigns</h3>
                    <p>Extensive outreach programs educating the public on yoga's proven physical, mental and spiritual benefits.</p>
                    <div class="target-pills">
                        <span class="target-pill">Corporate Wellness</span>
                        <span class="target-pill">Public Events</span>
                        <span class="target-pill">Health Camps</span>
                        <span class="target-pill">Rural Outreach</span>
                        <span class="target-pill">Online Webinars</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== RESEARCH CENTRE ===== -->
<section class="research-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0 reveal reveal-left">
                <div class="research-card">
                    <div class="res-badge"><span>Upcoming Initiative</span></div>
                    <h2>ANANT YOGA SPIRITUAL<br><em>Research Centre</em></h2>
                    <p>A future facility dedicated to the academic and scientific documentation of yogic practices and their profound health benefits — bringing ancient wisdom into modern science.</p>
                    <div class="res-initiatives">
                        <div class="res-init">
                            <div class="res-init-num">01</div>
                            <i class="ri-flask-line"></i>
                            <h5>Scientific Studies</h5>
                            <p>Clinical research validating yoga's health impact</p>
                        </div>
                        <div class="res-init">
                            <div class="res-init-num">02</div>
                            <i class="ri-bar-chart-grouped-line"></i>
                            <h5>Data Validation</h5>
                            <p>Evidence-based documentation of practices</p>
                        </div>
                        <div class="res-init">
                            <div class="res-init-num">03</div>
                            <i class="ri-book-open-line"></i>
                            <h5>Publications</h5>
                            <p>Public awareness journals &amp; research papers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 reveal reveal-right">
                <div class="research-visual" style="height:100%;min-height:400px;">
                    <div class="rv-img-main">
                        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=600&q=80" alt="Research">
                    </div>
                    <div class="rv-stats-row">
                        <div class="rv-stat" style="background:var(--dark);border-color:rgba(255,255,255,0.08);">
                            <h4>10+</h4>
                            <p>Years Data</p>
                        </div>
                        <div class="rv-stat" style="background:var(--primary);">
                            <h4 style="color:#fff;">2026</h4>
                            <p style="color:rgba(255,255,255,0.7);">Launch Year</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-inner reveal">
            <div class="sec-eyebrow" style="justify-content:center;">Join Us</div>
            <h2>Ready to Begin Your<br><em>Yoga Journey?</em></h2>
            <p>Whether you want to learn, teach, or simply experience the healing power of yoga — there's a program here for you.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn-primary-solid"><i class="ri-calendar-line"></i> Enquire Now</a>
                <a href="Donation.php" class="btn-outline-dark"><i class="ri-heart-line"></i> Support Our Mission</a>
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
                    <a href="index.php" class="footer-logo-link">
                        <img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/fff/f86f03?text=Anant+Yoga'">
                        <div class="footer-logo-title">ANANT YOGA &amp; SPIRITUAL<br>AWAKENING FOUNDATION</div>
                    </a>
                    <p>Anant Yoga &amp; Spiritual Awakening Foundation — empowering lives through yoga, spiritual wellness and community service.</p>
                    <ul>
                        <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am – 7:45pm</li>
                        <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am – 5:45pm</li>
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
                        <li><i class="fa fa-map-marker"></i><span>Mumbai, Maharashtra,<br>India</span></li>
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
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <span id="year"></span> Anant Yoga &amp; Spiritual Awakening Foundation. All rights reserved. Designed with <i class="fa fa-heart" style="color:#f86f03;"></i> for a Better World.</p>
                    </div>
                </div>
            </div>
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
            if(st > $(this).offset().top + 60){
                $(this).addClass('visible');
            }
        });
    }
    $(window).on('scroll', revealOnScroll);
    revealOnScroll();
    function animateCounters(){
        $('.hs-item h3').each(function(){
            var $this = $(this);
            var text = $this.text();
            var num = parseInt(text);
            var suffix = text.replace(/[0-9]/g,'');
            if(!isNaN(num)){
                $({n:0}).animate({n:num},{
                    duration:2000, easing:'swing',
                    step:function(){ $this.text(Math.ceil(this.n)+suffix); },
                    complete:function(){ $this.text(num+suffix); }
                });
            }
        });
    }
    setTimeout(animateCounters, 500);
});
</script>
</body>
</html>