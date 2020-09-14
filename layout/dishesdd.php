<!-- Collapse Menu -->
<div class="accordion my-collapse" id="collapse">
    <!-- Collapse 1 -->
    <div class="card">
        <div class="card-header" id="headingOne">
            <div class="mb-0 header-of-coll justify-content-between d-flex collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <button class="drop-down-dishes" >Starters</button>
                <img src="assets/img/to.svg" class="dr-arrow" alt="">
            </div>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#collapse">
            <div class="card-body collapse-card-dishes">
               <?php for ($i=0; $i < 3; $i++) { ?>
                <div class="sel-vis justify-content-between align-items-center d-flex">
                    <div class="d-flex">
                        <img src="assets/img/download.jpeg" class="m-img" alt="">
                        <div class="sel-head align-items-center">                
                            <div class="selected-child d-flex">
                                <h1 class="select-h1">Mushroom cream Soup</h1>
                                <p class="selected-des"> Short description goes here</p>
                            </div>
                        </div>
                    </div>
                    <div class="from-lari d-flex">
                        <p class="sel-from">From</p>
                        <p class="sel-lari">₾ 15</p>
                    </div>
                    <button class="sel-order btn">Order</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>  
    <!-- Collapse 2 -->
    <div class="card">
        <div class="card-header" id="headingTwo">
            <div class="mb-0 header-of-coll justify-content-between d-flex collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <button class="drop-down-dishes" >Main dishes</button>
                <img src="assets/img/to.svg" class="dr-arrow" alt="">
            </div>
        </div>

        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#collapse">
            <div class="card-body collapse-card-dishes">
                <?php for ($i=0; $i < 3; $i++) { ?>
                <div class="sel-vis justify-content-between align-items-center d-flex">
                    <div class="d-flex">
                        <img src="assets/img/download.jpeg" class="m-img" alt="">
                        <div class="sel-head align-items-center">                
                            <div class="selected-child d-flex">
                                <h1 class="select-h1">Mushroom cream Soup</h1>
                                <p class="selected-des"> Short description goes here</p>
                            </div>
                        </div>
                    </div>
                    <div class="from-lari d-flex">
                        <p class="sel-from">From</p>
                        <p class="sel-lari">₾ 15</p>
                    </div>
                    <button class="sel-order btn">Order</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Collapse 3 -->
    <div class="card">
        <div class="card-header" id="headingThree">
            <div class="mb-0 header-of-coll justify-content-between d-flex collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <button class="drop-down-dishes" >Desserts</button>
                <img src="assets/img/to.svg" class="dr-arrow" alt="">
            </div>
        </div>

        <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#collapse">
            <div class="card-body collapse-card-dishes">
                <?php for ($i=0; $i < 3; $i++) { ?>
                <div class="sel-vis justify-content-between align-items-center d-flex">
                    <div class="d-flex">
                        <img src="assets/img/download.jpeg" class="m-img" alt="">
                        <div class="sel-head align-items-center">                
                            <div class="selected-child d-flex">
                                <h1 class="select-h1">Mushroom cream Soup</h1>
                                <p class="selected-des"> Short description goes here</p>
                            </div>
                        </div>
                    </div>
                    <div class="from-lari d-flex">
                        <p class="sel-from">From</p>
                        <p class="sel-lari">₾ 15</p>
                    </div>
                    <button class="sel-order btn">Order</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>