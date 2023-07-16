<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Driver</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('drivers.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('name'))
                                            <div class="text-red">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactNumber">Contact Number *</label>
                                        <input type="text" class="form-control" placeholder="Enter Contact Number" id="contactNumber" name="contact_number" data-errors="Please Enter Contact Number." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('contact_number'))
                                            <div class="text-red">{{ $errors->first('contact_number') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Driver</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
