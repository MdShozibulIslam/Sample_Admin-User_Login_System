<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="container">
            <div class="row">
            <a href="" class=" col-3 btn btn-primary" style="margin-bottom:20px;">Waiting List</a>
            </div>
        
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>

                     
                        <tbody>
                            @foreach($users as $user) 
                            <tr>
                                
                                <td>{{$user['id']}}</td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td><a href="" class="btn btn-success">Accept</a>
                                <!--<a href="{{url('/delete/'.$user->id)}}" class="btn btn-danger">Deny</a></td>-->

                            </tr>
                            @endforeach
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
