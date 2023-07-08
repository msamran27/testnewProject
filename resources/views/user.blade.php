@extends('layouts.app')
@section('content')
    <section class="membership-section">
        <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Post-title</th>
                                <th>Post-content</th>
                                <th>Comment-content</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($posts)
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>@foreach ($post->comments as $item)
                                           {{ $item->content }} <br>
                                        @endforeach</td>


                                    </tr>
                                @endforeach
                            @else
                                <p>No users found.</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        let table = new DataTable('#myTable', {
            responsive: true
        });
    </script>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
@endsection
