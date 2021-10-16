<x-app-layout>
    
    <div class="container relative py-24 mx-auto ">
    <a href="{{url('dashboard')}}" class="px-5 py-3 bg-yellow-400 text-white font-semibold rounded-xl absolute left-0 top-5">
        <i class="fas fa-long-arrow-alt-left"></i>
        Back
    </a>
        <!-- start: Konten -->
        <div class="shadow-2xl bg-white mx-0 md:mx-24 lg:mx-52 2xl:mx-80 rounded pb-5">
            <div class="py-10 px-6 md:px-24">

                <!-- start: Header konten -->
                <h1 class="font-bold text-3xl md:text-5xl mb-3">{{$postRes['title']}}</h1>

                <div class="flex mb-2 my-5 mb-9 justify-between">
                    <div class="inline-flex items-center gap-2">
                        <div class="inline-flex items-center">
                            <i class="fas fa-user text-lg"></i>
                            <p class="text-gray-400 font-thin">By: User {{$postRes['userId']}}</p>
                        </div>
                    </div>
                </div>
                <!-- end: Header konten -->

                <!-- start: Body konten -->
                <div class="text-gray-600 tracking-wider leading-relaxed text-xl ">
                    {{$postRes['body']}}
                </div>
                <!-- end: Body konten -->
            </div>

            <hr>

            <!-- start: Comments -->
            <p class="text-5xl font-thin text-center pt-4">Comments</p>
            @foreach($comRes as $comment)
            <div class="mx-10 py-4 px-10 mt-5 shadow">
                <div>
                    <div class="inline-flex items-center gap-3">
                        <i class="fas fa-user text-xl"></i>
                        <p class="font-semibold text-3xl">{{$comment['name']}}</p>
                    </div>
                    <p class="font-light text-gray-500">{{$comment['email']}}</p>
                </div>
                <div class="mt-3">
                {{$comment['body']}}
                </div>
            </div>
            @endforeach

            <!-- end: Coments -->
        </div>
        <!-- end: Konten -->

    </div>
</x-app-layout>