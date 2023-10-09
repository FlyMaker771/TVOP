<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $header; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Homepage</a></li>
                        <li class="breadcrumb-item active"><?= $header; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $cardtitle; ?></h3>
                <div class="form-group">
                    <br>
                    <br>
                    <div class="input-group">
                        <div class="custom-file">
                            <select class="form-input" name="pemisah" id="pemisah" style="width: 20%; height: 75%; color: dimgrey;" required>
                                <option value="">- Pemisah Column -</option>
                                <option value=",">,</option>
                                <option value=";">;</option>
                            </select>
                        </div>
                        <!-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div> -->
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="uploadFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file (Format Harus .csv)</label>
                        </div>
                        <!-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                    Total Data
                </div> -->
                <!-- /.card-footer-->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>