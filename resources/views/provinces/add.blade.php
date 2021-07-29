<!-- add province modal -->
<div class="modal fade modal-xl" id="add-province-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding Province</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{route('provinces.store')}}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Mã tỉnh thành</label>
                            <input placeholder="Nhập mã..." type="text" class="form-control" id="province_id"
                                   name="province_id">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Tên tỉnh thành</label>
                            <input placeholder="Nhập tên tỉnh thành..." type="text" class="form-control"
                                   id="province_name" name="province_name">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Trạng thái hoạt động</label>
                            <select class="form-select" id="province_status" name="province_status" required>
                                <option selected value="1">Hoạt động</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end of add province modal -->
