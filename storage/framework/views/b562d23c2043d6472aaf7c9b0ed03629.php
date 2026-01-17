

<?php $__env->startSection('content'); ?>
<style>
    /* General Typography & Spacing */
    .justify-list {
        font-size: 15px;
        color: #555;
        line-height: 1.7;
        padding-left: 20px;
        margin: 0;
        list-style-type: disc; /* Ensure bullets are visible */
    }

    .justify-list li {
        margin-bottom: 10px;
        text-align: left;
    }

    .sub-section-title {
        font-weight: 700;
        margin-bottom: 15px;
        color: #222;
        font-size: 1.1rem;
        /* Removed underlines as requested */
        border-left: none;
        padding-left: 0;
    }

    /* Tab Clean Styling (Restored) */
    .strategy-tab {
        background-color: transparent;
        color: #666; /* Inactive: Grey text */
        padding: 15px 0;
        cursor: pointer;
        border: none;
        border-bottom: 2px solid #e0e0e0; /* Inactive: Subtle grey line */
        font-weight: 700;
        text-align: center;
        width: 50%; /* 50/50 Split */
        transition: all 0.3s ease;
        margin: 0;
        font-size: 1.2rem;
        user-select: none;
    }

    .strategy-tab:hover {
        color: #ff0000;
        background-color: #fcfcfc;
    }

    .strategy-tab.active {
        background-color: transparent;
        color: #ff0000; /* Active: Red Text */
        border-bottom: 4px solid #ff0000; /* Active: Thick Red Line */
    }

    /* Content Styling */
    .content-box {
        background: transparent; /* Blend with background */
        padding: 0;
        border: none;
        box-shadow: none;
        margin-top: 20px;
    }

    .strategy-content {
        display: none;
        animation: fadeIn 0.5s;
    }

    .strategy-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Card Styling (Shared for Philosophy and Approach) */
    .strategy-card {
        background-color: transparent; /* Also blend this? Or keep it distinct? User said 'remove red line'. Let's keep it styled but removing border. Actually, if content box is transparent, maybe these should be card-like? Use #fff? */
        /* Let's Try White for the cards so they pop, or keep grey? Original was grey. */
        /* User: "Philosophy and Approach ... to it outer both of them i see a white div chnage it color to the bacground color" */
        /* This implies the wrapping white box goes away. The inner cards were likely grey. */
        background-color: #f8f9fa; 
        border-left: none; /* Removed red line as requested */
        padding: 0 0 30px 0; /* Remove padding if we are blending completely? Or keep structure? */
        /* Actually, if I remove the red line, it's just a grey box. */
        padding: 30px;
        margin-bottom: 30px;
        border-radius: 4px;
    }
    .strategy-card:last-child {
        margin-bottom: 0;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 25px;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 15px;
    }

    /* Approach Grid Items (Cards) */
    .approach-item {
        height: 100%;
        padding: 25px;
        background: #fff; /* White card inside grey section */
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .approach-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        border-bottom: 3px solid #ff0000; /* Subtle red accent on hover */
    }

</style>

<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="text-primary mb-4">Investment Strategy</h4>

                <!-- TABS (Clean Underline Style) -->
                <div class="d-flex mb-0">
                    <div class="strategy-tab active" onclick="showStrategy('ceqube', this)">Vardan Ceqube India Investment Fund</div>
                    <div class="strategy-tab" onclick="showStrategy('venus', this)">Vardan Venus Investment Fund Series 1</div>
                </div>

                <!-- Content Wrapper -->
                <div class="content-box">
                    
                    <!-- Vardan Ceqube Content (Default) -->
                    <div id="ceqube-content" class="strategy-content active">
                        
                        <!-- 1. Philosophy Card -->
                        <div class="strategy-card">
                            <h5 class="card-title">Philosophy</h5>
                            <ul class="justify-list">
                                <li>
                                    We focus on partnering with Small &amp; mid-sized first-generation entrepreneurs
                                    across sectors. The fund will seek to acquire a stake through Buyout Strategy,
                                    significant minority stake with co-investment opportunities, and investment in
                                    pre-IPO opportunities.
                                </li>
                                <li>
                                    We drive long-term value creation for our portfolio companies and investors through
                                    our structured approach in delivering operational efficiencies, enhanced strategic
                                    focus and strong corporate governance.
                                </li>
                                <li>
                                    Our collaborative approach is driven by functional expertise and domain knowledge,
                                    leveraging and building linkages across the ecosystem for capital efficiencies and
                                    margin expansion.
                                </li>
                                <li>
                                    Our team is supported by Industry Specialist Partners who actively participate in
                                    due diligence and value creation.
                                </li>
                            </ul>
                        </div>

                        <!-- 2. Approach Card (New Wrapper) -->
                        <div class="strategy-card">
                            <h5 class="card-title">Our Approach</h5>
                            
                            <div class="row g-5">
                                <!-- Item 1 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Investment Approach</div>
                                        <ul class="justify-list">
                                            <li>Understanding current economic environment</li>
                                            <li>Industry sizing opportunity along with in-depth competitive framework</li>
                                            <li>Review of organization structure and management</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Value Drivers</div>
                                        <ul class="justify-list">
                                            <li>Creating strategic partnership for operational and knowledge efficiency</li>
                                            <li>Build-operate partnership model</li>
                                            <li>Balancing investment opportunities between cyclical and annuity business models</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Strategic Framework</div>
                                        <ul class="justify-list">
                                            <li>Review &amp; assessment of cash flow analysis for capital allocation</li>
                                            <li>Setting milestones for investment &amp; revenue growth for improved capital efficiency</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 4 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Governance Framework</div>
                                        <ul class="justify-list">
                                            <li>Creating strong external and internal audit process along with investor communication</li>
                                            <li>Job-sizing and benchmarking across business &amp; competition</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Venus Vardan Content (Hidden initially) -->
                    <div id="venus-content" class="strategy-content">
                        
                        <!-- 1. Philosophy Card -->
                        <div class="strategy-card">
                            <h5 class="card-title">Philosophy</h5>
                            <ul class="justify-list">
                                <li>The fund focuses on partnering with venture-backed or institutionally supported growth-stage companies with proven business models, visible cash flows, and strong execution capabilities.</li>
                                <li>The Fund follows a blend of venture debt & performing credit led investment philosophy, combining secured structured debt with selective equity participation to deliver superior risk-adjusted returns & deliver stable return to investor.</li>
                                <li>Our approach prioritizes capital protection, regular income generation, and disciplined risk pricing, while enabling upside participation through warrant structures.</li>
                                <li>We believe a blend of venture debt & performing credit approach is a strategic alternative to equity, helping companies extend runway, reduce dilution, and improve valuation outcomes.</li>
                            </ul>
                        </div>

                        <!-- 2. Approach Card (New Wrapper) -->
                        <div class="strategy-card">
                            <h5 class="card-title">Our Approach</h5>
                            
                            <div class="row g-5">
                                <!-- Item 1 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Investment Approach</div>
                                        <ul class="justify-list">
                                            <li>Focus on companies backed by reputed venture capital, institutional or angel investors</li>
                                            <li>Preference for businesses with visible revenues, scalable models, and strong unit economics</li>
                                            <li>Investments primarily through short to medium-term structured debt instruments</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Value Drivers</div>
                                        <ul class="justify-list">
                                            <li>Capital protection through senior secured and well-structured debt instruments</li>
                                            <li>Predictable cash flows via regular interest and principal repayments</li>
                                            <li>Portfolio diversification across manufacturing-led, manufacturing-linked, and select sector-agnostic opportunities</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Strategic Framework</div>
                                        <ul class="justify-list">
                                            <li>Detailed assessment of cash flows to structure optimal capital solutions</li>
                                            <li>Clear definition of end-use and milestone-based capital deployment</li>
                                            <li>Structuring investments to balance growth requirements with capital efficiency</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Item 4 -->
                                <div class="col-md-6">
                                    <div class="approach-item">
                                        <div class="sub-section-title">Governance Framework</div>
                                        <ul class="justify-list">
                                            <li>Comprehensive financial, legal, and operational due diligence</li>
                                            <li>Security through charge on receivables and underlying assets</li>
                                            <li>Ongoing portfolio monitoring and monthly performance reviews</li>
                                            <li>Strong oversight through investment committee and advisory participation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function showStrategy(id, tab) {
        // Hide all contents
        var contents = document.querySelectorAll('.strategy-content');
        for (var i = 0; i < contents.length; i++) {
            contents[i].classList.remove('active');
        }
        
        // Remove active class from all tabs
        var tabs = document.querySelectorAll('.strategy-tab');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active');
        }

        // Show selected content
        document.getElementById(id + '-content').classList.add('active');
        
        // Add active class to clicked tab
        tab.classList.add('active');
    }
</script>
<!-- About End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/wqq189w694ht/public_html/resources/views/pages/investment.blade.php ENDPATH**/ ?>