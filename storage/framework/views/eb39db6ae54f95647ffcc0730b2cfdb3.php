
<?php $__env->startSection('content'); ?>
<style>
.justify-text {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
    text-align: justify;
    text-justify: inter-word;
}

.justify-list {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
    padding-left: 20px;
    margin-bottom: 20px;
}

.justify-list li {
    margin-bottom: 12px;
    text-align: justify;
    text-justify: inter-word;
}
.custom-img {
    /* width: 600px;      set exact width */
    /* height: 2500px;     set exact height */
    /* object-fit: cover; */
    margin-top: 20px;
    max-width: 75%;   /* try 70%, 75%, 80% */
    height: auto;
}
.page-section {
    margin-bottom: 50px;   /* try 60–100px */
}
.mar-bottom{
    margin-bottom:30px;
}
/* .custom-img1{
    margin-top: 160px;
} */


</style>
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- SECTION 1 -->
            <div class="wow fadeInRight row align-items-center page-section" data-wow-delay="0.3s">
                <h4 class="text-primary mar-bottom">Sector & Research</h4>
                <h5 class="text-primary">Manufacturing Sector</h5>
                    <h5 class="mb-4">Building India’s Industrial Backbone and Global Competitiveness</h5>
                <div class="col-lg-7">    

                 <p class=" text justify-text ps-3 mb-4">
                    India’s manufacturing sector is a cornerstone of economic development, contributing significantly
                    to GDP, employment and exports. With skilled labour, robust infrastructure and policy support,
                    India is emerging as a global manufacturing hub.
                </p>

                <ul class="justify-list">
                    <li>Initiatives like Make in India, PLI scheme and PM MITRA parks are driving industrial growth.</li>
                    <li>India offers a cost-effective ecosystem with access to raw materials and engineering talent.</li>
                    <li>The sector spans automobiles, electronics, textiles, chemicals, pharmaceuticals and renewables.</li>
                    <li>India ranks among the top global manufacturing nations.</li>
                </ul>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/ManufacturingSector.png')); ?>" alt="Image">
                </div>
                
            <!-- SECTION 2 -->
            <div class="wow fadeInRight row align-items-center py-6 page-section" data-wow-delay="0.3s">
                <h5 class="text-primary">Consumption Driven</h5>
                    <h5 class="mb-4">Propelling India’s Strong Consumption Driven Economy</h5>
                <div class="col-lg-7">

                <p class=" text justify-text ps-3 mb-4">
                    India is the world’s fifth largest global destination in the retail space and is one of the fastest
                    growing markets. Its inherent character is propelling growth and making it the most favorable
                    investment destination.
                </p>

                <ul class="justify-list">
                    <li>Healthy economic growth, favourable demographic profile, increasing disposable incomes,
                        changing consumer tastes & preferences are aiding consumption growth.</li>
                    <li>Rapid urbanisation with increasing purchasing power has led to growing demand.</li>
                    <li>Retail & Consumer FDI contributed 8% of India’s USD 81.04B inflows by March 2025, showcasing strong global interest.</li>
                </ul>
                </div>

                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/ConsumptionDriven.jpg')); ?>" alt="ConsumptionDriven">
                </div>

            <!-- SECTION 3 -->
            <div class="wow fadeInRight row align-items-center page-section" data-wow-delay="0.3s">
            <h5 class="text-primary">Banking & Financial Services</h5>
                <h5 class="mb-4">Making India Bankable and Banking for India</h5>    
                <div class="col-lg-7">

                 <p class=" text justify-text ps-3 mb-4">
                    India has a diversified financial sector undergoing rapid expansion, both in terms of strong growth
                    of existing financial services firms and new entities entering the market. The country’s financial
                    services sector consists of capital markets, insurance sector and non-banking financial companies (NBFCs).
                </p>

                <ul class="justify-list">
                    <li>Rising incomes are driving demand for financial services across customer segments;
                        financial inclusion initiatives from RBI have expanded the market to semi-urban and rural areas.</li>
                    <li>The HNWI population in India is young and more receptive towards sophisticated financial products.</li>
                    <li>The shift from physical savings to financial savings will aid growth for the BFSI segment.</li>
                </ul>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/Banking-FinancialServices.jpg')); ?>" alt="Banking-FinancialServices">
                </div>

            <!-- SECTION 4 -->
            <div class="wow fadeInRight row align-items-center page-section" data-wow-delay="0.3s">
                <h5 class="text-primary">Education & Healthcare</h5>
                <h5 class="mb-4">Cementing India’s Social Infrastructure Fabric</h5>
                <div class="col-lg-7">

                 <p class=" text justify-text ps-3 mb-4">
                    Education, skill development and healthcare sectors have witnessed major investment and development.
                    Government spending, favourable policy changes and private sector investments have emerged as growth catalysts.
                </p>

                 <p class=" text justify-text ps-3 mb-4">
                    Rising income levels, greater health awareness, increased lifestyle diseases and improved access to
                    insurance are key contributors. Healthcare is one of India’s largest sectors in revenue and employment.
                </p>

                <ul class="justify-list">
                    <li>Growing gap between tier-1 institutes and others is increasing demand for competitive exams
                        (JEE, NEET), driving private coaching markets.</li>
                    <li>India’s competitive advantage lies in its large pool of well-trained medical professionals
                        and cost competitiveness.</li>
                </ul>
                </div>

                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/Education.jpg')); ?>" alt="Education">
                </div>

            <!-- SECTION 5 -->
            <div class="wow fadeInRight row align-items-center page-section" data-wow-delay="0.3s">
                <h5 class="text-primary">Disruptive & Green Technology</h5>
                <h5 class="mb-4">Indian Edge: Connecting India & Beyond</h5>
                
                <div class="col-lg-7">

                 <p class=" text justify-text ps-3 mb-4">
                    Indian firms operate over 1,700 Global Capability Centers worldwide, generating nearly USD 65 billion
                    in revenue and employing close to 2 million professionals. India’s startup ecosystem ranked 3rd globally
                    in 2025 with over 68 unicorns.
                </p>

                <ul class="justify-list">
                    <li>Disruptive technologies such as cloud computing, social media and data analytics offer new growth avenues.</li>
                    <li>Technology adoption has penetrated education, healthcare, consumption & BFSI sectors.</li>
                    <li>Indian companies have established over 1,000 global delivery centers across 80+ countries.</li>
                    <li>India ranks among the top global startup ecosystems.</li>
                </ul>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/GreenTechnology.jpg')); ?>" alt="GreenTechnology">
                </div>

            <!-- SECTION 6 -->
            <div class="wow fadeInRight row align-items-center page-section" data-wow-delay="0.3s">
                <h5 class="text-primary">Infrastructure Services</h5>
                <h5 class="mb-4">Integrating Infrastructure, Enabling Nation Building</h5>
                <div class="col-lg-7">

                 <p class=" text justify-text ps-3 mb-4">
                    India’s geographical diversity has created pockets of excellence. Government focus on private
                    participation has created multiple infrastructure investment avenues.
                </p>

                <ul class="justify-list">
                    <li>Higher government spending has increased participation of domestic & global EPC players.</li>
                    <li>Infrastructure investments have created opportunities in warehousing, tourism & BPO.</li>
                    <li>E-commerce growth has boosted logistics and warehousing infrastructure.</li>
                </ul>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto d-block custom-img" src="<?php echo e(asset('assets/img/Infra.jpg')); ?>" alt="Infra">
                </div>
            </div>

            </div>

        </div>
    </div>
</div>
<!-- About End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/wqq189w694ht/public_html/resources/views/pages/sector.blade.php ENDPATH**/ ?>