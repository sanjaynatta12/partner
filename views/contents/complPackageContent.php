<?php $complpackageHomeModel = new complpackageHomeModel(); ?>
<section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Tour Packages</span> in this year</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>We have arranged most wonderful packages for you in this year. </p>
                </div>
               
               <?php $complpackageHomeModel->cmplPkgs(); ?>
                
                </div>
        </div>
    </section>