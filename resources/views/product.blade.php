     
     @extends('layouts.frontend')   
     @extends('layouts.modals')  
     @section('styles')
     @endsection

     @section('content') 
        <!-- Slider Start --->
        <div class="carouusel-slides">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <i class="fa fa-circle" aria-hidden="true" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></i>
                    <i class="fa fa-circle" aria-hidden="true" data-target="#carouselExampleIndicators" data-slide-to="1"></i>
                    <i class="fa fa-circle" aria-hidden="true" data-target="#carouselExampleIndicators" data-slide-to="2"></i>
                    <i class="fa fa-circle" aria-hidden="true" data-target="#carouselExampleIndicators" data-slide-to="3"></i>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/BANNER_1.jpg" alt="Banner Laika">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/BANNER_2.jpg" alt="Banner Laika">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/BANNER_3.jpg" alt="Banner Laika">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/BANNER_4.jpg" alt="Banner Laika">
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End-->

        <!-- Category Start --> 
        <div class="Category">
            <h2 class="Title-section">Categoría</h2>
            <div class="Categorias">
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Alimento.png" alt="Alimento-icono">Alimento</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Snack.png" alt="Snack-icono">Snacks</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Farmapet.png" alt="Farmapet-icono">Farmapet</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Cuidado.png" alt="Cuidado-icono">Cuidado e Higiene</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Juguetes.png" alt="Juguetes-icono">Juguetes</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/Accesorios.png" alt="Accesorio-icono">Accesorios</a></div>
                <div class="categoria-op"><a href="/"><img class="img_categoria" src="assets/img/PetLovers.png" alt="PetLovers-icono">Para PetLovers</a></div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Brands Start --> 
        <div class="Brands">
            <h2 class="Title-section">Marcas destacadas</h2>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/Hill's.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/max.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/natural-freshly.jpg"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/Pet-gourmet.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/PURINA.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/SALVAJE_FOOD_SAS.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/Hill's.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/max.png"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/natural-freshly.jpg"></div>
                            </div>
                            <div class="col">
                                <div class="bg-secondary text-white text-center"><img src="assets/img/Pet-gourmet.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            
        </div>
        <!-- Brand End -->

        

        <!-- Product Start -->
        <div class="featured-product product">
            <h2 class="Title-section">Productos Laika</h2>
            <div class="container-fluid">
                <div class="row align-items-center product-slider product-slider-4">
                    @if(isset($products))
                        @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="product-item">
                                <div class="info-sale">
                                    <i class="fa fa-certificate" aria-hidden="true"></i>
                                    <span>15%</span>
                                </div>
                                <div class="product-image">
                                    <a href="/"><img src="{{$product->image_name}}" alt="Product Image" height="200px"></a>
                                </div>
                                <div class="product-title">
                                    <a href="/">{{$product->name}}</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h2 class="customer-price"><span>$</span>{{$product->sale_price}}</h2> 
                                    <h2 class="customer-price-sale">
                                        Antes <br>
                                        <span>$</span><span>{{$product->price}}</span>
                                    </h2> 
                                </div>
                                <div class="product-price-LaikaMember">
                                    <h2 class="LaikaMember-price"><span>$</span>5.732</h2> 
                                    <div class="LaikaMembers">
                                        <img src="assets/img/Laika_member.png" class="img-LaikaMembers">
                                        <button>ADQUIÉRELA YA</button>
                                    </div>
                                </div>
                                <div class="option-size-product">
                                    <h4>150GR</h4>
                                </div>
                                <div class="add-product">
                                    <add-to-cart-button product-id="{{$product->id}}"
                                        user-id="{{auth()->user()->id ?? 0}}" 
                                    /><!-- Solo deja agregar si el usuario ha iniciado sesión-->
                                
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div> 
            </div>
        </div>
        <!-- Product End -->

        <!-- Download App Start -->
        <div class="apps-banner">
            <div class="container">
                <div class="download-apps ">
                    <h2>Descargala la app</h2>
                    <div class="download-apps2 ">
                        <img src="assets/img/App-Store.png" alt="App-Store" class="img-download">
                        <img src="assets/img/Google-play.png" alt="Google-Play" class="img-download">
                        <img src="assets/img/appGallery.png" alt="AppGalery" class="img-download">
                    </div>
                </div> 
                <div class="device-app">
                    <img src="assets/img/app.png" alt="App" class="app-downloads">
                </div>            
            </div>
        </div>
        <!-- Download App End -->


        
    
    @endsection

    @section('scripts')

    @endsection
        
