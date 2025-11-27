<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#D6D2C4" style="font-family: Arial, sans-serif; padding: 20px;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-radius: 8px; overflow: hidden;">
                
                <tr>
                    <td align="center" bgcolor="#A37247" style="padding: 20px;">
                        <img src="{{$logoUrl}}" alt="Logo Royal" width="150" style="display: block;">
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 30px; color: #371200;">
                        <h1 style="font-size: 22px; color: #4F2900; margin-bottom: 15px;">Detalles de la Nueva Solicitud</h1>
                        <p>Has recibido una nueva solicitud de visita a través del formulario de contacto.</p>

                        <hr style="border: none; border-top: 1px solid #A37247; margin: 20px 0;">

                        <ul style="list-style: none; padding: 0; margin: 15px 0;">
                            <li><strong>Nombre:</strong> <span style="color: #A37247;">{{ $data['name'] }}</span></li>
                            <li><strong>Correo:</strong> <span style="color: #A37247;">{{ $data['email'] }}</span></li>
                            <li><strong>Teléfono:</strong> <span style="color: #A37247;">{{ $data['phone'] ?? 'N/A' }}</span></li>
                            <li><strong>Motivo de contacto:</strong> <span style="color: #A37247;">{{ $data['subject'] ?? 'N/A' }}</span></li>
                        </ul>

                        <h3 style="margin-top: 20px;">Mensaje:</h3>
                        <p>{{ $data['message'] ?? 'El usuario no incluyó un mensaje detallado.' }}</p>
                    </td>
                </tr>

                <tr>
                    <td align="center" bgcolor="#C8AF77" style="padding: 15px; font-size: 12px; color: #371200;">
                        © {{ date('Y') }} Royal. Todos los derechos reservados.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
