<!-- Inizio barra rossa in alto dove ce sign up e login  -->
{extends file='src/templates/base/base.tpl'}
{block name=title}product{/block}
{block name=body}

<!--  inizio schermata del Home e del product con la foto del liquore e delle rose -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('/src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div >
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Produtti <i class="fa fa-chevron-right"></i></a></span> <span> Prodotto <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Prodotto </h2>
            </div>
        </div>
    </div>
    <!-- fine  schermata del Home e del product con la foto del liquore e delle rose -->
</section>
<!-- inizio della schermata del  liquore , prezzo e la sua descrizione -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(/src/assets/images/prod-9.jpg);">
            </div>
            <div class="col-lg-6 product-details pl-md-5 ">
                <h3>{$product->getName()}</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        {if $avg != 0}
                        <a href="#" class="mr-2">{$avg}</a>

                        <a href="#">
                            <span>
                                                    {for $var=1 to round($avg)}
                                                    <i class="fa fa-star"></i>
                                                   {/for}
							   					</span>
                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                        </a>
                        {/if}
                </div>
                <p class="price"><span> EUR {$product->getPrice()}</span></p>
                <p>{$product->getDescription()}</p>

                <div class="row mt-4">
                    <div class="input-group col-md-6 d-flex mb-3">
{*                        {if $cartId}*}
                            <form id="addProductToCardForm" action="/products/{$product->getId()}/addToCart/{$cartId}" method="POST">
                                <div class="d-flex mb-4">
                                    <button id="minus" class="mr-2" type="button"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1">
                                    <button id="plus" class="ml-2" type="button"><i class="fa fa-plus"></i></button>
                                </div>

                                {*<p><a href="" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a>*}
                                <button class="btn btn-primary" style="padding-bottom: 2rem;" type="submit">Aggiungi al carrello</button>

                            </form>

                        <script>
                            const input = document.querySelector('#productQuantity');
                            input.value = 1;

                            const minusBtn = document.querySelector('#minus');
                            const plusBtn = document.querySelector('#plus');

                            const form = document.querySelector('#addProductToCardForm');


                            if(minusBtn && plusBtn) {
                                minusBtn.addEventListener('click', () => {
                                    if (input.value > 1) {
                                        input.value = parseInt(input.value, 10) - 1;
                                    }
                                });

                                plusBtn.addEventListener('click', () => {
                                    input.value = parseInt(input.value, 10) + 1;
                                });
                            }
                        </script>
                      </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                    </div>
                </div>
{*               {/if}*}
            </div>
        </div>

        <!-- Inizio la barra  del Description , Manifacture , Reviews sotto la foto del liquore  -->
            <div class="row mt-5">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                        <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Manufacturer</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>

                    </div>

                </div>
            <!-- fine della barra  -->
            <div class="col-md-12 ">
                <!-- inizio della descrizione  -->
                <div  class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active"  id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <p class="mb-4">{$product->getDescription()}</p>
                        </div>
                    </div>

                    <!-- inizio della Manifacture   -->
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Prodotto da TasteIt</h3>
                            <p>Skrewball è stato creato da un team di marito e moglie Americani . Ha creato un cocktail di whisky al burro di arachidi. L'ha trasformato in un marchio, Skrewball.</p>
                        </div>
                    </div>
                    <!-- inizio della Reviews -->
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4">{count($reviews)} Recensione/i</h3>
                                {foreach $reviews as $review}
                                <div class="review">
                                    <div class="user-img" style="background-image: url(../../src/assets/images/Fla.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">{$review->getCustomer()->getName()} {$review->getCustomer()->getSurname()}</span>
                                            <span class="text-right">25 Aprile 2020</span>
                                        </h4>
                                        <p class="star">
								   				<span>
                                                    {for $var=1 to $review->getStars()}
								   					    <i class="fa fa-star"></i>
                                                    {/for}
							   					</span>
                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                        </p>
                                        <div >
                                                <div class="item">
                                                    <div >
                                                        <div class="text">
                                                            <p class="mb-4">{$review->getComment()}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}
                            </div>

                            <div>

                                <div class="contact-wrap w-100 p-md-5">

                                        <h3 class="mb-5">Lascia una recensione</h3>
                                            <form action="/products/{$product->getId()}/addReview" method="POST" id="add">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                                <label class="label" for="subject">Stelle</label>
                                                                <input type="text" class="form-control" name="stars" id="stars" placeholder="Valuta da 1 a 5 stelle">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                            <label class="label" for="#">Commento</label>
                                                                            <input type="text" name="comment" class="form-control" id="comment" placeholder="Descrivi il prodotto">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <button id="add" class="btn btn-primary btn-number" type="submit">Aggiungi</span></button>
                                                                    </div>
                                                                </div>
                                                </div>
                                            </form>
                                 </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{/block}
<!-- Fine della barra di Description , Reviews ecc  -->