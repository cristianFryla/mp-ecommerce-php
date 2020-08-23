<?php 
echo '<h1>TU PAGO FUE EXITOSO</h1>';


echo '<h2>Id Método: ' . $_GET['PREFERENCE_ID'] . '</h2>';
echo '<h2>Ref Externa: ' . $_GET['EXTERNAL_REFERENCE'] . '</h2>';
echo '<h2>Payment ID: ' . $_GET['PAYMENT_ID'] . '</h2>';



/*https://www.tusitio.com/success.php?collection_id=[PAYMENT_ID]&collection_status=approved&external_ref
erence=[EXTERNAL_REFERENCE]&payment_type=credit_card&preference_id=[PREFERENCE_ID]&site_id
=[SITE_ID]&processing_mode=aggregator&merchant_account_id=null*/