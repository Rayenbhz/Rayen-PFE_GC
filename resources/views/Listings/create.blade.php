<x-layout>
   
<br>
   
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url({{url('kit-m/assets/img/illustrations/illustration-signin.jpg')}}); background-size: cover;" loading="lazy"></div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                    <h3 class="text-white text-primary mb-0">CREATE A JOB</h3>
                  </div>
                </div>
                <div class="card-body">
                  <p class="pb-3">
                    Post a job to find a developer.
                  </p>
                  <form id="contact-form" method="post" autocomplete="off" enctype="multipart/form-data" action="/listings">
                    @csrf
                    <div class="card-body p-0 my-3">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                            <label>Company Name</label>
                            <input type="text"  class="form-control" placeholder="Full Name" name="company" value="{{old('company')}}">
                            @error('company')
                            <p class="text-red-500 text-xs mt1">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6 ps-md-2">
                          <div class="input-group input-group-static mb-4">
                            <label>Job Title</label>
                            <input type="text" value="{{old('title')}}" class="form-control" placeholder="Title" name="title">
                            @error('title')
                            <p class="text-red-500 text-xs mt1">{{$message}}</p>
                            @enderror  
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                            <label>Job Location</label>
                            <input type="text" value="{{old('location')}}" class="form-control" placeholder="Example; Djerba,Tunis,etc" name="location">
                            @error('location')
                            <p class="text-red-500 text-xs mt1">{{$message}}</p>
                            @enderror  
                        </div>
                        </div>
                        <div class="col-md-6 ps-md-2">
                            <div class="input-group input-group-static mb-4">
                              <label>Contact Email</label>
                              <input type="Email" value="{{old('email')}}" class="form-control" placeholder="hello@PFE_GC.com" name="email">
                              @error('email')
                              <p class="text-red-500 text-xs mt1">{{$message}}</p>
                              @enderror 
                          </div>
                          </div>
                        <div class="col-md-6 ps-md-2">
                          <div class="input-group input-group-static mb-4">
                            <label>Website</label>
                            <input type="text" value="{{old('website')}}" class="form-control" placeholder="Website Name" name="website">
                            @error('website')
                            <p class="text-red-500 text-xs mt1">{{$message}}</p>
                            @enderror 
                        </div>
                        </div>
                        <div class="col-md-6 ps-md-2">
                            <div class="input-group input-group-static mb-4">
                              <label>Tags(Comma Separated)</label>
                              <input type="text" value="{{old('tags')}}" class="form-control" placeholder="Example: Laravel, Backend, Postger,etc" name="tags">
                              @error('tags')
                              <p class="text-red-500 text-xs mt1">{{$message}}</p>
                              @enderror
                            </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="input-group input-group-static mb-4">
                              <label>Company logo</label>
                              <input type="file" class=" border-gray-200 rounded p-2 w-full" name="logo" >
                              @error('logo')
                              <p class="text-red-500 text-xs mt1">{{$message}}</p>
                              @enderror
                            </div>
                          </div>
                      
                      <div class="form-group mb-0 mt-md-0 mt-4">
                        <div class="input-group input-group-static mb-4">
                          <label> Description</label>
                          <textarea  class="form-control" rows="6" placeholder="Describe your job in at least 250 characters" name="description">
                            {{old('description')}}
                          </textarea>
                          @error('description')
                          <p class="text-red-500 text-xs mt1">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Create Job</button>
                        </div>
                      </div>
                      <a href="/" class="text-info icon-move-right"> 
                        <i class="fas fa-arrow-right text-sm ms-1 fa-rotate-180"></i> 
                       Back
                    </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     
       

</x-layout>