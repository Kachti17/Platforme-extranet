<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Carousel Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides only</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <!-- Comming Soon -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" @slide="check1">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
              </div>
            </div>

          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Controls</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Indicators</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <!-- Comming Soon-->
            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" :navigate-to="manualNavigation" @GoToPage5="manualNavigation">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Captions</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel" @page-change="pclick">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Crossfade</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <div id="carouselExampleFade5" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
                <div class="carousel-item">
                  <img src="@/assets/images/small/img-1.jpg" class="d-block w-100" alt="laptop image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>

// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiCarousel',
  data () {
    return {
      check: false,
      manualNavigation: 2
    }
  },
  mounted () {
    // socialvue.index()
  }
}
</script>
