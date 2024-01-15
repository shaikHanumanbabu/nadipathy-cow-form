@extends('admin-layouts.admin')

@section('content')
<main style="background-image: url(assets/img/login-bg.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo-white.png" alt="Nadipathy Goshala">
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pb-2">
                                    <h5 class="card-title text-center pb-0 mb-3 fs-4">Update PASSWORD</h5>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <a href="#" class="alert-link">{{$error}}</a><br>
                                        @endforeach
                                    </div>
                                @endif

                                <form class="row g-3" action="{{route('admin.updatepassword')}}" method="POST">
                                    @csrf
                                    <div class="col-md-12 mb-3">
                                        <input type="password" class="form-control" name="password" id="emailid"
                                            placeholder="Enter password">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <input type="password" class="form-control" name="password_confirmation" id="emailid"
                                            placeholder="Re-enter password">
                                    </div>
                                    {{-- <div class="col-md-12 mb-3">
                                        <input type="number" class="form-control"
                                            id="changepassword" placeholder="Change Password">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control"
                                            id="confirmpassword" placeholder="Confirm Password">
                                    </div> --}}
                                    <div class="text-right" style="text-align: right;">
                                        <button type="submit"
                                            class="btn btn-primary">Submit</button>
                                            


                                    </div>
                                </form>

                                <div class="col-6" style="text-align:right">
                                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#forgotpw">Forgot
                                        Password?</a> --}}
                                    <div class="modal fade" id="forgotpw" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content" style="padding: 30px;">

                                                {{-- <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div> --}}
                                                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->
                                </div>

                            </div>
                        </div>

                        <div class="credits">
                            Powered by <a href="http://leo9.in/" target="_blank">Leo9.in</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
@endsection
