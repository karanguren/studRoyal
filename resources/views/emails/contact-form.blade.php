<div>
    <h1>Detalles de la Nueva Solicitud</h1>
    <p>Has recibido una nueva solicitud de visita a través del formulario de contacto.</p>
    
    <hr>

    <ul>
        <li><strong>Nombre:</strong> {{ $data['name'] }}</li>
        <li><strong>Correo:</strong> {{ $data['email'] }}</li>
        <li><strong>Teléfono:</strong> {{ $data['phone'] ?? 'N/A' }}</li>
        <li><strong>Motivo de contacto:</strong> {{ $data['subject'] ?? 'N/A' }}</li>
    </ul>

    <h3>Mensaje:</h3>
    <p>{{ $data['message'] ?? 'El usuario no incluyó un mensaje detallado.' }}</p>
</div>