<x-master>
    @section('main')
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>ADMIN</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <style>
                /* Status badge styling */
                .status-badge {
                    display: inline-block;
                    padding: 0.25rem 0.75rem;
                    border-radius: 9999px;
                    font-size: 0.75rem;
                    font-weight: 500;
                }

                .status-pending {
                    background-color: #fef3c7;
                    color: #92400e;
                }

                .status-complete {
                    background-color: #dcfce7;
                    color: #166534;
                }

                .date-range {
                    display: flex;
                    flex-direction: column;
                    font-size: 0.875rem;
                }

                .date-label {
                    font-weight: 500;
                    color: #374151;
                }

                .action-btn {
                    padding: 0.25rem 0.5rem;
                    border-radius: 0.25rem;
                    margin-right: 0.25rem;
                }
            </style>
        </head>

        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search...">
                        <button class="btn btn-primary d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.442 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-md-4 text-end">
                        <a class="btn btn-success" href="{{ route('ordres.create') }}">Nouveau Ordre de Mission</a>
                    </div>
                </div>
            </div>
            </div>
            <x-tableCard :orders="$orders">
                <thead style="position: sticky; top: 0; z-index: 1;">
                    <tr class="text-center">
                        <th class="col-3">Staff Name</th>
                        <th class="col-2">Destination <i class="bi bi-geo-alt me-1 text-muted"></i></th>
                        <th class="col-3">Subject</th>
                        <th>Reimbursement Status</th>
                        <th class="col-2">Date Period</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="text-center">
                            <td>
                                <div class="fw-semibold">{{ $order->utilisateur->prenom }} {{ $order->utilisateur->nom }}
                                </div>
                            </td>
                            <td>

                                {{ $order->destination }}
                            </td>
                            <td class="text-start" style="font-size: 0.9rem;">
                                <div style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $order->objectif }}
                                </div>
                            </td>
                            <td>
                                <span
                                    class="status-badge {{ $order->etatRemboursement == 'Completed' ? 'status-complete' : 'status-pending' }}">
                                    {{ $order->etatRemboursement }}
                                </span>
                            </td>
                            <td>
                                <div class="date-range">
                                    <span><span class="date-label">From:</span> {{ $order->dateDebut }}</span>
                                    <span><span class="date-label">To:</span> {{ $order->dateFin }}</span>
                                </div>
                            </td>
                            <form action="{{ route('ordres.edit', $order->id) }}" method="get">
                                @csrf
                                <td>
                                    <button class="btn btn-sm btn-primary action-btn" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </td>
                            </form>
                            <form action="{{ route('ordres.destroy', $order->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td>
                                    <button class="btn btn-sm btn-danger action-btn" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>


            </x-tableCard>

        </body>

        </html>
    @endsection
</x-master>
