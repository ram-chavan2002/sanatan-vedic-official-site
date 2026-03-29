<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anant YOGASPIRITUAL Awakening Foundation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'DM Sans',sans-serif;color:#444;background:#fff;overflow-x:hidden;}
a{text-decoration:none;color:inherit;}
a:hover{text-decoration:none;color:inherit;}
.spad{padding:90px 0;}
.primary-btn{display:inline-block;background:#f86f03;color:#fff;padding:13px 32px;border-radius:30px;font-weight:700;font-size:14px;letter-spacing:1px;transition:.3s;text-transform:uppercase;}
.primary-btn:hover{background:#333;color:#fff;box-shadow:0 8px 20px rgba(248,111,3,0.4);}

/* HEADER */
.header{background:#fff;box-shadow:0 2px 15px rgba(0,0,0,0.05);position:relative;z-index:999;}
.header__top{background:#1a1a2e;padding:10px 0;}
.header__logo{padding:10px 0;}
.header__logo a{display:flex;align-items:center;text-decoration:none;gap: 11px;}
.header__logo img{max-height:65px;width:auto;border-radius:4px;display:block;flex-shrink:0;}

/* ✅ ONLY CHANGE: Header Title Font Sizes - Mota kiya */
.header-title{font-family:'Playfair Display',serif;font-size:12px;font-weight:700;color:#1a1a2e;text-transform:uppercase;}
@media(max-width:991px){.header-title{display:block;font-size:22px;}.header__logo{padding:6px 0;}.header__logo img{max-height:52px;}}
@media(max-width:575px){.header-title{font-size:19px;letter-spacing:0.4px;}}
@media(max-width:480px){.header-title{font-size:12px;letter-spacing:0.3px;}.header__logo img{max-height:51px;}}
@media(max-width:360px){.header-title{font-size:10px;}}

.header__top__widget{display:flex;align-items:center;justify-content:flex-end;gap:20px;height:100%;flex-wrap:wrap;}
.header__top__widget ul{list-style:none;display:flex;gap:25px;margin:0;padding:0;flex-wrap:wrap;}
.header__top__widget ul li{color:#ddd;font-size:13px;letter-spacing:.5px;display:flex;align-items:center;}
.header__top__widget ul li i{color:#f86f03;margin-right:8px;font-size:16px;}
.header__nav{background:#fff;border-top:3px solid #f86f03;transition:all 0.3s ease;}
.header__menu ul{list-style:none;display:flex;gap:5px;margin:0;padding:0;}
.header__menu ul li{position:relative;}
.header__menu ul li a{display:block;padding:20px 22px;font-size:15px;font-weight:600;color:#222;text-transform:uppercase;transition:.3s;}
.header__menu ul li a:hover,.header__menu ul li.active a{color:#f86f03;}
.header__menu ul li ul.dropdown{display:none;position:absolute;top:100%;left:0;background:#fff;min-width:220px;box-shadow:0 10px 30px rgba(0,0,0,0.1);z-index:999;border-top:3px solid #f86f03;border-radius:0 0 5px 5px;}
.header__menu ul li:hover ul.dropdown{display:block;}
.header__menu ul li ul.dropdown li a{padding:12px 20px;font-size:14px;border-bottom:1px solid #f0f0f0;text-transform:capitalize;}
.header__social{display:flex;align-items:center;justify-content:flex-end;gap:10px;height:100%;}
.header__social a{width:36px;height:36px;border-radius:50%;background:#f5f5f5;color:#333;display:flex;align-items:center;justify-content:center;font-size:14px;transition:.3s;}
.header__social a:hover{background:#f86f03;color:#fff;transform:translateY(-3px);}
.header__nav.header__nav--fixed{position:fixed;top:0;left:0;width:100%;z-index:1000;box-shadow:0 4px 20px rgba(0,0,0,0.1);animation:slideDown 0.4s ease;}
@keyframes slideDown{from{transform:translateY(-100%);}to{transform:translateY(0);}}
.offcanvas-menu-overlay{position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,.7);z-index:1000;opacity:0;visibility:hidden;transition:.4s;}
.offcanvas-menu-overlay.active{opacity:1;visibility:visible;}
.offcanvas-menu{position:fixed;left:-350px;top:0;width:310px;height:100%;background:#1a1a2e;z-index:1001;overflow-y:auto;transition:.4s cubic-bezier(0.77,0,0.175,1);padding:40px 25px;}
.offcanvas-menu.active{left:0;}
.offcanvas__logo img{max-height:60px;border-radius:4px;margin-bottom:30px;}
.offcanvas__widget ul{list-style:none;padding:20px;margin-bottom:30px;background:rgba(255,255,255,0.05);border-radius:8px;}
.offcanvas__widget ul li{color:#ddd;font-size:13px;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.1);}
.offcanvas__widget ul li:last-child{border-bottom:none;}
.offcanvas__social{display:flex;gap:12px;margin-top:30px;}
.offcanvas__social a{width:38px;height:38px;border-radius:50%;background:#f86f03;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.offcanvas__social a:hover{background:#fff;color:#f86f03;}
.canvas__open{position:absolute;right:15px;top:50%;transform:translateY(-50%);display:none;cursor:pointer;background:#f86f03;color:#fff;width:40px;height:40px;border-radius:4px;align-items:center;justify-content:center;font-size:20px;}
.offcanvas__close{position:absolute;right:20px;top:20px;color:#fff;font-size:24px;cursor:pointer;transition:.3s;}
.offcanvas__close:hover{color:#f86f03;}
.offcanvas__nav ul{list-style:none;padding:0;}
.offcanvas__nav ul li a{display:flex;justify-content:space-between;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.1);color:#eee;font-size:15px;font-weight:600;text-transform:uppercase;}
.offcanvas__nav ul li a:hover{color:#f86f03;}

/* HERO */
.hero{position:relative;overflow:hidden;}
.hero__items{display:flex;align-items:center;background-size:cover;background-position:center;position:relative;overflow:hidden;padding:110px 0 90px;min-height:700px;}
.hero__items.slide-1{background:linear-gradient(125deg,#0d0221 0%,#1a0533 20%,#2d0b4e 40%,#7b2d00 70%,#f86f03 100%);}
.hero__items.slide-2{background:linear-gradient(125deg,#020c1b 0%,#0a2540 25%,#0e4d6b 50%,#b85c00 80%,#f86f03 100%);}
.hero__items::before{content:'';position:absolute;inset:0;z-index:1;background:linear-gradient(135deg,rgba(248,111,3,0.12) 0%,transparent 40%,rgba(83,52,131,0.18) 70%,rgba(248,111,3,0.08) 100%);animation:shimmer 6s ease-in-out infinite alternate;}
@keyframes shimmer{0%{opacity:0.5;transform:scale(1);}100%{opacity:1;transform:scale(1.03);}}
.hero__items::after{content:'';position:absolute;right:-120px;top:50%;transform:translateY(-50%);width:700px;height:700px;background:radial-gradient(circle,rgba(248,111,3,0.18) 0%,rgba(248,111,3,0.08) 30%,transparent 70%);border-radius:50%;animation:pulse-ring 4s ease-in-out infinite;z-index:1;}
@keyframes pulse-ring{0%,100%{transform:translateY(-50%) scale(1);opacity:0.8;}50%{transform:translateY(-50%) scale(1.1);opacity:1;}}
.hero-mandala{position:absolute;right:-80px;top:50%;transform:translateY(-50%);width:600px;height:600px;opacity:0.07;z-index:1;animation:mandala-spin 40s linear infinite;}
@keyframes mandala-spin{from{transform:translateY(-50%) rotate(0deg);}to{transform:translateY(-50%) rotate(360deg);}}
.hero-orb{position:absolute;border-radius:50%;filter:blur(60px);z-index:1;pointer-events:none;}
.hero-orb-1{width:300px;height:300px;background:rgba(248,111,3,0.25);top:-80px;left:-80px;animation:orb-drift 8s ease-in-out infinite alternate;}
.hero-orb-2{width:200px;height:200px;background:rgba(83,52,131,0.35);bottom:-60px;right:20%;animation:orb-drift 6s ease-in-out infinite alternate-reverse;}
.hero-orb-3{width:150px;height:150px;background:rgba(248,111,3,0.2);top:30%;right:10%;animation:orb-drift 10s ease-in-out infinite alternate;}
@keyframes orb-drift{0%{transform:translate(0,0);}100%{transform:translate(30px,20px);}}
.hero-rays{position:absolute;inset:0;z-index:1;background:repeating-linear-gradient(-45deg,transparent,transparent 80px,rgba(255,255,255,0.012) 80px,rgba(255,255,255,0.012) 82px);}
.hero .container{position:relative;z-index:5;}
.hero .row{align-items:center;}
.hero__text{position:relative;}
.hero-eyebrow{display:inline-flex;align-items:center;gap:10px;background:rgba(248,111,3,0.15);border:1px solid rgba(248,111,3,0.4);color:#ffb366;padding:8px 20px;border-radius:30px;font-size:12px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px;backdrop-filter:blur(8px);}
.hero-eyebrow .dot{width:8px;height:8px;background:#f86f03;border-radius:50%;animation:blink 1.5s infinite;flex-shrink:0;}
@keyframes blink{0%,100%{opacity:1;}50%{opacity:0.2;}}
.hero__text h2{font-family:'Playfair Display',serif;font-size:52px;font-weight:700;color:#fff;line-height:1.2;margin-bottom:18px;text-shadow:0 2px 30px rgba(0,0,0,0.3);}
.hero__text h2 .highlight{background:linear-gradient(135deg,#f86f03,#ffb366);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
.hero__text p{font-size:16px;color:rgba(255,255,255,0.85);margin-bottom:30px;max-width:540px;line-height:1.8;}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap;align-items:center;}
.hero-btn-primary{display:inline-flex;align-items:center;gap:10px;background:linear-gradient(135deg,#f86f03,#ff9a3c);color:#fff;padding:14px 30px;border-radius:50px;font-weight:700;font-size:14px;letter-spacing:.5px;box-shadow:0 10px 30px rgba(248,111,3,0.5);transition:.3s;text-transform:uppercase;}
.hero-btn-primary:hover{transform:translateY(-3px);box-shadow:0 15px 35px rgba(248,111,3,0.6);color:#fff;}
.hero-btn-outline{display:inline-flex;align-items:center;gap:10px;background:rgba(255,255,255,0.08);border:2px solid rgba(255,255,255,0.3);color:#fff;padding:13px 26px;border-radius:50px;font-weight:600;font-size:14px;backdrop-filter:blur(8px);transition:.3s;}
.hero-btn-outline:hover{background:rgba(255,255,255,0.18);border-color:rgba(255,255,255,0.6);color:#fff;transform:translateY(-3px);}
.hero-stats{display:flex;gap:30px;margin-top:36px;padding-top:28px;border-top:1px solid rgba(255,255,255,0.12);}
.hero-stat .num{font-family:'Playfair Display',serif;font-size:28px;font-weight:700;color:#fff;line-height:1;}
.hero-stat .num span{color:#f86f03;}
.hero-stat .lbl{font-size:11px;color:rgba(255,255,255,0.55);text-transform:uppercase;letter-spacing:1.5px;margin-top:4px;}
.hero-img-side{position:relative;display:flex;align-items:center;justify-content:center;padding:20px 0;}
.hero-img-circle{width:360px;height:360px;border-radius:50%;background:rgba(255,255,255,0.04);border:1px solid rgba(248,111,3,0.3);display:flex;align-items:center;justify-content:center;position:relative;animation:float2 5s ease-in-out infinite;margin:0 auto;}
@keyframes float2{0%,100%{transform:translateY(0);}50%{transform:translateY(-16px);}}
.hero-img-circle::before{content:'';position:absolute;inset:-20px;border-radius:50%;border:1px dashed rgba(248,111,3,0.25);animation:ring-spin 30s linear infinite;}
.hero-img-circle::after{content:'';position:absolute;inset:-42px;border-radius:50%;border:1px dashed rgba(248,111,3,0.12);animation:ring-spin 50s linear infinite reverse;}
@keyframes ring-spin{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}
.hero-img-circle img{width:220px;height:auto;filter:drop-shadow(0 20px 50px rgba(248,111,3,0.5));position:relative;z-index:2;display:block;}
.hero .owl-nav button{position:absolute;top:50%;transform:translateY(-50%);background:rgba(248,111,3,0.2)!important;border:1px solid rgba(248,111,3,0.4)!important;color:#fff!important;width:50px;height:50px;border-radius:50%;font-size:20px!important;transition:.3s;backdrop-filter:blur(8px);}
.hero .owl-nav button:hover{background:#f86f03!important;border-color:#f86f03!important;}
.hero .owl-prev{left:20px;}
.hero .owl-next{right:20px;}
.hero .owl-dots{position:absolute;bottom:25px;width:100%;text-align:center;z-index:10;}
.hero .owl-dots .owl-dot span{background:rgba(255,255,255,0.3);width:10px;height:10px;border-radius:50%;display:inline-block;margin:0 5px;transition:.3s;}
.hero .owl-dots .owl-dot.active span{background:#f86f03;width:28px;border-radius:5px;}
#scrollTop{position:fixed;bottom:30px;right:30px;width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#f86f03,#ff9a3c);color:#fff;border:none;cursor:pointer;display:none;align-items:center;justify-content:center;font-size:18px;z-index:9999;box-shadow:0 8px 25px rgba(248,111,3,0.5);transition:.3s;}
#scrollTop:hover{transform:translateY(-4px);box-shadow:0 12px 30px rgba(248,111,3,0.6);}
#scrollTop.show{display:flex;}

/* ABOUT */
.home-about{background:#fff;position:relative;overflow:hidden;}
.home-about::before{content:'';position:absolute;top:-200px;right:-200px;width:600px;height:600px;background:radial-gradient(circle,rgba(248,111,3,0.06) 0%,transparent 70%);border-radius:50%;pointer-events:none;}
.home-about::after{content:'';position:absolute;bottom:-150px;left:-150px;width:400px;height:400px;background:radial-gradient(circle,rgba(83,52,131,0.06) 0%,transparent 70%);border-radius:50%;pointer-events:none;}
.home__about__pic{display:grid;grid-template-columns:1.5fr 1fr;grid-template-rows:500px;gap:15px;}
.home__about__pic .large-item{grid-column:1;grid-row:1;border-radius:20px;overflow:hidden;position:relative;background:linear-gradient(120deg,#f86f03,#533483);}
.home__about__pic .large-item img{width:100%;height:100%;object-fit:cover;display:block;}
.home__about__pic .large-item::after{content:'';position:absolute;inset:0;background:linear-gradient(to top,rgba(248,111,3,0.45),transparent);border-radius:20px;}
.home__about__pic__right{grid-column:2;grid-row:1;display:flex;flex-direction:column;gap:15px;}
.home__about__pic__item__inner{flex:1;border-radius:16px;overflow:hidden;position:relative;min-height:0;}
.home__about__pic__item__inner:first-child{background:linear-gradient(135deg,#1a1a2e,#0f3460);}
.home__about__pic__item__inner:last-child{background:linear-gradient(135deg,#533483,#f86f03);}
.home__about__pic__item__inner img{width:100%;height:100%;object-fit:cover;object-position:top center;display:block;}
.about-badge{position:absolute;bottom:24px;left:24px;z-index:3;background:#f86f03;color:#fff;border-radius:14px;padding:14px 20px;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1px;box-shadow:0 10px 30px rgba(248,111,3,0.4);}
.about-badge span{font-size:30px;font-weight:700;display:block;line-height:1;}
.home__about__text{padding-left:40px;position:relative;}
.about-label{display:inline-block;background:rgba(248,111,3,0.1);color:#f86f03;padding:6px 18px;border-radius:30px;font-size:13px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:18px;}
.section-title h2{font-family:'Playfair Display',serif;font-size:38px;font-weight:700;color:#1a1a2e;margin-bottom:16px;}
.normal-title h2{font-family:'Playfair Display',serif;}
.normal-title{text-align:center;margin-bottom:60px;}
.normal-title p{max-width:650px;margin:0 auto;color:#666;font-size:16px;line-height:1.7;}
.home__about__text .section-title h2{margin-bottom:12px;}
.home__about__text .tagline{font-size:22px;font-weight:700;color:#f86f03;margin-bottom:22px;font-family:'Playfair Display',serif;font-style:italic;}
.home__about__text p{color:#555;line-height:1.9;margin-bottom:18px;font-size:16px;}
.about-features{list-style:none;padding:0;margin:25px 0 30px;}
.about-features li{display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px dashed #eee;font-size:15px;color:#444;}
.about-features li:last-child{border-bottom:none;}
.about-features li i{width:32px;height:32px;background:#f86f03;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;}

/* WHO WE ARE */
.chooseus{background:linear-gradient(135deg,#0f0c29 0%,#302b63 50%,#24243e 100%);position:relative;overflow:hidden;}
.chooseus::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 20% 50%,rgba(248,111,3,0.15) 0%,transparent 50%),radial-gradient(circle at 80% 20%,rgba(83,52,131,0.2) 0%,transparent 50%);pointer-events:none;}
.chooseus::after{content:'';position:absolute;width:500px;height:500px;border:1px solid rgba(255,255,255,0.04);border-radius:50%;top:50%;left:50%;transform:translate(-50%,-50%);pointer-events:none;}
.chooseus__text h2{font-family:'Playfair Display',serif;font-size:38px;font-weight:700;color:#fff;margin-bottom:20px;line-height:1.3;}
.chooseus__text p{color:rgba(255,255,255,0.7);line-height:1.9;margin-bottom:15px;font-size:16px;}
.section-divider{width:60px;height:4px;background:linear-gradient(90deg,#f86f03,#ff9a3c);border-radius:2px;margin:0 0 30px;}
.counter-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:20px;margin-top:30px;}
.chooseus__item{background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);backdrop-filter:blur(10px);padding:28px 25px;border-radius:16px;transition:.4s;position:relative;overflow:hidden;}
.chooseus__item::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(248,111,3,0) 0%,rgba(248,111,3,0.08) 100%);opacity:0;transition:.4s;}
.chooseus__item:hover{transform:translateY(-6px);border-color:rgba(248,111,3,0.5);box-shadow:0 20px 40px rgba(0,0,0,0.3);}
.chooseus__item:hover::before{opacity:1;}
.chooseus__item__icon{margin-bottom:16px;}
.chooseus__item__icon i{color:#f86f03;}
.chooseus__item__text h2{font-size:42px;font-weight:700;color:#fff;margin:0 0 6px;line-height:1;font-family:'Playfair Display',serif;}
.chooseus__item__text h2 .counter-plus{color:#f86f03;}
.chooseus__item__text p{margin:0;color:rgba(255,255,255,0.6);font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:2px;}
.chooseus__pic{position:relative;display:flex;align-items:center;justify-content:center;}
.chooseus__pic .img-wrap{position:relative;width:100%;}
.chooseus__pic img{width:100%;max-width:420px;height:auto;display:block;margin:0 auto;filter:drop-shadow(0 20px 60px rgba(248,111,3,0.3));animation:float 4s ease-in-out infinite;}
@keyframes float{0%,100%{transform:translateY(0);}50%{transform:translateY(-15px);}}
.glow-ring{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:380px;height:380px;border-radius:50%;background:radial-gradient(circle,rgba(248,111,3,0.15) 0%,transparent 70%);pointer-events:none;}

/* IMPACT */
.upcoming-classes{background:#f8f7f5;position:relative;overflow:hidden;}
.upcoming-classes::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,#f86f03,#533483,#0f3460);}
.section-tag{display:inline-block;background:linear-gradient(135deg,#f86f03,#ff9a3c);color:#fff;padding:6px 20px;border-radius:30px;font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;}
.classes__item{background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 8px 30px rgba(0,0,0,0.06);margin-bottom:30px;transition:.4s;border:1px solid #f0eeea;}
.classes__item:hover{transform:translateY(-12px);box-shadow:0 25px 50px rgba(0,0,0,0.15);border-color:transparent;}
.classes__item__pic{height:260px;background-size:cover;background-position:center;position:relative;overflow:hidden;}
.classes__item__pic::after{content:'';position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.5) 0%,transparent 60%);}
.classes__item__pic span{position:absolute;bottom:20px;left:20px;z-index:2;background:#f86f03;color:#fff;padding:7px 20px;border-radius:30px;font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;box-shadow:0 5px 15px rgba(248,111,3,0.4);}
.classes__item__text{padding:28px 28px 30px;}
.classes__item__text .cat-label{color:#f86f03;font-weight:700;font-size:13px;margin-bottom:10px;text-transform:uppercase;letter-spacing:1px;display:flex;align-items:center;gap:8px;}
.classes__item__text .cat-label::before{content:'';width:20px;height:2px;background:#f86f03;display:inline-block;}
.classes__item__text h4{font-family:'Playfair Display',serif;font-size:22px;font-weight:700;color:#1a1a2e;margin-bottom:14px;line-height:1.4;}
.classes__item__text h6{font-size:15px;color:#777;line-height:1.8;font-weight:400;margin:0 0 20px;}
.card-link{display:inline-flex;align-items:center;gap:8px;color:#f86f03;font-weight:700;font-size:14px;transition:.3s;}
.card-link:hover{gap:12px;color:#1a1a2e;}

/* TESTIMONIAL */
.testimonial{background:#fff;padding:100px 0;position:relative;overflow:hidden;}
.testimonial::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 10% 50%,rgba(248,111,3,0.06) 0%,transparent 55%),radial-gradient(ellipse at 90% 20%,rgba(83,52,131,0.05) 0%,transparent 55%);pointer-events:none;}
.testimonial::after{content:'';position:absolute;top:0;left:0;right:0;height:5px;background:linear-gradient(90deg,#f86f03,#533483,#0f3460,#f86f03);background-size:300% 100%;animation:gradient-slide 4s linear infinite;}
@keyframes gradient-slide{0%{background-position:0% 0;}100%{background-position:300% 0;}}
.testi-header{text-align:center;margin-bottom:60px;position:relative;z-index:2;}
.testi-header .section-tag{display:inline-block;margin-bottom:18px;}
.testi-header h2{font-family:'Playfair Display',serif;font-size:40px;font-weight:700;color:#1a1a2e;margin-bottom:14px;}
.testi-header p{color:#777;font-size:16px;max-width:550px;margin:0 auto;}
.testi-stars{color:#f86f03;font-size:16px;letter-spacing:3px;margin-bottom:22px;display:block;}
.testimonial__card{background:#fff;border:1px solid #f0eeea;border-radius:24px;padding:45px 50px;margin:10px 15px 20px;box-shadow:0 8px 40px rgba(0,0,0,0.07);transition:.4s;position:relative;text-align:left;}
.testimonial__card:hover{transform:translateY(-10px);box-shadow:0 20px 60px rgba(248,111,3,0.15);border-color:rgba(248,111,3,0.3);}
.testimonial__card .big-quote{position:absolute;top:25px;right:35px;font-size:120px;line-height:1;color:rgba(248,111,3,0.08);font-family:'Playfair Display',serif;font-weight:700;user-select:none;pointer-events:none;}
.testimonial__card::before{content:'';position:absolute;left:0;top:30px;bottom:30px;width:4px;border-radius:0 4px 4px 0;background:linear-gradient(180deg,#f86f03,#ff9a3c);}
.quote-icon{font-size:28px;color:#f86f03;margin-bottom:18px;display:block;opacity:0.8;}
.testimonial__card p{font-size:17px;color:#444;font-style:italic;line-height:1.95;margin-bottom:30px;position:relative;z-index:1;}
.testi-divider{width:100%;height:1px;background:linear-gradient(90deg,rgba(248,111,3,0.3),transparent);margin-bottom:25px;}
.client-info{display:flex;align-items:center;gap:16px;}
.client-info img{height:60px;max-width:64px;border-radius:50%;object-fit:cover;border:3px solid #f86f03;box-shadow:0 6px 20px rgba(248,111,3,0.25);flex-shrink:0;}
.client-info div{text-align:left;}
.client-info h5{color:#1a1a2e;font-size:17px;font-weight:700;margin:0 0 4px;}
.client-info span{color:#f86f03;font-size:13px;font-weight:600;display:flex;align-items:center;gap:6px;}
.client-info span::before{content:'';width:18px;height:2px;background:#f86f03;display:inline-block;}
.testimonial .owl-stage-outer{padding:10px 0 5px;}
.testimonial .owl-dots{text-align:center;margin-top:35px;position:relative;z-index:2;}
.testimonial .owl-dots .owl-dot span{background:#e0dbd4;width:10px;height:10px;border-radius:50%;display:inline-block;margin:0 5px;transition:.3s;}
.testimonial .owl-dots .owl-dot.active span{background:#f86f03;width:32px;border-radius:5px;}
.testi-nav{display:flex;justify-content:center;gap:12px;margin-top:20px;position:relative;z-index:2;}
.testi-nav button{width:48px;height:48px;border-radius:50%;border:2px solid #f86f03;background:transparent;color:#f86f03;font-size:16px;cursor:pointer;transition:.3s;display:flex;align-items:center;justify-content:center;}
.testi-nav button:hover{background:#f86f03;color:#fff;}

/* FOOTER */
.footer{background:#111827;padding:70px 0 0;color:#9ca3af;}
.footer-logo-link{display:flex;align-items:center;gap:14px;text-decoration:none;margin-bottom:20px;}
.footer__about img{max-height:65px;border-radius:6px;margin-bottom:0;background:#fff;padding:5px;flex-shrink:0;}
.footer-logo-title{font-family:'Playfair Display',serif;font-size:14px;font-weight:700;color:#fff;text-transform:uppercase;letter-spacing:0.8px;line-height:1.55;}
.footer__about p{font-size:14px;line-height:1.8;margin-bottom:20px;}
.footer__about ul{list-style:none;padding:0;margin-bottom:25px;}
.footer__about ul li{font-size:14px;padding:6px 0;}
.footer__about ul li i{color:#f86f03;margin-right:8px;font-size:16px;}
.subscribe-form{display:flex;background:#1f2937;border-radius:30px;overflow:hidden;padding:4px;}
.subscribe-form input{flex:1;padding:12px 20px;border:none;background:transparent;color:#fff;font-size:14px;outline:none;min-width:0;}
.subscribe-form button{background:#f86f03;color:#fff;border:none;padding:0 20px;border-radius:30px;cursor:pointer;transition:.3s;font-weight:600;white-space:nowrap;}
.subscribe-form button:hover{background:#fff;color:#f86f03;}
.footer__widget{margin-bottom:30px;}
.footer__widget h5{color:#fff;font-size:18px;font-weight:700;margin-bottom:25px;position:relative;padding-bottom:12px;}
.footer__widget h5::after{content:'';position:absolute;left:0;bottom:0;width:40px;height:3px;background:#f86f03;}
.footer__widget ul{list-style:none;padding:0;}
.footer__widget ul li{padding:8px 0;}
.footer__widget ul li a{color:#9ca3af;font-size:14px;transition:.3s;display:inline-block;}
.footer__widget ul li a:hover{color:#f86f03;transform:translateX(5px);}
.footer-address li{font-size:14px;display:flex;gap:12px;align-items:flex-start;padding:8px 0;line-height:1.6;}
.footer-address li i{color:#f86f03;margin-top:4px;font-size:16px;}
.footer-social{display:flex;gap:10px;margin-top:20px;flex-wrap:wrap;}
.footer-social a{width:38px;height:38px;border-radius:50%;background:#1f2937;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.footer-social a:hover{background:#f86f03;transform:translateY(-3px);}
.footer__copyright{border-top:1px solid rgba(255,255,255,0.1);padding:25px 0;margin-top:50px;}
.footer__copyright__text{text-align:center;}
.footer__copyright__text p{margin:0;font-size:14px;}

/* ===================== RESPONSIVE ===================== */
@media(max-width:1199px){
  .hero__items{padding:90px 0 75px;}
  .hero__text h2{font-size:44px;}
  .hero-img-circle{width:300px;height:300px;}
  .hero-img-circle img{width:180px;}
  .section-title h2{font-size:34px;}
  .chooseus__text h2{font-size:34px;}
  .home__about__pic{grid-template-rows:420px;}
}

@media(max-width:991px){
  .header__top{display:none;}
  .header__nav{padding:8px 0;border-top:none;}
  .header__menu,.header__social{display:none;}
  .canvas__open{display:flex!important;}
  .hero__items{padding:75px 0 65px;min-height:auto;}
  .hero__text h2{font-size:36px;}
  .hero__text p{font-size:15px;}
  .hero-stats{gap:20px;margin-top:28px;padding-top:22px;}
  .hero-stat .num{font-size:24px;}
  .hero-img-circle{width:250px;height:250px;}
  .hero-img-circle img{width:155px;}
  .home-about .row{display:flex;flex-wrap:wrap;}
  .about-text-col{order:1;width:100%;max-width:100%;flex:0 0 100%;}
  .about-pic-col{order:2;width:100%;max-width:100%;flex:0 0 100%;}
  .home__about__pic{grid-template-rows:380px;margin-top:36px;}
  .home__about__text{padding-left:0;}
  .chooseus__pic{margin-top:50px;}
  .chooseus__text h2{font-size:30px;}
  .section-title h2,.normal-title h2{font-size:30px;}
  .testi-header h2{font-size:32px;}
  .spad{padding:80px 0;}
  .testimonial{padding:80px 0;}
}

@media(max-width:767px){
  .spad{padding:60px 0;}
  .testimonial{padding:60px 0;}
  .hero__items{padding:65px 0 55px;min-height:auto;}
  .hero .row{flex-direction:column;}
  .hero .col-lg-7,.hero .col-lg-5,.hero [class*="col-md-7"],.hero [class*="col-md-5"]{width:100%;max-width:100%;flex:0 0 100%;}
  .hero__text{text-align:center;}
  .hero__text h2{font-size:28px;line-height:1.3;}
  .hero__text p{font-size:14px;margin-bottom:22px;margin-left:auto;margin-right:auto;max-width:100%;}
  .hero-eyebrow{font-size:11px;padding:6px 14px;letter-spacing:1px;margin-left:auto;margin-right:auto;}
  .hero-btns{justify-content:center;gap:10px;}
  .hero-btn-primary,.hero-btn-outline{padding:12px 22px;font-size:13px;}
  .hero-stats{gap:18px;justify-content:center;flex-wrap:wrap;margin-top:22px;padding-top:18px;}
  .hero-stat{text-align:center;min-width:70px;}
  .hero-stat .num{font-size:22px;}
  .hero-stat .lbl{font-size:10px;}
  .hero-img-side{padding:0;margin-top:24px;}
  .hero-img-circle{width:170px;height:170px;}
  .hero-img-circle::before{inset:-10px;}
  .hero-img-circle::after{inset:-22px;}
  .hero-img-circle img{width:108px;}
  .hero-mandala{width:320px;height:320px;opacity:0.05;}
  .home__about__pic{grid-template-columns:1.5fr 1fr;grid-template-rows:260px;gap:10px;margin-top:28px;}
  .about-badge{bottom:14px;left:14px;padding:10px 13px;}
  .about-badge span{font-size:22px;}
  .home__about__text{padding-left:0;}
  .home__about__text .tagline{font-size:18px;}
  .section-title h2{font-size:26px;}
  .chooseus__text h2{font-size:26px;}
  .chooseus__pic{margin-top:40px;}
  .counter-grid{grid-template-columns:repeat(2,1fr);gap:14px;}
  .chooseus__item{padding:20px 16px;}
  .chooseus__item__text h2{font-size:34px;}
  .glow-ring{width:220px;height:220px;}
  .chooseus__pic img{max-width:280px;}
  .normal-title{margin-bottom:40px;}
  .normal-title h2{font-size:26px;}
  .classes__item__pic{height:220px;}
  .testi-header h2{font-size:28px;}
  .testi-header{margin-bottom:40px;}
  .testimonial__card{padding:30px 24px;}
  .testimonial__card .big-quote{font-size:80px;top:16px;right:20px;}
  .testimonial__card p{font-size:15px;}
  .footer{padding:50px 0 0;}
  .footer-logo-title{font-size:12px;letter-spacing:0.5px;}
  #scrollTop{bottom:20px;right:20px;width:42px;height:42px;font-size:16px;}
}

@media(max-width:575px){
  .home__about__pic{grid-template-rows:220px;}
  .chooseus__item__text h2{font-size:28px;}
  .chooseus__item{padding:16px 14px;}
  .testimonial__card{padding:24px 18px;margin:8px 0 14px;}
  .classes__item__pic{height:200px;}
  .footer-logo-title{font-size:15px;letter-spacing:0.4px;}
  .footer__about img{max-height:52px;}
}

@media(max-width:480px){
  .hero__items{padding:50px 0 45px;}
  .hero__text h2{font-size:22px;}
  .hero-img-circle{width:140px;height:140px;}
  .hero-img-circle::before{inset:-8px;}
  .hero-img-circle::after{inset:-18px;}
  .hero-img-circle img{width:88px;}
  .hero-btns{flex-direction:column;align-items:center;width:100%;}
  .hero-btn-primary,.hero-btn-outline{width:100%;justify-content:center;}
  .hero-stats{gap:14px;}
  .hero-stat .num{font-size:20px;}
  .home__about__pic{grid-template-rows:180px;}
  .section-title h2,.normal-title h2{font-size:22px;}
  .home__about__text .tagline{font-size:16px;}
  .counter-grid{grid-template-columns:1fr 1fr;gap:10px;}
  .chooseus__text h2{font-size:22px;}
  .chooseus__item__text h2{font-size:26px;}
  .chooseus__pic img{max-width:230px;}
  .client-info{flex-direction:column;text-align:center;gap:10px;}
  .client-info div{text-align:center;}
  .client-info span{justify-content:center;}
  .client-info span::before{display:none;}
  .testi-header h2{font-size:22px;}
  .testimonial__card p{font-size:14px;}
  .footer__widget h5{font-size:16px;}
  .footer-logo-title{font-size:15px;letter-spacing:0.3px;}
  .footer__about img{max-height:44px;}
  .hero .owl-nav button{display:none;}
  #scrollTop{bottom:16px;right:16px;width:38px;height:38px;font-size:14px;}
}

@media(max-width:360px){
  .hero__text h2{font-size:19px;}
  .hero-img-circle{width:120px;height:120px;}
  .hero-img-circle img{width:76px;}
  .counter-grid{grid-template-columns:1fr;}
  .hero-stats{flex-direction:row;gap:10px;align-items:center;}
  .footer-logo-title{font-size:15px;}
}
</style>
</head>
<body>

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu">
    <div class="offcanvas__close"><i class="fa fa-times"></i></div>
    <div class="offcanvas__logo">
        <a href="#"><img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/f86f03/fff?text=Anant+Yoga'"></a>
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
            <li><a href="#">Home</a></li>
            <li><a href="about-us.php">About</a></li>
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
                        <a href="#">
                            <img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/250x70/fff/f86f03?text=Anant+Yoga'">
                            <div class="header-title">ANANT YOGA &amp; SPIRITUAL AWAKENING FOUNDATION</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="header__menu">
                        <ul class="justify-content-center">
                            <li><a href="#">Home</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="spiritulactivities.php">ACTIVITES</a></li>
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

<!-- HERO -->
<section class="hero">
    <div class="hero__sliders owl-carousel">
        <div class="hero__items slide-1">
            <div class="hero-orb hero-orb-1"></div><div class="hero-orb hero-orb-2"></div><div class="hero-orb hero-orb-3"></div><div class="hero-rays"></div>
            <svg class="hero-mandala" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="250" cy="250" r="240" stroke="white" stroke-width="1"/><circle cx="250" cy="250" r="200" stroke="white" stroke-width="0.8"/><circle cx="250" cy="250" r="160" stroke="white" stroke-width="0.6"/><circle cx="250" cy="250" r="120" stroke="white" stroke-width="0.5"/><line x1="250" y1="10" x2="250" y2="490" stroke="white" stroke-width="0.5"/><line x1="10" y1="250" x2="490" y2="250" stroke="white" stroke-width="0.5"/><line x1="80" y1="80" x2="420" y2="420" stroke="white" stroke-width="0.5"/><line x1="420" y1="80" x2="80" y2="420" stroke="white" stroke-width="0.5"/><polygon points="250,30 460,370 40,370" stroke="white" stroke-width="0.8" fill="none"/><polygon points="250,470 40,130 460,130" stroke="white" stroke-width="0.8" fill="none"/></svg>
            <div class="container"><div class="row">
                <div class="col-lg-7 col-md-7 col-12"><div class="hero__text">
                    <div class="hero-eyebrow"><span class="dot"></span>Registered Public Charitable Trust</div>
                    <h2><span class="highlight">Anant Yoga</span> &amp; Spiritual Awakening Foundation</h2>
                    <p>Empowering Lives Through Yoga. Awakening Consciousness. Transforming Society. Join our mission to create a sustainable and holistic impact.</p>
                    <div class="hero-btns"><a href="#about" class="hero-btn-primary"><i class="fa fa-heart"></i> Discover More</a><a href="Donation.php" class="hero-btn-outline"><i class="fa fa-hand-o-right"></i> Donate Now</a></div>
                    <div class="hero-stats"><div class="hero-stat"><div class="num">2146<span>+</span></div><div class="lbl">Students</div></div><div class="hero-stat"><div class="num">15<span>+</span></div><div class="lbl">Years Exp.</div></div><div class="hero-stat"><div class="num">48<span>+</span></div><div class="lbl">Branches</div></div></div>
                </div></div>
                <div class="col-lg-5 col-md-5 col-12"><div class="hero-img-side"><div class="hero-img-circle"><img src="img/35785973-8b86-4bd7-8680-b123f15b541b.png" alt="Yoga Symbol"></div></div></div>
            </div></div>
        </div>
        <div class="hero__items slide-2">
            <div class="hero-orb hero-orb-1" style="background:rgba(14,77,107,0.4);"></div><div class="hero-orb hero-orb-2" style="background:rgba(248,111,3,0.3);"></div><div class="hero-rays"></div>
            <svg class="hero-mandala" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="250" cy="250" r="240" stroke="white" stroke-width="1"/><circle cx="250" cy="250" r="190" stroke="white" stroke-width="0.7"/><line x1="250" y1="10" x2="250" y2="490" stroke="white" stroke-width="0.5"/><line x1="10" y1="250" x2="490" y2="250" stroke="white" stroke-width="0.5"/><polygon points="250,30 460,370 40,370" stroke="white" stroke-width="0.7" fill="none"/><polygon points="250,470 40,130 460,130" stroke="white" stroke-width="0.7" fill="none"/></svg>
            <div class="container"><div class="row">
                <div class="col-lg-7 col-md-7 col-12"><div class="hero__text">
                    <div class="hero-eyebrow"><span class="dot"></span>Our Foundation Story</div>
                    <h2>Founded on <span class="highlight">Resilience.</span> Built on Service.</h2>
                    <p>From a single mother's journey to a public charitable trust empowering women &amp; communities across the nation.</p>
                    <div class="hero-btns"><a href="#about" class="hero-btn-primary"><i class="fa fa-heart"></i> Discover More</a><a href="Donation.php" class="hero-btn-outline"><i class="fa fa-hand-o-right"></i> Donate Now</a></div>
                    <div class="hero-stats"><div class="hero-stat"><div class="num">2146<span>+</span></div><div class="lbl">Students</div></div><div class="hero-stat"><div class="num">15<span>+</span></div><div class="lbl">Years Exp.</div></div><div class="hero-stat"><div class="num">48<span>+</span></div><div class="lbl">Branches</div></div></div>
                </div></div>
                <div class="col-lg-5 col-md-5 col-12"><div class="hero-img-side"><div class="hero-img-circle" style="border-color:rgba(14,77,107,0.5);"><img src="img/35785973-8b86-4bd7-8680-b123f15b541b.png" alt="Yoga Symbol"></div></div></div>
            </div></div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="home-about spad" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 about-text-col">
                <div class="home__about__text">
                    <span class="about-label">Our Story</span>
                    <div class="section-title"><h2>Our Story in One Line</h2></div>
                    <div class="tagline">This is Anant — limitless potential.</div>
                    <p>From a single mother traveling across Mumbai by local trains to teach yoga… to a registered public charitable trust empowering women and communities.</p>
                    <p>What began as a personal journey of resilience has now evolved into <strong>Anant Yoga &amp; Spiritual Awakening Foundation</strong> — a movement dedicated to empowerment, dignity, and holistic transformation through yoga and spiritual awareness.</p>
                    <ul class="about-features">
                        <li><i class="fa fa-check"></i> Registered Public Charitable Trust</li>
                        <li><i class="fa fa-female"></i> Women &amp; Community Empowerment</li>
                        <li><i class="fa fa-leaf"></i> Holistic Yoga &amp; Spiritual Wellness</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-12 about-pic-col">
                <div class="home__about__pic">
                    <div class="large-item">
                        <img src="img/WhatsApp Image 2026-02-26 at 6.54.32 PM.jpeg" alt="Anant Yoga Foundation" onerror="this.style.display='none'">
                        <div class="about-badge"><span>15+</span>Years of Empowerment</div>
                    </div>
                    <div class="home__about__pic__right">
                        <div class="home__about__pic__item__inner">
                            <img src="img/about/about-1.jpg" alt="Community" onerror="this.style.display='none'">
                        </div>
                        <div class="home__about__pic__item__inner">
                            <img src="img/about/about-2.jpg" alt="Founder" onerror="this.style.display='none'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="chooseus spad">
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <span class="about-label" style="background:rgba(248,111,3,0.2);color:#ff9a3c;">Who We Are</span>
                <div class="chooseus__text" style="margin-top:16px;">
                    <h2>Anant Yoga &amp; Spiritual Awakening Foundation</h2>
                    <div class="section-divider"></div>
                    <p>AYSAF is a registered public charitable trust dedicated to transforming lives through yoga education, women empowerment, spiritual awareness, research, and community health outreach.</p>
                    <p>We believe yoga is not just physical exercise — it is a pathway to dignity, balance, and empowerment.</p>
                </div>
                <div class="counter-grid">
                    <div class="chooseus__item"><div class="chooseus__item__icon"><i class="fa fa-users fa-2x"></i></div><div class="chooseus__item__text"><h2 class="choose-counter" data-target="2146">0<span class="counter-plus">+</span></h2><p>Students</p></div></div>
                    <div class="chooseus__item"><div class="chooseus__item__icon"><i class="fa fa-trophy fa-2x"></i></div><div class="chooseus__item__text"><h2 class="choose-counter" data-target="15">0<span class="counter-plus">+</span></h2><p>Years Exp.</p></div></div>
                    <div class="chooseus__item"><div class="chooseus__item__icon"><i class="fa fa-map-marker fa-2x"></i></div><div class="chooseus__item__text"><h2 class="choose-counter" data-target="48">0<span class="counter-plus">+</span></h2><p>Branches</p></div></div>
                    <div class="chooseus__item"><div class="chooseus__item__icon"><i class="fa fa-star fa-2x"></i></div><div class="chooseus__item__text"><h2 class="choose-counter" data-target="234">0<span class="counter-plus">+</span></h2><p>Expert Staff</p></div></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12"><div class="chooseus__pic"><div class="glow-ring"></div><div class="img-wrap"><img src="img/35785973-8b86-4bd7-8680-b123f15b541b.png" alt="Yoga Symbol"></div></div></div>
        </div>
    </div>
</section>

<!-- IMPACT AREAS -->
<section class="upcoming-classes spad" id="impact">
    <div class="container">
        <div class="row"><div class="col-lg-12"><div class="section-title normal-title"><span class="section-tag">What We Do</span><h2>Our Impact Areas</h2><p>Empowering women. Promoting holistic wellness. Advancing research. Serving communities with compassion and purpose.</p></div></div></div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12"><div class="classes__item"><div class="classes__item__pic set-bg" data-setbg="img/classes/classes-1.jpg" style="background:linear-gradient(135deg,#f86f03,#d95f00);"><span>Empowerment</span></div><div class="classes__item__text"><p class="cat-label">Women Empowerment</p><h4>Skill-Based Yoga Training</h4><h6>Skill-based yoga training programs for widows, single mothers, and underprivileged women — creating sustainable livelihood opportunities.</h6><a href="#" class="card-link">Learn More <i class="fa fa-arrow-right"></i></a></div></div></div>
            <div class="col-lg-4 col-md-6 col-sm-12"><div class="classes__item"><div class="classes__item__pic set-bg" data-setbg="img/classes/classes-2.jpg" style="background:linear-gradient(135deg,#533483,#1a1a2e);"><span>Wellness</span></div><div class="classes__item__text"><p class="cat-label">Holistic Health</p><h4>Yoga Teacher Training</h4><h6>Primary and Advanced Yoga Teacher Training programs to build a new generation of certified and responsible instructors.</h6><a href="teacher.php" class="card-link">Learn More <i class="fa fa-arrow-right"></i></a></div></div></div>
            <div class="col-lg-4 col-md-6 col-sm-12"><div class="classes__item"><div class="classes__item__pic set-bg" data-setbg="img/classes/classes-3.jpg" style="background:linear-gradient(135deg,#0f3460,#533483);"><span>Community</span></div><div class="classes__item__text"><p class="cat-label">Research &amp; Outreach</p><h4>Yoga Research Centre</h4><h6>Upcoming Yoga &amp; Spiritual Research Centre and free/subsidized yoga classes for children and underserved communities.</h6><a href="Research.php" class="card-link">Learn More <i class="fa fa-arrow-right"></i></a></div></div></div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL -->
<section class="testimonial">
    <div class="container position-relative" style="z-index:2;">
        <div class="testi-header"><span class="section-tag">Testimonials</span><h2>What Our Community Says</h2><p>Real stories of transformation and empowerment from our students and families.</p></div>
        <div class="row justify-content-center"><div class="col-lg-10">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item"><div class="testimonial__card"><div class="big-quote">"</div><span class="testi-stars">★★★★★</span><i class="fa fa-quote-left quote-icon"></i><p>"Anant Foundation gave me a new identity. As a single mother, I never imagined I could become a certified yoga instructor. Today, I earn with dignity and confidence."</p><div class="testi-divider"></div><div class="client-info"><img src="img/testimonial/testimonial-1.png" alt="Meena Sharma" onerror="this.src='https://ui-avatars.com/api/?name=Meena+Sharma&background=f86f03&color=fff&size=100'"><div><h5>Meena Sharma</h5><span>Yoga Trainer &amp; Beneficiary</span></div></div></div></div>
                <div class="testimonial__item"><div class="testimonial__card"><div class="big-quote">"</div><span class="testi-stars">★★★★★</span><i class="fa fa-quote-left quote-icon"></i><p>"The holistic training program not only improved my physical health but also transformed my mental strength and spiritual awareness. A life-changing experience."</p><div class="testi-divider"></div><div class="client-info"><img src="img/testimonial/testimonial-2.png" alt="Ravi Patel" onerror="this.src='https://ui-avatars.com/api/?name=Ravi+Patel&background=533483&color=fff&size=100'"><div><h5>Ravi Patel</h5><span>Yoga Teacher Training Student</span></div></div></div></div>
                <div class="testimonial__item"><div class="testimonial__card"><div class="big-quote">"</div><span class="testi-stars">★★★★★</span><i class="fa fa-quote-left quote-icon"></i><p>"Through the community outreach program, my children received free yoga sessions that helped improve their focus and discipline. I am deeply grateful."</p><div class="testi-divider"></div><div class="client-info"><img src="img/testimonial/testimonial-3.png" alt="Sunita Verma" onerror="this.src='https://ui-avatars.com/api/?name=Sunita+Verma&background=0f3460&color=fff&size=100'"><div><h5>Sunita Verma</h5><span>Parent &amp; Community Member</span></div></div></div></div>
            </div>
            <div class="testi-nav"><button class="testi-prev"><i class="fa fa-angle-left"></i></button><button class="testi-next"><i class="fa fa-angle-right"></i></button></div>
        </div></div>
    </div>
</section>

<button id="scrollTop" title="Back to Top"><i class="fa fa-angle-up"></i></button>

<!-- FOOTER -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="footer__about">
                    <a href="#" class="footer-logo-link">
                        <img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/fff/f86f03?text=Anant+Yoga'">
                        <div class="footer-logo-title">ANANT YOGA &amp; SPIRITUAL<br>AWAKENING FOUNDATION</div>
                    </a>
                    <p>Anant Yoga &amp; Spiritual Awakening Foundation — empowering lives through yoga, spiritual wellness and community service.</p>
                    <ul><li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li><li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li><li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li></ul>
                    <form class="subscribe-form" onsubmit="return false;"><input type="email" placeholder="Your Email Address"><button type="submit">Subscribe</button></form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-3 col-6 mb-5">
                <div class="footer__widget"><h5>Quick Links</h5><ul><li><a href="#">Home</a></li><li><a href="about-us.php">About</a></li><li><a href="spiritulactivities.php">YOGA &amp; SPIRITUAL</a></li><li><a href="gallery.php">Gallery</a></li><li><a href="contact.php">Contact</a></li><li><a href="Donation.php">Donation</a></li></ul></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <div class="footer__widget"><h5>Contact Us</h5>
                    <ul class="footer-address"><li><i class="fa fa-phone"></i><span>8149751780 / 9607511939</span></li><li><i class="fa fa-envelope"></i><span>anantyogaclasses@gmail.com</span></li><li><i class="fa fa-map-marker"></i><span>Mumbai, Maharashtra, India</span></li></ul>
                    <div class="footer-social"><a href="https://www.facebook.com/share/1EeQMtXNpX/"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/anantyoga.class?igsh=MW95YXVwcHhlN2ZjNA=="><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="https://www.youtube.com/@anantyogaclasses1292"><i class="fa fa-youtube-play"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright"><div class="container"><div class="row"><div class="col-12"><div class="footer__copyright__text"><p>Copyright &copy; <span id="year"></span> Anant Yoga &amp; Spiritual Awakening Foundation. All rights reserved. Designed with <i class="fa fa-heart" style="color:#f86f03;"></i> for a Better World.</p></div></div></div></div></div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(function(){
    document.getElementById("year").textContent = new Date().getFullYear();
    $(".set-bg").each(function(){var bg=$(this).data("setbg");if(bg)$(this).css("background-image","url("+bg+")");});
    $(".canvas__open").on("click",function(){$(".offcanvas-menu").addClass("active");$(".offcanvas-menu-overlay").addClass("active");$("body").css("overflow","hidden");});
    $(".offcanvas-menu-overlay,.offcanvas__close").on("click",function(){$(".offcanvas-menu").removeClass("active");$(".offcanvas-menu-overlay").removeClass("active");$("body").css("overflow","auto");});
    $(".hero__sliders").owlCarousel({items:1,loop:true,autoplay:true,autoplayTimeout:6000,smartSpeed:1000,animateOut:"fadeOut",animateIn:"fadeIn",dots:true,nav:true,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']});
    var $tSlider=$(".testimonial__slider").owlCarousel({items:1,loop:true,autoplay:true,autoplayTimeout:5000,smartSpeed:800,dots:true,nav:false,margin:20});
    $(".testi-prev").on("click",function(){$tSlider.trigger("prev.owl.carousel");});
    $(".testi-next").on("click",function(){$tSlider.trigger("next.owl.carousel");});
    var header=$(".header__nav");var topBar=$(".header__top");
    $(window).on("scroll",function(){if($(this).scrollTop()>(topBar.outerHeight()||50)){header.addClass("header__nav--fixed");}else{header.removeClass("header__nav--fixed");}});
    var counted=false;
    function runCounter(){if(counted)return;var el=$(".choose-counter").first();if(!el.length)return;if($(window).scrollTop()+$(window).height()>el.offset().top+50){counted=true;$(".choose-counter").each(function(){var $t=$(this);var $plus=$t.find('.counter-plus');var target=parseInt($t.data("target"));$({count:0}).animate({count:target},{duration:2000,easing:"swing",step:function(){$t.text(Math.ceil(this.count));$t.append($plus);},complete:function(){$t.text(target);$t.append($plus);}});});}}
    $(window).on("scroll",runCounter);runCounter();
    var $sb=$("#scrollTop");$(window).on("scroll",function(){$(this).scrollTop()>300?$sb.addClass("show"):$sb.removeClass("show");});$sb.on("click",function(){$("html,body").animate({scrollTop:0},600);});
    $("a[href^='#']").on("click",function(e){var target=$(this.getAttribute("href"));if(target.length){e.preventDefault();$("html,body").animate({scrollTop:target.offset().top-80},800);if($(".offcanvas-menu").hasClass("active")){$(".offcanvas__close").trigger("click");}}});
});
</script>
</body>
</html>