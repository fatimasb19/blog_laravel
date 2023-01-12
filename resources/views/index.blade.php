@extends('layouts.app')




@section('content')
   

    
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl upperacase font-bold pb-10 text-center">Welcome to my Blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-10">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
        </div>

        <div class="flex flex-col items-left justify-center m-10  sm:m-0">
            <h2 class="font-blod text-gray-700 text-4xl uppercase">How to be an expert in 2023</h2>
            <p class="font-blod text-gray-600 text-xl pt-2">
                YOU can find a list of all programming
            </p>

            <p class="py-4 text-gray-500 text-sm leading-5">
                Get the same random image every time based on a seed, by adding /seed/{seed} to the start of the url.
            </p>

            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start"> Read More </a>
        </div> 
        
    </div>
    
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl"> Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <span class="font-blod text-2xl py-2">UX Design</span>
            <span class="font-blod text-2xl py-2">Programming</span>
            <span class="font-blod text-2xl py-2">Graphoc Design</span>
            <span class="font-blod text-2xl py-2">Front-End</span>
        
        </div>
    </div>   
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            Il n'est pas conseillé de toujours travailler connecté en tant que 
            root. Il est préférable de disposer d'un compte ordinaire et 
            d'exécuter la commande su  sous des éclairages différents, ou encore pour mesurer certaines propriétés sur
            une image, on modifie souvent l'histogramme correspondan
        </p>
    </div>   
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                

                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>

                </ul>



                <h3 class="text-l py-10 leading-6">
                    Pour diminuer l'erreur de quantification, pour comparer deux images obtenues
sous des éclairages différents, ou encore pour mesurer certaines propriétés sur
une image, on modifie souvent l'histogramme correspondan
                </h3>

                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>


        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>    
    </div>
    
@endsection
