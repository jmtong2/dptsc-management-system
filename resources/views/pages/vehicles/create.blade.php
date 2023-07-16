<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Vehicle</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('vehicles.store')}}" method="post" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="registration_number">Registration Number *</label>
                                        <input type="text" class="form-control" placeholder="Enter Registration No."
                                               value="{{old('registration_number')}}"
                                               id="registration_number" name="registration_number"
                                               data-errors="Please Enter Registration No." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('registration_number'))
                                            <div class="text-red">{{ $errors->first('registration_number') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="capacity">Capacity *</label>
                                        <input type="number" min="1" class="form-control"
                                               value="{{old('capacity')}}"
                                               placeholder="Enter Capacity" id="capacity" name="capacity"
                                               data-errors="Please Enter Capacity" required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('capacity'))
                                            <div class="text-red">{{ $errors->first('capacity') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehicle_type_id">Vehicle Type *</label>
                                        <select id="vehicle_type_id" name="vehicle_type_id" class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Vehicle Type</option>
                                            @foreach($vehicleTypes as $vehicleType)
                                                <option @if($vehicleType->id == old('vehicle_type_id')) selected @endif value="{{$vehicleType->id}}">{{$vehicleType->type}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('vehicle_type_id'))
                                            <div class="text-red">{{ $errors->first('vehicle_type_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Vehicle Type</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
