<table role="presentation" width="600" cellpadding="0" cellspacing="0"
    style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <tr>
        <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">

            <table role="presentation" width="100%" cellpadding="8" cellspacing="0"
                style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:6px;">

                <tr>
                    <td width="120"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Name:
                    </td>

                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['name'] }}
                    </td>
                </tr>

                <tr>
                    <td width="120"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Email:
                    </td>

                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['email'] }}
                    </td>
                </tr>

                <tr>
                    <td width="120"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Phone:
                    </td>

                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['phone'] }}
                    </td>
                </tr>

                <tr>
                    <td width="120"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        Designation:
                    </td>

                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['designation'] }}
                    </td>
                </tr>

                <tr>
                    <td width="120"
                        style="font-weight:bold; color:#111827; border:1px solid #e5e7eb;">
                        CV:
                    </td>

                    <td style="color:#374151; border:1px solid #e5e7eb;">
                        {{ $mailData['origname'] }}
                    </td>
                </tr>

            </table>

            <p style="margin:20px 0 0; color:#6b7280; font-size:13px;">
                The applicant's CV is attached to this email.
            </p>

        </td>
    </tr>

</table>