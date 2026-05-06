<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Production Order</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background:#f8f8f2; color:#111827;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f8f2; padding:24px 0;">
        <tr>
            <td align="center">
                <table width="760" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:14px; overflow:hidden; border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:#640100; color:#ffffff; padding:22px 28px;">
                            <h2 style="margin:0; font-size:22px;">New Production Order</h2>
                            <p style="margin:6px 0 0; font-size:14px;">Order #{{ $order->order_number }}</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:28px;">
                            <h3 style="margin:0 0 12px; font-size:16px;">Order Information</h3>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; margin-bottom:22px;">
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Order Number</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right; font-weight:bold;">
                                        {{ $order->order_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Job Name</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->job_name ?: '—' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Customer</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->customer_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Company</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->company ?: '—' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Email</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->customer_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Phone</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->customer_phone ?: '—' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Total Pieces</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->total_pieces }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Proof Approved</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->proof_approved ? 'Yes' : 'No' }}
                                    </td>
                                </tr>
                            </table>

                            <h3 style="margin:0 0 12px; font-size:16px;">Shipping Address</h3>

                            @php
                                $shipping = $order->shipping_address ?? [];
                            @endphp

                            <p style="margin:0 0 22px; line-height:1.6;">
                                {{ $shipping['street'] ?? '—' }}<br>
                                {{ $shipping['city'] ?? '' }} {{ $shipping['state'] ?? '' }} {{ $shipping['zip'] ?? '' }}<br>
                                Shipping: {{ $order->shipping_method ?: '—' }}
                            </p>

                            <h3 style="margin:0 0 12px; font-size:16px;">Production Items</h3>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; font-size:13px;">
                                <thead>
                                    <tr style="background:#f9fafb;">
                                        <th align="left">#</th>
                                        <th align="left">Qty</th>
                                        <th align="left">Size</th>
                                        <th align="left">Color</th>
                                        <th align="left">Holes</th>
                                        <th align="left">Text</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->line_no }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->qty }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->size_label ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->color ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->holes ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb; white-space:pre-line;">{{ $item->text_content ?: '—' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p style="margin:22px 0 0; font-size:13px; line-height:1.6; color:#6b7280;">
                                Please review the order details before production.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#f9fafb; padding:16px 28px; font-size:12px; color:#6b7280;">
                            Internal Production Notification
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>