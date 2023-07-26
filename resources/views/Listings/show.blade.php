<x-layout>
<br>
<br>
<br>
<br>


    
    <div class="">
        <div class="card card-profile ">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('kit-m\img\Person-icon (1).jpeg')}}" alt="image">
                
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ">
                <h3 class="mb-1 ">{{$listing['title']}} </h3>
                      
                      <h4 class="text-info">{{$listing['website']}}</h4>
                     <x-listing-tags :tagsCsv="$listing->tags"/>
                      <p class="mb-0">
                        
                        <h5 style="color:#0E6655;">Company:</h5>{{$listing['company']}}
                          <h5 style="color:#0E6655;">Location:</h5> {{$listing['location']}}
                          <h5 style="color:#0E6655;">Email:</h5> {{$listing['email']}}
                          <h5 style="color:#0E6655;">Description:</h5> {{$listing['description']}}
                          
                        </p>
                        <div class="row text-center py-3 mt-3">
                          <div class="col-12 mx-auto">
                            <button type="button" class="btn btn-light w-auto me-1 mb-0">
                            <a href="/" class=" icon-move-right"> 
                        <i class="fas fa-arrow-right text-sm ms-1 fa-rotate-180"></i> 
                       Back
                    </a>
                            </button>
                            <br>
                            <br>
                           
                    
                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0">
                    <a href="/listings/{{$listing->id}}/edit" class=" icon-move-right"> 
                      <i class="fa-thin fa-pen-to-square"></i>
                     Edit
                  </a>
                </button>
                <br>
                            <br>
                  <form method="psot" action ="/listings/{{$listing->id}}/delete">
                    @csrf
                      @method('DELETE')
                      <div class="icon-move-right">
                      <button  class=" btn bg-gradient-danger w-auto me-1 mb-0 ">
                        
                          <i class="fa-thin fa-trash"></i>
                      DELETE
                       
                     </button>
                    </div>
                  </form>
                          </div>
                        </div>
                      </a>
              </div>
            </div>
          </div>
        </div>
      </div>

     
    


</x-layout>

     
 