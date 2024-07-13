<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner text-light">
          <div class="carousel-item active">
            <img class="first-slide" src="<?= base_url('assets/banner.png') ?>" style="height: 500px;" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Best Reviews.</h1>
                <p><a class="btn btn-lg btn-primary" href="<?= base_url('register') ?>" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?= base_url('assets/banner1.png') ?>" style="height: 500px;" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>Top Search.</h1>
                <p><a class="btn btn-lg btn-primary" href="<?= base_url('post') ?>" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?= base_url('assets/banner2.png') ?>" style="height: 500px;" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>One more for good measure.</h1>
                <p><a class="btn btn-lg btn-primary" href="<?= base_url('category') ?>" role="button">Browse category</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>