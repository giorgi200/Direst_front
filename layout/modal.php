        <section class="my-modal " id="chmodal">
            <div class="types-of-dishes mx-auto d-flex">
                <h2 class="type-header mx-auto">Choose dish type</h2>
                <img src="assets/img/to.svg" class="close-type">
                <!-- Dishes -->
                <?php for($rl = 0; $rl < 4; $rl++){ ?>
                    <div class="prod col-12 mx-auto">
                        <div class="prod-img" style="background:url('assets/img/download.jpeg')"></div>
                        <div class="nm-price d-flex justify-content-between">
                            <h1>Dish Name</h1>
                            <p>₾ 15</p>
                        </div>
                        <p class="short-des">Dish Short Description</p>  
                        <p class="shdf">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s. 
                        </p>
                    </div>
                <?php } ?>
            </div>
        </section>    