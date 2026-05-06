<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Quote</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background:#f8f8f2; color:#111827;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f8f2; padding:24px 0;">
        <tr>
            <td align="center">
                <table width="680" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:14px; overflow:hidden; border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:#640100; color:#ffffff; padding:22px 28px;">
                            <h2 style="margin:0; font-size:22px;">Accurate Signs &amp; Engraving</h2>
                            <p style="margin:6px 0 0; font-size:14px;">Your instant quote is ready</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:28px;">
                            <p style="margin:0 0 14px;">Hi {{ $quote['customer_name'] ?? 'there' }},</p>

                            <p style="margin:0 0 18px; line-height:1.6;">
                                Thank you for using our Instant Quote Portal. Please find your quote summary below.
                            </p>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; margin-bottom:20px;">
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Quote Number</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right; font-weight:bold;">
                                        {{ $quote['quote_number'] ?? 'N/A' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Job Name</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $quote['job_name'] ?? '—' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Total Pieces</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right;">
                                        {{ $quote['total_pieces'] ?? 0 }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #e5e7eb; color:#6b7280;">Product Total</td>
                                    <td style="border-bottom:1px solid #e5e7eb; text-align:right; font-weight:bold;">
                                        ${{ number_format((float)($quote['product_total'] ?? 0), 2) }}
                                    </td>
                                </tr>
                            </table>

                            @if(!empty($quote['items']) && is_array($quote['items']))
                                <h3 style="margin:0 0 12px; font-size:16px;">Quote Items</h3>

                                <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; font-size:13px;">
                                    <thead>
                                        <tr style="background:#f9fafb;">
                                            <th align="left">#</th>
                                            <th align="left">Qty</th>
                                            <th align="left">Size</th>
                                            <th align="left">Text</th>
                                            <th align="right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($quote['items'] as $index => $item)
                                            <tr>
                                                <td style="border-bottom:1px solid #e5e7eb;">{{ $index + 1 }}</td>
                                                <td style="border-bottom:1px solid #e5e7eb;">{{ $item['qty'] ?? 1 }}</td>
                                                <td style="border-bottom:1px solid #e5e7eb;">{{ $item['size_label'] ?? '—' }}</td>
                                                <td style="border-bottom:1px solid #e5e7eb;">{{ $item['text_content'] ?? '—' }}</td>
                                                <td style="border-bottom:1px solid #e5e7eb;" align="right">
                                                    ${{ number_format((float)($item['subtotal'] ?? 0), 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                            <p style="margin:22px 0 0; font-size:13px; line-height:1.6; color:#6b7280;">
                                This is an instant quote, not a confirmed order. Pricing may be reviewed before production.
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