@extends('blog.layouts.master-only-head')

@section('content')

    <div class="contact">
        <div class="container">

            <div class="contact-top heading">
                <h3>CONTACT</h3>
            </div>
            <div class="contact-bottom">
                <div class="map-container">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=Jhansi,+Uttar+Pradesh,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"
                        frameborder="0" style="border:0"></iframe>
                </div>

                <div class="contact-text">
                    <div class="col-md-4 contact-left">
                        <h4>Why not write to me about how you felt on reading this personal hobby blog!</h4>
                        <p>I am highly obliged that you managed to give to me a very precious time slice of your busy
                            mouse clicking schedule ;) :p</p>
                        <div class="address">
                            <div class="panel">
                                <h4>Address</h4>
                                <p>Room No - F71<br>
                                    Panchwati Bhawan,<br>
                                    Bundelkhand Institute of Technology,<br>
                                    Jhansi (UP) - 284128<br>
                                    India
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 contact-right">
                        <form method="POST" action="{{route('postContact')}}">
                            <div class="row col-sm-12">
                                <input placeholder="Name" type="text" name="name" required>
                                <input placeholder="Email" type="text" name="email" required>
                            </div>
                            <div class="row col-sm-12">
                                <input style="width: 100%;" placeholder="About Yourself(optional)" type="text"
                                       name="about">
                            </div>
                            <div class="row col-sm-12">
                                <textarea placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class="submit-btn">
                                    <input type="submit" value="SUBMIT">
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
    <!----end-contact---->
@endsection
