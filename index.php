<?php
// include de header
include_once './includes/_header.php'
//parte do conteudo da página
?>

<main class="col-lg-8 col-12">
        <div class=row>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 blacknwhite" src="./assets/img/Rectangle 13.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-yellow">
                            <h5>Drone gigante ataca Goiás</h5>
                            <p>Lorem ipsum sit dolor amet</p>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 blacknwhite" src="./assets/img/maior câmera.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block text-yellow">
                            <h5>Câmera gigantesca que tirou foto do drone gigante</h5>
                            <p>Lorem ipsum sit dolor amet</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 blacknwhite" src="./assets/img/rubaitul-azad-edgGB5DbBeM-unsplash.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block text-yellow">
                            <h5>Telegram passa whatsapp em vendas de pica</h5>
                            <p>Lorem ipsum sit dolor amet</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h3 class="titulo-destaque-geral">Mais Populares:</h3>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                    <div class="col-12 col-lg-5 manchete text-justify">
                        <h2>WEB 3.0 fracassou?</h2>
                        <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                    </div>
                </div>

            <div class="row mt-3 mb-3">
                <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                <div class="col-12 col-lg-5 manchete text-justify">
                    <h2>WEB 3.0 fracassou?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                <div class="col-12 col-lg-5 manchete text-justify">
                    <h2>WEB 3.0 fracassou?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                <div class="col-12 col-lg-5 manchete text-justify">
                    <h2>WEB 3.0 fracassou?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                <div class="col-12 col-lg-5 manchete text-justify">
                    <h2>WEB 3.0 fracassou?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/Rectangle 13.png" style="height:185px;" class="col-12 col-lg-7" alt="a">
                <div class="col-12 col-lg-5 manchete text-justify">
                    <h2>WEB 3.0 fracassou?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore voluptatem perspiciatis rerum architecto possimus ducimus quod pariatur obcaecati, aliquid quis nihil facere iusto fugiat explicabo eos veritatis labore! Laboriosam, ab!</p>
                </div>
            </div>
        </div>
    </main>
<?php
//include do aside
include_once './includes/_aside.php';

//include do footer
include_once './includes/_footer.php';
?>