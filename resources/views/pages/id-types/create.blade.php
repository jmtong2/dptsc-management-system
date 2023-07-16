<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add ID Type</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('id-types.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Type *</label>
                                        <input type="text" class="form-control" placeholder="Enter Type" id="idType" name="type" data-errors="Please Enter ID Types Type." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('type'))
                                            <div class="text-red">{{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add ID Type</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
