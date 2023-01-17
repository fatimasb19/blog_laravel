@extends('layouts.app')


@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">Add new Posts</h1>
</div> 
  
<div class="container m-auto text-center pt-15 pb-5">
    <form action="/blog" method="POST"
     enctype="multipart/form-data">
     @csrf
        <input 
            type="text"
            name="title"
            placeholder="Title"
            class=" w-3/5 w3-border  h-15 text-4xl rounded-lg shadow-lg border-b p-15 mb-5"
        >
       
            <textarea 
                name="description"
                placeholder="Description"
                 class="  w-3/5 h-60 text-4xl  rounded-lg shadow-lg border-b p-13 mb-5"></textarea>
       

        <div class="w-2/3
        items-center p-15  mb-5">
            <label
                class="
                bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 
                    transition duration-300
                    cursor-pointer
                    p-15 rounded-lg
                    font-blod uppercase
                "
            >
                <span>Select an image to upload</span>
                <input type="file" name="image" class="hidden">
                
            </label>    
        </div > 
        <div class="w-1/1.5  p-10">
            <button 
            type="submit" 
            class="bg-gray-700 hover:bg-gray-200 text-green-700 hover:text-gray-700  transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">
                Add the post
              </button>
        </div>
    </form>
</div> 


@endsection