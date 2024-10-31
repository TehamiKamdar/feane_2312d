@extends('layout.web_main')

@section('web-section')
    @if (session('success'))
        <div class="alert alert-warning">
            {{session('success')}}
        </div>
    @endif
    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Book A Table
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="{{route('booking-store')}}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" name="number" class="form-control" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" />
                            </div>
                            <div>
                                <input type="text" name="persons" class="form-control" placeholder="How Many Persons?" />
                            </div>
                            <div>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="btn_box">
                                <button type="submit">
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->
@endsection
