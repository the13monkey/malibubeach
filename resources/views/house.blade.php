@extends('layouts.header')

@section('content')

<main role="main">
        <div class="jumbotron full-height overflow-hidden mb-0 d-flex align-items-center bg-transparent">
            <div class="container text-center" style="margin-top: -2rem;">
                <h1 class="display-4 mb-0 pb-0 text-dark font-weight-bold">Private Oceanfront House for Sale</h1>
                <p class="display-5 text-dark font-weight-bold">Malibu Beach, California</p>
                <p class="display-5 text-dark font-weight-bold">John@Doe.com | (123) 456 - 7890</p>
            </div>
        </div>
        <div class="video-container" id="house">
            <video playsinline autoplay muted loop class="video">
                <source src="{{ asset('img/house.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row pt-5">
                <div class="col-md col-lg-9">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/roomsample1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/roomsample2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/roomsample3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="list-group">
                        <div class="w-100 list-group-item border-0">
                            <h3 class="mb-3 mt-5">Description</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum </p>
                        </div>
                        <div class="w-100 list-group-item border-left-0 border-right-0 border-top-0">
                            <h3 class="mb-3 mt-5">Further Information</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum </p>
                            </div>
                    </div>
                </div>
                <div class="col-md col-lg-3">
                    <h3 class="border-bottom pb-4">Documents</h3>
                    <ul class="list-group">
                        <li class="list-group-item border-0 pl-0 mb-2"><i class="fas fa-2x fa-file-download mr-3 text-muted"></i>Plat Map</li>
                        <li class="list-group-item border-0 pl-0 mb-2"><i class="fas fa-2x fa-file-download mr-3 text-muted"></i>Lot Comparatives</li>
                        <li class="list-group-item border-0 pl-0 mb-2"><i class="fas fa-2x fa-file-download mr-3 text-muted"></i>Lot Septic Setback</li>
                        <li class="list-group-item border-0 pl-0 mb-2"><i class="fas fa-2x fa-file-download mr-3 text-muted"></i>Certificate of Compliance</li>
                        <li class="list-group-item border-0 pl-0 mb-2"><i class="fas fa-2x fa-file-download mr-3 text-muted"></i>Percolation Test Core Samples</li>
                    </ul>
                </div>
            </div>
        </div> 
    </main>

@endsection

