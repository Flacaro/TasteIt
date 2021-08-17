{extends file='src/templates/base/base.tpl'}
{block name=title}Home{/block}
{block name=body}
    {*immagine da cambiare*}
    <div class="hero-wrap" style="background-image: url('../../src/templates/images/bg_5.jpg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                {*<div class="col-md-8 ftco-animate d-flex align-items-end"> sto div qua rompe tutto*}
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Taste<span>It</span>.</h1>
                        <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                     </div>
            {*</div>*}
            </div>
        </div>
    </div>


{/block}