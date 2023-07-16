<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Trips List</h4>
                        {{--                        <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p>--}}
                    </div>
                    <a href="{{route('trips.create')}}" class="btn btn-primary add-list"><i
                            class="las la-plus mr-3"></i>Add Trip</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-table table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Driver</th>
                            <th>Vehicle</th>
                            <th>Seats Available</th>
                            <th>Expected Arrival Time</th>
                            <th>Expected Departure Time</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="ligth-body">
                        @foreach($trips as $trip)
                            <tr>
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{$trip->id}}</td>
                                <td>{{$trip->driver_id}}</td>
                                <td>{{$trip->vehicle->registration_number}}</td>
                                <td>{{$trip->seats_available}}</td>
                                <td>{{$trip->expected_arrival_time}}</td>
                                <td>{{$trip->expected_departure_time}}</td>
                                <td>{{$trip->created_at}}</td>
                                <td>{{$trip->updated_at}}</td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                           title="" data-original-title="View"
                                           href="#"><i class="ri-eye-line mr-0"></i></a>
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                           title="" data-original-title="Edit"
                                           href="#"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                           title="" data-original-title="Delete"
                                           href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
