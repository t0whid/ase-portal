<!DOCTYPE html>
<html>
<head>
    <title>Webgility Export Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, Arial, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(100, 1, 0, 0.08), transparent 30%),
                #f8fafc;
            color: #111827;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e5e7eb;
            padding: 18px 24px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .topbar-inner {
            max-width: 1220px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .brand h1 {
            margin: 0;
            font-size: 25px;
            letter-spacing: -0.04em;
        }

        .brand p {
            margin: 6px 0 0;
            color: #6b7280;
            font-size: 14px;
        }

        .logout-btn {
            border: 1px solid #e5e7eb;
            background: #ffffff;
            padding: 11px 15px;
            border-radius: 12px;
            cursor: pointer;
            color: #374151;
            font-weight: 800;
            transition: 0.2s ease;
        }

        .logout-btn:hover {
            border-color: #640100;
            color: #640100;
            box-shadow: 0 8px 22px rgba(15, 23, 42, 0.07);
        }

        .page {
            max-width: 1220px;
            margin: 0 auto;
            padding: 24px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 18px;
        }

        .stat-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 18px;
            box-shadow: 0 10px 28px rgba(15, 23, 42, 0.045);
        }

        .stat-card span {
            display: block;
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .stat-card strong {
            font-size: 28px;
            letter-spacing: -0.04em;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            box-shadow: 0 12px 34px rgba(15, 23, 42, 0.05);
            overflow: hidden;
        }

        .filters {
            padding: 18px;
            border-bottom: 1px solid #e5e7eb;
            display: grid;
            grid-template-columns: 1.6fr 0.75fr 0.75fr auto;
            gap: 12px;
            align-items: end;
            background: #ffffff;
        }

        label {
            display: block;
            font-size: 13px;
            color: #374151;
            font-weight: 900;
            margin-bottom: 7px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 13px;
            border-radius: 12px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            background: #ffffff;
            outline: none;
            transition: 0.2s ease;
        }

        input:focus,
        select:focus {
            border-color: #640100;
            box-shadow: 0 0 0 4px rgba(100, 1, 0, 0.08);
        }

        .filter-actions {
            display: flex;
            gap: 9px;
            align-items: center;
            justify-content: flex-start;
        }

        .search-btn,
        .clear-link {
            height: 43px;
            border-radius: 12px;
            padding: 0 17px;
            font-size: 14px;
            font-weight: 900;
            cursor: pointer;
            white-space: nowrap;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s ease;
        }

        .search-btn {
            border: 0;
            background: #640100;
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(100, 1, 0, 0.18);
        }

        .search-btn:hover {
            background: #4d0100;
            transform: translateY(-1px);
        }

        .clear-link {
            border: 1px solid #e5e7eb;
            background: #f9fafb;
            color: #374151;
        }

        .clear-link:hover {
            background: #fff1f1;
            border-color: #f0b6b6;
            color: #640100;
            transform: translateY(-1px);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1080px;
        }

        th {
            text-align: left;
            padding: 13px 16px;
            background: #f9fafb;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            border-bottom: 1px solid #e5e7eb;
            white-space: nowrap;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: top;
            font-size: 14px;
        }

        tbody tr {
            transition: 0.16s ease;
        }

        tbody tr:hover {
            background: #fcfcfd;
        }

        .serial {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: #f3f4f6;
            color: #374151;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            border: 1px solid #e5e7eb;
        }

        .order-no {
            font-weight: 900;
            color: #111827;
        }

        .sub {
            color: #6b7280;
            font-size: 13px;
            margin-top: 4px;
            line-height: 1.4;
        }

        .badge {
            display: inline-flex;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 900;
            background: #f3f4f6;
            color: #374151;
            white-space: nowrap;
        }

        .badge-paid {
            background: #ecfdf5;
            color: #047857;
        }

        .badge-pending {
            background: #fffbeb;
            color: #b45309;
        }

        .badge-failed,
        .badge-cancelled {
            background: #fef2f2;
            color: #b91c1c;
        }

        .badge-completed {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 13px;
            border-radius: 11px;
            background: #111827;
            color: white;
            text-decoration: none;
            font-weight: 900;
            white-space: nowrap;
            font-size: 13px;
            transition: 0.2s ease;
        }

        .download-btn:hover {
            background: #640100;
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(100, 1, 0, 0.16);
        }

        .empty {
            padding: 42px;
            text-align: center;
            color: #6b7280;
            font-weight: 700;
        }

        .pagination {
            padding: 16px;
            border-top: 1px solid #f1f5f9;
        }

        .pagination nav {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .pagination a,
        .pagination span {
            padding: 8px 11px;
            border: 1px solid #e5e7eb;
            border-radius: 9px;
            text-decoration: none;
            color: #374151;
            background: #ffffff;
            font-size: 13px;
        }

        .pagination span[aria-current="page"] span {
            background: #640100;
            color: white;
            border-color: #640100;
        }

        @media (max-width: 900px) {
            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .filters {
                grid-template-columns: 1fr;
            }

            .filter-actions {
                width: 100%;
            }

            .search-btn,
            .clear-link {
                flex: 1;
            }

            .topbar-inner {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 520px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .page {
                padding: 14px;
            }

            .topbar {
                padding: 16px 14px;
            }

            .brand h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>
    <div class="topbar">
        <div class="topbar-inner">
            <div class="brand">
                <h1>Webgility CSV Export</h1>
                <p>Search orders and download per-order CSV files for Webgility / QuickBooks import.</p>
            </div>

            <form method="POST" action="{{ route('webgility.export.logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <main class="page">
        <section class="stats">
            <div class="stat-card">
                <span>Total Orders</span>
                <strong>{{ number_format($stats['total_orders']) }}</strong>
            </div>

            <div class="stat-card">
                <span>Paid Orders</span>
                <strong>{{ number_format($stats['paid_orders']) }}</strong>
            </div>

            <div class="stat-card">
                <span>Pending Payments</span>
                <strong>{{ number_format($stats['pending_orders']) }}</strong>
            </div>

            <div class="stat-card">
                <span>Submitted Orders</span>
                <strong>{{ number_format($stats['submitted_orders']) }}</strong>
            </div>
        </section>

        <section class="panel">
            <form class="filters" method="GET" action="{{ route('webgility.export.index') }}">
                <div>
                    <label>Search order</label>
                    <input
                        type="text"
                        name="q"
                        value="{{ $filters['q'] ?? '' }}"
                        placeholder="Order no, quote no, customer, email, company, job name"
                    >
                </div>

                <div>
                    <label>Payment Status</label>
                    <select name="payment_status">
                        <option value="">All</option>
                        <option value="paid" @selected(($filters['payment_status'] ?? '') === 'paid')>Paid</option>
                        <option value="pending" @selected(($filters['payment_status'] ?? '') === 'pending')>Pending</option>
                        <option value="failed" @selected(($filters['payment_status'] ?? '') === 'failed')>Failed</option>
                    </select>
                </div>

                <div>
                    <label>Order Status</label>
                    <select name="order_status">
                        <option value="">All</option>
                        <option value="submitted" @selected(($filters['order_status'] ?? '') === 'submitted')>Submitted</option>
                        <option value="processing" @selected(($filters['order_status'] ?? '') === 'processing')>Processing</option>
                        <option value="completed" @selected(($filters['order_status'] ?? '') === 'completed')>Completed</option>
                        <option value="cancelled" @selected(($filters['order_status'] ?? '') === 'cancelled')>Cancelled</option>
                    </select>
                </div>

                <div>
                    <label>&nbsp;</label>
                    <div class="filter-actions">
                        <button class="search-btn" type="submit">Search</button>
                        <a class="clear-link" href="{{ route('webgility.export.index') }}">Clear</a>
                    </div>
                </div>
            </form>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order</th>
                            <th>Customer</th>
                            <th>Company / Job</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Order Status</th>
                            <th>Date</th>
                            <th>CSV</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($orders as $index => $order)
                            <tr>
                                <td>
                                    <span class="serial">
                                        {{ ($orders->currentPage() - 1) * $orders->perPage() + $index + 1 }}
                                    </span>
                                </td>

                                <td>
                                    <div class="order-no">{{ $order->order_number ?: ('ORDER-' . $order->id) }}</div>

                                    @if ($order->quote_number)
                                        <div class="sub">Quote: {{ $order->quote_number }}</div>
                                    @endif
                                </td>

                                <td>
                                    <strong>{{ $order->customer_name ?: 'N/A' }}</strong>

                                    @if ($order->customer_email)
                                        <div class="sub">{{ $order->customer_email }}</div>
                                    @endif

                                    @if ($order->customer_phone)
                                        <div class="sub">{{ $order->customer_phone }}</div>
                                    @endif
                                </td>

                                <td>
                                    <strong>{{ $order->company ?: 'N/A' }}</strong>
                                    <div class="sub">{{ $order->job_name ?: 'No job name' }}</div>
                                </td>

                                <td>
                                    <strong>{{ $order->items_count }}</strong>
                                    <div class="sub">
                                        Tags: {{ $order->total_tags ?? 0 }} · Pieces: {{ $order->total_pieces ?? 0 }}
                                    </div>
                                </td>

                                <td>
                                    <strong>${{ number_format((float) ($order->grand_total ?? 0), 2) }}</strong>
                                    <div class="sub">
                                        Shipping: ${{ number_format((float) ($order->shipping_total ?? 0), 2) }}
                                    </div>
                                </td>

                                <td>
                                    @php
                                        $paymentStatus = strtolower($order->payment_status ?? 'pending');
                                    @endphp

                                    <span class="badge badge-{{ $paymentStatus }}">
                                        {{ ucfirst($paymentStatus) }}
                                    </span>

                                    @if ($order->payment_method)
                                        <div class="sub">{{ $order->payment_method }}</div>
                                    @endif
                                </td>

                                <td>
                                    @php
                                        $orderStatus = strtolower($order->order_status ?? 'submitted');
                                    @endphp

                                    <span class="badge badge-{{ $orderStatus }}">
                                        {{ ucfirst($orderStatus) }}
                                    </span>
                                </td>

                                <td>
                                    {{ optional($order->created_at)->format('M d, Y') }}
                                    <div class="sub">{{ optional($order->created_at)->format('h:i A') }}</div>
                                </td>

                                <td>
                                    <a
                                        class="download-btn"
                                        href="{{ route('webgility.export.download', $order->id) }}"
                                    >
                                        Download CSV
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <div class="empty">
                                        No orders found for this search.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $orders->links() }}
            </div>
        </section>
    </main>
</body>
</html>