<?PHP
    use App\Models\Category;
    use Illuminate\Support\Facades\Http;

	function convertUsdToXaf()
	{
		if (auth()->check()) {
			try {
				// Décommentez les lignes suivantes pour utiliser l'API de taux de change.
				// $response = Http::get('https://v6.exchangerate-api.com/v6/682ef7b795912a8cb9a1c909/pair/USD/XAF');
				// $data = $response->json();
				// return $data['conversion_rate'];
				return 650; // Valeur simulée pour les besoins de l'exemple.
			} catch (\Exception $e) {
				// Gestion des erreurs si la requête échoue
				Log::error('Erreur lors de la récupération du taux de change USD/XAF : ' . $e->getMessage());
				return null; // Retourne null si une erreur se produit
			}
		} else {
			// Gérer le cas où l'utilisateur n'est pas authentifié
			// throw new \Exception("Accès non autorisé, utilisateur non authentifié.");
		}
	}

    $amount = convertUsdToXaf();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle Commande Reçue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        h1 {
            color: #ff6600;
        }

        .details-commande {
            border: 1px solid #ff6600;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 20px;
        }

        .details-commande strong {
            color: #ff6600;
        }

        .appel-a-laction {
            background-color: #ff6600;
            color: #fff;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .appel-a-laction:hover {
            background-color: #ff8533;
        }

        .signature {
            color: #ff6600;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="details-commande">
        <h1>Nouvelle Commande Reçue</h1>
        <p>Bonjour Administrateur,</p>
        <p>Une nouvelle commande a été passée sur le site e-commerce. Voici les détails de la commande :</p>

        <p><strong>Nom du Client :</strong> <?php echo e($first_name); ?> <?php echo e($last_name); ?></p>
        <p><strong>Email du Client :</strong> <?php echo e($email); ?></p>
        <p><strong>Téléphone du Client :</strong> <?php echo e($phone); ?></p>
        <p><strong>Pays :</strong> <?php echo e($country); ?></p>
        <p><strong>Adresse de Livraison :</strong> <?php echo e($address1); ?>, <?php echo e($address2); ?></p>
        <p><strong>Code Postal :</strong> <?php echo e($post_code); ?></p>
        <p><strong>Méthode de Paiement :</strong> <?php echo e($payment_method); ?></p>
        <p><strong>Numéro de Commande :</strong> <?php echo e($order_number); ?></p>
        <p><strong>Montant Total :</strong> <?php echo e($total_amount * $amount); ?> <?php echo e($currency); ?></p>

        <p>Veuillez traiter cette nouvelle commande dès que possible.</p>

        <p>Cordialement,</p>
        <p class="signature">L'équipe du site e-commerce</p>
    </div>

    <p class="appel-a-laction">
        <a href="<?php echo e(route('user.order.show', ['id' => $id])); ?>" style="color: #fff; text-decoration: none;">
            Voir les Détails de la Commande
        </a>
    </p>
</body>
</html>
<?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/commande_email.blade.php ENDPATH**/ ?>