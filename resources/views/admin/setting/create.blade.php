@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row py-4">
        <div class="col-sm-6">
            <h1 class="m-0">Setting</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a style="float: right" href="{{route('setting.edit')}}" role="button" class="btn btn-primary">Update</a></li>
            <li class="breadcrumb-item active"><a style="float: right" href="{{route('admin')}}" role="button" class="btn btn-primary">Back</a></li>
          </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row justify-content-md-center mt-3">
        <div class="card-header col-12 col-md-10 col-md-offset-1">
            <!-- /.card-header -->
            <div class="card-body p-0">
                <!-- form start -->
                <form role="form" action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @include('admin.include.error')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Site Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter Site Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Contact E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="contact@email.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Site Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo">
                                            <label class="custom-file-label" for="logo">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="copyright">Copyright Link</label>
                                <input type="text" name="whatsapp" class="form-control" id="copyright"
                                    placeholder="Copy@right url">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" id="facebook"
                                        placeholder="facebook url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" id="twitter"
                                        placeholder="twitter url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin"
                                        placeholder="linkedin url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" id="instagram"
                                        placeholder="instagram url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telegram">Telegram</label>
                                    <input type="text" name="telegram" class="form-control" id="telegram"
                                        placeholder="telegram url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="whatsapp">What's App</label>
                                    <input type="text" name="whatsapp" class="form-control" id="whatsapp"
                                        placeholder="what's app url">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" cols="" rows="3"
                                        placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->

        </div>
    </div>


</div><!-- /.container-fluid -->
@endsection


@section('jsSection')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
@endsection