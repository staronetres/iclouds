@extends('admin.master')

@section('content')


  <div class="page-content">
         <div class="row">

         
         @include('admin.sidebar')
       
         <div class="col-md-6">
            <h1>View Categories</h1>
         <div class="row">
       

          


           <table class="table table-striped">
             <tr>
               <td>Category ID</td>
               <td>Category Name</td>
               <td>Status</td>
             </tr>
            @foreach($cats as $cat)
              <tr>
               <td>{{$cat->id}}</td>
               <td>{{$cat->name}}</td>
               <td>{{$cat->status}}</td>
             </tr>

              @endforeach


           </table>

      
         </div>
        </div>
        </div>
        </div><!--/span-->

@endsection
