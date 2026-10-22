
<table role="presentation" width="600" cellpadding="0" cellspacing="0"
    style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <tr>
        <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">

            <h2 style="margin:0 0 20px; color:#111827; font-size:22px;">
                New Lead from Contact Us Page
            </h2>

            <table role="presentation" width="100%" cellpadding="8" cellspacing="0"
                style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:6px;">

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Full Name:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['fullname'] ?? 'N/A' }}
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
                        Subject:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['subject'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td width="150"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Message:
                    </td>
                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['message'] ?? 'No message provided' }}
                    </td>
                </tr>

            </table>

            <p style="margin:20px 0 0; color:#6b7280; font-size:13px;">
                This contact request was submitted through the website booking form.
            </p>

        </td>
    </tr>

</table>
