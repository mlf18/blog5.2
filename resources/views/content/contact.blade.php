@extends('layouts.app')

@section('content')
<div class="map">
    <div id="map"></div>
    <script>
        function initMap() {
            //ambil data dari database
            var data = <?php echo json_encode($locationsPeta); ?>;
            var panjangData = data.length;
            //console.log(data);
            //inisialisasi peta
            var uluru={ lat:-7.005145,lng:110.438125};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: uluru
            });
            //kondisi marker jika lebih dari 1
            if (panjangData > 1){
                for (i=0;i<panjangData;i++){
                    var infowindow = new google.maps.InfoWindow({
                        content: data[i]["nama"],
                    });
                    //console.log(data[i]);
                    var ulut={ lat:data[i]["latitude"],lng:data[i]["longitude"]};
                    var marker = new google.maps.Marker({
                    position: ulut,
                    map: map,
                    title: data[i]["nama"],
                    });
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                }
            }else{
                var infowindow = new google.maps.InfoWindow({
                    content: data["nama"],
                });
                //console.log(data);
                var ulut={ lat:data["latitude"],lng:data["longitude"]};
                var marker = new google.maps.Marker({
                position: ulut,
                map: map,
                title: data["nama"],
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtKJexfbEAvxdqLlgxcTozQv0f9TXC8io&callback=initMap">
    </script>
</div>

<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Drop Your Message</h2>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form role="form" action="{{url('/lokasi')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-4">
                    <label>Lokasi</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" name="lokasi">
                            <option value="0">Semua</option>
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
    @endsection