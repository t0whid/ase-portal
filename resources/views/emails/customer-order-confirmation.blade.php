<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background:#f8f8f2; color:#111827;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f8f2; padding:24px 0;">
        <tr>
            <td align="center">
                <table width="720" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:14px; overflow:hidden; border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:#640100; color:#ffffff; padding:22px 28px;">
                            <h2 style="margin:0; font-size:22px;">Order Confirmation</h2>
                            <p style="margin:6px 0 0; font-size:14px;">Order #{{ $order->order_number }}</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:28px;">
                            <p style="margin:0 0 14px;">Hi {{ $order->customer_name }},</p>

                            <p style="margin:0 0 18px; line-height:1.6;">
                                Thank you for your order. We have received your order and it is now ready for review by our production team.
                            </p>

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
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Total Pieces</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->total_pieces }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Shipping Method</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $order->shipping_method ?: '—' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Grand Total</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right; font-weight:bold;">
                                        ${{ number_format((float)$order->grand_total, 2) }}
                                    </td>
                                </tr>
                            </table>

                            <h3 style="margin:0 0 12px; font-size:16px;">Order Items</h3>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; font-size:13px;">
                                <thead>
                                    <tr style="background:#f9fafb;">
                                        <th align="left">#</th>
                                        <th align="left">Qty</th>
                                        <th align="left">Size</th>
                                        <th align="left">Color</th>
                                        <th align="left">Text</th>
                                        <th align="right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->line_no }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->qty }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->size_label ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;">{{ $item->color ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb; white-space:pre-line;">{{ $item->text_content ?: '—' }}</td>
                                            <td style="border-bottom:1px solid #e5e7eb;" align="right">
                                                ${{ number_format((float)$item->subtotal, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p style="margin:22px 0 0; font-size:13px; line-height:1.6; color:#6b7280;">
                                If anything looks incorrect, please contact us as soon as possible.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#f9fafb; padding:16px 28px; font-size:12px; color:#6b7280;">
                            Accurate Signs &amp; Engraving
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>