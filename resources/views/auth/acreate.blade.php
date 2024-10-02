<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')
</head>
<body>
   {{-- <div>
    @include('include.header')
   </div> --}}

    <section class="login-view">
     <div class="login-box">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
        <div class="login-box-view">
        <div class="row d-flex align-items-center p-0">
              <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="img-container">
                          <img src="{{ asset('images/ht.jpg') }}" alt="">
                    </div>
              </div>
              <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6 col-12 form-view">
                   <div class="form-content">
                        <h4 class="login-title mb-3">Create an account</h4>
                   </div>
                   <div class="login-link-view mb-4">Alerady have an acoout? <span class="lg-link">Login</span></div>

                   <form action="/booking" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="confirmpassword" placeholder="Enter confirm Password" required>
                    </div>
                    <button type="submit" class="btn ternery-btn btn-block mt-3">Create Account</button>
                </form>

              </div>
            </div>
          </div>
        </div>
    </div>
</div>
        </section>

    <div>
        @include('include.script')
    </div>
</body>
</html>
