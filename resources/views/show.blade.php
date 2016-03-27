@extends('main')

@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($contracts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                合同列表
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>合同</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($contracts as $contract)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $contract->contractnumber }}</div>
                                <div>{{ $contract->contractname }}</div>
                            </td>

                            <td>
                                <!-- TODO: Delete Button -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection