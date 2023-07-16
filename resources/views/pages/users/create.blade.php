<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" data-toggle="validator" method="post">
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
                                        <input type="text" class="form-control" placeholder="Enter Name" value="{{old('name')}}" id="name" name="name" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('name'))
                                            <div class="text-red">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="email" value="{{old('email')}}" name="email" data-errors="Please Enter Email" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('email'))
                                            <div class="text-red">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" data-errors="Please Enter Password" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('password'))
                                            <div class="text-red">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add User</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
