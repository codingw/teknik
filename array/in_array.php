<?php
$payment_method = array(
                        "Transfer",
                        "Cash",
                        "Kredit",
                        "Payment Gateway"
                    );
$var = "Cash";
if (in_array("$var",$payment_method))
  {
  echo "Metode Pembayaran Tersedia";
  }
else
  {
  echo "Metode Pembayaran <b>Tidak Tersedia</b>";
  }
?> 