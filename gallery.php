<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Anant Yoga & Spiritual Awakening Foundation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

<style>
:root {
    --primary: #f86f03;
    --primary-light: #fff0e5;
    --dark: #0f172a;
    --dark-blue: #1a1a2e;
    --text-muted: #64748b;
    --bg-section: #f8fafc;
    --cream: #fdf6ec;
    --gold: #c9a84c;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'DM Sans',sans-serif;color:#334155;background:#fff;overflow-x:hidden;}
a{text-decoration:none;color:inherit;transition:all 0.3s;}
a:hover{color:var(--primary);text-decoration:none;}
img{max-width:100%;height:auto;}

/* ===== HEADER ===== */
.header{background:#fff;box-shadow:0 2px 15px rgba(0,0,0,0.05);position:relative;z-index:999;}
.header__top{background:#1a1a2e;padding:10px 0;}
.header__logo{padding:10px 0;}
.header__logo img{max-height:73px;width:auto;border-radius:4px;display:block;}
.header__top__widget{display:flex;align-items:center;justify-content:flex-end;gap:20px;height:100%;}
.header__top__widget ul{list-style:none;display:flex;gap:25px;margin:0;padding:0;}
.header__top__widget ul li{color:#ddd;font-size:13px;letter-spacing:.5px;display:flex;align-items:center;}
.header__top__widget ul li i{color:var(--primary);margin-right:8px;font-size:16px;}

/* ✅ ONLY CHANGE: Mobile logo name - Playfair Display font + mota font size */
.mobile-logo-name {
    font-family: 'Playfair Display', serif;
    color: #1a1a2e;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    line-height: 1.35;
        margin-left: 10px;

}
@media(max-width:991px){
    .mobile-logo-name { display: block !important; font-size: 22px; }
    .header__logo { gap: 10px; }
}
@media(max-width:575px){ .mobile-logo-name { font-size: 19px; letter-spacing: 0.4px; } }
@media(max-width:480px){ .mobile-logo-name { font-size: 14px; letter-spacing: 0.3px; } }
@media(max-width:360px){ .mobile-logo-name { font-size: 11px; } }

/* Foundation name — desktop header top bar */
.header__top__name{
    color:var(--primary);
    font-size:12px;
    font-weight:800;
    letter-spacing:1px;
    text-transform:uppercase;
    line-height:1.5;
    white-space:nowrap;
}

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
.offcanvas__social{display:flex;gap:12px;margin-top:30px;}
.offcanvas__social a{width:38px;height:38px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;}
@media(max-width:991px){.header__top{display:none;}.header__menu,.header__social{display:none;}.canvas__open{display:flex!important;}}

/* ===== HERO - GALLERY ===== */
.gallery-hero {
    position: relative;
    min-height: 480px;
    background: #060d1a;
    display: flex;
    align-items: center;
    overflow: hidden;
}
.gallery-hero__bg {
    position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 70% 80% at 80% 40%, rgba(248,111,3,0.16) 0%, transparent 60%),
        radial-gradient(ellipse 50% 60% at 10% 70%, rgba(201,168,76,0.08) 0%, transparent 50%);
}
.gallery-hero__grid {
    position: absolute; inset: 0;
    background-image: linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),
                      linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);
    background-size: 60px 60px;
}
.gallery-hero__images {
    position: absolute;
    right: 0; top: 0;
    width: 55%;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 4px;
    overflow: hidden;
    opacity: 0.3;
}
.gallery-hero__images img {
    width: 100%; height: 100%;
    object-fit: cover;
    filter: saturate(0.5);
}
.gallery-hero__images::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, #060d1a 0%, rgba(6,13,26,0.5) 40%, transparent 100%);
    z-index: 1;
}
.gallery-hero__content { position: relative; z-index: 2; }
.gallery-hero__eyebrow {
    display: inline-flex; align-items: center; gap: 12px;
    background: rgba(248,111,3,0.1); border: 1px solid rgba(248,111,3,0.3);
    padding: 8px 20px; border-radius: 50px; margin-bottom: 25px;
}
.gallery-hero__eyebrow::before { content:''; width:6px; height:6px; background:var(--primary); border-radius:50%; animation:pulse 2s infinite; }
@keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.5;transform:scale(1.5);}}
.gallery-hero__eyebrow span { color:var(--primary); font-size:12px; font-weight:700; letter-spacing:3px; text-transform:uppercase; }
.gallery-hero h1 {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(48px, 7vw, 85px);
    font-weight: 300; color: #fff; line-height: 1.05;
    letter-spacing: -1px; margin-bottom: 20px;
}
.gallery-hero h1 em { color: var(--primary); font-style: italic; }
.gallery-hero p { color: rgba(255,255,255,0.55); font-size: 17px; max-width: 480px; line-height: 1.8; }
.hero-count-row { display: flex; gap: 40px; margin-top: 35px; }
.hc-item h3 { font-size: 38px; font-weight: 800; color: var(--primary); font-family:'Cormorant Garamond',serif; margin: 0; line-height: 1; }
.hc-item p { color: rgba(255,255,255,0.4); font-size: 12px; letter-spacing: 1px; text-transform: uppercase; margin: 5px 0 0; }
.hc-div { width: 1px; background: rgba(255,255,255,0.1); }

/* ===== FILTER NAV ===== */
.filter-section {
    background: var(--cream);
    padding: 40px 0;
    border-bottom: 1px solid rgba(248,111,3,0.1);
    position: sticky;
    top: 0;
    z-index: 50;
}
.filter-wrap { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 10px; }
.filter-btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 10px 22px; border-radius: 50px;
    background: #fff; border: 1px solid rgba(248,111,3,0.15);
    color: #64748b; font-weight: 600; font-size: 14px;
    cursor: pointer; transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
    white-space: nowrap;
}
.filter-btn i { font-size: 16px; }
.filter-btn:hover { border-color: var(--primary); color: var(--primary); transform: translateY(-2px); box-shadow: 0 8px 20px rgba(248,111,3,0.15); }
.filter-btn.active { background: var(--primary); color: #fff; border-color: var(--primary); box-shadow: 0 8px 25px rgba(248,111,3,0.35); transform: translateY(-2px); }

/* ===== GALLERY GRID ===== */
.gallery-section { padding: 80px 0 100px; background: #fff; }
.mosaic-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: 80px;
    gap: 16px;
}
.mosaic-item {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    cursor: pointer;
}
.mi-1 { grid-column: span 5; grid-row: span 4; }
.mi-2 { grid-column: span 4; grid-row: span 3; }
.mi-3 { grid-column: span 3; grid-row: span 3; }
.mi-4 { grid-column: span 4; grid-row: span 3; }
.mi-5 { grid-column: span 3; grid-row: span 4; }
.mi-6 { grid-column: span 5; grid-row: span 3; }
.mi-7 { grid-column: span 4; grid-row: span 3; }
.mosaic-item img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.7s cubic-bezier(0.4,0,0.2,1), filter 0.5s;
    filter: brightness(0.92);
}
.mosaic-item:hover img { transform: scale(1.1); filter: brightness(1); }
.mosaic-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(6,13,26,0.92) 0%, rgba(6,13,26,0.3) 40%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 28px;
}
.mosaic-item:hover .mosaic-overlay { opacity: 1; }
.mosaic-tag {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--primary); color: #fff;
    padding: 4px 14px; border-radius: 30px;
    font-size: 11px; font-weight: 700; letter-spacing: 1px;
    text-transform: uppercase; margin-bottom: 12px;
    width: fit-content;
}
.mosaic-overlay h4 { font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: #fff; margin: 0 0 6px; }
.mosaic-overlay p { font-size: 13px; color: rgba(255,255,255,0.6); margin: 0; }
.mosaic-badge {
    position: absolute; top: 16px; left: 16px;
    background: rgba(248,111,3,0.9);
    color: #fff; padding: 4px 14px; border-radius: 30px;
    font-size: 11px; font-weight: 700; letter-spacing: 1px;
    text-transform: uppercase; backdrop-filter: blur(4px);
    transition: opacity 0.3s;
}
.mosaic-item:hover .mosaic-badge { opacity: 0; }
.mosaic-zoom {
    position: absolute; top: 50%; left: 50%;
    transform: translate(-50%,-50%) scale(0);
    width: 56px; height: 56px;
    background: rgba(255,255,255,0.15); backdrop-filter: blur(8px);
    border: 2px solid rgba(255,255,255,0.4);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 22px;
    transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1);
}
.mosaic-item:hover .mosaic-zoom { transform: translate(-50%,-50%) scale(1); }

/* ===== FEATURE STRIP ===== */
.feature-strip {
    margin: 60px 0 0;
    background: var(--dark);
    border-radius: 24px;
    padding: 40px 50px;
    display: flex; align-items: center; justify-content: space-between; gap: 20px;
}
.fs-item { display: flex; align-items: center; gap: 15px; }
.fs-icon { width: 50px; height: 50px; border-radius: 14px; background: rgba(248,111,3,0.15); display: flex; align-items: center; justify-content: center; }
.fs-icon i { font-size: 24px; color: var(--primary); }
.fs-item h5 { color: #fff; font-size: 16px; font-weight: 700; margin: 0; }
.fs-item p { color: rgba(255,255,255,0.4); font-size: 13px; margin: 0; }
.fs-div { width: 1px; height: 40px; background: rgba(255,255,255,0.1); }

/* ===== VIDEO SECTION ===== */
.video-section {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.video-section::before {
    content: 'WATCH';
    position: absolute;
    bottom: -40px; right: -20px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 200px; font-weight: 800;
    color: rgba(248,111,3,0.04);
    pointer-events: none; line-height: 1;
}
.vs-eyebrow { display:inline-flex; align-items:center; gap:10px; color:var(--primary); font-size:12px; font-weight:800; letter-spacing:3px; text-transform:uppercase; margin-bottom:15px; }
.vs-eyebrow::before { content:''; width:40px; height:2px; background:var(--primary); }
.vs-heading { font-family:'Cormorant Garamond',serif; font-size:clamp(38px,4vw,58px); font-weight:600; color:var(--dark); line-height:1.1; margin-bottom:40px; }
.vs-heading em { color:var(--primary); font-style:italic; }
.video-grid { display:grid; grid-template-columns:1fr 1fr; gap:24px; }
.video-card { border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.1); position: relative; background: var(--dark); }
.video-card iframe { width:100%; height:280px; display:block; border:none; }
.video-card-label {
    position: absolute; top: 16px; left: 16px;
    background: rgba(248,111,3,0.9);
    color: #fff; padding: 4px 14px; border-radius: 30px;
    font-size: 11px; font-weight: 700; letter-spacing: 1px;
    text-transform: uppercase; z-index: 2;
}

/* ===== LIGHTBOX ===== */
.lightbox-overlay {
    position: fixed; inset: 0;
    background: rgba(6,13,26,0.97);
    z-index: 9999;
    display: flex; align-items: center; justify-content: center;
    opacity: 0; visibility: hidden;
    transition: all 0.4s;
}
.lightbox-overlay.active { opacity:1; visibility:visible; }
.lightbox-inner { position: relative; max-width: 90vw; max-height: 85vh; }
.lightbox-inner img { max-width: 90vw; max-height: 80vh; border-radius: 16px; box-shadow: 0 30px 80px rgba(0,0,0,0.8); object-fit: contain; }
.lightbox-close {
    position: absolute; top: -20px; right: -20px;
    width: 44px; height: 44px; border-radius: 50%;
    background: var(--primary); color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; cursor: pointer; transition: 0.3s;
}
.lightbox-close:hover { background: #fff; color: var(--dark); }
.lightbox-caption { text-align: center; color: rgba(255,255,255,0.6); font-size: 14px; margin-top: 16px; }
.lightbox-nav {
    position: absolute; top: 50%; transform: translateY(-50%);
    width: 48px; height: 48px; border-radius: 50%;
    background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
    color: #fff; display: flex; align-items: center; justify-content: center;
    font-size: 20px; cursor: pointer; transition: 0.3s; backdrop-filter: blur(4px);
}
.lightbox-nav:hover { background: var(--primary); border-color: var(--primary); }
.lightbox-prev { right: calc(100% + 20px); }
.lightbox-next { left: calc(100% + 20px); }

/* ===== FOOTER ===== */
.footer{background:#111827;padding:70px 0 0;color:#9ca3af;font-family:'DM Sans',sans-serif;}
.footer__brand {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
}
.footer__brand img {
    max-height: 75px;
    border-radius: 6px;
    background: #fff;
    padding: 5px;
    flex-shrink: 0;
}
.footer__brand__name {
    color: #fff;
    font-size: 16px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    line-height: 1.4;
}
.footer__about p{font-size:14px;line-height:1.8;margin-bottom:20px;}
.footer__about ul{list-style:none;padding:0;margin-bottom:25px;}
.footer__about ul li{font-size:14px;padding:6px 0;}
.footer__about ul li i{color:var(--primary);margin-right:8px;font-size:16px;}
.subscribe-form{display:flex;background:#1f2937;border-radius:30px;overflow:hidden;padding:4px;}
.subscribe-form input{flex:1;padding:12px 20px;border:none;background:transparent;color:#fff;font-size:14px;outline:none;}
.subscribe-form input::placeholder{color:#6b7280;}
.subscribe-form button{background:var(--primary);color:#fff;border:none;padding:0 25px;border-radius:30px;cursor:pointer;transition:.3s;font-weight:600;}
.subscribe-form button:hover{background:#fff;color:var(--primary);}
.footer__widget{margin-bottom:30px;}
.footer__widget h5{color:#fff;font-size:18px;font-weight:700;margin-bottom:25px;position:relative;padding-bottom:12px;}
.footer__widget h5::after{content:'';position:absolute;left:0;bottom:0;width:40px;height:3px;background:var(--primary);}
.footer__widget ul{list-style:none;padding:0;}
.footer__widget ul li{padding:8px 0;}
.footer__widget ul li a{color:#9ca3af;font-size:14px;transition:.3s;display:inline-block;}
.footer__widget ul li a:hover{color:var(--primary);transform:translateX(5px);}
.footer-address{list-style:none;padding:0;}
.footer-address li{font-size:14px;display:flex;gap:12px;align-items:flex-start;padding:8px 0;line-height:1.6;}
.footer-address li i{color:var(--primary);margin-top:4px;font-size:16px;}
.footer-social{display:flex;gap:10px;margin-top:20px;}
.footer-social a{width:38px;height:38px;border-radius:50%;background:#1f2937;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.footer-social a:hover{background:var(--primary);transform:translateY(-3px);}
.footer__copyright{border-top:1px solid rgba(255,255,255,0.1);padding:25px 0;margin-top:50px;}
.footer__copyright__text{text-align:center;}
.footer__copyright__text p{margin:0;font-size:14px;}

/* ===== REVEAL ANIMATION ===== */
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.4,0,0.2,1);}
.reveal.visible{opacity:1;transform:translateY(0);}
.reveal-delay-1{transition-delay:0.1s;}
.reveal-delay-2{transition-delay:0.2s;}
.reveal-delay-3{transition-delay:0.3s;}

/* ===== RESPONSIVE ===== */
@media(max-width:1199px){
    .mi-1{grid-column:span 6;} .mi-2{grid-column:span 6;} .mi-3{grid-column:span 6;}
    .mi-4{grid-column:span 6;} .mi-5{grid-column:span 6;} .mi-6{grid-column:span 6;} .mi-7{grid-column:span 6;}
}
@media(max-width:991px){
    .mosaic-grid{display:grid;grid-template-columns:1fr 1fr;grid-auto-rows:220px;}
    .mi-1,.mi-2,.mi-3,.mi-4,.mi-5,.mi-6,.mi-7{grid-column:span 1;grid-row:span 1;}
    .video-grid{grid-template-columns:1fr;}
    .feature-strip{flex-wrap:wrap;gap:20px;padding:30px;}
    .fs-div{display:none;}
    .gallery-hero__images{display:none;}
}
@media(max-width:767px){
    .mosaic-grid{grid-template-columns:1fr;grid-auto-rows:250px;}
    .filter-wrap{gap:8px;}
    .filter-btn{font-size:12px;padding:8px 16px;}
    .hero-count-row{gap:20px;}
    .hc-item h3{font-size:28px;}
}
</style>
</head>
<body>

<!-- Offcanvas -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu">
    <div class="offcanvas__close"><i class="fa fa-times"></i></div>
    <div class="offcanvas__logo"><a href="index.php"><img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/200x60/f86f03/fff?text=Anant+Yoga'"></a></div>
    <div class="offcanvas__widget"><ul>
        <li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li>
        <li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li>
        <li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li>
    </ul></div>
    <div class="offcanvas__nav"><ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about-us.php">About</a></li>
        <li><a href="spiritulactivities.php">YOGA SPIRITUAL ACTIVITES</a></li>
        <li class="active"><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Donation.php">Donation</a></li>
    </ul></div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
</div>

<!-- HEADER -->
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
                    <div class="header__logo d-flex align-items-center gap-2">
                        <a href="index.php"><img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/250x70/fff/f86f03?text=Anant+Yoga'"></a>
                        <!-- Mobile only: foundation name next to logo -->
                        <span class="mobile-logo-name">
                            ANANT YOGA &amp; SPIRITUAL AWAKENING FOUNDATION
                        </span>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="header__menu">
                        <ul class="justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="spiritulactivities.php">
                                ACTIVITES</a></li>
                            <li class="active"><a href="gallery.php">Gallery</a></li>
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
<section class="gallery-hero">
    <div class="gallery-hero__bg"></div>
    <div class="gallery-hero__grid"></div>
    <div class="gallery-hero__images">
        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=400&q=70" alt="">
        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=400&q=70" alt="">
        <img src="https://images.unsplash.com/photo-1528715471579-d1bcf0ba5e83?auto=format&fit=crop&w=400&q=70" alt="">
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="gallery-hero__content">
            <div class="gallery-hero__eyebrow"><span>Moments That Matter</span></div>
            <h1>Our Journey<br><em>in Pictures</em></h1>
            <p>From sunrise classes in Mumbai to rural wellness camps — every photo tells a story of transformation, resilience, and community.</p>
            <div class="hero-count-row">
                <div class="hc-item"><h3>200+</h3><p>Photos</p></div>
                <div class="hc-div"></div>
                <div class="hc-item"><h3>15+</h3><p>Events</p></div>
                <div class="hc-div"></div>
                <div class="hc-item"><h3>6</h3><p>Categories</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FILTER ===== -->
<div class="filter-section">
    <div class="container">
        <div class="filter-wrap">
            <button class="filter-btn active" data-filter="all"><i class="ri-grid-fill"></i> All</button>
            <button class="filter-btn" data-filter="yoga"><i class="ri-mental-health-line"></i> Yoga Classes</button>
            <button class="filter-btn" data-filter="camps"><i class="ri-community-line"></i> Community Camps</button>
            <button class="filter-btn" data-filter="women"><i class="ri-women-line"></i> Women Empowerment</button>
            <button class="filter-btn" data-filter="workshops"><i class="ri-presentation-line"></i> Workshops</button>
            <button class="filter-btn" data-filter="certifications"><i class="ri-award-line"></i> Certifications</button>
        </div>
    </div>
</div>

<!-- ===== GALLERY ===== -->
<section class="gallery-section">
    <div class="container">
        <div class="mosaic-grid reveal" id="galleryGrid">

            <div class="mosaic-item mi-1" data-category="yoga">
                <img src="img/gallery/WhatsApp Image 2026-03-02 at 1.40.48 PM.jpeg" alt="Yoga Class">
                <span class="mosaic-badge">Transformation</span>
                <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
                <div class="mosaic-overlay">
                    <span class="mosaic-tag"><i class="ri-mental-health-line"></i> Yoga Class</span>
                    <h4>Morning Asanas</h4>
                    <p>Before & After Transformation Story</p>
                </div>
            </div>

            <div class="mosaic-item mi-2" data-category="camps">
                <img src="img/gallery/WhatsApp Image 2026-03-02 at 1.43.06 PM.jpeg" alt="Community Camp">
                <span class="mosaic-badge">Event</span>
                <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
                <div class="mosaic-overlay">
                    <span class="mosaic-tag"><i class="ri-community-line"></i> Camps</span>
                    <h4>Rural Health Camp</h4>
                    <p>Community Outreach in Naigaon East</p>
                </div>
            </div>

          <div class="mosaic-item mi-3" data-category="women">
    <!-- 1st Video (તમારો આપેલો વિડીયો) -->
    <video src="img/gallery/WhatsApp Video 2026-03-02 at 1.40.50 PM.mp4" autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
    
    <span class="mosaic-badge">Testimonial</span>
    <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
    <div class="mosaic-overlay">
        <span class="mosaic-tag"><i class="ri-women-line"></i> Women</span>
        <h4>Skill Development</h4>
        <p>Student Success Story</p>
    </div>
</div>

<div class="mosaic-item mi-4" data-category="workshops">
    <!-- 2nd Video (અહીં તમારા બીજા વિડીયોનું નામ/લિંક નાખો) -->
    <video src="img/gallery/WhatsApp Video 2026-03-02 at 1.40.50 PM (1).mp4" autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
    
    <span class="mosaic-badge">Workshop</span>
    <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
    <div class="mosaic-overlay">
        <span class="mosaic-tag"><i class="ri-presentation-line"></i> Workshop</span>
        <h4>Spiritual Wellness Seminar</h4>
        <p>Annual Workshop Highlight</p>
    </div>
</div>


            <div class="mosaic-item mi-5" data-category="certifications">
                 <!-- 2nd Video (અહીં તમારા બીજા વિડીયોનું નામ/લિંક નાખો) -->
    <video src="img/gallery/WhatsApp Video 2026-03-02 at 2.37.30 PM.mp4
" autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <span class="mosaic-badge">Ceremony</span>
                <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
                <div class="mosaic-overlay">
                    <span class="mosaic-tag"><i class="ri-award-line"></i> Certification</span>
                    <h4>Batch 2025 Graduation</h4>
                    <p>Yoga Teacher Training</p>
                </div>
            </div>

            <div class="mosaic-item mi-6" data-category="yoga">
                   <!-- 2nd Video (અહીં તમારા બીજા વિડીયોનું નામ/લિંક નાખો) -->
    <video src="img/gallery/WhatsApp Video 2026-03-02 at 2.38.36 PM.mp4" autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <span class="mosaic-badge">Retreat</span>
                <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
                <div class="mosaic-overlay">
                    <span class="mosaic-tag"><i class="ri-mental-health-line"></i> Yoga</span>
                    <h4>Meditation Retreat</h4>
                    <p>Participant Testimonial Photo</p>
                </div>
            </div>

            <div class="mosaic-item mi-7" data-category="camps">
                <img src="img/gallery/WhatsApp Image 2026-03-02 at 1.43.06 PM (1).jpeg" alt="Camp">
                <span class="mosaic-badge">Awareness</span>
                <div class="mosaic-zoom"><i class="ri-zoom-in-line"></i></div>
                <div class="mosaic-overlay">
                    <span class="mosaic-tag"><i class="ri-community-line"></i> Camps</span>
                    <h4>Awareness Drive 2024</h4>
                    <p>Free Community Wellness Sessions</p>
                </div>
            </div>

        </div>

        <!-- Feature Strip -->
        <div class="feature-strip reveal reveal-delay-2">
            <div class="fs-item">
                <div class="fs-icon"><i class="ri-image-2-line"></i></div>
                <div><h5>200+ Photos</h5><p>Archived Moments</p></div>
            </div>
            <div class="fs-div"></div>
            <div class="fs-item">
                <div class="fs-icon"><i class="ri-vidicon-line"></i></div>
                <div><h5>Video Stories</h5><p>YouTube Highlights</p></div>
            </div>
            <div class="fs-div"></div>
            <div class="fs-item">
                <div class="fs-icon"><i class="ri-calendar-event-line"></i></div>
                <div><h5>15+ Events</h5><p>Documented & Shared</p></div>
            </div>
            <div class="fs-div"></div>
            <div class="fs-item">
                <div class="fs-icon"><i class="ri-star-line"></i></div>
                <div><h5>500+ Lives</h5><p>Transformed</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== VIDEO SECTION ===== -->
<section class="video-section">
    <div class="container" style="position:relative;z-index:1;">
        <div class="row align-items-end mb-5">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="vs-eyebrow">Video Highlights</div>
                    <h2 class="vs-heading">See Our <em>Work</em><br>in Action</h2>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <p class="reveal reveal-delay-2" style="color:var(--text-muted);font-size:17px;line-height:1.8;">Watch glimpses of our latest yoga classes, community camps, and transformational moments that define our mission.</p>
            </div>
        </div>
        <div class="video-grid reveal">
            <div class="video-card">
                <span class="video-card-label">Yoga Class</span>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wphTJNuSaX8?si=Crrxx3foJwYls6dG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <span class="video-card-label">Wellness Camp</span>
               <iframe width="560" height="315" src="https://www.youtube.com/embed/VH3O2lo5Vwo?si=YqiG9-Kw_SvbnU8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- ===== LIGHTBOX ===== -->
<div class="lightbox-overlay" id="lightbox">
    <div class="lightbox-inner">
        <div class="lightbox-close" id="lbClose"><i class="ri-close-line"></i></div>
        <div class="lightbox-nav lightbox-prev" id="lbPrev"><i class="ri-arrow-left-s-line"></i></div>
        <div class="lightbox-nav lightbox-next" id="lbNext"><i class="ri-arrow-right-s-line"></i></div>
        <img src="" alt="" id="lbImg">
        <div class="lightbox-caption" id="lbCaption"></div>
    </div>
</div>

<!-- FOOTER -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="footer__about">
                    <div class="footer__brand">
                        <a href="#"><img src="img/yogalogo.jpeg" alt="Anant Yoga" onerror="this.src='https://via.placeholder.com/65x65/fff/f86f03?text=AY'"></a>
                        <div class="footer__brand__name">
                            Anant Yoga &amp; Spiritual Awakening Foundation
                        </div>
                    </div>
                    <p>Anant Yoga &amp; Spiritual Awakening Foundation — empowering lives through yoga, spiritual wellness and community service.</p>
                    <ul>
                        <li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li>
                        <li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li>
                        <li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li>
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
                        <li><i class="fa fa-phone"></i> 8149751780 / 9607511939</li>
                        <li><i class="fa fa-envelope"></i> anantyogaclasses@gmail.com</li>
                        <li><i class="fa fa-clock-o"></i> MON - FRI: 9:00 - 19:00</li>
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
        if($(this).scrollTop() > topH){ $nav.addClass('header__nav--fixed'); }
        else { $nav.removeClass('header__nav--fixed'); }
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
        $('.reveal').each(function(){
            if(st > $(this).offset().top + 60){ $(this).addClass('visible'); }
        });
    }
    $(window).on('scroll', revealOnScroll);
    revealOnScroll();

    $('.filter-btn').on('click', function(){
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        var filter = $(this).data('filter');
        if(filter === 'all'){
            $('.mosaic-item').fadeIn(400);
        } else {
            $('.mosaic-item').each(function(){
                if($(this).data('category') === filter){ $(this).fadeIn(400); }
                else { $(this).fadeOut(300); }
            });
        }
    });

    $('.mosaic-item').on('click', function(){
        var allVisible = [];
        $('.mosaic-item:visible').each(function(){
            allVisible.push({
                src: $(this).find('img').attr('src'),
                caption: $(this).find('h4').text()
            });
        });
        if(allVisible.length === 0) return;
        var currentIdx = $(this).index('.mosaic-item:visible');
        if(currentIdx < 0) currentIdx = 0;
        openLightbox(allVisible, currentIdx);
    });

    function openLightbox(imgs, idx){
        var currentIdx = idx;
        $('#lbImg').attr('src', imgs[currentIdx].src);
        $('#lbCaption').text(imgs[currentIdx].caption);
        $('#lightbox').addClass('active');
        $('body').css('overflow','hidden');
        $('#lbClose').off('click').on('click', function(){
            $('#lightbox').removeClass('active');
            $('body').css('overflow','auto');
        });
        $('#lbPrev').off('click').on('click', function(){
            currentIdx = (currentIdx - 1 + imgs.length) % imgs.length;
            $('#lbImg').attr('src', imgs[currentIdx].src);
            $('#lbCaption').text(imgs[currentIdx].caption);
        });
        $('#lbNext').off('click').on('click', function(){
            currentIdx = (currentIdx + 1) % imgs.length;
            $('#lbImg').attr('src', imgs[currentIdx].src);
            $('#lbCaption').text(imgs[currentIdx].caption);
        });
        $(document).off('keydown.lb').on('keydown.lb', function(e){
            if(e.key === 'Escape'){ $('#lightbox').removeClass('active'); $('body').css('overflow','auto'); }
            if(e.key === 'ArrowLeft') $('#lbPrev').trigger('click');
            if(e.key === 'ArrowRight') $('#lbNext').trigger('click');
        });
    }
});
</script>
</body>
</html>