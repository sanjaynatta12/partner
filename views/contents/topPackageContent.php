<?php $packageHomeModel = new packageHomeModel(); ?>
<section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2><span>Holiday</span> Packages</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>India's best tour and travels Booking website.</p>
                </div>
                <div>
                <?php $packageHomeModel->Toppackages(); ?>
                </div>
            </div>
        </div>
    </section>