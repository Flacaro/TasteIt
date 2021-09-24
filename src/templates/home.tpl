{extends file='src/templates/base/base.tpl'}
{block name=title}Home{/block}
{block name=body}
    <div class="hero-wrap" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animated d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Taste<span>It</span>.</h1>
                        <p><a href="/products" class="btn btn-primary py-2 px-4">Prodotti</a> <a href="/aboutUs" class="btn btn-white btn-outline-white py-2 px-4">Leggi di più</a></p>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Supporto</h2>
                            <p>Per qualsiasi esigenza non esitare a contattarci tramite numero di telefono o indirizzo e-mail.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-free-delivery"></span>
                        </div>
                        <div class="text">
                            <h2>Consegna Gratuita</h2>
                            <p>I nostri rider consegneranno i tuoi piatti gratuitamente in tutta la città.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-visibility"></span>
                        </div>
                        <div class="text">
                            <h2>Nuovi coupon ogni mese</h2>
                            <p>I clienti più fedeli riceveranno ogni mese un nuovo coupon al loro indirizzo di posta elettronica.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../../src/assets/images/Restaurant.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5">
                    <div class="heading-section">
                        <span class="subheading">Since 1998</span>
                        <h2 class="mb-4">Prova la cucina del ristorante giapponese più vecchio de L'Aquila</h2>

                        <p>descrizione placeholder</p>
                        <p>secondo paragrafo blah blah continuo a scrivere solo perchè così si allunga l'immagine e viene più carino sennò è tagliata brutta lalalalalala scrivo almeno un paio di righe dai
                        non so più che scrivere aaaaaaaagsgsjsiakalksjksjakal</p>
                        <p class="year">
                            <strong class="number" data-number="23">0</strong>
                            <span>Years of Experience In Business</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                {foreach $categories as $category}
                    <div class="col-lg-2 col-md-4">
                        <a href="/categories/{$category->getId()}/products">
                        <div class="sort w-100 text-center ftco-animated">
                            <div class="img" style="background-image: url({$category->getImage()})" ></div>
                            <h3>{$category->getName()}</h3>
                        </div>
                        </a>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">Scopri i Nostri</span>
                    <h2>Piatti Migliori</h2>
                </div>
            </div>
            <div class="row">
                {foreach $bestRateds as $bestRated}
                <div class="col-md-3 d-flex">
                    <div class="product ftco-animated">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url({$bestRated->getImagePath()});">
                            <div class="desc">
                                <p class="meta-prod d-flex">
                                <form action="/products/{$product->getId()}/addToCart/{$cartId}" method="POST">
                                    <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1" hidden>
                                    <button id="productQuantity" class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                </form>
                                <form action="/products/{$product->getId()}/addToFavourites/{$favId}" method="POST">
                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                </form>
                                <form action="/products/{$product->getId()}">
                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                </form>
                                </p>
                            </div>
                        </div>
                        <a href="/products/{$bestRated->getId()}">
                        <div class="text text-center">
                            <span class="category">{$bestRated->getCategory()->getCategoryName()}</span>
                            <h2>{$bestRated->getName()}</h2>
                            <p class="mb-0"> <span class="price">${$bestRated->getPrice()}</span></p>
                        </div>
                        </a>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url(../../src/assets/images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animated">
                    <span class="subheading">placeholder</span>
                    <h2 class="mb-3">Cosa Dicono di Noi</h2>
                </div>
            </div>
            <div class="row ftco-animated">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        {foreach $bestReviews as $bestReview}
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">{$bestReview->getReviews()}</p>
                                   {* <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({$bestReview[1][4]})"></div>
                                        <div class="pl-3">*}
                                           {* <p class="name">{$bestReview->getName()}</p>*}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">i nostri</span>
                    <h2>Best Seller del Mese</h2>
                </div>
            </div>
            <div class="row d-flex">
                {foreach $bestSellers as $bestSeller}
                    <div class="col-lg-6 d-flex align-items-stretch ftco-animated">
                        <div class="blog-entry d-flex">
                            <a href="/products/{$bestSeller->getId()}" class="block-20 img" style="background-image: url({$bestseller->getImagePath()});">
                            </a>
                            <div class="text p-4 bg-light">

                                <h3 class="heading mb-3"><a href="/products/{$bestSeller->getId()}">{$bestSeller->getName()}</a></h3>
                                <p>{$bestSeller->getDescription()}</p>
                                <p class="mb-0"> <span class="price">${$bestSeller->getPrice()}</span></p>

                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>

{/block}