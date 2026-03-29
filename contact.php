<?php
// Handle form submission
$success_message = '';
$error_message = '';

// Show success after redirect (PRG pattern - no re-submit on refresh)
if (isset($_GET['sent']) && $_GET['sent'] == '1') {
    $sent_name = htmlspecialchars($_GET['name'] ?? 'Friend');
    $success_message = "Thank you, $sent_name! Your message has been sent successfully. We will respond within 24 hours.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && $email && $message) {
        $to           = 'anantyogaclasses@gmail.com';
        $mail_subject = 'New Contact Form: ' . ($subject ?: 'General Inquiry') . ' - from ' . $name;
        $mail_body    = "
===========================================
NEW CONTACT FORM SUBMISSION
===========================================
Name    : $name
Email   : $email
Phone   : $phone
Subject : $subject

Message :
-----------
$message
-----------
Sent from: Anant Yoga & Spiritual Awakening Foundation Website
===========================================";

        $headers  = "From: website@anantyoga.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        if (mail($to, $mail_subject, $mail_body, $headers)) {
            header("Location: contact.php?sent=1&name=" . urlencode($name));
            exit();
        } else {
            $error_message = "Something went wrong. Please try again or contact us directly at anantyogaclasses@gmail.com";
        }
    } else {
        $error_message = "Please fill in all required fields (Name, Email, and Message).";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Anant Yoga & Spiritual Awakening Foundation</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
    :root {
        --primary: #f86f03;
        --dark:    #0d1b2a;
        --white:   #ffffff;
        --light:   #f9f6f1;
        --text:    #666666;
        --border:  rgba(255,255,255,0.1);
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Nunito Sans',sans-serif; color:var(--dark); background:var(--white); overflow-x:hidden; }
    a { text-decoration:none; transition:color .2s; }

    /* ── OFFCANVAS (gallery.php exact) ───────────────── */
.offcanvas-menu-overlay{position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,.7);z-index:1000;opacity:0;visibility:hidden;transition:.4s;}
.offcanvas-menu-overlay.active{opacity:1;visibility:visible;}
.offcanvas-menu{position:fixed;left:-350px;top:0;width:310px;height:100%;background:#1a1a2e;z-index:1001;overflow-y:auto;transition:.4s cubic-bezier(0.77,0,0.175,1);padding:40px 25px;}
.offcanvas-menu.active{left:0;}
.offcanvas__logo img{max-height:60px;border-radius:4px;margin-bottom:30px;}
.offcanvas__widget ul{list-style:none;padding:20px;margin-bottom:30px;background:rgba(255,255,255,0.05);border-radius:8px;}
.offcanvas__widget ul li{color:#ddd;font-size:13px;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:8px;}
.offcanvas__widget ul li:last-child{border-bottom:none;}
.offcanvas__widget ul li .fa{color:#f86f03;}
.offcanvas__social{display:flex;gap:12px;margin-top:30px;}
.offcanvas__social a{width:38px;height:38px;border-radius:50%;background:#f86f03;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;transition:.3s;}
.offcanvas__social a:hover{background:#fff;color:#f86f03;}
.canvas__open{position:absolute;right:15px;top:50%;transform:translateY(-50%);display:none;cursor:pointer;background:#f86f03;color:#fff;width:40px;height:40px;border-radius:4px;align-items:center;justify-content:center;font-size:20px;}
.offcanvas__close{position:absolute;right:20px;top:20px;color:#fff;font-size:24px;cursor:pointer;transition:.3s;}
.offcanvas__close:hover{color:#f86f03;}
.offcanvas__nav ul{list-style:none;padding:0;}
.offcanvas__nav ul li a{display:flex;justify-content:space-between;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.1);color:#eee;font-size:15px;font-weight:600;text-transform:uppercase;text-decoration:none;}
.offcanvas__nav ul li a:hover,.offcanvas__nav ul li a.active{color:#f86f03;}
@media(max-width:991px){.canvas__open{display:flex;}}

    /* ── HEADER (gallery.php exact) ───────────────────── */
.header{background:#fff;box-shadow:0 2px 15px rgba(0,0,0,0.05);position:relative;z-index:999;}
.header__top{background:#1a1a2e;padding:10px 0;} @media(max-width:991px){.header__top{display:none;}}
.header__logo{padding:10px 0;display:flex;align-items:center; gap: 10px;}
.header__logo a{display:flex;align-items:center;text-decoration:none;}
.header__logo img{max-height:65px;width:auto;border-radius:4px;display:block;flex-shrink:0;}
.header-title{font-family:'Playfair Display',serif;font-size:12px;font-weight:700;color:#1a1a2e;text-transform:uppercase;}
@media(max-width:991px){.header-title{display:block;font-size:20px;}.header__logo{padding:6px 0;}.header__logo img{max-height:52px;}}
@media(max-width:575px){.header-title{font-size:10px;letter-spacing:0.4px;}}
@media(max-width:480px){.header-title{font-size:13px;letter-spacing:0.3px;}.header__logo img{max-height:51px;}}
@media(max-width:360px){.header-title{font-size:9.5px;}}
.header__top__widget{display:flex;align-items:center;justify-content:flex-end;gap:20px;height:100%;flex-wrap:wrap;}
.header__top__widget ul{list-style:none;display:flex;gap:25px;margin:0;padding:0;flex-wrap:wrap;}
.header__top__widget ul li{color:#ddd;font-size:13px;letter-spacing:.5px;display:flex;align-items:center;}
.header__top__widget ul li .fa{color:#f86f03;margin-right:8px;font-size:16px;}
.header__nav{background:#fff;border-top:3px solid #f86f03;transition:all 0.3s ease;}
.header__menu ul{list-style:none;display:flex;gap:5px;margin:0;padding:0;}
.header__menu ul li{position:relative;}
.header__menu ul li a{display:block;padding:20px 22px;font-size:15px;font-weight:900;color:#222;text-transform:uppercase;transition:.3s;text-decoration:none;}
.header__menu ul li a:hover,.header__menu ul li a.active{color:#f86f03;}
.header__social{display:flex;align-items:center;justify-content:flex-end;gap:10px;height:100%;}
.header__social a{width:36px;height:36px;border-radius:50%;background:#f5f5f5;color:#333;display:flex;align-items:center;justify-content:center;font-size:14px;transition:.3s;}
.header__social a:hover{background:#f86f03;color:#fff;transform:translateY(-3px);}
.header__nav.header__nav--fixed{position:fixed;top:0;left:0;width:100%;z-index:1000;box-shadow:0 4px 20px rgba(0,0,0,0.1);animation:slideDown 0.4s ease;}
@keyframes slideDown{from{transform:translateY(-100%);}to{transform:translateY(0);}}
.primary-btn{display:inline-block;background:#f86f03;color:#fff !important;padding:8px 22px;border-radius:25px;font-size:12px;font-weight:700;letter-spacing:.5px;white-space:nowrap;text-decoration:none;}
.primary-btn:hover{background:#d95f00;}

    /* ── BREADCRUMB HERO ───────────────────────────────── */
    .breadcrumb-section {
        position:relative; overflow:hidden;
        padding:100px 0 75px;
        background:
            linear-gradient(
                135deg,
                rgba(10,15,30,0.92) 0%,
                rgba(13,27,42,0.82) 40%,
                rgba(248,111,3,0.25) 100%
            ),
            url('https://www.hindustantimes.com/ht-img/img/2025/08/30/1600x900/yoga_poses_1756548307118_1756548315207.jpg') center center / cover no-repeat;
        min-height:380px;
        display:flex;
        align-items:center;
    }
    /* animated orange glow top-right */
    .breadcrumb-section::before {
        content:''; position:absolute; top:-20%; right:-8%;
        width:550px; height:550px;
        background:radial-gradient(circle, rgba(248,111,3,.22) 0%, transparent 65%);
        border-radius:50%; pointer-events:none;
        animation: glowPulse 4s ease-in-out infinite;
    }
    /* bottom-left subtle glow */
    .breadcrumb-section::after {
        content:''; position:absolute; bottom:-20%; left:-5%;
        width:400px; height:400px;
        background:radial-gradient(circle, rgba(248,111,3,.10) 0%, transparent 60%);
        border-radius:50%; pointer-events:none;
    }
    @keyframes glowPulse {
        0%, 100% { opacity:1; transform:scale(1); }
        50%       { opacity:0.6; transform:scale(1.1); }
    }
    /* make sure content is above overlays */
    .breadcrumb-section .container { position:relative; z-index:2; }
    .breadcrumb-badge {
        display:inline-flex; align-items:center; gap:8px;
        background:rgba(248,111,3,.15); border:1px solid rgba(248,111,3,.3);
        color:var(--primary); padding:7px 18px; border-radius:30px;
        font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase; margin-bottom:16px;
    }
    .breadcrumb-badge::before { content:''; width:7px; height:7px; background:var(--primary); border-radius:50%; }
    .breadcrumb-section h1 { font-family:'Playfair Display',serif; font-size:clamp(34px,5.5vw,60px); color:var(--white); line-height:1.1; margin-bottom:14px; text-shadow:0 2px 8px rgba(0,0,0,0.4); }
    .breadcrumb-section h1 em { color:var(--primary); font-style:italic; }
    .breadcrumb-section p { color:rgba(255,255,255,0.75); font-size:15px; line-height:1.8; max-width:500px; text-shadow:0 1px 3px rgba(0,0,0,0.5); }
    .breadcrumb-nav { margin-top:20px; }
    .breadcrumb-nav a { color:#a0aec0; font-size:13px; }
    .breadcrumb-nav a:hover { color:var(--primary); }
    .breadcrumb-nav span { color:#a0aec0; font-size:13px; margin:0 8px; }
    .breadcrumb-nav strong { color:var(--primary); font-size:13px; }

    /* ── ORANGE STATS BAR ──────────────────────────────── */
    .contact-stats { background:var(--primary); }
    .stats-grid { display:grid; grid-template-columns:repeat(3,1fr); }
    .stat-item {
        padding:20px 28px; display:flex; align-items:center; gap:14px;
        border-right:1px solid rgba(255,255,255,.2); color:var(--white);
    }
    .stat-item:last-child { border-right:none; }
    .stat-icon {
        width:42px; height:42px; border-radius:10px;
        background:rgba(255,255,255,.2); display:flex; align-items:center; justify-content:center;
        font-size:16px; flex-shrink:0;
    }
    .stat-text span { font-size:10.5px; opacity:.85; text-transform:uppercase; letter-spacing:1px; display:block; margin-bottom:2px; }
    .stat-text a, .stat-text p { color:var(--white); font-size:13.5px; font-weight:700; margin:0; }
    .stat-text a:hover { opacity:.85; color:var(--white); }
    @media(max-width:767px){
        .stats-grid{grid-template-columns:1fr;}
        .stat-item{border-right:none; border-bottom:1px solid rgba(255,255,255,.2);}
        .stat-item:last-child{border-bottom:none;}
    }

    /* ── CONTACT SECTION ───────────────────────────────── */
    .contact-section { padding:75px 0; background:var(--light); }
    .contact-grid { display:grid; grid-template-columns:1fr 1.6fr; gap:40px; align-items:start; }
    @media(max-width:991px){ .contact-grid{grid-template-columns:1fr;} }

    /* Info Card */
    .contact-info-card { background:var(--dark); border-radius:16px; padding:36px 28px; color:var(--white); }
    .cic-title { font-family:'Playfair Display',serif; font-size:23px; margin-bottom:6px; }
    .cic-sub { color:#a0aec0; font-size:13px; margin-bottom:26px; line-height:1.6; }
    .info-item { display:flex; gap:14px; margin-bottom:20px; align-items:flex-start; }
    .info-icon {
        width:42px; height:42px; border-radius:10px; flex-shrink:0;
        background:rgba(248,111,3,.15); border:1px solid rgba(248,111,3,.3);
        display:flex; align-items:center; justify-content:center; color:var(--primary); font-size:15px;
    }
    .info-label { font-size:10.5px; color:#a0aec0; text-transform:uppercase; letter-spacing:1px; margin-bottom:3px; }
    .info-val { font-size:13.5px; color:var(--white); line-height:1.6; }
    .info-val a { color:var(--white); }
    .info-val a:hover { color:var(--primary); }
    .cic-divider { height:1px; background:var(--border); margin:20px 0; }
    .hours-box { background:rgba(248,111,3,.09); border:1px solid rgba(248,111,3,.2); border-radius:10px; padding:14px 16px; }
    .hours-title { color:var(--primary); font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:9px; }
    .hours-row { display:flex; justify-content:space-between; color:#bbb; font-size:12.5px; padding:3px 0; }
    .hours-row span:last-child { color:var(--white); font-weight:600; }
    .cic-follow { font-size:11px; color:#a0aec0; text-transform:uppercase; letter-spacing:1px; margin:18px 0 10px; }
    .social-row { display:flex; gap:9px; }
    .social-row a {
        width:36px; height:36px; border-radius:8px;
        background:rgba(255,255,255,.06); border:1px solid var(--border);
        display:flex; align-items:center; justify-content:center; color:#ccc; font-size:13px; transition:all .2s;
    }
    .social-row a:hover { background:var(--primary); border-color:var(--primary); color:var(--white); transform:translateY(-2px); }

    /* Form Card */
    .contact-form-card {
        background:var(--white); border-radius:16px; padding:42px 38px;
        box-shadow:0 8px 50px rgba(0,0,0,.07);
    }
    @media(max-width:575px){ .contact-form-card{padding:26px 18px;} }
    .form-head h2 { font-family:'Playfair Display',serif; font-size:26px; color:var(--dark); margin-bottom:6px; }
    .form-head p { color:#888; font-size:13.5px; line-height:1.6; margin-bottom:26px; }
    .alert {
        padding:13px 16px; border-radius:10px; font-size:13.5px;
        margin-bottom:20px; display:flex; align-items:flex-start; gap:11px;
    }
    .alert-success { background:#f0fdf4; border:1px solid #86efac; color:#166534; }
    .alert-error   { background:#fef2f2; border:1px solid #fca5a5; color:#991b1b; }
    .alert .fa { font-size:16px; margin-top:2px; flex-shrink:0; }
    .form-row-2 { display:grid; grid-template-columns:1fr 1fr; gap:16px; }
    @media(max-width:575px){ .form-row-2{grid-template-columns:1fr;} }
    .form-group { margin-bottom:16px; }
    .form-group label { display:block; font-size:12px; font-weight:700; color:var(--dark); text-transform:uppercase; letter-spacing:.5px; margin-bottom:6px; }
    .form-group label .req { color:var(--primary); }
    .form-group input, .form-group select, .form-group textarea {
        width:100%; padding:12px 15px; border:2px solid #e8e8e8; border-radius:9px;
        font-family:'Nunito Sans',sans-serif; font-size:13.5px; color:var(--dark);
        background:var(--light); transition:border-color .2s, box-shadow .2s; outline:none;
    }
    .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
        border-color:var(--primary); box-shadow:0 0 0 4px rgba(248,111,3,.1); background:var(--white);
    }
    .form-group textarea { resize:vertical; min-height:130px; }
    .form-group select { cursor:pointer; }
    .submit-btn {
        width:100%; padding:14px 28px; background:var(--primary); color:var(--white);
        border:none; border-radius:50px; font-family:'Nunito Sans',sans-serif;
        font-size:15px; font-weight:700; letter-spacing:.5px; cursor:pointer;
        display:flex; align-items:center; justify-content:center; gap:10px;
        transition:all .3s; margin-top:6px;
    }
    .submit-btn:hover { background:#d95f00; transform:translateY(-2px); box-shadow:0 8px 28px rgba(248,111,3,.35); }

    /* ── MAP ───────────────────────────────────────────── */
    .map-section { padding:0 0 75px; background:var(--light); }
    .map-section h2 { font-family:'Playfair Display',serif; font-size:28px; text-align:center; margin-bottom:7px; }
    .map-sub { text-align:center; color:#888; font-size:13.5px; margin-bottom:28px; }
    .map-wrap { border-radius:16px; overflow:hidden; box-shadow:0 8px 40px rgba(0,0,0,.1); }
    .map-wrap iframe { display:block; }

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
    </style>
</head>
<body>

<!-- OFFCANVAS MENU -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu">
    <div class="offcanvas__close"><i class="fa fa-times"></i></div>
    <div class="offcanvas__logo">
        <img src="img/yogalogo.jpeg" alt="Logo">
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="about-us.php">ABOUT</a></li>
            <li><a href="spiritulactivities.php">YOGA SPIRITUAL ACTIVITES</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="contact.php" class="active">CONTACT</a></li>
            <li><a href="Donation.php">DONATION</a></li>
        </ul>
    </div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
    </div>
</div>

<!-- HEADER -->
<header>
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
    <div class="header__nav" id="stickyHeader">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-3 col-md-6 col-8">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="img/yogalogo.jpeg" alt="Anant Yoga Logo">
                        </a>
                        <div class="header-title">ANANT YOGA &amp; SPIRITUAL AWAKENING FOUNDATION</div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav class="header__menu">
                        <ul class="justify-content-center">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about-us.php">ABOUT</a></li>
                            <li><a href="spiritulactivities.php">
                                ACTIVITES</a></li>
                            <li><a href="gallery.php">GALLERY</a></li>
                            <li><a href="contact.php" class="active">CONTACT</a></li>
                            <li><a href="Donation.php">DONATION</a></li>
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

<!-- HERO BREADCRUMB -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="breadcrumb-badge">GET IN TOUCH</div>
        <h1>Contact <em>Our Community</em></h1>
        <p>Have questions about our yoga classes, spiritual programs, or events? We'd love to hear from you. We respond within 24 hours.</p>
        <div class="breadcrumb-nav">
            <a href="index.php">Home</a><span>/</span><strong>Contact Us</strong>
        </div>
    </div>
</section>

<!-- ORANGE QUICK INFO BAR -->
<div class="contact-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon"><i class="fa fa-phone"></i></div>
                <div class="stat-text">
                    <span>Call Us</span>
                    <a href="tel:8149751780">8149751780 / 9607511939</a>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fa fa-envelope"></i></div>
                <div class="stat-text">
                    <span>Email Us</span>
                    <a href="mailto:anantyogaclasses@gmail.com">anantyogaclasses@gmail.com</a>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fa fa-map-marker"></i></div>
                <div class="stat-text">
                    <span>Location</span>
                    <p>Mumbai, Maharashtra, India</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CONTACT MAIN -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            <!-- LEFT: Info -->
            <div class="contact-info-card">
                <p class="cic-title">Contact Information</p>
                <p class="cic-sub">We're here to guide you on your wellness journey. Connect with us anytime.</p>

                <div class="info-item">
                    <div class="info-icon"><i class="fa fa-phone"></i></div>
                    <div>
                        <div class="info-label">Phone</div>
                        <div class="info-val">
                            <a href="tel:8149751780">8149751780</a><br>
                            <a href="tel:9607511939">9607511939</a>
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fa fa-envelope"></i></div>
                    <div>
                        <div class="info-label">Email</div>
                        <div class="info-val"><a href="mailto:anantyogaclasses@gmail.com">anantyogaclasses@gmail.com</a></div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                    <div>
                        <div class="info-label">Location</div>
                        <div class="info-val">Mumbai, Maharashtra, India</div>
                    </div>
                </div>

                <div class="cic-divider"></div>

                <div class="hours-box">
                    <div class="hours-title"><i class="fa fa-clock-o"></i> &nbsp;Office Hours</div>
                    <div class="hours-row"><span>Monday – Friday</span><span>9:00 – 19:00</span></div>
                    <div class="hours-row"><span>Saturday</span><span>9:00 – 14:00</span></div>
                    <div class="hours-row"><span>Sunday</span><span>Closed</span></div>
                </div>

                <div class="cic-divider"></div>

                <p class="cic-follow">Follow Us</p>
                <div class="social-row">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- RIGHT: Form -->
            <div class="contact-form-card">
                <div class="form-head">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>

                <?php if ($success_message): ?>
                <!-- THANK YOU CARD — form hide, only this shows -->
                <div style="text-align:center; padding:30px 10px 20px;">
                    <div style="width:76px;height:76px;background:#f0fdf4;border:3px solid #86efac;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
                        <i class="fa fa-check" style="color:#22c55e;font-size:32px;"></i>
                    </div>
                    <h3 style="font-family:'Playfair Display',serif;font-size:24px;color:#0d1b2a;margin-bottom:10px;">Message Sent!</h3>
                    <p style="color:#666;font-size:14px;line-height:1.7;max-width:340px;margin:0 auto 24px;"><?= $success_message ?></p>
                    <a href="contact.php" style="display:inline-block;background:#f86f03;color:#fff;padding:12px 30px;border-radius:50px;font-size:14px;font-weight:700;text-decoration:none;">
                        <i class="fa fa-envelope" style="margin-right:7px;"></i>Send Another Message
                    </a>
                </div>
                <?php else: ?>

                <?php if ($error_message): ?>
                <div class="alert alert-error">
                    <i class="fa fa-exclamation-circle"></i>
                    <div><?= $error_message ?></div>
                </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-row-2">
                        <div class="form-group">
                            <label>Full Name <span class="req">*</span></label>
                            <input type="text" name="name" placeholder="Your full name" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label>Email Address <span class="req">*</span></label>
                            <input type="email" name="email" placeholder="your@email.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        </div>
                    </div>
                    <div class="form-row-2">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 XXXXX XXXXX" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <select name="subject">
                                <option value="">Select a subject</option>
                                <option value="Yoga Classes">Yoga Classes</option>
                                <option value="Spiritual Programs">Spiritual Programs</option>
                                <option value="Events & Camps">Events &amp; Camps</option>
                                <option value="Donation">Donation</option>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message <span class="req">*</span></label>
                        <textarea name="message" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fa fa-paper-plane"></i> Send Message
                    </button>
                </form>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>

<!-- MAP -->
<section class="map-section">
    <div class="container">
        <h2>Find Us in Mumbai</h2>
        <p class="map-sub">Visit our center for yoga classes, events, and spiritual guidance.</p>
        <div class="map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.7035576878!2d72.74109995!3d19.08250095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1708000000000"
                width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- FOOTER -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="footer__about">
                    <a href="index.php" class="footer-logo-link">
                        <img src="img/yogalogo.jpeg" alt="Anant Yoga">
                        <div class="footer-logo-title">ANANT YOGA &amp; SPIRITUAL<br>AWAKENING FOUNDATION</div>
                    </a>
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
                    <div class="footer-underline"></div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About</a></li>
                        <li><a href="spiritulactivities.php">YOGA &amp; SPIRITUAL</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="Donation.php">Donation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                <div class="footer__widget">
                    <h5>Contact Us</h5>
                    <div class="footer-underline"></div>
                    <ul class="footer-address">
                        <li><i class="fa fa-phone"></i> <span>8149751780 / 9607511939</span></li>
                        <li><i class="fa fa-envelope"></i> <span>anantyogaclasses@gmail.com</span></li>
                        <li><i class="fa fa-clock-o"></i> <span>MON – FRI: 9:00 – 19:00</span></li>
                        <li><i class="fa fa-map-marker"></i> <span>Mumbai, Maharashtra, India</span></li>
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
            <p>Copyright &copy; <span id="year"></span> Anant Yoga &amp; Spiritual Awakening Foundation. All rights reserved. Designed with <i class="fa fa-heart" style="color:#f86f03;"></i> for a Better World.</p>
        </div>
    </div>
</section>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(function(){
    document.getElementById("year").textContent = new Date().getFullYear();

    // Offcanvas
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
    $(document).on("keydown", function(e){
        if(e.key === "Escape"){
            $(".offcanvas-menu").removeClass("active");
            $(".offcanvas-menu-overlay").removeClass("active");
            $("body").css("overflow","auto");
        }
    });

    // Sticky header
    var $nav = $(".header__nav");
    var topH = $(".header__top").outerHeight() || 44;
    $(window).on("scroll", function(){
        $(this).scrollTop() > topH ? $nav.addClass("header__nav--fixed") : $nav.removeClass("header__nav--fixed");
    });
});
</script>
</body>
</html>