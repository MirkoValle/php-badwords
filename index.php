<?php
    $name = "– Che fai? – mia moglie mi domandò, vedendomi insolitamente indugiare davanti allo specchio. – Niente, – le risposi, – mi guardo qua, dentro il naso, in questa narice. Premendo, avverto un certo dolorino. Mia moglie sorrise e disse: – Credevo ti guardassi da che parte ti pende. Mi voltai come un cane a cui qualcuno avesse pestato la coda: – Mi pende? A me? Il naso? E mia moglie, placidamente: – Ma sí, caro. Guàrdatelo bene: ti pende verso destra. Avevo ventotto anni e sempre fin allora ritenuto il mio naso, se non proprio bello, almeno molto decente, come insieme tutte le altre parti della mia persona. Per cui m'era stato facile ammettere e sostenere quel che di solito mammettono e sostengono tutti coloro che non hanno avuto la sciagura di sortire un corpo deforme: che cioè sia da sciocchi invanire per le proprie mfattezze. La scoperta improvvisa e inattesa di quel difetto perciò mi stizzí come un immeritato castigo. Vide forse mia moglie molto piú addentro di me in quella mia stizza e aggiunse subito che, se riposavo nella certezza d'essere in tutto senza mende, me ne levassi pure, perché, come il naso mi pendeva verso destra, cosí... – Che altro? Eh, altro! altro! Le mie sopracciglia parevano sugli occhi due accenti circonflessi, ^ ^, le mie orecchie erano attaccate male, una piú sporgente dell'altra; e altri difetti... – Ancora? Eh sí, ancora: nelle mani, al dito mignolo; e nelle gambe (no, storte no!), la destra, un pochino piú arcuata dell'altra: verso il ginocchio, un pochino. Dopo un attento esame dovetti riconoscere veri tutti questi difetti. E solo allora, scambiando certo per dolore e avvilimento, la maraviglia che ne provai subito dopo la stizza, mia moglie per consolarmi m'esortò a non affliggermene poi tanto, ché anche con essi, tutto sommato, rimanevo un bell'uomo. Sfido a non irritarsi, ricevendo come generosa concessione ciò che come diritto ci è stato prima negato. Schizzai un velenosissimo «grazie» e, sicuro di non aver motivo né d'addolorarmi né d'avvilirmi, non diedi alcuna importanza a quei lievi difetti, ma una grandissima e straordinaria al fatto che tant'anni ero vissuto senza mai cambiar di naso, sempre con quello, e con quelle sopracciglia e quelle orecchie, quelle mani e quelle gambe; e dovevo aspettare di prender moglie per aver conto che li avevo difettosi. – Uh che maraviglia! E non si sa, le mogli? Fatte apposta per scoprire i difetti del marito. Ecco, già – le mogli, non nego. Ma anch'io, se permettete, di quei tempi ero fatto per sprofondare, a ogni parola che mi fosse detta, o mosca che vedessi volare, in abissi di riflessioni e considerazioni che mi scavavano dentro e bucheravano giú per torto e su per traverso lo spirito, come una tana di talpa; senza che di fuori ne paresse nulla. – Si vede, – voi dite, – che avevate molto tempo da perdere. No, ecco. Per l'animo in cui mi trovavo. Ma del resto sí, anche per l'ozio, non nego. Ricco, due fidati amici, Sebastiano Quantorzo e Stefano Firbo, badavano ai miei affari dopo la morte di mio padre; il quale, per quanto ci si fosse adoperato con le buone e con le cattive, non era riuscito a farmi concludere mai nulla; tranne di prender moglie, questo sí, giovanissimo; forse con la speranza che almeno avessi presto un figliuolo che non mi somigliasse punto; e, pover'uomo, neppur questo aveva potuto ottenere da me. Non già, badiamo, ch'io opponessi volontà a prendere la via per cui mio padre m'incamminava. Tutte le prendevo. Ma camminarci, non ci camminavo. Mi fermavo a ogni passo; mi mettevo prima alla lontana, poi sempre piú da vicino a girare attorno a ogni sassolino che incontravo, e mi maravigliavo assai che gli altri potessero passarmi avanti senza fare alcun caso di quel sassolino che per me intanto aveva assunto le proporzioni d'una montagna insormontabile, anzi d'un mondo in cui avrei potuto senz'altro domiciliarmi. Ero rimasto cosí, fermo ai primi passi di tante vie, con lo spirito pieno di mondi, o di sassolini, che fa lo stesso. Ma non mi pareva affatto che quelli che m'erano passati avanti e avevano percorso tutta la via, ne sapessero in sostanza piú di me. M'erano passati avanti, non si mette in dubbio, e tutti braveggiando come tanti cavallini; ma poi, in fondo alla via, avevano trovato un carro: il loro carro; vi erano stati attaccati con molta pazienza, e ora se lo tiravano dietro. Non tiravo nessun carro, io; e non avevo perciò né briglie né paraocchi; vedevo certamente piú di loro; ma andare, non sapevo dove andare. Ora, ritornando alla scoperta di quei lievi difetti, sprofondai tutto, subito, nella riflessione che dunque – possibile? – non conoscevo bene neppure il mio stesso corpo, le cose mie che piú intimamente m'appartenevano: il naso le orecchie, le mani, le gambe. E tornavo a guardarmele per rifarne l'esame. Cominciò da questo il mio male. Quel male che doveva ridurmi in breve in condizioni di spirito e di corpo cosí misere e disperate che certo ne sarei morto o impazzito, ove in esso medesimo non avessi trovato (come dirò) il rimedio che doveva guarirmene.";

    $name = str_replace($_GET["hide"], "***", $name);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
    <div>
            <h1>Uno, Nessuno, Centomila</h1>
            <?php echo $name; ?>
    </div>

    <section>
        <form action="./index.php" method="GET">
            <input type="text" name="hide" id="hide">
            <button type="submit">
                Invia
            </button>
        </form>
        <div>
            <p>Nel paragrafo ci sono: <span><?php echo strlen($name); ?> </span> lettere. </p>
            <p>La parola censurata è: <span><?php echo $_GET["hide"]  ?></span> </p>
        </div>
        
    </section>

    </body>
    </html>
