<meta charset="utf-8">
<title>Vardan Fund</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?php echo e(asset('assets/lib/animate/animate.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">


<!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<style>
    .footer {
        background-color: #ff0000;
        color: #ffffff;
        text-align: center;
        padding: 15px 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .footer a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 8px;
        font-weight: 500;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer .copyright {
        margin-top: 8px;
        font-size: 11px;
    }


.header-carousel-item {
    position: relative;
}

/* Image */
.slider-image {
    width: 100%;
    aspect-ratio: 16 / 7;
    overflow: hidden;
}

.slider-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* 🔥 TITLE AT BOTTOM (NO CONFLICTS) */
.slider-title {
    position: absolute;
    width: 70%;
    height: 90px; 
    bottom: 100px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    z-index: 10;
}

.slider-title h2 {
    background: rgb(232 39 39 / 75%);
    color: #fff;
    margin: 0;
    padding: 18px 40px;
    font-size: 30px;
    font-weight: 600;
}

/* .slider-title h2 {
    display: inline-block;
    background: rgb(232 39 39 / 75%);
    color: #fff;
    padding: 18px 40px;
    font-size: 30px;
    font-weight: 600;
} */

@media (max-width: 768px) {
    .slider-title {
        height: 80px;
        bottom: 50px;
    }

    .slider-title h2 {
        font-size: 26px;
    }
}
/* Section spacing */
.investment-section {
    margin-top: 40px;
}

/* Grey bar header */
.section-header {
    background: #716b6bd1;
    padding: 12px 20px;
    margin-bottom: 20px;
}

.section-header h5 {
    margin: 0;
    color: #ffffff;
    font-size: 1rem;
    font-weight: 600;
}

/* Body text */
.section-body {
    padding: 0 10px;
}

/* Bullet list */
.section-body ul {
    padding-left: 18px;
    margin-bottom: 25px;
}

.section-body ul li {
    margin-bottom: 12px;
    line-height: 1.6;
    color: #444;
    font-size: 1rem;
}

/* Red subsection titles */
.sub-section-title {
    color: #e60000;
    font-size: 1rem;
    font-weight: 600;
    margin: 15px 0 8px;
}
.text-justify {
    text-align: justify;
    text-justify: inter-word;
}

/* Responsive */
@media (max-width: 768px) {
    .section-header {
        margin-top: 20px;
    }
}

</style>
<?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/partials/header.blade.php ENDPATH**/ ?>