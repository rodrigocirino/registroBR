<?php

#  Copyright (C) 2013 Registro.br. All rights reserved.
# 
# Redistribution and use in source and binary forms, with or without
# modification, are permitted provided that the following conditions are
# met:
# 1. Redistribution of source code must retain the above copyright
#    notice, this list of conditions and the following disclaimer.
# 2. Redistributions in binary form must reproduce the above copyright
#    notice, this list of conditions and the following disclaimer in the
#    documentation and/or other materials provided with the distribution.
# 
# THIS SOFTWARE IS PROVIDED BY REGISTRO.BR ``AS IS AND ANY EXPRESS OR
# IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
# WARRANTIE OF FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO
# EVENT SHALL REGISTRO.BR BE LIABLE FOR ANY DIRECT, INDIRECT,
# INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
# BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
# OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
# ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
# TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
# USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
# DAMAGE.

# $Id: example.php 71 2013-01-14 21:12:59Z mendelson $

  require "Avail.php";

  function check_domain_availability($fqdn, $parameters) {
    $client = new AvailClient();
    $client->setParam($parameters);
    $response = $client->send_query($fqdn);
    return $response;
  }

  $atrib = array(
    "lang"        => 0,            # EN (PT = 1)
    "server"      => SERVER_ADDR,
    "port"        => SERVER_PORT,
    "cookie_file" => COOKIE_FILE,
    "ip"          => "",
    "suggest"     => 0,            # No domain suggestions
  );

  $fqdn = "www.exemplo.com.br";
  $domain_info = check_domain_availability($fqdn, $atrib);
  
  echo "Status do dom&iacute;nio '{$fqdn}': <br /><br />";
  echo nl2br($domain_info);

?>
