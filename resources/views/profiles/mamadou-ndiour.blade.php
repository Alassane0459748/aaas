<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil - Mamadou Ndiour</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #fff;
            width: 550px; /* AUGMENTÉ */
            padding: 40px; /* AUGMENTÉ */
            border-radius: 16px; /* PLUS ARRONDI */
            box-shadow: 0 6px 16px rgba(0,0,0,0.14);
            text-align: center;
        }

        .photo {
            width: 270px;  /* AUGMENTÉ */
            height: 270px; /* AUGMENTÉ */
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 25px;
            border: 5px solid #e5e7eb; /* Bordure un peu plus épaisse */
        }

        h2 {
            margin: 0;
            font-size: 28px; /* AUGMENTÉ */
            color: #333;
        }

        .info {
            margin-top: 25px;
            text-align: left;
            font-size: 18px; /* AUGMENTÉ */
            color: #444;
        }

        .info p {
            margin: 10px 0;
        }

        .info a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }

        .info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">

    {{-- Photo enregistrée dans public/img --}}
    <img src="{{ asset('img/se.jpeg') }}" class="photo" alt="Photo">

    <h2>Mamadou Ndiour</h2>

    <div class="info">
        <p><strong>📞 Tel :</strong> +221 77 173 91 97</p>
        <p><strong>📧 Mail :</strong> sg@aaas.com</p>
        <p><strong>🔗 LinkedIn :</strong>
            <a href="https://www.linkedin.com/in/mamadou-ndiour-119291100" target="_blank">
                Voir le profil
            </a>
        </p>
    </div>

</div>

</body>
</html>
