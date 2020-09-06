 @extends('adminlte::page')

@section('title', 'Designations')

@section('content_header')
    <h1>Designations</h1>
@stop

@section('content')
   <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-success" data-toggle="add_modal">Add New</button>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
            
                      <th style="width: 40%">
                         Name
                      </th>
                      <th style="width: 20%">
                          Status
                      </th>
                      <th>
                          Options
                      </th>
                     
                  </tr>
              </thead>
             <tbody>
                 <tr>
                     <td>Val1</td>
                     <td>val2</td>
                     <td>val3</td>
                 </tr>
             </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
 
 
 