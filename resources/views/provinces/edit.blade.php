@extends('master')
@section('title', 'Provinces-List')
@section('content')

@section('head-script')
    @parent
@endsection

<div class="bd-example">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <hr>
            <div class="container">
                <div class="container-fluid">
                    @include('partials.flash-message')
                </div>
                <form method="post" action="{{route('provinces.update', $provinces->province_id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-outline-secondary" href="{{ route('provinces.index') }}">
                                <i class="bi bi-box-arrow-left"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">province_id </label>
                                <input disabled type="text" class="form-control" id="province_id" name="province_id" aria-describedby="emailHelp" value="{{$provinces->province_id}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">province_name</label>
                                <input type="text" class="form-control" id="province_name" name="province_name" aria-describedby="emailHelp" value="{{$provinces->province_name}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">created-at</label>
                                <input disabled type="text" class="form-control" id="created_at" aria-describedby="emailHelp" value="{{$provinces->created_at}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">updated-at</label>
                                <input disabled type="text" class="form-control" id="updated_at" aria-describedby="emailHelp" value="{{$provinces->updated_at}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">deleted-at</label>
                                <input disabled type="text" class="form-control" id="deleted_at" aria-describedby="emailHelp" value="{{$provinces->deleted_at}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">  
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="bi bi-archive"></i>
                            Save
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
</div>

@include('provinces.add')

@section('footer-script')
    @parent
@endsection

@section('page-script')
    <script>
        $(document).ready(function () {
            oTable = $('#dataTable').DataTable({
                "dom": '<"top">rt<"bottom"pi><"clear">',
                "order": [[3, "desc"], [4, "desc"], [5, "desc"]]
            });

            $('#searchSubmit').on('click', function () {
                //alert($("#myInputTextField").val());
                oTable.search($("#myInputTextField").val()).draw();
            });

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()

            $('#add-province-modal').on('hidden.bs.modal', function (e) {
                $(this)
                    .find("input,textarea")
                    .val('')
                    .end()
                    .find("input[type=checkbox], input[type=radio]")
                    .prop("checked", "")
                    .end();
            })
        });
    </script>
@endsection

@endsection