@extends('client.layout.main')
@section('content')
    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
        <div class="icon-list">
            <div class="icon icon-1">
                1
            </div>
            <div class="icon icon-2">
                2
            </div>
            <div class="icon icon-3">
                3
            </div>
            <div class="icon icon-4">
                4
            </div>
            <div class="icon icon-5">
                5
            </div>
        </div>
    </div>
    <!-- Map Section End -->

    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-buy" checked>
                                    <label for="st-buy">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-rent">
                                    <label for="st-rent">Rent</label>
                                </div>
                            </div>
                            <select>
                                <option value="">Locations</option>
                            </select>
                            <select>
                                <option value="">Status</option>
                            </select>
                            <select>
                                <option value="">No of Bedroom</option>
                            </select>
                            <select>
                                <option value="">No of Bathrooms</option>
                            </select>
                            <select>
                                <option value="">No of Guest</option>
                            </select>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP" readonly>
                                </div>
                                <div id="roomsize-range-P" class="slider"></div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly>
                                </div>
                                <div id="price-range-P" class="slider"></div>
                            </div>
                            <button type="submit" class="search-btn">Search Property</button>
                        </form>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{ asset('client/img/properties/best-agent') }}-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{ asset('client/img/properties/best-agent') }}-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="{{ asset('client/img/properties/best-agent') }}-3.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Sophia Cole</h5>
                                    <span>Marketing & Ceo</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4 class="property-title">{{ $title }}</h4>
                    <div class="property-list">
                        @foreach ($service as $el)
                            <div class="single-property-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="property-pic">
                                            <img src="{{ asset('client/img/properties/property-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="property-text">
                                            {{-- <div class="s-text">For Sale</div> --}}
                                            <h5 class="r-title"><a href="{{ route('service-detail', $el->id) }}"
                                                    style="color:black">
                                                    {{ $el->house_name }}</a></h5>
                                            <div class="room-price">
                                                @if ($el->service->slug != 'bao-tri')
                                                    <span>Giá:</span>
                                                    <h5>{{ $el->house_name }}</h5>
                                                @else
                                                    <span>Lượt xem:</span>
                                                    <h5>{{ $el->viewer }}</h5>
                                                @endif
                                            </div>
                                            <div class="room-price">
                                                <span>Loại hình:</span>
                                                <h5>{{ $el->service->name }}</h5>
                                            </div>
                                            @if ($el->service->slug != 'bao-tri')
                                                <div class="properties-location"><i class="icon_pin"></i>
                                                    {{ $el->address }}</div>
                                                <ul class="room-features">
                                                    <li>
                                                        <i class="fa fa-arrows" data-toggle="tooltip" data-placement="top"
                                                            title="Diện tích nhà" data-original-title=""></i>
                                                        <p>{{ $el->area }} m<sup>2</sup></p>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bed" data-toggle="tooltip" data-placement="top"
                                                            title="Phòng ngủ" data-original-title=""></i>
                                                        <p>{{ $el->number_of_bedrooms }} Phòng</p>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-arrows-alt" data-toggle="tooltip"
                                                            data-placement="top" title="Diện tích phòng"
                                                            data-original-title=""></i>
                                                        <p>{{ $el->area_bedrooms }} m<sup>2</sup></p>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        {{ $service->onEachSide(2)->links('client.pagination.index') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section">
        <div class="container">
            <div class="partner-carousel owl-carousel">
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{ asset('client/img/partner/partner-1.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{ asset('client/img/partner/partner-2.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{ asset('client/img/partner/partner-3.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{ asset('client/img/partner/partner-4.png') }}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{ asset('client/img/partner/partner-5.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Partner Carousel Section End -->
@endsection
