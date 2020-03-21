@extends('app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="clearfix">
                <span>Laravel - jQuery CRUD</span>
                <a class="btn btn-success tbn-sm pull-right" onclick="create()">Add New</a>
            </div>
        </div>
    </div>
    
    {{-- data listing table --}}
    <table class="table table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    {{-- data listing table --}}
    
    {{-- modal --}}
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true" >&times</button>
                    <h4 class="modal-title"></h4>
                </div>
                {{-- modal-header --}}
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control input-sm">
                    </div>
                </div>
                {{-- modal-body --}}
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary btnSave" onclick="store()" data-dismiss="modal">Save</button>
                    <button class="btn btn-primary btnUpdate" onclick="update()" data-dismiss="modal">Update</button>
                </div>
            </div>
            {{-- modal-content --}}
        </div>
        {{-- modal-dialog --}}
    </div>



    <script>
        var adminUrl = '';
        var _modal = $('#modal');
        var btnSave = $('.btnSave');
        var btnUpdate = $('.btnUpdate');

        $.ajaxSetup({
            headers:{'X-CSRF-Token': }
        })

        function getRecords(){
            $.get(adminUrl + '/contacts/data')
                .success(funtcion (data){
                    var html = '';
                    data.forEach(data => {
                        html += '<tr>'
                        html += '<td>' + row.id '</td>'
                        html += '<td>' + row.name '</td>'
                        html += '<td>' + row.email '</td>'
                        html += '<td>' + row.phone '</td>'
                        html += '<td>'
                        html += '<button  type="button" class="btn btn-xs btn-warning btnEdit title="Edit Record">Edit</button>'
                        html += '<button  type="button" class="btn btn-xs btn-danger btnDelete title="Delete Record" data-id="' + row.id + '" >Delete</button>'
                        html += '<td>'
                        html += '</tr>'
                    })
                    $('table tbody').html(html)
                })
        }/* get record function */
        getRecords()

        function reset(){
            _modal.find('input').each(function(){
                $(this).val(null)
            })
        }

    </script>
@endsection
