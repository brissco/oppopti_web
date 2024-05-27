<!DOCTYPE html>
<html>
<head>
    <title>Votre Nouveau Compte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        h1 {
            color: #007bff;
        }

        .details-compte {
            border: 1px solid #007bff;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 20px;
        }

        .details-compte strong {
            color: #007bff;
        }

        .appel-a-laction {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .appel-a-laction:hover {
            background-color: #0056b3;
        }

        .signature {
            color: #007bff;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="details-compte">
        <h1>Votre Nouveau Compte</h1>
        <p>Bonjour <?php echo e($first_name); ?> <?php echo e($last_name); ?>,</p>
        <p>Votre compte a été créé avec succès sur notre site Mixmodashop. Voici vos nouvelles informations de compte :</p>

        <p><strong>Nom :</strong> <?php echo e($first_name); ?> <?php echo e($last_name); ?></p>
        <p><strong>Email :</strong> <?php echo e($email); ?></p>
        <p><strong>Téléphone :</strong> <?php echo e($phone); ?></p>
        <p><strong>Mot de passe :</strong> <?php echo e($password); ?></p>

        <p>Vous pouvez maintenant vous connecter avec ces informations et profiter de notre site.</p>

        <p>Cordialement,</p>
        <p class="signature">L'équipe du site</p>
    </div>

    <p class="appel-a-laction">
        <a href="<?php echo e(route('login.form')); ?>" style="color: #fff; text-decoration: none;">
            Se Connecter
        </a>
    </p>
</body>
</html>
<?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/new_infos_user.blade.php ENDPATH**/ ?>