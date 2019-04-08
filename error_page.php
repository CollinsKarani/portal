<?php

switch ($_SERVER["REDIRECT_STATUS"]){
   case 400:
   $title= "400 Bad Request";
   $description = "The request can not be processed due to bad sysntax";
   break;
   case 401:
   $title = "401 unauthorized";
   $description = "The request has failed authentication";
   break;

   case 403:
   $title = "403 Forbidden";
   $description = "The server refuses to response to the request.";
   break;

   case 404:
   $title = "404 Not Found";
   $description = "The resource requested can not be found.";
     break;


   case 500:
   $title = "500 Internal Server Error";
   $description = "There was an error which doesn't fir any other message";
   break;

   case 504:
   $title = "504 Gateway Timeout";
   $description = "The server was acting as a proxy and the request time out.";
   break;

   }




}


?>