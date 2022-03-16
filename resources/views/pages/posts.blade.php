<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div class="row">
         <div class="col-lg-8 mx-auto">
             <div class="row">
                 <div class="col-lg-12">
                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                </div>
        <div class="col-lg-12">
                 <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Message"></textarea>
                </div>
                 <button type="submit" class="btn btn-primary">Save</button>
                </div>

</form>
<div class="row">
    <div class="col-12 text-center py-5">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <h1>Post</h1>
        <div class= "row">
            <div class= "col-8 mx-auto">
                <table class= "table">
    <tr>
        <td>Subject</td>
        <td>Message</td>
        <td>Action</td>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->subject}}</td>
        <td>{{$post->message}}</td>
      <td>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success">Edit</a>
        <form action = "{{route('posts.destroy', $post->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button href="" class="btn btn-danger">Delete</a>
</form>
                                </td>
                            </tr>
                         @endforeach
                    </table>
                </table>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
