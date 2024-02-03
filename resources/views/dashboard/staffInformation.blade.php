@extends('dashboard.layout.main')

@section('staff')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h2">Staff Information</h5>
  </div>

  <!-- main content -->
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <a href="{{ route('exportStaff') }}" class="btn btn-success">Export Data</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Import Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>No Telefon</th>
                </tr>
                @foreach ($staff as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phoneNum }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
   
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('importStaff') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-group">
                    <input type="file" name="file" required="required">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </div>
            </form>
            </div>
        </div>  
      
     
</div>


@endsection


