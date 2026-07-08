@extends('layouts.website.main')
@section('content')
<style>

.img-custom {
  width: 100%;
  max-width: 300px; 
  height: auto;
   border-radius:20px;
  object-fit: cover;
    transition: transform 0.5s ease-in-out; 
}

.row1 {
  margin-left: auto;
  margin-right: auto;
}

.img-custom:hover {
  transform: translateY(-20px);
}

@media(max-width:678px){
    .img-custom{
        border-radius:20px;
    }
    
    .row{
        margin-top:50px;
    }
    .section1{
        padding-top:0px;
    }
}

    .site-menu li a
    {
        color:#fff !important;
    }
        .site-menu li a:hover
    {
        color:#000 !important;
    }
    .site-nav
    {
        background:;
    }
    #property-nav
    {
        display:none;
    }
    
    .adss-full-width {
  width: 100%;
  margin: 0 auto;
}

@media(min-width:1000px){
    .img-fluid{
        width:400px;
    }
    .topads{
        width:350px;
    }
    
    .row1{
        display:flex;
        justify-content:space-evenly;
        
    }
    .row11{
        margin-top:25px;
       height:400px!important; 
    }
}

/*@media(min-width:1000px){*/
    
/*    .adss-item{*/
/*        width:350px;*/
/*        height:200px;*/
/*        margin:5px;*/
/*    }*/
    
/*    .adss-item img{*/
/*        height:200px;*/
/*        width:300px;*/
/*    }*/
/*}*/

</style>
    <!--<div-->
    <!--  class="hero page-inner overlay" -->
    <!--  style="background-image: url('website/images/hero_bg_2.jpg')">-->
    <!--  <div class="container">-->
    <!--    <div class="row justify-content-center align-items-center">-->
    <!--      <div class="col-lg-9 text-center mt-5">-->
    <!--        <h1 class="heading" data-aos="fade-up">About</h1>-->

    <!--        <nav-->
    <!--          aria-label="breadcrumb"-->
    <!--          data-aos="fade-up"-->
    <!--          data-aos-delay="200"-->
    <!--        >-->
    <!--          <ol class="breadcrumb text-center justify-content-center">-->
    <!--            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>-->
    <!--            <li-->
    <!--              class="breadcrumb-item active text-white-50"-->
    <!--              aria-current="page"-->
    <!--            >-->
    <!--              About-->
    <!--            </li>-->
    <!--          </ol>-->
    <!--        </nav>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

<div class="section">
    <div class="row row11"> 
        <img src="{{asset('uploads/AD_BANNER/b.jpg')}}" alt="Chicago" style="width:100%;height:100%">
        <div class="carousel-caption">
          <!--<h3>Chicago</h3>-->
          <!--<p>Thank you, Chicago!</p>-->
        </div>
     </div>
</div>


    <div class="section section1" >
      <div class="container">
          <!--@if(count($topads) > 0)-->
<!--  <div > -->
<!--             <div class="property-slider-wrap">-->
<!--              <div class="property-slider">-->
<!--             @foreach($topads as $ads)-->
<!--                <div class="property-item">-->
<!--                  <a href="#" class="img">-->
<!--                      <div class="text-center">-->
<!--                    <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>-->
<!--                      </div>-->
<!--                  </a>-->
<!--                </div>-->
<!--@endforeach-->
<!--                 .item -->
<!--              </div>-->

              <!--<div-->
              <!--  id="property-nav"-->
              <!--  class="controls"-->
              <!--  tabindex="0"-->
              <!--  aria-label="Carousel Navigation">-->
              <!--  <span-->
              <!--    class="prev"-->
              <!--    data-controls="prev"-->
              <!--    aria-controls="property"-->
              <!--    tabindex="-1"-->
              <!--    >Prev</span>-->
              <!--  <span-->
              <!--    class="next"-->
              <!--    data-controls="next"-->
              <!--    aria-controls="property"-->
              <!--    tabindex="-1"-->
              <!--    >Next</span>-->
              <!--</div>-->
<!--            </div>-->
<!--    </div>-->

    <!--@endif-->
    
    <!--put the banner here-->
     
       
        <div class="row text-left mb-5">
          <div class="col-12">
            <br>
            <h2 class="font-weight-bold text-center heading text-primary mb-4" style="font-wight:700px;">About Us</h2>
          </div>
         <p class="text-black-50">
    At HomeIreland, we make finding your dream property easier than ever. Whether you're searching for a cozy apartment in the heart of Dublin or a sprawling estate in the countryside, our extensive listings cater to every need and budget. Explore properties with ease, knowing that HomeIreland is here to help you every step of the way.
</p>
<p class="text-black-50">
    Our platform also offers a wide selection of automobiles to suit your lifestyle. From sleek city cars to rugged SUVs, HomeIreland ensures you have access to the best vehicles on the market. Find the perfect ride that matches your needs and hit the road with confidence.
</p>
<p class="text-black-50">
    In addition to real estate and automobiles, HomeIreland provides a dynamic marketplace for business advertisements. Whether you're launching a new product or promoting a service, our platform allows you to reach a wider audience. Place your ads with us and watch your business grow with HomeIreland.
</p>

        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="{{asset('website/images/hero_bg_4.jpg')}}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Quality properties</h3>
                <p class="text-black-50">
    Discover a curated selection of premium homes, apartments, and commercial spaces that meet the highest standards of quality.
  </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Top rated agents</h3>
                <p class="text-black-50">
    Our top-rated agents are dedicated professionals with extensive knowledge of the local real estate market. 
  </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Easy and safe</h3>
                <p class="text-black-50">
                 At HomeIreland, we prioritize your safety and convenience in every transaction. Our platform is designed to offer a user-friendly experience, making it easy to browse listings.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="section pt-0">-->
    <!--  <div class="container">-->
    <!--    <div class="row justify-content-between mb-5">-->
    <!--      <div class="col-lg-7 mb-5 mb-lg-0">-->
    <!--        <div class="img-about dots">-->
    <!--          <img src="{{asset('website/images/hero_bg_2.jpg')}}" alt="Image" class="img-fluid" />-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-lg-4">-->
    <!--        <div class="d-flex feature-h">-->
    <!--          <span class="wrap-icon me-3">-->
    <!--            <span class="icon-home2"></span>-->
    <!--          </span>-->
    <!--          <div class="feature-text">-->
    <!--            <h3 class="heading">Quality properties</h3>-->
    <!--            <p class="text-black-50">-->
    <!--              Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
    <!--              Nostrum iste.-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->

    <!--        <div class="d-flex feature-h">-->
    <!--          <span class="wrap-icon me-3">-->
    <!--            <span class="icon-person"></span>-->
    <!--          </span>-->
    <!--          <div class="feature-text">-->
    <!--            <h3 class="heading">Top rated agents</h3>-->
    <!--            <p class="text-black-50">-->
    <!--              Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
    <!--              Nostrum iste.-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->

    <!--        <div class="d-flex feature-h">-->
    <!--          <span class="wrap-icon me-3">-->
    <!--            <span class="icon-security"></span>-->
    <!--          </span>-->
    <!--          <div class="feature-text">-->
    <!--            <h3 class="heading">Easy and safe</h3>-->
    <!--            <p class="text-black-50">-->
    <!--              Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
    <!--              Nostrum iste.-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    
    
    
   <!-- <div class="section">-->
   <!--   <div class="container">-->
          
   <!--     <div class="row">-->
   <!--       <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">-->
   <!--         <img src="{{asset('website/images/img_1.jpg')}}" alt="Image" class="img-fluid" />-->
   <!--       </div>-->
   <!--       <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">-->
   <!--         <img src="{{asset('website/images/img_3.jpg')}}" alt="Image" class="img-fluid" />-->
   <!--       </div>-->
   <!--       <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">-->
   <!--         <img src="{{asset('website/images/img_2.jpg')}}" alt="Image" class="img-fluid" />-->
   <!--       </div>-->
   <!--     </div>-->
        
   <!--       @if(count($middleads) > 0)-->
         
   <!--<div class="row">-->
   <!--             <div class="adss-slider-wrap">-->
   <!--           <div class="adss-slider ">-->
   <!--          @foreach($middleads as $ads)-->
   <!--             <div class="adss-item " style="padding:15px;">-->
   <!--               <a href="{{url($ads->url)}}" class="img">-->
   <!--                   <div class="text-center topads">-->
   <!--                 <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" />-->
   <!--                   </div>-->
   <!--               </a>-->
   <!--             </div>-->
   <!--          @endforeach-->
                <!-- .item -->
   <!--           </div>-->

   <!--           <div-->
   <!--             id="adss-nav"-->
   <!--             class="controls"-->
   <!--             tabindex="0"-->
   <!--             aria-label="Carousel Navigation"-->
   <!--           >-->
   <!--             <span-->
   <!--               class="prev"-->
   <!--               data-controls="prev"-->
   <!--               aria-controls="adss"-->
   <!--               tabindex="-1"-->
   <!--               >Prev</span-->
   <!--             >-->
   <!--             <span-->
   <!--               class="next"-->
   <!--               data-controls="next"-->
   <!--               aria-controls="adss"-->
   <!--               tabindex="-1"-->
   <!--               >Next</span-->
   <!--             >-->
   <!--           </div>-->
   <!--         </div>-->
   <!-- </div>-->
   
   <!-- @endif        -->
        <!--<div class="row section-counter mt-5">-->
        <!--  <div-->
        <!--    class="col-6 col-sm-6 col-md-6 col-lg-3"-->
        <!--    data-aos="fade-up"-->
        <!--    data-aos-delay="300"-->
        <!--  >-->
        <!--    <div class="counter-wrap mb-5 mb-lg-0">-->
        <!--      <span class="number"-->
        <!--        ><span class="countup text-primary">2917</span></span-->
        <!--      >-->
        <!--      <span class="caption text-black-50"># of Buy Properties</span>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div-->
        <!--    class="col-6 col-sm-6 col-md-6 col-lg-3"-->
        <!--    data-aos="fade-up"-->
        <!--    data-aos-delay="400"-->
        <!--  >-->
        <!--    <div class="counter-wrap mb-5 mb-lg-0">-->
        <!--      <span class="number"-->
        <!--        ><span class="countup text-primary">3918</span></span-->
        <!--      >-->
        <!--      <span class="caption text-black-50"># of Sell Properties</span>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div-->
        <!--    class="col-6 col-sm-6 col-md-6 col-lg-3"-->
        <!--    data-aos="fade-up"-->
        <!--    data-aos-delay="500"-->
        <!--  >-->
        <!--    <div class="counter-wrap mb-5 mb-lg-0">-->
        <!--      <span class="number"-->
        <!--        ><span class="countup text-primary">38928</span></span-->
        <!--      >-->
        <!--      <span class="caption text-black-50"># of All Properties</span>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div-->
        <!--    class="col-6 col-sm-6 col-md-6 col-lg-3"-->
        <!--    data-aos="fade-up"-->
        <!--    data-aos-delay="600"-->
        <!--  >-->
        <!--    <div class="counter-wrap mb-5 mb-lg-0">-->
        <!--      <span class="number"-->
        <!--        ><span class="countup text-primary">1291</span></span-->
        <!--      >-->
        <!--      <span class="caption text-black-50"># of Agents</span>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
   <!--   </div>-->
   <!-- </div>-->
   <div class="section">
       
 <div class="row row1 justify-content-center align-items-center">
  <div class="col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="0">
    <img src="{{asset('website/images/img_1.jpg')}}" alt="Image" class="img-fluid img-custom" />
  </div>
  <div class="col-md-4 d-flex justify-content-center mt-lg-5" data-aos="fade-up" data-aos-delay="100">
    <img src="{{asset('website/images/img_3.jpg')}}" alt="Image" class="img-fluid img-custom" />
  </div>
  <div class="col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
    <img src="{{asset('website/images/img_2.jpg')}}" alt="Image" class="img-fluid img-custom" />
  </div>
</div>


  <!--@if(count($middleads) > 0)-->
  <!--<div class="adss-full-width">-->
  <!--  <div class="adss-slider-wrap">-->
  <!--    <div class="adss-slider d-flex justify-content-evenly">-->
  <!--      @foreach($middleads as $ads)-->
  <!--      <div class="adss-item" style="padding:15px;">-->
  <!--        <a href="{{url($ads->url)}}" class="img">-->
  <!--          <div class="text-center topads">-->
  <!--            <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" />-->
  <!--          </div>-->
  <!--        </a>-->
  <!--      </div>-->
  <!--      @endforeach-->
  <!--    </div>-->
  <!--  </div>-->

  <!--  <div-->
  <!--    id="adss-nav"-->
  <!--    class="controls"-->
  <!--    tabindex="0"-->
  <!--    aria-label="Carousel Navigation"-->
  <!--  >-->
  <!--    <span-->
  <!--      class="prev"-->
  <!--      data-controls="prev"-->
  <!--      aria-controls="adss"-->
  <!--      tabindex="-1"-->
  <!--      >Prev</span-->
  <!--    >-->
  <!--    <span-->
  <!--      class="next"-->
  <!--      data-controls="next"-->
  <!--      aria-controls="adss"-->
  <!--      tabindex="-1"-->
  <!--      >Next</span-->
  <!--    >-->
  <!--  </div>-->
  <!--</div>-->
  <!--@endif-->
</div>


    
    

    <div class="section sec-testimonials bg-light">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-center mb-4 mb-md-0 text-bold" style="font-size:25px;font-weight:700; ">
              The Team
            </h2>
          </div>
          <div class="col-md-6 text-md-end" style="display:none;">
            <div id="testimonial-nav">
              <span class="prev " data-controls="prev" ></span>

              <span class="next" data-controls="next"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
            <div class="item">
              <div class="testimonial">
                <img
                  src="{{asset('website/images/person_1-min.jpg')}}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">James Smith</h3>
                <p class="text-black-50">Designer, Co-founder</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="{{asset('website/images/person_2-min.jpg')}}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">Carol Houston</h3>
                <p class="text-black-50">Designer, Co-founder</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="{{asset('website/images/person_3-min.jpg')}}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">Synthia Cameron</h3>
                <p class="text-black-50">Designer, Co-founder</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="{{asset('website/images/person_4.jpg')}}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary text-bold">Davin Smith</h3>
                <p class="text-black-50">Designer, Co-founder</p>

                <p>
                  Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts.
                  Separated they live in Bookmarksgrove right at the coast of
                  the Semantics, a large language ocean.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <!--@if(count($bottomads) > 0)-->
            <!--<div style="border:1px solid grey;padding:5px;"> -->
   <!--<div class="row">-->
   <!--             <div class="bottomads-slider-wrap">-->
   <!--           <div class="bottomads-slider">-->
   <!--          @foreach($bottomads as $ads)-->
   <!--             <div class="bottomads-item">-->
   <!--               <a href="{{url($ads->url)}}" class="img">-->
   <!--                   <div class="text-center">-->
   <!--                 <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>-->
   <!--                   </div>-->
   <!--               </a>-->
   <!--             </div>-->
   <!--          @endforeach-->
                <!-- .item -->
   <!--           </div>-->

   <!--           <div-->
   <!--             id="bottomads-nav"-->
   <!--             class="controls"-->
   <!--             tabindex="0"-->
   <!--             aria-label="Carousel Navigation"-->
   <!--           >-->
   <!--             <span-->
   <!--               class="prev"-->
   <!--               data-controls="prev"-->
   <!--               aria-controls="bottomads"-->
   <!--               tabindex="-1"-->
   <!--               >Prev</span-->
   <!--             >-->
   <!--             <span-->
   <!--               class="next"-->
   <!--               data-controls="next"-->
   <!--               aria-controls="bottomads"-->
   <!--               tabindex="-1"-->
   <!--               >Next</span-->
   <!--             >-->
   <!--           </div>-->
   <!--         </div>-->
   <!-- </div>-->
   <!-- </div>-->
   <!-- @endif       -->
      </div>
    </div>
@endsection