@extends('layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto me-0">
                    <div class="d-none d-lg-block">
                        <h2>Join the Laracus Community</h2>
                        <p>
                            <ul>
                                <li>
                                    Stuck? Ask in the Discussions
                                </li>
                                <li>
                                    Get answers from experienced developers from around the world
                                </li>
                                <li>
                                    Contribute by answering questions
                                </li>
                            </ul>
                        </p>
                    </div>
                    <div class="d-block d-lg-none fs-4 text-center">
                        Create your account in aminute. It's free.
                    </div>
                </div>
                <div class="col-12 col-lg-3 h-100">
                    <a class="nav-link mb-5 text-center" href="">
                        <img class="h-32px" src="{{url('assets/images/logo-second.png')}}" alt="logo">
                    </a>
                    <div class="card mb-5">
                        <form action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="usernamme" placeholder="name" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start" id="password" name="password">
                                    <span class="input-group-text bg-white border-start-0 pe-auto">
                                        <a href="javascript:;" id="password-toggle">
                                            <img src="{{url('assets/images/eye-slash.png')}}" alt="icon show password" id="password-toggle-img">
                                        </a>
                                    </span>
                                  </div>
                            </div>
                            <div class="mb-3 d-grid">
                                <button class="btn btn-primary rounded-2" type="submit">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        Already have an accounts ? <a class="text-underline" href=""><u>Log in</u></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection


@section('after-script')
    <script>
        let isPasswordisRevealed = false;

        $("#password-toggle").on("click", function(){
            isPasswordisRevealed = !isPasswordisRevealed;

            if(isPasswordisRevealed){
                $("#password-toggle-img").attr('src',"{{ url('assets/images/eye.png')}}");
                $("#password").attr('type',"text")
            }
            else{
                $("#password-toggle-img").attr('src',"{{ url('assets/images/eye-slash.png')}}");
                $("#password").attr('type',"password")
            }
        });
    </script> 
@endsection