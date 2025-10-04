@include('layouts.header', ['title' => 'Stock Balance'])
@include('layouts.sidebar')

<section id="content">
@include('layouts.navbar')

<main>
    <div class="head-title">
        <div class="left">
            <h1>Material Stock Balance</h1>
            <ul class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a class="active" href="#">Stock Balance</a></li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Current Stock List</h3>
                <i class="bx bx-search"></i>
                <i class="bx bx-filter"></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>No-Lot</th>
                        <th>Material Name</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Item Number</th>
                        <th>Search Name</th>
                        <th>Balance</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>PIC</th>
                        <th>Leader Confirmation</th>
                        <th>Take-Out</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $index => $row)
                        <tr>
                            {{-- Gunakan firstItem() agar nomor tetap berurutan antar halaman --}}
                            <td>{{ $data->firstItem() + $index }}</td>
                            <td>{{ $row->type }}</td>
                            <td>{{ $row->no_lot }}</td>
                            <td>{{ $row->material_name }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->created_at ? $row->created_at->format('d-m-Y') : '-' }}</td>
                            <td>{{ $row->item_number }}</td>
                            <td>{{ $row->search_name }}</td>
                            <td>{{ $row->balance }}</td>
                            <td>
                                @php
                                    $category = strtolower($row->category);
                                    $badgeCategory = match ($category) {
                                        'over-material' => 'badge-danger',
                                        'pending' => 'badge-warning',
                                        default => 'badge-secondary',
                                    };
                                @endphp
                                <span class="badge {{ $badgeCategory }}">
                                    {{ ucwords($row->category) }}
                                </span>
                            </td>
                            <td>
                                @php
                                    $status = strtolower($row->status);
                                    $badgeClass = match ($status) {
                                        'ok' => 'badge-success',
                                        'ng' => 'badge-warning',
                                        default => 'badge-secondary',
                                    };
                                @endphp
                                <span class="badge {{ $badgeClass }}">
                                    {{ strtoupper($row->status) }}
                                </span>
                            </td>
                            <td>{{ $row->pic }}</td>
                            <td>{{ $row->leader_confirmation }}</td>
                            <td>
                                <button class="btn-take" title="Take Out">
                                    <i class="bx bx-export"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="15" class="text-center">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- 🔹 Tambahkan pagination --}}
            <div class="pager" style="margin-top: 15px; text-align: right;">
                @if ($data->onFirstPage())
                    <span class="btn btn-secondary disabled">← Prev</span>
                @else
                    <a href="{{ $data->previousPageUrl() }}" class="btn btn-primary">← Prev</a>
                @endif

                <span class="mx-2">Page {{ $data->currentPage() }} of {{ $data->lastPage() }}</span>

                @if ($data->hasMorePages())
                    <a href="{{ $data->nextPageUrl() }}" class="btn btn-primary">Next →</a>
                @else
                    <span class="btn btn-secondary disabled">Next →</span>
                @endif
            </div>

        </div>
    </div>
</main>
</section>

@include('layouts.footer')