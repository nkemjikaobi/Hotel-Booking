
<div id='footer'>
    <div class='row'>
        <div class="col-md-3 col-sm-12">
            <!---first section start-->
            <h1 id='dumia'><a href='/'>Dumia</a></h1>
            <div id='socials'>
                <a href='#'><i class="fab fa-facebook-f" style='color:#3b5998;'></i></a>
                <a href='#'><i class="fab fa-twitter" style='color:#00acee;'></i></a>
                <a href='#'><i class="fab fa-instagram" style='color:#bc2a8d;'></i></a>
                <a href='#'><i class="fab fa-whatsapp" style='color:#4FCE5D;'></i></a>
            </div>
            <p id='copywright'>Copyright © 2020</p>
        </div>
        <!---first section end-->

        <!---second section start-->
        <div class="col-md-3 col-sm-12 footer-p">
            <h1 class='footer-header'>Quick Links</h1>
            <p><a href='/about'>About Dumia</a></p>
            <p><a href='/blog'>Our Blog</a></p>
            <p><a href='/services'>Our Services</a></p>
            <p><a href='/contact'>Contact Us</a></p>
        </div>
        <!--second section end--->

         <!---third section start-->
         <div class="col-md-3 col-sm-12 footer-p">
            <h1 class='footer-header'>Reservations</h1>
            <p><a href='#'><i class="fas fa-phone-alt"></i> 234 806 291 0656</a></p>
            <p><a href='#'><i class="fab fa-skype" style='color:#00aff0;'></i> DumiaBooking</a></p>
            <p><a href='#'><i class="far fa-envelope" style='color:#ff000'></i> reservations@dumiahotel.com</a></p>
        </div>
        <!--third section end--->

         <!---fourth section start-->
         <div class="col-md-3 col-sm-12 footer-p">
            <h1 class='footer-header'>Our Location</h1>
            <p><a href='#'><i class="fas fa-map-marker-alt"></i> 198 West 21th Street,</a></p>
            <p><a href='#'><i class="fas fa-map-marker-alt"></i> Suite 721 New York NY 10016</a></p>
            <div id='ajax-alert' class='alert' style='disply:none;color:white;'></div>
            <form method='POST' action='javascript:void(0)' id='message' class='subscriber-form'>
                <div id='form-head'>
                <input type='hidden' name='_token' id='token' value='{{ csrf_token() }}'>
                    <input type='text' id='subscribe' name='email' placeholder="Email Address " style='font-family:FontAwesome !important;'>
                    <button type='submit'><!--<i class="far fa-paper-plane"></i>-->Subscribe</button>
                </div>
            </form>
        </div>
        <!--fourth section end--->

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script type='text/javascript'>
    $(function () {
        $('.subscriber-form').submit(function(e) {
            e.preventDefault(); // Prevent Default form Submission
            $.ajax({
                type:"post",
                url: '/subscribers/add',
                headers: {'X-CSRF-TOKEN': $('#token').val()},
                data: $(this).serialize(),
                success:function(response) {
                    if(response.message){
                        $('#ajax-alert').removeClass('alert alert-danger').addClass('alert alert-success').show(function(){
                            $(this).html(response.message);
                        });
                    } else if(response.error){
                        $('#ajax-alert').removeClass('alert alert-success').addClass('alert alert-danger').show(function(){
                            $(this).html(response.error);
                        });
                    }
                },
            });
        });
    });
</script>
