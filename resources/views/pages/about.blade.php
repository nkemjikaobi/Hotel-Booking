<!----header start-->
@include('layouts.header')
<!----header end-->

@section('title') Home @endsection

@section('content')

<!----styles start-->
<style>
    .carousel-item{
        height:70vh;
    }
    #header-image{
        display:block !important;

    }
    #header-image h1{
        text-align: left !important;
    }
    #about-section{
        margin-top: 80px;
    }
    #dining-section{
        margin-top: -270px;
    }



/*  Mobile Devices */
@media only screen and (min-width: 320px) and (max-width: 480px) {
    #about-section{
        margin-top:-170px !important;
    }
}
</style>
<!-----styles end-->

    <!---IMAGE SLIDERS BEGINS-->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <!--SLIDES BEGIN-->
        <div class="carousel-inner">
            <!--First slide-->
          <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/images/about.jpg" alt="First slide">
            <div class="carousel-caption" id='header-image'>
                <h1>About</h1>
              </div>
          </div>
        </div>
        <!---SLIDES END-->
    </div>
    <!--IMAGE SLIDERS ENDS--->

    <!---two column section with about start-->
    <div id ='about-section'>
            <div class="row">
                <!--image start--->
                <div class="col-md-7 col-sm-12">
                    <!--<div class='about-div'></div>--->
                    <img src="storage/images/section2.jpg" alt='hotel lobby' class='img-fluid about-image'>
                    <!--<div class='about-button'>7 Years of Service Experience</div>-->
                </div>
                <!--image end--->

                <!--about us start-->
                <div class="col-md-5 col-sm-12 about">
                    <h3>About Us</h3>
                    <h2>Make the customer the hero of your story</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita voluptatibus iusto molestias nihil ab, asperiores, ad aspernatur quae eum aut deserunt eligendi vel minima eaque vitae fuga aliquid quos sunt, adipisci nam modi. Et sunt nesciunt culpa eius, aperiam voluptatem sapiente in odio commodi, suscipit, aliquam expedita itaque minima ab libero vel eum doloribus architecto? Fugit ut vero accusamus laudantium?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, id praesentium dolor aut rem officia exercitationem hic quidem incidunt maiores explicabo facilis mollitia enim recusandae tempore impedit voluptatum? Provident nam aspernatur ad harum odio maxime suscipit repudiandae! Perspiciatis recusandae ex natus eos fugit. Modi in eveniet pariatur id, ullam officia sunt necessitatibus magni culpa quis odit sapiente corporis excepturi odio vero libero dolor sequi deleniti repellat dicta temporibus expedita ipsum!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dicta. Sint voluptas at quos quae laboriosam tempora odio corporis ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, expedita.
                    </p>
                    <a href='#' id='learn-more-button'>Learn More</a>
                </div>
                <!---about us end--->

            </div>
        </div>
    <!---two column section with about ends-->

    <!---Dining start--->
    <div id ='dining-section'>
        <div class="row">
            <!--image start--->
            <div class="col-md-7 col-sm-12">
                <!--<div class='about-div'></div>--->
                <img src="storage/images/restaurant.jpg" alt='hotel lobby' class='img-fluid about-image'>
                <!--<div class='about-button'>7 Years of Service Experience</div>-->
            </div>
            <!--image end--->

            <!--about us start-->
            <div class="col-md-5 col-sm-12 dining">
                <h3>Our Restaurant</h3>
                <h2>Dining & Drinks</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita voluptatibus iusto molestias nihil ab, asperiores, ad aspernatur quae eum aut deserunt eligendi vel minima eaque vitae fuga aliquid quos sunt, adipisci nam modi. Et sunt nesciunt culpa eius, aperiam voluptatem sapiente in odio commodi, suscipit, aliquam expedita itaque minima ab libero vel eum doloribus architecto? Fugit ut vero accusamus laudantium?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, id praesentium dolor aut rem officia exercitationem hic quidem incidunt maiores explicabo facilis mollitia enim recusandae tempore impedit voluptatum? Provident nam aspernatur ad harum odio maxime suscipit repudiandae! Perspiciatis recusandae ex natus eos fugit. Modi in eveniet pariatur id, ullam officia sunt necessitatibus magni culpa quis odit sapiente corporis excepturi odio vero libero dolor sequi deleniti repellat dicta temporibus expedita ipsum!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dicta. Sint voluptas at quos quae laboriosam tempora odio corporis ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, expedita.
                </p>
                <a href='#' id='learn-more-button-dining'>Learn More</a>
            </div>
            <!---about us end--->

        </div>
    </div>
    <!---Dining end--->

     <!---two column section with swimming pool start-->
     <div id ='swimming-pool-section'>
        <div class="row">
             <!--swimming pool start-->
             <div class="col-md-5 col-sm-12 swimming">
                <h3>Our Pool</h3>
                <h2>Swimming Pool</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita voluptatibus iusto molestias nihil ab, asperiores, ad aspernatur quae eum aut deserunt eligendi vel minima eaque vitae fuga aliquid quos sunt, adipisci nam modi. Et sunt nesciunt culpa eius, aperiam voluptatem sapiente in odio commodi, suscipit, aliquam expedita itaque minima ab libero vel eum doloribus architecto? Fugit ut vero accusamus laudantium?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, id praesentium dolor aut rem officia exercitationem hic quidem incidunt maiores explicabo facilis mollitia enim recusandae tempore impedit voluptatum? Provident nam aspernatur ad harum odio maxime suscipit repudiandae! Perspiciatis recusandae ex natus eos fugit. Modi in eveniet pariatur id, ullam officia sunt necessitatibus magni culpa quis odit sapiente corporis excepturi odio vero libero dolor sequi deleniti repellat dicta temporibus expedita ipsum!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dicta. Sint voluptas at quos quae laboriosam tempora odio corporis ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, expedita.
                </p>
                <a href='#' id='learn-more-button-swimming'>Learn More</a>
            </div>
            <!---swimming pool end--->
            <!--image start--->
            <div class="col-md-7 col-sm-12" id='swimming-img-div'>
                <!--<div class='about-div'></div>--->
                <img src="storage/images/pool.jpg" alt='hotel lobby' class='img-fluid about-image'>
                <!--<div class='about-button'>7 Years of Service Experience</div>-->
            </div>
            <!--image end--->

        </div>
    </div>
<!---two column section with about ends-->

<!---three column image catalogue start--->



<!---three column image catalogue end--->

<!---footer start-->
@include('layouts.footer')
<!---footer end-->
