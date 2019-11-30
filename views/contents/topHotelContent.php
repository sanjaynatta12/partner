<?php
$homeBestHotels= new homeBestHotels();
?>
<section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Hotels</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Monpahari Holidays Provides best Hotels all over the India.</p>
                </div>
                <div>
               <?php $homeBestHotels->TopHotels();; ?>
                </div>
            </div>
        </div>
    </section>