<!----header start-->
@include('layouts.header')
<!----header end-->

@section('title')Home @endsection

@section('content')

    <!---IMAGE SLIDERS BEGINS-->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
            <!--SLIDES BEGIN-->
        <div class="carousel-inner">
            <!--First slide-->
          <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/images/landing4.jpg" alt="First slide">
            <div class="carousel-caption" id='header-image'>
                <h1>top hotel in the city</h1>
                <p>Hotel & Resort</p>
              </div>
          </div>
          <!--Second slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/landing3.jpg" alt="Second slide">
            <div class="carousel-caption" id='header-image'>
                <h1>top hotel in the city</h1>
                <p>Hotel & Resort</p>
              </div>
          </div>
          <!--Third slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/landing6.jpg" alt="Third slide">
            <div class="carousel-caption" id='header-image'>
                <h1>top hotel in the city</h1>
                <p>Hotel & Resort</p>
              </div>
          </div>
        </div>
        <!--SLIDES END-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!--IMAGE SLIDERS ENDS--->


    <!--BOOKING BEGINS--->
    <div id='booking'>
        <form method='POST' action=''>
            <div class="container">
                <div class="row">
                    <!--FIRST ROW IN BOOKING BEGINS--->
                <div class="col-md-6 col-sm-12 booking-body">
                    <div class='booking-sub-header'>Check In Date:</div>
                    <input placeholder="&#xf073;    12/12/2020" class=" booking-date-select date" type="text" onfocus="(this.type='date')" style="font-family:FontAwesome !important;" id="date">
                </div>
                <div class="col-md-6 col-sm-12 booking-body">
                    <div class='booking-sub-header' >Check Out Date:</div>
                    <input placeholder="&#xf073;    15/12/2020" class=" booking-date-select date" type="text" onfocus="(this.type='date')" style="font-family:FontAwesome !important;" id="date">
                </div>
                <!---FIRST ROW IN BOOKING ENDS--->

                <!--SECOND ROW IN BOOKING BEGINS--->
                <div class="col-md-6 col-sm-12 booking-body">
                    <div class='booking-sub-header'>Adults:</div>
                    <select type='date' class='booking-date-select'>
                        <option value='1' class='option'>1</option>
                        <option value='2' class='option'>2</option>
                        <option value='3' class='option'>3</option>
                        <option value='4' class='option'>4</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12 booking-body">
                    <div class='booking-sub-header'>Children:</div>
                    <select type='date' class='booking-date-select'>
                        <option value='1' class='option'>1</option>
                        <option value='2' class='option'>2</option>
                        <option value='3' class='option'>3</option>
                        <option value='4' class='option'>4</option>
                    </select>
                </div>
                <!---SECOND ROW IN BOOKING ENDS--->

                <!--THIRD ROW IN BOOKING BEGINS--->
                <div class="col-md-6 col-sm-12 booking-body">
                    <div class='booking-sub-header'>Rooms:</div>
                    <select type='date' class='booking-date-select'>
                        <option value='1' class='option'>1</option>
                        <option value='2' class='option'>2</option>
                        <option value='3' class='option'>3</option>
                        <option value='4' class='option'>4</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12 booking-body">
                    <button id='booking-button'>BOOK NOW</button>
                </div>
                <!---THIRD ROW IN BOOKING ENDS--->

                </div>
            </div>
        </form>
    </div>
    <!--BOOKING ENDS--->


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

    <!---Rooms start--->
    <div id='rooms'>
        <h1>Our Rooms</h1>
        <div class="row room-header">
            <!--individual rooms start--->
            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/single-bed.jpg' class='img-fluid'>
                        <h2>Single Bed</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/double-bed.jpg' class='img-fluid'>
                        <h2>Double Bed</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/standard.jpg' class='img-fluid'>
                        <h2>Standard</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/queen-size.jpg' class='img-fluid'>
                        <h2>Queen size</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/king-size-bed.jpg' class='img-fluid'>
                        <h2>King size</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 room-margin">
                <div class='room-border'>
                    <a href='#'>
                        <img src='/storage/images/suite.jpg' class='img-fluid'>
                        <h2>Suite</h2>
                        <p id='room-price'><sup>$</sup>150<span>  /  night</span></p>
                    </a>
                </div>
            </div>
            <!---individual rooms end--->
            <div id='view-more'>
                <a href='#' id='view-more-butto'>View More  ></a>
            </div>
        </div>
    </div>
    <!---Rooms end---->
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
