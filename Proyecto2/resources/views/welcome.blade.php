<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <script type="text/javascript">
function basebanco()
{
var request = require('request');
var cheerio = require('cheerio');

    request({url:'https://www.bnventadebienes.com/properties/index?ProvinceId=2&MustBeNegotiable=False&MustBeDiscounted=False&MustBeHighlighted=False&MustBeNovelty=False&MustBeInTheCoast=False&MustBeForDevelopers=False&pageNumber=2',encoding:'binary'}, function(err,resp,body){
        if(!err&& resp.statusCode==200){
           
            var $= cheerio.load(body);
            $('.site-secondary-bg-color5 .row .col-xs-7 ').each( function(){
                var titulo= $(this).find('.row h3').html();
                var precio= $(this).find('.price span').html();
                var lugar2= $(this).find('.row .col-property-location h4');

                

               
            });
        }
    });

}
</script>


<form>
<input type="button" 
onclick="basebanco()" 
value="Activar">
</form>


    </body>
</html>
