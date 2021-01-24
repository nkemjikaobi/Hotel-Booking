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
        text-align: right !important;
    }
    #about-section{
        margin-top: 80px;
    }
   .contact-box{
       margin-top: 60px !important;
       margin-bottom:400px !important;
       padding: 35px;
       margin-left: 35px;
   }
   .contact-box h2{
       line-height: 1.5em;
       font-size:25px;
       font-weight: bold;
   }
   textarea{
       padding:15px;
       width:100%;
       height: 190px;
       margin-bottom: 25px;
       border:1px solid rgb(170, 167, 167);
   }
   .name-email{
        width: 45.75% !important;
        margin-bottom: 25px;
        border:1px solid rgb(170, 167, 167);
   }
   .email{
       margin-left:50px !important;
   }
   input[type='text']{
    border:1px solid rgb(170, 167, 167);
   }
   ::placeholder{
    color:lightgray;
}
   .subject{
       width: 100% !important;
       margin-bottom: 30px;
   }
   input[type='submit']{
       border: 1px solid #dca73a;
       padding:12.5px;
       color:#dca73a;
       width:140px;
       height: 50px;
       background: white;
       font-size:18px;
       text-align: center;
   }
   input[type='submit']:hover{
       color: white;
       background: #dca73a;
   }
   .contact-aside{
       margin-top:40px;
       line-height: 1.5em;
   }
   .icon-name{
       font-size: 24px;
       color:#dca73a;
       margin-right:15px;
   }
   .icons{
       margin-bottom:40px;
       display: flex;
   }
   .icons h3{
    font-size:16px;
   }
   .icons h3 p{
       color: gray;
       font-size:14px;
   }





/*  Mobile Devices */
@media only screen and (min-width: 320px) and (max-width: 480px) {
    .contact-box{
       margin-top: -200px !important;
       margin-bottom:100px !important;
       padding: 15px;
       margin-left: 5px !important;
   }
   .name-email{
        width: 100% !important;
        margin-bottom: 25px;
   }
   .email{
       margin-left:0px !important;
   }
   input[type='text']{
    border:1px solid rgb(170, 167, 167);
   }
   ::placeholder{
    color:lightgray;
}
   .subject{
       width: 100% !important;
       margin-bottom: 30px;
   }
   input[type='submit']{
       border: 1px solid #dca73a;
       padding:12.5px;
       color:#dca73a;
       width:140px;
       height: 50px;
       background: white;
       font-size:18px;
       text-align: center;
   }
   input[type='submit']:hover{
       color: white;
       background: #dca73a;
   }
   .contact-aside{
       margin-top:40px;
       line-height: 1.5em;
   }
   .icon-name{
       font-size: 24px;
       color:#dca73a;
       margin-right:15px;
   }
   .icons{
       margin-bottom:40px;
       display: flex;
   }
   .icons h3{
    font-size:16px;
   }
   .icons h3 p{
       color: gray;
       font-size:14px;
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
            <img class="d-block w-100" src="/storage/images/contact.jpg" alt="First slide">
            <div class="carousel-caption" id='header-image'>
                <h1>Contact</h1>
              </div>
          </div>
        </div>
        <!---SLIDES END-->
    </div>
    <!--IMAGE SLIDERS ENDS--->


     <!---two column section with swimming pool start-->
        <div class='contact-box'>
            <div class="row">
                <!--swimming pool start-->
                <div class="col-md-8 col-sm-12">
                    <h2>Get in Touch</h2>
                    @include('inc.messages')
                    <form method='POST' action='/contact'>
                        @csrf

                        <textarea placeholder="Enter Message" name='message' required></textarea>
                        <input type='text' class='name-email' name='name' placeholder='Enter your name' required>
                        <input type='text' class='name-email email' name='email' placeholder='Enter your email' required>
                        <input type='text' class='subject' name='subject' placeholder='Enter Subject' required><br>
                        <input type='submit' value='SEND'>
                    </form>
                </div>
                <!---swimming pool end--->
                <!--image start--->
                <div class="col-md-4 col-sm-12 contact-aside" >
                    <div class='icons'><i class="fas fa-map-marker-alt icon-name"></i><h3>Buttonwood,<br> Carlifonia<p>Rosemead, CA 91770</p></h3></div>
                    <div class='icons'><i class="fas fa-phone-alt icon-name"></i><h3>+1 253 565 2365<p>Mon to Fri 9am to 6pm</p></h3></div>
                    <div class='icons'><i class="far fa-envelope icon-name" style='color:#ff000'></i><h3>support@dumia.org<p>Send us your query anytime!</p></h3></div>
                </div>
                <!--image end--->

            </div>
        </div>
<!---two column section with about ends-->

<!---footer start-->
@include('layouts.footer')
<!---footer end-->
