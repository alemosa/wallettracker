<?php
echo "<script src="http://api.arabianchain.org/v1/dbix/js/bower_components/web3/dist/web3.min.js"></script>
<script type="text/javascript">
            var url = document.URL
            var addrs = url.substr(url.lastIndexOf('=') + 1)
            console.log(addrs);
            var web3 = new Web3(new Web3.providers.HttpProvider("https://rpc1.arabiancha.in"));
            var balance = web3.eth.getBalance(addrs);
            var n_tx = web3.eth.getTransactionCount(addrs);
            var address = {
                "balance":balance,
                "n_tx":n_tx
            };
            document.body.innerHTML = "<pre>" + JSON.stringify(address, null, 4) + "<pre>";
        </script>";



?>
