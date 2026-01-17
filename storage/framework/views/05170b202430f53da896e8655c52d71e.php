<?php $__env->startSection('content'); ?>
<style>
    /* Tab Clean Styling */
    .d-flex.mb-0 {
        border-bottom: 2px solid #e0e0e0; /* Line extending across */
    }

    .strategy-tab {
        background-color: transparent;
        color: #666; /* Inactive: Grey text */
        padding: 15px 0;
        cursor: pointer;
        border: none;
        border-bottom: 2px solid transparent; 
        font-weight: 700;
        text-align: center;
        width: 50%; /* 50% Split for 2 tabs */
        transition: all 0.3s ease;
        margin: 0;
        font-size: 1.2rem;
        user-select: none;
        margin-bottom: -2px; /* Overlap container line */
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
        background: transparent;
        padding: 0;
        border: none;
        box-shadow: none;
        margin-top: 30px;
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

    /* Card Styling for Fund Info */
    .fund-card {
        background-color: #fff;
        /* border-top: 5px solid #ff0000; Removed as requested */
        padding: 40px;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        border-radius: 4px;
    }

</style>

<!-- Funds Section Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="text-primary mb-4">Our Funds</h4>

                <!-- TABS -->
                <div class="d-flex mb-0">
                    <div class="strategy-tab active" onclick="showFund('ceqube', this)">Vardan Ceqube India Investment Fund</div>
                    <div class="strategy-tab" onclick="showFund('venus', this)">Vardan Venus Investment Fund Series 1</div>
                </div>

                <!-- Content Wrapper -->
                <div class="content-box">
                    
                    <!-- Vardan Ceqube Content -->
                    <div id="ceqube-content" class="strategy-content active">
                        <div class="fund-card">
                            <!-- Removed Red Header <h2 class="text-primary">Vardan Ceqube</h2> -->
                            <h5 class="mb-4">Vardan Ceqube India Investment Fund</h5>
                            
                            <!-- Added border:none to prevent vertical red line overlap -->
                            <p class="mb-4" style="text-align: justify; border: none !important;">
                                <b>Investment Objective</b> - The Fund aims to achieve long-term capital appreciation and generate superior risk-adjusted returns by investing in small-cap and mid-cap companies in India. The Fund targets growth capital, seeking control or significant minority stakes, and works with companies to position them for future growth and generate returns for all stakeholders.
                            </p>
                            
                            <h5 class="mb-3">Fund Details:</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Fund Name</th>
                                            <th>Vardan Ceqube India Investment Fund</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SEBI Registration No.</td>
                                            <td>IN/AIF2/17-18/0363</td>
                                        </tr>
                                        <tr>
                                            <td>Fund Category</td>
                                            <td>Category II AIF – Close Ended</td>
                                        </tr>
                                        <tr>
                                            <td>Investment Manager</td>
                                            <td>Vardan Ceqube Advisors Private Limited</td>
                                        </tr>
                                        <tr>
                                            <td>Sector</td>
                                            <td>Sector agnostic with key focus on Consumption Driven, Disruptive & Green Technologies, Infrastructure etc.</td>
                                        </tr>
                                        <tr>
                                            <td>Stage of Investment</td>
                                            <td>Emerging Corporates & Series B above</td>
                                        </tr>
                                        <tr>
                                            <td>Instruments</td>
                                            <td>Equity & Equity Linked Instruments</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Venus Vardan Content -->
                    <div id="venus-content" class="strategy-content">
                        <div class="fund-card">
                            <!-- Removed Red Header <h2 class="text-primary">Vardan-Venus</h2> -->
                            <h5 class="mb-4">Vardan-Venus Investment Fund Series 1</h5>
                            
                            <!-- Added border:none to prevent vertical red line overlap -->
                            <p class="mb-4" style="text-align: justify; border: none !important;">
                                <b>Investment Objective</b> - The Fund aims to function as a venture debt fund by investing in secured debt securities of private companies to generate fixed income returns. Additionally, it may invest in equity and equity-linked instruments. This combination of equity and debt allows the Fund to manage risks while providing potential for upside returns.
                            </p>
                            
                            <h5 class="mb-3">Fund Details:</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Fund Name</th>
                                            <th>Vardan Venus Investment Fund S1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SEBI Registration No.</td>
                                            <td>IN/AIF2/22-23/1223</td>
                                        </tr>
                                        <tr>
                                            <td>Fund Category</td>
                                            <td>Category II AIF – Close Ended</td>
                                        </tr>
                                        <tr>
                                            <td>Investment Manager</td>
                                            <td>Venus - Vardan Partners LLP</td>
                                        </tr>
                                        <tr>
                                            <td>Sector</td>
                                            <td>Manufacturing & Manufacturing Linked Sectors</td>
                                        </tr>
                                        <tr>
                                            <td>Stage of Investment</td>
                                            <td>Stratups & SMEs</td>
                                        </tr>
                                        <tr>
                                            <td>Instruments</td>
                                            <td>Venture Debt & Performing Credit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function showFund(id, tab) {
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
<!-- Funds Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/funds.blade.php ENDPATH**/ ?>