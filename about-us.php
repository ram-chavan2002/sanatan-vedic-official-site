<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Anant Yoga & Spiritual Awakening Foundation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=DM+Sans:wght@300;400;500;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

<style>
:root {
    --primary: #f86f03;
    --primary-light: #fff0e5;
    --dark: #0f172a;
    --dark-light: #1e293b;
    --text-main: #334155;
    --text-muted: #64748b;
    --bg-body: #ffffff;
    --bg-section: #f8fafc;
    --border: #e2e8f0;
    --gold: #c9a84c;
    --cream: #fdf6ec;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'DM Sans',sans-serif;color:var(--text-main);background:var(--bg-body);overflow-x:hidden;}
a{text-decoration:none;color:inherit;transition:all 0.3s;}
a:hover{text-decoration:none;color:var(--primary);}
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
.header__logo a{display:flex;align-items:center;text-decoration:none;gap:10px;}
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
@media(max-width:575px){.header-title{font-size:19px;letter-spacing:0.4px;}}
@media(max-width:480px){.header-title{font-size:13px;letter-spacing:0.3px;}.header__logo img{max-height:51px;}}
@media(max-width:360px){.header-title{font-size:10px;}}

/* ===== HERO BANNER ===== */
.about-hero{
    position:relative;
    min-height:620px;
    background:#0a0a14;
    overflow:hidden;
    display:flex;
    align-items:center;
}
.about-hero__bg{
    position:absolute;inset:0;
    background:
        radial-gradient(ellipse 80% 60% at 70% 50%,rgba(248,111,3,0.18) 0%,transparent 60%),
        radial-gradient(ellipse 60% 80% at 10% 80%,rgba(201,168,76,0.12) 0%,transparent 50%),
        radial-gradient(ellipse 100% 100% at 50% -20%,rgba(248,111,3,0.08) 0%,transparent 60%);
}
.about-hero__grid{
    position:absolute;inset:0;
    background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),
        linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);
    background-size:60px 60px;
}
.about-hero__content{position:relative;z-index:2;}
.about-hero__eyebrow{
    display:inline-flex;align-items:center;gap:12px;
    background:rgba(248,111,3,0.1);
    border:1px solid rgba(248,111,3,0.3);
    padding:8px 20px;border-radius:50px;margin-bottom:30px;
}
.about-hero__eyebrow::before{content:'';width:6px;height:6px;background:var(--primary);border-radius:50%;animation:pulse 2s infinite;}
.about-hero__eyebrow span{color:var(--primary);font-size:13px;font-weight:700;letter-spacing:3px;text-transform:uppercase;}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.5;transform:scale(1.5);}}
.about-hero h1{
    font-family:'Cormorant Garamond',serif;
    font-size:clamp(46px,7vw,90px);
    font-weight:300;color:#fff;line-height:1.05;
    letter-spacing:-1px;margin-bottom:25px;
}
.about-hero h1 em{color:var(--primary);font-style:italic;}
.about-hero p{color:rgba(255,255,255,0.6);font-size:18px;max-width:520px;line-height:1.8;margin-bottom:40px;}
.hero-stats{display:flex;gap:50px;flex-wrap:wrap;}
.hero-stat h3{font-size:42px;font-weight:800;color:var(--primary);font-family:'Cormorant Garamond',serif;margin:0;line-height:1;}
.hero-stat p{color:rgba(255,255,255,0.5);font-size:13px;margin:5px 0 0;}
.hero-divider{width:1px;background:rgba(255,255,255,0.1);}
.about-hero__visual{
    position:absolute;right:0;top:0;
    width:45%;height:100%;overflow:hidden;
}
.about-hero__visual img{width:100%;height:100%;object-fit:cover;opacity:0.35;mix-blend-mode:luminosity;}
.about-hero__visual::before{
    content:'';position:absolute;inset:0;
    background:linear-gradient(90deg,#0a0a14 0%,transparent 50%);z-index:1;
}
.about-hero__scroll{
    position:absolute;bottom:40px;left:50%;transform:translateX(-50%);z-index:3;
    display:flex;flex-direction:column;align-items:center;gap:10px;
    color:rgba(255,255,255,0.4);font-size:12px;letter-spacing:2px;text-transform:uppercase;
}
.scroll-line{
    width:1px;height:60px;
    background:linear-gradient(to bottom,var(--primary),transparent);
    animation:scrollLine 2s ease infinite;
}
@keyframes scrollLine{
    0%{transform:scaleY(0);transform-origin:top;}
    50%{transform:scaleY(1);transform-origin:top;}
    51%{transform-origin:bottom;}
    100%{transform:scaleY(0);transform-origin:bottom;}
}

/* ===== STORY SECTION ===== */
.story-section{background:var(--cream);padding:120px 0;position:relative;overflow:hidden;}
.story-section::before{
    content:'OUR STORY';
    position:absolute;top:50%;left:-30px;
    transform:translateY(-50%) rotate(-90deg);
    font-size:100px;font-weight:800;
    color:rgba(248,111,3,0.04);
    white-space:nowrap;pointer-events:none;
    font-family:'Cormorant Garamond',serif;letter-spacing:20px;
}
.story-tag{
    display:inline-flex;align-items:center;gap:8px;
    color:var(--primary);font-weight:700;text-transform:uppercase;
    letter-spacing:3px;font-size:12px;margin-bottom:20px;
}
.story-tag::before,.story-tag::after{content:'';flex:1;height:1px;background:var(--primary);width:30px;}
.story-heading{
    font-family:'Cormorant Garamond',serif;
    font-size:clamp(42px,5vw,68px);font-weight:600;
    color:var(--dark);line-height:1.1;margin-bottom:30px;
}
.story-heading em{font-style:italic;color:var(--primary);}
.story-body p{font-size:17px;color:var(--text-muted);line-height:1.9;margin-bottom:20px;}

/* Timeline */
.timeline-modern{margin-top:80px;position:relative;}
.timeline-modern::before{
    content:'';position:absolute;top:60px;left:0;right:0;
    height:2px;background:linear-gradient(90deg,var(--primary),var(--gold),var(--dark));
}
.timeline-items{display:flex;gap:0;}
.tl-item{flex:1;position:relative;padding-top:30px;}
.tl-item:nth-child(even){padding-top:140px;}
.tl-dot{
    position:absolute;top:51px;left:50%;transform:translateX(-50%);
    width:20px;height:20px;border-radius:50%;
    background:var(--primary);border:4px solid var(--cream);
    box-shadow:0 0 0 4px var(--primary);z-index:2;
}
.tl-item:nth-child(2) .tl-dot{background:var(--gold);box-shadow:0 0 0 4px var(--gold);}
.tl-item:nth-child(3) .tl-dot{background:var(--dark);box-shadow:0 0 0 4px var(--dark);}
.tl-connector{position:absolute;top:60px;left:50%;width:1px;height:30px;background:var(--primary);}
.tl-item:nth-child(2) .tl-connector{top:91px;height:50px;}
.tl-card{
    background:#fff;border-radius:20px;padding:28px;
    margin:0 10px;box-shadow:0 10px 40px rgba(0,0,0,0.06);
    border:1px solid rgba(248,111,3,0.08);transition:all 0.4s;position:relative;
}
.tl-card:hover{transform:translateY(-8px);box-shadow:0 20px 50px rgba(248,111,3,0.12);}
.tl-year{font-size:12px;font-weight:800;letter-spacing:2px;color:var(--primary);text-transform:uppercase;margin-bottom:10px;}
.tl-item:nth-child(2) .tl-year{color:var(--gold);}
.tl-item:nth-child(3) .tl-year{color:var(--dark);}
.tl-card h4{font-size:18px;font-weight:700;color:var(--dark);margin-bottom:10px;}
.tl-card p{font-size:14px;color:var(--text-muted);line-height:1.7;margin:0;}

/* Story Image */
.story-img-wrap{position:relative;height:100%;}
.story-img-main-new{width:100%;height:550px;object-fit:cover;border-radius:32px;display:block;}


.quote-modern{
    background:var(--dark);color:#fff;
    border-radius:24px;padding:35px 40px;
    margin-top:30px;position:relative;overflow:hidden;
}
.quote-modern::before{
    content:'"';position:absolute;top:-20px;right:20px;
    font-size:150px;font-family:'Cormorant Garamond',serif;
    color:rgba(248,111,3,0.15);line-height:1;pointer-events:none;
}
.quote-modern blockquote{
    font-family:'Cormorant Garamond',serif;font-size:22px;
    font-style:italic;font-weight:400;color:#f1f5f9;
    line-height:1.6;margin:0 0 25px;position:relative;z-index:1;
}
.quote-author{display:flex;align-items:center;gap:15px;position:relative;z-index:1;}
.quote-author img{width:48px;height:48px;border-radius:50%;object-fit:cover;border:2px solid var(--primary);}
.quote-author h6{color:#fff;font-size:16px;font-weight:700;margin:0;}
.quote-author span{color:var(--primary);font-size:13px;}
.quote-line{width:1px;height:40px;background:rgba(248,111,3,0.4);margin-left:10px;}

/* ===== PURPOSE ===== */
.purpose-section{background:#060d1a;padding:120px 0;position:relative;overflow:hidden;}
.purpose-section::before{
    content:'';position:absolute;inset:0;
    background:
        radial-gradient(ellipse 50% 80% at 0% 50%,rgba(248,111,3,0.06) 0%,transparent 60%),
        radial-gradient(ellipse 50% 80% at 100% 20%,rgba(201,168,76,0.04) 0%,transparent 60%);
}
.purpose-eyebrow{display:inline-flex;align-items:center;gap:12px;margin-bottom:20px;}
.purpose-eyebrow span{color:var(--primary);font-size:12px;font-weight:800;letter-spacing:4px;text-transform:uppercase;}
.purpose-eyebrow::after{content:'';width:60px;height:1px;background:var(--primary);}
.purpose-heading{
    font-family:'Cormorant Garamond',serif;
    font-size:clamp(42px,5vw,72px);font-weight:600;
    color:#fff;line-height:1.1;margin-bottom:20px;
}
.purpose-heading em{color:var(--primary);font-style:italic;}
.purpose-sub{color:rgba(255,255,255,0.45);font-size:17px;max-width:500px;line-height:1.8;}

.purpose-grid{
    display:grid;
    grid-template-columns:1fr 1fr 1fr;
    grid-template-rows:auto auto;
    gap:20px;margin-top:60px;
}
.p-card{
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(255,255,255,0.06);
    border-radius:24px;padding:40px;
    transition:all 0.5s cubic-bezier(0.4,0,0.2,1);
    position:relative;overflow:hidden;
}
.p-card::before{
    content:'';position:absolute;inset:0;
    background:linear-gradient(135deg,rgba(248,111,3,0.08) 0%,transparent 60%);
    opacity:0;transition:0.4s;border-radius:24px;
}
.p-card:hover{border-color:rgba(248,111,3,0.3);transform:translateY(-8px);box-shadow:0 30px 60px rgba(0,0,0,0.3);}
.p-card:hover::before{opacity:1;}
.p-vision{grid-column:1/3;background:linear-gradient(135deg,rgba(248,111,3,0.12) 0%,rgba(248,111,3,0.04) 100%);border-color:rgba(248,111,3,0.2);}
.p-mission{grid-column:3;grid-row:1/3;background:var(--primary);border:none;}
.p-mission::before{background:linear-gradient(135deg,rgba(255,255,255,0.15) 0%,transparent 60%);opacity:1;}
.p-mission:hover{box-shadow:0 30px 60px rgba(248,111,3,0.4);}
.p-card-icon{width:56px;height:56px;border-radius:16px;background:rgba(248,111,3,0.1);display:flex;align-items:center;justify-content:center;margin-bottom:25px;}
.p-card-icon i{font-size:26px;color:var(--primary);}
.p-mission .p-card-icon{background:rgba(255,255,255,0.2);}
.p-mission .p-card-icon i{color:#fff;}
.p-card h3{font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:700;color:#fff;margin-bottom:15px;}
.p-mission h3{font-size:32px;}
.p-card p{color:rgba(255,255,255,0.55);font-size:16px;line-height:1.8;margin:0;}
.p-mission p{color:rgba(255,255,255,0.85);}

.obj-cards-row{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:20px;}
.o-card{
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(255,255,255,0.06);
    border-radius:20px;padding:30px 25px;
    transition:all 0.4s;position:relative;overflow:hidden;
}
.o-card::after{
    content:'';position:absolute;bottom:0;left:0;right:0;
    height:3px;background:var(--primary);transform:scaleX(0);transition:0.4s;
}
.o-card:hover{border-color:rgba(248,111,3,0.2);transform:translateY(-5px);}
.o-card:hover::after{transform:scaleX(1);}
.o-card:nth-child(2)::after{background:var(--gold);}
.o-card:nth-child(3)::after{background:#64b5f6;}
.o-card:nth-child(4)::after{background:#81c784;}
.o-card-num{font-family:'Cormorant Garamond',serif;font-size:60px;font-weight:700;color:rgba(255,255,255,0.05);line-height:1;margin-bottom:15px;}
.o-card-icon{font-size:28px;color:var(--primary);margin-bottom:15px;display:block;}
.o-card:nth-child(2) .o-card-icon{color:var(--gold);}
.o-card:nth-child(3) .o-card-icon{color:#64b5f6;}
.o-card:nth-child(4) .o-card-icon{color:#81c784;}
.o-card h4{font-size:18px;font-weight:700;color:#fff;margin-bottom:10px;}
.o-card p{font-size:14px;color:rgba(255,255,255,0.5);line-height:1.7;margin:0;}

/* ===== COMPLIANCE ===== */
.compliance-section{background:#fff;padding:120px 0;position:relative;overflow:hidden;}
.comp-bg-text{
    position:absolute;bottom:-40px;right:-20px;
    font-family:'Cormorant Garamond',serif;font-size:200px;
    font-weight:800;color:rgba(248,111,3,0.03);
    white-space:nowrap;pointer-events:none;line-height:1;
}
.comp-header{display:flex;align-items:flex-start;justify-content:space-between;gap:60px;margin-bottom:70px;}
.comp-header-left{flex:1;}
.comp-eyebrow{
    display:inline-flex;align-items:center;gap:10px;
    color:var(--primary);font-size:12px;font-weight:800;
    letter-spacing:3px;text-transform:uppercase;margin-bottom:20px;
}
.comp-eyebrow::before{content:'';width:40px;height:2px;background:var(--primary);}
.comp-heading{font-family:'Cormorant Garamond',serif;font-size:clamp(38px,4vw,58px);font-weight:600;color:var(--dark);line-height:1.1;}
.comp-heading em{color:var(--primary);font-style:italic;}
.comp-header-right{flex:1;padding-top:20px;}
.comp-header-right p{font-size:17px;color:var(--text-muted);line-height:1.8;}

.cert-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;}
.cert-card{
    background:var(--cream);border:1px solid rgba(248,111,3,0.1);
    border-radius:20px;padding:30px 25px;text-align:center;
    transition:all 0.4s cubic-bezier(0.4,0,0.2,1);
    cursor:default;position:relative;overflow:hidden;
}
.cert-card::before{
    content:'';position:absolute;inset:0;
    background:var(--primary);transform:translateY(100%);
    transition:0.4s cubic-bezier(0.4,0,0.2,1);border-radius:20px;
}
.cert-card:hover{transform:translateY(-8px);box-shadow:0 20px 50px rgba(248,111,3,0.2);}
.cert-card:hover::before{transform:translateY(0);}
.cert-icon{
    width:60px;height:60px;border-radius:50%;
    background:rgba(248,111,3,0.1);
    display:flex;align-items:center;justify-content:center;
    margin:0 auto 20px;position:relative;z-index:1;transition:0.4s;
}
.cert-icon i{font-size:26px;color:var(--primary);transition:0.4s;}
.cert-card:hover .cert-icon{background:rgba(255,255,255,0.2);}
.cert-card:hover .cert-icon i{color:#fff;}
.cert-card h5{font-size:15px;font-weight:700;color:var(--dark);margin:0;position:relative;z-index:1;transition:0.4s;}
.cert-card span{font-size:12px;color:var(--text-muted);display:block;margin-top:6px;position:relative;z-index:1;transition:0.4s;}
.cert-card:hover h5,.cert-card:hover span{color:#fff;}
.cert-card-wide{grid-column:span 2;display:flex;align-items:center;gap:25px;text-align:left;padding:30px 35px;}
.cert-card-wide .cert-icon{margin:0;flex-shrink:0;width:70px;height:70px;}
.cert-card-wide .cert-icon i{font-size:30px;}

.trust-bar{
    margin-top:60px;background:var(--dark);
    border-radius:20px;padding:30px 50px;
    display:flex;align-items:center;justify-content:space-between;gap:30px;
    flex-wrap:wrap;
}
.trust-bar-item{display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.8);font-size:15px;font-weight:600;}
.trust-bar-item i{color:var(--primary);font-size:22px;}
.trust-divider{width:1px;height:30px;background:rgba(255,255,255,0.1);}

/* ===== FOOTER ===== */
.footer{background:#111827;padding:70px 0 0;color:#9ca3af;font-family:'DM Sans',sans-serif;}
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
.reveal-delay-1{transition-delay:0.1s;}
.reveal-delay-2{transition-delay:0.2s;}
.reveal-delay-3{transition-delay:0.3s;}
.reveal-delay-4{transition-delay:0.4s;}

/* ===== RESPONSIVE ===== */
@media(max-width:991px){
    .about-hero__visual{display:none;}
    .about-hero{min-height:auto;padding:100px 0 80px;}
    .purpose-grid{grid-template-columns:1fr 1fr;}
    .p-vision{grid-column:span 2;}
    .p-mission{grid-column:span 2;grid-row:auto;}
    .obj-cards-row{grid-template-columns:1fr 1fr;}
    .cert-grid{grid-template-columns:1fr 1fr;}
    .cert-card-wide{grid-column:span 2;}
    .trust-bar{flex-wrap:wrap;gap:20px;}
    .comp-header{flex-direction:column;gap:20px;}
    .timeline-items{flex-direction:column;}
    .timeline-modern::before{display:none;}
    .tl-item,.tl-item:nth-child(even){padding-top:0;margin-bottom:20px;}
    .tl-dot{display:none;}
    .tl-connector{display:none;}
    .story-section{padding:80px 0;}
    .purpose-section{padding:80px 0;}
    .compliance-section{padding:80px 0;}
    .footer-logo-title{font-size:15px;}
}
@media(max-width:767px){
    .purpose-grid{grid-template-columns:1fr;}
    .p-vision,.p-mission{grid-column:1;grid-row:auto;}
    .obj-cards-row{grid-template-columns:1fr 1fr;}
    .cert-grid{grid-template-columns:1fr 1fr;}
    .cert-card-wide{grid-column:span 2;}
    .hero-stats{gap:25px;}
    .hero-stat h3{font-size:30px;}
    .story-img-main-new{height:350px;}
    .story-accent-box{display:none;}
    .quote-modern{padding:25px 20px;}
    .trust-divider{display:none;}
    .trust-bar{padding:20px 25px;gap:15px;}
    .footer-logo-title{font-size:15px;letter-spacing:0.5px;}
}
@media(max-width:575px){
    .obj-cards-row{grid-template-columns:1fr;}
    .cert-grid{grid-template-columns:1fr;}
    .cert-card-wide{grid-column:1;}
    .hero-stats{gap:16px;}
    .hero-stat h3{font-size:26px;}
    .comp-header{gap:15px;}
    .story-accent-box2{width:90px;height:90px;}
    .story-accent-box2 h3{font-size:28px;}
    .footer-logo-title{font-size:15px;letter-spacing:0.4px;}
    .footer__about img{max-height:52px;}
}
@media(max-width:480px){
    .footer-logo-title{font-size:14px;letter-spacing:0.3px;}
    .footer__about img{max-height:48px;}
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
            <li class="active"><a href="about-us.php">About</a></li>
            <li><a href="spiritulactivities.php">YOGA SPIRITUAL ACTIVITES</a></li>
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
    <div class="header__nav">
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
                            <li class="active"><a href="about-us.php">About</a></li>
                            <li><a href="spiritulactivities.php">
                            ACTIVITES</a></li>
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

<!-- ===== HERO BANNER ===== -->
<section class="about-hero">
    <div class="about-hero__bg"></div>
    <div class="about-hero__grid"></div>
    <div class="about-hero__visual">
        <img src="img/about/WhatsApp Image 2026-03-02 at 1.38.52 PM.jpeg" alt="Yoga" onerror="this.src='https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="about-hero__content">
            <div class="about-hero__eyebrow"><span>Since 2015 · Mumbai, India</span></div>
            <h1>Our Journey of<br><em>Resilience &amp;</em><br>Awakening</h1>
            <p>From a single mother's fight for survival to a registered public charitable trust — transforming lives through the ancient power of yoga.</p>
            <div class="hero-stats">
                <div class="hero-stat"><h3>10+</h3><p>Years Active</p></div>
                <div class="hero-divider"></div>
                <div class="hero-stat"><h3>500+</h3><p>Lives Touched</p></div>
                <div class="hero-divider"></div>
                <div class="hero-stat"><h3>7</h3><p>Certifications</p></div>
            </div>
        </div>
    </div>
    <div class="about-hero__scroll">
        <div class="scroll-line"></div>
        <span>Scroll</span>
    </div>
</section>

<!-- ===== THE STORY ===== -->
<section class="story-section">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="reveal">
                    <div class="story-tag">The Inception</div>
                    <h2 class="story-heading">Born from<br><em>Resilience</em><br>in Motion.</h2>
                    <div class="story-body">
                        <p>On <strong>July 11, 2015</strong>, Ms. Arty Sharma, a certified Advanced Yoga Teacher, began "Anant Yoga Classes." As a widow and single mother of three, her journey was not born out of convenience — it was a fight for survival.</p>
                        <p>Traveling daily across Mumbai's local trains, she conducted classes from Charni Road to Goregaon. What started as personal resilience soon blossomed into a community movement that touched hundreds of lives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal reveal-delay-2">
                    <div class="story-img-wrap">
                        <div class="story-accent-box"></div>
                        <img src="img/about/about-page-pic.png" alt="Yoga Training" class="story-img-main-new" style="position:relative;z-index:1;" onerror="this.src='https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                        <div class="story-accent-box2"><h3>10+</h3><p>Years of Impact</p></div>
                    </div>
                    <div class="quote-modern mt-4">
                        <blockquote>"Yoga gave me a life. Now I dedicate my life to giving yoga to others. This was resilience in motion."</blockquote>
                        <div class="quote-author">
                            <img src="img/about/WhatsApp Image 2026-02-28 at 5.14.36 PM.jpeg

" alt="Arty Sharma" onerror="this.src='https://ui-avatars.com/api/?name=Arty+Sharma&background=f86f03&color=fff'">
                            <div class="quote-line"></div>
                            <div><h6>Ms. Arty Sharma</h6><span>Founder, AYSAF</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="timeline-modern reveal">
            <div class="timeline-items">
                <div class="tl-item">
                    <div class="tl-connector"></div>
                    <div class="tl-dot"></div>
                    <div class="tl-card">
                        <div class="tl-year">2015 — Founding</div>
                        <h4>The First Step</h4>
                        <p>Ms. Arty Sharma begins Anant Yoga Classes across Mumbai, building the foundation of a life-changing mission.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-dot"></div>
                    <div class="tl-connector"></div>
                    <div class="tl-card">
                        <div class="tl-year">2015 – 2021</div>
                        <h4>Foundation Years</h4>
                        <p>Group and private sessions across Mumbai, crafting the core philosophy of accessible, transformative yoga.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-connector"></div>
                    <div class="tl-dot"></div>
                    <div class="tl-card">
                        <div class="tl-year">2022 – 2023</div>
                        <h4>Community Expansion</h4>
                        <p>Structured social impact begins in Naigaon East, focusing on women's empowerment and children's wellness.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-dot" style="border-color:var(--dark);background:var(--dark);box-shadow:0 0 0 4px var(--dark);"></div>
                    <div class="tl-connector" style="background:var(--dark);"></div>
                    <div class="tl-card" style="border-color:rgba(15,23,42,0.15);">
                        <div class="tl-year" style="color:var(--dark);">Dec 2024</div>
                        <h4>Formal Registration</h4>
                        <p>Registered as a Public Charitable Trust under the Mumbai Public Trust Act, 1950 — a new chapter begins.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PURPOSE ===== -->
<section class="purpose-section">
    <div class="container" style="position:relative;z-index:1;">
        <div class="row align-items-end mb-5">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="purpose-eyebrow"><span>Our Purpose</span></div>
                    <h2 class="purpose-heading">Vision, Mission<br>&amp; Core <em>Objectives</em></h2>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <p class="purpose-sub reveal reveal-delay-2">The strategic pillars guiding our foundation's work in creating sustainable societal change through yoga and spiritual awakening.</p>
            </div>
        </div>

        <div class="purpose-grid reveal">
            <div class="p-card p-vision">
                <div class="p-card-icon"><i class="ri-eye-2-line"></i></div>
                <h3>Our Vision</h3>
                <p>To foster a healthy, balanced, and empowered society through yoga and spiritual awakening — because every individual deserves access to the transformative power of holistic wellness, regardless of background or circumstance.</p>
            </div>
            <div class="p-card p-mission">
                <div class="p-card-icon"><i class="ri-rocket-2-line"></i></div>
                <h3>Our Mission</h3>
                <p>To conduct extensive Yoga Awareness Campaigns and provide accessible, high-quality training and research — focused on healthy society creation, women empowerment, and scientific validation of yogic practices across India.</p>
            </div>
        </div>

        <div class="obj-cards-row reveal reveal-delay-2">
            <div class="o-card">
                <div class="o-card-num">01</div>
                <i class="ri-women-line o-card-icon"></i>
                <h4>Women Empowerment</h4>
                <p>Specialized yoga training enabling livelihood creation and financial independence for women.</p>
            </div>
            <div class="o-card">
                <div class="o-card-num">02</div>
                <i class="ri-medal-line o-card-icon"></i>
                <h4>Teacher Training</h4>
                <p>Primary and Advanced Yoga Teacher Training programs building a new generation of instructors.</p>
            </div>
            <div class="o-card">
                <div class="o-card-num">03</div>
                <i class="ri-microscope-line o-card-icon"></i>
                <h4>Research Centre</h4>
                <p>A dedicated facility to scientifically validate and document the profound effects of yogic practices.</p>
            </div>
            <div class="o-card">
                <div class="o-card-num">04</div>
                <i class="ri-group-line o-card-icon"></i>
                <h4>Community Wellness</h4>
                <p>Expanding free and subsidized group classes for underserved populations across India.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== COMPLIANCE ===== -->
<section class="compliance-section">
    <div class="comp-bg-text">TRUST</div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="comp-header reveal">
            <div class="comp-header-left">
                <div class="comp-eyebrow">Transparency</div>
                <h2 class="comp-heading">Fully Compliant<br>&amp; <em>Accountable.</em></h2>
            </div>
            <div class="comp-header-right">
                <p>Transparency and accountability are our core commitments. The Foundation maintains full compliance with all regulatory bodies, ensuring every rupee donated is used with integrity and purpose.</p>
            </div>
        </div>

        <div class="cert-grid reveal">
            <div class="cert-card cert-card-wide">
                <div class="cert-icon"><i class="ri-file-list-3-line"></i></div>
                <div><h5>Trust Deed &amp; Certificate</h5><span>Registered under Mumbai Public Trust Act, 1950</span></div>
            </div>
            <div class="cert-card cert-card-wide">
                <div class="cert-icon"><i class="ri-percent-line"></i></div>
                <div><h5>12A &amp; 80G Tax Exemption</h5><span>Donations eligible for full income tax deduction</span></div>
            </div>
            <div class="cert-card">
                <div class="cert-icon"><i class="ri-profile-line"></i></div>
                <h5>PAN &amp; Udyam Aadhaar</h5>
                <span>Registered Identity</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon"><i class="ri-government-line"></i></div>
                <h5>NITI Aayog</h5>
                <span>Government Registration</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon"><i class="ri-checkbox-circle-line"></i></div>
                <h5>E-Anudaan</h5>
                <span>Certified Platform</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon"><i class="ri-building-4-line"></i></div>
                <h5>CSR Ready</h5>
                <span>Corporate Funding Eligible</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon"><i class="ri-award-line"></i></div>
                <h5>ISO Certified</h5>
                <span>Quality Management</span>
            </div>
        </div>

        <div class="trust-bar reveal reveal-delay-2">
            <div class="trust-bar-item"><i class="ri-shield-check-line"></i> 100% Transparent Operations</div>
            <div class="trust-divider"></div>
            <div class="trust-bar-item"><i class="ri-heart-line"></i> Donor-First Commitment</div>
            <div class="trust-divider"></div>
            <div class="trust-bar-item"><i class="ri-bar-chart-grouped-line"></i> Annual Reports Published</div>
            <div class="trust-divider"></div>
            <div class="trust-bar-item"><i class="ri-lock-line"></i> Regulated &amp; Audited</div>
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
                        <li><i class="fa fa-phone"></i><span>8149751780 / 9607511939</span></li>
                        <li><i class="fa fa-envelope"></i><span>anantyogaclasses@gmail.com</span></li>
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
    var header = $(".header__nav");
    var topBar = $(".header__top");
    $(window).on("scroll", function(){
        if($(this).scrollTop() > (topBar.outerHeight() || 50)){
            header.addClass("header__nav--fixed");
        } else {
            header.removeClass("header__nav--fixed");
        }
    });
    $(".canvas__open").on("click", function(){
        $(".offcanvas-menu").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
        $("body").css("overflow","hidden");
    });
    $(".offcanvas-menu-overlay, .offcanvas__close").on("click", function(){
        $(".offcanvas-menu").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
        $("body").css("overflow","auto");
    });
    function revealOnScroll(){
        var scrollTop = $(window).scrollTop() + $(window).height();
        $('.reveal').each(function(){
            if(scrollTop > $(this).offset().top + 60){
                $(this).addClass('visible');
            }
        });
    }
    $(window).on('scroll', revealOnScroll);
    revealOnScroll();
    $("a[href^='#']").on("click", function(e){
        var target = $(this.getAttribute("href"));
        if(target.length){
            e.preventDefault();
            $("html,body").animate({scrollTop: target.offset().top - 80}, 800);
        }
    });
    function animateCounters(){
        $('.hero-stat h3').each(function(){
            var $this = $(this);
            var text = $this.text();
            var num = parseInt(text);
            var suffix = text.replace(/[0-9]/g,'');
            if(!isNaN(num)){
                $({n:0}).animate({n:num},{
                    duration:2000, easing:'swing',
                    step:function(){ $this.text(Math.ceil(this.n) + suffix); },
                    complete:function(){ $this.text(num + suffix); }
                });
            }
        });
    }
    setTimeout(animateCounters, 500);
});
</script>
</body>
</html>