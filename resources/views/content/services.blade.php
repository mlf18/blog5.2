@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="service">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br>
                    vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                    <h4>Responsive</h4>					
                        <div class="icon">
                            <i class="fa fa-heart-o fa-3x"></i>
                        </div>						
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                    <h4>Multi Purpose</h4>
                    <div class="icon">
                        <i class="fa fa-desktop fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
                    <h4>Easy Customize</h4>
                    <div class="icon">
                        <i class="fa fa-location-arrow fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>					
            </div>
            
            <div class="col-md-3">
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.2s">
                    <h4>Quick Support</h4>
                    <div class="icon">
                        <i class="fa fa-laptop fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>					
            </div>
        </div>
    </div>
</div>
@endsection