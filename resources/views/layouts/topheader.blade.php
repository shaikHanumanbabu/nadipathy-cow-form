<div class="container-fluid px-0" style="background-color: #34AD54;">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-7 ps-4 text-start">
            <div class="h-100 d-inline-flex align-items-center text-light">
                <!-- <span>Follow Us:</span> -->
                <a class="btn appoint" href="#" data-bs-toggle="modal" data-bs-target="#appointment">Get an Appointment</a>
                <a class="btn btn-link text-light whatsapp" href="https://chat.whatsapp.com/ENOG6QfzbLF0xtdnx7GL4q" target="_blank"><i class="fab fa-whatsapp  px-1 py-1"></i> Join our Whatsapp Group</a>
                <!--<a class="btn btn-link text-light smediafb" href="https://www.facebook.com/Punganurcowsgoshala" target="_blank"><i class="fab fa-facebook-f"></i></a>-->
                <!--<a class="btn btn-link text-light smediayt" href="https://www.youtube.com/c/PunganurCowsGoshala" target="_blank"><i class="fab fa-youtube"></i></a>-->
                <!--<a class="btn btn-link text-light smediayt" href="https://www.youtube.com/channel/UCtpi28I5BpZV2WQdHNxiv5w" target="_blank"><i class="fab fa-youtube"></i></a>-->
                <!--<a class="btn btn-link text-light smediayt" href="https://www.youtube.com/@Minicows" target="_blank"><i class="fab fa-youtube"></i></a>-->
                <!--<a class="btn btn-link text-light smediayt" href="https://www.youtube.com/@Miniaturecows" target="_blank"><i class="fab fa-youtube"></i></a>-->
                <!--<a class="btn btn-link text-light smediains" href="https://www.instagram.com/punganurucows/?utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>-->
                <a href="{{ url('awards-rewards') }}" class="btn appoint">{{__('messages.awards')}}</a>
                <a href="{{ url('events-info') }}" class="btn appoint">Events</a>
                {{-- <div class="nav-item dropdown" style="z-index: 9999; margin-left: 10px;">
                    <a href="#" class="nav-link dropdown-toggle bg-primary text-light" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"></path>
                            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"></path>
                        </svg> {{__('messages.language')}}
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url("/?lang=en") }}" class="dropdown-item">English</a>
                        <a href="{{ url("/?lang=hin") }}" class="dropdown-item">हिंदी</a>
                        <a href="{{ url("?lang=te") }}" class="dropdown-item">తెలుగు</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-5 text-end">
            <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-3">
                <span class="me-2 fw-semi-bold"><i class="fa fa-phone me-2"></i>Call Us:</span>
                <span>08885011320</span>
            </div>
            <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-3">
                <span class="me-2 fw-semi-bold"><i class="fa fa-phone me-2"></i>For Hindi:</span>
                <span>08885011321</span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="appointment" tabindex="-1" aria-modal="true" role="dialog" style="display: {{ session('appointment_success') || $errors->any() ? 'block' : 'none' }};">
    <div class="modal-dialog modal-dialog-centered">
        
        <div class="modal-content" style="padding: 25px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit Your Details</h5>
                
            </div>
            
            <div class="modal-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <a href="#" class="alert-link">{{$error}}</a><br>
                @endforeach
            </div>
        @endif
        <form class="row g-3" method="POST" action="{{ route('store-appointment') }}">
            @csrf
            
            @if (session('appointment_success'))
            <div class="alert alert-success">
                <strong>{{ session('appointment_success') }}</strong>
              </div>
            @endif
            <div class="col-md-12 mb-1">
            <input type="text" required class="form-control" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
            </div>
            <div class="col-md-12 mb-1">
            <input type="number" required class="form-control" id="phone_number" name="phone_number" placeholder="Your Mobile Number"  value="{{ old('phone_number') }}">
            </div>
            <div class="col-md-12 mb-1">
            <input type="email" required class="form-control" id="email" name="email" placeholder="Your Email ID" value="{{ old('email') }}">
            </div>
            <div class="col-md-12 mb-1">
            <input type="text" required class="form-control" id="address" name="address" placeholder="Your Place" value="{{ old('address') }}">
            </div>

            <div class="form-group">
                <label for="id_start_datetime">Select your date of visiting</label>
                <div class="input-group date" id="id_0">
                    <input type="text" required value="{{ $errors->has('visiting_datetime') ? old('visiting_datetime') :  '05/16/2018 12:31:00 AM'}}" name="visiting_datetime" class="form-control" required/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
                <p><b>Note:</b> <br>
                    Visiting Days are available on Monday to Thursday and Timings are 3.00 pm to 6.00 pm only 
                    </p>
            </div>
            {{-- <div class="col-md-12 mb-1">
            <label for="">Select your date of visiting</label>
            <input type="datetime-local" class="form-control" id="datee" name="visiting_datetime" value="{{ $errors->has('visiting_datetime') ? old('visiting_datetime') :  ''}}" placeholder="Appointment Date">
            </div> --}}
            
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>

            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            </div>
        </form>
        </div>
        </div>
    </div>
    </div>