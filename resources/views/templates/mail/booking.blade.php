
<table role="presentation" width="600" cellpadding="0" cellspacing="0"
    style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <tr>
        <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">

            <h2 style="margin:0 0 20px; color:#111827; font-size:22px;">
                New Appointment Booking
            </h2>

            <table role="presentation" width="100%" cellpadding="8" cellspacing="0"
                style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:6px;">

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Name:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['name'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Email:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['email'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Phone:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['phone'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Service:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['service'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Appointment Date & Time:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ !empty($mailData['date']) ? date('d M Y, h:i A', strtotime($mailData['date'])) : 'Not selected' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Comment:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['comment'] ?? 'No comment provided' }}
                    </td>
                </tr>

            </table>

            <p style="margin:20px 0 0; color:#6b7280; font-size:13px;">
                This appointment request was submitted through the website booking form.
            </p>

        </td>
    </tr>

</table>
