{extends file='src/templates/base/base.tpl'}
{block name=title}Profilo{/block}
{block name=body}
    <div class="hero-wrap" style="background-image: url();" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animated d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Profilo</span></h1>
                        <section class="ftco-section ftco-no-pb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <form action="/profile" method="GET">
                                            <div class="sort w-100 text-center ftco-animated">
                                                <div class="img" style="background-image: url('https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png');" ></div>
                                                <h3>{$name}</h3>
                                                <h3>{$surname}</h3>
                                                <h3>{$email}</h3>
                                            </div>
                                        </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">I tuoi ordini</span>
                    <h2>Piatti Migliori</h2>
                </div>
            </div>
            <div class="row">
                {foreach $bestrateds as $bestrated}
                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animated">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url({$bestrated->getImagePath()});">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="/" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <a href="/products/{$bestrated->getId()}">
                                <div class="text text-center">
                                    <span class="sale">Sale</span>
                                    <span class="category">{$bestrated->getCategory()->getCategoryName()}</span>
                                    <h2>{$bestrated->getName()}</h2>
                                    <p class="mb-0"> <span class="price">${$bestrated->getPrice()}</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                {/foreach}
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
                {foreach $bestsellers as $bestseller}
                    <div class="col-lg-6 d-flex align-items-stretch ftco-animated">
                        <div class="blog-entry d-flex">
                            <a href="/products/{$bestseller->getId()}" class="block-20 img" style="background-image: url({$bestseller->getImagePath()});">
                            </a>
                            <div class="text p-4 bg-light">

                                <h3 class="heading mb-3"><a href="/products/{$bestseller->getId()}">{$bestseller->getName()}</a></h3>
                                <p>{$bestseller->getDescription()}</p>
                                <p class="mb-0"> <span class="price">${$bestseller->getPrice()}</span></p>

                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>

{/block}