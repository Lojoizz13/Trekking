<!--Checkbox
<div class="checkbox">
    <input class="checkbox-input" type="checkbox" id="checkbox_1">
    <label class="checkbox-myCheckbox" for="checkbox_1">Men</label>
</div>
-->

<!--Button
<button class="button">See all products</button>
-->

<!--h1
<h1 class="h1">Our clothing , your comfort</h1>
-->

<!--Карточка товара
<div class="productCard">
    <p class="productCard-size">Size</p>
    <div class="productCard-color-block">
        <div class="productCard-color bg-pink"></div>
        <div class="productCard-color bg-black"></div>
        <div class="productCard-color bg-blue"></div>
    </div>
    <img src="public/img/t-shirt.png" alt="product">
    <p class="productCard-name">T-Shirt</p>
    <p class="productCard-price">60,00$</p>
</div>
-->

<!--Slider-navigation
<div class="sliderNavigation">
    <p class="sliderNavigation-nums">
        1 / 5
    </p>
    <div class="sliderNavigation-buttons">
        <input class="sliderNavigation-button" type="image" src="public/img/arrow-brown-left.svg">
        <input class="sliderNavigation-button" type="image" src="public/img/arrow-brown-right.svg">
    </div>
</div>
-->
<header class="header">
    <div class="container">
        <div class="header-container">

            <div class="row align-items-center">
                <div class="col-auto mr-auto">
                    <a href="/"><img src="public/img/logo.png" alt="logo"></a>
                </div>

                <div class="col-auto">
                    <div class="header-block">
                        <a href="#" class="header-a">Home</a>
                        <a href="#" class="header-a">Products</a>
                        <?php require ("public/img/shopping-cart.svg"); ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1 class="h1 header-h1">Our clothing , your comfort</h1>
                    <p class="header-p">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed<br>
                        do eiusmod tempor incididunt ut labore et dolore<br>
                        magna aliqua.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <button><?php require ("public/img/arrow-white-down.svg"); ?></button>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="categories">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-auto mr-auto">
                <div class="categories-block">
                    <div class="checkbox">
                        <input class="checkbox-input" type="checkbox" id="checkbox_1">
                        <label class="checkbox-myCheckbox" for="checkbox_1">Men</label>
                    </div>

                    <div class="checkbox">
                        <input class="checkbox-input" type="checkbox" id="checkbox_2">
                        <label class="checkbox-myCheckbox" for="checkbox_2">Women</label>
                    </div>

                    <div class="checkbox">
                        <input class="checkbox-input" type="checkbox" id="checkbox_3">
                        <label class="checkbox-myCheckbox" for="checkbox_3">Children</label>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <button class="button">See all products</button>
            </div>
        </div>
    </div>
</div>

