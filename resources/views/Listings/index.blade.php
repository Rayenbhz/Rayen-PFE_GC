<x-layout>
@include('partials._hero')

@unless (count($listings)==0)

<section class="pb-5 position-relative bg-gradient-dark mx-n3">
<div class="container">
  <div class="row">
    <div class="col-md-8 text-start mb-4 mt-4">
      <h3 class="text-white z-index-1 position-relative">Latest Listings</h3>
      <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
    </div>
  </div>
  <div class="row">
@foreach ($listings as $listing)


<div class="col-lg-6 col-12">
  <div class="card card-profile mt-lg-4 mt-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 mt-n5">
        <a href="javascript:;">
          <div class="p-3 pe-md-0">
            <img class="w-100 border-radius-md shadow-lg" src="{{$listing->logo ? asset('storage/' .$listing->logo): asset('kit-m\img\Person-icon (1).jpeg')}}" alt="image">
          
          </div>
        </a>
      </div>
      <div class="col-lg-8 col-md-6 col-12 my-auto">
        <div class="card-body ps-lg-0">
          <h3 class="mb-1 ">{{$listing['title']}} </h3>
                
                <h4 class="text-info">{{$listing['website']}}</h4>
               <x-listing-tags :tagsCsv="$listing->tags"/>
                <p class="mb-0">
                  
                  <h5 style="color:#0E6655;">Company:</h5>{{$listing['company']}}
                    <h5 style="color:#0E6655;">Location:</h5> {{$listing['location']}}
                    <h5 style="color:#0E6655;">Email:</h5> {{$listing['email']}}
                    
                  </p>
                
                <br><a class="btn btn-outline-info mb-0" href="listings/{{$listing['id']}}" >More 
                  <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
        </div>
      </div>
    </div>
  </div>
</div>

    


      
     
    
  
    
      
      
    

  
@endforeach
<div class="mt-6 p-4">
  {{$listings->links("pagination::bootstrap-4")}}
</div>
</div>

 
</div>
</section>



     
 @else
  <p>No listings found</p>   
   
@endunless
</x-layout>