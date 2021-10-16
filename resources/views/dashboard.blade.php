<x-app-layout>


    <div class="py-12 px-10">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach($posts as $post)
            <div class="col">
               <div class="bg-white rounded-xl px-4 py-3">
                <div>
                    <div class="inline-flex gap-3 items-center mb-2">
                        <i class="fas fa-user"></i>
                        <p>user {{$post['userId']}}</p>
                    </div>
                    <h1 class="font-bold text-xl">{{Str::limit($post['title'],52,'...')}}</h1>
                    <div class="mt-2">
                        <a class="text-primary font-semibold" href="{{url('post/'.$post['id'].'')}}">
                            Read More
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>

               </div>
            </div>
            @endforeach
            
        </div>
    </div>
</x-app-layout>